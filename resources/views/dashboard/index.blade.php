<!DOCTYPE html>
<html class="no-js css-menubar" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="bootstrap admin template">
    <meta name="author" content="">
    <title>Blank | Remark Admin Template</title>
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
                <li>
                    <a class="icon md-search" data-toggle="collapse" href="#site-navbar-search" role="button">
                        <span class="sr-only">Toggle Search</span>
                    </a>
                </li>
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
                    <a data-toggle="dropdown" href="javascript:void(0)" title="Messages" aria-expanded="false"
                       data-animation="scale-up" role="button">
                        <i class="icon md-email" aria-hidden="true"></i>
                        <span class="badge badge-info up">3</span>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-right dropdown-menu-media" role="menu">
                        <li class="dropdown-menu-header" role="presentation">
                            <h5>MESSAGES</h5>
                            <span class="label label-round label-info">New 3</span>
                        </li>
                        <li class="list-group" role="presentation">
                            <div data-role="container">
                                <div data-role="content">
                                    <a class="list-group-item" href="javascript:void(0)" role="menuitem">
                                        <div class="media">
                                            <div class="media-left padding-right-10">
                          <span class="avatar avatar-sm avatar-online">
                            <img src="/portraits/2.jpg" alt="..."/>
                            <i></i>
                          </span>
                                            </div>
                                            <div class="media-body">
                                                <h6 class="media-heading">Mary Adams</h6>
                                                <div class="media-meta">
                                                    <time datetime="2015-06-17T20:22:05+08:00">30 minutes ago</time>
                                                </div>
                                                <div class="media-detail">Anyways, i would like just do it</div>
                                            </div>
                                        </div>
                                    </a>
                                    <a class="list-group-item" href="javascript:void(0)" role="menuitem">
                                        <div class="media">
                                            <div class="media-left padding-right-10">
                          <span class="avatar avatar-sm avatar-off">
                            <img src="../../../global/portraits/3.jpg" alt="..."/>
                            <i></i>
                          </span>
                                            </div>
                                            <div class="media-body">
                                                <h6 class="media-heading">Caleb Richards</h6>
                                                <div class="media-meta">
                                                    <time datetime="2015-06-17T12:30:30+08:00">12 hours ago</time>
                                                </div>
                                                <div class="media-detail">I checheck the document. But there seems</div>
                                            </div>
                                        </div>
                                    </a>
                                    <a class="list-group-item" href="javascript:void(0)" role="menuitem">
                                        <div class="media">
                                            <div class="media-left padding-right-10">
                          <span class="avatar avatar-sm avatar-busy">
                            <img src="../../../global/portraits/4.jpg" alt="..."/>
                            <i></i>
                          </span>
                                            </div>
                                            <div class="media-body">
                                                <h6 class="media-heading">June Lane</h6>
                                                <div class="media-meta">
                                                    <time datetime="2015-06-16T18:38:40+08:00">2 days ago</time>
                                                </div>
                                                <div class="media-detail">Lorem ipsum Id consectetur et minim</div>
                                            </div>
                                        </div>
                                    </a>
                                    <a class="list-group-item" href="javascript:void(0)" role="menuitem">
                                        <div class="media">
                                            <div class="media-left padding-right-10">
                          <span class="avatar avatar-sm avatar-away">
                            <img src="../../../global/portraits/5.jpg" alt="..."/>
                            <i></i>
                          </span>
                                            </div>
                                            <div class="media-body">
                                                <h6 class="media-heading">Edward Fletcher</h6>
                                                <div class="media-meta">
                                                    <time datetime="2015-06-15T20:34:48+08:00">3 days ago</time>
                                                </div>
                                                <div class="media-detail">Dolor et irure cupidatat commodo nostrud
                                                    nostrud.
                                                </div>
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
                                See all messages
                            </a>
                        </li>
                    </ul>
                </li>
                <li id="toggleChat">
                    <a data-toggle="site-sidebar" href="javascript:void(0)" title="Chat" data-url="../site-sidebar.tpl">
                        <i class="icon md-comment" aria-hidden="true"></i>
                    </a>
                </li>
            </ul>
            <!-- End Navbar Toolbar Right -->
            <div class="navbar-brand navbar-brand-center">
                <a href="../index.html">
                    <img class="navbar-brand-logo" src="/assets/images/logo.png" title="Remark">
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
                    <img src="../../../global/portraits/1.jpg" alt="Machi">
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
                            <span class="site-menu-title">Dashboard</span>
                        </a>
                    </li>
                    <li class="site-menu-item has-sub">
                        <a href="javascript:void(0)">
                            <i class="site-menu-icon md-view-compact" aria-hidden="true"></i>
                            <span class="site-menu-title">Layouts</span>
                            <span class="site-menu-arrow"></span>
                        </a>
                        <ul class="site-menu-sub">
                            <li class="site-menu-item">
                                <a class="animsition-link" href="../layouts/menubar-fold.html">
                                    <span class="site-menu-title">Menubar Fold</span>
                                </a>
                            </li>
                            <li class="site-menu-item">
                                <a class="animsition-link" href="../layouts/menubar-disable-hover.html">
                                    <span class="site-menu-title">Menubar Disable Hover</span>
                                </a>
                            </li>
                            <li class="site-menu-item">
                                <a class="animsition-link" href="../layouts/menubar-open.html">
                                    <span class="site-menu-title">Menubar Open</span>
                                </a>
                            </li>
                            <li class="site-menu-item">
                                <a class="animsition-link" href="../layouts/menubar-push.html">
                                    <span class="site-menu-title">Menubar Push</span>
                                </a>
                            </li>
                            <li class="site-menu-item">
                                <a class="animsition-link" href="../layouts/grids.html">
                                    <span class="site-menu-title">Grid Scaffolding</span>
                                </a>
                            </li>
                            <li class="site-menu-item">
                                <a class="animsition-link" href="../layouts/layout-grid.html">
                                    <span class="site-menu-title">Layout Grid</span>
                                </a>
                            </li>
                            <li class="site-menu-item">
                                <a class="animsition-link" href="../layouts/headers.html">
                                    <span class="site-menu-title">Different Headers</span>
                                </a>
                            </li>
                            <li class="site-menu-item">
                                <a class="animsition-link" href="../layouts/panel-transition.html">
                                    <span class="site-menu-title">Panel Transition</span>
                                </a>
                            </li>
                            <li class="site-menu-item">
                                <a class="animsition-link" href="../layouts/boxed.html">
                                    <span class="site-menu-title">Boxed Layout</span>
                                </a>
                            </li>
                            <li class="site-menu-item">
                                <a class="animsition-link" href="../layouts/two-columns.html">
                                    <span class="site-menu-title">Two Columns</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="site-menu-item has-sub active">
                        <a href="javascript:void(0)">
                            <i class="site-menu-icon md-google-pages" aria-hidden="true"></i>
                            <span class="site-menu-title">Pages</span>
                            <span class="site-menu-arrow"></span>
                        </a>
                        <ul class="site-menu-sub">
                            <li class="site-menu-item has-sub">
                                <a href="javascript:void(0)">
                                    <span class="site-menu-title">Errors</span>
                                    <span class="site-menu-arrow"></span>
                                </a>
                                <ul class="site-menu-sub">
                                    <li class="site-menu-item">
                                        <a class="animsition-link" href="../pages/error-400.html">
                                            <span class="site-menu-title">400</span>
                                        </a>
                                    </li>
                                    <li class="site-menu-item">
                                        <a class="animsition-link" href="../pages/error-403.html">
                                            <span class="site-menu-title">403</span>
                                        </a>
                                    </li>
                                    <li class="site-menu-item">
                                        <a class="animsition-link" href="../pages/error-404.html">
                                            <span class="site-menu-title">404</span>
                                        </a>
                                    </li>
                                    <li class="site-menu-item">
                                        <a class="animsition-link" href="../pages/error-500.html">
                                            <span class="site-menu-title">500</span>
                                        </a>
                                    </li>
                                    <li class="site-menu-item">
                                        <a class="animsition-link" href="../pages/error-503.html">
                                            <span class="site-menu-title">503</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="site-menu-item">
                                <a class="animsition-link" href="../pages/faq.html">
                                    <span class="site-menu-title">FAQ</span>
                                </a>
                            </li>
                            <li class="site-menu-item">
                                <a class="animsition-link" href="../pages/gallery.html">
                                    <span class="site-menu-title">Gallery</span>
                                </a>
                            </li>
                            <li class="site-menu-item">
                                <a class="animsition-link" href="../pages/gallery-grid.html">
                                    <span class="site-menu-title">Gallery Grid</span>
                                </a>
                            </li>
                            <li class="site-menu-item">
                                <a class="animsition-link" href="../pages/search-result.html">
                                    <span class="site-menu-title">Search Result</span>
                                </a>
                            </li>
                            <li class="site-menu-item has-sub">
                                <a href="javascript:void(0)">
                                    <span class="site-menu-title">Maps</span>
                                    <span class="site-menu-arrow"></span>
                                </a>
                                <ul class="site-menu-sub">
                                    <li class="site-menu-item">
                                        <a class="animsition-link" href="../pages/map-google.html">
                                            <span class="site-menu-title">Google Maps</span>
                                        </a>
                                    </li>
                                    <li class="site-menu-item">
                                        <a class="animsition-link" href="../pages/map-vector.html">
                                            <span class="site-menu-title">Vector Maps</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="site-menu-item">
                                <a class="animsition-link" href="../pages/maintenance.html">
                                    <span class="site-menu-title">Maintenance</span>
                                </a>
                            </li>
                            <li class="site-menu-item">
                                <a class="animsition-link" href="../pages/forgot-password.html">
                                    <span class="site-menu-title">Forgot Password</span>
                                </a>
                            </li>
                            <li class="site-menu-item">
                                <a class="animsition-link" href="../pages/lockscreen.html">
                                    <span class="site-menu-title">Lockscreen</span>
                                </a>
                            </li>
                            <li class="site-menu-item">
                                <a class="animsition-link" href="../pages/login.html">
                                    <span class="site-menu-title">Login</span>
                                </a>
                            </li>
                            <li class="site-menu-item">
                                <a class="animsition-link" href="../pages/register.html">
                                    <span class="site-menu-title">Register</span>
                                </a>
                            </li>
                            <li class="site-menu-item">
                                <a class="animsition-link" href="../pages/login-v2.html">
                                    <span class="site-menu-title">Login V2</span>
                                </a>
                            </li>
                            <li class="site-menu-item">
                                <a class="animsition-link" href="../pages/register-v2.html">
                                    <span class="site-menu-title">Register V2</span>
                                    <div class="site-menu-label">
                                        <span class="label label-info label-round">new</span>
                                    </div>
                                </a>
                            </li>
                            <li class="site-menu-item">
                                <a class="animsition-link" href="../pages/login-v3.html">
                                    <span class="site-menu-title">Login V3</span>
                                </a>
                            </li>
                            <li class="site-menu-item">
                                <a class="animsition-link" href="../pages/register-v3.html">
                                    <span class="site-menu-title">Register V3</span>
                                </a>
                            </li>
                            <li class="site-menu-item">
                                <a class="animsition-link" href="../pages/user.html">
                                    <span class="site-menu-title">User List</span>
                                </a>
                            </li>
                            <li class="site-menu-item">
                                <a class="animsition-link" href="../pages/invoice.html">
                                    <span class="site-menu-title">Invoice</span>
                                </a>
                            </li>
                            <li class="site-menu-item active">
                                <a class="animsition-link" href="../pages/blank.html">
                                    <span class="site-menu-title">Blank Page</span>
                                </a>
                            </li>
                            <li class="site-menu-item">
                                <a class="animsition-link" href="../pages/email.html">
                                    <span class="site-menu-title">Email</span>
                                </a>
                            </li>
                            <li class="site-menu-item">
                                <a class="animsition-link" href="../pages/code-editor.html">
                                    <span class="site-menu-title">Code Editor</span>
                                </a>
                            </li>
                            <li class="site-menu-item">
                                <a class="animsition-link" href="../pages/profile.html">
                                    <span class="site-menu-title">Profile</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="site-menu-item has-sub">
                        <a href="javascript:void(0)">
                            <i class="site-menu-icon md-palette" aria-hidden="true"></i>
                            <span class="site-menu-title">Basic UI</span>
                            <span class="site-menu-arrow"></span>
                        </a>
                        <ul class="site-menu-sub">
                            <li class="site-menu-item has-sub">
                                <a href="javascript:void(0)">
                                    <span class="site-menu-title">Panel</span>
                                    <span class="site-menu-arrow"></span>
                                </a>
                                <ul class="site-menu-sub">
                                    <li class="site-menu-item">
                                        <a class="animsition-link" href="../uikit/panel-structure.html">
                                            <span class="site-menu-title">Panel Structure</span>
                                        </a>
                                    </li>
                                    <li class="site-menu-item">
                                        <a class="animsition-link" href="../uikit/panel-actions.html">
                                            <span class="site-menu-title">Panel Actions</span>
                                        </a>
                                    </li>
                                    <li class="site-menu-item">
                                        <a class="animsition-link" href="../uikit/panel-portlets.html">
                                            <span class="site-menu-title">Panel Portlets</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="site-menu-item">
                                <a class="animsition-link" href="../uikit/buttons.html">
                                    <span class="site-menu-title">Buttons</span>
                                </a>
                            </li>
                            <li class="site-menu-item">
                                <a class="animsition-link" href="../uikit/dropdowns.html">
                                    <span class="site-menu-title">Dropdowns</span>
                                </a>
                            </li>
                            <li class="site-menu-item">
                                <a class="animsition-link" href="../uikit/icons.html">
                                    <span class="site-menu-title">Icons</span>
                                </a>
                            </li>
                            <li class="site-menu-item">
                                <a class="animsition-link" href="../uikit/list.html">
                                    <span class="site-menu-title">List</span>
                                </a>
                            </li>
                            <li class="site-menu-item">
                                <a class="animsition-link" href="../uikit/tooltip-popover.html">
                                    <span class="site-menu-title">Tooltip &amp; Popover</span>
                                </a>
                            </li>
                            <li class="site-menu-item">
                                <a class="animsition-link" href="../uikit/modals.html">
                                    <span class="site-menu-title">Modals</span>
                                </a>
                            </li>
                            <li class="site-menu-item">
                                <a class="animsition-link" href="../uikit/tabs-accordions.html">
                                    <span class="site-menu-title">Tabs &amp; Accordions</span>
                                </a>
                            </li>
                            <li class="site-menu-item">
                                <a class="animsition-link" href="../uikit/images.html">
                                    <span class="site-menu-title">Images</span>
                                </a>
                            </li>
                            <li class="site-menu-item">
                                <a class="animsition-link" href="../uikit/badges-labels.html">
                                    <span class="site-menu-title">Badges &amp; Labels</span>
                                </a>
                            </li>
                            <li class="site-menu-item">
                                <a class="animsition-link" href="../uikit/progress-bars.html">
                                    <span class="site-menu-title">Progress Bars</span>
                                </a>
                            </li>
                            <li class="site-menu-item">
                                <a class="animsition-link" href="../uikit/carousel.html">
                                    <span class="site-menu-title">Carousel</span>
                                </a>
                            </li>
                            <li class="site-menu-item">
                                <a class="animsition-link" href="../uikit/typography.html">
                                    <span class="site-menu-title">Typography</span>
                                </a>
                            </li>
                            <li class="site-menu-item">
                                <a class="animsition-link" href="../uikit/colors.html">
                                    <span class="site-menu-title">Colors</span>
                                </a>
                            </li>
                            <li class="site-menu-item">
                                <a class="animsition-link" href="../uikit/utilities.html">
                                    <span class="site-menu-title">Utilties</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="site-menu-item has-sub">
                        <a href="javascript:void(0)">
                            <i class="site-menu-icon md-format-color-fill" aria-hidden="true"></i>
                            <span class="site-menu-title">Advanced UI</span>
                            <span class="site-menu-arrow"></span>
                        </a>
                        <ul class="site-menu-sub">
                            <li class="site-menu-item hidden-xs site-tour-trigger">
                                <a href="javascript:void(0)">
                                    <span class="site-menu-title">Tour</span>
                                </a>
                            </li>
                            <li class="site-menu-item">
                                <a class="animsition-link" href="../advanced/animation.html">
                                    <span class="site-menu-title">Animation</span>
                                </a>
                            </li>
                            <li class="site-menu-item">
                                <a class="animsition-link" href="../advanced/highlight.html">
                                    <span class="site-menu-title">Highlight</span>
                                </a>
                            </li>
                            <li class="site-menu-item">
                                <a class="animsition-link" href="../advanced/lightbox.html">
                                    <span class="site-menu-title">Lightbox</span>
                                </a>
                            </li>
                            <li class="site-menu-item">
                                <a class="animsition-link" href="../advanced/scrollable.html">
                                    <span class="site-menu-title">Scrollable</span>
                                </a>
                            </li>
                            <li class="site-menu-item">
                                <a class="animsition-link" href="../advanced/rating.html">
                                    <span class="site-menu-title">Rating</span>
                                </a>
                            </li>
                            <li class="site-menu-item">
                                <a class="animsition-link" href="../advanced/context-menu.html">
                                    <span class="site-menu-title">Context Menu</span>
                                </a>
                            </li>
                            <li class="site-menu-item">
                                <a class="animsition-link" href="../advanced/alertify.html">
                                    <span class="site-menu-title">Alertify</span>
                                </a>
                            </li>
                            <li class="site-menu-item">
                                <a class="animsition-link" href="../advanced/masonry.html">
                                    <span class="site-menu-title">Masonry</span>
                                </a>
                            </li>
                            <li class="site-menu-item">
                                <a class="animsition-link" href="../advanced/treeview.html">
                                    <span class="site-menu-title">Treeview</span>
                                </a>
                            </li>
                            <li class="site-menu-item">
                                <a class="animsition-link" href="../advanced/toastr.html">
                                    <span class="site-menu-title">Toastr</span>
                                </a>
                            </li>
                            <li class="site-menu-item">
                                <a class="animsition-link" href="../advanced/maps-vector.html">
                                    <span class="site-menu-title">Vector Maps</span>
                                </a>
                            </li>
                            <li class="site-menu-item">
                                <a class="animsition-link" href="../advanced/maps-google.html">
                                    <span class="site-menu-title">Google Maps</span>
                                </a>
                            </li>
                            <li class="site-menu-item">
                                <a class="animsition-link" href="../advanced/sortable-nestable.html">
                                    <span class="site-menu-title">Sortable &amp; Nestable</span>
                                </a>
                            </li>
                            <li class="site-menu-item">
                                <a class="animsition-link" href="../advanced/bootbox-sweetalert.html">
                                    <span class="site-menu-title">Bootbox &amp; Sweetalert</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="site-menu-item has-sub">
                        <a href="javascript:void(0)">
                            <i class="site-menu-icon md-puzzle-piece" aria-hidden="true"></i>
                            <span class="site-menu-title">Structure</span>
                            <span class="site-menu-arrow"></span>
                        </a>
                        <ul class="site-menu-sub">
                            <li class="site-menu-item">
                                <a class="animsition-link" href="../structure/alerts.html">
                                    <span class="site-menu-title">Alerts</span>
                                </a>
                            </li>
                            <li class="site-menu-item">
                                <a class="animsition-link" href="../structure/ribbon.html">
                                    <span class="site-menu-title">Ribbon</span>
                                </a>
                            </li>
                            <li class="site-menu-item">
                                <a class="animsition-link" href="../structure/pricing-tables.html">
                                    <span class="site-menu-title">Pricing Tables</span>
                                </a>
                            </li>
                            <li class="site-menu-item">
                                <a class="animsition-link" href="../structure/overlay.html">
                                    <span class="site-menu-title">Overlay</span>
                                </a>
                            </li>
                            <li class="site-menu-item">
                                <a class="animsition-link" href="../structure/cover.html">
                                    <span class="site-menu-title">Cover</span>
                                </a>
                            </li>
                            <li class="site-menu-item">
                                <a class="animsition-link" href="../structure/timeline-simple.html">
                                    <span class="site-menu-title">Simple Timeline</span>
                                </a>
                            </li>
                            <li class="site-menu-item">
                                <a class="animsition-link" href="../structure/timeline.html">
                                    <span class="site-menu-title">Timeline</span>
                                </a>
                            </li>
                            <li class="site-menu-item">
                                <a class="animsition-link" href="../structure/step.html">
                                    <span class="site-menu-title">Step</span>
                                </a>
                            </li>
                            <li class="site-menu-item">
                                <a class="animsition-link" href="../structure/comments.html">
                                    <span class="site-menu-title">Comments</span>
                                </a>
                            </li>
                            <li class="site-menu-item">
                                <a class="animsition-link" href="../structure/media.html">
                                    <span class="site-menu-title">Media</span>
                                </a>
                            </li>
                            <li class="site-menu-item">
                                <a class="animsition-link" href="../structure/chat.html">
                                    <span class="site-menu-title">Chat</span>
                                </a>
                            </li>
                            <li class="site-menu-item">
                                <a class="animsition-link" href="../structure/testimonials.html">
                                    <span class="site-menu-title">Testimonials</span>
                                </a>
                            </li>
                            <li class="site-menu-item">
                                <a class="animsition-link" href="../structure/nav.html">
                                    <span class="site-menu-title">Nav</span>
                                </a>
                            </li>
                            <li class="site-menu-item">
                                <a class="animsition-link" href="../structure/navbars.html">
                                    <span class="site-menu-title">Navbars</span>
                                </a>
                            </li>
                            <li class="site-menu-item">
                                <a class="animsition-link" href="../structure/blockquotes.html">
                                    <span class="site-menu-title">Blockquotes</span>
                                </a>
                            </li>
                            <li class="site-menu-item">
                                <a class="animsition-link" href="../structure/pagination.html">
                                    <span class="site-menu-title">Pagination</span>
                                </a>
                            </li>
                            <li class="site-menu-item">
                                <a class="animsition-link" href="../structure/breadcrumbs.html">
                                    <span class="site-menu-title">Breadcrumbs</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="site-menu-item has-sub">
                        <a href="javascript:void(0)">
                            <i class="site-menu-icon md-widgets" aria-hidden="true"></i>
                            <span class="site-menu-title">Widgets</span>
                            <span class="site-menu-arrow"></span>
                        </a>
                        <ul class="site-menu-sub">
                            <li class="site-menu-item">
                                <a class="animsition-link" href="../widgets/statistics.html">
                                    <span class="site-menu-title">Statistics Widgets</span>
                                </a>
                            </li>
                            <li class="site-menu-item">
                                <a class="animsition-link" href="../widgets/data.html">
                                    <span class="site-menu-title">Data Widgets</span>
                                </a>
                            </li>
                            <li class="site-menu-item">
                                <a class="animsition-link" href="../widgets/blog.html">
                                    <span class="site-menu-title">Blog Widgets</span>
                                </a>
                            </li>
                            <li class="site-menu-item">
                                <a class="animsition-link" href="../widgets/chart.html">
                                    <span class="site-menu-title">Chart Widgets</span>
                                </a>
                            </li>
                            <li class="site-menu-item">
                                <a class="animsition-link" href="../widgets/social.html">
                                    <span class="site-menu-title">Social Widgets</span>
                                </a>
                            </li>
                            <li class="site-menu-item">
                                <a class="animsition-link" href="../widgets/weather.html">
                                    <span class="site-menu-title">Weather Widgets</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="site-menu-item has-sub">
                        <a href="javascript:void(0)">
                            <i class="site-menu-icon md-comment-alt-text" aria-hidden="true"></i>
                            <span class="site-menu-title">Forms</span>
                            <span class="site-menu-arrow"></span>
                        </a>
                        <ul class="site-menu-sub">
                            <li class="site-menu-item">
                                <a class="animsition-link" href="../forms/general.html">
                                    <span class="site-menu-title">General Elements</span>
                                </a>
                            </li>
                            <li class="site-menu-item">
                                <a class="animsition-link" href="../forms/material.html">
                                    <span class="site-menu-title">Material Elements</span>
                                </a>
                            </li>
                            <li class="site-menu-item">
                                <a class="animsition-link" href="../forms/advanced.html">
                                    <span class="site-menu-title">Advanced Elements</span>
                                </a>
                            </li>
                            <li class="site-menu-item">
                                <a class="animsition-link" href="../forms/layouts.html">
                                    <span class="site-menu-title">Form Layouts</span>
                                </a>
                            </li>
                            <li class="site-menu-item">
                                <a class="animsition-link" href="../forms/wizard.html">
                                    <span class="site-menu-title">Form Wizard</span>
                                </a>
                            </li>
                            <li class="site-menu-item">
                                <a class="animsition-link" href="../forms/validation.html">
                                    <span class="site-menu-title">Form Validation</span>
                                </a>
                            </li>
                            <li class="site-menu-item">
                                <a class="animsition-link" href="../forms/masks.html">
                                    <span class="site-menu-title">Form Masks</span>
                                </a>
                            </li>
                            <li class="site-menu-item">
                                <a class="animsition-link" href="../forms/editable.html">
                                    <span class="site-menu-title">Form Editable</span>
                                </a>
                            </li>
                            <li class="site-menu-item has-sub">
                                <a href="javascript:void(0)">
                                    <span class="site-menu-title">Editors</span>
                                    <span class="site-menu-arrow"></span>
                                </a>
                                <ul class="site-menu-sub">
                                    <li class="site-menu-item">
                                        <a class="animsition-link" href="../forms/editor-summernote.html">
                                            <span class="site-menu-title">Summernote</span>
                                        </a>
                                    </li>
                                    <li class="site-menu-item">
                                        <a class="animsition-link" href="../forms/editor-markdown.html">
                                            <span class="site-menu-title">Markdown</span>
                                        </a>
                                    </li>
                                    <li class="site-menu-item">
                                        <a class="animsition-link" href="../forms/editor-ace.html">
                                            <span class="site-menu-title">Ace Editor</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="site-menu-item">
                                <a class="animsition-link" href="../forms/image-cropping.html">
                                    <span class="site-menu-title">Image Cropping</span>
                                </a>
                            </li>
                            <li class="site-menu-item">
                                <a class="animsition-link" href="../forms/file-uploads.html">
                                    <span class="site-menu-title">File Uploads</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="site-menu-item has-sub">
                        <a href="javascript:void(0)">
                            <i class="site-menu-icon md-border-all" aria-hidden="true"></i>
                            <span class="site-menu-title">Tables</span>
                            <span class="site-menu-arrow"></span>
                        </a>
                        <ul class="site-menu-sub">
                            <li class="site-menu-item">
                                <a class="animsition-link" href="../tables/basic.html">
                                    <span class="site-menu-title">Basic Tables</span>
                                </a>
                            </li>
                            <li class="site-menu-item">
                                <a class="animsition-link" href="../tables/bootstrap.html">
                                    <span class="site-menu-title">Bootstrap Tables</span>
                                </a>
                            </li>
                            <li class="site-menu-item">
                                <a class="animsition-link" href="../tables/floatthead.html">
                                    <span class="site-menu-title">floatThead</span>
                                </a>
                            </li>
                            <li class="site-menu-item">
                                <a class="animsition-link" href="../tables/responsive.html">
                                    <span class="site-menu-title">Responsive Tables</span>
                                </a>
                            </li>
                            <li class="site-menu-item">
                                <a class="animsition-link" href="../tables/editable.html">
                                    <span class="site-menu-title">Editable Tables</span>
                                </a>
                            </li>
                            <li class="site-menu-item">
                                <a class="animsition-link" href="../tables/jsgrid.html">
                                    <span class="site-menu-title">jsGrid</span>
                                </a>
                            </li>
                            <li class="site-menu-item">
                                <a class="animsition-link" href="../tables/footable.html">
                                    <span class="site-menu-title">FooTable</span>
                                </a>
                            </li>
                            <li class="site-menu-item">
                                <a class="animsition-link" href="../tables/datatable.html">
                                    <span class="site-menu-title">DataTables</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="site-menu-item has-sub">
                        <a href="javascript:void(0)">
                            <i class="site-menu-icon md-chart" aria-hidden="true"></i>
                            <span class="site-menu-title">Chart</span>
                            <span class="site-menu-arrow"></span>
                        </a>
                        <ul class="site-menu-sub">
                            <li class="site-menu-item">
                                <a class="animsition-link" href="../charts/chartjs.html">
                                    <span class="site-menu-title">Chart.js</span>
                                </a>
                            </li>
                            <li class="site-menu-item">
                                <a class="animsition-link" href="../charts/gauges.html">
                                    <span class="site-menu-title">Gauges</span>
                                </a>
                            </li>
                            <li class="site-menu-item">
                                <a class="animsition-link" href="../charts/flot.html">
                                    <span class="site-menu-title">Flot</span>
                                </a>
                            </li>
                            <li class="site-menu-item">
                                <a class="animsition-link" href="../charts/peity.html">
                                    <span class="site-menu-title">Peity</span>
                                </a>
                            </li>
                            <li class="site-menu-item">
                                <a class="animsition-link" href="../charts/sparkline.html">
                                    <span class="site-menu-title">Sparkline</span>
                                </a>
                            </li>
                            <li class="site-menu-item">
                                <a class="animsition-link" href="../charts/morris.html">
                                    <span class="site-menu-title">Morris</span>
                                </a>
                            </li>
                            <li class="site-menu-item">
                                <a class="animsition-link" href="../charts/chartist.html">
                                    <span class="site-menu-title">Chartist.js</span>
                                </a>
                            </li>
                            <li class="site-menu-item">
                                <a class="animsition-link" href="../charts/rickshaw.html">
                                    <span class="site-menu-title">Rickshaw</span>
                                </a>
                            </li>
                            <li class="site-menu-item">
                                <a class="animsition-link" href="../charts/pie-progress.html">
                                    <span class="site-menu-title">Pie Progress</span>
                                </a>
                            </li>
                            <li class="site-menu-item">
                                <a class="animsition-link" href="../charts/c3.html">
                                    <span class="site-menu-title">C3</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- Page -->
<div class="page animsition">
    <div class="page-content">
        @content
    </div>
</div>
<!-- End Page -->
<!-- Footer -->
<footer class="site-footer">
    <div class="site-footer-legal">© 2015 <a
                href="http://themeforest.net/item/remark-responsive-bootstrap-admin-template/11989202">Remark</a></div>
    <div class="site-footer-right">
        Crafted with <i class="red-600 icon md-favorite"></i> by <a href="http://themeforest.net/user/amazingSurge">amazingSurge</a>
    </div>
</footer>
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