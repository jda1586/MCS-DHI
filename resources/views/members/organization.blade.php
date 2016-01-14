@extends('layouts.main')
@section('head_scripts')
    <link rel="stylesheet" href="/vendor/footable/footable.css">

    <link rel="stylesheet" href="/assets/css/Treant.css">
    <link rel="stylesheet" href="/assets/css/perfect-scrollbar.css">
    {!! HTML::style('/c3/c3.css') !!}

    {{--archivos para el arbol--}}
    <script src="/assets/js/jquery.min.js"></script>
    <script src="/assets/js/Treant.js"></script>
    <script src="/assets/js/jquery.easing.js"></script>
    <script src="/assets/js/raphael.js"></script>
    <script src="/assets/js/Treant.min.js"></script>
    <script src="/assets/js/jquery.mousewheel.js"></script>

    <script src="/assets/js/perfect-scrollbar.js"></script>

    <style>
        .title {
            padding: 15px;
        }

    </style>
@endsection

@section('content')
    <div class="content">
        <div class="row">
            <div class="col-md-12" style="margin: 20px 0;">
                <ol class="breadcrumb">
                    <li><a href="javascript:void(0)">Home</a></li>
                    <li><a href="javascript:void(0)">Members</a></li>
                    <li class="active">My Organization</li>
                </ol>
                <div class="col-md-6">
                    <div class="panel" style="height: 300px;">
                        <div>
                            <p class="title">Binary</p>
                            <div class="col-md-12" style="height: 150px;">
                                <img src="/assets/images/logos/avatar.png" alt="..." style="padding: auto; ">
                            </div>
                            <div class="col-md-6" style="text-align: center;">
                                <span>Left</span>
                                <span style="border: solid 1px black; padding: 25px; border-radius: 25%; background-color: lightgrey;">
                                    200</span>
                            </div>
                            <div class="col-md0-6" style="text-align: center;">
                                <span style="border: solid 1px black; padding: 25px; border-radius: 25%; background-color: lightgrey;">
                                    200</span>
                                <span>Right</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="panel" style="height: 300px;">
                        <p class="title">Unilievel</p>
                        <div class="col-md-12" style="height: 150px;">
                            <img src="/assets/images/logos/avatar.png" alt="..." style="padding: auto; ">
                        </div>
                        <div class="col-md-12" style="text-align: center;">
                            <span>Number of members</span>

                            <span style="border: solid 1px black; padding: 25px 50px; border-radius: 25%; background-color: lightgrey;">
                                añsjdlfk</span>
                        </div>
                    </div>
                </div>
                <div id="grafica1" class="col-md-6">
                    <div class="panel">
                        <div class="panel-body">
                            <div class="row row-lg">
                                <div class="col-md-6">
                                    <!-- Example C3 Pie -->
                                    <div class="example-wrap margin-md-0">
                                        <div class="example">
                                            <div id="exampleC3Pie" class="c3"
                                                 style="max-height: 320px; position: relative;">
                                                <div id="chart1"></div>
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
                                <div class="col-md-6">
                                    <!-- Example C3 Pie -->
                                    <div class="example-wrap margin-md-0">
                                        <div class="example">
                                            <div id="exampleC3Pie" class="c3"
                                                 style="max-height: 320px; position: relative;">
                                                <div id="chart2" style="margin: auto;"></div>
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
                                            <th>Id</th>
                                            <th>Fecha</th>
                                            <th>Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>Lunar probe project</td>
                                            <td>Lunar probe project</td>
                                            <td>Lunar probe project</td>
                                        </tr>
                                        <tr>
                                            <td>Lunar probe project</td>
                                            <td>Lunar probe project</td>
                                            <td>Lunar probe project</td>
                                        </tr>

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
                                            <th>Fecha</th>
                                            <th>Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>Lunar probe project</td>
                                            <td>Lunar probe project</td>
                                            <td>Lunar probe project</td>
                                        </tr>
                                        <tr>
                                            <td>Lunar probe project</td>
                                            <td>Lunar probe project</td>
                                            <td>Lunar probe project</td>
                                        </tr>

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
    <script>
        var chart = c3.generate({
            bindto: '#chart1',
            data: {
                // arbol binario
                columns: [
                    ['Gold', 90],
                    ['Silver', 120],
                    ['Bronze', 120]
                ],
                type: 'pie'
            },
            legend: {
                position: 'right'
            }, size: {
                width: 640
            },
            color: {
                pattern: ['#DBA901', '#D8D8D8', '#B40404']
            },
            pie: {
                label: {
                    format: function (value, ratio, id) {
                        return d3.format(' ')(value);
                    }
                }
            },
            tooltip: {
                format: {
                    value: function (value, ratio, id, index) {
                        return value;
                    }
                }
            }
        });
        var chart2 = c3.generate({
            bindto: '#chart2',
            data: {
                // arbol uninivel
                columns: [
                    ['Gold', {{$goldU}}],
                    ['Silver', {{$silverU}}],
                    ['Bronze', {{$bronzeU}}]
                ],
                type: 'pie'
            },
            legend: {
                position: 'right'
            }, size: {
                width: 640
            },
            color: {
                pattern: ['#DBA901', '#D8D8D8', '#B40404']
            },
            pie: {
                label: {
                    format: function (value, ratio, id) {
                        return d3.format(' ')(value);
                    }
                }
            },
            tooltip: {
                format: {
                    value: function (value, ratio, id, index) {
                        return value;
                    }
                }
            },
            color: {
                pattern: ['#DBA901', '#D8D8D8', '#B40404']
            },
            pie: {
                label: {
                    format: function (value, ratio, id) {
                        return d3.format(' ')(value);
                    }
                }
            },
            tooltip: {
                format: {
                    value: function (value, ratio, id, index) {
                        return value;
                    }
                }
            }
        });
    </script>
@endsection
