$(document).ready(function () {
    /* DATEPICKER JS*/
    //$('.date input').datepicker({
    //    autoclose: true,
    //    rtl: false,

    //});
    /* LOGIN POPUP Js */

    $(".create-account-link a").click(function () {
        $('#login-content').hide();
        $('#signup-content').show();
        $('#forgot-popup').hide();
    });

    $(".login-account-link a").click(function () {
        $('#login-content').show();
        $('#signup-content').hide();
        $('#forgot-popup').hide();

    });

    $(".forget-link a").click(function () {
        $('#forgot-popup').show();
        $('#signup-content').hide();
        $('#login-content').hide();

    });

    $("#login-popup .close").click(function () {
        $("#LoginRegisterPopup").show();
        $('#logintab')[0].click();
    });

    setInsuranceType(selectedInsuranceType);

    if (currentCulture == 'ar') {
        var currentUrl = window.location.href;
        if (currentUrl.indexOf('/ar') > 0) {
            currentUrl = currentUrl.replace('/ar', '');

            window.history.pushState(null, null, currentUrl);
        }
    }
    else if (currentCulture == 'en') {

        var currentUrl = window.location.href;
        if (currentUrl.indexOf('/ar') > 0) {
            currentUrl = currentUrl.replace('/ar', '/en');

            window.history.pushState(null, null, currentUrl);
        }
        else if (currentUrl.indexOf('/en') == -1) {

            var lastChar = currentUrl.substr(currentUrl.length - 1);
            if (lastChar == '/')
                currentUrl = currentUrl + 'en';
            else
                currentUrl = currentUrl + '/en';

            window.history.pushState(null, null, currentUrl);
        }
    }


});



function UpdateCultureHome(cultureID, url, logout, logouturl) {
    const urls = {
        "/": "/en",
        "/en": "/",
        "/car/en/Earn-Redeem-Qitaf": "/car/ادفع-اكسب-نقاط-قطاف",
        "/car/%D8%A7%D8%AF%D9%81%D8%B9-%D8%A7%D9%83%D8%B3%D8%A8-%D9%86%D9%82%D8%A7%D8%B7-%D9%82%D8%B7%D8%A7%D9%81": "/car/en/Earn-Redeem-Qitaf",
        "/car/en/Comprehensive-Insurance": "/car/التأمين-الشامل",
        "/car/%D8%A7%D9%84%D8%AA%D8%A3%D9%85%D9%8A%D9%86-%D8%A7%D9%84%D8%B4%D8%A7%D9%85%D9%84": "/car/en/Comprehensive-Insurance",
        "/car/en/third-party-insurance": "/car/تأمين-ضد-الغير",
        "/car/%D8%AA%D8%A3%D9%85%D9%8A%D9%86-%D8%B6%D8%AF-%D8%A7%D9%84%D8%BA%D9%8A%D8%B1": "/car/en/third-party-insurance",
    }
    ShowLoader();
    $.ajax({
        url: url,
        type: "GET",
        dataType: "json",
        data: { cultureID: cultureID },
        cache: false,
        success: function (d) {
            if (d == '"' + logout + '"') {
                window.location = logouturl;
                return;
            }
            localStorage.setItem("lang", cultureID == 1 ? "ar" : "en");
            var currentUrl = window.location.href.replace(window.location.origin, "");
            if (currentUrl.includes("/UHome/PurchaseFlow")) {
                langURL = currentUrl
            } else {
                langURL = urls[currentUrl] ?? langURL;
            }
            if (typeof langURL != 'undefined' && langURL != "") {
                currentUrl = langURL;
                if (currentUrl.includes("/UHome/PurchaseFlow")) {
                    window.location.href = currentUrl;
                } else {
                    window.location.pathname = currentUrl;
                }
            } else {
                if (window.location.hash) {
                    location.reload();
                }
                else {
                    if (currentUrl.indexOf('/en') > 0 && d.currentCulture == 2) {
                        currentUrl = currentUrl.replace('/en', '');
                    }
                    else if (d.currentCulture == 1) {
                        var lastChar = currentUrl.substr(currentUrl.length - 1);
                        if (lastChar == '/')
                            currentUrl = currentUrl + 'en';
                        else
                            currentUrl = currentUrl + '/en';
                    }
                    window.location = currentUrl;
                }
            }
        },
        error: function (xhr, textStatus, errorThrown) {
        }
    });
    return true;
}

var isTabClick = false; //used for home page only
var isLoginWithHomePageFlow = false;
var isBackdropshow = false;
if ($(".dropdown-menu.insurance").parent().is(":visible"))
    $(".dropdown-menu.insurance").parent().hide();

$(".create-account-link a").click(function () {
    $('#login-content').hide();
    $('#signup-content').show();
    $('#forgot-popup').hide();
    BackdropiconShow();
    //$("input:not(:hidden)").val('');    
});

$(".login-account-link a").click(function () {
    $('#login-content').show();
    $('#signup-content').hide();
    $('#forgot-popup').hide();
    BackdropiconShow();
});

$(".forget-link a").click(function () {
    $('#forgot-popup').show();
    $('#signup-content').hide();
    $('#login-content').hide();
    BackdropiconShow();
});

$("#login-popup .close").click(function () {
    $('#signup-content').hide();
    $('#forgot-popup').hide();
    $('#login-content').show();
});

$("#lnkLoginButton").click(function () {
    sessionStorage.removeItem('showPasswordSection');
    $('#captchaCode').val('');
    $('#login-password').val('');
    $('#loginIdentityNumber').val('');
    $('#passwordField').hide();
    $('#forgetPasswordDiv').hide();
    $('#identityField').show();
    $('#divSchemeCaptcha').show();
    $("#SchemeCaptchaErrorMessage").html('').hide();
    $("#LoginErrorMessage").html('').hide();
    getCaptcha();
    isBackdropshow = false;
    if (isLoginWithHomePageFlow != undefined) {
        isLoginWithHomePageFlow = false;
    }
    BackdropiconShow();
    $("#without-login,.BackdropToWithoutLogin").hide();
});

$("#lnkLoginButtonMobile").click(function () {
    isBackdropshow = false;
    if (isLoginWithHomePageFlow != undefined) {
        isLoginWithHomePageFlow = false;
    }
    BackdropiconShow();
    getCaptcha();
    $("#without-login,.BackdropToWithoutLogin").hide();
});

$('#Declaration').change(function () {
    if ($(this).attr('checked')) {
        $(this).val('true');
    } else {
        $(this).val('false');
    }
});

$("li[class*='-menu'],li[class*='-menu1']").on("click", function () {
    var element = $(this);
    if (element.closest(".insurance-type-links").length || element.closest(".sidenav").length) {
        var classesString = element.attr("class");
        var classArray = classesString.slice(0, classesString.indexOf("-menu")).split(" ");
        var insuranceType = classArray[classArray.length - 1];
        $.ajax({
            isSessionChanged: true,
            url: '/Home/SetInsuranceType',
            method: 'POST',
            insuranceType: insuranceType,
            data: {
                selectedInsuranceType: insuranceType
            },
            success: function (data) {
                if (data.OK === "Error") {
                    $("#HeaderErrorMessage").show().html(data.Error).delay(5000).fadeOut();
                } else {
                    if (isHomePage == "" || isHomePage == "False") {
                        window.location.href = window.location.origin + "/" + currentCulture + (insuranceType == 'comprehensive' ? '/comprehensive-insurance' : '');
                        return;
                    }
                    // if not home page
                    if (window.location.pathname !== "/" && window.location.pathname !== window.location) {
                        var currentUrl = window.location.href;
                        if (currentUrl.indexOf('/comprehensive-insurance') > 0 && insuranceType == 'tpl') {
                            currentUrl = currentUrl.replace('/comprehensive-insurance', '');
                        }
                        else {
                            currentUrl = window.location.origin + "/" + currentCulture + (insuranceType == 'comprehensive' ? '/comprehensive-insurance' : '');
                        }
                        window.history.pushState(null, null, currentUrl);
                    }

                    setInsuranceType(insuranceType);
                }
            }
        });
    }
});

function setInsuranceType(insuranceType) {
    if ($(".insurance-type-links a").hasClass("active"))
        $(".insurance-type-links a").removeClass("active");

    if ($('.sidenav a').hasClass("active"))
        $('.sidenav a').removeClass('active');

    $("." + insuranceType + "-menu a,." + insuranceType + "-menu1 a").addClass("active");
    $(".sidenav ." + insuranceType + "-menu a,." + insuranceType + "-menu1 a").addClass('active');

    if (isTabClick != undefined) {
        if (isTabClick == false) {
            if (insuranceType == 'tpl' && $("#Tpl-tab").length > 0) {
                $('a[href="#Tpl-tab"]').tab('show');
            }
            else if (insuranceType == 'comprehensive' && $("#Comp-tab").length > 0) {
                $('a[href="#Comp-tab"]').tab('show');
            }
        }

        isTabClick = false;
    }

    FillTabData(insuranceType);

}

