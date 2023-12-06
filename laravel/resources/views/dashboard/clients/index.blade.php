@extends('dashboard.layout.master')

@section('content')

<!-- BEGIN PAGE TITLE-->
<h3 class="page-title"> Blank Page Layout
    <small>blank page layout</small>
</h3>
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
                <span class="caption-subject font-green bold uppercase">Simple Table</span>
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
                            <th>اسم العميل  </th>
                            <th> رقم الهاتف</th>
                            <th> الرقم القومى </th>
                            <th> معاد التسجيل </th>
                            <th>حدث</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($clients  as $client )
                        <tr>
                            <td> {{ $loop->iteration }} </td>
                            <td> {{ $client->first_name .' '. $client->last_name }} </td>
                            <td> {{ $client->phone }} </td>
                            <td> {{ $client->national_number}} </td>
                            <td>{{$client->created_at}}</td>
                            <td >
                               <form method="post" action="{{route('clients.destroy' , $client->id) }}" style="display: inline-block">
                                @csrf
                                @method('delete')
                            <button type="submit" class="btn btn-outline btn-circle dark btn-sm black"> حذف </button>
                            </form>
                            <form method="get" action="{{route('clients.edit' , $client->id) }}" style="display: inline-block">
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
