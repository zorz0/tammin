"use strict";

function _typeof(obj) { if (typeof Symbol === "function" && typeof Symbol.iterator === "symbol") { _typeof = function _typeof(obj) { return typeof obj; }; } else { _typeof = function _typeof(obj) { return obj && typeof Symbol === "function" && obj.constructor === Symbol && obj !== Symbol.prototype ? "symbol" : typeof obj; }; } return _typeof(obj); }

(function ($) {
  //set cursor to the end of the text
  $.fn.setCursorToTextEnd = function () {
    var $initialVal = this.val();
    this.focus().val("").val($initialVal);
  }; //trim the value and set the value to fields


  $.fn.trimTheText = function () {
    var $initialVal = $.trim(this.val());
    this.val($initialVal);
  }; //set first element of dropdown


  $.fn.setFirstOption = function () {
    this.find("option:first").attr("selected", "selected").change();
  };
})(jQuery);

document.onreadystatechange = function (e) {
  if (document.readyState === "complete") {
    HideLoader();
  }
};

function ShowLoaderInDiv(id) {
  $(id).append("<div class='row text-center'>" + $("#ajaxLoaderDiv").html() + "</div>");
  $("#loaderDiv").show();
}

function HideLoaderInDiv(id) {
  $("#ajaxLoaderDiv").hide();
  $(id).empty();
}

function ShowLoader() {//$('#ajaxLoaderDiv').show();
  //$('.page-loader2').show();
}

function HideLoader() {//$('#ajaxLoaderDiv').hide();
  //$('.page-loader2').hide();
}

function isNonNumberKey(evt) {
  var charCode = evt.which ? evt.which : evt.keyCode;
  if ((charCode == 8 || charCode > 31) && (charCode < 48 || charCode > 57) && !evt.ctrlKey) return true;
  return false;
}

function isNumberKey(evt) {
  var charCode = evt.which ? evt.which : evt.keyCode;
  if (charCode > 31 && (charCode < 48 || charCode > 57) && !evt.ctrlKey) return false;
  return true;
} // Prevent Dash after .com (this is invalid email ah@toysbrand.com-sa)


function isEmailDashKey(evt, val) {
  var position = window.getSelection().getRangeAt(0).startOffset;
  var charCode = evt.which ? evt.which : evt.keyCode;
  var charIndex = evt.target.selectionStart;
  var indexOfAt = val.indexOf("@");

  if (indexOfAt != -1) {
    var indexOfDot = val.indexOf(".", indexOfAt);

    if (indexOfDot != -1) {
      if (charCode == 45 && charIndex > indexOfAt && charIndex > indexOfDot) {
        return false;
      }
    }
  }

  return true;
}

function isEmailHasDashKey(val) {
  var indexOfAt = val.indexOf("@");

  if (indexOfAt != -1) {
    var indexOfDot = val.indexOf(".", indexOfAt);

    if (indexOfDot != -1) {
      var indexOfDash = val.indexOf("-", indexOfDot);

      if (indexOfDash > -1) {
        //return val.substring(0, indexOfDash);
        return false;
      }
    }
  }

  return true;
}

function ValidateDates(Date1, Date2, Date3) {
  var fromDate = Date1;
  var toDate = Date2;
  var isValidFromDate = 0;
  var ReturnType = true;

  if (!isValidDateFormat(fromDate.val())) {
    fromDate.addClass("input-validation-error");
    event.preventDefault();
    event.stopPropagation();
    ReturnType = false;
  }

  if (Date2 != undefined) {
    if (!isValidDateFormat(toDate.val())) {
      toDate.addClass("input-validation-error");
      event.preventDefault();
      event.stopPropagation();
      ReturnType = false;
    }
  }

  if (Date3 != undefined) {
    if (!isValidDateFormat(Date3.val())) {
      Date3.addClass("input-validation-error");
      event.preventDefault();
      event.stopPropagation();
      ReturnType = false;
    }
  }

  return ReturnType;
}

function isValidDateFormat(dateValue) {
  var rxDatePattern = /^(\d{1,2})(\/|-)(\d{1,2})(\/|-)(\d{4})$/;
  if (dateValue == "") return true;
  var dtArray = dateValue.match(rxDatePattern); // is format OK?

  if (dtArray == null) return false;
  dtMonth = dtArray[3];
  dtDay = dtArray[1];
  dtYear = dtArray[5];
  if (dtMonth < 1 || dtMonth > 12) return false;else if (dtDay < 1 || dtDay > 31) return false;else if ((dtMonth == 4 || dtMonth == 6 || dtMonth == 9 || dtMonth == 11) && dtDay == 31) return false;else if (dtMonth == 2) {
    var isleap = dtYear % 4 == 0 && (dtYear % 100 != 0 || dtYear % 400 == 0);
    if (dtDay > 29 || dtDay == 29 && !isleap) return false;
  }
  return true;
} //Gregorian  to Hizri Date


function isValidEmailAddress(emailAddress) {
  //var pattern = /^([a-z\d!#$%&'*+\-\/=?^_`{|}~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]+(\.[a-z\d!#$%&'*+\-\/=?^_`{|}~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]+)*|"((([ \t]*\r\n)?[ \t]+)?([\x01-\x08\x0b\x0c\x0e-\x1f\x7f\x21\x23-\x5b\x5d-\x7e\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|\\[\x01-\x09\x0b\x0c\x0d-\x7f\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))*(([ \t]*\r\n)?[ \t]+)?")@(([a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|[a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF][a-z\d._~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]*[a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])\.)+([a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|[a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF][a-z\d._~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]*[a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])\.?$/i;
  var pattern = /^([a-z\d!#$%&'*+\-\/=?^_`{|}~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]+(\.[a-z\d!#$%&'*+\-\/=?^_`{|}~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]+)*|"((([ \t]*\r\n)?[ \t]+)?([\x01-\x08\x0b\x0c\x0e-\x1f\x7f\x21\x23-\x5b\x5d-\x7e\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|\\[\x01-\x09\x0b\x0c\x0d-\x7f\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))*(([ \t]*\r\n)?[ \t]+)?")@(([a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|[a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF][a-z\d\-._~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]*[a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])\.)+([a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|[a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF][a-z\d\-._~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]*[a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])\.?$/i;
  return pattern.test(emailAddress);
}

function gmod(n, m) {
  return (n % m + m) % m;
}

function kuwaiticalendar(adjust, date) {
  var dateVar = date; //dd/mm/yyyy

  var dsplit = dateVar.split("/");
  var newdate = new Date(dsplit[2], dsplit[1] - 1, dsplit[0]);
  var date1 = newdate;
  date1.setMonth(date1.getMonth());
  var today = date1;

  if (adjust) {
    adjustmili = 1000 * 60 * 60 * 24 * adjust;
    todaymili = today.getTime() + adjustmili;
    today = new Date(todaymili);
  }

  day = today.getDate();
  month = today.getMonth();
  year = today.getFullYear();
  m = month + 1;
  y = year;

  if (m < 3) {
    y -= 1;
    m += 12;
  }

  a = Math.floor(y / 100);
  b = 2 - a + Math.floor(a / 4);
  if (y < 1583) b = 0;

  if (y == 1582) {
    if (m > 10) b = -10;

    if (m == 10) {
      b = 0;
      if (day > 4) b = -10;
    }
  }

  jd = Math.floor(365.25 * (y + 4716)) + Math.floor(30.6001 * (m + 1)) + day + b - 1524;
  b = 0;

  if (jd > 2299160) {
    a = Math.floor((jd - 1867216.25) / 36524.25);
    b = 1 + a - Math.floor(a / 4);
  }

  bb = jd + b + 1524;
  cc = Math.floor((bb - 122.1) / 365.25);
  dd = Math.floor(365.25 * cc);
  ee = Math.floor((bb - dd) / 30.6001);
  day = bb - dd - Math.floor(30.6001 * ee);
  month = ee - 1;

  if (ee > 13) {
    cc += 1;
    month = ee - 13;
  }

  year = cc - 4716;
  wd = gmod(jd + 1, 7) + 1;
  iyear = 10631 / 30;
  epochastro = 1948084;
  epochcivil = 1948085;
  shift1 = 8.01 / 60;
  z = jd - epochastro;
  cyc = Math.floor(z / 10631);
  z = z - 10631 * cyc;
  j = Math.floor((z - shift1) / iyear);
  iy = 30 * cyc + j;
  z = z - Math.floor(j * iyear + shift1);
  im = Math.floor((z + 28.5001) / 29.5);
  if (im == 13) im = 12;
  id = z - Math.floor(29.5001 * im - 29);
  var myRes = new Array(8);
  myRes[0] = day; //calculated day (CE)

  myRes[1] = month - 1; //calculated month (CE)

  myRes[2] = year; //calculated year (CE)

  myRes[3] = jd - 1; //julian day number

  myRes[4] = wd - 1; //weekday number

  myRes[5] = id; //islamic date

  myRes[6] = im - 1; //islamic month

  myRes[7] = iy; //islamic year

  return myRes;
}

function writeIslamicDate(adjustment, date) {
  var wdNames = new Array("Ahad", "Ithnin", "Thulatha", "Arbaa", "Khams", "Jumuah", "Sabt");
  var iMonthNames = new Array("Muharram", "Safar", "Rabi'ul Awwal", "Rabi'ul Akhir", "Jumadal Ula", "Jumadal Akhira", "Rajab", "Sha'ban", "Ramadan", "Shawwal", "Dhul Qa'ada", "Dhul Hijja");
  var iDate = kuwaiticalendar(adjustment, date);
  var outputIslamicDate = [iDate[6] + 1] + "/" + iDate[7];
  return outputIslamicDate;
}

function DateValidation(fromdate, todate) {
  var ReturnType = true;

  if (process(fromdate) > process(todate)) {
    ReturnType = false;
  } else {
    ReturnType = true;
  }

  return ReturnType;
}

function CurrentDateValidation(fromdate, currentDate) {
  var ReturnType = true;

  if (process(fromdate) > currentDate) {
    ReturnType = false;
  } else {
    ReturnType = true;
  }

  return ReturnType;
}

function process(date) {
  var parts = date.split("/");
  return new Date(parts[2], parts[1] - 1, parts[0]);
}

function AddZeroBeforeMobileNo(str) {
  str = str.toString();
  return str.length < 10 ? AddZeroBeforeMobileNo("0" + str, 10) : str;
}

function isValidMobileFormat(mobileNumber) {
  var rxDatePattern = /^05[0-9]{8}$/;

  if (mobileNumber.match(rxDatePattern) == null) {
    return false;
  } else {
    return true;
  }
}

function UpdateCulture(cultureID, url, logout, logouturl) {
  ShowLoader();
  $.ajax({
    url: url,
    type: "GET",
    dataType: "json",
    data: {
      cultureID: cultureID
    },
    cache: false,
    success: function success(d) {
      if (d == '"' + logout + '"') {
        window.location = logouturl;
        return;
      }

      if (window.location.hash) {
        location.reload();
      } else {
        var currentUrl = window.location.href;

        if (typeof langURL != "undefined" && langURL != "") {
          currentUrl = langURL;
          window.location.pathname = currentUrl;
        } else {
          if (currentUrl.indexOf("/en") > 0 && d.currentCulture == 2) {
            currentUrl = currentUrl.replace("/en", "/ar");
          } else if (currentUrl.indexOf("/ar") > 0 && d.currentCulture == 1) {
            currentUrl = currentUrl.replace("/ar", "/en");
          }

          window.location = currentUrl;
        }
      }
    },
    error: function error(xhr, textStatus, errorThrown) {}
  });
  return true;
} //Get Server Date


function srvTime() {
  try {
    //FF, Opera, Safari, Chrome
    xmlHttp = new XMLHttpRequest();
  } catch (err1) {
    //IE
    try {
      xmlHttp = new ActiveXObject("Msxml2.XMLHTTP");
    } catch (err2) {
      try {
        xmlHttp = new ActiveXObject("Microsoft.XMLHTTP");
      } catch (eerr3) {
        //AJAX not supported, use CPU time.
        alert("AJAX not supported");
      }
    }
  }

  xmlHttp.open("HEAD", window.location.href.toString(), false);
  xmlHttp.setRequestHeader("Content-Type", "text/html");
  xmlHttp.send("");
  return xmlHttp.getResponseHeader("Date");
}

function gm_authFailure() {
  alert("Authentication failed");
}

ValidateAllowPasteAlphabetSpaceArabicOnly = function ValidateAllowPasteAlphabetSpaceArabicOnly(e) {
  var re = /^([\u0600-\u06ff]|[\u0750-\u077f]|[\ufb50-\ufbc1]|[\ufbd3-\ufd3f]|[\ufd50-\ufd8f]|[\ufd92-\ufdc7]|[\ufe70-\ufefc]|[\ufdf0-\ufdfd]|[A-Za-z ])*$/g;

  if (!re.test(e.originalEvent.clipboardData.getData("text"))) {
    e.preventDefault();
  }
}; // allow paste only for alphabets and space value


ValidateAllowPasteAlphabetSpaceOnly = function ValidateAllowPasteAlphabetSpaceOnly(e) {
  var re = /^[A-Za-z ]+$/;

  if (!re.test(e.originalEvent.clipboardData.getData("text"))) {
    e.preventDefault();
  }
}; //allow paste numeric or alphabets only


ValidateAllowPasteAlphabetNumericOnly = function ValidateAllowPasteAlphabetNumericOnly(e) {
  var re = /^[0-9a-zA-Z]+$/;

  if (!re.test(e.originalEvent.clipboardData.getData("text"))) {
    e.preventDefault();
  }
}; // allow paste only for numeric value


ValidateAllowPasteNumericOnly = function ValidateAllowPasteNumericOnly(e) {
  var re = /^\d{1,10}$/;

  if (!re.test(e.originalEvent.clipboardData.getData("text"))) {
    e.preventDefault();
  }
};

Date.prototype.toDDMMYYYY = function () {
  return ("0" + this.getDate()).slice(-2) + "/" + ("0" + (this.getMonth() + 1)).slice(-2) + "/" + this.getFullYear();
};

FillCityForDDL = function FillCityForDDL(listArray, keyCompare, cultureID, IdtoAppend) {
  var filteredData = $.grep(listArray, function (element, index) {
    return element.RegionID == keyCompare;
  });

  if (filteredData.length > 0) {
    $.each(filteredData, function (key) {
      if (cultureID == 1) {
        $("#" + IdtoAppend).append($("<option></option>").val(filteredData[key].CityID).html(filteredData[key].CityNameEnglish));
      } else {
        $("#" + IdtoAppend).append($("<option></option>").val(filteredData[key].CityID).html(filteredData[key].CityNameArabic));
      }

      $("#" + IdtoAppend).trigger("chosen:updated");
    });
  } else {
    $("#" + IdtoAppend).html("");
  }
};

function __vde(e) {
  var _f1, _f2, _f3, _f5, _f6, _f7, _f8;

  var i = 0;
  var _k = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/=";
  var _f9 = "";

  do {
    _f5 = _k.indexOf(e.charAt(i++));
    _f6 = _k.indexOf(e.charAt(i++));
    _f7 = _k.indexOf(e.charAt(i++));
    _f8 = _k.indexOf(e.charAt(i++));
    _f3 = _f5 << 2 | _f6 >> 4;
    _f2 = (_f6 & 15) << 4 | _f7 >> 2;
    _f1 = (_f7 & 3) << 6 | _f8;
    _f9 = _f9 + String.fromCharCode(_f3);

    if (_f7 != 64) {
      _f9 = _f9 + String.fromCharCode(_f2);
    }

    if (_f8 != 64) {
      _f9 = _f9 + String.fromCharCode(_f1);
    }
  } while (i < e.length);

  return _f9;
}

function __vbe(_s) {
  var _sAy = _s.split("");

  _sAy.reverse();

  var _sRe = _sAy.join("");

  return _sRe;
}

EnableDisableRadio = function EnableDisableRadio(value, isDisable) {
  $("input[type=radio][value=" + value + "]").prop("disabled", isDisable ? true : false);
};

CheckUncheckRadio = function CheckUncheckRadio(value, isChecked) {
  $("input[type=radio][value=" + value + "]").prop("checked", isChecked ? true : false);
};

DisableElements = function DisableElements(id, flag) {
  if (flag == false) {
    $(id).removeAttr("disabled");
  } else {
    $(id).attr("disabled", "disabled");
  }
};

$(function () {
  $(".numberWithDecimal").on("keypress", function () {
    var text = $(this);
    var textValue = text.val();

    if ((event.which != 46 || textValue.indexOf(".") != -1) && (event.which < 48 || event.which > 57) && event.which != 0 && event.which != 8) {
      event.preventDefault();
    }

    if (event.which == 46 && textValue.indexOf(".") == -1) {
      setTimeout(function () {
        if (text.val().substring(text.val().indexOf(".")).length > 3) {
          text.val(text.val().substring(0, text.val().indexOf(".") + 3));
        }
      }, 1);
    }

    if (textValue.indexOf(".") != -1 && textValue.substring(textValue.indexOf(".")).length > 2 && event.which != 0 && event.which != 8 && text[0].selectionStart >= textValue.length - 2) {
      event.preventDefault();
    }
  });
  $(".numberWithDecimal").bind("paste", function (e) {
    var text = e.originalEvent.clipboardData.getData("Text");

    if ($.isNumeric(text)) {
      if (text.indexOf(".") > -1 && text.substring(text.indexOf(".")).length > 3) {
        e.preventDefault();
        $(this).val(text.substring(0, text.indexOf(".") + 3));
      }
    } else {
      e.preventDefault();
    }
  });
});

CallPrint = function CallPrint(divId) {
  var printContents = document.getElementById(divId).innerHTML;
  var originalContents = document.documentElement.innerHTML;
  document.body.innerHTML = printContents;
  window.print();
  document.documentElement.innerHTML = originalContents;
};

CheckIfAttrExist = function CheckIfAttrExist(attrName) {
  if (_typeof(attrName) !== (typeof undefined === "undefined" ? "undefined" : _typeof(undefined)) && attrName !== false) {
    return true;
  } else {
    return false;
  }
};

ConvertToLowerWithKeyCode = function ConvertToLowerWithKeyCode(e) {
  if (e.which >= 97 && e.which <= 122) {
    var newKey = e.which - 32;
    e.keyCode = newKey;
    e.charCode = newKey;
  }
};

setFooter = function setFooter() {
  var currentPage = $("tfoot tr td").contents().filter(function () {
    if (this.nodeType === 3) {
      return $.trim(this.textContent) !== "";
    }

    return false;
  }).get(0);
  $(currentPage).wrap("<span />");
  $('#gridContent a[data-swhglnk="true"]').css("cursor", "pointer");
  $('#gridContent a[data-swhglnk="true"]').attr("oncontextmenu", "return false");

  if ($("#DateException").val()) {
    $("#DateExceptionParent").text($("#DateException").val());
    $(".report-date-error-parent").removeClass("none");
  } else {
    $(".report-date-error-parent").addClass("none");
    $("#DateExceptionParent").text("");
    $("#DateException").val("");
  }
};

function clearRadiosByGroupName(groupName) {
  var r = document.getElementsByName(groupName);

  for (var i = 0; i < r.length; i++) {
    r[i].checked = false;
  }
}

function commas(str) {
  return str.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
}

function removeComma(str) {
  if (str != null && str != undefined && str.length > 0) {
    return str.replace(/\,/g, "");
  } else return str;
}

$(document).ready(function () {
  $('[data-toggle="tooltip"]').tooltip();
});
//# sourceMappingURL=DeveloperCommon.dev.js.map
