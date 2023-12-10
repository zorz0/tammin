var l = Ladda.create(document.querySelector('#btnLoginHeader'));
$("#btnLoginHeader").click(function () {
    $("#LoginErrorMessage").hide();
});

$("#forgetPasswordDiv").click(function () {
    $("#login-popup").modal('hide');
    window.location.href = validateMobileURL;
});

$('#loginIdentityNumber').on('paste', function (e) {
    var clipboardData = e.originalEvent.clipboardData || window.clipboardData;
    var pastedValue = clipboardData.getData('text');

    if (isNaN(pastedValue)) {
        e.preventDefault();
        $(this).val('');
    }
});

$("#login-email").focusout(function () {
    $(this).trimTheText();
    $(this).val(($(this).val()).toLowerCase());
});

function checkInputLength(input) {
    if (input.value < 0 || input.value == '') {
        input.value = input.value.slice(1);
    }
    var maxLength = 4;
    if (input.value.length > maxLength) {
        input.value = input.value.slice(0, maxLength); // Truncate the value to the maximum length
    }
}
function encryptCredentials() {
    var key = CryptoJS.enc.Utf8.parse(enky);
    var iv = CryptoJS.enc.Utf8.parse(enky);
    var txtUserName = $("#login-email").val();
    var txtpassword = $("#login-password").val();

    var encryptedemail = CryptoJS.AES.encrypt(CryptoJS.enc.Utf8.parse(txtUserName), key,
        {
            keySize: 128 / 8,
            iv: iv,
            mode: CryptoJS.mode.CBC,
            padding: CryptoJS.pad.Pkcs7
        });

    $("#EncEl").val(encryptedemail);

    var encryptedpassword = CryptoJS.AES.encrypt(CryptoJS.enc.Utf8.parse(txtpassword), key,
        {
            keySize: 128 / 8,
            iv: iv,
            mode: CryptoJS.mode.CBC,
            padding: CryptoJS.pad.Pkcs7
        });

    $("#EncPS").val(encryptedpassword);
}

