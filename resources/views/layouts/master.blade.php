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

    <title>{{trans('master_layout.title_tag')}}</title>

    <!-- Bootstrap Core CSS - Uses Bootswatch Flatly Theme: http://bootswatch.com/flatly/ -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="{{ asset('css/freelancer.css') }}" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="{{ asset('font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet"
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,500,700&subset=latin,cyrillic' rel='stylesheet'
          type='text/css'>
          type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="page-top" class="index">

<!-- Navigation -->
<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header page-scroll">
            <button type="button" class="navbar-toggle" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#page-top">{{trans('master_layout.title_h1')}}</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li class="hidden">
                    <a href="#page-top"></a>
                </li>
                <li class="page-scroll">
                    <a href="{{url('/all-monsters')}}">{{trans('master_layout.see_monster')}}</a>
                </li>
                <ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links -->
                    @if (Auth::guest())
                        <li><a href="{{ url('/login') }}">{{trans('master_layout.login')}}</a></li>
                        <li><a href="{{ url('/register') }}">{{trans('master_layout.registration')}}</a></li>
                    @else
                        <li class="page-scroll">
                            <a href="{{url('/admin')}}">
                                {{ Auth::user()->name }}
                            </a>
                        </li>
                        <li class="page-scroll"><a href="{{ url('/logout') }}">{{trans('master_layout.logout')}} <i
                                        class="fa fa-btn fa-sign-out"></i></a></li>
                        </li>
                    @endif
                </ul>
            </ul>

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
                 
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container-fluid -->
</nav>

<!-- Header -->
@yield('content')
<!-- Footer -->
<!-- jQuery -->
<script src="{{ asset('js/jquery.js') }}"></script>

<!-- Bootstrap Core JavaScript -->
<script src="{{ asset('js/bootstrap.min.js') }}"></script>

<!-- Plugin JavaScript -->
<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
<script src="{{ asset('js/classie.js') }}"></script>
<script src="{{ asset('js/cbpAnimatedHeader.js') }}"></script>

<!-- Contact Form JavaScript -->
<script src="{{ asset('js/jqBootstrapValidation.js') }}"></script>
<script src="{{ asset('js/contact_me.js') }}"></script>

<!-- Custom Theme JavaScript -->
<script src="{{ asset('js/freelancer.js') }}"></script>

</body>

</html>
