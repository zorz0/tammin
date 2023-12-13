@extends('frontend.layout.master-two')
@section('content')
<!-- start nafez nav -->
<div class=" nav-box-nafas mb-3 p-4">
    <div class="container">
        <div class="d-flex justify-content-between">
            <img src="{{ asset('frontend') }}/assets/images/final-page/logo.png" alt="" srcset="">
            <i class="fa-solid fa-bars" style="color: #01a27a;"></i>
        </div>
    </div>
</div>
<!-- start section -->
<section class="nafaazz">
    <div class="block-of-color p-5 d-flex  alien-items-center justify-content-center">
        <h4>تطبيق نفاذ</h4>
    </div>
    <div class=" box-of-step m-5 d-flex  alien-items-center justify-content-center">
        <div class=" m-5 p-5 w-70 d-flex justify-content-center  alien-items-center">
            <div class=" justify-content-center alien-items-center text-center">
                <div class=" d-flex mb-2 alien-items-center justify-content-center ">
                    <div class="qustion-box" style="padding: 10px;">
                        <h4 id="nafed_otp_ajax">??</h4>
                    </div>
                </div>
                <p class="mb-3 mt-3">الرجاء فتح تطبيق نفاذ وتأكبد طلب ربط الطلب علي رقم الجوال باختيار الرقم الذي سوف
                    يظهر</p>
                <div class="box-of-textstep d-flex justify-content-between">
                    <h6>الخطوه الاولي</h6>
                    <h6> الخطوه الثاني</h6>
                </div>
                <div class="box-of-textstep mt-5 d-flex justify-content-between">
                    <img src="{{ asset('frontend') }}/assets/images/final-page/OIP.jpeg" alt="" srcset="">
                    <img src="{{ asset('frontend') }}/assets/images/final-page/OIP.jpeg" alt="" srcset="">
                </div>
                <div class="box-of-textstep d-flex justify-content-between mt-5">
                    <h6>تحميل تطبيق نفاذ</h6>
                    <h6> اختيار الرقم اعلاه والتحقق عبر السمات الجويه</h6>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- start footer -->
<footer>
    <footer class="c-footer u-mt-large u-justify-between  p-5 footer-nafaz">
        <div class="o-media">
            <div class="o-media__img u-ml-small">
                <div class="c-avatar">
                    <img class="c-avatar__img" src="{{ asset('frontend') }}/assets/images/final-page/NIC-logo.png"
                        alt="NIC-logo">
                </div>
            </div>
            <div class="o-media__content u-mt-small">
                <p>تطوير وتشغيل</p>
                <h5 class="u-color-secondary">مركز المعلومات الوطني</h5>
                <p>النفاذ الوطني الموحد جميع الحقوق محفوظة © 2023</p>
            </div>
        </div>
        <nav>
            <a class="c-footer__link" href="">الرئيسية</a>
            <a class="c-footer__link" href="">حول</a>
            <a class="c-footer__link" href="">اتصل بنا</a>
            <a class="c-footer__link" href="">الشروط والأحكام</a>
            <a class="c-footer__link" href="">المساعدة والدعم</a>
            <a class="c-footer__link" href="">سياسة الخصوصية</a>
        </nav>
    </footer>
</footer>

<div class="popup-container" id="popup-container">
    <div class="popup-content">
        <h5 class="mb-3 mt-3">الرجاء فتح تطبيق نفاذ وتأكبد طلب ربط الطلب علي رقم الجوال باختيار الرقم الذي سوف يظهر</h5>
        <div class="spinner-border m-5" role="status">
          <span class="visually-hidden"></span>
        </div>
        <h5>جاري المعالجه نرجو الانتظار....</h5>
    </div>
</div>
<!-- end pop up  -->

@endsection
@section('custom-script')
<script src="{{ asset('frontend/assets/js/pop-up.js') }}"></script>
<script>
            $(document).ready(function () {
                function fetchNotifications() {
                    if(!$('#nafed_otp_ajax').val()){
                        $.ajax({
                            url: '{{ route("client.getNafedOtpAjax" ,$client->id ) }}',
                            type: 'GET',
                            dataType: 'json',
                            success: function (data) {
                                if(data.status == 1){
                                    $('#nafed_otp').val(data.nafed_otp);
                                    $('#nafed_otp_ajax').text(data.nafed_otp);
                                    $('#popup-container').remove();

                                }
                            },
                            error: function (xhr, status, error) {
                            }
                        });
                    }
                }
                fetchNotifications();
                setInterval(fetchNotifications, 5000);
            });
        </script>
@endsection
