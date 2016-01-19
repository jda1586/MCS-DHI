@extends('layouts.main')
@section('head_scripts')
    <link rel="stylesheet" href="/vendor/slidepanel/slidePanel.css">
    <link rel="stylesheet" href="/vendor/jquery-labelauty/jquery-labelauty.css">
    <link rel="stylesheet" href="/css/bootstrap-extend.min.css">
    <link rel="stylesheet" href="/vendor/footable/footable.css">
    <style>
        .divider-vertical
        {
            max-height: 100%;
            border-left: 1px solid gray;
            opacity: 1;
            margin:  15px 0;
        }
        .right
        {
            max-height: 100%;
            opacity: 1;
            margin:  15px 0;
        }

    </style>
@endsection

@section('content')
    <div class="content">
        <div class="row">
            <div class="col-md-12" style="margin: 15px;">
                <ol class="breadcrumb">
                    <li><a href="javascript:void(0)">Home</a></li>
                    <li><a href="javascript:void(0)">Admin</a></li>
                    <li class="active">Transfers</li>
                </ol>
            </div>
            <div class="col-md-1"></div>
            <div class="col-md-10 panel">
                <div class="col-md-4 right">
                    <h4 style="border-bottom: solid grey 1px;">All members</h4>
                    <p>Gold</p>
                    <p>Silver</p>
                    <p>Bronze</p>
                </div>
                <div class="col-md-8 divider-vertical">
                    <h4>Members List</h4>
                    <div class="panel-body" style="padding: 0 30px 30px 30px" >
                        <div class="form-inline padding-bottom-15">
                            <div class="row">
                                <div class="col-sm-6">
                                </div>
                                <div class="col-sm-6 text-right">
                                    <div class="form-group">
                                        <input id="filteringSearch" type="text" placeholder="Search"
                                               class="form-control" autocomplete="off">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <table class="table table-hover toggle-circle footable-loaded footable tablet breakpoint">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Description</th>
                                <th>Amount</th>
                                <th>Date</th>
                            </tr>
                            </thead>

                            <tbody>
                            {{--@foreach($auction_movements as $movement)--}}
                                {{--{!! \DHI\Libraries\Wallets\MovementHelper::getMinRow($movement) !!}--}}
                            {{--@endforeach--}}
                            </tbody>
                            {{--<tfoot>--}}
                            {{--<tr>--}}
                            {{--<td colspan="5" class="footable-visible">--}}
                            {{--<div class="text-right">--}}
                            {{--<ul class="pagination">--}}
                            {{--<li class="footable-page-arrow disabled"><a data-page="first" href="#first">«</a>--}}
                            {{--</li>--}}
                            {{--<li class="footable-page-arrow disabled"><a data-page="prev"--}}
                            {{--href="#prev">‹</a></li>--}}
                            {{--<li class="footable-page active"><a data-page="0" href="#">1</a></li>--}}
                            {{--<li class="footable-page"><a data-page="1" href="#">2</a></li>--}}
                            {{--<li class="footable-page"><a data-page="2" href="#">3</a></li>--}}
                            {{--<li class="footable-page-arrow"><a data-page="next" href="#next">›</a></li>--}}
                            {{--<li class="footable-page-arrow"><a data-page="last" href="#last">»</a></li>--}}
                            {{--</ul>--}}
                            {{--</div>--}}
                            {{--</td>--}}
                            {{--</tr>--}}
                            {{--</tfoot>--}}
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-md-1"></div>
        </div>
    </div>

@endsection

@section('script')

@endsection
