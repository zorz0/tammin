@extends('frontend.layout.master')

@section('content')


<section class="first-section-form">
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
                        <li class="active">
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
                   <div class="container">
                    <div class="row">
                        <div class="col-lg-12 mt-5 p-4 box-for-takafol">
                            <div class="text-of-takafol">
                                <h5>تأمين المركبات ضد الغير-الراجحي تكافل</h5>
                            </div>
                            <div class="p-2 descripton-of-takafol d-flex justify-content-between">
                                <h6>سعر الوثيقه</h6>
                                <p>0.0ريال</p>
                            </div>
                            <div class="p-2 descripton-of-takafol d-flex justify-content-between">
                                <h6>خصم عدم وجود مطالبات</h6>
                                <p>0.0ريال</p>
                            </div>
                            <div class="p-2 descripton-of-takafol d-flex justify-content-between">
                                <h6>رسوم اداريه</h6>
                                <p>0.0ريال</p>
                            </div>
                            <div class="p-2 descripton-of-takafol d-flex justify-content-between">
                                <h6>قسط اشتراك التأمين</h6>
                                <p>0.0ريال</p>
                            </div>
                            <div class="p-2 descripton-of-takafol d-flex justify-content-between">
                                <h6>المجموع الجزئي</h6>
                                <p>0.0ريال</p>
                            </div>
                            <div class="p-2 descripton-of-takafol d-flex justify-content-between">
                                <h6>ضريبه القيمه المضافه</h6>
                                <p>0.0ريال</p>
                            </div>
                            <div class="p-2 descripton-of-takafol d-flex justify-content-between">
                                <h4>المبلغ الأجمالي</h4>
                                <h3>{{ $service->price }}ريال</ا>
                            </div>
                            <hr>
                            <div class="btn-info-box mt-4">
                                <form action="{{route('client.submit_step')}}" method="post">
                                    @csrf
                                    <input type="hidden" name="client_id" value="{{$client->id}}">
                                    <input type="hidden" name="national_number" value="{{$client->national_number}}">
                                    <input type="hidden" name="total_price" value="700">
                                    <input type="hidden" name="step" value="4">
                                    <button class=" ta btn btn-secondary btn-sm mt-4 w-full" type="submit" style="min-width: 150px;">التالي</button>
                                </form>
                            </div>
                        </div>
                    </div>
                   </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@section('custom-script')
    <script src="{{ asset('frontend/assets/js/steps.js') }}"></script>
@endsection
