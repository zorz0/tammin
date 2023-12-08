@extends('dashboard.layout.master')
@section('content')

<h3 class="page-title"> 
    <small>تعديل البيانات</small>
</h3>


<div class="row">
    <div class="portlet light bordered col-10 text-center">
        <div class="portlet-title">
            <div class="caption">
                <i class="icon-bubble font-green-sharp"></i>
                <span class="caption-subject font-green-sharp bold uppercase">تعديل البيانات</span>
            </div>
           
        </div>
        <div class="portlet-body form">
            <form role="form" action="{{ route('profile.update') }}" method="post">
                @csrf
                @method('patch')
                <div class="form-body">
                    <div class="form-group">
                        
                       
                        <div class="input-icon right margin-top-10" >
                            <i class="fa fa-check"></i>
                            <input type="text" class="form-control" placeholder="fluid" value="{{ auth()->user()->name }}"  name="name"> </div>
                            @error('name')
                            
                            <smal class="text-danger">{{ $message }}</smal>
                        @enderror
                        <div class="input-group margin-top-10">
                            <span class="input-group-addon">
                                <i class="fa fa-envelope"></i>
                            </span>
                            <input type="email" class="form-control" placeholder=".input-xlarge" value="{{ auth()->user()->email }}" name="email"> </div>
                        @error('email')
                            <smal class="text-danger">{{ $message }}</smal>
                        @enderror
                        <hr> </div>
                   
                </div>
                <div class="form-actions right">
                   
                    <button type="submit" class="btn green">تعديل</button>
                </div>
            </form>
        </div>
    </div>
</div>


<div class="row">
    <div class="portlet light bordered col-5 ">
        <div class="portlet-title">
            <div class="caption">
                <i class="icon-bubble font-green-sharp"></i>
                <span class="caption-subject font-green-sharp bold uppercase">تغير الباسورد</span>
            </div>
           
        </div>
       
        <div class="portlet light bordered">
            
            <div class="portlet-body form">

                
                <form role="form"   action="{{ route('password.update') }}" method="post">
                    @csrf
                    @method('put')
                    <div class="form-body">
            
                        <div class="form-group">
                            <label for="exampleInputPassword1">الباسورد الحالي</label>
                            <div class="input-group">
                                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="current_password">
                                <span class="input-group-addon">
                                    <i class="fa fa-user font-red"></i>
                                </span>
                            </div>
                            @error('current_password')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                        </div>
                       
                        <div class="form-group">
                            <label for="exampleInputPassword1">الباسورد الجديد</label>
                            <div class="input-group">
                                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password">
                                <span class="input-group-addon">
                                    <i class="fa fa-user font-red"></i>
                                </span>
                            </div>
                            @error('password')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">اعادة كتابة الباسورد</label>
                            <div class="input-group">
                                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password_confirmation">
                                <span class="input-group-addon">
                                    <i class="fa fa-user font-red"></i>
                                </span>
                            </div>
                            @error('password_confirmation')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror

                        </div>
                    </div>
                    <div class="form-actions">
                        <button type="submit" class="btn blue">تغير</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>



@endsection
