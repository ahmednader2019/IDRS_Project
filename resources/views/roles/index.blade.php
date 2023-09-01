@extends('layouts.master')
@section('css')
    <!--Internal   Notify -->
    <link href="{{ URL::asset('assets/plugins/notify/css/notifIt.css') }}" rel="stylesheet" />
@section('title')
Users Permissions
@stop


@endsection
@section('page-header')
<!-- breadcrumb -->
<div class="breadcrumb-header justify-content-between">
    <div class="my-auto">
        <div class="d-flex">
            <h3 class="card-title pb-0 border-0" style="color: #5398be ;"><span></span> Actors </h3>

        </div>
    </div>
</div>
<br>
<br>
<!-- breadcrumb -->
@endsection
@section('content')


@if (session()->has('Add'))
    <script>
        window.onload = function() {
            notif({
                msg: " تم اضافة الصلاحية بنجاح",
                type: "success"
            });
        }

    </script>
@endif

@if (session()->has('edit'))
    <script>
        window.onload = function() {
            notif({
                msg: " تم تحديث بيانات الصلاحية بنجاح",
                type: "success"
            });
        }

    </script>
@endif

@if (session()->has('delete'))
    <script>
        window.onload = function() {
            notif({
                msg: " تم حذف الصلاحية بنجاح",
                type: "error"
            });
        }

    </script>
@endif

<!-- row -->
<div class="row row-sm">
    <div class="col-xl-12">
        <div class="card">
            <div class="card-header pb-0">
                <div class="d-flex justify-content-between">
                    <div class="col-lg-12 margin-tb">
                        <div class="pull-right">
                            {{-- @can('اضافة صلاحية') --}}
                            <div>
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            </div>
                             {{-- <button type="submit" class="button" style=" float: right; ">
                                <span>Next</span>
                                <i class="fa fa-angle-right"></i>
                             </button> --}}
                                <a class="button" href="{{ route('roles.create') }}" style=" float: left;"> Add</a>
                                <br>
                            {{-- @endcan --}}
                        </div>
                        <br>
                    </div>
                    <br>
                </div>

            </div>
            <div class="card-body">
                <div class="table-responsive hoverable-table" >
                    <table  class="table table-striped ;table table-bordered "id="example1" data-page-length='50' style=" text-align: center;" >
                        <thead >
                            <tr >
                                <th><b>#</b></th>
                                <th><b>Name</b></th>
                                <th><b>Process</b></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($roles as $key => $role)
                                <tr >
                                    <td>{{ ++$i }}</td>
                                    <td>{{ $role->name }}</td>
                                    <td>
                                        {{-- @can('عرض صلاحية') --}}
                                            <a class="btn btn-success btn-sm"
                                                href="{{ route('roles.show', $role->id) }}">Show</a>
                                        {{-- @endcan --}}

                                        {{-- @can('تعديل صلاحية') --}}
                                            <a class="btn btn-primary btn-sm"
                                                href="{{ route('roles.edit', $role->id) }}">Edit</a>
                                        {{-- @endcan --}}

                                        @if ($role->name !== 'owner')
                                            {{-- @can('حذف صلاحية') --}}
                                                {!! Form::open(['method' => 'DELETE', 'route' => ['roles.destroy',
                                                $role->id], 'style' => 'display:inline']) !!}
                                                {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-sm']) !!}
                                                {!! Form::close() !!}
                                            {{-- @endcan --}}
                                        @endif


                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!--/div-->
</div>
<!-- row closed -->
</div>
<!-- Container closed -->
</div>
<!-- main-content closed -->
@endsection
@section('js')
<!--Internal  Notify js -->
<script src="{{ URL::asset('assets/plugins/notify/js/notifIt.js') }}"></script>
<script src="{{ URL::asset('assets/plugins/notify/js/notifit-custom.js') }}"></script>
@endsection