function FillTabData(insuranceType) {
    if (insuranceType == 'tpl' && $("#Tpl-tab").length > 0) {
        $("#UniqueID").val($("#CompUniqueID").val());

        if ($("#CompUniqueID").val().indexOf('1') == 0) {
            $("#ArabicMonth").val($("#CompArabicMonth").val()).trigger('change');
            $("#dobArabic").val($("#Comp_dobArabic").val()).trigger('change');
        }
        else if ($("#CompUniqueID").val().indexOf('2') == 0) {

            $("#EnglishMonth").val($("#CompEnglishMonth").val()).trigger('change');
            $("#dob").val($("#Comp_dob").val()).trigger('change');
        }

        if ($("#CompstrPolicyEffectiveDate").val() != '') {
            var formatedDate = moment($("#CompstrPolicyEffectiveDate").val(), 'DD/MM/YYYY');
            var finalDate = new Date(formatedDate.unix() * 1000).toDDMMYYYY()

            setTimeout(function () {
                $('#strPolicyEffectiveDate').val(finalDate);
                $('#strPolicyEffectiveDate').datepicker('setDate', new Date(formatedDate.unix() * 1000));
                $('#strPolicyEffectiveDate').datepicker('update');
            }, 50);
        }
        $("#tplPlainCaptcha").load(loadplaincaptcha, function () {

            var form = $("#form-add-owner")
                .removeData("validator")
                .removeData("unobtrusiveValidation");
            $.validator.unobtrusive.parse(form);
        });
    }
    else if (insuranceType == 'comprehensive' && $("#Comp-tab").length > 0) {
        $("#compPlainCaptcha").load(loadplaincaptcha, function () {

            var form = $("#form-add-owner-comp")
                .removeData("validator")
                .removeData("unobtrusiveValidation");
            $.validator.unobtrusive.parse(form);
        });

        $("#CompUniqueID").val($("#UniqueID").val());

        if ($("#CompUniqueID").val().indexOf('1') == 0) {
            $("#CompArabicMonth").val($("#ArabicMonth").val()).trigger('change');
            $("#Comp_dobArabic").val($("#dobArabic").val()).trigger('change');
        }
        else if ($("#CompUniqueID").val().indexOf('2') == 0) {

            $("#CompEnglishMonth").val($("#EnglishMonth").val()).trigger('change');
            $("#Comp_dob").val($("#dob").val()).trigger('change');
        }

        if ($("#strPolicyEffectiveDate").val() != '') {

            var formatedDate = moment($("#strPolicyEffectiveDate").val(), 'DD/MM/YYYY');
            var finalDate = new Date(formatedDate.unix() * 1000).toDDMMYYYY()

            setTimeout(function () {
                $('#CompstrPolicyEffectiveDate').val(finalDate);
                $('#CompstrPolicyEffectiveDate').datepicker('setDate', new Date(formatedDate.unix() * 1000));
                $('#CompstrPolicyEffectiveDate').datepicker("update");
            }, 50);
        }
    }

    //// to show or hide captcha
    //if ($("#UniqueID").val()) {
    //    $('#tplCaptcha').show();

    //}
    //else {
    //    $('#tplCaptcha').hide();

    //}

    //if ($("#CompUniqueID").val()) {
    //    $('#compCaptcha').show();

    //}
    //else {
    //    $('#compCaptcha').hide();

    //}
}

function BackdropiconShow() {
    setTimeout(function () {
        $(".BackdropToWithoutLogin").each(function () {
            $(this).hide();
        });
        if (isBackdropshow == true) {
            $(".BackdropToWithoutLogin").each(function () {
                $(this).show();
            });
        }
    }, 50);
}

$(document).ready(function () {

    setTimeout(function () {
        var tabToSwitch = localStorage.getItem('insType');
        if (tabToSwitch != null) {
            localStorage.removeItem('insType');

            if (tabToSwitch == 2) {

                var compIDInputVar = htmlDecode(localStorage.getItem('compIDInput'));
                localStorage.removeItem('compIDInput');
                //  if (compIDInputVar != null && compIDInputVar.length > 0) {
                //ChangeInsuranceType('comprehensive');
                //$("#comptab").click();
                $("#CompUniqueID").val(compIDInputVar);
                $("#UniqueID").val(compIDInputVar);
                //$('#tabs-1 a[href="#Comp-tab"]')[0].click();

                //}
            }

            else if (tabToSwitch == 1) {

                var tplIDInputVar = htmlDecode(localStorage.getItem('tplIDInput'));
                localStorage.removeItem('tplIDInput');
                // if (tplIDInputVar != null && tplIDInputVar.length > 0) {
                $('#tabs-1 a[href="#Tpl-tab"]')[0].click();
                $("#UniqueID").val(tplIDInputVar);
                $("#CompUniqueID").val(tplIDInputVar);
                //}
            }
        }
    }, 500);
});

function getHeaderBarcolor() {
    var elem, style;
    elem = document.querySelector('.header .navbar-light');
    style = getComputedStyle(elem);
    return style.backgroundColor;
}