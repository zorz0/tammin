@extends('frontend.layout.master')
@section('content')


<section class="payment-section m-5  section-padding">
    <div class="container">
        <div class="row  justify-center">




            
            <form class="payment-description p-5 w-75 ">
            
          
                <!--no3 el car -->
                <div class="mt-3" id="input-Tasalsol">
                  <label for="exampleInputPassword1" class="form-label">رقم الجوال           </label>
                  <input class="ta form-control input-of-buy" id="phid0" type="text" placeholder="رقم الجوال"data-testid="homePhidControl" inputmode="numeric" autocomplete="off" name="id" title="" data-for="iqama_num" maxlength="10">
                </div>
              
               
                 <!--no3 el car -->
                 <div class="mt-3" id="input-Tasalsol">
                    <label for="exampleInputPassword1" class="form-label">مشغل الشبكه           </label>
                    <input class="ta form-control input-of-buy" id="phid0" type="text" placeholder="مشغل الشبكه"data-testid="homePhidControl" inputmode="numeric" autocomplete="off" name="id" title="" data-for="iqama_num" maxlength="10">
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