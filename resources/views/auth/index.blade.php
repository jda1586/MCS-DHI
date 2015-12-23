<!DOCTYPE html>
<html class="no-js css-menubar" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="bootstrap admin template">
    <meta name="author" content="">
    <title>Login V2 | Remark Admin Template</title>
    <link rel="apple-touch-icon" href="/assets/images/apple-touch-icon.png">
    <link rel="shortcut icon" href="/assets/images/favicon.ico">
    <!-- Stylesheets -->
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/bootstrap-extend.min.css">
    <link rel="stylesheet" href="/assets/css/site.min.css">
    <!-- Plugins -->
    <link rel="stylesheet" href="/vendor/animsition/animsition.css">
    <link rel="stylesheet" href="/vendor/asscrollable/asScrollable.css">
    <link rel="stylesheet" href="/vendor/switchery/switchery.css">
    <link rel="stylesheet" href="/vendor/intro-js/introjs.css">
    <link rel="stylesheet" href="/vendor/slidepanel/slidePanel.css">
    <link rel="stylesheet" href="/vendor/flag-icon-css/flag-icon.css">
    <link rel="stylesheet" href="/vendor/waves/waves.css">
    <link rel="stylesheet" href="/assets/examples/css/pages/login-v2.css">
    <!-- Fonts -->
    <link rel="stylesheet" href="/fonts/material-design/material-design.min.css">
    <link rel="stylesheet" href="/fonts/brand-icons/brand-icons.min.css">
    <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,300italic'>
    <!--[if lt IE 9]>
    <script src="/vendor/html5shiv/html5shiv.min.js"></script>
    <![endif]-->
    <!--[if lt IE 10]>
    <script src="/vendor/media-match/media.match.min.js"></script>
    <script src="/vendor/respond/respond.min.js"></script>
    <![endif]-->
    <!-- Scripts -->
    <script src="/vendor/modernizr/modernizr.js"></script>
    <script src="/vendor/breakpoints/breakpoints.js"></script>
    <script>
        Breakpoints();
    </script>
    <style>
        @media (max-width: 4000px) and (min-width: 0px) {
            .page-login-v2 .page-login-main {
                padding-top: 0px !important;
            }

            .page-login-v2:before {
                background-image: url("{!! URL::asset('assets/images/fondo_dh_temp.jpg') !!}") !important;
            }
        }

        g
    </style>
</head>
{{--<body class="page-login-v2 layout-full page-dark login">--}}
<body class="page-login-v2 layout-full page-dark login"
      style="background-image: url('{!! URL::asset('assets/images/fondo_dh_temp.jpg') !!}')!important;">
<!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade
    your browser</a> to improve your experience.</p>
<![endif]-->
<!-- Page -->
<div class="page animsition" data-animsition-in="fade-in" data-animsition-out="fade-out">
    <div class="page-content">
        <div class="page-brand-info">
            <div class="brand">
                <img class="brand-img" src="/assets/images/logos/dream_house.png" alt="Dream House">
                {{--<h2 class="brand-text font-size-40">Remark</h2>--}}
            </div>
            <p class="font-size-20">Texto que se ve en resoluciones grandes</p>
        </div>
        <div class="page-login-main" style="padding-top: 80px !important; padding-bottom : 0px !important;">
            <div class="brand visible-xs">
                <img class="brand-img" src="/assets/images/logos/dream_house.png" alt="Dream House"
                     style="align-items: center;">
                {{--<h3 class="brand-text font-size-40">Remark</h3>--}}
            </div>
            <h3 class="font-size-24">Sign In</h3>
            <p>Texto que se ve en resoluciones pequeñas</p>
            {!! Form::open(['route'=>'auth.login','method'=>'post','id'=>'loginForm'] ) !!}
            @if( Session::has('errors') )
                <div style="text-align: center; color: red;">login {!! $registro = 'filed'  !!} : check fields</div>
            @endif

            <div class="form-group">
                <label class="sr-only " for="inputUser">User</label>
                <input type="text" class="form-control" id="inputUser" name="user" placeholder="User">
                @foreach($errors->get('user') as $m)
                    <div style="text-align: center; color: red;">{{ $m }}</div>
                @endforeach
            </div>

            <div class="form-group">
                <label class="sr-only " for="inputPassword">Password</label>
                <input type="password" class="form-control" id="inputPassword" name="password" placeholder="Password">
                @foreach($errors->get('password') as $m)
                    <div style="text-align: center; color: red;">{{ $m }}</div>
                @endforeach
            </div>
            <div class="form-group clearfix">
                <div class="checkbox-custom checkbox-inline checkbox-primary pull-left">
                    <input type="checkbox" id="remember" name="checkbox">
                    <label for="inputCheckbox">Remember me</label>
                </div>
                <a class="pull-right" href="forgot-password.html">Forgot password?</a>
            </div>
            <button type="submit" id="login" class="btn btn-primary btn-block">Sign in</button>
            {!! Form::close() !!}
            <p>No account? <a href="register-v2.html">Sign Up</a></p>
            {{--<footer class="page-copyright">--}}
            {{--<p>WEBSITE BY amazingSurge</p>--}}
            {{--<p>© 2015. All RIGHT RESERVED.</p>--}}
            {{--<div class="social">--}}
            {{--<a class="btn btn-icon btn-round social-twitter" href="javascript:void(0)">--}}
            {{--<i class="icon bd-twitter" aria-hidden="true"></i>--}}
            {{--</a>--}}
            {{--<a class="btn btn-icon btn-round social-facebook" href="javascript:void(0)">--}}
            {{--<i class="icon bd-facebook" aria-hidden="true"></i>--}}
            {{--</a>--}}
            {{--<a class="btn btn-icon btn-round social-google-plus" href="javascript:void(0)">--}}
            {{--<i class="icon bd-google-plus" aria-hidden="true"></i>--}}
            {{--</a>--}}
            {{--</div>--}}
            {{--</footer>--}}
        </div>
    </div>
</div>
<!-- End Page -->
<!-- Core  -->
<script src="/vendor/jquery/jquery.js"></script>
<script src="/vendor/bootstrap/bootstrap.js"></script>
<script src="/vendor/animsition/animsition.js"></script>
<script src="/vendor/asscroll/jquery-asScroll.js"></script>
<script src="/vendor/mousewheel/jquery.mousewheel.js"></script>
<script src="/vendor/asscrollable/jquery.asScrollable.all.js"></script>
<script src="/vendor/ashoverscroll/jquery-asHoverScroll.js"></script>
<script src="/vendor/waves/waves.js"></script>
<!-- Plugins -->
<script src="/vendor/switchery/switchery.min.js"></script>
<script src="/vendor/intro-js/intro.js"></script>
<script src="/vendor/screenfull/screenfull.js"></script>
<script src="/vendor/slidepanel/jquery-slidePanel.js"></script>
<script src="/vendor/jquery-placeholder/jquery.placeholder.js"></script>
<!-- Scripts -->
<script src="/js/core.js"></script>
<script src="/assets/js/site.js"></script>
<script src="/assets/js/sections/menu.js"></script>
<script src="/assets/js/sections/menubar.js"></script>
<script src="/assets/js/sections/sidebar.js"></script>
<script src="/js/configs/config-colors.js"></script>
{{--<script src="/js/configs/config-tour.js"></script>--}}
<script src="/js/components/asscrollable.js"></script>
<script src="/js/components/animsition.js"></script>
<script src="/js/components/slidepanel.js"></script>
<script src="/js/components/switchery.js"></script>
<script src="/js/components/tabs.js"></script>
<script src="/js/components/jquery-placeholder.js"></script>
<!-- Scripts -->
{{--{!! HTML::script('bower_components/parsleyjs/dist/parsley.min.js') !!}
{!! HTML::script('bower_components/parsleyjs/src/i18n/es.js') !!}--}}
<script src="vendor/formvalidation/formValidation.min.js"></script>
<script src="vendor/formvalidation/framework/bootstrap.min.js"></script>
{{--{!! HTML::script('assets/examples/js/forms/validation.js') !!}--}}
{!! HTML::script('validator.js') !!}
{{--<script src="../../assets/examples/js/forms/validation.js"></script>--}}
<script>
    /* (function (document, window, $) {
     'use strict';
     var Site = window.Site;
     $(document).ready(function () {
     console.log(Site);
     Site.run();
     });
     })(document, window, jQuery);*/

    //    altair_forms.parsley_validation_config();
    //        llamada al parsley
    //    $('#form_validation').parsley();
</script>
</body>
</html>