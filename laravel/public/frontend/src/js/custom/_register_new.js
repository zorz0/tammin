
if ($("#MobileNumber").val() != "") {
    $("#MobileNumber").val(AddZeroBeforeMobileNo($("#MobileNumber").val()));
}

(function ($) {
    //getCaptchaForHeaderRegister();

    $('.bi.bi-arrow-repeat').on("click", function () {
        $('.captcha-input').val('');
    });

    jQuery.validator.unobtrusive.adapters.add("mustbetrue", ['maxint'], function (options) {
        options.rules["mustbetrue"] = options.params;
        options.messages["mustbetrue"] = options.message;
    });

    jQuery.validator.addMethod("mustbetrue", function (value, element, params) {

        if ($(element).is(':checked')) {
            return true;
        }
        else {
            return false;
        }
    });

}(jQuery));


$("#login-email").focusout(function () {
    $("#login-email").val($.trim($("#login-email").val()));
});

$("#register-password").focusin(function () {
    $('#register-password').attr('type', "password");
});

$('#register-password').val('');

$(function () {
    $('#frmRegsiter').submit(function (evt) {

        $("#RegisterErrorMessageForHeader").hide().html('');
        $("#PasswordMessage").hide();
        $('#passwordFromHeader').hide();
        $('#passwordFromHeader').html('');
        lr1 = Ladda.create(document.querySelector('#btnIndividualRegister'));
        //lr1.start();
        $("#IndRegisterEmail").trimTheText();

        $("#SchemeCaptchaErrorMessageForHeaderRegister").hide();
        $("#SchemeCaptchaErrorMessageForHeaderRegister").html('');

        if ($('#captchaCodeForHeaderRegister').val() == '') {
            $('#SchemeCaptchaErrorMessageForHeaderRegister').show();
            $('#SchemeCaptchaErrorMessageForHeaderRegister').html(captchaRequired);
            evt.preventDefault();
            return 0;
        }
        if ($("#register-password").val() == '') {
            $('#PasswordMessage').show();
            $('#passwordFromHeader').show();
            $('#passwordFromHeader').html(passwordisRequired);
            evt.preventDefault();
            return 0;
        }
        if ($("#register-password").val().length < 6) {
            $('#PasswordMessage').show();
            $('#passwordFromHeader').show();
            $('#passwordFromHeader').html(passwordLengthError);
            evt.preventDefault();
            return 0;
        }
        evt.preventDefault();
        var $form = $(this);

        if ($form.valid() && isEmailHasDashKey($("#IndRegisterEmail").val())) {
            lr1.start();
            if (isLoginWithHomePageFlow) {
                SetSessionforHomePagePurchaseFlow();
            }
            var isAutoLogin = $('#autoLoginCheckBox')[0].checked;
            $.ajax({
                type: "POST",
                url: registercontrollerurl,
                data: $form.serialize() + "&CurrentPagelangauge=" + $("#hdnCurrentPageLangauge").val() + "&IsLoginWithHomePageFlow=" + isLoginWithHomePageFlow + "&isAutoLogin=" + isAutoLogin + "&CaptchaCode=" + $("#captchaCodeForHeaderRegister").val() + "&CaptchaToken=" + $("#captchaTokenForHeaderRegister").val(),
                dataType: "json",
                traditional: true,
                success: function (data) {
                    if (data.OK == "Error") {
                        $("#RegisterErrorMessageForHeader").show();
                        $("#RegisterErrorMessageForHeader").html(data.Error);
                        getCaptchaForHeaderRegister();
                        lr1.stop();
                    }
                    else if (data.OK == "CaptchaNotValid") {
                        $('#SchemeCaptchaErrorMessageForHeaderRegister').show();
                        $('#SchemeCaptchaErrorMessageForHeaderRegister').html(captchaNotValid);
                        $("#RegisterErrorMessageForHeader").hide();
                        $("#RegisterErrorMessageForHeader").html('');
                        $($('.validation-summary-errors')[2]).hide();
                        $($('.validation-summary-errors')[2]).html('');
                        lr1.stop();
                        getCaptchaForHeaderRegister();
                        return;
                    }
                    else if (data.OK == "Success") {
                        if (isHybridAppUserAgent) {
                            updateFcmTokenFromWeb();
                        }
                        localStorage.removeItem("logintimerCount");
                        localStorage.removeItem("loginotpRetrycount");
                        localStorage.removeItem("loginvalidateotpmaxtryexceed");
                        window.location.href = data.NavigateUrl;
                    }
                }
            });
        }
        else {
            if ($("#IndRegisterEmail").valid() && !isEmailHasDashKey($("#IndRegisterEmail").val())) {
                $("#InvalidImailMessage").show();
            }
            else {
                $("#InvalidImailMessage").hide();
            }
            $('#frmRegsiter *').filter(':input[type=text]').not(':hidden').each(function () {
                if ($.trim($('#MobileNumber').val()) == '' || !$('#MobileNumber').val().startsWith('05')) {
                    $('#MobileNumber').focus();
                    return;
                }
                else if ($.trim($('#IndRegisterEmail').val()) == '') {
                    $('#IndRegisterEmail').focus();
                    return;
                }
                else if ($.trim($('#register-password').val()) == '') {
                    $('#register-password').focus();
                    return;
                }
            });
        }
    });
});

