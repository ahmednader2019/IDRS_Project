<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="HTML5 Template" />
    <meta name="description" content="Webmin - Bootstrap 4 & Angular 5 Admin Dashboard Template" />
    <meta name="author" content="potenzaglobalsolutions.com" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    @include('layouts.head')
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.3/dist/leaflet.css"
    integrity="sha256-kLaT2GOSpHechhsozzB+flnD+zUyjE2LlfWPgU04xyI="
    crossorigin=""/>

    <style>
        .button.red {
  background-color: red;
  color: white;
}

         h4 {
        font-size: 24px;
        text-align: center;
        margin: 0;
        padding: 20px;
        border: 2px solid #333;
        border-radius: 10px;
        background-color: #f0f0f0;
      }
      #my-label {
        font-size: 1.3rem; /* increase font size to 1.2rem */
        }
        .badge-danger {
            font-size: 1.2rem;
            padding: 0.6rem 0.9rem; /* increase padding to 0.3rem top/bottom and 0.6rem left/right */
            /* background-color: #160b0c; set background color to red */
            }
            #map { height: 300px}
    </style>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

</head>

<body>
    <script src="https://unpkg.com/leaflet@1.9.3/dist/leaflet.js"
    integrity="sha256-WBkoXOwTeyKclOHuWtc+i2uENFpDZ9YPdf5Hf+D7ewM="
    crossorigin=""></script>

    <div class="wrapper">

        <!--=================================
 preloader -->
        <div id="pre-loader">
            <img src="assets/images/pre-loader/loader-01.svg" alt="">
        </div>

        <!--=================================
 preloader -->

        @include('layouts.main-header')

        @include('layouts.main-sidebar')

        <!--=================================
 Main content -->
        <!-- main-content -->

<div class="content-wrapper">

     <div style="display:none;">
        {{-- {{$latitude = 30.97623}}
              {{$longitude = 31.19482}} --}}
     </div>


            <div class="row">
                <div class="col-xl-12 mb-30">
                  <div class="card card-statistics h-100">
                    <div class="card-body">
                     <div class="d-block d-md-flex justify-content-between">
                        <div class="d-block">
                          <h5 class="card-title pb-0 border-0"><span><i class="fa fa-car fa-lg " style="color:#dc3545"></i></span> Urgent Cars </h5>
                        </div>
                        <div class="d-block d-md-flex clearfix sm-mt-20">
                           <div class="widget-search ml-0 clearfix">
                            <i class="fa fa-search"></i>
                            <input type="search" class="form-control" placeholder="Search....">
                          </div>
                         </div>
                       </div>
                       <div class="table-responsive mt-15">
                        <table id="driver-table" class="table center-aligned-table mb-0">
                          <thead>
                            <tr class="text-dark">
                              <th>Driver ID </th>
                              <th>Driver Name</th>
                              <th>Driver Age </th>
                              <th>Current Status</th>
                              <th>Emergency Number</th>
                              {{-- <th>vvvvv</th> --}}
                              <th></th>
                              {{-- <th>latitude</th> --}}
                              {{-- <td>longitude</td> --}}

                            </tr>
                          </thead>

                          @foreach($driver as $driver)
                          @if($driver->status == 'warning')
                          <tbody>
                            <tr>
                              <td>{{$driver->id}}</td>
                              <td>{{$driver->name}}</td>
                              <td>{{$driver->age}}</td>
                              <td><label id = "my-label"class="badge badge-danger">{{$driver->status}}</td>
                              <td>{{$driver->emergency_number}}</td>
                                {{-- <td>{{$driver->city}}</td> --}}

                              {{-- <td>{{$latitude = $driver->latitude}}</td> --}}
                              {{-- <td>{{$longitude = $driver->longitude}}</td> --}}
                              {{-- <td><label class="badge badge-success">Approved</label></td> --}}

                              <td><a href="#"  onclick="showMap({{$driver->latitude}},{{$driver->longitude}})"  id = "my-label"   class="badge badge-warning"><i class="fa fa-crosshairs fa-sm fa-spin " style="color:#dc3545"></i>Show Location</a></td>
                              {{-- <td><a href="{{url('send-sms-notification',$driver->name,$driver->emergency_number,$driver->city)}}" id = "my-label" class="badge badge-success"><i class="fa fa-send"></i> Send Sms </a></td> --}}
                              {{-- {{ url('Details') }}/{{ $driver->id }} --}}
                              {{-- <td><a href="{{route('send-sms-notification') }}/{{ $driver->name}}/{{ $driver->number}}/{{ $driver->city}}" id = "my-label" class="badge badge-success"><i class="fa fa-send"></i> Send Sms </a></td> --}}

                              {{-- <td><a href="{{url('send-sms-notification',{{$driver->name}})}}" id = "my-label" class="badge badge-success"><i class="fa fa-send"></i> Send Sms </a></td> --}}
                              <td>
                                <a href="{{ url('send-sms-notification', ['name' => $driver->name , 'number' => $driver->emergency_number , 'location' => $driver->city , 'email' => $driver->email , 'lat' => $driver->latitude , 'long' =>$driver->longitude ]) }}" id="my-label" class="badge badge-success">
                                    <i class="fa fa-send"></i> Send SMS
                                </a>
                            </td>



                            </tr>
                          </tbody>
                          @endif
                          @endforeach
                        </table>
                      </div>
                    </div>
                  </div>
                </div>
            </div>

            <div class="row">
                <div class="col-xl-12 mb-30">
                  <div class="card card-statistics h-100">
                    <div class="card-body">
                      <div>
                        <div class="d-block d-md-flex justify-content-between">
                         <div class="d-block">
                          <h5 class="card-title pb-0 border-0"><span><i class="fa fa-crosshairs fa-sm fa-spin " style="color:#dc3545"></i></span> Driver's Current  loccation {{-- {{$address}} --}} </h5>
                         </div>
                        </div>
                        <div>
                           {{-- {{$address}} --}}
                          <div id="map"> </div>
                        </div>
                    </div>
                  </div>
                </div>
            </div>

            <!--=================================
 wrapper -->

            <!--=================================
 footer -->

            @include('layouts.footer')
        </div><!-- main content wrapper end-->
    </div>
    </div>
    </div>

    <!--=================================
 footer -->

    @include('layouts.footer-scripts')


<script type="text/javascript">

    function showMap(lat, lng) {

    const myLatLng = { lat: lat, lng: lng };
    const map = new google.maps.Map(document.getElementById("map"), {
        zoom: 17,
        center: myLatLng,
      });

      new google.maps.Marker({
        position: myLatLng,
        map,
        title: "Hello Rajkot!",
      });
    }
</script>

<script type="text/javascript"
    src="https://maps.google.com/maps/api/js?key={{ env('GOOGLE_MAP_KEY') }}&libraries" >
</script>


</body>

</html>