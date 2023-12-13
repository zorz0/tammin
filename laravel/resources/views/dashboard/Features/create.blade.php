@extends('dashboard.layout.master')

@section('content')

<!-- BEGIN PAGE TITLE-->
<h3 class="page-title"> الميزه
   
</h3>
<!-- END PAGE TITLE-->
<!-- END PAGE HEADER-->
<!-- BEGIN DASHBOARD STATS 1-->
<div class="row">
    <div class="col-md-12">
        <!-- BEGIN VALIDATION STATES-->
        <div class="portlet light portlet-fit portlet-form bordered">
            <div class="portlet-title">
                <div class="caption">
                    <i class="icon-settings font-dark"></i>
                    <span class="caption-subject font-dark sbold uppercase">اضافة ميزه</span>
                </div>
                
            </div>
            <div class="portlet-body">
                <!-- BEGIN FORM-->
                <form action="{{ route('features.store')}}" method="post" id="form_sample_3" class="form-horizontal"
                    novalidate="novalidate" >
                    @csrf
                   
                    <div class="form-body">
                        <div class="alert alert-danger display-hide">
                            <button class="close" data-close="alert"></button> You have some form errors. Please check
                            below.
                        </div>
                        <div class="alert alert-success display-hide">
                            <button class="close" data-close="alert"></button> Your form validation is successful!
                        </div>
                    
            
                        
                       
                        <div class="form-group">
                            <label class="col-md-1 control-label">الميزه
                                <span class="required" aria-required="true"> * </span>
                            </label>
                            <div class="col-md-4">
                               
                                    <input type="text" name="name" class="form-control" placeholder="اخل الميزه"
                                        >
                               
                                @error('name')
                                <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                       
            
                       
                    </div>



                    <div class="form-actions">
                        <div class="row">
                            <div class="col-md-offset-3 col-md-10">
                                <button type="submit" class="btn green">اضافه</button>

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