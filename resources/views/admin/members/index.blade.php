@extends('layouts.main')
@section('head_scripts')
    <link rel="stylesheet" href="/assets/examples/css/pages/register-v2.css">
    <link rel="stylesheet" href="/vendor/slidepanel/slidePanel.css">
    {{--<script src="/js/components/formatter-js.js"></script>--}}
    <link rel="stylesheet" href="/assets/examples/css/forms/masks.css">

    <!-- Skin tools (demo site only) -->
    <link rel="stylesheet" href="/css/skintools.min.css">
    <script src="/assets/js/sections/skintools.min.js"></script>

    <!-- Plugins For This Page -->
    <link rel="stylesheet" href="/vendor/filament-tablesaw/tablesaw.min.css?v2.1.0">
    <link rel="stylesheet" href="/vendor/slidepanel/slidePanel.min.css?v2.1.0">

    <!-- Page -->
    <link rel="stylesheet" href="/assets/examples/css/apps/contacts.min.css">

    <!-- Fonts -->
    <link rel="stylesheet" href="/fonts/material-design/material-design.min.css?v2.1.0">
    <link rel="stylesheet" href="/fonts/brand-icons/brand-icons.min.css?v2.1.0">

    <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Roboto:400,400italic,700'>


    <!--[if lt IE 9]>
    <script src="/vendor/html5shiv/html5shiv.min.js"></script>
    <![endif]-->

    <!--[if lt IE 10]>
    <script src="/vendor/media-match/media.match.min.js"></script>
    <script src="/vendor/respond/respond.min.js"></script>
    <![endif]-->

    <!-- Scripts -->
    <script src="/vendor/modernizr/modernizr.min.js"></script>
    <script src="/vendor/breakpoints/breakpoints.min.js"></script>
    <script>
        Breakpoints();
    </script>
    <style>

    </style>
@endsection

