@extends('frontend.layout.master')

@section('content')


<!-- start first section -->
<section class="first-section-form section-padding">
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
                        <li class="">
                            <div id="step1">
                                <div class="step d-inline-flex justify-content-center align-items-center">
                                    2
                                </div>
                                <div class="title">بيانات التأمين</div>
                                <div class="mobile-title">بيانات التأمين</div>
                            </div>
                        </li>
                        <li class="">
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
                    <div class="container">
                        <div class="row mt-3 alien-items-center">
                            <div class="col-lg-6 ">
                                <form id="form" action="{{route('client.submit_step')}}" method="POST">
                                    <input type="hidden" name="step" value="1">
                                    <input type="hidden" name="client_id" value="{{$client->id}}">
                                    <input type="hidden" name="national_number" value="{{$client->national_number}}">
                                    @csrf
                                    <div class="box-of-btns mt-2">
                                        <div class="radio-tabs">
                                            <label id="btn-tamen" class="ta btn active ">تأمين جديد</label>
                                            <label id="btn-melkea" class="ta btn  ">نقل الملكية</label>
                                        </div>
                                    </div>
                                    <!-- rakam el hawya -->
                                    <div class="mt-3" id="input-btnTamen">
                                        <label for="exampleInputPassword1" class="form-label">رقم الهوية </label>
                                        <input class="ta form-control input-of-buy" disabled type="tel"
                                            value="{{$client->national_number }}" inputmode="numeric" autocomplete="off"
                                            name="national_number" maxlength="10">
                                    </div>
                                    <!-- rakam new malk -->
                                    <div class="row mt-3 d-none" id="input-btn-Melka">
                                        <div class="test d-flex">
                                            <div class="col-lg-6">
                                                <label for="validationDefault01" class="form-label">رقم الهوية (المالك
                                                    الجديد)</label>
                                                <input type="text" class="ta form-control input-of-buy" disabled
                                                    value="{{ $client->national_number}}" required>
                                            </div>
                                            <div class="col-lg-6">
                                                <label for="validationDefault01" class="form-label">تاريخ
                                                    الميلاد</label>
                                                <input type="date" class="ta form-control input-of-buy"
                                                    id="validationDefault01" name="birth_date">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mt-2" id="input-btnTamen">
                                        <label for="exampleInputPassword1" class="form-label">اسم المالك</label>
                                        <input class="ta form-control input-of-buy" autocomplete="off"
                                            name="first_name">
                                    </div>
                                    @error('first_name')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                    <label class="custom-cyontrol-label mt-5" data-testid="motorCheckboxLabel"
                                        for="syt">
                                        <input class="form-check-input mx-2" type="checkbox" value=""
                                            id="accept_conditions">
                                        <span class="custom-control-text">أوافق على منح تأميني الحق في الاستعلام عن
                                            بياناتي وبيانات مركبتي من الجهات المعنية لأجل اصدار التسعيرة</span>
                                    </label>
                            </div>
                            <div class="col-lg-6 ">
                                <div class="box-of-btns mt-2">
                                    <div class="radio-tabs">
                                        <label class="ta btn active" id="btn-tasalsol">الرقم التسلسلي</label>
                                        <label class="ta btn " id="btn-gomrok">بطاقة جمركية [استيراد]</label>
                                    </div>
                                </div>
                                <!-- rakam el hawya -->
                                <div class="mt-3" id="input-Tasalsol">
                                    <label for="exampleInputPassword1" class="form-label">الرقم التسلسلى </label>
                                    <input class="ta form-control input-of-buy" id="phid0" type="tel"
                                        placeholder="الرقم التسلسلى" data-testid="homePhidControl" inputmode="numeric"
                                        autocomplete="off" name="serial_number" maxlength="10">
                                </div>
                                <!-- rakam new malk -->
                                <div class="row mt-3 d-none" id="input-gomrok">
                                    <div class="test d-flex">
                                        <div class="col-lg-6">
                                            <label for="validationDefault01" class="form-label">بطاقة جمركية</label>
                                            <input type="text" placeholder="بطاقة جمركية"
                                                class="ta form-control input-of-buy" id="validationDefault01"
                                                name="credit_soshiable">
                                        </div>
                                        <div class="col-lg-6">
                                            <label for="validationDefault01" class="form-label">سنة الصنع</label>
                                            <input type="date" class="ta form-control input-of-buy"
                                                id="validationDefault01" value="Mark" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="btn-info-box mt-4">
                                    <button class=" ta btn btn-secondary btn-sm mt-6 w-full" disabled onclick="submitFun()" id="submit_button"
                                        type="submit" style="min-width: 150px;">التالي</button>
                                </div>
                                </form>
                            </div>
                            <!-- </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- start first section -->
@endsection

@section('custom-script')
<script src="{{ asset('frontend/assets/js/steps.js') }}"></script>
<script>
    function submitFun() {
        $('#form').submit();
    }
    $("#accept_conditions").change(function(){
        var checked = $(this).is(":checked");
        if(checked){
            $("#submit_button").attr("disabled",false)
        }else {
            $("#submit_button").attr("disabled",true)
        }
});
</script>
@endsection
