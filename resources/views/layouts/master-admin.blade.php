<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="theme-color" content="#00b386">
    <link rel="icon" sizes="192x192" href="{{asset('img/blue-monster.png')}}">

    <title>{{trans('main_layout.title_tag')}}</title>

    <!-- Bootstrap Core CSS -->
    <link href="{{asset('/bower_components/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="{{asset('/bower_components/metisMenu/dist/metisMenu.min.css')}}" rel="stylesheet">

    <!-- Timeline CSS -->
    <link href="{{asset('/dist/css/timeline.css')}}" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="{{asset('/dist/css/sb-admin-2.css')}}" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="{{asset('/bower_components/morrisjs/morris.css')}}" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="{{asset('/bower_components/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,500,700&subset=latin,cyrillic' rel='stylesheet'
          type='text/css'>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

<div id="wrapper">

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{url('/admin')}}">{{trans('main_layout.nav_h1')}}</a>
        </div>
        <!-- /.navbar-header -->

        <ul class="nav navbar-top-links navbar-right">
            <!-- /.dropdown -->
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                </a>
                <ul class="dropdown-menu dropdown-user">
                    <li><a href="#"><i class="fa fa-user fa-fw"></i> {{ Auth::user()->name }}</a>
                    </li>
                    {{--<li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>--}}
                    {{--</li>--}}
                    <li class="divider"></li>
                    <li><a href="{{url('/logout')}}"><i class="fa fa-sign-out fa-fw"></i> {{trans('main_layout.nav_logout')}}</a>
                    </li>
                </ul>
                <!-- /.dropdown-user -->
            </li>
            <!-- /.dropdown -->
        </ul>
        <!-- /.navbar-top-links -->

        <!-- Switch Langueges -->
         <span class="pull-right">
             <form class="form" role="form" method="POST" action="{{ url('/postChangeLanguage') }}">
                {{ csrf_field() }}
                    <div class="form-group col-md-3">
                        <label>{{trans('main_layout.lang')}}</label>
                        <?php
                            if (Session::has('language')) {
                                $language = Session::get('language');
                            }else{
                                $language = Config::get('app.locale');
                            }
                        ?>
                        <select name="lang" onchange="this.form.submit()">
                            <option value="bg" <?php echo ($language==='bg' ? 'selected' : '');?>> bg </option>
                            <option value="en" <?php echo ($language==='en' ? 'selected' : '');?>> en </option>
                        </select>
                    </div>
             </form>
         </span>
         <!-- /.switch languages -->

        <div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav navbar-collapse">
                <ul class="nav" id="side-menu">
                    <li>
                        <a href="{{url('admin')}}"><i class="fa fa-dashboard fa-fw"></i> {{trans('main_layout.menu_dashboard')}}</a>
                    </li>
                    <?php
                    if(\Session::get('role') === env('ROLE_TEACHER'))
                    {
                    ?>
                        <li>
                            <a href="{{url('classes')}}"><i class="fa fa-users fa-fw"></i> {{trans('main_layout.menu_classes')}}</a>
                        </li>
                        <li>
                            <a href="{{url('/awarding')}}"><i class="fa fa-trophy fa-fw"></i> {{trans('main_layout.menu_points')}}</a>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="{{url('/level')}}"><i class="fa fa-bar-chart-o fa-fw"></i> {{trans('main_layout.menu_levels')}}</a>
                        </li>
                        <li>
                            <a href="{{url('/mission')}}"><i class="fa fa-road fa-fw"></i> {{trans('main_layout.menu_missions')}}</a>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="{{url('/all-monsters')}}"><i class="fa fa-paw fa-fw"></i> {{trans('main_layout.menu_monsters')}}</a>
                            <!-- /.nav-second-level -->
                        </li>
                    <?php
                    }elseif(\Session::get('role') === env('ROLE_PARENT') || \Session::get('role') === env('ROLE_STUDENT'))
                    {
                    ?>
                        <li>
                            <a href="{{url('/monsters')}}"><i class="fa fa-paw fa-fw"></i> {{trans('main_layout.menu_monsters')}}</a>
                            <!-- /.nav-second-level -->
                        </li>
                    <?php
                    }
                    ?>
                </ul>
            </div>
            <!-- /.sidebar-collapse -->
        </div>
        <!-- /.navbar-static-side -->
    </nav>
<!-- Head -->

    <!-- Content -->
    @yield('content')
    <!-- Content END -->

<!-- Footer & JavaScript -->
</div>
<!-- /#wrapper -->

<!-- jQuery -->
<script src="../bower_components/jquery/dist/jquery.min.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

<!-- Metis Menu Plugin JavaScript -->
<script src="../bower_components/metisMenu/dist/metisMenu.min.js"></script>

<!-- Morris Charts JavaScript -->
<script src="../bower_components/raphael/raphael-min.js"></script>
<script src="../bower_components/morrisjs/morris.min.js"></script>
<script src="../js/morris-data.js"></script>

<!-- Custom Theme JavaScript -->
<script src="../dist/js/sb-admin-2.js"></script>

</body>

</html>