@section('content')
    <div id="wrapper-main" class="col-md-12 col-md-offset-0">
        <div class="page-header">
            <h1 class="page-title">Admin Members</h1>
            <ol class="breadcrumb">
                <li><a href="javascript:void(0)">Home</a></li>
                <li><a href="javascript:void(0)">Admin</a></li>
                <li class="active">Members</li>
            </ol>
        </div>


        {{-- INICIO DEL FORM --}}
        {{--<div id="form" class="col-md-12 col-md-offset-0 panel " style="height: 500px;">
        </div> --}}{{-- fin del fomr--}}


        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <meta name="description" content="bootstrap admin template">
        <meta name="author" content="">
        <title>Contacts | Remark Admin Template</title>
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
        <link rel="stylesheet" href="/vendor/filament-tablesaw/tablesaw.css">
        <link rel="stylesheet" href="/vendor/slidepanel/slidePanel.css">
        <link rel="stylesheet" href="/assets/examples/css/apps/contacts.css">
        <!-- Fonts -->
        <link rel="stylesheet" href="/fonts/web-icons/web-icons.min.css">
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


        <div class="page bg-white animsition">
            <div class="page-aside">
                <!-- Contacts Sidebar -->
                <div class="page-aside-switch">
                    <i class="icon wb-chevron-left" aria-hidden="true"></i>
                    <i class="icon wb-chevron-right" aria-hidden="true"></i>
                </div>
                <div class="page-aside-inner">
                    <div class="page-aside-section">
                        <div class="list-group">
                            <a class="list-group-item" href="javascript:void(0)">
                                <span class="item-right">61</span><i class="icon wb-inbox" aria-hidden="true"></i>All
                                contacts</a>
                        </div>
                    </div>
                    <div class="page-aside-section">
                        <h5 class="page-aside-title">LABEL</h5>
                        <div class="list-group">
                            <div class="list-group-item">
                                <div class="list-content">
                                    <span class="item-right">10</span>
                                    <span class="list-text">Work</span>
                                </div>
                            </div>
                            <div class="list-group-item">
                                <div class="list-content">
                                    <span class="item-right">5</span>
                                    <span class="list-text">Family</span>
                                </div>
                            </div>
                            <div class="list-group-item">
                                <div class="list-content">
                                    <span class="item-right">16</span>
                                    <span class="list-text">Private</span>
                                </div>
                            </div>
                            <div class="list-group-item">
                                <div class="list-content">
                                    <span class="item-right">30</span>
                                    <span class="list-text">Friends</span>
                                </div>
                            </div>
                            <a class="list-group-item" href="javascript:void(0)">
                                <i class="icon wb-plus" aria-hidden="true"></i> Add New Label
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Contacts Content -->
            <div class="page-main">
                <!-- Contacts Content Header -->
                <div class="page-header">
                    <h1 class="page-title">Contact List</h1>
                    <div class="page-header-actions">
                        <form>
                            <div class="input-search input-search-dark">
                                <i class="input-search-icon wb-search" aria-hidden="true"></i>
                                <input type="text" class="form-control" name="" placeholder="Search...">
                            </div>
                        </form>
                    </div>
                </div>
                <!-- Contacts Content -->
                <div class="page-content page-content-table">
                    <!-- Actions -->
                    <div class="page-content-actions">
                        <div class="pull-right">
                            <div class="dropdown">
                                <button type="button" class="btn btn-pure dropdown-toggle" data-toggle="dropdown"
                                        aria-expanded="false">
                                    More
                                    <span class="icon wb-chevron-down-mini" aria-hidden="true"></span>
                                </button>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="javascript:void(0)">More</a></li>
                                    <li><a href="javascript:void(0)">More</a></li>
                                </ul>
                            </div>
                            <button type="button" class="btn btn-outline btn-default btn-md empty-btn">Empty All
                            </button>
                        </div>
                        <div class="btn-group">
                            <div class="dropdown">
                                <button class="btn btn-icon btn-pure btn-default dropdown-toggle" data-toggle="dropdown"
                                        aria-expanded="false" type="button"><i class="icon wb-folder"
                                                                               aria-hidden="true"></i></button>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="javascript:void(0)">work</a></li>
                                    <li><a href="javascript:void(0)">Family</a></li>
                                    <li><a href="javascript:void(0)">Private</a></li>
                                    <li><a href="javascript:void(0)">Friends</a></li>
                                    <li class="divider"></li>
                                    <li><a href="javascript:void(0)">Trash</a></li>
                                    <li><a href="javascript:void(0)">Spam</a></li>
                                </ul>
                            </div>
                            <div class="dropdown">
                                <button class="btn btn-icon btn-pure btn-default dropdown-toggle" data-toggle="dropdown"
                                        aria-expanded="false" type="button"><i class="icon wb-tag"
                                                                               aria-hidden="true"></i></button>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="javascript:void(0)">work</a></li>
                                    <li><a href="javascript:void(0)">Family</a></li>
                                    <li><a href="javascript:void(0)">Private</a></li>
                                    <li><a href="javascript:void(0)">Friends</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- Contacts -->
                    <table class="table tablesaw" data-tablesaw-mode="stack" data-plugin="animateList"
                           data-animate="fade" data-child="tr" data-selectable="selectable">
                        <thead>
                        <tr>
                            <th class="cell-60" scope="col" data-tablesaw-sortable-col data-tablesaw-priority="3">
                <span class="checkbox-custom checkbox-primary checkbox-lg contacts-select-all">
                  <input type="checkbox" class="contacts-checkbox selectable-all" id="select_all"/>
                  <label for="select_all"></label>
                </span>
                            </th>
                            <th class="cell-300" scope="col" data-tablesaw-sortable-col data-tablesaw-priority="3">
                                Name
                            </th>
                            <th class="cell-300" scope="col" data-tablesaw-sortable-col data-tablesaw-priority="3">
                                Phone
                            </th>
                            <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="4">Email</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr data-url="panel.tpl" data-toggle="slidePanel">
                            <td class="cell-60 responsive-hide">
                <span class="checkbox-custom checkbox-primary checkbox-lg">
                  <input type="checkbox" class="contacts-checkbox selectable-item" id="contacts_1"/>
                  <label for="contacts_1"></label>
                </span>
                            </td>
                            <td class="cell-300">
                                <a class="avatar" href="javascript:void(0)">
                                    <img class="img-responsive" src="/portraits/1.jpg" alt="...">
                                </a>
                                Herman Beck
                            </td>
                            <td class="cell-300">(119)-298-8025</td>
                            <td>julio.williamson73@gmail.com</td>
                        </tr>
                        <tr data-url="panel.tpl" data-toggle="slidePanel">
                            <td class="cell-60 responsive-hide">
                <span class="checkbox-custom checkbox-primary checkbox-lg">
                  <input type="checkbox" class="contacts-checkbox selectable-item" id="contacts_2"/>
                  <label for="contacts_10"></label>
                </span>
                            </td>
                            <td class="cell-300">
                                <a class="avatar" href="javascript:void(0)">
                                    <img class="img-responsive" src="/portraits/10.jpg" alt="...">
                                </a>
                                Ronnie Ellis
                            </td>
                            <td class="cell-300">(769)-963-2966</td>
                            <td>erin.miller29@yahoo.com</td>
                        </tr>
                        </tbody>
                    </table>
                    <ul data-plugin="paginator" data-total="50" data-skin="pagination-gap"></ul>
                </div>
            </div>
        </div>
        <!-- Site Action -->
        <div class="site-action">
            <button type="button" class="site-action-toggle btn-raised btn btn-success btn-floating">
                <i class="front-icon wb-plus animation-scale-up" aria-hidden="true"></i>
                <i class="back-icon wb-close animation-scale-up" aria-hidden="true"></i>
            </button>
            <div class="site-action-buttons">
                <button type="button" data-action="trash"
                        class="btn-raised btn btn-success btn-floating animation-slide-bottom">
                    <i class="icon wb-trash" aria-hidden="true"></i>
                </button>
                <button type="button" data-action="folder"
                        class="btn-raised btn btn-success btn-floating animation-slide-bottom">
                    <i class="icon wb-folder" aria-hidden="true"></i>
                </button>
            </div>
        </div>
        <!-- End Site Action -->
        <!-- Add Mail Form -->
        <div class="modal fade" id="addUserForm" aria-hidden="true" aria-labelledby="addUserForm"
             role="dialog" tabindex="-1">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" aria-hidden="true" data-dismiss="modal">×</button>
                        <h4 class="modal-title">Create New Contact</h4>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="form-group">
                                <input type="text" class="form-control" name="name" placeholder="Name"/>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="phone" placeholder="Phone"/>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="email" placeholder="Email"/>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="address" placeholder="Address"/>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="birthday" placeholder="Birthday"
                                />
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Add Mail Form -->
        <!-- Core  -->
        <script src="/vendor/jquery/jquery.js"></script>
        <script src="/vendor/bootstrap/bootstrap.js"></script>
        <script src="/vendor/animsition/animsition.js"></script>
        <script src="/vendor/asscroll/jquery-asScroll.js"></script>
        <script src="/vendor/mousewheel/jquery.mousewheel.js"></script>
        <script src="/vendor/asscrollable/jquery.asScrollable.all.js"></script>
        <script src="/vendor/ashoverscroll/jquery-asHoverScroll.js"></script>
        <!-- Plugins -->
        <script src="/vendor/switchery/switchery.min.js"></script>
        <script src="/vendor/intro-js/intro.js"></script>
        <script src="/vendor/screenfull/screenfull.js"></script>
        <script src="/vendor/slidepanel/jquery-slidePanel.js"></script>
        <script src="/vendor/filament-tablesaw/tablesaw.js"></script>
        <script src="/vendor/slidepanel/jquery-slidePanel.js"></script>
        <script src="/vendor/aspaginator/jquery.asPaginator.min.js"></script>
        <script src="/vendor/jquery-placeholder/jquery.placeholder.js"></script>
        <!-- Scripts -->
        <script src="/js/core.js"></script>
        <script src="/assets/js/site.js"></script>
        <script src="/assets/js/sections/menu.js"></script>
        <script src="/assets/js/sections/menubar.js"></script>
        <script src="/assets/js/sections/gridmenu.js"></script>
        <script src="/assets/js/sections/sidebar.js"></script>
        <script src="/js/configs/config-colors.js"></script>
        <script src="/assets/js/configs/config-tour.js"></script>
        <script src="/js/components/asscrollable.js"></script>
        <script src="/js/components/animsition.js"></script>
        <script src="/js/components/slidepanel.js"></script>
        <script src="/js/components/switchery.js"></script>
        <script src="/js/plugins/sticky-header.js"></script>
        <script src="/js/plugins/action-btn.js"></script>
        <script src="/js/plugins/selectable.js"></script>
        <script src="/js/components/aspaginator.js"></script>
        <script src="/js/components/animate-list.js"></script>
        <script src="/js/components/jquery-placeholder.js"></script>
        <script src="/js/components/material.js"></script>
        <script src="/js/components/selectable.js"></script>
        <script src="/assets/js/app.js"></script>
        <script src="/assets/examples/js/apps/contacts.js"></script>


    </div> {{-- fin del div wraper--}}
