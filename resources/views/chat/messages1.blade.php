@extends('layouts.master')

@section('title')
Chat
@endsection

@section('content')
    <div class="page-title">
      <div class="row">
          <div class="col-sm-6">
              <h4 class="mb-0"> Chat</h4>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb pt-0 pr-0 float-left float-sm-right ">
              <li class="breadcrumb-item"><a href="#" class="default-color">Home</a></li>
              <li class="breadcrumb-item active">Chat</li>
            </ol>
          </div>
        </div>
    </div>
    <!-- main body -->
    <div class="row">
      <div class="col-md-12 mb-30">
        <div class="card card-statistics h-100">
          <div class="card-body">
            <div class="row">
              <div class="col-md-4 col-lg-4">
                 <div class="widget-search mb-30">
                  <i class="fa fa-search"></i>
                  <input type="search" class="form-control" placeholder="Search....">
                </div>
                <div class="scrollbar max-h-600">
                <ul class="list-unstyled">
                  <li class="pt-15">
                    <a href="#">
                    <div class="media px-2">
                     <div class="position-relative">
                      <img class="img-fluid mr-15 avatar-small" src="images/team/05.jpg" alt="">
                      <i class="avatar-online bg-success"></i>
                     </div>
                      <div class="media-body">
                         <h6 class="mt-0 ">Martin smith <small class="float-right">Just now</small> </h6>
                         <div class="float-right">
                           <span class="badge badge-pill badge-success">10</span>
                         </div>
                         <p class="text-muted"> <i class="fa fa-check pr-1"></i> Thanks </p>
                      </div>
                    </div>
                    </a>
                    <div class="divider mt-15"></div>
                  </li>
                  <li class="pt-15 bg-light">
                    <a href="#">
                    <div class="media px-2">
                     <div class="position-relative clearfix">
                      <img class="img-fluid mr-15 avatar-small" src="images/team/02.jpg" alt="">
                      <i class="avatar-online bg-success"></i>
                     </div>
                      <div class="media-body">
                         <h6 class="mt-0 ">Paul Flavius  <small class="float-right">4:12 PM</small> </h6>
                         <div class="float-right">
                           <span class="badge badge-pill badge-success">20</span>
                         </div>
                         <p class="text-muted"><i class="fa fa-check pr-1"></i> Okay </p>
                      </div>
                    </div>
                    </a>
                    <div class="divider mt-15"></div>
                  </li>
                  <li class="pt-15">
                    <a href="#">
                    <div class="media px-2">
                     <div class="position-relative">
                        <img class="img-fluid mr-15 avatar-small" src="images/team/03.jpg" alt="">
                        <i class="avatar-online bg-danger"></i>
                     </div>
                      <div class="media-body">
                         <h6 class="mt-0 ">Anne Smith  <small class="float-right">3:26 PM</small> </h6>
                         <div class="float-right text-muted">
                           <i class="fa fa-volume-up pr-1"></i>
                         </div>
                         <p class="text-muted"><i class="fa fa-check pr-1"></i> Hello </p>
                      </div>
                    </div>
                    </a>
                    <div class="divider mt-15"></div>
                  </li>
                  <li class="pt-15">
                    <a href="#">
                    <div class="media px-2">
                     <div class="position-relative">
                        <img class="img-fluid mr-15 avatar-small" src="images/team/04.jpg" alt="">
                        <i class="avatar-online bg-success"></i>
                     </div>
                      <div class="media-body">
                         <h6 class="mt-0 ">Sara Lisbon  <small class="float-right">11:35 PM</small> </h6>
                         <div class="float-right text-muted">
                           <i class="fa fa-volume-up pr-1"></i>
                         </div>
                         <p class="text-muted"><i class="fa fa-check pr-1"></i> Call me??</p>
                      </div>
                    </div>
                    </a>
                    <div class="divider mt-15"></div>
                  </li>
                  <li class="pt-15">
                    <a href="#">
                    <div class="media px-2">
                     <div class="position-relative">
                        <img class="img-fluid mr-15 avatar-small" src="images/team/05.jpg" alt="">
                        <i class="avatar-online bg-success"></i>
                     </div>
                      <div class="media-body">
                         <h6 class="mt-0 ">Michael Bean  <small class="float-right">11:45 PM</small> </h6>
                         <div class="float-right">
                           <span class="badge badge-pill badge-success">50</span>
                         </div>
                         <p class="text-muted"><i class="fa fa-check pr-1"></i> There?? </p>
                      </div>
                    </div>
                    </a>
                    <div class="divider mt-15"></div>
                  </li>
                  <li class="pt-15">
                    <a href="#">
                    <div class="media px-2">
                     <div class="position-relative">
                        <img class="img-fluid mr-15 avatar-small" src="images/team/06.jpg" alt="">
                        <i class="avatar-online bg-success"></i>
                     </div>
                      <div class="media-body">
                         <h6 class="mt-0 ">Sara Lisbon  <small class="float-right">10:15 PM</small> </h6>
                         <p class="text-muted"><i class="fa fa-check pr-1"></i> I like you </p>
                      </div>
                    </div>
                    </a>
                     <div class="divider mt-15"></div>
                  </li>
                  <li class="pt-15">
                    <a href="#">
                    <div class="media px-2">
                     <div class="position-relative">
                        <img class="img-fluid mr-15 avatar-small" src="images/team/07.jpg" alt="">
                        <i class="avatar-online bg-success"></i>
                     </div>
                      <div class="media-body">
                         <h6 class="mt-0 ">Paul Flavius  <small class="float-right">8:14 PM</small> </h6>
                          <div class="float-right">
                           <span class="badge badge-pill badge-success">05</span>
                         </div>
                         <p class="text-muted"><i class="fa fa-check pr-1"></i> Thanks </p>
                      </div>
                    </div>
                    </a>
                    <div class="divider mt-15"></div>
                  </li>
                  <li class="pt-15">
                    <a href="#">
                    <div class="media px-2">
                     <div class="position-relative">
                        <img class="img-fluid mr-15 avatar-small" src="images/team/08.jpg" alt="">
                        <i class="avatar-online bg-success"></i>
                     </div>
                      <div class="media-body">
                         <h6 class="mt-0 ">Sara Lisbon  <small class="float-right">9:04 PM</small> </h6>
                         <p class="text-muted"><i class="fa fa-check pr-1"></i> There?? </p>
                      </div>
                    </div>
                    </a>
                    <div class="divider mt-15"></div>
                  </li>
                  <li>
                    <a href="#">
                    <div class="media px-2">
                     <div class="position-relative">
                        <img class="img-fluid mr-15 avatar-small" src="images/team/09.jpg" alt="">
                        <i class="avatar-online bg-success"></i>
                     </div>
                      <div class="media-body">
                         <h6 class="mt-0 ">Paul Flavius <small class="float-right">12:04 PM</small> </h6>
                         <p class="text-muted"><i class="fa fa-check pr-1"></i> Hello </p>
                      </div>
                    </div>
                    </a>
                    <div class="divider mt-15"></div>
                  </li>
                </ul>
               </div>
              </div>
              <div class="col-md-8 col-lg-8">
                <div class="chats-topbar mb-30">
                  <div class="d-block d-md-flex justify-content-between">
                    <div class="d-block">
                      <h6 class="mb-0">Paul Flavius</h6>
                    </div>
                    <div class="d-block d-md-flex">
                       <a class="text-muted pr-40" href="#"> <i class="fa fa-video-camera"></i></a>
                       <div class="btn-group info-drop">
                        <button type="button" class="dropdown-toggle-split text-muted" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="ti-more-alt"></i></button>
                        <div class="dropdown-menu">
                          <a class="dropdown-item" href="#"><i class="text-primary ti-pencil"></i> Rename</a>
                          <a class="dropdown-item" href="#"><i class="text-dark ti-announcement"></i> Mark as Unread</a>
                          <a class="dropdown-item" href="#"><i class="text-success ti-close"></i> Close</a>
                          <a class="dropdown-item" href="#"><i class="text-secondary ti-trash"></i> Delete</a>
                        </div>
                      </div>
                     </div>
                   </div>
                </div>
                <div class="scrollbar max-h-600">
                 <div class="chats">
                   <div class="chat-wrapper clearfix">
                      <div class="chat-avatar">
                        <img class="img-fluid avatar-small" src="images/team/05.jpg" alt="">
                      </div>
                      <div class="chat-body p-3">
                         <p>So, make the decision to move forward. Commit your decision to paper just to bring.</p>
                      </div>
                   </div>
                   <div class="chat-wrapper chat-me clearfix">
                      <div class="chat-body p-3">
                         <p>Having clarity of purpose and a clear picture of what you.</p>
                      </div>
                   </div>
                   <span class="time d-block mt-20px mb-20 text-center text-gray">3:15PM </span>
                   <div class="chat-wrapper clearfix">
                      <div class="chat-avatar">
                        <img class="img-fluid avatar-small" src="images/team/06.jpg" alt="">
                      </div>
                      <div class="chat-body bg-light p-3">
                         <p>You will sail along until you collide with an immovable object, after which you will sink</p>
                      </div>
                   </div>
                   <div class="chat-wrapper chat-me clearfix">
                      <div class="chat-body p-3">
                         <p>The sad thing is the majority of people have no clue.</p>
                      </div>
                   </div>
                   <div class="chat-wrapper chat-me clearfix">
                      <div class="chat-body p-3">
                         <p>So how do we get clarity? Simply by asking.</p>
                      </div>
                   </div>
                   <span class="time d-block mt-20px mb-20 text-center text-gray">3:20PM </span>
                    <div class="chat-wrapper clearfix">
                      <div class="chat-avatar">
                        <img class="img-fluid avatar-small" src="images/team/07.jpg" alt="">
                      </div>
                      <div class="chat-body bg-light p-3">
                         <p>They have no clarity. When asked the question, responses will be superficial at best, and at worst.</p>
                      </div>
                   </div>
                   <div class="chat-wrapper chat-me clearfix">
                      <div class="chat-body p-3">
                         <p>Simply by asking.</p>
                      </div>
                   </div>
                    <span class="time d-block mt-20px mb-20 text-center text-gray">3:30PM </span>
                    <div class="chat-wrapper clearfix">
                      <div class="chat-avatar">
                        <img class="img-fluid avatar-small" src="images/team/07.jpg" alt="">
                      </div>
                      <div class="chat-body bg-light p-3">
                         <p>They have no clarity.</p>
                      </div>
                   </div>
                 </div>
                </div>
                <div class="chats mt-30">
                   <div class="chat-wrapper mb-0 clearfix">
                       <div class="chat-input">
                        <div class="chat-input-icon">
                         <a class="text-muted" href="#"> <i class="fa fa-smile-o"></i> </a>
                        </div>
                        <textarea class="form-control input-message scrollbar" placeholder="Type here...*" rows="2" name="message"></textarea>
                      </div>
                      <div class="chat-button">
                       <a href="#"> <i class="ti-clip"></i></a>
                     </div>
                   </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
  </div>
@endsection
