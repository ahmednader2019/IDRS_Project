@extends('layouts.master')
@section('css')

@section('title')
 Users menu
@stop

<!-- Internal Data table css -->

<link href="{{ URL::asset('assets/plugins/datatable/css/dataTables.bootstrap4.min.css') }}" rel="stylesheet" />
<link href="{{ URL::asset('assets/plugins/datatable/css/buttons.bootstrap4.min.css') }}" rel="stylesheet">
<link href="{{ URL::asset('assets/plugins/datatable/css/responsive.bootstrap4.min.css') }}" rel="stylesheet" />
<link href="{{ URL::asset('assets/plugins/datatable/css/jquery.dataTables.min.css') }}" rel="stylesheet">
<link href="{{ URL::asset('assets/plugins/datatable/css/responsive.dataTables.min.css') }}" rel="stylesheet">
<!--Internal   Notify -->
<link href="{{ URL::asset('assets/plugins/notify/css/notifIt.css') }}" rel="stylesheet" />
<style>
#my-label {
    font-size: 1.1rem; /* increase font size to 1.2rem */
    }
</style>

@endsection
@section('page-header')
<!-- breadcrumb -->
<div class="breadcrumb-header justify-content-between">
    <div class="my-auto">
        <div class="d-flex">
            {{-- <h4 class="content-title mb-0 my-auto">Users</h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/ Users menu --}}
                </span>
        </div>
    </div>
</div>
<!-- breadcrumb -->
@endsection

@section('content')

@if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

{{-- <div class="card"> --}}
    {{-- <div class="card-header pb-0">
        <div class="col-sm-1 col-md-2">
            <a class="button" href="{{ route('users.create') }}"> Add User </a>
            <div>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            </div>
        </div>
     </div> --}}
<!-- row opened -->

    <div class="row">
        <div class="col-xl-12 mb-30">
            <a class="button" href="{{ route('users.create') }}"> Add User </a>
            <div>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            </div>
          <div class="card card-statistics h-100">
            <div class="card-body">
             <div class="d-block d-md-flex justify-content-between">

               <div class="table-responsive mt-15">
                <table  class="table center-aligned-table mb-0">
                  <thead>
                                <tr class="text-dark">
                                <th>#</th>
                                <th> User name</th>
                                <th> Email </th>
                                <th> User Status </th>
                                <th> User Type </th>
                                <th> Process </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $key => $user)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>
                                        @if ($user->Status == 'active')
                                            <span  style="font-size: 18px;"  class="label text-success d-flex">
                                                <div class="dot-label bg-success ml-1"></div>{{ $user->Status }}
                                            </span>
                                        @else
                                            <span  style="font-size: 18px;"  class="label text-danger d-flex">
                                                <div class="dot-label bg-danger ml-1"></div>{{ $user->Status }}
                                            </span>
                                        @endif
                                    </td>

                                    <td>
                                        @if (!empty($user->getRoleNames()))
                                            @foreach ($user->getRoleNames() as $v)
                                                <label class="badge badge-success"  style="font-size: 15px;" >{{ $v }}</label>
                                            @endforeach
                                        @endif
                                    </td>

                                    <td>
                                        {{-- @can('تعديل مستخدم') --}}
                                    <a href="{{ route('users.edit', $user->id) }}" class="btn btn-outline-warning btn-md">Edit <i class="fa fa-pencil-square-o"></i></a>
                                    <a class="modal-effect btn btn-outline-danger btn-md" data-effect="effect-scale"
                                    data-user_id="{{ $user->id }}" data-username="{{ $user->name }}"
                                    data-toggle="modal" href="#modaldemo8" title="delete"><span> Delete <i class="fa-solid fa-trash-can-slash"></i></span></a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
    <!--/div-->

    <!-- Modal effects -->
    <div class="modal" id="modaldemo8">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content modal-content-demo">
                <div class="modal-header">
                    <h6 class="modal-title"> Delete User </h6><button aria-label="Close" class="close"
                        data-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
                </div>
                <form action="{{ route('users.destroy',$user->id) }}" method="post">
                    {{ method_field('delete') }}
                    {{ csrf_field() }}
                    <div class="modal-body">
                        <p>Are you sure you want to delete ?</p><br>
                        <input type="hidden" name="user_id" id="user_id" value="">
                        <input class="form-control" name="username" id="username" type="text" readonly>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </div>
            </div>
            </form>
        </div>
    </div>
</div>

</div>
<!-- /row -->
</div>
<!-- Container closed -->
</div>
<!-- main-content closed -->
@endsection
@section('js')
<!-- Internal Data tables -->
<script src="{{ URL::asset('assets/plugins/datatable/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ URL::asset('assets/plugins/datatable/js/dataTables.dataTables.min.js') }}"></script>
<script src="{{ URL::asset('assets/plugins/datatable/js/dataTables.responsive.min.js') }}"></script>
<script src="{{ URL::asset('assets/plugins/datatable/js/responsive.dataTables.min.js') }}"></script>
<script src="{{ URL::asset('assets/plugins/datatable/js/jquery.dataTables.js') }}"></script>
<script src="{{ URL::asset('assets/plugins/datatable/js/dataTables.bootstrap4.js') }}"></script>
<script src="{{ URL::asset('assets/plugins/datatable/js/dataTables.buttons.min.js') }}"></script>
<script src="{{ URL::asset('assets/plugins/datatable/js/dataTables.responsive.min.js') }}"></script>
<script src="{{ URL::asset('assets/plugins/datatable/js/responsive.bootstrap4.min.js') }}"></script>
<!--Internal  Datatable js -->
<script src="{{ URL::asset('assets/js/table-data.js') }}"></script>
<!--Internal  Notify js -->
<script src="{{ URL::asset('assets/plugins/notify/js/notifIt.js') }}"></script>
<script src="{{ URL::asset('assets/plugins/notify/js/notifit-custom.js') }}"></script>
<!-- Internal Modal js-->
<script src="{{ URL::asset('assets/js/modal.js') }}"></script>

<script>
    $('#modaldemo8').on('show.bs.modal', function(event) {
        var button = $(event.relatedTarget)
        var user_id = button.data('user_id')
        var username = button.data('username')
        var modal = $(this)
        modal.find('.modal-body #user_id').val(user_id);
        modal.find('.modal-body #username').val(username);
    })

</script>


@endsection
