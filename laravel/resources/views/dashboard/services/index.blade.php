@extends('dashboard.layout.master')

@section('content')

<!-- BEGIN PAGE TITLE-->
<h3 class="page-title"> خدماتنا</h3>
<!-- END PAGE TITLE-->
<!-- END PAGE HEADER-->
 <!-- BEGIN DASHBOARD STATS 1-->
 <div class="row">
    <div class="col-md-12">
    <!-- BEGIN SAMPLE TABLE PORTLET-->
    <div class="portlet light bordered">
        <div class="portlet-title">
            <div class="caption">
                <i class="icon-social-dribbble font-green"></i>
                <span class="caption-subject font-green bold uppercase"><a href="{{ route('services.create') }}">
                    اضافة خدمه جديده</a></span>
            </div>
            <div class="actions">
                <a class="btn btn-circle btn-icon-only btn-default" href="javascript:;">
                    <i class="icon-cloud-upload"></i>
                </a>
                <a class="btn btn-circle btn-icon-only btn-default" href="javascript:;">
                    <i class="icon-wrench"></i>
                </a>
                <a class="btn btn-circle btn-icon-only btn-default" href="javascript:;">
                    <i class="icon-trash"></i>
                </a>
            </div>
        </div>
        <div class="portlet-body">
            <div class="table-scrollable">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th> # </th>
                            <th> اسم الخدمه </th>
                            <th> سعر الخدمه</th>
                            <th> وصف الخدمه </th>
                            <th> حدث </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($services  as $service )
                        <tr>
                            <td> {{ $loop->iteration }} </td>
                            <td> {{ $service->name }}</td>
                            <td> {{ $service->price }} </td>
                            <td> {{ $service->description }} </td>
                            <td >
                               <form method="post" action="{{route('services.destroy' , $service->id) }}" style="display: inline-block">
                                @csrf
                                @method('delete')
                            <button type="submit" class="btn btn-outline btn-circle dark btn-sm black"> حذف </button>
                            </form>
                            <form method="get" action="{{route('services.edit' , $service->id) }}" style="display: inline-block">
                            @csrf
                            <button type="submit" class="btn btn-outline btn-circle btn-sm purple"> تعديل</button>
                            </form>
                            </td>
                        </tr>

                        @endforeach


                    </tbody>
                </table>

            </div>
{{ $services->links() }}
        </div>
    </div>
    <!-- END SAMPLE TABLE PORTLET-->
</div>

 </div>

@endsection