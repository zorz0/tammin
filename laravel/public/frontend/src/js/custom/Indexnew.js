function GetHomePagePartialView() {
  var url = window.location.href;
  if (url.indexOf("/car") == -1) {
    var currentUrl;

    function gtag() {
      dataLayer.push(arguments);
    }

    if (currentCulture == "ar") {
      currentUrl = window.location.href;
      var lastChar = currentUrl.substr(currentUrl.length - 1);
      if (lastChar === "/") currentUrl = currentUrl + "car";
      else currentUrl = currentUrl + "/car";

      window.history.pushState(null, null, currentUrl);
      if (IsGoogleAnalyticsActive == "True") {
        window.dataLayer = window.dataLayer || [];
        gtag("page_path", currentUrl);
        gtag("config", "UA-83128941-1");
      }
    } else if (currentCulture === "en") {
      currentUrl = window.location.href;
      currentUrl = currentUrl.replace("/en", "/car/en");
      window.history.pushState(null, null, currentUrl);
      if (IsGoogleAnalyticsActive == "True") {
        window.dataLayer = window.dataLayer || [];
        gtag("page_path", currentUrl);
        gtag("config", "UA-83128941-1");
      }
    }
  }

  $(".banner-heading").text(carMaintitle);
  $(".banner-innerText").text(carSubtitle);

  if (homePageType !== "car") {
    $("#busyloaderHome").show();
    $("#ICLogos").html("");
    $("#StepsTobuy").html("");
    $("#WhichInsuranceToSelect").html("");
    $("#WhatAffects").html("");
    $("#Faqs").html("");
    $("#WhyTameeni").html("");
    $("#ApplicationSteps").html("");
    $("#SocialReview").html("");
    $.ajax({
      type: "POST",
      url: GetHomePagePartialViewUrl,
      dataType: "json",
      traditional: true,
      success: function (data) {
        $("#busyloaderHome").hide();
        $("#ICLogos").html(data.ICLogos);
        $("#StepsTobuy").html(data.StepsTobuy);
        $("#WhyTameeni").html(data.WhyTameeni);
        $("#WhichInsuranceToSelect").html(data.WhichInsuranceToSelect);
        $("#WhatAffects").html(data.WhatAffects);
        $("#Faqs").html(data.Faqs);
        $("#ApplicationSteps").html(data.ApplicationSteps);
        $("#SocialReview").html(data.SocialReview);
        document.title = data.Title;
        $("meta[name='description']").attr("content", data.Description);

        homePageType = "car";
      },
      errors: function (error) {
        $("#busyloaderHome").hide();
      },
    });
  }
}

function GetHomeIndexPartialView(pageType) {
  $("#busyloaderHome").show();
  $.ajax({
    type: "POST",
    url: GetHomeIndexPartialViewUrl,
    data: "pageType=" + pageType,
    dataType: "json",
    traditional: true,
    success: function (data) {
      $("#busyloaderHome").hide();
      if (pageType === "car") {
        $("#ICLogos").html(data.ICLogos);
        $("#StepsTobuy").html(data.StepsTobuy);
        $("#WhyTameeni").html(data.WhyTameeni);
        $("#WhichInsuranceToSelect").html(data.WhichInsuranceToSelect);
        $("#WhatAffects").html(data.WhatAffects);
        $("#Faqs").html(data.Faqs);
        $("#ApplicationSteps").html(data.ApplicationSteps);
        $("#SocialReview").html(data.SocialReview);
        document.title = data.Title;
        $("meta[name='description']").attr("content", data.Description);

        homePageType = "car";
      } else {
        $("#ICLogos").html(data.ICLogos);
        $("#WhyTameeni").html(data.WhyTameeni);
        $("#ApplicationSteps").html(data.ApplicationSteps);
        $("#SocialReview").html(data.SocialReview);
      }
    },
    errors: function (error) {
      $("#busyloaderHome").hide();
    },
  });
}

function OpenInsuranceTab(insuranceType) {
  $(".overlay-custom").hide();
  $(".nav-bar").removeClass("toggle");
  if (insuranceType == "TPL") $("#tpltab")[0].click();
  else $("#comptab")[0].click();
}

$(document).ready(function () {
  $("#comptab").click(function () {
    GetHomePagePartialView();
    ChangeInsuranceType("comprehensive");
    $("#tplQuoteCaptchaErrorMessage").html("");
    $("#compQuoteCaptchaErrorMessage").html("");
  });

  $("#tpltab").click(function () {
    GetHomePagePartialView();
    ChangeInsuranceType("tpl");
    $("#compQuoteCaptchaErrorMessage").html("");
    $("#tplQuoteCaptchaErrorMessage").html("");
  });

  $("#cartab").click(function () {
    GetHomePagePartialView();
  });

  if (homePageType !== "undefined" && homePageType !== "") {
    GetHomeIndexPartialView(homePageType);
  }
});

$("#btnSearchEntity").click(function () {
  var btnSearchEntity = Ladda.create(
    document.querySelector("#btnSearchEntity")
  );
  btnSearchEntity.start();
  if ($("#SelectEntity").val()) {
    $.ajax({
      type: "POST",
      url: searchEntityurl,
      data: "entityId=" + $("#SelectEntity").val(),
      dataType: "html",
      traditional: true,
      success: function (data) {
        $(".discount-logo-box").html(data).show();
        btnSearchEntity.stop();
      },
      errors: function (error) {
        btnSearchEntity.stop();
      },
    });
  } else {
    $(".discount-logo-box").html("").hide();
    btnSearchEntity.stop();
  }
});

function OpenDiscountPanel() {
  $(".overlay-custom").hide();
  $(".nav-bar").removeClass("toggle");
  $("#discountlink")[0].click();
}

$(document).on("input propertychange paste", "#CaptchaInputText", function () {
  if ($("#form-add-owner").find("#CaptchaInputText").val() != "") {
    $("#tplQuoteCaptchaErrorMessage").html("");
  }
  if ($("#form-add-owner-comp").find("#CaptchaInputText").val() != "") {
    $("#compQuoteCaptchaErrorMessage").html("");
  }
});

var compOfferInterval = setInterval(function (obj) {
  if ($(".dev-compoffer").length > 0) {
    $(".dev-compoffer").click(function (e) {
      $("#gifts-addons").modal("hide");
      OpenInsuranceTab("Comp");
      $("#CompUniqueID").focus();
    });
    clearInterval(compOfferInterval);
  }
}, 1000);
