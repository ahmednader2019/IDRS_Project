
<div class="container-fluid">
    <div class="row">
        <!-- Left Sidebar -->
        <div class="side-menu-fixed">
         <div class="scrollbar side-menu-bg">
          <ul class="nav navbar-nav side-menu" id="sidebarnav">


            <li>
                <a href="{{URL('dashboard')}}"><i class="ti-home"></i><span class="right-nav-text" style="font-size: 1.2em;"> Dashboard
                </span></a>

            </li>
    <!-- menu item Dashboard-->
     {{-- @can('Owner') --}}
    <li>
        <a href="javascript:void(0);" data-toggle="collapse" data-target="#dashboard">
            <div class="pull-left"><i class="ti-unlock"></i><span class="right-nav-text" style="font-size: 1.2em;">Permissions</span>
            </div>
            <div class="pull-right"><i class="ti-plus"></i></div>
            <div class="clearfix"></div>
        </a>

        <ul id="dashboard" class="collapse" data-parent="#sidebarnav">
            <li> <a href="{{route('users.index')}}">users menu </a> </li>
            <li> <a href="{{route('roles.index')}}">users permissions </a> </li>
        </ul>
    </li>

    <li>
        <a href="{{URL('Driver')}}"><i class="ti-plus"></i><span class="right-nav-text" style="font-size: 1.2em;"> Add Driver
              </span> </a>
    </li>


    {{-- @endcan --}}
    <!-- menu title -->
    <li class="mt-10 mb-10 text-muted pl-4 font-medium menu-title">  </li>
    <!-- menu item Elements-->
    <li>
        <a href="javascript:void(0);" data-toggle="collapse" data-target="#elements">
            <div class="pull-left"><i class="ti-info"></i><span
                    class="right-nav-text" style="font-size: 1.2em;">Show Information</span></div>
            <div class="pull-right"><i class="ti-plus"></i></div>
            <div class="clearfix"></div>
        </a>
        <ul id="elements" class="collapse" data-parent="#sidebarnav">
            <li><a href="{{URL('driverInf')}}">Driver Information </a></li>
            <li><a href="{{URL('carInf')}}">Car Information</a></li>
            <li><a href="{{URL('healthInf')}}">Medical condition of the driver</a></li>


            {{-- <li><a href="{{URL('test')}}">test</a></li> --}}
         </ul>
    </li>

    <!-- menu item calendar-->
    <li>
        <a href="{{URL('urgent')}}"><i class="ti-alert"></i><span class="right-nav-text" style="font-size: 1.1em;"> Show Urgent Cars
              </span>
               <div class="pull-right"><span class="badge badge-pill badge-danger float-left mt-1">{{$danger = \App\Models\DriverInf::where('status','danger')->count()}}</span>  </div>
            </a>
    </li>


    

    {{-- <li>
        <a href="{{URL('warning')}}"><i class="ti-alert"></i><span class="right-nav-text" style="font-size: 1em;"> Show warning Cars
              </span>
               <div class="pull-right"><span class="badge badge-pill badge-danger float-left mt-1">
                {{$safe = \App\Models\DriverInf::where('status','warning')->count()}}</span>  </div>
            </a>
    </li> --}}



    <li>
        <a href="{{URL('safe')}}"><i class="ti-alert"></i><span class="right-nav-text" style="font-size: 1.2em;"> Show Safe Cars
              </span>
               <div class="pull-right"><span class="badge badge-pill badge-danger float-left mt-1">
                {{$safe = \App\Models\DriverInf::where('status','done')->count()}}</span>  </div>
            </a>
    </li>


    <!-- menu item todo-->
    <li>
        <a href="{{URL('control')}}"><i class="ti ti-desktop"></i><span class="right-nav-text" style="font-size: 1.2em;"> Control
              </span> </a>
    </li>

    <li>

        <a href="{{URL('chatify')}}"><i class="ti-comments"></i><span class="right-nav-text" style="font-size: 1.2em;"> Chat
              </span> </a>
    </li>
    <!-- menu item chat-->

    <li>

<a href="{{URL('http://192.168.16.245:5000')}}"><i class="ti-comments"></i><span class="right-nav-text" style="font-size: 1.2em;"> Control
      </span> </a>
</li>

    {{-- <li>
        <a href="{{URL('CCC')}}"><i class="ti ti-desktop"></i><span class="right-nav-text" style="font-size: 1.2em;"> CCC
              </span> </a>
    </li> --}}


<li class="mt-10 mb-10 text-muted pl-4 font-medium menu-title">  </li>
<!-- menu item calendar-->
<li>
<a href="javascript:void(0);" data-toggle="collapse" data-target="#calendar-menuu">
<div class="pull-left"><span class="right-nav-text"></span></div>
<div class="pull-right"></div><div class="clearfix"></div>
</a>
<ul id="calendar-menuu" class="collapse" data-parent="#sidebarnav">
<li> <a href="assets/calendar.html">Events Calendar </a> </li>
<li> <a href="assets/calendar-list.html">List Calendar</a> </li>
</ul>
</li>
<!-- menu item todo-->
<li>
<a href="assets/todo-list.html"></i><span class="right-nav-text"></span> </a>
</li>
<!-- menu item chat-->
<li>
<a href="assets/chat-page.html"><span class="right-nav-text">  </span></a>
</li>
<!-- menu item mailbox-->
<li>
<a href="assets/mail-box.html"><i class="#"></i><span class="right-nav-text"> </span>  </a>
</li>
<!-- menu item Charts-->
<li>
<a href="javascript:void(0);" data-toggle="collapse" data-target="#chart">
<div class="pull-left"><i class="#"></i><span class="right-nav-text"> </span></div>
<div class="pull-right"><i class="#"></i></div><div class="clearfix"></div>
</a>
<ul id="chart" class="collapse" data-parent="#sidebarnav">
<li> <a href="assets/chart-js.html">Chart.js</a> </li>
<li> <a href="assets/chart-morris.html">Chart morris </a> </li>
<li> <a href="assets/chart-sparkline.html">Chart Sparkline</a> </li>
</ul>
</li>
<!-- menu font icon-->
<li>

<a href="javascript:void(0);" data-toggle="collapse" data-target="#font-icon">
<div class="pull-left"><i class="#"></i><span class="right-nav-text"> </span></div>
<div class="pull-right"><i class="#"></i></div><div class="clearfix"></div>
</a>
<ul id="font-icon" class="collapse" data-parent="#sidebarnav">
<li> <a href="assets/fontawesome-icon.html">font Awesome</a> </li>
<li> <a href="assets/themify-icons.html">Themify icons</a> </li>
<li> <a href="assets/weather-icon.html">Weather icons</a> </li>
</ul>
</li>
<!-- menu title -->
<li class="mt-10 mb-10 text-muted pl-4 font-medium menu-title">  </li>
<!-- menu item Widgets-->
<li>
<a href="assets/widgets.html"><span class="right-nav-text"> </span>  </a>
</li>
<!-- menu item Form-->
<li>
<a href="javascript:void(0);" data-toggle="collapse" data-target="#Form">
<div class="pull-left"><i class="#"></i><span class="right-nav-text"></span></div>
<div class="pull-right"><i class="#"></i></div><div class="clearfix"></div>
</a>
</ul>
</li>
</ul>
</div>
</div>

<!-- Left Sidebar End-->

<!--=================================-->

<!-- Left Sidebar End-->

<!--=================================
Main content -->

<!--=================================
wrapper -->


<!--=================================
wrapper -->

<!--=================================
footer -->



<!--=================================
footer -->



<!--=================================
jquery -->

<!-- jquery -->


</body>
</html>
