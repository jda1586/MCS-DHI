<!DOCTYPE html>
<html class="no-js css-menubar" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="bootstrap admin template">
    <meta name="author" content="">
    <title>Dream House - @yield('title')</title>
    @yield('head_scripts')
    <link rel="apple-touch-icon" href="../../assets/images/apple-touch-icon.png">
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
</head>
<body>
<!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade
    your browser</a> to improve your experience.</p>
<![endif]-->
<nav class="site-navbar navbar navbar-inverse navbar-fixed-top navbar-mega" role="navigation">
    <div class="navbar-container container-fluid">
        <!-- Navbar Collapse -->
        <div class="navbar-collapse navbar-collapse-toolbar" id="site-navbar-collapse">
            <!-- Navbar Toolbar -->
            <ul class="nav navbar-toolbar">
                <li id="toggleMenubar">
                    <a data-toggle="menubar" href="#" role="button">
                        <i class="icon hamburger hamburger-arrow-left">
                            <span class="sr-only">Toggle menubar</span>
                            <span class="hamburger-bar"></span>
                        </i>
                    </a>
                </li>
                {{--<li>--}}
                {{--<a class="icon md-search" data-toggle="collapse" href="#site-navbar-search" role="button">--}}
                {{--<span class="sr-only">Toggle Search</span>--}}
                {{--</a>--}}
                {{--</li>--}}
            </ul>
            <!-- End Navbar Toolbar -->
            <!-- Navbar Toolbar Right -->
            <ul class="nav navbar-toolbar navbar-right navbar-toolbar-right">
                <li class="dropdown">
                    <a data-toggle="dropdown" href="javascript:void(0)" title="Notifications" aria-expanded="false"
                       data-animation="scale-up" role="button">
                        <i class="icon md-notifications" aria-hidden="true"></i>
                        <span class="badge badge-danger up">5</span>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-right dropdown-menu-media" role="menu">
                        <li class="dropdown-menu-header" role="presentation">
                            <h5>NOTIFICATIONS</h5>
                            <span class="label label-round label-danger">New 5</span>
                        </li>
                        <li class="list-group" role="presentation">
                            <div data-role="container">
                                <div data-role="content">
                                    <a class="list-group-item" href="javascript:void(0)" role="menuitem">
                                        <div class="media">
                                            <div class="media-left padding-right-10">
                                                <i class="icon md-receipt bg-red-600 white icon-circle"
                                                   aria-hidden="true"></i>
                                            </div>
                                            <div class="media-body">
                                                <h6 class="media-heading">A new order has been placed</h6>
                                                <time class="media-meta" datetime="2015-06-12T20:50:48+08:00">5 hours
                                                    ago
                                                </time>
                                            </div>
                                        </div>
                                    </a>
                                    <a class="list-group-item" href="javascript:void(0)" role="menuitem">
                                        <div class="media">
                                            <div class="media-left padding-right-10">
                                                <i class="icon md-account bg-green-600 white icon-circle"
                                                   aria-hidden="true"></i>
                                            </div>
                                            <div class="media-body">
                                                <h6 class="media-heading">Completed the task</h6>
                                                <time class="media-meta" datetime="2015-06-11T18:29:20+08:00">2 days
                                                    ago
                                                </time>
                                            </div>
                                        </div>
                                    </a>
                                    <a class="list-group-item" href="javascript:void(0)" role="menuitem">
                                        <div class="media">
                                            <div class="media-left padding-right-10">
                                                <i class="icon md-settings bg-red-600 white icon-circle"
                                                   aria-hidden="true"></i>
                                            </div>
                                            <div class="media-body">
                                                <h6 class="media-heading">Settings updated</h6>
                                                <time class="media-meta" datetime="2015-06-11T14:05:00+08:00">2 days
                                                    ago
                                                </time>
                                            </div>
                                        </div>
                                    </a>
                                    <a class="list-group-item" href="javascript:void(0)" role="menuitem">
                                        <div class="media">
                                            <div class="media-left padding-right-10">
                                                <i class="icon md-calendar bg-blue-600 white icon-circle"
                                                   aria-hidden="true"></i>
                                            </div>
                                            <div class="media-body">
                                                <h6 class="media-heading">Event started</h6>
                                                <time class="media-meta" datetime="2015-06-10T13:50:18+08:00">3 days
                                                    ago
                                                </time>
                                            </div>
                                        </div>
                                    </a>
                                    <a class="list-group-item" href="javascript:void(0)" role="menuitem">
                                        <div class="media">
                                            <div class="media-left padding-right-10">
                                                <i class="icon md-comment bg-orange-600 white icon-circle"
                                                   aria-hidden="true"></i>
                                            </div>
                                            <div class="media-body">
                                                <h6 class="media-heading">Message received</h6>
                                                <time class="media-meta" datetime="2015-06-10T12:34:48+08:00">3 days
                                                    ago
                                                </time>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </li>
                        <li class="dropdown-menu-footer" role="presentation">
                            <a class="dropdown-menu-footer-btn" href="javascript:void(0)" role="button">
                                <i class="icon md-settings" aria-hidden="true"></i>
                            </a>
                            <a href="javascript:void(0)" role="menuitem">
                                All notifications
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a class="navbar-avatar dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false"
                       data-animation="scale-up" role="button">
              <span class="avatar avatar-online">
                <img src="assets/images/users/13.jpg" alt="...">
                <i></i>
              </span>
                    </a>
                    <ul class="dropdown-menu" role="menu">
                        <li role="presentation">
                            <a href="javascript:void(0)" role="menuitem"><i class="icon wb-user" aria-hidden="true"></i> Profile</a>
                        </li>
                        <li role="presentation">
                            <a href="javascript:void(0)" role="menuitem"><i class="icon wb-payment" aria-hidden="true"></i> Billing</a>
                        </li>
                        <li role="presentation">
                            <a href="javascript:void(0)" role="menuitem"><i class="icon wb-settings" aria-hidden="true"></i> Settings</a>
                        </li>
                        <li class="divider" role="presentation"></li>
                        <li role="presentation">
                            <a href="javascript:void(0)" role="menuitem"><i class="icon wb-power" aria-hidden="true"></i> Logout</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- End Navbar Toolbar Right -->
            <div class="navbar-brand navbar-brand-center">
                <a href="../index.html">
                    <img class="navbar-brand-logo" src="/assets/images/logos/dream_house_200.png" title="Remark">
                </a>
            </div>
        </div>
        <!-- End Navbar Collapse -->
        <!-- Site Navbar Seach -->
        <div class="collapse navbar-search-overlap" id="site-navbar-search">
            <form role="search">
                <div class="form-group">
                    <div class="input-search">
                        <i class="input-search-icon md-search" aria-hidden="true"></i>
                        <input type="text" class="form-control" name="site-search" placeholder="Search...">
                        <button type="button" class="input-search-close icon md-close" data-target="#site-navbar-search"
                                data-toggle="collapse" aria-label="Close"></button>
                    </div>
                </div>
            </form>
        </div>
        <!-- End Site Navbar Seach -->
    </div>
</nav>
<div class="site-menubar">
    <div class="site-menubar-header cover">
        <div class="cover-background vertical-align"
             style="background-image: url('/assets//examples/images/menubar-header.jpg')">
            <div class="vertical-align-middle">
                <a class="avatar avatar-lg" href="javascript:void(0)">
                    <img src="assets/images/users/13.jpg" alt="Machi">
                </a>
                <div class="site-menubar-info">
                    <h5 class="site-menubar-user">Machi</h5>
                    <p class="site-menubar-email">machidesign@gmail.com</p>
                </div>
            </div>
        </div>
    </div>
    <div class="site-menubar-body">
        <div>
            <div>
                <ul class="site-menu">
                    <li class="site-menu-item">
                        <a class="animsition-link" href="../index.html">
                            <i class="site-menu-icon md-view-dashboard" aria-hidden="true"></i>
                            <span class="site-menu-title">Home</span>
                        </a>
                    </li>
                    <li class="site-menu-item">
                        <a class="animsition-link" href="../index.html">
                            <i class="site-menu-icon md-money" aria-hidden="true"></i>
                            <span class="site-menu-title">Subastas</span>
                        </a>
                    </li>
                    <li class="site-menu-item has-sub">
                        <a href="javascript:void(0)">
                            <i class="site-menu-icon md-balance-wallet" aria-hidden="true"></i>
                            <span class="site-menu-title">Wallets</span>
                            <span class="site-menu-arrow"></span>
                        </a>
                        <ul class="site-menu-sub">
                            <li class="site-menu-item">
                                <a class="animsition-link" href="../layouts/menubar-fold.html">
                                    <span class="site-menu-title">Cashouts</span>
                                </a>
                            </li>
                            <li class="site-menu-item">
                                <a class="animsition-link" href="../layouts/menubar-fold.html">
                                    <span class="site-menu-title">Deposits</span>
                                </a>
                            </li>
                            <li class="site-menu-item">
                                <a class="animsition-link" href="../layouts/menubar-fold.html">
                                    <span class="site-menu-title">Movements</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="site-menu-item has-sub">
                        <a href="javascript:void(0)">
                            <i class="site-menu-icon md-assignment-account" aria-hidden="true"></i>
                            <span class="site-menu-title">Trees</span>
                            <span class="site-menu-arrow"></span>
                        </a>
                        <ul class="site-menu-sub">
                            <li class="site-menu-item">
                                <a class="animsition-link" href="../layouts/menubar-fold.html">
                                    <span class="site-menu-title">Binary Tree</span>
                                </a>
                            </li>
                            <li class="site-menu-item">
                                <a class="animsition-link" href="../layouts/menubar-fold.html">
                                    <span class="site-menu-title">Unilevel Tree</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="site-menu-item has-sub">
                        <a href="javascript:void(0)">
                            <i class="site-menu-icon md-balance-wallet" aria-hidden="true"></i>
                            <span class="site-menu-title">Wallets</span>
                            <span class="site-menu-arrow"></span>
                        </a>
                        <ul class="site-menu-sub">
                            <li class="site-menu-item">
                                <a class="animsition-link" href="../layouts/menubar-fold.html">
                                    <span class="site-menu-title">Cashouts</span>
                                </a>
                            </li>
                            <li class="site-menu-item">
                                <a class="animsition-link" href="../layouts/menubar-fold.html">
                                    <span class="site-menu-title">Deposits</span>
                                </a>
                            </li>
                            <li class="site-menu-item">
                                <a class="animsition-link" href="../layouts/menubar-fold.html">
                                    <span class="site-menu-title">Movements</span>
                                </a>
                            </li>
                        </ul>
                    </li>


                    {{--<li class="site-menu-item has-sub">--}}
                        {{--<a href="javascript:void(0)">--}}
                            {{--<i class="site-menu-icon md-assignment-account" aria-hidden="true"></i>--}}
                            {{--<span class="site-menu-title">Members</span>--}}
                            {{--<span class="site-menu-arrow"></span>--}}
                        {{--</a>--}}
                        {{--<ul class="site-menu-sub">--}}
                            {{--<li class="site-menu-item has-sub">--}}
                                {{--<a href="javascript:void(0)">--}}
                                    {{--<span class="site-menu-title">Errors</span>--}}
                                    {{--<span class="site-menu-arrow"></span>--}}
                                {{--</a>--}}
                                {{--<ul class="site-menu-sub">--}}
                                    {{--<li class="site-menu-item">--}}
                                        {{--<a class="animsition-link" href="../pages/error-400.html">--}}
                                            {{--<span class="site-menu-title">Binary Tree</span>--}}
                                        {{--</a>--}}
                                    {{--</li>--}}
                                    {{--<li class="site-menu-item">--}}
                                        {{--<a class="animsition-link" href="../pages/error-400.html">--}}
                                            {{--<span class="site-menu-title">Unilevel Tree</span>--}}
                                        {{--</a>--}}
                                    {{--</li>--}}
                                    {{--<li class="site-menu-item">--}}
                                        {{--<a class="animsition-link" href="../pages/error-400.html">--}}
                                            {{--<span class="site-menu-title">New members</span>--}}
                                        {{--</a>--}}
                                    {{--</li>--}}
                                {{--</ul>--}}
                            {{--</li>--}}
                        {{--</ul>--}}
                    {{--</li>--}}
                    {{--<li class="site-menu-item has-sub active">--}}
                        {{--<a href="javascript:void(0)">--}}
                            {{--<i class="site-menu-icon md-accounts-alt" aria-hidden="true"></i>--}}
                            {{--<span class="site-menu-title">My organization</span>--}}
                            {{--<span class="site-menu-arrow"></span>--}}
                        {{--</a>--}}
                        {{--<ul class="site-menu-sub">--}}
                            {{--<li class="site-menu-item has-sub">--}}
                                {{--<a href="javascript:void(0)">--}}
                                    {{--<span class="site-menu-title">Errors</span>--}}
                                    {{--<span class="site-menu-arrow"></span>--}}
                                {{--</a>--}}
                                {{--<ul class="site-menu-sub">--}}
                                    {{--<li class="site-menu-item">--}}
                                        {{--<a class="animsition-link" href="../pages/error-400.html">--}}
                                            {{--<span class="site-menu-title">400</span>--}}
                                        {{--</a>--}}
                                    {{--</li>--}}
                                    {{--<li class="site-menu-item">--}}
                                        {{--<a class="animsition-link" href="../pages/error-403.html">--}}
                                            {{--<span class="site-menu-title">403</span>--}}
                                        {{--</a>--}}
                                    {{--</li>--}}
                                    {{--<li class="site-menu-item">--}}
                                        {{--<a class="animsition-link" href="../pages/error-404.html">--}}
                                            {{--<span class="site-menu-title">404</span>--}}
                                        {{--</a>--}}
                                    {{--</li>--}}
                                    {{--<li class="site-menu-item">--}}
                                        {{--<a class="animsition-link" href="../pages/error-500.html">--}}
                                            {{--<span class="site-menu-title">500</span>--}}
                                        {{--</a>--}}
                                    {{--</li>--}}
                                    {{--<li class="site-menu-item">--}}
                                        {{--<a class="animsition-link" href="../pages/error-503.html">--}}
                                            {{--<span class="site-menu-title">503</span>--}}
                                        {{--</a>--}}
                                    {{--</li>--}}
                                {{--</ul>--}}
                            {{--</li>--}}
                            {{--<li class="site-menu-item">--}}
                                {{--<a class="animsition-link" href="../pages/faq.html">--}}
                                    {{--<span class="site-menu-title">FAQ</span>--}}
                                {{--</a>--}}
                            {{--</li>--}}
                            {{--<li class="site-menu-item">--}}
                                {{--<a class="animsition-link" href="../pages/gallery.html">--}}
                                    {{--<span class="site-menu-title">Gallery</span>--}}
                                {{--</a>--}}
                            {{--</li>--}}
                            {{--<li class="site-menu-item">--}}
                                {{--<a class="animsition-link" href="../pages/gallery-grid.html">--}}
                                    {{--<span class="site-menu-title">Gallery Grid</span>--}}
                                {{--</a>--}}
                            {{--</li>--}}
                            {{--<li class="site-menu-item">--}}
                                {{--<a class="animsition-link" href="../pages/search-result.html">--}}
                                    {{--<span class="site-menu-title">Search Result</span>--}}
                                {{--</a>--}}
                            {{--</li>--}}
                            {{--<li class="site-menu-item has-sub">--}}
                                {{--<a href="javascript:void(0)">--}}
                                    {{--<span class="site-menu-title">Maps</span>--}}
                                    {{--<span class="site-menu-arrow"></span>--}}
                                {{--</a>--}}
                                {{--<ul class="site-menu-sub">--}}
                                    {{--<li class="site-menu-item">--}}
                                        {{--<a class="animsition-link" href="../pages/map-google.html">--}}
                                            {{--<span class="site-menu-title">Google Maps</span>--}}
                                        {{--</a>--}}
                                    {{--</li>--}}
                                    {{--<li class="site-menu-item">--}}
                                        {{--<a class="animsition-link" href="../pages/map-vector.html">--}}
                                            {{--<span class="site-menu-title">Vector Maps</span>--}}
                                        {{--</a>--}}
                                    {{--</li>--}}
                                {{--</ul>--}}
                            {{--</li>--}}
                            {{--<li class="site-menu-item">--}}
                                {{--<a class="animsition-link" href="../pages/maintenance.html">--}}
                                    {{--<span class="site-menu-title">Maintenance</span>--}}
                                {{--</a>--}}
                            {{--</li>--}}
                            {{--<li class="site-menu-item">--}}
                                {{--<a class="animsition-link" href="../pages/forgot-password.html">--}}
                                    {{--<span class="site-menu-title">Forgot Password</span>--}}
                                {{--</a>--}}
                            {{--</li>--}}
                            {{--<li class="site-menu-item">--}}
                                {{--<a class="animsition-link" href="../pages/lockscreen.html">--}}
                                    {{--<span class="site-menu-title">Lockscreen</span>--}}
                                {{--</a>--}}
                            {{--</li>--}}
                            {{--<li class="site-menu-item">--}}
                                {{--<a class="animsition-link" href="../pages/login.html">--}}
                                    {{--<span class="site-menu-title">Login</span>--}}
                                {{--</a>--}}
                            {{--</li>--}}
                            {{--<li class="site-menu-item">--}}
                                {{--<a class="animsition-link" href="../pages/register.html">--}}
                                    {{--<span class="site-menu-title">Register</span>--}}
                                {{--</a>--}}
                            {{--</li>--}}
                            {{--<li class="site-menu-item">--}}
                                {{--<a class="animsition-link" href="../pages/login-v2.html">--}}
                                    {{--<span class="site-menu-title">Login V2</span>--}}
                                {{--</a>--}}
                            {{--</li>--}}
                            {{--<li class="site-menu-item">--}}
                                {{--<a class="animsition-link" href="../pages/register-v2.html">--}}
                                    {{--<span class="site-menu-title">Register V2</span>--}}
                                    {{--<div class="site-menu-label">--}}
                                        {{--<span class="label label-info label-round">new</span>--}}
                                    {{--</div>--}}
                                {{--</a>--}}
                            {{--</li>--}}
                            {{--<li class="site-menu-item">--}}
                                {{--<a class="animsition-link" href="../pages/login-v3.html">--}}
                                    {{--<span class="site-menu-title">Login V3</span>--}}
                                {{--</a>--}}
                            {{--</li>--}}
                            {{--<li class="site-menu-item">--}}
                                {{--<a class="animsition-link" href="../pages/register-v3.html">--}}
                                    {{--<span class="site-menu-title">Register V3</span>--}}
                                {{--</a>--}}
                            {{--</li>--}}
                            {{--<li class="site-menu-item">--}}
                                {{--<a class="animsition-link" href="../pages/user.html">--}}
                                    {{--<span class="site-menu-title">User List</span>--}}
                                {{--</a>--}}
                            {{--</li>--}}
                            {{--<li class="site-menu-item">--}}
                                {{--<a class="animsition-link" href="../pages/invoice.html">--}}
                                    {{--<span class="site-menu-title">Invoice</span>--}}
                                {{--</a>--}}
                            {{--</li>--}}
                            {{--<li class="site-menu-item active">--}}
                                {{--<a class="animsition-link" href="../pages/blank.html">--}}
                                    {{--<span class="site-menu-title">Blank Page</span>--}}
                                {{--</a>--}}
                            {{--</li>--}}
                            {{--<li class="site-menu-item">--}}
                                {{--<a class="animsition-link" href="../pages/email.html">--}}
                                    {{--<span class="site-menu-title">Email</span>--}}
                                {{--</a>--}}
                            {{--</li>--}}
                            {{--<li class="site-menu-item">--}}
                                {{--<a class="animsition-link" href="../pages/code-editor.html">--}}
                                    {{--<span class="site-menu-title">Code Editor</span>--}}
                                {{--</a>--}}
                            {{--</li>--}}
                            {{--<li class="site-menu-item">--}}
                                {{--<a class="animsition-link" href="../pages/profile.html">--}}
                                    {{--<span class="site-menu-title">Profile</span>--}}
                                {{--</a>--}}
                            {{--</li>--}}
                        {{--</ul>--}}
                    {{--</li>--}}
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- Page -->

        @yield('content')


