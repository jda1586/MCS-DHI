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
                    <li class="active">Wallets</li>
                </ol>
                <div class="col-md-6">
                    <div class="panel tree">
                        <div>
                            <p class="title">Pending</p>
                        </div>
                        <div id="tree-simple" style="width: 400px; height: 400px; margin: 0 auto;"></div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="panel tree">
                        <p class="title">Unilievel</p>
                        <div id="tree-simple2" style="width: 400px; height: 400px; margin: 0 auto;"></div>
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
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Example C3 Pie -->
                                    <div id="chart1">

                                    </div>
                                </div>
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
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Example C3 Pie -->
                                    <div id="chart2">

                                    </div>
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
                                    <table class="table table-bordered">
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
                                    <table class="table table-bordered">
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

    <script>
        var simple_chart_config = {
            chart: {
                container: "#tree-simple",
                rootOrientation: "NORTH",
                hideRootNode: false,
                nodeAlign: 'center',
//                scrollbar: "fancy",
                levelSeparation: 20,
                siblingSeparation: 100,
                padding: 30,
                subTeeSeparation: 30,
                connectors: {
                    type: 'bCurve',
                    style: {
                        stroke: 'blue'
                    }
                },
                node: {
                    collapsable: true
                }
            },

            nodeStructure: {
                text: {
                    contact: {
                        val: "Kate Upton",
                        href: "http://kateupton.com/",
                        target: "_blanck"
                    }
                },
                image: '{{ URL::to('/assets/images/logos/avatar.png') }}',
                collapsed: false,
                children: [
                    {
                        text: { name: "Hijos de la izquierda " }
                    },
                    {
                        text: { name: "Hijos de la derecha" }
                    }
                ]
            }
        };

        var my_chart = new Treant(simple_chart_config);

        var simple_chart_config2 = {
            chart: {
                container: "#tree-simple2",
                rootOrientation: "NORTH",
                hideRootNode: false,
                nodeAlign: 'left',
//                scrollbar: "fancy",
                levelSeparation: 20,
                siblingSeparation: 100,
                padding: 30,
                subTeeSeparation: 30,
                connectors: {
                    type: 'bCurve',
                    style: {
                        stroke: 'blue'
                    }
                },
                node: {
                    collapsable: true
                }
            },

            nodeStructure: {
                text: {
                    contact: {
                        val: "Kate Upton",
                        href: "http://kateupton.com/",
                        target: "_blanck"
                    }
                },
                image: '{{ URL::to('/assets/images/logos/avatar.png') }}',
                collapsed: false,
                children: [
                    {
                        text: { name: "...." }
                    },
                    {
                        text: { name: "#200" }
                    },
                    {
                        text: { name: "...." }
                    }
                ]
            }
        };

        var my_chart2 = new Treant(simple_chart_config2);

    </script>
    <style type="text/css">
        .tree .node p {
            font-size: 20px;
            line-height: 20px;
            height: 20px;
            font-weight: bold;
            padding: 3px;
            margin: 0;
            font-family: none;
            text-align: justify;
        }

        .tree .node {
            width: 120px;
            height: 120px;
        }

        .tree .node img {
            width: 90px;
            height: 90px;
            border-radius: 50%;
            right: 10px;
        }

        .tree .Treant .collapse-switch {
            width: 90px;
            height: 89px;
            display: block;
            /* border: 1px solid black; */
            position: absolute;
            top: 0px;
            right: 29px;
            cursor: pointer;
            border-radius: 50%;
        }

        .tree .node a {
            color: black;
            text-decoration: none;
            text-align: right;
            text-transform: capitalize;

        }

        .tree a:link {
            font-size: 20px;
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
        /*var chart = c3.generate({
            bindto: '#chart1',
            data: {
                x:'x',
                columns: [
                    ['x','5','10'],
                    //                            ['interacciones por dia '],
                    ['interacciones', 0,1,2,3,4]
                ],
                type: 'bar'
            },
            bar: {
                width: {
                    ratio: 0.5 // this makes bar width 50% of length between ticks
                }
                // or
                //width: 100 // this makes bar width 100px
            },
            axis: {
                y: {
                    tick: {
                        count: 2
                    }
                },
                x: {
                    type: 'timeseries',
                    tick: {
                        format: '%d'
                        //                                format: '%Y-%m-%d'
                    }
                }
            },
            legend: {
                show: false
            }
        });*/
         var chart = c3.generate({
            bindto: '#chart1',
            data: {
                // iris data from R
                columns: [
                    ['data1', 30],
                    ['data2', 120],
                ],
                type : 'pie',
                onclick: function (d, i) { console.log("onclick", d, i); },
                onmouseover: function (d, i) { console.log("onmouseover", d, i); },
                onmouseout: function (d, i) { console.log("onmouseout", d, i); }
            }
         });
        var chart2 = c3.generate({
            bindto: '#chart2',
            data: {
                // iris data from R
                columns: [
                    ['data1', 30],
                    ['data2', 120],
                ],
                type : 'pie',
                onclick: function (d, i) { console.log("onclick", d, i); },
                onmouseover: function (d, i) { console.log("onmouseover", d, i); },
                onmouseout: function (d, i) { console.log("onmouseout", d, i); }
            }
        });
    </script>
@endsection