@endsection

@section('script')

    {{--<script src="vendor/formvalidation/formValidation.min.js"></script>--}}
    {{--<script src="vendor/formvalidation/framework/bootstrap.min.js"></script>--}}
    {!! HTML::script('vendor/formvalidation/formValidation.min.js') !!}
    {!! HTML::script('vendor/formvalidation/framework/bootstrap.min.js') !!}
    {!! HTML::script('validator.js') !!}
    <script src="/vendor/formatter-js/jquery.formatter.js"></script>
    <!-- Scripts -->
    <script src="/js/components/formatter-js.js"></script>

    <!-- Plugins For This Page -->
    <script src="/vendor/filament-tablesaw/tablesaw.js"></script>
    <script src="/vendor/slidepanel/jquery-slidePanel.min.js"></script>
    <script src="/vendor/aspaginator/jquery.asPaginator.min.js"></script>
    <script src="/vendor/jquery-placeholder/jquery.placeholder.min.js"></script>
    <script src="/vendor/bootbox/bootbox.js"></script>

    <!-- Scripts -->
    <script src="/assets/js/sections/gridmenu.min.js"></script>
    <script src="/js/plugins/sticky-header.min.js"></script>
    <script src="/js/plugins/action-btn.min.js"></script>
    <script src="/js/plugins/selectable.min.js"></script>
    <script src="/js/components/aspaginator.min.js"></script>
    <script src="/js/components/animate-list.min.js"></script>
    <script src="/js/components/jquery-placeholder.min.js"></script>
    <script src="/js/components/material.min.js"></script>
    <script src="/js/components/selectable.min.js"></script>
    <script src="/js/components/bootbox.min.js"></script>


    <script src="/assets/js/app.min.js"></script>

    <script src="/assets/examples/js/apps/contacts.min.js"></script>


    <!-- Google Analytics -->
    <script>
        (function (i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r;
            i[r] = i[r] || function () {
                        (i[r].q = i[r].q || []).push(arguments)
                    }, i[r].l = 1 * new Date();
            a = s.createElement(o),
                    m = s.getElementsByTagName(o)[0];
            a.async = 1;
            a.src = g;
            m.parentNode.insertBefore(a, m)
        })(window, document, 'script', '//www.google-analytics.com/analytics.js',
                'ga');

        ga('create', 'UA-65522665-1', 'auto');
        ga('send', 'pageview');
    </script>
@endsection