<!-- End Page -->
<!-- Footer -->
{{--<footer class="site-footer">--}}
{{--<div class="site-footer-legal">© 2015 <a--}}
{{--href="http://themeforest.net/item/remark-responsive-bootstrap-admin-template/11989202">Remark</a></div>--}}
{{--<div class="site-footer-right">--}}
{{--Crafted with <i class="red-600 icon md-favorite"></i> by <a href="http://themeforest.net/user/amazingSurge">amazingSurge</a>--}}
{{--</div>--}}
{{--</footer>--}}
        <!-- Core  -->

<script src="/vendor/jquery/jquery.js"></script>
<script src="/vendor/jquery/jquery.min.js"></script>
<script src="/vendor/bootstrap/bootstrap.js"></script>
<script src="/vendor/animsition/animsition.js"></script>
<script src="/vendor/asscroll/jquery-asScroll.js"></script>
<script src="/vendor/mousewheel/jquery.mousewheel.js"></script>
<script src="/vendor/asscrollable/jquery.asScrollable.all.js"></script>
<script src="/vendor/asscroll/jquery-asScroll.js"></script>
<script src="/vendor/ashoverscroll/jquery-asHoverScroll.js"></script>
<script src="/vendor/waves/waves.js"></script>
<!-- Plugins -->
<script src="/vendor/switchery/switchery.min.js"></script>
<script src="/vendor/intro-js/intro.js"></script>
<script src="/vendor/screenfull/screenfull.js"></script>
<script src="/vendor/slidepanel/jquery-slidePanel.js"></script>
<!-- Scripts -->
<script src="/js/core.js"></script>
<script src="/assets/js/site.js"></script>
<script src="/assets/js/sections/menu.js"></script>
<script src="/assets/js/sections/menubar.js"></script>
<script src="/assets/js/sections/sidebar.js"></script>
<script src="js/configs/config-colors.js"></script>
<script src="/assets/js/configs/config-tour.js"></script>
<script src="/js/components/asscrollable.js"></script>
<script src="/js/components/animsition.js"></script>
<script src="/js/components/slidepanel.js"></script>
<script src="/js/components/switchery.js"></script>
<script src="/js/components/tabs.js"></script>


<script>
    (function (document, window, $) {
        'use strict';
        var Site = window.Site;
        $(document).ready(function () {
            Site.run();
        });
    })(document, window, jQuery);
</script>
</body>
</html>