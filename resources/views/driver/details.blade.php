@extends('layouts.master')


@section('content')

 <!--=================================
 Main content -->
            <div class="col-xl-12 mb-30">
                <div class="card card-statistics h-100">
                  <div class="card-body">
                   <h3 class="card-title"> Driver Details </h3>
                      <div class="tab round">
                     <ul class="nav nav-tabs" role="tablist">
                        <li class="nav-item">
                          <a class="nav-link active show" id="home-07-tab" data-toggle="tab" href="#home-07" role="tab" aria-controls="home-07" aria-selected="true"> <i class="fa fa-user"></i> Driver </a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" id="profile-07-tab" data-toggle="tab" href="#profile-07" role="tab" aria-controls="profile-07" aria-selected="false"><i class="fa fa-car"></i> Car </a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" id="portfolio-07-tab" data-toggle="tab" href="#portfolio-07" role="tab" aria-controls="portfolio-07" aria-selected="false"><i class="fa fa-heart"></i> Medical </a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" id="contact-07-tab" data-toggle="tab" href="#contact-07" role="tab" aria-controls="contact-07" aria-selected="false"><i class="fa fa-images"></i> Attachements </a>
                        </li>
                      </ul>
                      <div class="tab-content">
                        <div class="tab-pane fade active show" id="home-07" role="tabpanel" aria-labelledby="home-07-tab">
                            <div class="col-xl-12 mb-30">
                                <div class="card card-statistics h-100">
                                  <div class="card-body">
                                   <h5 class="card-title border-0 pb-0">Driver Informations </h5>
                                    <div class="table-responsive">
                                      <table class="table table-1 table-bordered table-striped mb-0">
                                        <thead>
                                          <tr>
                                            <th>Name </th>
                                            <th>Email</th>
                                            <th>Gender </th>
                                            <th>Phone Number </th>
                                            <th>Emergnecy Number </th>
                                          </tr>
                                        </thead>
                                        <tbody>
                                          <tr>
                                            <td>{{$driver->name}}</td>
                                            <td>{{$driver->email}}</td>
                                            <td>{{$driver->gender}}</td>
                                            <td>{{$driver->phone_number}}</td>
                                            <td>{{$driver->emergency_number}}</td>
                                          </tr>
                                          <tr>
                                           <td> City </td>
                                            <td>Address </td>
                                            <td>Birth Date </td>
                                            <td>Nationality </td>
                                            <td>National-ID</td>
                                          </tr>
                                           <tr>
                                            <td>{{$driver->city}}</td>
                                            <td>{{$driver->address}}</td>
                                            <td>{{$driver->date_of_birth}}</td>
                                            <td>{{$driver->nationality}}</td>
                                            <td>{{$driver->national_id}}</td>
                                          </tr>
                                        </tbody>
                                      </table>
                                   </div>
                                  </div>
                                </div>
                              </div>

                      </div>
                        <div class="tab-pane fade" id="profile-07" role="tabpanel" aria-labelledby="profile-07-tab">
                            <div class="col-xl-12 mb-30">
                                <div class="card card-statistics h-100">
                                  <div class="card-body">
                                   <h5 class="card-title border-0 pb-0">Car Informations</h5>
                                    <div class="table-responsive">
                                      <table class="table table-1 table-bordered table-striped mb-0">
                                        {{-- @foreach ($car as $car ) --}}
                                        <thead>
                                          <tr>
                                            <th> Car Number </th>
                                            <th> Car Model </th>
                                          </tr>
                                        </thead>
                                        <tbody>
                                          <tr>
                                           <td>{{$car->car_number}}</td>
                                            <td>{{$car->car_model}}</td>
                                          </tr>
                                        </tbody>
                                        {{-- @endforeach --}}
                                      </table>
                                   </div>
                                  </div>
                                </div>
                              </div>
                           </div>
                        <div class="tab-pane fade" id="portfolio-07" role="tabpanel" aria-labelledby="portfolio-07-tab">
                            <div class="col-xl-12 mb-30">
                                <div class="card card-statistics h-100">
                                  <div class="card-body">
                                   <h5 class="card-title border-0 pb-0">Medical Inforamtions </h5>
                                    <div class="table-responsive">
                                      <table class="table table-1 table-bordered table-striped mb-0">
                                        <thead>
                                          <tr>
                                            <th> Pressure blood  </th>
                                            <th> Diabetes </th>
                                            <th> Blood Type </th>
                                          </tr>
                                        </thead>
                                        <tbody>
                                          <tr>
                                            <td> {{$health->pressure}}</td>
                                            <td>{{$health->diabetes}}</td>
                                            <td>{{$health->blood}}</td>
                                          </tr>
                                          <tr>
                                            <td> Chronic Disease </td>
                                            <td> Previous Surgeries </td>
                                          </tr>
                                           <tr>
                                            <td> {{$health->diseases_details}}</td>
                                            <td>{{$health->surgeries_details}}</td>
                                          </tr>
                                        </tbody>
                                      </table>
                                   </div>
                                  </div>
                                </div>
                              </div>
                        </div>
                        <div class="tab-pane fade" id="contact-07" role="tabpanel" aria-labelledby="contact-07-tab">
                            <div class="row">
                                  <div class="col-xl-4 mb-30">
                                    <div class="card card-statistics h-100">
                                        {{-- @foreach ( $attachments as $attachement  ) --}}
                                        <img  width="360px" height= "320px" src="{{asset('storage/public/images/personal/' .$attachments->personal_photo)}}" >
                                         {{-- @endforeach --}}
                                         &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                                         <div style="display: flex; justify-content: center; align-items: center;">
                                            <p>
                                                <h4>Personal photo</h4>
                                            </p>
                                          </div>
                                    </div>

                                  </div>

                                  <div class="col-xl-4 mb-30">
                                    <div class="card card-statistics h-100">
                                        <img  width="360px" height= "320px" src="{{asset('/storage/public/images/driverLicences/' .$attachments->driver_licence )}}" >
                                         &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                                         <div style="display: flex; justify-content: center; align-items: center;">
                                            <p>
                                              <h4>Driver Licence </h4>
                                            </p>
                                          </div>
                                    </div>
                                  </div>


                                  <div class="col-xl-4 mb-30">
                                    <div class="card card-statistics h-100">
                                        <img  width="360px" height= "320px" src="{{asset('storage/public/images/carsLicences/' .$attachments->car_licence )}}" >
                                         &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                                         <div style="display: flex; justify-content: center; align-items: center;">
                                            <p>
                                              <h4>Car Licence </h4>
                                            </p>
                                          </div>
                                    </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
                  </div>
                </div>
              </div>
            <!--=================================
 wrapper -->
@endsection
