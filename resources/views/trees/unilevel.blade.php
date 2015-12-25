@extends('layouts.main')

@section('head_scripts')

    <link rel="stylesheet" href="/assets/css/Treant.css">
    <link rel="stylesheet" href="/assets/css/perfect-scrollbar.css">
    {{--archivos para el arbol--}}
    <script src="/assets/js/jquery.min.js"></script>
    <script src="/assets/js/Treant.js"></script>
    <script src="/assets/js/jquery.easing.js"></script>
    <script src="/assets/js/raphael.js"></script>
    <script src="/assets/js/Treant.min.js"></script>
    <script src="/assets/js/jquery.mousewheel.js"></script>

    <script src="/assets/js/perfect-scrollbar.js"></script>

@endsection

@section('content')
    {{--<div class="col-md-1"></div>--}}
    <div class="col-md-12">
        <h1>Arbol Uninivel</h1>
    </div>
    {{--<div class="col-md-2"></div>--}}
    {{--<div class="col-md-1"></div>--}}
    <div class="col-md-12 ">
        <div class="col-md-12 tree panel">
            <div id="tree-simple" style="height: 450px; margin: 0 auto;"></div>
            <button class="btn btn-floating btn-info waves-effect waves-float waves-light" type="button"
                    style="top: -10px;" onclick="window.location ='{{ route("members.register") }}'"><i class="icon md-plus" aria-hidden="true"></i></button>
        </div>
    </div>
    {{--<div class="col-md-2"></div>--}}

    <script>
        var simple_chart_config = {
            chart: {
                container: "#tree-simple",
                rootOrientation: "NORTH",
                hideRootNode: false,
                nodeAlign: 'center',
//                scrollbar: "fancy",
                levelSeparation: 20,
                siblingSeparation: 10,
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
                        text: {
                            contact: {
                                val: "Kate Upton",
                                href: "http://kateupton.com/",
                                target: "_blanck"
                            }
                        },
                        image: '{{ URL::to('/assets/images/logos/avatar.png') }}',
                        collapsed: true,
                        children: [
                            {
                                text: {
                                    contact: {
                                        val: "Kate Upton",
                                        href: "http://kateupton.com/",
                                        target: "_blanck"
                                    }
                                },
                                image: '{{ URL::to('/assets/images/logos/avatar.png') }}',
                                collapsed: true
                            },
                            {
                                text: {
                                    contact: {
                                        val: "Kate Upton",
                                        href: "http://kateupton.com/",
                                        target: "_blanck"
                                    }
                                },
                                image: '{{ URL::to('/assets/images/logos/avatar.png') }}',
                                collapsed: true
                            },
                            {
                                text: {
                                    contact: {
                                        val: "Kate Upton",
                                        href: "http://kateupton.com/",
                                        target: "_blanck"
                                    }
                                },
                                image: '{{ URL::to('/assets/images/logos/avatar.png') }}',
                                collapsed: true
                            },
                            {
                                text: {
                                    contact: {
                                        val: "Kate Upton",
                                        href: "http://kateupton.com/",
                                        target: "_blanck"
                                    }
                                },
                                image: '{{ URL::to('/assets/images/logos/avatar.png') }}',
                                collapsed: true
                            }

                        ]
                    },
                    {
                        text: {
                            contact: {
                                val: "Kate Upton",
                                href: "http://kateupton.com/",
                                target: "_blanck"
                            }
                        },
                        image: '{{ URL::to('/assets/images/logos/avatar.png') }}',
                        collapsed: true,
                        children: [
                            {
                                text: {
                                    contact: {
                                        val: "Kate Upton",
                                        href: "http://kateupton.com/",
                                        target: "_blanck"
                                    }
                                },
                                image: '{{ URL::to('/assets/images/logos/avatar.png') }}',
                                collapsed: true
                            }
                        ]
                    }
                ]
            }
        };

        var my_chart = new Treant(simple_chart_config);

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
            text-align: center;
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