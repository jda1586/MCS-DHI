@extends('layouts.main')

@section('head_scripts')
    <link rel="stylesheet" href="/assets/Treat/treant-js-maste/Treant.css">
    <link rel="stylesheet" href="/assets/Treat/treant-js-maste/vendor/perfect-scrollbar/perfect-scrollbar.css">

    <script src="/assets/Treat/treant-js-maste/vendor/raphael.js"></script>
    <script src="/assets/Treat/treant-js-maste/Treant.js"></script>
    <script src="/assets/Treat/treant-js-maste/Treant.min.js"></script>
    <script src="/assets/Treat/treant-js-maste/vendor/jquery.easing.js"></script>
    <script src="/assets/Treat/treant-js-maste/vendor/jquery.min.js"></script>
    <script src="/assets/Treat/treant-js-maste/vendor/jquery.mousewhell.js"></script>

    <script>


        var simple_chart_config = {
            chart: {
                container: "#tree-simple",
                rootOrientation: "NORTH",
                hideRootNode: false,
                nodeAlign: 'center',
                scrollbar: "fancy",
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
                image: "kate3.jpg",
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

@section('content')
    <div id="tree-simple" style="width: 800px; height: 800px;"></div>
@endsection