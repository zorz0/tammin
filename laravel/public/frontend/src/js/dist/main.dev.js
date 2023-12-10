"use strict";

(function ($) {
  "use strict";

  $(window).on('load', function () {
    $(function () {
      $('[data-toggle="tooltip"]').tooltip();
    });
  });
  $(window).scroll(function () {
    // console.log($(window).scrollTop())
    if ($(window).scrollTop() > 43) {
      $('.navbar').addClass('navbar-fixed');
    }

    if ($(window).scrollTop() < 44) {
      $('.navbar').removeClass('navbar-fixed');
    }
  }); //$('#selectEntity').select2();

  /*Login JS */

  $("#by-email, #by-email2").click(function () {
    $('#login-content').show();
    $('#login-option').hide();
    $('#login-otp').hide();
    $('#signup-content').hide();
    $('#forgot-popup').hide();
    $('#enter-otp').hide();
  });
  $("#by-otp, #by-otp2").click(function () {
    $('#login-content').hide();
    $('#login-option').hide();
    $('#login-otp').show();
    $('#signup-content').hide();
    $('#forgot-popup').hide();
    $('#enter-otp').hide();
  });
  $("#get-otp").click(function () {
    $('#enter-otp').show();
    $('#login-content').hide();
    $('#login-option').hide();
    $('#login-otp').hide();
    $('#signup-content').hide();
    $('#forgot-popup').hide();
  });
  $(document).ready(function () {
    $(".featureslider-show").click(function () {
      $('.feature-mobile-box').show();
      $(".custom-featurebox").hide();
      $('.why-to-buy').addClass('blue-bg');
      $('body, html').animate({
        scrollTop: $('#featureSlider').offset().top - 50
      }, 1000);
      featureSliderLoad();
    });
    $(document).on('click', '.create-account-link a', function () {
      $('#login').hide();
      $('#register').show();
      $('li.login-tab a').removeClass('active');
      $('li.register-tab a').addClass('active');
    });
    $(document).on('click', '.login-account-link a', function () {
      $('#login').show();
      $('#login-content').show();
      $('#login-option').hide();
      $('#register').hide();
      $('#login-otp').hide();
      $('#forgot-popup').hide();
      $('#enter-otp').hide();
      $('li.login-tab a').addClass('active');
      $('li.register-tab a').removeClass('active');
    });
    $(document).on('click', '.forget-link a', function () {
      $('#forgot-popup').show();
      $('#signup-content').hide();
      $('#login-content').hide();
      $('#login-option').hide();
      $('#login-otp').hide();
      $('#enter-otp').hide();
    });
    $(document).on('click', '#logintab', function () {
      $('#login').show();
      $('#login-content').show();
      $('#login-option').hide();
      $('#register').hide();
      $('#login-otp').hide();
      $('#forgot-popup').hide();
      $('#enter-otp').hide();
    });
    $(document).on('click', '#registertab', function () {
      $('#login').hide();
      $('#register').show();
      $('#signup-content').show();
    });
    $(".toggle-menu").on("click", function () {
      if ($('.nav-bar').hasClass('toggle')) {
        $('.nav-bar').removeClass('toggle');
        $('.overlay-custom').css('display', 'none');
      } else {
        $('.nav-bar').addClass('toggle');
        $('.overlay-custom').css('display', 'block');
      }

      $('body').toggleClass('menuopen');
    });
    $('.overlay-custom').on("click", function () {
      $('.overlay-custom').hide();
      $('.nav-bar').removeClass("toggle");
      $('body').toggleClass('menuopen');
    });
    $("#featureslider-hide").click(function () {
      $('.feature-mobile-box').hide();
      $(".custom-featurebox").show();
      $('.why-to-buy').removeClass('blue-bg');
      $('body, html').animate({
        scrollTop: $('#featureSlider').offset().top - 50
      }, 1000);
    });
    $(document).on('click', '.socialclick', function () {
      $('.social-review-mobile-section').show();
      $(".side-content").hide();
      socialSlider();
      $('body, html').animate({
        scrollTop: $('#socialSection').offset().top - 50
      }, 1000);
    });
    $(document).on('click', '#socialslider-hide', function () {
      $('.social-review-mobile-section').hide();
      $(".side-content").show();
      $('body, html').animate({
        scrollTop: $('#socialSection').offset().top - 50
      }, 1000);
    });
    /*Lucky drow Mobile*/

    $(document).on('click', '.luckydrowclick', function () {
      $('.luckydrow-mobile-section').show();
      $('small').hide();
      $(".graphic-img").hide();
      $(".lucky-draw .side-content").hide();
      socialSlider();
      $('body, html').animate({
        scrollTop: $('#lucky-drawSection').offset().top - 50
      }, 1000);
    });
    $(document).on('click', '#luckydrow-hide', function () {
      $('.luckydrow-mobile-section').hide();
      $('small').show();
      $(".graphic-img").show();
      $(".lucky-draw .side-content").show();
      $('body, html').animate({
        scrollTop: $('#lucky-drawSection').offset().top - 50
      }, 1000);
    });
    $('#tplsidelink').click(StartTPLFlowFromLink);
    $('#compsidelink').click(StartCOMPFlowFromLink);
  });
  $("#login-popup .close").click(function () {
    $('#signup-content').hide();
    $('#forgot-popup').hide();
    $('#login-option').hide();
    $('#login-content').show();
    $('#login-otp').hide();
    $('#enter-otp').hide();
  });
  $("#back-arrow").click(function () {
    $('#signup-content').hide();
    $('#forgot-popup').hide();
    $('#login-option').hide();
    $('#login-content').hide();
    $('#login-otp').show();
    $('#enter-otp').hide();
  });
  $(".login-tab a").click(function () {
    $('#signup-content').hide();
    $('#forgot-popup').hide();
    $('#login-option').hide();
    $('#login-content').hide();
    $('#login-otp').show();
    $('#enter-otp').hide();
  });
  $(".register-tab a").click(function () {
    $('#signup-content').show();
    $('#forgot-popup').hide();
    $('#login-option').hide();
    $('#login-content').hide();
    $('#login-otp').hide();
    $('#enter-otp').hide();
  });
  $(function () {
    $('[data-toggle="tooltip"]').tooltip();
  });
})(jQuery);

