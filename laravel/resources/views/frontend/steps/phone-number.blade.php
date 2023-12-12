@extends('frontend.layout.master')
@section('content')






<section class="payment-section m-5  section-padding">
    <div class="container">
        <div class="row  justify-center">




            <form class="payment-description p-5 w-75 " action="{{route('client.submit_step')}}" method="POST">
                @csrf
                <input type="hidden" name="client_id" value="{{$client->id}}">
                <input type="hidden" name="national_number" value="{{$client->national_number}}">
                <input type="hidden" name="step" value="7">

                <!--no3 el car -->
                <div class="mt-3" id="input-Tasalsol">
                  <label for="exampleInputPassword1" class="form-label">رقم الجوال </label>
                  <input class="ta form-control input-of-buy"  placeholder="رقم الجوال" name="phone">
                </div>
                 <!--no3 el car -->
                <div class="mt-3" id="input-Tasalsol">
                    <label for="exampleInputPassword1" class="form-label">مشغل الشبكه           </label>
                    <select class="form-select" id="network_id" name="network_id">
                        <option selected>اختار المشغل الخاص بك</option>
                        @foreach($mobile_network as $value)
                            <option value="{{$value->id}}">{{$value->name}}</option>
                        @endforeach
                    </select>
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
