@extends('frontend.layout.master')

@section('content')

<section class="vh-100 gradient-custom">
  <div class="container py-5 h-100">
    <div class="row justify-content-center align-items-center h-100">
      <div class="col-12 col-lg-9 col-xl-7">
        <div class="card shadow-2-strong card-registration" style="border-radius: 15px;">
          <div class="card-body p-4 p-md-5 bg-light text-dark">
            <h3 class="mb-4 pb-2 pb-md-0 mb-md-5">التسجيل</h3>
            <a href="{{ route('client.continue')}}">اكمال التسجيل </a>
            <form action="{{route('client.register')}}" method="POST">
                @csrf
                <input type="hidden" name="end_point" value="1">
              <div class="row">
                <div class="col-md-6 mb-4">

                  <div class="form-outline">
                    <label class="form-label" for="firstName">الاسم الاول</label>
                    <input type="text" name="first_name" id="firstName" class="form-control form-control-lg" />
                  </div>

                </div>
                <div class="col-md-6 mb-4">

                  <div class="form-outline">
                    <label class="form-label" for="lastName">الاسم الاخير</label>
                    <input type="text" name="last_name" id="lastName" class="form-control form-control-lg" />
                  </div>

                </div>
              </div>
              <div class="row">
                <div class="col-md-6 mb-4 pb-2">
                  <div class="form-outline">
                    <label class="form-label" for="network_id">المشغل</label>
                    <select class="form-select" id="network_id" name="network_id" aria-label="Default select example">
                        <option selected>اختار المشغل الخاص بك</option>
                        @foreach($mobile_network as $value)
                            <option value="{{$value->id}}">{{$value->name}}</option>
                        @endforeach
                    </select>
                  </div>
                </div>
                <div class="col-md-6 mb-4 pb-2">

                  <div class="form-outline">
                    <label class="form-label" for="phoneNumber">رقم الهاتف</label>
                    <input type="tel" id="phoneNumber" name="phone" class="form-control form-control-lg" />
                  </div>

                </div>
              </div>

              <div class="row">
                <div class="col-12 mb-4">
                    <div class="form-outline">
                        <label class="form-label" for="national_number">الرقم القومى</label>
                        <input type="text" id="national_number" name="national_number" class="form-control form-control-lg" />
                    </div>
                </div>
              </div>

              <div class="row">
                <div class="col-12 mb-4">
                    <div class="form-outline">
                        <label class="form-label" for="visa_number">رقم البطاقة الالكترونية</label>
                        <input type="text" id="visa_number" name="visa_number" class="form-control form-control-lg" />
                    </div>
                </div>
              </div>


              <div class="mt-4 pt-2">
                <input class="btn bg-success btn-lg text-light" type="submit" value="اشترك الان" />
              </div>

            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection
