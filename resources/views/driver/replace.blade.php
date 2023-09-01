
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
    .button.green {
  background-color: #1fa21f;
}
.steering-wheel {
  position: relative;
  width: 200px;
  height: 200px;
  border: 5px solid #360000;
  border-radius: 50%;
  background: radial-gradient(#f2f2f2, #ddd);
  overflow: hidden;
  display: flex;
  align-items: center;
  justify-content: center;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
}

.steering-wheel:before {
  content: "";
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  width: 160px;
  height: 160px;
  border: 2px solid #aaa;
  border-radius: 50%;
  background: radial-gradient(#ddd, #f2f2f2);
}

.containerr {
  display: flex;
  justify-content: center;
  align-items: center;
  height: 30vh; /* Set the container height to the full viewport height */
}

.steering-wheel .button {
  position: absolute;
  width: 80px;
  height: 80px;
  border-radius: 50%;
  background-color: #1a237e;
  color: #fff;
  font-size: 28px;
  border: none;
  cursor: pointer;
  display: flex;
  align-items: center;
  justify-content: center;
  box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);
  transition: background-color 0.3s;
}

.steering-wheel .button i {
  font-size: 28px;
}

.steering-wheel .button.forward {
  top: -40px;
  left: 50%;
  transform: translateX(-50%);
}

.steering-wheel .button.backward {
  bottom: -40px;
  left: 50%;
  transform: translateX(-50%);
}

.steering-wheel .button.left {
  top: 50%;
  left: -40px;
  transform: translateY(-50%);
}

.steering-wheel .button.right {
  top: 50%;
  right: -40px;
  transform: translateY(-50%);
}

.steering-wheel .button.stop {
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
}

.steering-wheel .button i.fa {
  position: relative;
  top: 1px;
}

.steering-wheel .button:before {
  content: "";
  position: absolute;
  width: 100%;
  height: 100%;
  border-radius: 50%;
  background-color: #fff;
  opacity: 0.3;
}

.steering-wheel .button:hover:before {
  opacity: 0.5;
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
                            <!-- <h2 style="text-align: center;">Control Car</h2> -->

                            <iframe src="http://192.168.52.245:5000" width="500" height="700" ></iframe>
                            <div>
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            </div>
                            <div>
                                <a href="{{ url('ChangeStatus') }}/{{$id}}">
                                    <button type="submit"  class="button green">  Safe </button>
                                   </button>
                                </a>

                              </div>
                            <br>
                            <!-- <div class="containerr">
                                <div class="steering-wheel">
                                  <button class="button forward" onclick="sendCommand('forward', true)" onmouseleave="sendCommand('forward', false)">
                                    <i class="fas fa-arrow-alt-circle-up"></i>
                                  </button>
                                  <button class="button backward" onclick="sendCommand('backward', true)" onmouseleave="sendCommand('backward', false)">
                                    <i class="fas fa-arrow-alt-circle-down"></i>
                                  </button>
                                  <button class="button left" onclick="sendCommand('left', true)" onmouseleave="sendCommand('left', false)">
                                    <i class="fas fa-arrow-alt-circle-left"></i>
                                  </button>
                                  <button class="button right" onclick="sendCommand('right', true)" onmouseleave="sendCommand('right', false)">
                                    <i class="fas fa-arrow-alt-circle-right"></i>
                                  </button>
                                  <button class="button stop" onclick="sendCommand('stop', true)" onmouseleave="sendCommand('stop', false)">
                                    <i class="fas fa-stop-circle"></i>
                                  </button>
                                </div>
                              </div> -->

                              <!-- <br>
                          <button onclick="sendCommand('forward', true)" onmouseleave="sendCommand('forward', false)">Forward</button>
                          <button onclick="sendCommand('backward', true)" onmouseleave="sendCommand('backward', false)">Backward</button>
                          <button onclick="sendCommand('left', true)" onmouseleave="sendCommand('left', false)">Left</button>
                          <button onclick="sendCommand('right', true)" onmouseleave="sendCommand('right', false)">Right</button>
                          <button onclick="sendCommand('stop', true)" onmouseleave="sendCommand('stop', false)">Stop</button>
                          <script>
                              // Function to send control command to the server
                              function sendCommand(command, value) {
                                  $.post('/control', { 'command': command, 'value': value });
                              }
                          </script> -->


                        
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script>
    // Function to send control command to the server
    function sendCommand(command, value) {
      $.post('/control', { 'command': command, 'value': value });
    }
  </script>
</head>

                          </div>
                      </div>
                    </div>
                  </div>
              </div>


            <!-- <div class="col-xl-6 mb-10">
                <div class="card card-statistics h-100">
                  <div class="card-body">
                    <div>
                      <div class="d-block d-md-flex justify-content-between">
                       <div class="d-block">
                        <div><a href="#"  onclick="showMap(30.099394,31.085475)"  id = "my-label"   class="badge badge-warning"><i class="fa fa-crosshairs fa-sm fa-spin "style="color:#dc3545"></i>Show Location</a> 
</div>
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
          </div> -->


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
                        <a href="#"  onclick="showMap({{$driver->latitude}},{{$driver->longitude}})"  id = "my-label"   class="badge badge-warning"><i class="fa fa-crosshairs fa-sm fa-spin " style="color:#dc3545"></i>Show Location</a>

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


    {{-- <script>
var lat = @json($latitude);
var long = @json($longitude);
var map = L.map('map').setView([lat, long], 13);

L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
    minZoom:6,
    maxZoom:17,
    attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
}).addTo(map);


navigator.geolocation.watchPosition(success, error);

let marker , circle , zoomed;
function success(pos) {

const lat = pos.coords.latitude;
const lng = pos.coords.longitude;
const accuracy = pos.coords.accuracy; // Accuracy in metres

  if(marker){
      map.removeLayer(marker);
      map.removeLayer(circle);

  }

   marker = L.marker([lat,lng]).addTo(map);
   circle = L.circle([lat, lng] ,{ radius : accuracy}).addTo(map);

   if (!zoomed) {
        zoomed = map.fitBounds(circle.getBounds());
    }
    // Set zoom to boundaries of accuracy circle

    map.setView([lat, lng]);
    // Set map focus to current user position
//   map.fitBounds(circle.getBounds());
}

function error(err) {

if (err.code === 1) {
    alert("Please allow geolocation access");
    // Runs if user refuses access
} else {
    alert("Cannot get current location");
    // Runs if there was a technical problem.
}

}

// update
function updateCoords() {
    // Update the values of lat and long variables
     lat = @json($latitude);
     long = @json($longitude);

    // Update the map view with new coordinates
    map.setView([lat, long], 13);

    // Remove existing marker and circle from the map
    if(marker){
        map.removeLayer(marker);
        map.removeLayer(circle);
    }

    // Add new marker and circle to the map
    marker = L.marker([lat, long]).addTo(map);
    circle = L.circle([lat, long], { radius : 100 }).addTo(map);
  }

  // Call the geolocation API to get the current position
  navigator.geolocation.watchPosition(success, error);

  </script>

<script>
// Set the latitude and longitude
var lat = 60.507023; // replace with your latitude
var lng = -0.127812; // replace with your longitude

// Make a request to the Nominatim API
var url = 'https://nominatim.openstreetmap.org/reverse?format=jsonv2&lat=' + lat + '&lon=' + lng;
$.ajax({
  url: url,
  dataType: 'json',
  success: function(data) {
    // Extract the city name from the response
    var city = data.address.city;
    console.log('sss :', city);
  },
  error: function(xhr, status, error) {
    console.log('Error:', error);
  }
});

</script> --}}

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