$("#btnIndividualRegister").click(function () {
    $("#RegisterErrorMessageForHeader").hide();
    localStorage.removeItem("btnVerifydisabled");
    localStorage.removeItem("smscodeerrormessage");
});

(function ($) {
    $.fn.resetValidation = function () {

        var $form = this.closest('form');

        //reset jQuery Validate's internals
        $form.validate().resetForm();

        //reset unobtrusive validation summary, if it exists
        $form.find("[data-valmsg-summary=true]")
            .removeClass("validation-summary-errors")
            .addClass("validation-summary-valid")
            .find("ul").empty();
        $form.find("[data-valmsg-replace]")
            .removeClass("field-validation-error")
            .addClass("field-validation-valid")
            .empty();

        return $form;
    };
})(jQuery);

function WriteIndividualErrorMessage(errorMessage) {
    $("#IndRegisterEmail").addClass("input-validation-error");
    $("#RegisterErrorMessageForHeader").hide();
    if ($(".modelvalidationError .validation-summary-errors").find("ul").length > 0) {
        $('.modelvalidationError .validation-summary-errors ul li:contains(' + errorMessage + ')').remove();
        $('.modelvalidationError .validation-summary-errors li:eq(0)').before("<li>" + errorMessage + "</li>");
    }
    else {
        $("#RegisterErrorMessageForHeader").show();
        $("#RegisterErrorMessageForHeader").html("<ul><li>" + errorMessage + "</li></ul>");
    }
}

function RegEmial(Emailaddressalreadyexistsmsg) {
    $("#ExistEmail").removeAttr("style").show();
    $("#ExistEmail").empty();
    $("#ExistEmail").append("<span>" + Emailaddressalreadyexistsmsg + "</span>");
}

//focus on first element when Signup modal open
$('#signup-content').on('shown.bs.modal', function (e) {
    $('#MobileNumber').focus();
})

$(document).ready(function () {
    $('#declaration-popup').appendTo("body");
    $('#trems-popup').appendTo("body");
    $("#correctEmail").hide();
    var emailAddress = $("#IndRegisterEmail").val();
    if (emailAddress != "") {
        $.get(
            Loginurl,
            { emailAddress: emailAddress, userId: 0 },
            function (data) {
                if (data.Valid == 1) // Valid email
                {
                    HideLoader();
                    $("#correctEmail").show();
                }
                else if (data.Valid == -1) {
                    HideLoader();
                    $("#correctEmail").hide();
                }
                else if (data.Valid == 0) {
                    HideLoader();
                    $("#correctEmail").hide();
                }
            }
        );
    }
});
$("#login-popup").on("hidden.bs.modal", function () {
    $("#InvalidImailMessage").hide();
    $("#ExistEmail").hide();
});
if (RegisterError != "") {
    $("#RegisterErrorMessageForHeader").html("<ul><li>" + RegisterError + "</li></ul>");
    $("#RegisterErrorMessageForHeader").show();
    $("#login-popup").modal('show');
    $('#login-content').hide();
    BackdropiconShow();
    $('#signup-content').show(1000);
}
else {
    $("#RegisterErrorMessageForHeader").hide();
}

