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
                            <th> الميزه</th>
                            
                            <th> حدث </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($features  as $feature )
                        <tr>
                            <td> {{ $loop->iteration }} </td>
                            <td> {{ $feature->name }}</td>
                           
                           
                          
                            <td  style="display: flex; justify-content:space-between">
                               
                            <form method="get" action="{{route('features.edit' , $feature->id) }}" style="display: inline-block">
                            @csrf
                            <button type="submit" class="btn btn-outline btn-circle btn-sm purple"> تعديل</button>
                            </form>


                                
                            <form method="post" action="{{route('features.destroy' , $feature->id) }}" style="display: inline-block">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-outline btn-circle btn-sm danger"> حذف</button>
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
