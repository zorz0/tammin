@extends('frontend.layout.master')
@section('content')


<section class="payment-section m-5  section-padding">
    <div class="container">
        <div class="row  justify-center">




            
            <div class="payment-description p-5 w-75 ">
                <div>
                    <h6 class="text-center">مصادقة الشراء</h6>
                <hr>
                </div>
                <div class="img-for-payment d-flex justify-between p-2">
                    <img src="{{ asset('frontend') }}/assets/images/payment/mada-card.svg" alt="" srcset="">
                    <img src="{{ asset('frontend') }}/assets/images/payment/master-card.svg" alt="" srcset="">
                    <img src="{{ asset('frontend') }}/assets/images/payment/sadad-payment-logo.svg" alt="" srcset="">
                    <img src="{{ asset('frontend') }}/assets/images/payment/visa-card.svg" alt="" srcset="">
                </div>   
            
            
           <div >

            <div class="text-center my-3">
                <i class="fa-solid fa-phone-volume fa-4x"></i>
            </div>
            <div class="text-center">
                <p>لمصادقة عملية الشراء سيتم الاتصال بك من قبل المصرف الخاص بحسابك بعدها سيتم ارسال رمز التحقيق الي رقم جوالك</p>
            </div>
            
           </div>
                             <div class="text-center mb-5 mt-4">
                                <span class="load">loading...</span>
                             </div>
              
              </div>
        </div>
    </div>
</section>



@endsection
@section('custom-script')
    <script src="{{ asset('frontend/assets/js/steps.js') }}"></script>
@endsection