$(function () {
    //getCaptcha();

    $('#frmLogin').submit(function (evt) {

        $("#SchemeCaptchaErrorMessage").hide();
        $("#SchemeCaptchaErrorMessage").html('');
        $('#passwordValidationError').hide();
        $('#passwordValidationError').html('');
        if ($('#passwordField').is(":visible") == false && $('#login-password').val() != '')
            $('#login-password').val('');

        if ($('#captchaCode').val() == '' && $('#passwordField').is(":visible") == false) {
            $('#SchemeCaptchaErrorMessage').show();
            $('#SchemeCaptchaErrorMessage').html(captchaRequired);
            evt.preventDefault();
            return 0;
        }
        if ($('#passwordField').is(":visible") == true && $('#login-password').val() == '') {
            $('#passwordValidationError').show();
            $('#passwordValidationError').html(passwordIsRequired);
            evt.preventDefault();
            return 0;
        }
        if ($("#loginIdentityNumber").val() == '')
            return;
        var isLoginWithHomePageFlow = false;
        l.start();

        $("#LoginErrorMessage").hide();
        $("#LoginErrorMessage").html('');

        evt.preventDefault();
        var $form = $(this);
        if ($(this).valid()) {
            $("#PolicyHolderUniqueId").prop("disabled", true);
            //if ($('#passwordField').is(":visible") == true)
            //    $('#login-password').val('');

            var formText = $form.serialize();
            $("#PolicyHolderUniqueId").prop("disabled", false);
            $.ajax({
                type: "POST",
                url: controllerurl,
                data: formText + "&IdentityNumber=" + $("#loginIdentityNumber").val() + "&CaptchaCode=" + $("#captchaCode").val() + "&CaptchaToken=" + $("#captchaToken").val() + "&CurrentPagelangauge=" + $("#hdnCurrentPageLangauge").val() + "&isCaptcha=" + true + "&IsLoginWithHomePageFlow=" + isLoginWithHomePageFlow,
                dataType: "json",
                traditional: true,
                success: function (data) {
                    if (data.OK == "Error") {
                        $("#LoginErrorMessage").show();
                        $("#LoginErrorMessage").html(data.Error);
                        try {
                            //$($('.validation-summary-errors')[2]).show()
                            //$($('.validation-summary-errors')[2]).html(data.Error);
                            $($('.validation-summary-errors')[3]).show()
                            $($('.validation-summary-errors')[3]).html(data.Error);
                        }
                        catch (e) { }
                        getCaptcha();
                        l.stop();
                        return;
                    }
                    else if (data.OK == "CaptchaNotValid") {
                        $('#SchemeCaptchaErrorMessage').show();
                        $('#SchemeCaptchaErrorMessage').html(captchaNotValid);
                        $("#LoginErrorMessage").hide();
                        $("#LoginErrorMessage").html('');
                        $("#captchaCode").val('');
                        try {
                            $($('.validation-summary-errors')[2]).hide();
                            $($('.validation-summary-errors')[2]).html('');
                        }
                        catch (e) { }
                        l.stop();
                        getCaptcha();
                        return;
                    }
                    else if (data.OK == "RedirectToValidateMobile") {
                        localStorage.removeItem("token");
                        document.cookie = "JToken=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;";
                        document.cookie = "JwtToken=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;";
                        localStorage.removeItem("logintimerCount");
                        localStorage.removeItem("loginotpRetrycount");
                        l.stop();
                        if (isHybridAppUserAgent) {
                            updateFcmTokenFromWeb();
                        }
                        window.location.href = data.NavigateUrl;
                    }
                    else if (data.OK == "LoginOTPSuccess") {
                        if ($('#passwordField').is(":visible") == false) {
                            validateMobileURL = data.NavigateUrl;
                            $('#passwordField').show();
                            $('#forgetPasswordDiv').show();
                            $('#identityField').hide();
                            $('#divSchemeCaptcha').hide();
                            l.stop();
                            return;
                        }
                        localStorage.removeItem("token");
                        document.cookie = "JToken=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;";
                        document.cookie = "JwtToken=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;";
                        localStorage.removeItem("logintimerCount");
                        localStorage.removeItem("loginotpRetrycount");
                        l.stop();
                        if (isHybridAppUserAgent) {
                            updateFcmTokenFromWeb();
                        }
                        window.location.href = data.NavigateUrl;
                    }
                    else {
                        l.stop();
                    }
                },
                errors: function (erro) {
                    $("#LoginErrorMessage").addClass("alert alert-error");
                    $("#LoginErrorMessage").html(data.Error);
                    $("#frmLogin").find("#mathcaptcha").html('');
                    l.stop();
                }
            });
        }
        else {
            $('#frmLogin *').filter(':input[type=text]').each(function () {
                if ($(this).val() == '') {
                    $(this).focus();
                    return;
                }
            });
        }
    });
});
function getCaptcha() {
    $.ajax({
        url: '/api/V1/Captcha',
        type: 'GET',
        success: function (data) {
            //$("#divSchemeCaptcha").show();
            var base64Data = data.image;
            var dataURL = 'data:image/png;base64,' + base64Data;
            $('#CaptchaImageForLogin').attr('src', dataURL);
            $('#captchaToken').val(data.token);
        },
        error: function (xhr, status, error) {
            console.log(error);
        }
    });
}


function LoginOTPRedirection(otpURL) {
    $.ajax({
        type: "GET",
        url: otpURL,
        //data: $form.serialize() + "&CurrentPagelangauge=" + $("#hdnCurrentPageLangauge").val(),
        dataType: "html",
        traditional: true,
        success: function (data) {
            $('#signin-signup-content').hide();
            $('#payment-login-content').hide();
            $('#payment-signup-content').hide();
            $('#payment-signup-otp').html("");
            $('#payment-signup-otp').html(data);
            $('#payment-signup-otp').show();
            setTimeout(function () {
                $("#SMSCode").focus();
            }, 1000);
        }
    });
}
(function ($) {
    //re-set all client validation given a jQuery selected form or child
    $.fn.resetValidation = function () {

        var $form = this.closest('form');

        //reset jQuery Validate's internals
        $form.validate().resetForm();

        //reset unobtrusive validation summary, if it exists
        $form.find("[data-valmsg-summary=true]")
            .removeClass("validation-summary-errors")
            .addClass("validation-summary-valid")
            .find("ul").empty();

        //reset unobtrusive field level, if it exists
        $form.find("[data-valmsg-replace]")
            .removeClass("field-validation-error")
            .addClass("field-validation-valid")
            .empty();

        return $form;
    };
})(jQuery);


//focus on first element when Login modal open
$('#login-popup').on('shown.bs.modal', function (e) {
    $('#login-email').focus();
    $("#login-email").rules("remove", "required");
})

$(document).ready(function () {
    if (strError.toLowerCase() == "true") {
        $("#login-popup").modal('show');
        $('#signup-content').hide();
        $("#without-login").hide();
        $('#login-content').show();
        BackdropiconShow();
    }

    $("#LoginErrorMessage").hide();


});

$("#login-email").bind('keyup', function (e) {
    ConvertToLowerWithKeyCode(e);
});

