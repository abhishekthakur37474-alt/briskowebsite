(function () {
  "use strict";

  var reduceMotion = window.matchMedia("(prefers-reduced-motion: reduce)").matches;
  var header = document.getElementById("siteHeader");
  var navCollapse = document.getElementById("primaryNav");
  var toggle = document.querySelector(".nav-toggle");

  function onScroll() {
    if (!header) return;
    if (window.scrollY > 24) {
      header.classList.add("is-scrolled");
    } else {
      header.classList.remove("is-scrolled");
    }
  }

  onScroll();
  window.addEventListener("scroll", onScroll, { passive: true });

  document.querySelectorAll('a[href^="#"]').forEach(function (link) {
    link.addEventListener("click", function (event) {
      var id = link.getAttribute("href");
      if (!id || id === "#") return;
      var target = document.querySelector(id);
      if (!target) return;
      event.preventDefault();
      target.scrollIntoView({ behavior: reduceMotion ? "auto" : "smooth", block: "start" });
      if (navCollapse && navCollapse.classList.contains("show") && window.bootstrap) {
        window.bootstrap.Collapse.getOrCreateInstance(navCollapse).hide();
      }
    });
  });

  if (toggle && navCollapse) {
    navCollapse.addEventListener("show.bs.collapse", function () {
      toggle.setAttribute("aria-label", "Close menu");
      toggle.classList.add("is-open");
      document.body.classList.add("nav-open");
    });
    navCollapse.addEventListener("hide.bs.collapse", function () {
      toggle.setAttribute("aria-label", "Open menu");
      toggle.classList.remove("is-open");
      document.body.classList.remove("nav-open");
    });
  }

  function initAos() {
    if (reduceMotion || typeof AOS === "undefined") return;
    AOS.init({
      duration: 780,
      easing: "ease-out-cubic",
      once: true,
      offset: 80,
      disable: function () {
        return window.innerWidth < 768;
      }
    });
  }



  function bindForms() {
    document.querySelectorAll(".enquiry-form").forEach(function (form) {
      form.addEventListener("submit", function (event) {
        event.preventDefault();
        var wrap = form.closest(".enquiry-wrap") || form.parentElement;
        var status = form.querySelector(".form-status");
        var button = form.querySelector('button[type="submit"]');
        var errors = form.querySelectorAll(".field-error");
        errors.forEach(function (el) {
          el.textContent = "";
          var field = form.querySelector('[name="' + el.getAttribute("data-error-for") + '"]');
          if (field) {
            field.classList.remove("is-invalid");
            field.removeAttribute("aria-invalid");
          }
        });
        if (status) status.textContent = "";

        var data = new FormData(form);
        if (button) {
          button.disabled = true;
          button.classList.add("is-loading");
        }

        fetch(form.action, {
          method: "POST",
          body: data,
          credentials: "same-origin",
          headers: { Accept: "application/json" }
        })
          .then(function (res) {
            return res.json().then(function (json) {
              return { okHttp: res.ok, json: json };
            });
          })
          .then(function (result) {
            var json = result.json || {};
            if (json.ok) {
              form.hidden = true;
              var success = wrap.querySelector(".form-success");
              if (success) {
                success.hidden = false;
                success.focus && success.setAttribute("tabindex", "-1");
                success.focus();
              }
              if (status) status.textContent = "";
              return;
            }
            var fieldErrors = json.errors || {};
            Object.keys(fieldErrors).forEach(function (key) {
              var box = form.querySelector('[data-error-for="' + key + '"]');
              var field = form.querySelector('[name="' + key + '"]');
              if (box) box.textContent = fieldErrors[key];
              if (field) {
                field.classList.add("is-invalid");
                field.setAttribute("aria-invalid", "true");
              }
            });
            var firstInvalid = form.querySelector(".is-invalid");
            if (firstInvalid) firstInvalid.focus();
            if (status) status.textContent = json.message || "Please review the form.";
          })
          .catch(function () {
            if (status) status.textContent = "Something went wrong. Please try again or chat on WhatsApp.";
          })
          .finally(function () {
            if (button) {
              button.disabled = false;
              button.classList.remove("is-loading");
            }
          });
      });
    });
  }

  document.addEventListener("DOMContentLoaded", function () {
    initAos();
    bindForms();
  });
})();
