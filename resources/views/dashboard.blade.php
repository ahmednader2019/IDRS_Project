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
</head>

<body>

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

   <div class="content-wrapper header-info">
      <div class="page-title">
      <div class="row">
          <div class="col-md-6">
            <h3 class="mb-15 text-white" > IDRS  </h3>
            <span class="mb-10 mb-md-30 text-white d-block">Intelligent Driver Rescue System .</span>
          </div>
          <div class="col-md-6">
          <div class="card">
            <div class="btn-group info-drop header-info-button">
                {{-- <button type="button" class="dropdown-toggle-split  button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Add new <i class="ti-plus"></i></button> --}}
                <div class="dropdown-menu">
                  <a class="dropdown-item" href="#"><i class="text-dark ti-layers-alt"></i>Add Project </a>
                  <a class="dropdown-item" href="#"><i class="text-primary ti-files"></i>Add Task </a>
                  <a class="dropdown-item" href="#"><i class="text-warning ti-id-badge"></i>Add team </a>
                  <a class="dropdown-item" href="#"><i class="text-dark ti-pencil-alt"></i>Leave app </a>
                  <a class="dropdown-item" href="#"><i class="text-success ti-email"></i>New Message</a>
                  <a class="dropdown-item" href="#"><i class="text-warning ti-user"></i>Edit Profile</a>
                  <a class="dropdown-item" href="#"><i class="text-info ti-settings"></i>Settings</a>
                  <a class="dropdown-item" href="#"><i class="text-danger ti-unlock"></i>Logout</a>
                </div>
              </div>
            </div>
           </div>
          </div>
        </div>
      <!-- widgets -->
      <div class="row account-overview mb-30">
       <div class="col-12">
        <div class="card card-statistics h-100">
         <div class="card-body bg-white">
           <h5 class="card-title">Statistics </h5>
            <div class="row">
              <div class="col-xl-3 col-sm-6">
               <div class="row">
                  <div class="col-md-7 col-sm-7 col-7 align-self-center">
                    {{-- <span>Percentage Up</span>
                    <h4 class="text-danger fw-6 mt-10">655 Share</h4> --}}
                  </div>
                  <div class="col-md-5 col-sm-5 col-5 align-self-center text-right">
                   <span class="round-chart mb-0" data-percent="100" data-size="80" data-width="4"  data-color="#17a2b8" > <span class="percent"></span> </span>
                </div>
              </div>
            </div>
            <div style="display:none">
                {{$total = \App\Models\DriverInf::count()}}
                {{-- {{$tot_users =\App\Models\::count()}} --}}
                {{$danger = \App\Models\DriverInf::where('status','danger')->count()}}
                {{$safe = \App\Models\DriverInf::where('status','done')->count()}}
                {{$dan_perc =round($danger / $total  * 100) }}
                {{$safe_perc= round($safe / $total  * 100) }}
                {{$stable = \App\Models\DriverInf::where('status','stable')->count()}}
                {{$stable_perc = round($stable / $total  * 100) }}
            </div>
            <div class="col-xl-3 col-sm-6">
               <div class="row">
                  <div class="col-md-7 col-sm-7 col-7 align-self-center">
                    <span><h5> Total Cars</h4> </span>
                    <h5 class="text-info fw-6 mt-10">{{$total}} Car </h5>
                  </div>
                  <div class="col-md-5 col-sm-5 col-5 align-self-center text-right">
                   <span class="round-chart mb-0" data-percent="{{$dan_perc}}" data-size="80" data-width="4"data-color="#dc3545" > <span class="percent"></span> </span>
                  </div>
               </div>
            </div>
            <div class="col-xl-3 col-sm-6">
             <div class="row">
                <div class="col-md-7 col-sm-7 col-7 align-self-center">
                  <span><h5>Danger Cars</h5> </span>
                  <h5 class="text-danger fw-6 mt-10">{{$danger}} Car</h5>




                </div>
                <div class="col-md-5 col-sm-5 col-5 align-self-center text-right">
                 <span class="round-chart mb-0" data-percent="{{$safe_perc}}" data-size="80" data-width="4" data-color="#28a745"> <span class="percent"></span> </span>
                </div>
             </div>
            </div>
            <div class="col-xl-3 col-sm-6">
             <div class="row">
                <div class="col-md-7 col-sm-7 col-7 align-self-center">
                  <span><h5>Safe Cars</h5>  </span>
                  <h5 class="text-success fw-6 mt-10">{{$safe }} Car</h5>
                </div>
                <div class="col-md-5 col-sm-5 col-5 align-self-center text-right">
                 {{-- <span class="round-chart mb-0" data-percent="80" data-size="80" data-width="4" data-color="#ffc107"> <span class="percent"></span> </span> --}}
                </div>
             </div>
           </div>
           </div>
          </div>
        </div>
        </div>
      </div>
      {{-- <div class="row">


        <div class="col-xl-4 mb-30">
           <div class="card card-statistics h-100">
             <div class="card-body">
              <h5 class="card-title">Customer Feedback</h5>
              <div class="row">
                  <div class="col-md-6">
                      <div class="clearfix">
                       <p class="mb-10 float-left">Positive</p>
                       <i class="mb-10 text-success float-right fa fa-arrow-up"> </i>
                    </div>
                    <div class="progress progress-small">
                      <div class="skill2-bar bg-success" role="progressbar" style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <h5 class="mt-10 text-success">8501</h5>
                  </div>
                  <div class="col-md-6">
                     <div class="clearfix">
                       <p class="mb-10 float-left">Negative</p>
                       <i class="mb-10 text-danger float-right fa fa-arrow-down"> </i>
                    </div>
                    <div class="progress progress-small">
                      <div class="skill2-bar bg-danger" role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <h5 class="mt-10 text-danger">3251</h5>
                  </div>
               </div>
              <div id="morris-area" class="hide-axis" style="height: 320px;"></div>
             </div>
           </div>
        </div>
      </div> --}}
       <div class="row">
         <div class="col-xl-4 mb-30">
          <div class="card data-usage h-100">
          <div class="card-body">
            <h5 class="card-title">Stable Cars </h5>
            <div class="row d-flex align-items-center">
              <div class="col-sm-6">
                <span class="round-chart" data-percent="{{$stable_perc}}"  data-width="5" data-color="#84ba3f">
                  <span class="percent"></span>
                </span>
              </div>
              <div class="col-sm-6">
                <h2 class="theme-color font-weight-bold">{{$stable}} </h2>
                <small>Current Plan</small>
                <h5 class="mt-2 text-dark">{{$total}}</h5></div>
            </div>
            <p><strong>Note:</strong> <strong>{{$stable_perc}} </strong> % Of Cars In The System haven't faced any Accidents or Problems yet  .</p>
          </div>
        </div>
        </div>
        <div class="col-xl-4 mb-30">
         <div class="card card-statistics h-100">
            <div class="card-body text-left">
               <h5 class="card-title">Cars in The System </h5>
                <div class="row">
                  <div class="col-6 col-sm-6 mb-30">
                    <div class="counter">
                      <span class="timer text-success" data-to="{{$total}}" data-speed="1500">{{$total}}</span>
                      <label class="text-capitalize mt-0">Total Cars </label>
                    </div>
                  </div>
                  <div class="col-6 col-sm-6 mb-30">
                    <div class="counter">
                      {{-- <span class="timer text-info" data-to="6524" data-speed="10000">6524</span>
                      <label class="text-capitalize mt-0">New contacts</label> --}}
                    </div>
                  </div>
                </div>
                <div class="divider"></div>
                <div class="row">
                  <div class="col-6 col-sm-4 mt-30">
                     <b> Total Users  </b>
                     <p>{{$total}}</p>
                  </div>
                  <div class="col-6 col-sm-4 mt-30">
                    <b> Safe Cars </b>
                     <p>{{$safe}}</p>
                  </div>
                  <div class="col-6 col-sm-4 mt-30">
                    <b> Stable Cars </b>
                     <p>{{$stable}}</p>
                  </div>
                </div>
             </div>
          </div>
        </div>

        <div class="col-md-4 mb-30">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title"> Chart </h5>
                <div id="morris-donut" style="height: 320px;"></div>
                 <div class="text-center">
                     <ul class="list-inline card-detail-list m-b-0">
                         <li class="list-inline-item">
                             <i class="fa fa-circle mr-2"></i>Stable Cars
                         </li>
                         <li class="list-inline-item">
                             <i class="fa fa-circle mr-2"></i>Saved Cars
                         </li>
                         <li class="list-inline-item">
                             <i class="fa fa-circle mr-2"></i>Danger Cars
                         </li>
                         <script>
                            var stable = @json($stable);
                            var safe = @json($safe);
                            var danger = @json($danger);

                         </script>
                     </ul>
                 </div>
              </div>
            </div>
           </div>

      </div>

      {{-- <div class="row  mb-30">
        <div class="col-12">
          <div class="card card-statistics h-100">
              <div class="card-body">
                <div class="row">
                 <div class="col-xl-7">
                  <div id="world-map-markers" class="map-height"></div>
                 </div>
                 <div class="col-xl-5">
                    <div class="table-responsive">
                      <table class="table center-aligned-table mb-0">
                          <thead>
                            <tr class="text-dark">
                              <th>No </th>
                              <th>Contrary </th>
                              <th>2016</th>
                              <th>2017</th>
                              <th>Change</th>
                            </tr>
                          </thead>
                          <tbody>
                          <tr>
                            <td><i class="fa fa-circle text-success"></i></td>
                            <td>USA</td>
                            <td>2,009 </td>
                            <td>5,230</td>
                            <td>8.01% <i class="fa fa-level-up text-success"></i></td>
                          </tr>
                          <tr>
                            <td><i class="fa fa-circle text-info"></i></td>
                            <td>India</td>
                            <td>2,609</td>
                            <td>2,430</td>
                            <td>7.01% <i class="fa fa-level-down text-warning"></i></td>
                          </tr>
                          <tr>
                            <td><i class="fa fa-circle text-warning"></i></td>
                            <td>Canada  </td>
                            <td>3,409</td>
                            <td>1,240</td>
                            <td>6.04% <i class="fa fa-level-down text-warning"></i></td>
                          </tr>
                          <tr>
                            <td><i class="fa fa-circle text-danger"></i></td>
                            <td>Australia</td>
                            <td>5,709</td>
                            <td>2,230</td>
                            <td>4.04% <i class="fa fa-level-down text-warning"></i></td>
                          </tr>
                          <tr>
                            <td><i class="fa fa-circle text-dark"></i></td>
                            <td>Germany </td>
                            <td>5,662</td>
                            <td>6,162</td>
                            <td>6.06% <i class="fa fa-level-up text-success"></i></td>
                          </tr>
                          <tr>
                            <td><i class="fa fa-circle text-info"></i></td>
                            <td>UK</td>
                            <td>6,407</td>
                            <td>7,561</td>
                            <td>6.08% <i class="fa fa-level-up text-success"></i></td>
                          </tr>
                          <tr>
                            <td><i class="fa fa-circle text-success"></i></td>
                            <td>Other </td>
                            <td>6,554</td>
                            <td>7,566</td>
                            <td>6.07% <i class="fa fa-level-up text-success"></i></td>
                          </tr>
                        </tbody>
                      </table>
                  </div>
                </div>
               </div>
              </div>
            </div>
           </div>
        </div>



            <!--=================================
 wrapper --> --}}

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

</body>


</html>
