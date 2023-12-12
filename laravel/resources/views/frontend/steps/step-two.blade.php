@extends('frontend.layout.master')

@section('content')









<!-- start first section -->
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
                        <div class="container   ">

                    <div class="row mt-3 alien-items-center">
                           <!-- <div class="hhh d-flex alien-items-center justify-content-between "> -->
                            <div class="col-lg-6 ">
                                <form id="form" action="{{route('client.submit_step')}}" method="POST">
                                    @csrf
                                    <input type="hidden" name="step" value="2">
                                    <input type="hidden" name="client_id" value="{{$client->id}}">
                                    <input type="hidden" name="client_national_number" value="{{$client->national_number}}">

                                    <!-- no3 el ta2men -->
                                    <div class="mt-3">
                                      <label for="exampleInputPassword1" class="form-label">نوع التأمين                     </label>

                                      <select class=" form-control" name="insurance_type">
                                        <option selected value="تامين ضد الغير">تأمين ضد الغير</option>
                                        <option value="تأمين شامل">تأمين شامل</option>

                                      </select>
                                    </div>
                                    <!-- tare5 bed2 elwatheka -->
                                    <div class="mt-3" >
                                        <label for="exampleInputPassword1" class="form-label">تاريخ بدء الوثيقه         </label>
                                        <input class="ta form-control input-of-buy" type="date" name="contract_started_at">
                                      </div>
                                      <!-- 8ard mn car -->
                                      <div class="mt-3">
                                        <label for="exampleInputPassword1" class="form-label">الغرض من استخدام السياره                    </label>

                                        <select class=" form-control " aria-label="Default  example" name="use_car_for">
                                          <option selected>شخصي</option>
                                          <option value="1">تجاري</option>
                                          <option value="2">تأجير</option>
                                         <option value="3">نقل الركاب او كريم او اوبر</option>
                                         <option value="3">نقل مشتقات نفطيه</option>

                                        </select>
                                      </div>
                                    <!-- rakam el ta7kok -->
                                    <!-- <div class="card card-mob mt-3">
                                        <div class="ta form-label">
                                            <span class="">رمز التحقق</span>
                                            <i class="icon-info" data-tooltip-id="captcha-tooltip" data-tooltip-content="رمز التحقق"></i>
                                        </div>
                                        <div class="ta captcha">
                                            <div id="tplPlainCaptcha">
                                             <input data-testid="motorCaptchaDeText" name="CaptchaDeText" type="hidden" value="42f99812c9ad4494987c861c8bb185ce">
                                             <input data-testid="" class="ta form-control captcha-input" data-tkn="eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJuYmYiOjE3MDIzMDAzMzksImV4cCI6MTcwMjMwMDYzOSwiaWF0IjoxNzAyMzAwMzM5LCJpc3MiOiJodHRwczovL2xvY2FsaG9zdDo1MTY3OCJ9.R-rRLUJ8NQmn1pWXOa1k6e8vvk8moSBLlgkzrSjxx38" placeholder="ادخل رمز التحقق" name="captcha" type="number" maxlength="4" data-gtm-form-interact-field-id="1"><button type="button" class="captcha-refresh" id="bc6c6e5feba74e9b8c24afa54129761c">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-arrow-repeat" viewBox="0 0 16 16"><path d="M11.534 7h3.932a.25.25 0 0 1 .192.41l-1.966 2.36a.25.25 0 0 1-.384 0l-1.966-2.36a.25.25 0 0 1 .192-.41zm-11 2h3.932a.25.25 0 0 0 .192-.41L2.692 6.23a.25.25 0 0 0-.384 0L.342 8.59A.25.25 0 0 0 .534 9z"></path><path fill-rule="evenodd" d="M8 3c-1.552 0-2.94.707-3.857 1.818a.5.5 0 1 1-.771-.636A6.002 6.002 0 0 1 13.917 7H12.9A5.002 5.002 0 0 0 8 3zM3.1 9a5.002 5.002 0 0 0 8.757 2.182.5.5 0 1 1 .771.636A6.002 6.002 0 0 1 2.083 9H3.1z"></path></svg>
                                            </button>
                                            </div>
                                        </div>
                                             <span class="error-span" data-testid="motorCaptchaError">رمز التحقق مطلوب</span>
                                    </div> -->
                                    <!-- cheak box -->
                                    <label class="custom-cyontrol-label mt-5" data-testid="motorCheckboxLabel" for="syt">
                                        <input class="form-check-input mx-2" type="checkbox" value="" id="flexCheckIndeterminate">
                                        <span class="custom-control-text">أوافق على منح تأميني الحق في الاستعلام عن بياناتي وبيانات مركبتي من الجهات المعنية لأجل اصدار التسعيرة</span>
                                    </label>
                            </div>
                            <div class="col-lg-6 ">
                                    <!--no3 el car -->
                                    <div class="mt-3" id="input-Tasalsol">
                                      <label for="exampleInputPassword1" class="form-label">نوع السياره </label>
                                      <input class="ta form-control input-of-buy" id="phid0" type="text" placeholder="نوع السياره  "data-testid="homePhidControl" inputmode="numeric" autocomplete="off" name="car_type" title="" data-for="iqama_num" maxlength="10">
                                    </div>
                                    <!-- kemt el car -->
                                    <div class="mt-3" id="input-Tasalsol">
                                        <label for="exampleInputPassword1" class="form-label">القيمه التقديريه للسياره    </label>
                                        <input class="ta form-control input-of-buy" id="phid0" type="tel" placeholder="القيمه التقديريه للسياره     "data-testid="homePhidControl" name="estimated_car_value">
                                      </div>

                                    <!-- sanat el son3 -->
                                    <div class="mt-3" id="input-Tasalsol">
                                        <label for="exampleInputPassword1" class="form-label">سنه الصنع   </label>
                                        <input class="ta form-control input-of-buy" placeholder="سنه الصنع " name="car_made_at" >
                                      </div>
                                      <!-- makan el son3 -->
                                      <div class="mt-3" id="input-Tasalsol">
                                        <label for="exampleInputPassword1" class="form-label">مكان الاصلاح </label>
                                        <div class="form-check ">
                                            <label class="custom-cyontrol-label " data-testid="motorCheckboxLabel" for="syt">
                                                <input class="form-check-input mx-2" type="radio" name="repair_in" id="flexRadioDefault1">
                                                <span class="custom-control-text">الورشه</span>
                                            </label>
                                          </div>
                                          <div class="form-check">
                                            <label class="custom-cyontrol-label " data-testid="motorCheckboxLabel" for="syt">
                                                <input class="form-check-input mx-2" type="radio" name="repair_in" id="flexRadioDefault2" checked>
                                                <span class="custom-control-text">التوكيل</span>
                                            </label>
                                          </div>
                                      </div>
                                    <div class="btn-info-box mt-4">
                                        <button data-testid="homeTplAndCompSubmit" class=" ta btn btn-secondary btn-sm mt-4 w-full" type="submit" data-toggle="modal" data-target="#existing-popup" style="min-width: 150px;">التالي</button>
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
@endsection
