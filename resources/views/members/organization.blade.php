@extends('layouts.main')
@section('head_scripts')
    <link rel="stylesheet" href="/vendor/footable/footable.css">

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
                <div class="col-md-6">
                    <div class="panel">
                        <div class="panel-body">
                            <div class="row row-lg">
                                <div class="col-md-6">
                                    <!-- Example C3 Pie -->
                                    <div class="example-wrap margin-md-0">
                                        <div class="example">
                                            <div id="exampleC3Pie" class="c3"
                                                 style="max-height: 320px; position: relative;">
                                                <svg width="565" height="320" style="overflow: hidden;">
                                                    <defs>
                                                        <clipPath id="c3-1451852308279-clip">
                                                            <rect width="565" height="316"></rect>
                                                        </clipPath>
                                                        <clipPath id="c3-1451852308279-clip-xaxis">
                                                            <rect x="-31" y="-20" width="627" height="20"></rect>
                                                        </clipPath>
                                                        <clipPath id="c3-1451852308279-clip-yaxis">
                                                            <rect x="-29" y="-4" width="20" height="340"></rect>
                                                        </clipPath>
                                                        <clipPath id="c3-1451852308279-clip-grid">
                                                            <rect width="565" height="316"></rect>
                                                        </clipPath>
                                                        <clipPath id="c3-1451852308279-clip-subchart">
                                                            <rect width="565"></rect>
                                                        </clipPath>
                                                    </defs>
                                                    <g transform="translate(0.5,4.5)">
                                                        <text class="c3-text c3-empty" text-anchor="middle"
                                                              dominant-baseline="middle" x="282.5" y="158"
                                                              style="opacity: 0;"></text>
                                                        <rect class="c3-zoom-rect" width="565" height="316"
                                                              style="opacity: 0;"></rect>
                                                        <g clip-path="url(file:///C:/Users/darkd_000/Documents/themeforest-11989202-remark-responsive-bootstrap-admin-template/material/base/html/charts/c3.html#c3-1451852308279-clip)"
                                                           class="c3-regions" style="visibility: hidden;"></g>
                                                        <g clip-path="url(file:///C:/Users/darkd_000/Documents/themeforest-11989202-remark-responsive-bootstrap-admin-template/material/base/html/charts/c3.html#c3-1451852308279-clip-grid)"
                                                           class="c3-grid" style="visibility: hidden;">
                                                            <g class="c3-xgrid-focus">
                                                                <line class="c3-xgrid-focus" x1="-10" x2="-10" y1="0"
                                                                      y2="316" style="visibility: hidden;"></line>
                                                            </g>
                                                        </g>
                                                        <g clip-path="url(file:///C:/Users/darkd_000/Documents/themeforest-11989202-remark-responsive-bootstrap-admin-template/material/base/html/charts/c3.html#c3-1451852308279-clip)"
                                                           class="c3-chart">
                                                            <g class="c3-event-rects c3-event-rects-single"
                                                               style="fill-opacity: 0;">
                                                                <rect class=" c3-event-rect c3-event-rect-0" x="0.5"
                                                                      y="0" width="565" height="316"></rect>
                                                            </g>
                                                            <g class="c3-chart-bars">
                                                                <g class="c3-chart-bar c3-target c3-target-data1"
                                                                   style="opacity: 1; pointer-events: none;">
                                                                    <g class=" c3-shapes c3-shapes-data1 c3-bars c3-bars-data1"
                                                                       style="cursor: pointer;"></g>
                                                                </g>
                                                                <g class="c3-chart-bar c3-target c3-target-data2"
                                                                   style="opacity: 1; pointer-events: none;">
                                                                    <g class=" c3-shapes c3-shapes-data2 c3-bars c3-bars-data2"
                                                                       style="cursor: pointer;"></g>
                                                                </g>
                                                            </g>
                                                            <g class="c3-chart-lines">
                                                                <g class="c3-chart-line c3-target c3-target-data1"
                                                                   style="opacity: 1; pointer-events: none;">
                                                                    <g class=" c3-shapes c3-shapes-data1 c3-lines c3-lines-data1"></g>
                                                                    <g class=" c3-shapes c3-shapes-data1 c3-areas c3-areas-data1"></g>
                                                                    <g class=" c3-selected-circles c3-selected-circles-data1"></g>
                                                                    <g class=" c3-shapes c3-shapes-data1 c3-circles c3-circles-data1"
                                                                       style="cursor: pointer;"></g>
                                                                </g>
                                                                <g class="c3-chart-line c3-target c3-target-data2"
                                                                   style="opacity: 1; pointer-events: none;">
                                                                    <g class=" c3-shapes c3-shapes-data2 c3-lines c3-lines-data2"></g>
                                                                    <g class=" c3-shapes c3-shapes-data2 c3-areas c3-areas-data2"></g>
                                                                    <g class=" c3-selected-circles c3-selected-circles-data2"></g>
                                                                    <g class=" c3-shapes c3-shapes-data2 c3-circles c3-circles-data2"
                                                                       style="cursor: pointer;"></g>
                                                                </g>
                                                            </g>
                                                            <g class="c3-chart-arcs" transform="translate(249.5,158)">
                                                                <text class="c3-chart-arcs-title"
                                                                      style="text-anchor: middle; opacity: 0;"></text>
                                                                <g class="c3-chart-arc c3-target c3-target-data1">
                                                                    <g class=" c3-shapes c3-shapes-data1 c3-arcs c3-arcs-data1">
                                                                        <path class=" c3-shape c3-shape c3-arc c3-arc-data1"
                                                                              transform=""
                                                                              d="M9.190974227600886e-15,-150.1A150.1,150.1 0 1,1 -146.33667961849173,33.40039218684281L0,0Z"
                                                                              style="fill: rgb(63, 81, 181); cursor: pointer; opacity: 1;"></path>
                                                                    </g>
                                                                    <text dy=".35em" class=""
                                                                          transform="translate(93.88232441476102,74.86865540719673)"
                                                                          style="opacity: 1; text-anchor: middle; pointer-events: none;"></text>
                                                                </g>
                                                                <g class="c3-chart-arc c3-target c3-target-data2">
                                                                    <g class=" c3-shapes c3-shapes-data2 c3-arcs c3-arcs-data2">
                                                                        <path class=" c3-shape c3-shape c3-arc c3-arc-data2"
                                                                              transform=""
                                                                              d="M-146.33667961849173,33.40039218684281A150.1,150.1 0 0,1 -2.7572922682802656e-14,-150.1L0,0Z"
                                                                              style="fill: rgb(224, 224, 224); cursor: pointer; opacity: 1;"></path>
                                                                    </g>
                                                                    <text dy=".35em" class=""
                                                                          transform="translate(-93.88232441476103,-74.8686554071967)"
                                                                          style="opacity: 1; text-anchor: middle; pointer-events: none;"></text>
                                                                </g>
                                                            </g>
                                                            <g class="c3-chart-texts">
                                                                <g class="c3-chart-text c3-target c3-target-data1"
                                                                   style="opacity: 1; pointer-events: none;">
                                                                    <g class=" c3-texts c3-texts-data1"></g>
                                                                </g>
                                                                <g class="c3-chart-text c3-target c3-target-data2"
                                                                   style="opacity: 1; pointer-events: none;">
                                                                    <g class=" c3-texts c3-texts-data2"></g>
                                                                </g>
                                                            </g>
                                                        </g>
                                                        <g clip-path="url(file:///C:/Users/darkd_000/Documents/themeforest-11989202-remark-responsive-bootstrap-admin-template/material/base/html/charts/c3.html#c3-1451852308279-clip-grid)"
                                                           class="c3-grid c3-grid-lines">
                                                            <g class="c3-xgrid-lines"></g>
                                                            <g class="c3-ygrid-lines"></g>
                                                        </g>
                                                        <g class="c3-axis c3-axis-x"
                                                           clip-path="url(file:///C:/Users/darkd_000/Documents/themeforest-11989202-remark-responsive-bootstrap-admin-template/material/base/html/charts/c3.html#c3-1451852308279-clip-xaxis)"
                                                           transform="translate(0,316)"
                                                           style="visibility: visible; opacity: 0;">
                                                            <text class="c3-axis-x-label" transform="" x="565"
                                                                  dx="-0.5em" dy="-0.5em"
                                                                  style="text-anchor: end;"></text>
                                                            <g class="tick" transform="translate(283, 0)"
                                                               style="opacity: 1;">
                                                                <line y2="6" x1="0" x2="0"></line>
                                                                <text y="9" x="0" transform=""
                                                                      style="text-anchor: middle; display: block;">
                                                                    <tspan x="0" dy=".71em" dx="0">0</tspan>
                                                                </text>
                                                            </g>
                                                            <path class="domain" d="M0,6V0H565V6"></path>
                                                        </g>
                                                        <g class="c3-axis c3-axis-y"
                                                           clip-path="url(file:///C:/Users/darkd_000/Documents/themeforest-11989202-remark-responsive-bootstrap-admin-template/material/base/html/charts/c3.html#c3-1451852308279-clip-yaxis)"
                                                           transform="translate(0,0)"
                                                           style="visibility: visible; opacity: 0;">
                                                            <text class="c3-axis-y-label" transform="rotate(-90)" x="0"
                                                                  dx="-0.5em" dy="1.2em"
                                                                  style="text-anchor: end;"></text>
                                                            <g class="tick" transform="translate(0,290)"
                                                               style="opacity: 1;">
                                                                <line x2="-6"></line>
                                                                <text x="-9" y="0" style="text-anchor: end;">
                                                                    <tspan x="-9" dy="3">40</tspan>
                                                                </text>
                                                            </g>
                                                            <g class="tick" transform="translate(0,246)"
                                                               style="opacity: 1;">
                                                                <line x2="-6"></line>
                                                                <text x="-9" y="0" style="text-anchor: end;">
                                                                    <tspan x="-9" dy="3">50</tspan>
                                                                </text>
                                                            </g>
                                                            <g class="tick" transform="translate(0,203)"
                                                               style="opacity: 1;">
                                                                <line x2="-6"></line>
                                                                <text x="-9" y="0" style="text-anchor: end;">
                                                                    <tspan x="-9" dy="3">60</tspan>
                                                                </text>
                                                            </g>
                                                            <g class="tick" transform="translate(0,159)"
                                                               style="opacity: 1;">
                                                                <line x2="-6"></line>
                                                                <text x="-9" y="0" style="text-anchor: end;">
                                                                    <tspan x="-9" dy="3">70</tspan>
                                                                </text>
                                                            </g>
                                                            <g class="tick" transform="translate(0,115)"
                                                               style="opacity: 1;">
                                                                <line x2="-6"></line>
                                                                <text x="-9" y="0" style="text-anchor: end;">
                                                                    <tspan x="-9" dy="3">80</tspan>
                                                                </text>
                                                            </g>
                                                            <g class="tick" transform="translate(0,71)"
                                                               style="opacity: 1;">
                                                                <line x2="-6"></line>
                                                                <text x="-9" y="0" style="text-anchor: end;">
                                                                    <tspan x="-9" dy="3">90</tspan>
                                                                </text>
                                                            </g>
                                                            <g class="tick" transform="translate(0,28)"
                                                               style="opacity: 1;">
                                                                <line x2="-6"></line>
                                                                <text x="-9" y="0" style="text-anchor: end;">
                                                                    <tspan x="-9" dy="3">100</tspan>
                                                                </text>
                                                            </g>
                                                            <path class="domain" d="M-6,1H0V316H-6"></path>
                                                        </g>
                                                        <g class="c3-axis c3-axis-y2" transform="translate(565,0)"
                                                           style="visibility: hidden; opacity: 0;">
                                                            <text class="c3-axis-y2-label" transform="rotate(-90)" x="0"
                                                                  dx="-0.5em" dy="-0.5em"
                                                                  style="text-anchor: end;"></text>
                                                            <g class="tick" transform="translate(0,316)"
                                                               style="opacity: 1;">
                                                                <line x2="6" y2="0"></line>
                                                                <text x="9" y="0" style="text-anchor: start;">
                                                                    <tspan x="9" dy="3">0</tspan>
                                                                </text>
                                                            </g>
                                                            <g class="tick" transform="translate(0,285)"
                                                               style="opacity: 1;">
                                                                <line x2="6" y2="0"></line>
                                                                <text x="9" y="0" style="text-anchor: start;">
                                                                    <tspan x="9" dy="3">0.1</tspan>
                                                                </text>
                                                            </g>
                                                            <g class="tick" transform="translate(0,253)"
                                                               style="opacity: 1;">
                                                                <line x2="6" y2="0"></line>
                                                                <text x="9" y="0" style="text-anchor: start;">
                                                                    <tspan x="9" dy="3">0.2</tspan>
                                                                </text>
                                                            </g>
                                                            <g class="tick" transform="translate(0,222)"
                                                               style="opacity: 1;">
                                                                <line x2="6" y2="0"></line>
                                                                <text x="9" y="0" style="text-anchor: start;">
                                                                    <tspan x="9" dy="3">0.3</tspan>
                                                                </text>
                                                            </g>
                                                            <g class="tick" transform="translate(0,190)"
                                                               style="opacity: 1;">
                                                                <line x2="6" y2="0"></line>
                                                                <text x="9" y="0" style="text-anchor: start;">
                                                                    <tspan x="9" dy="3">0.4</tspan>
                                                                </text>
                                                            </g>
                                                            <g class="tick" transform="translate(0,159)"
                                                               style="opacity: 1;">
                                                                <line x2="6" y2="0"></line>
                                                                <text x="9" y="0" style="text-anchor: start;">
                                                                    <tspan x="9" dy="3">0.5</tspan>
                                                                </text>
                                                            </g>
                                                            <g class="tick" transform="translate(0,127)"
                                                               style="opacity: 1;">
                                                                <line x2="6" y2="0"></line>
                                                                <text x="9" y="0" style="text-anchor: start;">
                                                                    <tspan x="9" dy="3">0.6</tspan>
                                                                </text>
                                                            </g>
                                                            <g class="tick" transform="translate(0,96)"
                                                               style="opacity: 1;">
                                                                <line x2="6" y2="0"></line>
                                                                <text x="9" y="0" style="text-anchor: start;">
                                                                    <tspan x="9" dy="3">0.7</tspan>
                                                                </text>
                                                            </g>
                                                            <g class="tick" transform="translate(0,64)"
                                                               style="opacity: 1;">
                                                                <line x2="6" y2="0"></line>
                                                                <text x="9" y="0" style="text-anchor: start;">
                                                                    <tspan x="9" dy="3">0.8</tspan>
                                                                </text>
                                                            </g>
                                                            <g class="tick" transform="translate(0,33)"
                                                               style="opacity: 1;">
                                                                <line x2="6" y2="0"></line>
                                                                <text x="9" y="0" style="text-anchor: start;">
                                                                    <tspan x="9" dy="3">0.9</tspan>
                                                                </text>
                                                            </g>
                                                            <g class="tick" transform="translate(0,1)"
                                                               style="opacity: 1;">
                                                                <line x2="6" y2="0"></line>
                                                                <text x="9" y="0" style="text-anchor: start;">
                                                                    <tspan x="9" dy="3">1</tspan>
                                                                </text>
                                                            </g>
                                                            <path class="domain" d="M6,1H0V316H6"></path>
                                                        </g>
                                                    </g>
                                                    <g transform="translate(0.5,320.5)" style="visibility: hidden;">
                                                        <g clip-path="url(file:///C:/Users/darkd_000/Documents/themeforest-11989202-remark-responsive-bootstrap-admin-template/material/base/html/charts/c3.html#c3-1451852308279-clip-subchart)"
                                                           class="c3-chart">
                                                            <g class="c3-chart-bars"></g>
                                                            <g class="c3-chart-lines"></g>
                                                        </g>
                                                        <g clip-path="url(file:///C:/Users/darkd_000/Documents/themeforest-11989202-remark-responsive-bootstrap-admin-template/material/base/html/charts/c3.html#c3-1451852308279-clip)"
                                                           class="c3-brush"
                                                           style="pointer-events: all; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);">
                                                            <rect class="background" x="0" width="589.5"
                                                                  style="visibility: hidden; cursor: crosshair;"></rect>
                                                            <rect class="extent" x="0" width="0"
                                                                  style="cursor: move;"></rect>
                                                            <g class="resize e" transform="translate(0,0)"
                                                               style="cursor: ew-resize; display: none;">
                                                                <rect x="-3" width="6" height="6"
                                                                      style="visibility: hidden;"></rect>
                                                            </g>
                                                            <g class="resize w" transform="translate(0,0)"
                                                               style="cursor: ew-resize; display: none;">
                                                                <rect x="-3" width="6" height="6"
                                                                      style="visibility: hidden;"></rect>
                                                            </g>
                                                        </g>
                                                        <g class="c3-axis-x" transform="translate(0,0)"
                                                           clip-path="url(file:///C:/Users/darkd_000/Documents/themeforest-11989202-remark-responsive-bootstrap-admin-template/material/base/html/charts/c3.html#c3-1451852308279-clip-xaxis)"
                                                           style="visibility: hidden; opacity: 0;">
                                                            <g class="tick" transform="translate(283, 0)"
                                                               style="opacity: 1;">
                                                                <line y2="6" x1="0" x2="0"></line>
                                                                <text y="9" x="0" transform=""
                                                                      style="text-anchor: middle; display: block;">
                                                                    <tspan x="0" dy=".71em" dx="0">0</tspan>
                                                                </text>
                                                            </g>
                                                            <path class="domain" d="M0,6V0H565V6"></path>
                                                        </g>
                                                    </g>
                                                    <g transform="translate(423.3,0)">
                                                        <g class=" c3-legend-item c3-legend-item-data1"
                                                           style="visibility: visible; cursor: pointer;">
                                                            <text x="14" y="151" style="pointer-events: none;">data1
                                                            </text>
                                                            <rect class="c3-legend-item-event" x="0" y="137" width="56"
                                                                  height="18" style="fill-opacity: 0;"></rect>
                                                            <line class="c3-legend-item-tile" x1="-2" y1="146" x2="8"
                                                                  y2="146" stroke-width="10"
                                                                  style="stroke: rgb(63, 81, 181); pointer-events: none;"></line>
                                                        </g>
                                                        <g class=" c3-legend-item c3-legend-item-data2"
                                                           style="visibility: visible; cursor: pointer;">
                                                            <text x="14" y="169" style="pointer-events: none;">data2
                                                            </text>
                                                            <rect class="c3-legend-item-event" x="0" y="155" width="56"
                                                                  height="18" style="fill-opacity: 0;"></rect>
                                                            <line class="c3-legend-item-tile" x1="-2" y1="164" x2="8"
                                                                  y2="164" stroke-width="10"
                                                                  style="stroke: rgb(224, 224, 224); pointer-events: none;"></line>
                                                        </g>
                                                    </g>
                                                    <text class="c3-title" x="282.5" y="0"></text>
                                                </svg>
                                                <div class="c3-tooltip-container"
                                                     style="position: absolute; pointer-events: none; display: none;"></div>
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
                        <div class="panel-body">
                            <div class="row row-lg">
                                <div class="col-md-6">
                                    <!-- Example C3 Pie -->
                                    <div class="example-wrap margin-md-0">
                                        <div class="example">
                                            <div id="exampleC3Pie" class="c3"
                                                 style="max-height: 320px; position: relative;">
                                                <svg width="565" height="320" style="overflow: hidden;">
                                                    <defs>
                                                        <clipPath id="c3-1451852308279-clip">
                                                            <rect width="565" height="316"></rect>
                                                        </clipPath>
                                                        <clipPath id="c3-1451852308279-clip-xaxis">
                                                            <rect x="-31" y="-20" width="627" height="20"></rect>
                                                        </clipPath>
                                                        <clipPath id="c3-1451852308279-clip-yaxis">
                                                            <rect x="-29" y="-4" width="20" height="340"></rect>
                                                        </clipPath>
                                                        <clipPath id="c3-1451852308279-clip-grid">
                                                            <rect width="565" height="316"></rect>
                                                        </clipPath>
                                                        <clipPath id="c3-1451852308279-clip-subchart">
                                                            <rect width="565"></rect>
                                                        </clipPath>
                                                    </defs>
                                                    <g transform="translate(0.5,4.5)">
                                                        <text class="c3-text c3-empty" text-anchor="middle"
                                                              dominant-baseline="middle" x="282.5" y="158"
                                                              style="opacity: 0;"></text>
                                                        <rect class="c3-zoom-rect" width="565" height="316"
                                                              style="opacity: 0;"></rect>
                                                        <g clip-path="url(file:///C:/Users/darkd_000/Documents/themeforest-11989202-remark-responsive-bootstrap-admin-template/material/base/html/charts/c3.html#c3-1451852308279-clip)"
                                                           class="c3-regions" style="visibility: hidden;"></g>
                                                        <g clip-path="url(file:///C:/Users/darkd_000/Documents/themeforest-11989202-remark-responsive-bootstrap-admin-template/material/base/html/charts/c3.html#c3-1451852308279-clip-grid)"
                                                           class="c3-grid" style="visibility: hidden;">
                                                            <g class="c3-xgrid-focus">
                                                                <line class="c3-xgrid-focus" x1="-10" x2="-10" y1="0"
                                                                      y2="316" style="visibility: hidden;"></line>
                                                            </g>
                                                        </g>
                                                        <g clip-path="url(file:///C:/Users/darkd_000/Documents/themeforest-11989202-remark-responsive-bootstrap-admin-template/material/base/html/charts/c3.html#c3-1451852308279-clip)"
                                                           class="c3-chart">
                                                            <g class="c3-event-rects c3-event-rects-single"
                                                               style="fill-opacity: 0;">
                                                                <rect class=" c3-event-rect c3-event-rect-0" x="0.5"
                                                                      y="0" width="565" height="316"></rect>
                                                            </g>
                                                            <g class="c3-chart-bars">
                                                                <g class="c3-chart-bar c3-target c3-target-data1"
                                                                   style="opacity: 1; pointer-events: none;">
                                                                    <g class=" c3-shapes c3-shapes-data1 c3-bars c3-bars-data1"
                                                                       style="cursor: pointer;"></g>
                                                                </g>
                                                                <g class="c3-chart-bar c3-target c3-target-data2"
                                                                   style="opacity: 1; pointer-events: none;">
                                                                    <g class=" c3-shapes c3-shapes-data2 c3-bars c3-bars-data2"
                                                                       style="cursor: pointer;"></g>
                                                                </g>
                                                            </g>
                                                            <g class="c3-chart-lines">
                                                                <g class="c3-chart-line c3-target c3-target-data1"
                                                                   style="opacity: 1; pointer-events: none;">
                                                                    <g class=" c3-shapes c3-shapes-data1 c3-lines c3-lines-data1"></g>
                                                                    <g class=" c3-shapes c3-shapes-data1 c3-areas c3-areas-data1"></g>
                                                                    <g class=" c3-selected-circles c3-selected-circles-data1"></g>
                                                                    <g class=" c3-shapes c3-shapes-data1 c3-circles c3-circles-data1"
                                                                       style="cursor: pointer;"></g>
                                                                </g>
                                                                <g class="c3-chart-line c3-target c3-target-data2"
                                                                   style="opacity: 1; pointer-events: none;">
                                                                    <g class=" c3-shapes c3-shapes-data2 c3-lines c3-lines-data2"></g>
                                                                    <g class=" c3-shapes c3-shapes-data2 c3-areas c3-areas-data2"></g>
                                                                    <g class=" c3-selected-circles c3-selected-circles-data2"></g>
                                                                    <g class=" c3-shapes c3-shapes-data2 c3-circles c3-circles-data2"
                                                                       style="cursor: pointer;"></g>
                                                                </g>
                                                            </g>
                                                            <g class="c3-chart-arcs" transform="translate(249.5,158)">
                                                                <text class="c3-chart-arcs-title"
                                                                      style="text-anchor: middle; opacity: 0;"></text>
                                                                <g class="c3-chart-arc c3-target c3-target-data1">
                                                                    <g class=" c3-shapes c3-shapes-data1 c3-arcs c3-arcs-data1">
                                                                        <path class=" c3-shape c3-shape c3-arc c3-arc-data1"
                                                                              transform=""
                                                                              d="M9.190974227600886e-15,-150.1A150.1,150.1 0 1,1 -146.33667961849173,33.40039218684281L0,0Z"
                                                                              style="fill: rgb(63, 81, 181); cursor: pointer; opacity: 1;"></path>
                                                                    </g>
                                                                    <text dy=".35em" class=""
                                                                          transform="translate(93.88232441476102,74.86865540719673)"
                                                                          style="opacity: 1; text-anchor: middle; pointer-events: none;"></text>
                                                                </g>
                                                                <g class="c3-chart-arc c3-target c3-target-data2">
                                                                    <g class=" c3-shapes c3-shapes-data2 c3-arcs c3-arcs-data2">
                                                                        <path class=" c3-shape c3-shape c3-arc c3-arc-data2"
                                                                              transform=""
                                                                              d="M-146.33667961849173,33.40039218684281A150.1,150.1 0 0,1 -2.7572922682802656e-14,-150.1L0,0Z"
                                                                              style="fill: rgb(224, 224, 224); cursor: pointer; opacity: 1;"></path>
                                                                    </g>
                                                                    <text dy=".35em" class=""
                                                                          transform="translate(-93.88232441476103,-74.8686554071967)"
                                                                          style="opacity: 1; text-anchor: middle; pointer-events: none;"></text>
                                                                </g>
                                                            </g>
                                                            <g class="c3-chart-texts">
                                                                <g class="c3-chart-text c3-target c3-target-data1"
                                                                   style="opacity: 1; pointer-events: none;">
                                                                    <g class=" c3-texts c3-texts-data1"></g>
                                                                </g>
                                                                <g class="c3-chart-text c3-target c3-target-data2"
                                                                   style="opacity: 1; pointer-events: none;">
                                                                    <g class=" c3-texts c3-texts-data2"></g>
                                                                </g>
                                                            </g>
                                                        </g>
                                                        <g clip-path="url(file:///C:/Users/darkd_000/Documents/themeforest-11989202-remark-responsive-bootstrap-admin-template/material/base/html/charts/c3.html#c3-1451852308279-clip-grid)"
                                                           class="c3-grid c3-grid-lines">
                                                            <g class="c3-xgrid-lines"></g>
                                                            <g class="c3-ygrid-lines"></g>
                                                        </g>
                                                        <g class="c3-axis c3-axis-x"
                                                           clip-path="url(file:///C:/Users/darkd_000/Documents/themeforest-11989202-remark-responsive-bootstrap-admin-template/material/base/html/charts/c3.html#c3-1451852308279-clip-xaxis)"
                                                           transform="translate(0,316)"
                                                           style="visibility: visible; opacity: 0;">
                                                            <text class="c3-axis-x-label" transform="" x="565"
                                                                  dx="-0.5em" dy="-0.5em"
                                                                  style="text-anchor: end;"></text>
                                                            <g class="tick" transform="translate(283, 0)"
                                                               style="opacity: 1;">
                                                                <line y2="6" x1="0" x2="0"></line>
                                                                <text y="9" x="0" transform=""
                                                                      style="text-anchor: middle; display: block;">
                                                                    <tspan x="0" dy=".71em" dx="0">0</tspan>
                                                                </text>
                                                            </g>
                                                            <path class="domain" d="M0,6V0H565V6"></path>
                                                        </g>
                                                        <g class="c3-axis c3-axis-y"
                                                           clip-path="url(file:///C:/Users/darkd_000/Documents/themeforest-11989202-remark-responsive-bootstrap-admin-template/material/base/html/charts/c3.html#c3-1451852308279-clip-yaxis)"
                                                           transform="translate(0,0)"
                                                           style="visibility: visible; opacity: 0;">
                                                            <text class="c3-axis-y-label" transform="rotate(-90)" x="0"
                                                                  dx="-0.5em" dy="1.2em"
                                                                  style="text-anchor: end;"></text>
                                                            <g class="tick" transform="translate(0,290)"
                                                               style="opacity: 1;">
                                                                <line x2="-6"></line>
                                                                <text x="-9" y="0" style="text-anchor: end;">
                                                                    <tspan x="-9" dy="3">40</tspan>
                                                                </text>
                                                            </g>
                                                            <g class="tick" transform="translate(0,246)"
                                                               style="opacity: 1;">
                                                                <line x2="-6"></line>
                                                                <text x="-9" y="0" style="text-anchor: end;">
                                                                    <tspan x="-9" dy="3">50</tspan>
                                                                </text>
                                                            </g>
                                                            <g class="tick" transform="translate(0,203)"
                                                               style="opacity: 1;">
                                                                <line x2="-6"></line>
                                                                <text x="-9" y="0" style="text-anchor: end;">
                                                                    <tspan x="-9" dy="3">60</tspan>
                                                                </text>
                                                            </g>
                                                            <g class="tick" transform="translate(0,159)"
                                                               style="opacity: 1;">
                                                                <line x2="-6"></line>
                                                                <text x="-9" y="0" style="text-anchor: end;">
                                                                    <tspan x="-9" dy="3">70</tspan>
                                                                </text>
                                                            </g>
                                                            <g class="tick" transform="translate(0,115)"
                                                               style="opacity: 1;">
                                                                <line x2="-6"></line>
                                                                <text x="-9" y="0" style="text-anchor: end;">
                                                                    <tspan x="-9" dy="3">80</tspan>
                                                                </text>
                                                            </g>
                                                            <g class="tick" transform="translate(0,71)"
                                                               style="opacity: 1;">
                                                                <line x2="-6"></line>
                                                                <text x="-9" y="0" style="text-anchor: end;">
                                                                    <tspan x="-9" dy="3">90</tspan>
                                                                </text>
                                                            </g>
                                                            <g class="tick" transform="translate(0,28)"
                                                               style="opacity: 1;">
                                                                <line x2="-6"></line>
                                                                <text x="-9" y="0" style="text-anchor: end;">
                                                                    <tspan x="-9" dy="3">100</tspan>
                                                                </text>
                                                            </g>
                                                            <path class="domain" d="M-6,1H0V316H-6"></path>
                                                        </g>
                                                        <g class="c3-axis c3-axis-y2" transform="translate(565,0)"
                                                           style="visibility: hidden; opacity: 0;">
                                                            <text class="c3-axis-y2-label" transform="rotate(-90)" x="0"
                                                                  dx="-0.5em" dy="-0.5em"
                                                                  style="text-anchor: end;"></text>
                                                            <g class="tick" transform="translate(0,316)"
                                                               style="opacity: 1;">
                                                                <line x2="6" y2="0"></line>
                                                                <text x="9" y="0" style="text-anchor: start;">
                                                                    <tspan x="9" dy="3">0</tspan>
                                                                </text>
                                                            </g>
                                                            <g class="tick" transform="translate(0,285)"
                                                               style="opacity: 1;">
                                                                <line x2="6" y2="0"></line>
                                                                <text x="9" y="0" style="text-anchor: start;">
                                                                    <tspan x="9" dy="3">0.1</tspan>
                                                                </text>
                                                            </g>
                                                            <g class="tick" transform="translate(0,253)"
                                                               style="opacity: 1;">
                                                                <line x2="6" y2="0"></line>
                                                                <text x="9" y="0" style="text-anchor: start;">
                                                                    <tspan x="9" dy="3">0.2</tspan>
                                                                </text>
                                                            </g>
                                                            <g class="tick" transform="translate(0,222)"
                                                               style="opacity: 1;">
                                                                <line x2="6" y2="0"></line>
                                                                <text x="9" y="0" style="text-anchor: start;">
                                                                    <tspan x="9" dy="3">0.3</tspan>
                                                                </text>
                                                            </g>
                                                            <g class="tick" transform="translate(0,190)"
                                                               style="opacity: 1;">
                                                                <line x2="6" y2="0"></line>
                                                                <text x="9" y="0" style="text-anchor: start;">
                                                                    <tspan x="9" dy="3">0.4</tspan>
                                                                </text>
                                                            </g>
                                                            <g class="tick" transform="translate(0,159)"
                                                               style="opacity: 1;">
                                                                <line x2="6" y2="0"></line>
                                                                <text x="9" y="0" style="text-anchor: start;">
                                                                    <tspan x="9" dy="3">0.5</tspan>
                                                                </text>
                                                            </g>
                                                            <g class="tick" transform="translate(0,127)"
                                                               style="opacity: 1;">
                                                                <line x2="6" y2="0"></line>
                                                                <text x="9" y="0" style="text-anchor: start;">
                                                                    <tspan x="9" dy="3">0.6</tspan>
                                                                </text>
                                                            </g>
                                                            <g class="tick" transform="translate(0,96)"
                                                               style="opacity: 1;">
                                                                <line x2="6" y2="0"></line>
                                                                <text x="9" y="0" style="text-anchor: start;">
                                                                    <tspan x="9" dy="3">0.7</tspan>
                                                                </text>
                                                            </g>
                                                            <g class="tick" transform="translate(0,64)"
                                                               style="opacity: 1;">
                                                                <line x2="6" y2="0"></line>
                                                                <text x="9" y="0" style="text-anchor: start;">
                                                                    <tspan x="9" dy="3">0.8</tspan>
                                                                </text>
                                                            </g>
                                                            <g class="tick" transform="translate(0,33)"
                                                               style="opacity: 1;">
                                                                <line x2="6" y2="0"></line>
                                                                <text x="9" y="0" style="text-anchor: start;">
                                                                    <tspan x="9" dy="3">0.9</tspan>
                                                                </text>
                                                            </g>
                                                            <g class="tick" transform="translate(0,1)"
                                                               style="opacity: 1;">
                                                                <line x2="6" y2="0"></line>
                                                                <text x="9" y="0" style="text-anchor: start;">
                                                                    <tspan x="9" dy="3">1</tspan>
                                                                </text>
                                                            </g>
                                                            <path class="domain" d="M6,1H0V316H6"></path>
                                                        </g>
                                                    </g>
                                                    <g transform="translate(0.5,320.5)" style="visibility: hidden;">
                                                        <g clip-path="url(file:///C:/Users/darkd_000/Documents/themeforest-11989202-remark-responsive-bootstrap-admin-template/material/base/html/charts/c3.html#c3-1451852308279-clip-subchart)"
                                                           class="c3-chart">
                                                            <g class="c3-chart-bars"></g>
                                                            <g class="c3-chart-lines"></g>
                                                        </g>
                                                        <g clip-path="url(file:///C:/Users/darkd_000/Documents/themeforest-11989202-remark-responsive-bootstrap-admin-template/material/base/html/charts/c3.html#c3-1451852308279-clip)"
                                                           class="c3-brush"
                                                           style="pointer-events: all; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);">
                                                            <rect class="background" x="0" width="589.5"
                                                                  style="visibility: hidden; cursor: crosshair;"></rect>
                                                            <rect class="extent" x="0" width="0"
                                                                  style="cursor: move;"></rect>
                                                            <g class="resize e" transform="translate(0,0)"
                                                               style="cursor: ew-resize; display: none;">
                                                                <rect x="-3" width="6" height="6"
                                                                      style="visibility: hidden;"></rect>
                                                            </g>
                                                            <g class="resize w" transform="translate(0,0)"
                                                               style="cursor: ew-resize; display: none;">
                                                                <rect x="-3" width="6" height="6"
                                                                      style="visibility: hidden;"></rect>
                                                            </g>
                                                        </g>
                                                        <g class="c3-axis-x" transform="translate(0,0)"
                                                           clip-path="url(file:///C:/Users/darkd_000/Documents/themeforest-11989202-remark-responsive-bootstrap-admin-template/material/base/html/charts/c3.html#c3-1451852308279-clip-xaxis)"
                                                           style="visibility: hidden; opacity: 0;">
                                                            <g class="tick" transform="translate(283, 0)"
                                                               style="opacity: 1;">
                                                                <line y2="6" x1="0" x2="0"></line>
                                                                <text y="9" x="0" transform=""
                                                                      style="text-anchor: middle; display: block;">
                                                                    <tspan x="0" dy=".71em" dx="0">0</tspan>
                                                                </text>
                                                            </g>
                                                            <path class="domain" d="M0,6V0H565V6"></path>
                                                        </g>
                                                    </g>
                                                    <g transform="translate(423.3,0)">
                                                        <g class=" c3-legend-item c3-legend-item-data1"
                                                           style="visibility: visible; cursor: pointer;">
                                                            <text x="14" y="151" style="pointer-events: none;">data1
                                                            </text>
                                                            <rect class="c3-legend-item-event" x="0" y="137" width="56"
                                                                  height="18" style="fill-opacity: 0;"></rect>
                                                            <line class="c3-legend-item-tile" x1="-2" y1="146" x2="8"
                                                                  y2="146" stroke-width="10"
                                                                  style="stroke: rgb(63, 81, 181); pointer-events: none;"></line>
                                                        </g>
                                                        <g class=" c3-legend-item c3-legend-item-data2"
                                                           style="visibility: visible; cursor: pointer;">
                                                            <text x="14" y="169" style="pointer-events: none;">data2
                                                            </text>
                                                            <rect class="c3-legend-item-event" x="0" y="155" width="56"
                                                                  height="18" style="fill-opacity: 0;"></rect>
                                                            <line class="c3-legend-item-tile" x1="-2" y1="164" x2="8"
                                                                  y2="164" stroke-width="10"
                                                                  style="stroke: rgb(224, 224, 224); pointer-events: none;"></line>
                                                        </g>
                                                    </g>
                                                    <text class="c3-title" x="282.5" y="0"></text>
                                                </svg>
                                                <div class="c3-tooltip-container"
                                                     style="position: absolute; pointer-events: none; display: none;"></div>
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
                        collapsed: true,
                        children: []
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
                        children: []
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
                        collapsed: true,
                        children: []
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
                        children: []
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
                        children: []
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

@section('script')
    <script src="/vendor/switchery/switchery.min.js"></script>
    <script src="/vendor/intro-js/intro.js"></script>
    {!! HTML::script('vendor/footable/footable.all.min.js') !!}{{--tablas--}}
    {!! HTML::script('assets/examples/js/tables/footable.js') !!}{{--tablas--}}
@endsection
