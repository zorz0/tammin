"use strict";

$("#btnYesLoginNow").click(function () {
  if (!isCaptchaVerifiedForLogin) {
    var $formser;

    if (GlobalInsuranceType == "tpl") {
      $formser = $("#form-add-owner");
    } else {
      $formser = $("#form-add-owner-comp");
    }

    $.ajax({
      type: "POST",
      url: checkCaptchaURL,
      data: $formser.serialize(),
      dataType: "json",
      traditional: true,
      success: function success(data) {
        if (data.OK == "invalidCaptcha") {
          if (GlobalInsuranceType == "tpl") {
            $("#tplPlainCaptcha").load(loadplaincaptcha, function () {
              var form = $("#form-add-owner").removeData("validator").removeData("unobtrusiveValidation");
              $.validator.unobtrusive.parse(form);
            });
            $("#tplQuoteCaptchaErrorMessage").html("<span>" + data.Error + "</span>").show();
            lrFreeQuote2.stop();

            if (lrbtnWLogin != undefined) {
              lrbtnWLogin.stop();
            }

            $("#login-popup").modal("hide");
          } else {
            $("#compPlainCaptcha").load(loadplaincaptcha, function () {
              var form = $("#form-add-owner-comp").removeData("validator").removeData("unobtrusiveValidation");
              $.validator.unobtrusive.parse(form);
            });
            $("#compQuoteCaptchaErrorMessage").html("<span>" + data.Error + "</span>").show();
            lrFreeQuote2.stop();

            if (lrbtnWLogin != undefined) {
              lrbtnWLogin.stop();
            }

            $("#login-popup").modal("hide");
          }
        } else if (data.OK == "Error") {
          $("#login-popup").modal("hide");

          if (GlobalInsuranceType == "tpl") {
            $("#tplPlainCaptcha").load(loadplaincaptcha, function () {
              var form = $("#form-add-owner").removeData("validator").removeData("unobtrusiveValidation");
              $.validator.unobtrusive.parse(form);
            });
            $("#GetQuoteErrorMessage").show().html("<span>" + data.Error + "</span>");

            if (data.DayTimeExceed) {
              var StartDateArr = data.StartDate.split("/");
              var EndDateArr = data.EndDate.split("/");
              $("#strPolicyEffectiveDate").datepicker("setEndDate", new Date(EndDateArr[2], EndDateArr[1] - 1, EndDateArr[0]));
              $("#strPolicyEffectiveDate").datepicker("setStartDate", new Date(StartDateArr[2], StartDateArr[1] - 1, StartDateArr[0]));
              $("#strPolicyEffectiveDate").datepicker("setDate", new Date(StartDateArr[2], StartDateArr[1] - 1, StartDateArr[0]));
            } else {
              console.log("failed");
            }

            lrFreeQuote2.stop();

            if (lrbtnWLogin != undefined) {
              lrbtnWLogin.stop();
            }
          } else {
            $("#compPlainCaptcha").load(loadplaincaptcha, function () {
              var form = $("#form-add-owner-comp").removeData("validator").removeData("unobtrusiveValidation");
              $.validator.unobtrusive.parse(form);
            });
            $("#Comp_GetQuoteErrorMessage").show().html("<span>" + data.Error + "</span>");

            if (data.DayTimeExceed) {
              var StartDateArr = data.StartDate.split("/");
              var EndDateArr = data.EndDate.split("/");
              $("#CompstrPolicyEffectiveDate").datepicker("setEndDate", new Date(EndDateArr[2], EndDateArr[1] - 1, EndDateArr[0]));
              $("#CompstrPolicyEffectiveDate").datepicker("setStartDate", new Date(StartDateArr[2], StartDateArr[1] - 1, StartDateArr[0]));
              $("#CompstrPolicyEffectiveDate").datepicker("setDate", new Date(StartDateArr[2], StartDateArr[1] - 1, StartDateArr[0]));
            } else {
              console.log("failed");
            }

            lrFreeQuote2.stop();

            if (lrbtnWLogin != undefined) {
              lrbtnWLogin.stop();
            }
          } //lrFreeQuote1.stop();

        } else if (data.OK == "Success") {
          $("#LoginRegisterPopup").show();
          $("#signup-content").hide();
          $("#forgot-popup").hide();
          $("#login-content").show();
          BackdropiconShow();
          $("#without-login").hide();
          isProceedWithoutLogin = false;
          isLoginWithHomePageFlow = true;
          isCaptchaVerifiedForLogin = true;
        }
      }
    });
  } else {
    $("#LoginRegisterPopup").show();
    $("#signup-content").hide();
    $("#forgot-popup").hide();
    $("#login-content").show();
    BackdropiconShow();
    $("#without-login").hide();
    isProceedWithoutLogin = false;
    isLoginWithHomePageFlow = true;
  }
});
$("#btnWithoutLogin").click(function () {
  lrbtnWLogin = Ladda.create(document.querySelector("#btnWithoutLogin"));
  lrbtnWLogin.start();
  isLoginWithHomePageFlow = true;
  isProceedWithoutLogin = true;

  if (GlobalInsuranceType == "tpl") {
    $("#form-add-owner").submit();
  } else {
    $("#form-add-owner-comp").submit();
  }
});

function BackToWithoutLoginForm() {
  $("#LoginRegisterPopup").hide();
  $("#signup-content").hide();
  $("#forgot-popup").hide();
  $("#login-content").hide();
  $("#without-login").show();
  BackdropiconShow();
}
//# sourceMappingURL=_ProceedWithoutLogin.dev.js.map
