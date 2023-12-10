"use strict";

function _typeof(obj) { if (typeof Symbol === "function" && typeof Symbol.iterator === "symbol") { _typeof = function _typeof(obj) { return typeof obj; }; } else { _typeof = function _typeof(obj) { return obj && typeof Symbol === "function" && obj.constructor === Symbol && obj !== Symbol.prototype ? "symbol" : typeof obj; }; } return _typeof(obj); }

!function (t, e) {
  "object" == (typeof exports === "undefined" ? "undefined" : _typeof(exports)) ? module.exports = e(require("spin.js")) : "function" == typeof define && define.amd ? define(["spin"], e) : t.Ladda = e(t.Spinner);
}(void 0, function (t) {
  "use strict";

  function e(t) {
    if ("undefined" == typeof t) return void console.warn("Ladda button target must be defined.");

    if (/ladda-button/i.test(t.className) || (t.className += " ladda-button"), t.hasAttribute("data-style") || t.setAttribute("data-style", "zoom-in"), !t.querySelector(".ladda-label")) {
      var e = document.createElement("span");
      e.className = "ladda-label", u(t, e);
    }

    var n,
        a = t.querySelector(".ladda-spinner");
    a || (a = document.createElement("span"), a.className = "ladda-spinner"), t.appendChild(a);
    var r,
        i = {
      start: function start() {
        return n || (n = o(t)), t.setAttribute("disabled", ""), t.setAttribute("data-loading", ""), clearTimeout(r), n.spin(a), this.setProgress(0), this;
      },
      startAfter: function startAfter(t) {
        return clearTimeout(r), r = setTimeout(function () {
          i.start();
        }, t), this;
      },
      stop: function stop() {
        return t.removeAttribute("disabled"), t.removeAttribute("data-loading"), clearTimeout(r), n && (r = setTimeout(function () {
          n.stop();
        }, 1e3)), this;
      },
      toggle: function toggle() {
        return this.isLoading() ? this.stop() : this.start(), this;
      },
      setProgress: function setProgress(e) {
        e = Math.max(Math.min(e, 1), 0);
        var n = t.querySelector(".ladda-progress");
        0 === e && n && n.parentNode ? n.parentNode.removeChild(n) : (n || (n = document.createElement("div"), n.className = "ladda-progress", t.appendChild(n)), n.style.width = (e || 0) * t.offsetWidth + "px");
      },
      enable: function enable() {
        return this.stop(), this;
      },
      disable: function disable() {
        return this.stop(), t.setAttribute("disabled", ""), this;
      },
      isLoading: function isLoading() {
        return t.hasAttribute("data-loading");
      },
      remove: function remove() {
        clearTimeout(r), t.removeAttribute("disabled", ""), t.removeAttribute("data-loading", ""), n && (n.stop(), n = null);

        for (var e = 0, a = d.length; a > e; e++) {
          if (i === d[e]) {
            d.splice(e, 1);
            break;
          }
        }
      }
    };
    return d.push(i), i;
  }

  function n(t, e) {
    for (; t.parentNode && t.tagName !== e;) {
      t = t.parentNode;
    }

    return e === t.tagName ? t : void 0;
  }

  function a(t) {
    for (var e = ["input", "textarea", "select"], n = [], a = 0; a < e.length; a++) {
      for (var r = t.getElementsByTagName(e[a]), i = 0; i < r.length; i++) {
        r[i].hasAttribute("required") && n.push(r[i]);
      }
    }

    return n;
  }

  function r(t, r) {
    r = r || {};
    var i = [];
    "string" == typeof t ? i = s(document.querySelectorAll(t)) : "object" == _typeof(t) && "string" == typeof t.nodeName && (i = [t]);

    for (var o = 0, u = i.length; u > o; o++) {
      !function () {
        var t = i[o];

        if ("function" == typeof t.addEventListener) {
          var s = e(t),
              u = -1;
          t.addEventListener("click", function (e) {
            var i = !0,
                o = n(t, "FORM");
            if ("undefined" != typeof o) if ("function" == typeof o.checkValidity) i = o.checkValidity();else for (var d = a(o), l = 0; l < d.length; l++) {
              "" === d[l].value.replace(/^\s+|\s+$/g, "") && (i = !1), "checkbox" !== d[l].type && "radio" !== d[l].type || d[l].checked || (i = !1), "email" === d[l].type && (i = /^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/.test(d[l].value));
            }
            i && (s.startAfter(1), "number" == typeof r.timeout && (clearTimeout(u), u = setTimeout(s.stop, r.timeout)), "function" == typeof r.callback && r.callback.apply(null, [s]));
          }, !1);
        }
      }();
    }
  }

  function i() {
    for (var t = 0, e = d.length; e > t; t++) {
      d[t].stop();
    }
  }

  function o(e) {
    var n,
        a,
        r = e.offsetHeight;
    0 === r && (r = parseFloat(window.getComputedStyle(e).height)), r > 32 && (r *= .8), e.hasAttribute("data-spinner-size") && (r = parseInt(e.getAttribute("data-spinner-size"), 10)), e.hasAttribute("data-spinner-color") && (n = e.getAttribute("data-spinner-color")), e.hasAttribute("data-spinner-lines") && (a = parseInt(e.getAttribute("data-spinner-lines"), 10));
    var i = .2 * r,
        o = .6 * i,
        s = 7 > i ? 2 : 3;
    return new t({
      color: n || "#fff",
      lines: a || 12,
      radius: i,
      length: o,
      width: s,
      zIndex: "auto",
      top: "auto",
      left: "auto",
      className: ""
    });
  }

  function s(t) {
    for (var e = [], n = 0; n < t.length; n++) {
      e.push(t[n]);
    }

    return e;
  }

  function u(t, e) {
    var n = document.createRange();
    n.selectNodeContents(t), n.surroundContents(e), t.appendChild(e);
  }

  var d = [];
  return {
    bind: r,
    create: e,
    stopAll: i
  };
});
//# sourceMappingURL=ladda.dev.js.map
