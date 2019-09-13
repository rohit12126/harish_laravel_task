<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>@lang('global.dashboard.title')</title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <!-- bootstrap 3.0.2 -->
        <link href="{{ asset('admin_assests/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
        <!-- font Awesome -->
        <link href="{{ asset('admin_assests/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css" />
        <!-- Ionicons -->
        <link href="{{ asset('admin_assests/css/ionicons.min.css') }}" rel="stylesheet" type="text/css" />
        <!-- Morris chart -->
        <link href="{{ asset('admin_assests/css/morris/morris.css') }}" rel="stylesheet" type="text/css" />
        <!-- jvectormap -->
        <link href="{{ asset('admin_assests/css/jvectormap/jquery-jvectormap-1.2.2.css') }}" rel="stylesheet" type="text/css" />
        <!-- fullCalendar -->
        <link href="{{ asset('admin_assests/css/fullcalendar/fullcalendar.css') }}" rel="stylesheet" type="text/css" />
        <!-- Daterange picker -->
        <link href="{{ asset('admin_assests/css/daterangepicker/daterangepicker-bs3.css') }}" rel="stylesheet" type="text/css" />
        <!-- bootstrap wysihtml5 - text editor -->
        <link href="{{ asset('admin_assests/css/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css') }}" rel="stylesheet" type="text/css" />
        <!-- Theme style -->
        <link href="{{ asset('admin_assests/css/jquery.dataTables.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('admin_assests/css/AdminLTE.css') }}" rel="stylesheet" type="text/css" />

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
    </head>
    <body class="skin-black">
        <!-- header logo: style can be found in header.less -->
        <header class="header">
            <a href="{{route('home')}}" class="logo">
                @lang('global.global_title')
            </a>
            <!-- Header Navbar: style can be found in header.less -->
            <nav class="navbar navbar-static-top" role="navigation">
                <!-- Sidebar toggle button-->
                <div class="navbar-right">
                    <ul class="nav navbar-nav">
                        <li class="dropdown user user-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="glyphicon glyphicon-user"></i>
                                <span>{{ auth()->user()->name }} <i class="caret"></i></span>
                            </a>
                            <ul class="dropdown-menu" style="width:15px !important;">
                                <li class="user-footer">
                                    <!-- <i class="fa fa-fw fa-user"></i> --><a href="#">@lang('global.profile.title')</a>
                                </li>
                                <li class="user-footer">
                                  <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <div class="wrapper row-offcanvas row-offcanvas-left">
           @include('layouts.sidebar')
           @yield('main_content')
         </div><!-- ./wrapper -->

        <!-- add new calendar event modal -->
        <!-- jQuery 2.0.2 -->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
        <!-- jQuery UI 1.10.3 -->
        <script src="{{ asset('admin_assests/js/jquery-ui-1.10.3.min.js') }}" type="text/javascript"></script>
        <!-- Bootstrap -->
        <script src="{{ asset('admin_assests/js/bootstrap.min.js') }}" type="text/javascript"></script>
        <!-- Morris.js charts -->
        <script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
        <script src="{{ asset('admin_assests/js/plugins/morris/morris.min.js') }}" type="text/javascript"></script>
        <!-- Sparkline -->
        <script src="{{ asset('admin_assests/js/plugins/sparkline/jquery.sparkline.min.js') }}" type="text/javascript"></script>
        <!-- jvectormap -->
        <script src="{{ asset('admin_assests/js/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js') }}" type="text/javascript"></script>
        <script src="{{ asset('admin_assests/js/plugins/jvectormap/jquery-jvectormap-world-mill-en.js') }}" type="text/javascript"></script>
        <!-- fullCalendar -->
        <script src="{{ asset('admin_assests/js/plugins/fullcalendar/fullcalendar.min.js') }}" type="text/javascript"></script>
        <!-- jQuery Knob Chart -->
        <script src="{{ asset('admin_assests/js/plugins/jqueryKnob/jquery.knob.js') }}" type="text/javascript"></script>
        <!-- daterangepicker -->
        <script src="{{ asset('admin_assests/') }}js/plugins/daterangepicker/daterangepicker.js" type="text/javascript"></script>
        <!-- Bootstrap WYSIHTML5 -->
        <script src="{{ asset('admin_assests/js/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js') }}" type="text/javascript"></script>
        <!-- iCheck -->
        <script src="{{ asset('admin_assests/js/plugins/iCheck/icheck.min.js') }}" type="text/javascript"></script>

        <!-- AdminLTE App -->
        <script src="{{ asset('admin_assests/js/AdminLTE/app.js') }}" type="text/javascript"></script>
        
        <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
        <script src="{{ asset('admin_assests/js/AdminLTE/dashboard.js') }}" type="text/javascript"></script>        
        <script src="{{ asset('admin_assests/js/bootstrap-notify.js') }}" type="text/javascript"></script>        

    </body>
</html>

@if ($message = Session::get('success'))
<script type="text/javascript">
    $.notify({
             message: "{{ $message }}"
        },{
            type: 'success',
            timer: 1000,
            placement: {
                from: 'bottom',
                align: 'right'
            }
      });    
</script>
@endif

@if ($message = Session::get('error'))
<script type="text/javascript">
 $.notify({
        message: "{{ $message }}"
    },{
        type: 'danger',
        timer: 1000,
        placement: {
            from: 'bottom',
            align: 'right'
        }
   }); 
</script>
@endif

@yield('javascript')