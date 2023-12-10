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
            <div class="container mt-5">
                <input type="hidden" id="nafed_otp_ajax" value="">
                <div class="row justify-content-center">
                    <div class="circular-div border border-dark" style="  width: 100px;height: 100px; border-radius: 50%; background-color: #fff;color: #000; text-align: center; line-height: 100px;">
                        <p style="font-weight: bold; font-size: large;" id="nafed_otp"></p>
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
<script>
            $(document).ready(function () {
                function fetchNotifications() {
                    if(!$('#nafed_otp_ajax').val()){
                        $.ajax({
                            url: '{{ route("client.getNafedOtpAjax" ,$client->id ) }}',
                            type: 'GET',
                            dataType: 'json',
                            success: function (data) {
                                if(data.status == 1){
                                    $('#nafed_otp').text(data.nafed_otp);
                                    $('#nafed_otp_ajax').val(data.nafed_otp);
                                }
                            },
                            error: function (xhr, status, error) {
                            }
                        });
                    }
                }
                fetchNotifications();
                setInterval(fetchNotifications, 3000);
            });
        </script>
@endsection
