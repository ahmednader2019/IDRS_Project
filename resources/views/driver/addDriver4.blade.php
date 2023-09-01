@extends('layouts.master')


@section('content')

    <div>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    </div>
    <div class="row">
        <div class="col-xl-12 mb-30">
          <div class="card card-statistics h-100">
            <div class="card-body">
            <div class="d-block">
                          <h3 class="card-title pb-0 border-0" style="color: #5398be ;"><span><i class="fa fa-paperclip fa-sm "></i></span>    Attachements </h3>
            </div>
        <div>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        </div>
    <form method="POST" action="{{ URL('save') }}" enctype="multipart/form-data">
        @csrf
        <div style="margin-bottom: 20px;">
            <label for="personal_photo" style="font-weight: bold; font-size: 18px;">Personal Photo:</label>
            <div class="custom-file">
                                        <input type="file" class="custom-file-input"  name = "personal_photo" id="personal_photo">
                                        <label class="custom-file-label" for="personal_photo">Choose file</label>
            </div>
        </div>
          <div style="margin-bottom: 20px;">
            <label for="driver_licence" style="font-weight: bold; font-size: 18px;">Driver License:</label>
            <div class="custom-file">
                                        <input type="file" class="custom-file-input"  name = "driver_licence" id="driver_licence">
                                        <label class="custom-file-label" for="driver_licence">Choose file</label>
            </div>
          </div>
          <div style="margin-bottom: 20px;">
            <label for="car-licence" style="font-weight: bold; font-size: 18px;">Car License:</label>
            <div class="custom-file">
                                        <input type="file" class="custom-file-input"  name ="car_licence" id="car_licence">
                                        <label class="custom-file-label" for="car_licence">Choose file</label>
            </div>
          </div>
          <button type="submit" class="button" style=" float: right; ">
                <span>Submit</span>
                <i class="fa fa-check-circle"></i>
             </button>

    </form>

 <a href="{{URL('step3')}}">
 <button type="submit" class="button" style=" float: left; ">
    <i class="fa fa-angle-left"></i>
    <span>Previous<span>
    </button>
</a>
</div>
</div>
@endsection
