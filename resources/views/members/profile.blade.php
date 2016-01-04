@extends('layouts.main')

@section('head_scripts')
    <link rel="stylesheet" href="/assets/examples/css/pages/profile.css">
    <link rel="stylesheet" href="/assets/examples/css/pages/profile.min.css">
    {{--<link rel="stylesheet" href="/css/bootstrap.css">--}}
    <style>
        .page-profile .profile-stat-count {
            display: block;
            margin-bottom: 3px;
            font-size: 20px;
            font-weight: 100;
            color: #616161;
        }
    </style>

@endsection

@section('content')
    <div class="class-profile page-profile">
        <div class="page animsition">
            <div class="page-content container-fluid">
                <div class="row">
                    <ol class="breadcrumb">
                        <li><a href="javascript:void(0)">Home</a></li>
                        <li><a href="javascript:void(0)">Tables</a></li>
                        <li class="active">FooTable</li>
                    </ol>
                    <div class="col-md-3">
                        <!-- Page Widget -->
                        <div class="widget widget-shadow text-center">
                            <div class="widget-header">
                                <div class="widget-header-content">
                                    <a class="avatar avatar-lg" href="javascript:void(0)">
                                        <img src="/assets/images/users/13.jpg" alt="...">
                                    </a>
                                    <h4 class="profile-user">{{$user->name}}</h4>
                                    <img class="navbar-brand-logo" src="/assets/images/logos/{!!(($user->product_id == 1)? 'BRONZE_PACK.png': ($user->product_id == 2)? 'SILVER_PACK.png': 'GOLD_PACK.png' )!!}"
                                         title="Dream House" style="width: 50px; height: 50px;">
                                    <p>Ultimas encuestas</p>
                                    <table class="table">
                                        <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Nombre</th>
                                            <th>Fecha</th>
                                            <th>Monto</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Teagan</td>
                                            <td>Prohaska</td>
                                            <td>@Elijah</td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Andy</td>
                                            <td>Gaylord</td>
                                            <td>@Ramiro</td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>Veronica</td>
                                            <td>Gusikowski</td>
                                            <td>@Maxime</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="widget-footer">
                                <div class="row no-space">
                                    <div class="col-xs-4">
                                        <strong class="profile-stat-count">260</strong>
                                        <span>Follower</span>
                                    </div>
                                    <div class="col-xs-4">
                                        <strong class="profile-stat-count">180</strong>
                                        <span>Following</span>
                                    </div>
                                    <div class="col-xs-4">
                                        <strong class="profile-stat-count">2000</strong>
                                        <span>Tweets</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Page Widget -->
                    </div>
                    <div class="col-md-9">
                        <!-- Panel -->
                        <div class="panel">
                            <div class="panel-body nav-tabs-animate">
                                <div class="tab-content">

                                </div>
                            </div>
                        </div>
                        <!-- End Panel -->
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection