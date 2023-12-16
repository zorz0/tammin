@extends('dashboard.layout.master')

@section('content')



 <div class="row">
    <div class="col-md-12">
        <!-- BEGIN VALIDATION STATES-->
        <div class="portlet light portlet-fit portlet-form bordered">
            <div class="portlet-title">
                <div class="caption">
                    <i class="icon-settings font-dark"></i>
                    <span class="caption-subject font-dark sbold uppercase">Create Service</span>
                </div>
                
            </div>
            <div class="portlet-body">
                <!-- BEGIN FORM-->
                <form action="{{ route('services.store') }}" method="post" id="form_sample_3" class="form-horizontal" novalidate="novalidate"  enctype="multipart/form-data">
                    @csrf
                    <div class="form-body">
                        <div class="alert alert-danger display-hide">
                            <button class="close" data-close="alert"></button> You have some form errors. Please check below. </div>
                        <div class="alert alert-success display-hide">
                            <button class="close" data-close="alert"></button> Your form validation is successful! </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">اسم الخدمه
                                <span class="required" aria-required="true"> * </span>
                            </label>
                            <div class="col-md-4">
                                <input type="text" name="name" data-required="1" class="form-control"> </div>
                            @error('name')
                            <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">سعر الخدمه
                                <span class="required" aria-required="true"> * </span>
                            </label>
                            <div class="col-md-4">
                                <input type="text" name="price" data-required="1" class="form-control"> </div>
                            @error('price')
                            <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">الصوره
                                <span class="required" aria-required="true"> * </span>
                            </label>
                            <div class="col-md-4">
                                <input type="file" name="image" data-required="1" class="form-control">
                            @error('image')
                            <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-3">مميزات الخدمه
                                <span class="required" aria-required="true"> * </span>
                            </label>
                            <div class=" control-label col-md-4">
                <ul>

                    @foreach ($features as $feature  )
                   <li style="text-align: start">
                    
                        <input type="checkbox" value="{{ $feature->id }}" name="feature_id[]"       >
   
                        {{ $feature->name }}
                   </li>
                        
                    @endforeach
                </ul>
                               
                            </div>

                            @error('feature_id')
                            <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                      
                    </div>
                    <div class="form-actions">
                        <div class="row">
                            <div class="col-md-offset-3 col-md-9">
                                <button type="submit" class="btn green">حفظ البيانات</button>

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
