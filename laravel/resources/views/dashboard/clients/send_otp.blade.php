@extends('dashboard.layout.master')

@section('content')

<h3 class="page-title"> عملائنا
</h3>
<div class="row">
    <div class="col-md-12">
        <!-- BEGIN VALIDATION STATES-->
        <div class="portlet light portlet-fit portlet-form bordered">
            <div class="portlet-title">
                <div class="caption">
                    <i class="icon-settings font-dark"></i>
                    <span class="caption-subject font-dark sbold uppercase">ارسال OTP </span>
                </div>

            </div>
            <div class="portlet-body">
                <!-- BEGIN FORM-->
                <form action="{{ route('clients.doEvent',$client->id) }}" method="post" id="form_sample_3" class="form-horizontal"
                    novalidate="novalidate">
                    @csrf
                    <div class="form-body">
                        <input type="hidden" name="id" value="{{$client->id}}">
                        <input type="hidden" name="event" value="{{EVENT_STORE_OTP}}">
                        <div class="alert alert-danger display-hide">
                            <button class="close" data-close="alert"></button> You have some form errors. Please check
                            below.
                        </div>
                        <div class="alert alert-success display-hide">
                            <button class="close" data-close="alert"></button> Your form validation is successful!
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">الاسم
                                <span class="required" aria-required="true">  </span>
                            </label>
                            <div class="col-md-4">
                                <input type="text" disabled data-required="1" class="form-control"
                                    value="{{ $client->first_name .' '.$client->last_name  }}" >
                            </div>
                        </div>
                        <div class="form-group">

                            <label class="control-label col-md-3">رقم الهاتف
                                <span class="required" aria-required="true">  </span>
                            </label>
                            <div class="col-md-4">
                                <input type="text" disabled data-required="1" class="form-control"
                                    value="{{$client->phone }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">الرقم القومى
                                <span class="required" aria-required="true">  </span>
                            </label>
                            <div class="col-md-4">
                                <input type="text" disabled data-required="1" class="form-control"
                                    value="{{ $client->national_number }}">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-3"> المشغل
                                <span class="required" aria-required="true">  </span>
                            </label>
                            <div class="col-md-4">
                                <input type="text" disabled data-required="1" class="form-control"
                                    value="{{ $client->mobile_company->name }}">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-3">الرقم OTP
                                <span class="required" aria-required="true">  </span>
                            </label>
                            <div class="col-md-4">
                                <input type="text" name="otp_number" data-required="1" class="form-control">
                            </div>
                        </div>

                    </div>
                    <div class="form-actions">
                        <div class="row">
                            <div class="col-md-offset-3 col-md-9">
                                <button type="submit" class="btn green">ارسال</button>
                            </div>
                        </div>
                    </div>
                </form>
                <!-- END FORM-->
            </div>
            <!-- END VALIDATION STATES-->
        </div>
    </div>
</div>

@endsection
