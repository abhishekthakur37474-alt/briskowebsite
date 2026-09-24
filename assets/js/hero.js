(function () {
  "use strict";

  var showcase = document.querySelector("[data-hero-showcase]");
  if (!showcase) return;

  var stage = showcase.querySelector("[data-hero-pizzas]");
  var pizzas = Array.prototype.slice.call(showcase.querySelectorAll("[data-pizza]"));
  var indexEl = showcase.querySelector("[data-hero-index]");
  var nameEl = showcase.querySelector("[data-hero-name]");
  var specks = Array.prototype.slice.call(showcase.querySelectorAll("[data-parallax]"));
  var reduceMotion = window.matchMedia("(prefers-reduced-motion: reduce)").matches;
  var total = pizzas.length;
  var current = 0;
  var timer = null;
  var busy = false;
  var pointer = { x: 0, y: 0 };
  var target = { x: 0, y: 0 };
  var holdMs = 3800;
  var transDur = 1.45;
  var gsapReady = typeof gsap !== "undefined";
  var floatTween = null;

  var FRONT = { x: 0, y: 0, z: 0, rotationX: 0, rotationY: 0, rotationZ: 0, scale: 1 };
  var ENTER = { x: 0, y: 18, z: -420, rotationX: 0, rotationY: 0, rotationZ: 0, scale: 0.55 };
  var EXIT = { x: 0, y: 12, z: -280, rotationX: 0, rotationY: 0, rotationZ: 0, scale: 0.62 };
  var PARK = { x: 0, y: 0, z: -900, rotationX: 0, rotationY: 0, rotationZ: 0, scale: 0.2 };

  function pad(n) {
    return n < 10 ? "0" + n : String(n);
  }

  function setCopy(i) {
    if (!indexEl || !nameEl) return;
    var pizza = pizzas[i];
    var nextIndex = pad(i + 1) + " / " + pad(total);
    var nextName = pizza.getAttribute("data-name") || "";
    if (!gsapReady || reduceMotion) {
      indexEl.textContent = nextIndex;
      nameEl.textContent = nextName;
      return;
    }
    gsap.to([indexEl, nameEl], {
      y: 14,
      duration: 0.32,
      ease: "power2.in",
      onComplete: function () {
        indexEl.textContent = nextIndex;
        nameEl.textContent = nextName;
        gsap.fromTo(
          [indexEl, nameEl],
          { y: -14 },
          { y: 0, duration: 0.48, ease: "power3.out" }
        );
      }
    });
  }

  function stopFloat() {
    if (floatTween) {
      floatTween.kill();
      floatTween = null;
    }
  }

  function startFloat(el) {
    stopFloat();
    if (!gsapReady || reduceMotion || !el) return;
    floatTween = gsap.to(el, {
      y: 8,
      duration: 3.2,
      yoyo: true,
      repeat: -1,
      ease: "sine.inOut"
    });
  }

  function park(el) {
    if (!el) return;
    el.classList.remove("is-active");
    el.style.zIndex = "1";
    el.style.visibility = "hidden";
    if (gsapReady) {
      gsap.set(el, PARK);
    }
  }

  function schedule() {
    if (reduceMotion) return;
    timer = window.setTimeout(function () {
      goTo((current + 1) % total);
    }, holdMs);
  }

  function goTo(next) {
    if (busy || next === current) return;
    busy = true;
    if (timer) {
      window.clearTimeout(timer);
      timer = null;
    }

    var outgoing = pizzas[current];
    var incoming = pizzas[next];

    stopFloat();
    outgoing.classList.remove("is-active");
    incoming.classList.add("is-active");
    outgoing.style.visibility = "visible";
    incoming.style.visibility = "visible";
    outgoing.style.zIndex = "3";
    incoming.style.zIndex = "4";
    setCopy(next);

    if (!gsapReady || reduceMotion) {
      pizzas.forEach(function (el, i) {
        el.classList.toggle("is-active", i === next);
      });
      current = next;
      busy = false;
      schedule();
      return;
    }

    gsap.set(incoming, ENTER);

    var tl = gsap.timeline({
      defaults: { ease: "expo.inOut", duration: transDur, force3D: true },
      onComplete: function () {
        park(outgoing);
        incoming.style.zIndex = "5";
        gsap.set(incoming, FRONT);
        current = next;
        busy = false;
        startFloat(incoming);
        schedule();
      }
    });

    tl.to(outgoing, {
      x: EXIT.x,
      y: EXIT.y,
      z: EXIT.z,
      rotationX: EXIT.rotationX,
      rotationY: EXIT.rotationY,
      rotationZ: EXIT.rotationZ,
      scale: EXIT.scale
    }, 0);

    tl.to(incoming, {
      x: FRONT.x,
      y: FRONT.y,
      z: FRONT.z,
      rotationX: FRONT.rotationX,
      rotationY: FRONT.rotationY,
      rotationZ: FRONT.rotationZ,
      scale: FRONT.scale
    }, 0.08);

    tl.add(function () {
      park(outgoing);
    }, transDur * 0.42);
  }

  function applyParallax() {
    pointer.x += (target.x - pointer.x) * 0.07;
    pointer.y += (target.y - pointer.y) * 0.07;
    if (stage && gsapReady) {
      gsap.set(stage, {
        x: pointer.x * 8,
        y: pointer.y * 6
      });
    }
    specks.forEach(function (el) {
      var depth = parseFloat(el.getAttribute("data-parallax") || "0.1");
      el.style.transform = "translate3d(" + (pointer.x * 30 * depth) + "px," + (pointer.y * 20 * depth) + "px,0)";
    });
    window.requestAnimationFrame(applyParallax);
  }

  function onPointer(event) {
    if (!window.matchMedia("(pointer: fine)").matches) return;
    var rect = showcase.getBoundingClientRect();
    target.x = ((event.clientX - rect.left) / rect.width - 0.5) * 2;
    target.y = ((event.clientY - rect.top) / rect.height - 0.5) * 2;
    target.x = Math.max(-1, Math.min(1, target.x));
    target.y = Math.max(-1, Math.min(1, target.y));
  }

  function onLeave() {
    target.x = 0;
    target.y = 0;
  }

  function onVisibility() {
    if (document.hidden) {
      if (timer) {
        window.clearTimeout(timer);
        timer = null;
      }
      stopFloat();
    } else if (!busy) {
      startFloat(pizzas[current]);
      schedule();
    }
  }

  if (gsapReady && stage) {
    gsap.set(stage, { transformPerspective: 1600, transformStyle: "preserve-3d" });
  }

  pizzas.forEach(function (pizza, i) {
    pizza.style.opacity = "1";
    if (i === 0) {
      pizza.classList.add("is-active");
      pizza.style.zIndex = "5";
      pizza.style.visibility = "visible";
      if (gsapReady) gsap.set(pizza, FRONT);
    } else {
      pizza.classList.remove("is-active");
      pizza.style.zIndex = "1";
      pizza.style.visibility = "hidden";
      if (gsapReady) gsap.set(pizza, PARK);
    }
  });
  setCopy(0);

  if (!reduceMotion) {
    startFloat(pizzas[0]);
    schedule();
    window.requestAnimationFrame(applyParallax);
    showcase.addEventListener("pointermove", onPointer, { passive: true });
    showcase.addEventListener("pointerleave", onLeave);
    document.addEventListener("visibilitychange", onVisibility);
  }
})();
