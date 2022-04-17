<!DOCTYPE html>
<html lang="en">
    <head>

        <!-- Title -->
        <title>Admin Dashboard</title>

        <meta content="width=device-width, initial-scale=1" name="viewport"/>
        <meta charset="UTF-8">
        <meta name="description" content="Admin Dashboard Template" />
        <meta name="keywords" content="admin,dashboard" />
        <meta name="author" content="stacks" />

        <!-- Styles -->
        <link href="{{ asset('dashboard_assets') }}/plugins/pace-master/themes/blue/pace-theme-flash.css" rel="stylesheet"/>
        <link href="{{ asset('dashboard_assets') }}/plugins/uniform/css/default.css" rel="stylesheet"/>
        <link href="{{ asset('dashboard_assets') }}/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="{{ asset('dashboard_assets') }}/plugins/fontawesome/css/font-awesome.css" rel="stylesheet" type="text/css"/>
        <link href="{{ asset('dashboard_assets') }}/plugins/line-icons/simple-line-icons.css" rel="stylesheet" type="text/css"/>
        <link href="{{ asset('dashboard_assets') }}/plugins/offcanvasmenueffects/css/menu_cornerbox.css" rel="stylesheet" type="text/css"/>
        <link href="{{ asset('dashboard_assets') }}/plugins/waves/waves.min.css" rel="stylesheet" type="text/css"/>
        <link href="{{ asset('dashboard_assets') }}/plugins/switchery/switchery.min.css" rel="stylesheet" type="text/css"/>
        <link href="{{ asset('dashboard_assets') }}/plugins/3d-bold-navigation/css/style.css" rel="stylesheet" type="text/css"/>
        <link href="{{ asset('dashboard_assets') }}/plugins/slidepushmenus/css/component.css" rel="stylesheet" type="text/css"/>
        <link href="{{ asset('dashboard_assets') }}/plugins/weather-icons-master/css/weather-icons.min.css" rel="stylesheet" type="text/css"/>
        <link href="{{ asset('dashboard_assets') }}/plugins/toastr/toastr.min.css" rel="stylesheet" type="text/css"/>
        <link href="{{ asset('dashboard_assets') }}/plugins/datatables/css/jquery.datatables.min.css" rel="stylesheet" type="text/css"/>
        <link href="{{ asset('dashboard_assets') }}/plugins/datatables/css/jquery.datatables_themeroller.css" rel="stylesheet" type="text/css"/>
        <!-- Theme Styles -->
        <link href="{{ asset('dashboard_assets') }}/css/meteor.min.css" rel="stylesheet" type="text/css"/>

        <link href="{{ asset('dashboard_assets') }}/css/layers/dark-layer.css" class="theme-color" rel="stylesheet" type="text/css"/>


        <script src="{{ asset('dashboard_assets') }}/plugins/3d-bold-navigation/js/modernizr.js"></script>
        <script src="{{ asset('dashboard_assets') }}/plugins/offcanvasmenueffects/js/snap.svg-min.js"></script>
        <link href="{{ asset('dashboard_assets') }}/plugins/pace-master/themes/blue/pace-theme-flash.css" rel="stylesheet"/>
        <link href="{{ asset('dashboard_assets') }}/plugins/uniform/css/default.css" rel="stylesheet"/>
        <link href="{{ asset('dashboard_assets') }}/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="{{ asset('dashboard_assets') }}/plugins/fontawesome/css/font-awesome.css" rel="stylesheet" type="text/css"/>
        <link href="{{ asset('dashboard_assets') }}/plugins/line-icons/simple-line-icons.css" rel="stylesheet" type="text/css"/>
        <link href="{{ asset('dashboard_assets') }}/plugins/offcanvasmenueffects/css/menu_cornerbox.css" rel="stylesheet" type="text/css"/>
        <link href="{{ asset('dashboard_assets') }}/plugins/waves/waves.min.css" rel="stylesheet" type="text/css"/>
        <link href="{{ asset('dashboard_assets') }}/plugins/switchery/switchery.min.css" rel="stylesheet" type="text/css"/>
        <link href="{{ asset('dashboard_assets') }}/plugins/3d-bold-navigation/css/style.css" rel="stylesheet" type="text/css"/>
        <link href="{{ asset('dashboard_assets') }}/plugins/slidepushmenus/css/component.css" rel="stylesheet" type="text/css"/>
        <link href="{{ asset('dashboard_assets') }}/plugins/weather-icons-master/css/weather-icons.min.css" rel="stylesheet" type="text/css"/>
        <link href="{{ asset('dashboard_assets') }}/plugins/toastr/toastr.min.css" rel="stylesheet" type="text/css"/>
        <link href="{{ asset('dashboard_assets') }}/plugins/datatables/css/jquery.datatables.min.css" rel="stylesheet" type="text/css"/>
        <link href="{{ asset('dashboard_assets') }}/plugins/datatables/css/jquery.datatables_themeroller.css" rel="stylesheet" type="text/css"/>
        <!-- Theme Styles -->
        <link href="{{ asset('dashboard_assets') }}/css/meteor.min.css" rel="stylesheet" type="text/css"/>

        <link href="{{ asset('dashboard_assets') }}/css/layers/dark-layer.css" class="theme-color" rel="stylesheet" type="text/css"/>
        <link href="{{ asset('dashboard_assets') }}/css/custom.css" rel="stylesheet" type="text/css"/>

        <script src="{{ asset('dashboard_assets') }}/plugins/3d-bold-navigation/js/modernizr.js"></script>
        <script src="{{ asset('dashboard_assets') }}/plugins/offcanvasmenueffects/js/snap.svg-min.js"></script>
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        <style media="screen">
        .page-content {
         background: #ffffff !important;
         }
        </style>
    </head>
    <body class="compact-menu">
        <form class="search-form" action="#" method="GET">
            <div class="input-group">
                <input type="text" name="search" class="form-control search-input" placeholder="Type something...">
                <span class="input-group-btn">
                    <button class="btn btn-default close-search" type="button"><i class="icon-close"></i></button>
                </span>
            </div><!-- Input Group -->
        </form><!-- Search Form -->
        <main class="page-content content-wrap">
            <div class="navbar">
                <div class="navbar-inner">
                    <div class="sidebar-pusher">
                        <a href="javascript:void(0);" class="waves-effect waves-button push-sidebar">
                            <i class="icon-arrow-right"></i>
                        </a>
                    </div>
                    <div class="logo-box">
                      <a href="#" style="width:10px;height:10px; background: #05f1ff; border-radius:50%;display: inline-block;margin-top: 20px;margin-left: 10px;"></a>
                      <a href="index.html" class="logo-text" style="padding:0px 0px"><span>{{ Auth::user()->name }}</span></a>
                    </div><!-- Logo Box --><!-- Logo Box -->
                    <div class="search-button">
                        <a href="javascript:void(0);" class="show-search"><i class="icon-magnifier"></i></a>
                    </div>
                    <div class="topmenu-outer">
                        <div class="top-menu">
                            <ul class="nav navbar-nav navbar-left">
                                <li>
                                    <a href="javascript:void(0);" class="sidebar-toggle"><i class="icon-arrow-left"></i></a>
                                </li>


                            </ul>
                            <ul class="nav navbar-nav navbar-right">
                                <li>
                                    <a href="javascript:void(0);" class="show-search"><i class="icon-magnifier"></i></a>
                                </li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                        <span class="user-name">{{ Auth::user()->name }}<i class="fa fa-angle-down"></i></span>
                                        <img class="img-circle avatar" src="assets/images/avatar1.png" width="40" height="40" alt="">
                                    </a>
                                    <ul class="dropdown-menu dropdown-list" role="menu">
                                        <li role="presentation"><a href="profile.html"><i class="icon-user"></i>Profile</a></li>
                                        <li role="presentation"><a href="calendar.html"><i class="icon-calendar"></i>Edit Your Profile</a></li>
                                        <li role="presentation" class="divider"></li>
																				<li class="nav-item"><a href="{{ route('logout') }}"onclick="event.preventDefault();
														                document.getElementById('logout-form').submit()" class="nav-link logout">
														                <span class="icon-key m-r-xs">Log out</span>
														                <i class="fa fa-sign-out"></i></a></li>
														                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
														                       @csrf
														                </form>
                                    </ul>
                                </li>
                            </ul><!-- Nav -->
                        </div><!-- Top Menu -->
                    </div>
                </div>
            </div><!-- Navbar -->
            <div class="page-sidebar sidebar">
                <div class="page-sidebar-inner slimscroll">
                    <ul class="menu accordion-menu">
                        <li class="active"><a href="{{ url('home') }}" class="waves-effect waves-button"><span class="menu-icon icon-home"></span><p>Dashboard</p><span class="active-page"></span></a></li>
                        <li class="@yield('dashboard-active')"><a href="{{ url('/') }}" target="_blank" class="waves-effect waves-button"><span class="menu-icon icon-home"></span><p>Visit Website</p><span class="active-page"></span></a></li>
                        {{-- <li><a href="{{ url('admin/register') }}" class="waves-effect waves-button" target="_blank"><span class="menu-icon icon-user"></span><p>Admin Registration</p></a></li> --}}
                        <li class="droplink"><a href="#" class="waves-effect waves-button"><span class="menu-icon icon-puzzle"></span><p>Home Page</p><span class="arrow"></span></a>
                            <ul class="sub-menu">
                                <li><a href="{{ url('about_us') }}">About Us</a></li>
                                <li><a href="{{ url('what/we/do') }}">What we do</a></li>
                                <li><a href="{{ url('premium/video/link') }}">Premium Course Video</a></li>
                              <li><a href="{{ url('student/feedback') }}">Students Feedback</a></li>
                            </ul>
                        </li>
                        <li class="droplink"><a href="#" class="waves-effect waves-button"><span class="menu-icon icon-puzzle"></span><p>About Page</p><span class="arrow"></span></a>
                            <ul class="sub-menu">
                                <li><a href="{{ url('amader/somporke') }}"> Add About us </a></li>
                            </ul>
                        </li>
                        <li class="droplink"><a href="#" class="waves-effect waves-button"><span class="menu-icon icon-puzzle"></span><p> Free Course </p><span class="arrow"></span></a>
                            <ul class="sub-menu">
                                <li><a href="{{ url('free/course') }}"> Add Free Courses </a></li>
                            </ul>
                        </li>
                        <li class="droplink"><a href="#" class="waves-effect waves-button"><span class="menu-icon icon-puzzle"></span><p>Premium Course</p><span class="arrow"></span></a>
                            <ul class="sub-menu">
                                <li><a href="{{ url('web/design/success/order') }}"> Web Design order </a></li>
                            </ul>
                        </li>
                        <li class="droplink"><a href="#" class="waves-effect waves-button"><span class="menu-icon icon-puzzle"></span><p> Our Services </p><span class="arrow"></span></a>
                            <ul class="sub-menu">
                                <li><a href="{{ url('web/training/service') }}"> Add All Services </a></li>
                            </ul>
                        </li>
                        <li class="droplink"><a href="#" class="waves-effect waves-button"><span class="menu-icon icon-puzzle"></span><p>Contact Us</p><span class="arrow"></span></a>
                            <ul class="sub-menu">
                                <li><a href="{{ url('view/contact/us') }}"> View Contact Us </a></li>
                            </ul>
                        </li>
                        <li class="droplink"><a href="#" class="waves-effect waves-button"><span class="menu-icon icon-puzzle"></span><p>Bonus Offer</p><span class="arrow"></span></a>
                            <ul class="sub-menu">
                                <li><a href="{{ url('view/bonus/offer') }}"> View Bonus Offer </a></li>
                            </ul>
                        </li>
                        <li class="droplink"><a href="#" class="waves-effect waves-button"><span class="menu-icon icon-puzzle"></span><p>Dvd Question</p><span class="arrow"></span></a>
                            <ul class="sub-menu">
                                <li><a href="{{ url('view/dvd/question') }}"> View Dvd Question </a></li>
                            </ul>
                        </li>
                        <li><a href="{{ url('update/password') }}"  class="waves-effect waves-button"><span class="menu-icon icon-home"></span><p>Changed PW</p><span class="active-page"></span></a></li>
                    </ul>
                </div><!-- Page Sidebar Inner -->
            </div><!-- Page Sidebar -->

						@yield('content')

        </main><!-- Page Content -->

        <!-- Javascripts -->
        <script src="{{ asset('dashboard_assets') }}/plugins/jquery/jquery-3.1.0.min.js"></script>
        <script src="{{ asset('dashboard_assets') }}/plugins/jquery-ui/jquery-ui.min.js"></script>
        <script src="{{ asset('dashboard_assets') }}/plugins/pace-master/pace.min.js"></script>
        <script src="{{ asset('dashboard_assets') }}/plugins/jquery-blockui/jquery.blockui.js"></script>
        <script src="{{ asset('dashboard_assets') }}/plugins/bootstrap/js/bootstrap.min.js"></script>
        <script src="{{ asset('dashboard_assets') }}/plugins/jquery-slimscroll/jquery.slimscroll.min.js"></script>
        <script src="{{ asset('dashboard_assets') }}/plugins/switchery/switchery.min.js"></script>
        <script src="{{ asset('dashboard_assets') }}/plugins/uniform/js/jquery.uniform.standalone.js"></script>
        <script src="{{ asset('dashboard_assets') }}/plugins/offcanvasmenueffects/js/classie.js"></script>
        <script src="{{ asset('dashboard_assets') }}/plugins/waves/waves.min.js"></script>
        <script src="{{ asset('dashboard_assets') }}/plugins/3d-bold-navigation/js/main.js"></script>
        <script src="{{ asset('dashboard_assets') }}/plugins/waypoints/jquery.waypoints.min.js"></script>
        {{-- <script src="{{ asset('dashboard_assets') }}/plugins/toastr/toastr.min.js"></script> --}}
        <script src="{{ asset('dashboard_assets') }}/plugins/flot/jquery.flot.min.js"></script>
        <script src="{{ asset('dashboard_assets') }}/plugins/flot/jquery.flot.time.min.js"></script>
        <script src="{{ asset('dashboard_assets') }}/plugins/flot/jquery.flot.symbol.min.js"></script>
        <script src="{{ asset('dashboard_assets') }}/plugins/flot/jquery.flot.resize.min.js"></script>
        <script src="{{ asset('dashboard_assets') }}/plugins/flot/jquery.flot.tooltip.min.js"></script>
        <script src="{{ asset('dashboard_assets') }}/plugins/curvedlines/curvedLines.js"></script>
        <script src="{{ asset('dashboard_assets') }}/plugins/chartjs/Chart.bundle.min.js"></script>
        <script src="{{ asset('dashboard_assets') }}/js/meteor.min.js"></script>
        <script src="{{ asset('dashboard_assets') }}/js/pages/dashboard.js"></script>
        <script src="{{ asset('dashboard_assets') }}/plugins/datatables/js/jquery.datatables.min.js"></script>
        <script src="{{ asset('dashboard_assets') }}/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
        <script src="{{ asset('dashboard_assets') }}/js/pages/table-data.js"></script>
        @yield('custom_js');

    </body>
</html>
