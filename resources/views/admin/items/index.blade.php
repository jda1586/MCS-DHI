@extends('layouts.main')
@section('head_scripts')
    <link rel="stylesheet" href="/vendor/slidepanel/slidePanel.css">
    <link rel="stylesheet" href="/vendor/jquery-labelauty/jquery-labelauty.css">
    <link rel="stylesheet" href="/css/bootstrap-extend.min.css">
    <link rel="stylesheet" href="/vendor/footable/footable.css">
    <style>
    </style>
@endsection

@section('content')
    {{--col-md-6 col-md-offset-3--}}
    <div id="wrapper-main" class="col-md-12 col-md-offset-0">
        <div class="page-header">
            <h1 class="page-title">Items</h1>
            <ol class="breadcrumb">
                <li><a href="../index.html">Home</a></li>
                <li class="active">Admin/Items</li>
            </ol>
        </div>

        <div class="row"> {{-- tablas --}}
            <div id="list" class="col-md-12 col-md-offset-0">
                <!-- Panel Filtering -->
                <div class="panel">
                    <div class="panel-body">
                        {{--<div class="padding-bottom-15">
                            <button id="exampleCollapseBtn" class="btn btn-round btn-primary btn-sm btn-pill-left">Collapse All</button>
                            <button id="exampleExpandBtn" class="btn btn-round btn-primary btn-sm btn-pill-right">Expand All</button>
                        </div>--}}
                        <table class="table toggle-circle" id="exampleFootableFiltering">
                            <thead>
                            <tr>
                                <th data-toggle="true">SKU</th>
                                <th>Description</th>
                                <th>owner</th>
                                <th>Auctions</th>
                                <th>Stook</th>
                                <th data-hide="all">status</th>
                                {{--<th data-hide="all">Image Name</th>--}}
                            </tr>
                            </thead>
                            <div class="form-inline padding-bottom-15">
                                <div class="row">
                                    {{--<div class="col-sm-6">
                                        <div class="form-group">
                                            <label class="control-label">Status</label>
                                            <select id="filteringStatus" class="form-control">
                                                <option value="">Show all</option>
                                                <option value="active">Active</option>
                                                <option value="pending">pending</option>
                                                <option value="suspended">Rejected</option>
                                            </select>
                                        </div>
                                    </div>--}}
                                    <div class="col-sm-6 text-left">
                                        <div class="form-group">
                                            <input id="filteringSearch" type="text" placeholder="Search" class="form-control" autocomplete="off">
                                        </div>
                                    </div>
                                    <div class="col-sm-6 text-right">
                                        <button style="max-width: 300px;" onclick="myFunction()" type="button" id="deposito" name="deposito" class="btn btn-primary btn-block waves-effect waves-light">+ New Item</button>
                                    </div>
                                </div>
                            </div>
                            <tbody>
                            @foreach($items as $item)
                                <tr>
                                    <td>{!! $item['amount'] !!}</td>
                                    <td>{!! $item['Description'] !!}</td>
                                    <td>{!! $item['owner'] !!}</td>
                                    <td>{!! $item['Auctions'] !!}</td>
                                    <td>{!! $item['Stook'] !!}</td>
                                    <td>
                                        <span class="label label-table label-success">{!!$item['status']!!}</span>
                                    </td>
                                    {{--<td>{!! $deposit['image'] !!}</td>--}}
                                </tr>
                            @endforeach
                            </tbody>
                            <tfoot>
                            <tr>
                                <td colspan="5">
                                    <div class="text-right">
                                        <ul class="pagination"></ul>
                                    </div>
                                </td>
                            </tr>
                            </tfoot>
                        </table>
                    </div>
                </div> <!-- End Panel Filtering -->
            </div>
        </div> {{-- fin del div de la tabla--}}
    </div> {{-- fin del graper main--}}

@endsection

@section('script')
    <script>
        function myFunction() {
            window.location = "{!! route('admin.items.register') !!}";
        }
    </script>
    {{--<script src="../../../global/vendor/formatter-js/jquery.formatter.js"></script>--}}
    {{--<script src="vendor/formvalidation/formValidation.min.js"></script>--}}
    {{--<script src="vendor/formvalidation/framework/bootstrap.min.js"></script>--}}
    {{--<script src="../../../global/js/components/formatter-js.js"></script>--}}
    {{--<script src="vendor/footable/footable.all.min.js"></script>--}}


    {!! HTML::script('vendor/footable/footable.all.min.js') !!}
    {{--script--}}
    {!! HTML::script('vendor/formvalidation/formValidation.min.js') !!}
    {!! HTML::script('vendor/formvalidation/framework/bootstrap.min.js') !!}
    {!! HTML::script('validator.js') !!}
    {!! HTML::script('vendor/formatter-js/jquery.formatter.js') !!}  {{--para la mascara--}}
    {!! HTML::script('js/components/formatter-js.js') !!}
    {!! HTML::script('assets/examples/js/tables/footable.js') !!}
@endsection