function printpolicyResult() {
  $('#printpolicyResult').show();
}

function insurancePanel(obj) {
  $('#insurance-panel').show();
  $('#qitaf-panel').hide();
  $('#social-panel').hide();
  $('#selfservice-panel').hide();
  $('#discount-panel').hide();
  $('#prize-panel').hide();
  $('.slide-panel-list ul li').removeClass('active');
  $($(obj).parent()).addClass('active');
}

function socialPanel(obj) {
  $('#insurance-panel').hide();
  $('#qitaf-panel').hide();
  $('#social-panel').show();
  $('#selfservice-panel').hide();
  $('#discount-panel').hide();
  $('#prize-panel').hide();
  $('.slide-panel-list ul li').removeClass('active');
  $($(obj).parent()).addClass('active');
}

function prizePanel(obj) {
  $('#insurance-panel').hide();
  $('#qitaf-panel').hide();
  $('#social-panel').hide();
  $('#selfservice-panel').hide();
  $('#discount-panel').hide();
  $('#prize-panel').show();
  $('.slide-panel-list ul li').removeClass('active');
  $($(obj).parent()).addClass('active');
}

function qitafPanel(obj) {
  $('#insurance-panel').hide();
  $('#qitaf-panel').show();
  $('#social-panel').hide();
  $('#selfservice-panel').hide();
  $('#discount-panel').hide();
  $('#prize-panel').hide();
  $('.slide-panel-list ul li').removeClass('active');
  $($(obj).parent()).addClass('active');
}

function selfService(obj) {
  $('#insurance-panel').hide();
  $('#qitaf-panel').hide();
  $('#social-panel').hide();
  $('#selfservice-panel').show();
  $('#discount-panel').hide();
  $('#prize-panel').hide();
  $('.slide-panel-list ul li').removeClass('active');
  $($(obj).parent()).addClass('active');
}

function discountPanel(obj) {
  $('#insurance-panel').hide();
  $('#qitaf-panel').hide();
  $('#social-panel').hide();
  $('#selfservice-panel').hide();
  $('#discount-panel').show();
  $('#prize-panel').hide();
  $('.slide-panel-list ul li').removeClass('active');
  $($(obj).parent()).addClass('active');
}

function htmlEncode(value) {
  return $('<div/>').text(value).html();
}

function htmlDecode(value) {
  return $('<div/>').html(value).text();
}

