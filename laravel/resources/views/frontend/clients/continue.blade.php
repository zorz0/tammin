@extends('frontend.layout.master')

@section('content')

<section class="vh-100 gradient-custom">
  <div class="container py-5 h-100">
    <div class="row justify-content-center align-items-center h-100">
      <div class="col-12 col-lg-9 col-xl-7">
        <div class="card shadow-2-strong card-registration" style="border-radius: 15px;">
          <div class="card-body p-4 p-md-5 bg-light text-dark">
            <div class="m-5">
            <form action="{{route('client.continue')}}" method="POST">
                @csrf
                <div class="row">
                    <div class="col-12 mb-4">
                        <div class="form-outline">
                            <label class="form-label mb-4" for="national_number">الرقم القومى</label>
                            <input type="text" id="national_number" name="national_number" class="form-control form-control-lg" placeholder="ادخال الرقم القومى" />
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
