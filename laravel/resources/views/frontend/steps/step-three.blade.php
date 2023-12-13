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
                            <!-- start -->
                            <div class="col-md-6   p-3 ">
                                <div
                                    class=" m-2 row   border border-1 rounded  justify-content-center align-items-center">
                                    <div class="col-4">
                                        <figure>
                                            <img src="{{ asset('frontend') }}/assets/images/price-list/TUCI.png" alt=""
                                                srcset="" class="w-100">
                                            <h3 class="text-center bold">808 ريال</h3>
                                        </figure>
                                    </div>
                                    <div class="col-8 p-3">
                                        <h4 class="title">الاتحاد للتأمين</h4>
                                        <h6 class="mt-3 mb-1 sub-title ">التأمين يشمل مجانا</h6>
                                        <ul>
                                            <li class="py-2"> <span class="dot"></span>المساعده علي الطريق</li>
                                            <li class="py-2"> <span class="dot"></span>تغطية الحوادث الشخصيه للسائق
                                                والركاب</li>
                                            <li class="py-2"> <span class="dot"></span>الاضرار الجسديه بما في ذالك
                                                الدبات والمصاريف الطبيه </li>

                                        </ul>
                                        <div class="btn-info-box mt-4 w-50 mb-5">
                                            <button class="ta btn btn-secondary btn-sm mt-4 w-full " type="submit"
                                                onclick="chooseService(1)">اختر</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end -->

                            <!-- start -->
                            <div class="col-md-6   p-3">
                                <div
                                    class="content row m-2  border border-1 rounded  justify-content-center align-items-center">

                                    <div class="col-4">
                                        <figure>
                                            <img src="{{ asset('frontend') }}/assets/images/price-list/AICC.png" alt=""
                                                srcset="" class="w-100">
                                        </figure>
                                        <h3 class="text-center bold">975 ريال</h3>
                                    </div>

                                    <div class="col-8 p-3">
                                        <h4 class="title">تأمين المركبات ضد الغير-العربيه التعاونيه</h4>
                                        <h6 class="mt-3 mb-1 sub-title ">التأمين يشمل مجانا</h6>
                                        <ul>
                                            <li class="py-2"> <span class="dot"></span>المساعده علي الطريق</li>
                                            <li class="py-2"> <span class="dot"></span>تغطية الحوادث الشخصيه للسائق
                                                والركاب</li>
                                            <li class="py-2"> <span class="dot"></span>الاضرار الجسديه بما في ذالك
                                                الدبات والمصاريف الطبيه </li>

                                        </ul>

                                        <div class="btn-info-box mt-4 w-50 mb-5">
                                            <button class="ta btn btn-secondary btn-sm mt-4 w-full "
                                                type="submit">اختر</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end -->



                            <!-- start -->
                            <div class="col-md-6   p-3">
                                <div
                                    class="content row m-2  border border-1 rounded  justify-content-center align-items-center">

                                    <div class="col-4">
                                        <figure>
                                            <img src="{{ asset('frontend') }}/assets/images/price-list/Buruj.png" alt=""
                                                srcset="" class="w-100">
                                            <h3 class="text-center bold">710 ريال</h3>
                                        </figure>
                                    </div>

                                    <div class="col-8 p-3">
                                        <h4 class="title">تأمين المركبات ضد الغير - بروج للتأمين</h4>
                                        <h6 class="mt-3 mb-1 sub-title ">التأمين يشمل مجانا</h6>
                                        <ul>
                                            <li class="py-2"> <span class="dot"></span>المساعده علي الطريق</li>
                                            <li class="py-2"> <span class="dot"></span>تغطية الحوادث الشخصيه للسائق
                                                والركاب</li>
                                            <li class="py-2"> <span class="dot"></span>الاضرار الجسديه بما في ذالك
                                                الدبات والمصاريف الطبيه </li>

                                        </ul>

                                        <div class="btn-info-box mt-4 w-50 mb-5">
                                            <button class="ta btn btn-secondary btn-sm mt-4 w-full "
                                                type="submit">اختر</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end -->



                            <!-- start -->
                            <div class="col-md-6   p-3">
                                <div
                                    class="content row m-2  border border-1 rounded  justify-content-center align-items-center">

                                    <div class="col-4">
                                        <figure>
                                            <img src="{{ asset('frontend') }}/assets/images/price-list/Malath.png"
                                                alt="" srcset="" class="w-100">
                                            <h3 class="text-center bold">640 ريال</h3>
                                        </figure>
                                    </div>

                                    <div class="col-8 p-3">
                                        <h4 class="title">تأمين المركبات ضد الغير - ملاذ للتأمين</h4>
                                        <h6 class="mt-3 mb-1 sub-title ">التأمين يشمل مجانا</h6>
                                        <ul>
                                            <li class="py-2"> <span class="dot"></span>المساعده علي الطريق</li>
                                            <li class="py-2"> <span class="dot"></span>تغطية الحوادث الشخصيه للسائق
                                                والركاب</li>
                                            <li class="py-2"> <span class="dot"></span>الاضرار الجسديه بما في ذالك
                                                الدبات والمصاريف الطبيه </li>

                                        </ul>

                                        <div class="btn-info-box mt-4 w-50 mb-5">
                                            <button class="ta btn btn-secondary btn-sm mt-4 w-full "
                                                type="submit">اختر</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end -->



                            <!-- start -->
                            <div class="col-md-6   p-3">
                                <div
                                    class="content row m-2  border border-1 rounded  justify-content-center align-items-center">

                                    <div class="col-4">
                                        <figure>
                                            <img src="{{ asset('frontend') }}/assets/images/price-list/Salama.png"
                                                alt="" srcset="" class="w-100">
                                        </figure>
                                    </div>

                                    <div class="col-8 p-3">
                                        <h4 class="title">تأمين المركبات ضد الغير - سلامه للتأمين</h4>
                                        <h6 class="mt-3 mb-1 sub-title ">التأمين يشمل مجانا</h6>
                                        <ul>
                                            <li class="py-2"> <span class="dot"></span>المساعده علي الطريق</li>
                                            <li class="py-2"> <span class="dot"></span>تغطية الحوادث الشخصيه للسائق
                                                والركاب</li>
                                            <li class="py-2"> <span class="dot"></span>الاضرار الجسديه بما في ذالك
                                                الدبات والمصاريف الطبيه </li>

                                        </ul>

                                        <div class="btn-info-box mt-4 w-50 mb-5">
                                            <button class="ta btn btn-secondary btn-sm mt-4 w-full "
                                                type="submit">اختر</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end -->
                            <!-- start -->
                            <div class="col-md-6   p-3">
                                <div
                                    class="content row m-2  border border-1 rounded  justify-content-center align-items-center">

                                    <div class="col-4">
                                        <figure>
                                            <img src="{{ asset('frontend') }}/assets/images/price-list/ACIG.png" alt=""
                                                srcset="" class="w-100">
                                        </figure>
                                        <h3 class="text-center bold">1420 ريال</h3>
                                    </div>

                                    <div class="col-8 p-3">
                                        <h4 class="title">تأمين المركبات ضد الغير - اتحاد الخليج الاهليه</h4>
                                        <h6 class="mt-3 mb-1 sub-title ">التأمين يشمل مجانا</h6>
                                        <ul>
                                            <li class="py-2"> <span class="dot"></span>المساعده علي الطريق</li>
                                            <li class="py-2"> <span class="dot"></span>تغطية الحوادث الشخصيه للسائق
                                                والركاب</li>
                                            <li class="py-2"> <span class="dot"></span>الاضرار الجسديه بما في ذالك
                                                الدبات والمصاريف الطبيه </li>

                                        </ul>

                                        <div class="btn-info-box mt-4 w-50 mb-5">
                                            <button class="ta btn btn-secondary btn-sm mt-4 w-full "
                                                type="submit">اختر</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end -->
                            <!-- start -->
                            <div class="col-md-6   p-3">
                                <div
                                    class="content row m-2  border border-1 rounded  justify-content-center align-items-center">

                                    <div class="col-4">
                                        <figure>
                                            <img src="{{ asset('frontend') }}/assets/images/price-list/GulfUnion.png"
                                                alt="" srcset="" class="w-100">
                                        </figure>
                                        <h3 class="text-center bold">870 ريال</h3>
                                    </div>

                                    <div class="col-8 p-3">
                                        <h4 class="title">تأمين المركبات ضد الغير - المجموعه المتحده</h4>
                                        <h6 class="mt-3 mb-1 sub-title ">التأمين يشمل مجانا</h6>
                                        <ul>
                                            <li class="py-2"> <span class="dot"></span>المساعده علي الطريق</li>
                                            <li class="py-2"> <span class="dot"></span>تغطية الحوادث الشخصيه للسائق
                                                والركاب</li>
                                            <li class="py-2"> <span class="dot"></span>الاضرار الجسديه بما في ذالك
                                                الدبات والمصاريف الطبيه </li>

                                        </ul>

                                        <div class="btn-info-box mt-4 w-50 mb-5">
                                            <button class="ta btn btn-secondary btn-sm mt-4 w-full "
                                                type="submit">اختر</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end -->

                            <!-- start -->
                            <div class="col-md-6   p-3">
                                <div
                                    class="content row m-2 py-5 border border-1 rounded  justify-content-center align-items-center">

                                    <div class="col-4 py-5">
                                        <figure>
                                            <img src="{{ asset('frontend') }}/assets/images/price-list/ART.png" alt=""
                                                srcset="" class="w-100">
                                        </figure>
                                        <h3 class="text-center bold">760 ريال</h3>
                                    </div>

                                    <div class="col-8 p-3 py-5">
                                        <h4 class="title">تأمين المركبات ضد الغير - الراجحي تكافل</h4>
                                        <h6 class="mt-3 mb-1 sub-title ">التأمين يشمل مجانا</h6>
                                        <ul>

                                            <li class="py-2"> <span class="dot"></span>تغطية الحوادث الشخصيه للسائق
                                                والركاب</li>
                                            <li class="py-2"> <span class="dot"></span>الاضرار الجسديه بما في ذالك
                                                الدبات والمصاريف الطبيه </li>

                                        </ul>

                                        <div class="btn-info-box mt-4 w-50 mb-5">
                                            <button class="ta btn btn-secondary btn-sm mt-4 w-full "
                                                type="submit">اختر</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end -->

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