$("#IndRegisterEmail").focusin(function () {
    $("#RegisterErrorMessageForHeader").html('').hide();
    $("#correctEmail, #wrongEmail, #ExistEmail").hide();
    if ($(".validation-summary-errors").find("ul").length) {
        $('.validation-summary-errors ul li:contains(' + Emailaddressalreadyexistsmsg + ')').remove();
        if ($(".validation-summary-errors ul li").length == 0) {
            $(".validation-summary-errors").hide();
        }
    }
});

$("#btnCloseDeclare").click(function (event) {
    $('#declaration-content').closet(".modal").hide();
});

$("#btnCloseTermsPolicy").click(function (event) {
    $('#termspopup-content').closet(".modal").hide();
});

$("#wrongEmail").hide();
$("#IndRegisterEmail").focusout(function () {
    $("#RegisterErrorMessageForHeader").html('').hide();
    $("#correctEmail, #wrongEmail").hide();
    $(this).trimTheText();
    $(this).val(($(this).val()).toLowerCase());
    var emailAddress = $(this).val();

    if (emailAddress != "") {
        if (!isValidEmailAddress(emailAddress) || !isEmailHasDashKey(this.value)) {
            //$("#wrongEmail").show();
            return;
        }
        else {
            $(".validation-summary-errors").hide();
            $("#IndRegisterEmail").removeClass("input-validation-error");
        }
        $.ajax({
            type: "GET",
            url: Loginurl,
            dataType: "JSON",
            contentType: "application/json",
            data: { emailAddress: emailAddress, userId: 0 },
            success: function (data) {
                if (data.Valid == 1) // Valid email
                {
                    HideLoader();

                    $("#RegisterErrorMessageForHeader").html('').hide();
                }
                else if (data.Valid == -1) {
                    HideLoader();
                    RegEmial(Emailaddressalreadyexistsmsg);
                    $("#correctEmail").hide();
                }
                else if (data.Valid == 0) {
                    HideLoader();
                    WriteIndividualErrorMessage(Emailaddressalreadyexistsmsg);
                    $("#correctEmail").hide();
                }
            },
            error: function (err) {
                $("#IndRegisterEmail").val('');
                HideLoader();
            }
        });
    }
});

$("#MobileNumber").on("focusout", function (e) {
    parent = $(e.relatedTarget).parent();
    if (parent.hasClass("login-account-link")) {
        $('#login-content').show();
        $('#signup-content').hide();
        $("#without-login").hide();
        $('#forgot-popup').hide();
        BackdropiconShow();
        return;
    }

    $("#RegisterErrorMessageForHeader").html('');
    $("#RegisterErrorMessageForHeader").hide();

    var mobilenumber = $("#MobileNumber").val();

    if ($.trim($('#MobileNumber').val()) == '' || !$('#MobileNumber').val().startsWith('05')) {
        return;
    }
});

function getCaptchaForHeaderRegister() {
    $.ajax({
        url: '/api/V1/Captcha',
        type: 'GET',
        success: function (data) {
            $("#divSchemeCaptchaForHeaderRegister").show();
            var base64Data = data.image;
            var dataURL = 'data:image/png;base64,' + base64Data;
            $('#CaptchaImageForHeaderRegister').attr('src', dataURL);
            $('#captchaTokenForHeaderRegister').val(data.token);
            $('#captchaCodeForHeaderRegister').val('');
        },
        error: function (xhr, status, error) {
            console.log(error);
        }
    });
}

