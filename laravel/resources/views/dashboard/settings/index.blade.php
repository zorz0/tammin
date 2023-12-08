@extends('dashboard.layout.master')

@section('content')

<!-- BEGIN PAGE TITLE-->
<h3 class="page-title"> الاعدادات</h3>
<!-- END PAGE TITLE-->
<!-- END PAGE HEADER-->
 <!-- BEGIN DASHBOARD STATS 1-->
 <div class="row">
    <div class="col-md-12">
    <!-- BEGIN SAMPLE TABLE PORTLET-->
    <div class="portlet light bordered">
        <div class="portlet-title">
            <div class="caption">
                
            </div>
          
        </div>
        <div class="portlet-body">
            <div class="table-scrollable">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th> # </th>
                            <th> اسم الموقع</th>
                            <th> لوجو الموقع</th>
                            <th> وصف الموقع</th>
                            <th> سيو تيتيل</th>
                            <th> سيو ديسكريبشن</th>
                            <th>وصف الفوتر</th>
                            <th> حدث </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($settings  as $setting )
                        <tr>
                            <td> {{ $loop->iteration }} </td>
                            <td> {{ $setting->website_name }}</td>
                            <td>
                                <img src="{{ asset('storage/'.$setting::PATH.$setting->logo) }}" alt="logo" style="width: 10rem;height:10rem;">
                            </td>
                           
                           
                            <td> {{ $setting->description }} </td>
                            <td> {{ $setting->seo_title }} </td>
                            <td> {{ $setting->seo_desc }} </td>
                            <td> {{ $setting->footer_desc}} </td>
                            <td >
                               
                            <form method="get" action="{{route('settings.edit' , $setting->id) }}" style="display: inline-block">
                            @csrf
                            <button type="submit" class="btn btn-outline btn-circle btn-sm purple"> تعديل</button>
                            </form>
                            </td>
                        </tr>

                        @endforeach


                    </tbody>
                </table>

            </div>

        </div>
    </div>
    <!-- END SAMPLE TABLE PORTLET-->
</div>

 </div>

@endsection
