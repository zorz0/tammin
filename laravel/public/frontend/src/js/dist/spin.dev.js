"use strict";

function _typeof(obj) { if (typeof Symbol === "function" && typeof Symbol.iterator === "symbol") { _typeof = function _typeof(obj) { return typeof obj; }; } else { _typeof = function _typeof(obj) { return obj && typeof Symbol === "function" && obj.constructor === Symbol && obj !== Symbol.prototype ? "symbol" : typeof obj; }; } return _typeof(obj); }

!function (t, e) {
  "object" == (typeof exports === "undefined" ? "undefined" : _typeof(exports)) ? module.exports = e() : "function" == typeof define && define.amd ? define(e) : t.Spinner = e();
}(void 0, function () {
  "use strict";

  function t(t, e) {
    var i,
        o = document.createElement(t || "div");

    for (i in e) {
      o[i] = e[i];
    }

    return o;
  }

  function e(t) {
    for (var e = 1, i = arguments.length; i > e; e++) {
      t.appendChild(arguments[e]);
    }

    return t;
  }

  function i(t, e, i, o) {
    var n = ["opacity", e, ~~(100 * t), i, o].join("-"),
        r = .01 + i / o * 100,
        s = Math.max(1 - (1 - t) / e * (100 - r), t),
        a = c.substring(0, c.indexOf("Animation")).toLowerCase(),
        l = a && "-" + a + "-" || "";
    return p[n] || (u.insertRule("@" + l + "keyframes " + n + "{0%{opacity:" + s + "}" + r + "%{opacity:" + t + "}" + (r + .01) + "%{opacity:1}" + (r + e) % 100 + "%{opacity:" + t + "}100%{opacity:" + s + "}}", u.cssRules.length), p[n] = 1), n;
  }

  function o(t, e) {
    var i,
        o,
        n = t.style;

    for (e = e.charAt(0).toUpperCase() + e.slice(1), o = 0; o < d.length; o++) {
      if (i = d[o] + e, void 0 !== n[i]) return i;
    }

    return void 0 !== n[e] ? e : void 0;
  }

  function n(t, e) {
    for (var i in e) {
      t.style[o(t, i) || i] = e[i];
    }

    return t;
  }

  function r(t) {
    for (var e = 1; e < arguments.length; e++) {
      var i = arguments[e];

      for (var o in i) {
        void 0 === t[o] && (t[o] = i[o]);
      }
    }

    return t;
  }

  function s(t, e) {
    return "string" == typeof t ? t : t[e % t.length];
  }

  function a(t) {
    this.opts = r(t || {}, a.defaults, f);
  }

  function l() {
    function i(e, i) {
      return t("<" + e + ' xmlns="urn:schemas-microsoft.com:vml" class="spin-vml">', i);
    }

    u.addRule(".spin-vml", "behavior:url(#default#VML)"), a.prototype.lines = function (t, o) {
      function r() {
        return n(i("group", {
          coordsize: d + " " + d,
          coordorigin: -c + " " + -c
        }), {
          width: d,
          height: d
        });
      }

      function a(t, a, l) {
        e(u, e(n(r(), {
          rotation: 360 / o.lines * t + "deg",
          left: ~~a
        }), e(n(i("roundrect", {
          arcsize: o.corners
        }), {
          width: c,
          height: o.width,
          left: o.radius,
          top: -o.width >> 1,
          filter: l
        }), i("fill", {
          color: s(o.color, t),
          opacity: o.opacity
        }), i("stroke", {
          opacity: 0
        }))));
      }

      var l,
          c = o.length + o.width,
          d = 2 * c,
          p = 2 * -(o.width + o.length) + "px",
          u = n(r(), {
        position: "absolute",
        top: p,
        left: p
      });
      if (o.shadow) for (l = 1; l <= o.lines; l++) {
        a(l, -2, "progid:DXImageTransform.Microsoft.Blur(pixelradius=2,makeshadow=1,shadowopacity=.3)");
      }

      for (l = 1; l <= o.lines; l++) {
        a(l);
      }

      return e(t, u);
    }, a.prototype.opacity = function (t, e, i, o) {
      var n = t.firstChild;
      o = o.shadow && o.lines || 0, n && e + o < n.childNodes.length && (n = n.childNodes[e + o], n = n && n.firstChild, n = n && n.firstChild, n && (n.opacity = i));
    };
  }

  var c,
      d = ["webkit", "Moz", "ms", "O"],
      p = {},
      u = function () {
    var i = t("style", {
      type: "text/css"
    });
    return e(document.getElementsByTagName("head")[0], i), i.sheet || i.styleSheet;
  }(),
      f = {
    lines: 12,
    length: 7,
    width: 5,
    radius: 10,
    rotate: 0,
    corners: 1,
    color: "#000",
    direction: 1,
    speed: 1,
    trail: 100,
    opacity: .25,
    fps: 20,
    zIndex: 2e9,
    className: "spinner",
    top: "50%",
    left: "50%",
    position: "absolute"
  };

  a.defaults = {}, r(a.prototype, {
    spin: function spin(e) {
      this.stop();
      var i = this,
          o = i.opts,
          r = i.el = n(t(0, {
        className: o.className
      }), {
        position: o.position,
        width: 0,
        zIndex: o.zIndex
      });
      o.radius + o.length + o.width;

      if (n(r, {
        left: o.left,
        top: o.top
      }), e && e.insertBefore(r, e.firstChild || null), r.setAttribute("role", "progressbar"), i.lines(r, i.opts), !c) {
        var s,
            a = 0,
            l = (o.lines - 1) * (1 - o.direction) / 2,
            d = o.fps,
            p = d / o.speed,
            u = (1 - o.opacity) / (p * o.trail / 100),
            f = p / o.lines;
        !function h() {
          a++;

          for (var t = 0; t < o.lines; t++) {
            s = Math.max(1 - (a + (o.lines - t) * f) % p * u, o.opacity), i.opacity(r, t * o.direction + l, s, o);
          }

          i.timeout = i.el && setTimeout(h, ~~(1e3 / d));
        }();
      }

      return i;
    },
    stop: function stop() {
      var t = this.el;
      return t && (clearTimeout(this.timeout), t.parentNode && t.parentNode.removeChild(t), this.el = void 0), this;
    },
    lines: function lines(o, r) {
      function a(e, i) {
        return n(t(), {
          position: "absolute",
          width: r.length + r.width + "px",
          height: r.width + "px",
          background: e,
          boxShadow: i,
          transformOrigin: "left",
          transform: "rotate(" + ~~(360 / r.lines * d + r.rotate) + "deg) translate(" + r.radius + "px,0)",
          borderRadius: (r.corners * r.width >> 1) + "px"
        });
      }

      for (var l, d = 0, p = (r.lines - 1) * (1 - r.direction) / 2; d < r.lines; d++) {
        l = n(t(), {
          position: "absolute",
          top: 1 + ~(r.width / 2) + "px",
          transform: r.hwaccel ? "translate3d(0,0,0)" : "",
          opacity: r.opacity,
          animation: c && i(r.opacity, r.trail, p + d * r.direction, r.lines) + " " + 1 / r.speed + "s linear infinite"
        }), r.shadow && e(l, n(a("#000", "0 0 4px #000"), {
          top: "2px"
        })), e(o, e(l, a(s(r.color, d), "0 0 1px rgba(0,0,0,.1)")));
      }

      return o;
    },
    opacity: function opacity(t, e, i) {
      e < t.childNodes.length && (t.childNodes[e].style.opacity = i);
    }
  });
  var h = n(t("group"), {
    behavior: "url(#default#VML)"
  });
  return !o(h, "transform") && h.adj ? l() : c = o(h, "animation"), a;
});
//# sourceMappingURL=spin.dev.js.map
