@extends('layouts.main')
@section('head_scripts')
    <link rel="stylesheet" href="/vendor/footable/footable.css">

    {{--<link rel="stylesheet" href="/assets/css/Treant.css">--}}
    {{--<link rel="stylesheet" href="/assets/css/perfect-scrollbar.css">--}}
    {{--{!! HTML::style('/c3/c3.css') !!}--}}

    {{--archivos para el arbol--}}
    {{--<script src="/assets/js/jquery.min.js"></script>--}}
    {{--<script src="/assets/js/Treant.js"></script>--}}
    {{--<script src="/assets/js/jquery.easing.js"></script>--}}
    {{--<script src="/assets/js/raphael.js"></script>--}}
    {{--<script src="/assets/js/Treant.min.js"></script>--}}
    {{--<script src="/assets/js/jquery.mousewheel.js"></script>--}}

    {{--<script src="/assets/js/perfect-scrollbar.js"></script>--}}

    <style>
        .title {
            padding: 15px;
        }

        .divider-vertical {
            max-height: 100%;
            border-right: 1px solid gray;
            opacity: 1;
            margin: 15px 0;
            padding-bottom: 25px;
        }

        @media screen and (max-width: 991px) {
            .divider-vertical {
                border-right: none;
            }
        }

        .left {
            max-height: 100%;
            opacity: 1;
            margin: 15px 0;
            padding-bottom: 25px;
        }

    </style>
@endsection

@section('content')
    <div class="content">
        <div class="row">
            <div class="col-md-12" style="margin: 20px 0;">
                <div class="page-header">
                    <h1 class="page-title">My Organization</h1>
                    <ol class="breadcrumb">
                        <li><a href="javascript:void(0)">Home</a></li>
                        <li><a href="javascript:void(0)">Members</a></li>
                        <li class="active">My Organization</li>
                    </ol>
                </div>
                <div class="col-md-6">
                    <div class="panel">
                        <div class="clearfix">
                            <p class="title">Binary</p>
                            <div class="col-md-12">
                                <img src="/assets/images/logos/avatar.png" alt="..." style="padding: auto; ">
                            </div>
                            <div class="col-md-6 divider-vertical">
                                <div>
                                    <p class="title">Child in left side</p>
                                    <h3 class="" style="text-align: center;"> # 200</h3>
                                </div>
                            </div>
                            <div class="col-md-6 left" style="">
                                <div>
                                    <p class="title" style="text-align: right">Child in right side</p>
                                    <h3 class="" style="text-align: center;"> # 200</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="panel">
                        <div class="clearfix">
                            <p class="title">Unilievel</p>
                            <div class="col-md-12">
                                <img src="/assets/images/logos/avatar.png" alt="..." style="padding: auto; ">
                            </div>
                            <div class="col-md-12 left">
                                <div>
                                    <p class="title">Child in the organization</p>
                                    <h3 class="" style="text-align: center;"> # 200</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="grafica1" class="col-md-6">
                    <div class="panel">
                        <div class="panel-body">
                            <div class="row row-lg">
                                <div class="col-md-12" style="text-align: right;">
                                    <span>Member in Binary tree</span>
                                </div>
                                <div class="col-md-6">
                                    <!-- Example C3 Pie -->
                                    <div class="example-wrap ">
                                        <div class="example">
                                            <div id="exampleC3Pie"
                                                 style="max-height: 320px;">
                                                <div id="binary" style="height: 250px;"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Example C3 Pie -->

                            </div>
                        </div>
                    </div>
                </div>
                <div id="grafica2" class="col-md-6">
                    <div class="panel">
                        <div class="panel-body">
                            <div class="row row-lg">
                                <div class="col-md-12" style="text-align: right;">
                                    <span>Member in Unilevel tree</span>
                                </div>
                                <div class="col-md-6">
                                    <!-- Example C3 Pie -->
                                    <div class="example-wrap margin-md-0">
                                        <div class="example">
                                            <div id="exampleC3Pie" class="c3"
                                                 style="max-height: 320px; position: relative;">
                                                <div id="unilevel" style="height: 250px;"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Example C3 Pie -->

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="panel">
                        <p class="title">Pending</p>
                        <div class="panel-body">
                            <div class="example-wrap">
                                <div class="example table-responsive">
                                    <table class="table">
                                        <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($pending as $p)
                                            <tr>
                                                <td>{{ $p->name .' ' . $p->lastname }}</td>
                                                <td class="text-nowrap" width="20px;">
                                                    <button type="button"
                                                            class="btn btn-sm btn-icon btn-flat btn-default"
                                                            data-toggle="tooltip" data-original-title="Delete">
                                                        <i class="icon md-close" aria-hidden="true"></i>
                                                    </button>
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="panel">
                        <p class="title">Last</p>
                        <div class="panel-body">
                            <div class="example-wrap">
                                <div class="example table-responsive">
                                    <table class="table">
                                        <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Name</th>
                                            <th>User</th>
                                            <th>Date</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($last as $l)
                                            <tr>
                                                <td>{{$l->id}}</td>
                                                <td>{{$l->user->name.' '.$l->user->lastname}}</td>
                                                <td>{{$l->user->user}}</td>
                                                <td>{{$l->user->created_at}}</td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <style type="text/css">

        img {
            width: 90px;
            height: 90px;
            border-radius: 50%;
            right: 10px;
            display: block;
            margin: 0 auto;
        }

    </style>

@endsection

@section('script')

    {{--<script src="https://code.highcharts.com/highcharts.js"></script>
    <script src="https://code.highcharts.com/modules/exporting.js"></script>--}}
    <script src="/vendor/switchery/switchery.min.js"></script>
    <script src="/vendor/intro-js/intro.js"></script>
    {!! HTML::script('vendor/footable/footable.all.min.js') !!}{{--tablas--}}
    {!! HTML::script('assets/examples/js/tables/footable.js') !!}{{--tablas--}}
    {!! HTML::script('assets/examples/js/tables/footable.js') !!}{{--tablas--}}
    {!! HTML::script('c3/d3.min.js') !!}    {{--grafica--}}
    {!! HTML::script('c3/c3.js') !!}    {{--grafica--}}

    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
    {{--<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>--}}
    <script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>

    <script>
        Morris.Donut({
            element: 'unilevel',
            data: [
                {label: "Gold", value: 12},
                {label: "Silver", value: 30},
                {label: "Bronze", value: 20}
            ],
            colors: ['#DBA901', '#D8D8D8', '#B40404']
        });

        Morris.Donut({
            element: 'binary',
            data: [
                {label: "Gold", value: 12},
                {label: "Silver", value: 30},
                {label: "Bronze", value: 20}
            ],
            colors: ['#DBA901', '#D8D8D8', '#B40404']
        });

    </script>
@endsection