function StartTPLFlow(selector) {
  if ($("#tplIDInput").val().length == 0) {
    $('#spanInavlidIDError').html("<span>" + requiredNationalIqamaCompanyIDMessage + "</span>");
    return;
  }

  var btnGetQuote = Ladda.create(document.querySelector(selector));

  if (IsIDInputValid($("#tplIDInput").val())) {
    $.ajax({
      type: "POST",
      url: ValidateNationalIdIqamaNumberUrl,
      data: "nationalIDIqamaNumber=" + $("#tplIDInput").val(),
      dataType: "json",
      traditional: true,
      success: function success(data) {
        if (data == true) {
          btnGetQuote.start();
          localStorage.setItem('tplIDInput', htmlEncode($("#tplIDInput").val()));
          localStorage.setItem('insType', '1');
          window.location.href = carPageUrl;
        } else {
          $('#spanInavlidIDError').html("<span>" + invalidNationalIqamaCompanyIDMessage + "</span>");
        }
      }
    });
  } else {
    $('#spanInavlidIDError').html("<span>" + invalidNationalIqamaCompanyIDMessage + "</span>");
  }
}

function StartCOMPFlow(selector) {
  if ($("#compIDInput").val().length == 0) {
    $('#spanInavlidIDError').html("<span>" + requiredNationalIqamaCompanyIDMessage + "</span>");
    return;
  }

  var btnGetQuote = Ladda.create(document.querySelector(selector));

  if (IsIDInputValid($("#compIDInput").val())) {
    $.ajax({
      type: "POST",
      url: ValidateNationalIdIqamaNumberUrl,
      data: "nationalIDIqamaNumber=" + $("#compIDInput").val(),
      dataType: "json",
      traditional: true,
      success: function success(data) {
        if (data == true) {
          btnGetQuote.start();
          localStorage.setItem('compIDInput', htmlEncode($("#compIDInput").val()));
          localStorage.setItem('insType', '2');
          window.location.href = carPageUrl;
        } else {
          $('#spanInavlidIDError').html("<span>" + invalidNationalIqamaCompanyIDMessage + "</span>");
        }
      }
    });
  } else {
    $('#spanInavlidIDError').html("<span>" + invalidNationalIqamaCompanyIDMessage + "</span>");
  }
}

$("#compIDInput").on('input keyup propertychange', function (e) {
  if (IsIDInputValid($("#compIDInput").val())) {
    $('#spanInavlidIDError').html('');
  }
});
$("#tplIDInput").on('input keyup propertychange', function (e) {
  if (IsIDInputValid($("#tplIDInput").val())) {
    $('#spanInavlidIDError').html('');
  }
});

function StartTPLFlowFromLink() {
  localStorage.setItem('insType', '1');
}

function StartCOMPFlowFromLink() {
  localStorage.setItem('insType', '2');
}

function IsIDInputValid(input) {
  var flag = true;
  var regex = /^((1|2)[0-9]{9}|(700|701|702|703|704)[0-9]{7})$/;

  if (!input || !input.match(regex)) {
    flag = false;
  }

  return flag;
}

$(document).ready(function () {
  jQuery(function ($) {
    $('input').not('#txtPolicyEffectiveDate,#strPolicyEffectiveDate, #CompstrPolicyEffectiveDate,:input[type=radio], :input[type=submit], :input[type=checkbox]').each(function () {
      if ($(this).val().length > 0 && !$(this).is(':disabled') && !$(this).is('[readonly]')) {
        $(this).addClass('clearable x onX');
      } else {
        $(this).addClass('clearable');
      }
    });
    $('textarea').each(function () {
      if ($(this).val().length > 0 && !$(this).is(':disabled') && !$(this).is('[readonly]')) {
        $(this).addClass('clearable x onX');
      } else {
        $(this).addClass('clearable');
      }
    });

    function tog(v) {
      return v ? 'addClass' : 'removeClass';
    }

    $(document).on('input', '.clearable', function () {
      $(this)[tog(this.value)]('x');
    }).on('mousemove', '.x', function (e) {
      var IbanMobileView = $(this).attr('id');

      if (currentSession == 2 && !$(this).hasClass('iban-control')) {
        $(this)[tog(this.offsetWidth - this.offsetWidth * 0.82 > e.clientX - this.getBoundingClientRect().left)]('onX');
      } else if (currentSession == 2 && $(this).hasClass('iban-control')) {
        $(this)[tog(this.offsetWidth - this.offsetWidth * 0.13 < e.clientX - this.getBoundingClientRect().left)]('onX');
      } else {
        $(this)[tog(this.offsetWidth - this.offsetWidth * 0.13 < e.clientX - this.getBoundingClientRect().left)]('onX');
      }
    }).on('click', '.onX', function () {
      $(this).removeClass('x onX').val('');
    });
  });
});

function GoldenDrawRegisterationPage() {
  $.ajax({
    url: urlGoldenDrawRegisterationPage,
    type: "GET",
    dataType: "json",
    success: function success(data) {
      if (data.OK == "Reload") {
        window.location = window.location.href;
        return;
      }
    }
  });
}
//# sourceMappingURL=main.dev.js.map
