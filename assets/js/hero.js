(function () {
  "use strict";

  var showcase = document.querySelector("[data-hero-showcase]");
  if (!showcase) return;

  var pizzas = Array.prototype.slice.call(showcase.querySelectorAll("[data-pizza]"));
  var total = pizzas.length;
  if (!total) return;

  var indexEl = showcase.querySelector("[data-hero-index]");
  var nameEl = showcase.querySelector("[data-hero-name]");
  var innerEl = showcase.querySelector(".hero-product-inner");

  var reduceMotion = window.matchMedia("(prefers-reduced-motion: reduce)").matches;
  var gsapReady = typeof gsap !== "undefined";

  /*
   * The hero is a physical product showcase: each pizza travels
   * RIGHT (wait) -> CENTER (hold) -> LEFT (leave), while the next pizza enters
   * from the right as the current one leaves. Nothing hides via opacity.
   */
  var ENTER = 1.2;
  var HOLD = 2.8;
  var EXIT = 1.2;

  var WAIT = { xPercent: 118, x: 0, y: 0, z: -520, scale: 0.72, rotateY: -30, rotateZ: 6 };
  var CENTER = { xPercent: 0, x: 0, y: 0, z: 0, scale: 1, rotateY: 0, rotateZ: 0 };
  var OUT = { xPercent: -118, x: 0, y: 0, z: -520, scale: 0.72, rotateY: 30, rotateZ: -6 };

  function pad(n) {
    return n < 10 ? "0" + n : String(n);
  }

  function setLabel(i) {
    var nextIndex = pad(i + 1) + " / " + pad(total);
    var nextName = pizzas[i].getAttribute("data-name") || "";
    var indexChanged = indexEl && indexEl.textContent !== nextIndex;
    var nameChanged = nameEl && nameEl.textContent !== nextName;
    if (!indexChanged && !nameChanged) return;

    if (!gsapReady || !innerEl) {
      if (indexEl) indexEl.textContent = nextIndex;
      if (nameEl) nameEl.textContent = nextName;
      return;
    }

    gsap.to(innerEl, {
      yPercent: -110,
      duration: 0.3,
      ease: "power2.in",
      onComplete: function () {
        if (indexEl) indexEl.textContent = nextIndex;
        if (nameEl) nameEl.textContent = nextName;
        gsap.set(innerEl, { yPercent: 110 });
        gsap.to(innerEl, { yPercent: 0, duration: 0.45, ease: "power2.out" });
      }
    });
  }

  if (reduceMotion || !gsapReady) {
    return;
  }

  var inView = true;
  var held = false;

  function syncPlayback() {
    var shouldHold = document.hidden || !inView;
    if (shouldHold === held) return;
    held = shouldHold;
    if (held) {
      gsap.globalTimeline.pause();
    } else {
      gsap.globalTimeline.resume();
    }
  }

  function enterPizza(i) {
    var pizza = pizzas[i];
    pizza.classList.remove("is-waiting");
    pizza.classList.add("is-entering");

    gsap.fromTo(pizza, WAIT, {
      xPercent: CENTER.xPercent,
      x: CENTER.x,
      y: CENTER.y,
      z: CENTER.z,
      scale: CENTER.scale,
      rotateY: CENTER.rotateY,
      rotateZ: CENTER.rotateZ,
      duration: ENTER,
      ease: "power2.out",
      force3D: true,
      onComplete: function () {
        pizza.classList.remove("is-entering");
        pizza.classList.add("is-active");
        setLabel(i);
        gsap.delayedCall(HOLD, function () {
          exitPizza(i);
        });
      }
    });
  }

  function exitPizza(i) {
    var pizza = pizzas[i];
    pizza.classList.remove("is-active");
    pizza.classList.add("is-exiting");

    gsap.to(pizza, {
      xPercent: OUT.xPercent,
      x: OUT.x,
      y: OUT.y,
      z: OUT.z,
      scale: OUT.scale,
      rotateY: OUT.rotateY,
      rotateZ: OUT.rotateZ,
      duration: EXIT,
      ease: "power2.in",
      force3D: true,
      onComplete: function () {
        pizza.classList.remove("is-exiting");
        pizza.classList.add("is-waiting");
        gsap.set(pizza, WAIT);
      }
    });

    enterPizza((i + 1) % total);
  }

  pizzas.forEach(function (pizza) {
    pizza.classList.add("is-waiting");
  });
  gsap.set(pizzas, WAIT);

  document.addEventListener("visibilitychange", syncPlayback);
  if ("IntersectionObserver" in window) {
    var observer = new IntersectionObserver(function (entries) {
      entries.forEach(function (entry) {
        inView = entry.isIntersecting;
        syncPlayback();
      });
    }, { threshold: 0.1 });
    observer.observe(showcase);
  }

  enterPizza(0);
})();
