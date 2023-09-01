
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

 <style>
.steering-wheel {
  width: 200px;
  height: 200px;
  background-color: #f0f0f0;
  border-radius: 50%;
  display: flex;
  justify-content: center;
  align-items: center;
}

.btn-container {
  position: relative;
  width: 120px;
  height: 120px;
  transform: rotate(45deg);
}

.btn {
  position: absolute;
  top: 50%;
  left: 50%;
  width: 80px;
  height: 80px;
  background-color: #fff;
  border: none;
  outline: none;
  transform: translate(-50%, -50%);
  border-radius: 50%;
  box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
}

.btn:before {
  content: "";
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  width: 0;
  height: 0;
  border-style: solid;
  border-width: 8px 0 8px 16px;
  border-color: transparent transparent transparent #000;
}

.btn-forward:before {
  transform: translate(-50%, -50%) rotate(-45deg);
}

.btn-backward:before {
  transform: translate(-50%, -50%) rotate(135deg);
}

.btn-left:before {
  transform: translate(-50%, -50%) rotate(-135deg);
}

.btn-right:before {
  transform: translate(-50%, -50%) rotate(45deg);
}

.btn-stop {
  background-color: #ff0000;
}

.btn-stop:before {
  content: "";
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  width: 60%;
  height: 8px;
  background-color: #fff;
  border-radius: 4px;
}

#my-label {
 font-size: 1.3rem; /* increase font size to 1.2rem */
        }
        .badge-danger {
            font-size: 1.2rem;
            padding: 0.6rem 0.9rem; /* increase padding to 0.3rem top/bottom and 0.6rem left/right */
            /* background-color: #160b0c; set background color to red */
            }
            #map {
             height:800px;
                }
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
                <div class="col-xl-6 mb-10">
                    <div class="card card-statistics h-100">
                      <div class="card-body">
                        <div>
                          <div class="d-block d-md-flex justify-content-between">
                           <div class="d-block">
                            <h5 class="card-title pb-0 border-0"><span><i class="fa fa-car fa-sm " style="color:#dc3545"></i></span> Control Car {{-- {{$address}} --}} </h5>
                           </div>
                          </div>
                          <div>
                            <h1>  RC Car Control</h1>
                            <img src="#" width="400" height="400">
                            <br>
                            <a href="#"  onclick="showMap({{$driver->latitude}},{{$driver->longitude}})"  id = "my-label"   class="badge badge-warning"><i class="fa fa-crosshairs fa-sm fa-spin " style="color:#dc3545"></i>Show Location</a>
                            <br>
                            {{-- <div class="steering-wheel"> --}}
                                <button onclick="sendCommand('forward', true)" onmouseleave="sendCommand('forward', false)">Forward</button>
                                <button onclick="sendCommand('backward', true)" onmouseleave="sendCommand('backward', false)">Backward</button>
                                <button onclick="sendCommand('left', true)" onmouseleave="sendCommand('left', false)">Left</button>
                                <button onclick="sendCommand('right', true)" onmouseleave="sendCommand('right', false)">Right</button>
                                <button onclick="sendCommand('stop', true)" onmouseleave="sendCommand('stop', false)">Stop</button>
                              {{-- </div> --}}

                           <script>
                                // Function to send control command to the server
                                function sendCommand(command, value) {
                                    $.post('/control', { 'command': command, 'value': value });
                                }
                            </script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script>
    // Function to send control command to the server
    function sendCommand(command, value) {
      $.post('/control', { 'command': command, 'value': value });
    }
  </script>
</head>
{{-- <body>
  <div class="steering-wheel">
    <button class="btn up" onclick="sendCommand('forward', true)" onmouseleave="sendCommand('forward', false)">F</button>
    <button class="btn down" onclick="sendCommand('backward', true)" onmouseleave="sendCommand('backward', false)">B</button>
    <button class="btn left" onclick="sendCommand('left', true)" onmouseleave="sendCommand('left', false)">L</button>
    <button class="btn right" onclick="sendCommand('right', true)" onmouseleave="sendCommand('right', false)">R</button>
  </div>
</body> --}}
                          </div>
                      </div>
                    </div>
                  </div>
              </div>


                 {{-- // Second Div --}}

                 {{-- <td><a href="#"  onclick="showMap({{$driver->latitude}},{{$driver->longitude}})"  id = "my-label"   class="badge badge-warning"><i class="fa fa-crosshairs fa-sm fa-spin " style="color:#dc3545"></i>Show Location</a></td> --}}

            {{-- <div class="row"> --}}

            {{-- <a href="#"  onclick="showMap({{$driver->latitude}},{{$driver->longitude}})"  id = "my-label"   class="badge badge-warning"><i class="fa fa-crosshairs fa-sm fa-spin " style="color:#dc3545"></i>Show Location</a> --}}

            <div class="col-xl-6 mb-10">
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
