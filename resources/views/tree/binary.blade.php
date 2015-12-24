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
    <div id="tree-simple" style="width: 800px; height: 800px;"></div>
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
                connectors:{
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
                text: { name: "Parent node" },
                image: "{{public_path('/assets/images/logos/logo.png')}}}",
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
                        image: "kate.jpg",
                        collapsed: true,
                        children: [
                            {
                                text: { name: "este A" },
                                image: "kate2.jpeg",
                                collapsed: true
                            },
                            {
                                text: { name: "Second A " },
                                image: "kate.jpg",
                                collapsed: true
                            }
                        ]
                    },
                    {
                        text: { name: "Child B" },
                        image: "kate.jpg",
                        collapsed: true,
                        children: [
                            {
                                text: { name: "First B" },
                                image: "kate.jpg",
                                collapsed: true
                            }
                        ]
                    }
                ]
            }
        };

        var my_chart = new Treant(simple_chart_config);

    </script>
@endsection