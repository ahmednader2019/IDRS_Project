@extends('layouts.master')
@section('css')
<!-- Internal Nice-select css  -->
<link href="{{URL::asset('assets/plugins/jquery-nice-select/css/nice-select.css')}}" rel="stylesheet" />
@section('title')
Add Users
@stop


@endsection
@section('page-header')
<!-- breadcrumb -->
<div class="breadcrumb-header justify-content-between">
    <div class="my-auto">
        <div class="d-flex">
            <h3 class="card-title pb-0 border-0" style="color: #5398be ;"><span></span> Add User </h3>
            </span>
        </div>
    </div>
</div>
<!-- breadcrumb -->
@endsection
@section('content')
<!-- row -->
<div class="row">


    <div class="col-lg-12 col-md-12">

        @if (count($errors) > 0)
        <div class="alert alert-danger">
            <button aria-label="Close" class="close" data-dismiss="alert" type="button">
                <span aria-hidden="true">&times;</span>
            </button>
            <strong>Error</strong>
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

<div class="card">
    <div class="card-body">
                <div class="col-lg-12 margin-tb">
        <div class="pull-right">
            {{-- <a class="button" href="{{ route('users.index') }}">Back</a> --}}
        </div>
    </div>

    <form class="parsley-style-1" id="selectForm2" autocomplete="off" name="selectForm2" action="{{route('users.store','test')}}" method="post">
        {{csrf_field()}}

        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="name">User Name: <span class="tx-danger">*</span></label>
                    <input class="form-control form-control-sm" id="name" name="name" required="" type="text">
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label for="email">Email: <span class="tx-danger">*</span></label>
                    <input class="form-control form-control-sm" id="email" name="email" required="" type="email">
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="password">Password: <span class="tx-danger">*</span></label>
                    <input class="form-control form-control-sm" id="password" name="password" required="" type="password">
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label for="confirm-password">Confirm Password: <span class="tx-danger">*</span></label>
                    <input class="form-control form-control-sm" id="confirm-password" name="confirm-password" required="" type="password">
                </div>
            </div>
        </div>
        <div>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label class="mr-sm-2" for="inlineFormCustomSelect" > User Status </label>
                    <select id="inlineFormCustomSelect" class="custom-select mr-sm-2" name="status">
                        <option value="active">Active</option>
                        <option value="inactive">Inactive</option>
                    </select>
                </div>
            </div>
        </div>
        <div>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label for="roles_name">User Permission</label>
                    {{-- {!! Form::select('roles[]', $roles,$userRole, array('class' => 'form-control','multiple'))
                    !!} --}}
                    {!! Form::select('roles_name[]', $roles,[], array('class' => 'form-control','multiple')) !!}                </div>
            </div>
        </div>

        <div class="text-center">
            <button class="button" type="submit">Save</button>
        </div>
    </form>
</div>

<!-- main-content closed -->
@endsection
@section('js')


<!-- Internal Nice-select js-->
<script src="{{URL::asset('assets/plugins/jquery-nice-select/js/jquery.nice-select.js')}}"></script>
<script src="{{URL::asset('assets/plugins/jquery-nice-select/js/nice-select.js')}}"></script>

<!--Internal  Parsley.min js -->
<script src="{{URL::asset('assets/plugins/parsleyjs/parsley.min.js')}}"></script>
<!-- Internal Form-validation js -->
<script src="{{URL::asset('assets/js/form-validation.js')}}"></script>
@endsection
