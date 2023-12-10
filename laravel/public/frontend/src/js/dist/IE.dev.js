"use strict";

function getBrowserName() {
  var ua = navigator.userAgent,
      tem,
      M = ua.match(/(opera|chrome|safari|firefox|msie|trident(?=\/))\/?\s*(\d+)/i) || [];

  if (/trident/i.test(M[1])) {
    tem = /\brv[ :]+(\d+)/g.exec(ua) || [];
    return "IE";
  }

  if (M[1] === "Chrome") {
    tem = ua.match(/\bOPR\/(\d+)/);

    if (tem != null) {
      return {
        name: "Opera",
        version: tem[1]
      };
    }
  }

  M = M[2] ? [M[1], M[2]] : [navigator.appName, navigator.appVersion, "-?"];

  if ((tem = ua.match(/version\/(\d+)/i)) != null) {
    M.splice(1, 1, tem[1]);
  }

  return M.join(" ");
}

$(document).ready(function () {
  var browserName = getBrowserName();

  if (browserName == "IE") {
    $("body").addClass("IEBrowserCSS");
  } else if (browserName.toLowerCase().indexOf("safari") == 0 || $(window).width() <= 768) {
    $("body").addClass("SafariCSS");
    $("body").removeClass("IEBrowserCSS");
  } else {
    $("body").removeClass("IEBrowserCSS");
  }

  jQuery.event.handle = jQuery.event.dispatch;
});
//# sourceMappingURL=IE.dev.js.map
