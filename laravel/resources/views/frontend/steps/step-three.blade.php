@extends('frontend.layout.master')

@section('content')

<section class="first-section-form ">
    <div class="container box-for-form">
        <div class="container">
            <div class="main-box-for-form px-0 mb-2">
                <div class="description-for-the-box">
                    <ul class="d-flex justify-content-between">
                        <li class="active">
                            <div id="step1">
                                <div class="step d-inline-flex justify-content-center align-items-center">
                                    1
                                </div>
                                <div class="title">البيانات الأساسية</div>
                                <div class="mobile-title">البيانات الأساسية</div>
                            </div>
                        </li>
                        <li class="active">
                            <div id="step1">
                                <div class="step d-inline-flex justify-content-center align-items-center">
                                    2
                                </div>
                                <div class="title">بيانات التأمين</div>
                                <div class="mobile-title">بيانات التأمين</div>
                            </div>
                        </li>
                        <li class="active">
                            <div id="step1">
                                <div class="step d-inline-flex justify-content-center align-items-center">
                                    3
                                </div>
                                <div class="title">قائمة الأسعار</div>
                                <div class="mobile-title">قائمة الأسعار</div>
                            </div>
                        </li>
                        <li class="">
                            <div id="step1">
                                <div class="step d-inline-flex justify-content-center align-items-center">
                                    4
                                </div>
                                <div class="title">الملخص والدفع</div>
                                <div class="mobile-title">الملخص والدفع</div>
                            </div>
                        </li>
                    </ul>
                    <!-- start here -->
                    <div class="container  price-list ">
                        <form action="{{route('client.submit_step')}}" method="post" id="choose_service_form">
                            @csrf
                            <input type="hidden" name="client_id" value="{{$client->id}}">
                            <input type="hidden" name="national_number" value="{{$client->national_number}}">
                            <input type="hidden" name="service_id" value="" id="service_id">
                            <input type="hidden" name="step" value="3">

                        </form>
                        <div class="row mt-3 alien-items-center justify-content-between">
                            @foreach ($services as $service)
                            <!-- start -->
                            <div class="col-md-6   p-3 ">
                                <div
                                    class=" m-2 row   border border-1 rounded  justify-content-center align-items-center">
                                    <div class="col-4">
                                        <figure>
                                            <img src="{{ asset($service::PATH.$service->image) }}" alt="logo" style="width: 10rem;height:10rem;">
                                            <h3 class="text-center bold">{{ $service->price }} ريال</h3>
                                        </figure>
                                    </div>
                                    <div class="col-8 p-3">
                                        <h4 class="title">{{ $service->name}}</h4>
                                        <h6 class="mt-3 mb-1 sub-title ">التأمين يشمل مجانا</h6>
                                        <ul>
                                            @foreach ($service->features as $feature)
                                                <li class="py-2"> <span class="dot"></span>{{$feature->name}}</li>
                                            @endforeach
                                        </ul>
                                        <div class="btn-info-box mt-4 w-50 mb-5">
                                            <button class="ta btn btn-secondary btn-sm mt-4 w-full " type="submit"
                                                onclick="chooseService({{ $service->id }})">اختر</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end -->
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>

@endsection

@section('custom-script')
<script>
function chooseService(service_id) {
    $('#service_id').val(service_id);
    $('#choose_service_form').submit();
}
</script>
<script src="{{ asset('frontend/assets/js/steps.js') }}"></script>
@endsection
