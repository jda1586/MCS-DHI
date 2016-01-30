@extends('layouts.main')
@section('head_scripts')
    <link rel="stylesheet" href="/vendor/slidepanel/slidePanel.css">
    <link rel="stylesheet" href="/vendor/jquery-labelauty/jquery-labelauty.css">
    <link rel="stylesheet" href="/css/bootstrap-extend.min.css">
    <link rel="stylesheet" href="/vendor/footable/footable.css">
    <style>
        .paso1{
            height:100px; margin:20px 0 20px 0; padding-left: 0px!important;
        }
        .paso2{
            height:100px; margin:20px 0 20px 0;
        }
        .paso3{
            height:100px; margin:20px 0 20px 0; padding-right:0px!important;
        }
        .paso4{
            height:100px; margin:20px 0 20px 0; padding-right:0px!important;
        }
        .pasost{
            width: 100%; height: 100%; text-align: center; padding-top: 10px;
        }
        .wallets{
            width: 100%;
            margin: auto;
            text-align: center;
        }
    </style>
@endsection

@section('content')
    {{--col-md-6 col-md-offset-3--}}
    <div id="wrapper-main" class="col-md-12 col-md-offset-0">
        <ol class="breadcrumb">
            <li><a href="javascript:void(0)">Home</a></li>
            <li><a href="javascript:void(0)">Tables</a></li>
            <li class="active">FooTable</li>
        </ol>
        {{--<div id="titulo" class="col-md-10 col-md-offset-1 " style="margin-top: 20px">--}}

                <div class="col-md-3 col-md-offset-0 paso1" >
                    <div class="panel pasost">
                        <span style="font-weight:500" >STEP 1: </span>
                        {{--deposit <br>MAKE A TRANSFER TO THIS ACCOUNT BitCoins--}}
                        <br>Send amount of bitcoins to this Bitcoin Account
                        <br>1ArPKA2cM2fY1NW5VbTauwiV2Pu8i3Z77p
                    </div>
                </div>
                <div class="col-md-3 col-md-offset-0 paso2" >
                    <div class="panel pasost">
                        <span style="font-weight:500" >STEP 2: </span><br>
                        Upload a image proof and write the amount
                    </div>
                </div>
                <div class="col-md-3 col-md-offset-0 paso2" >
                    <div class="panel pasost">
                        <span style="font-weight:500" >STEP 3: </span><br>
                        Select a bitcoin account
                    </div>
                </div>
                <div class="col-md-3 col-md-offset-0 paso3" >
                    <div class="panel pasost">
                        <span style="font-weight:500" >STEP 3: </span><br> {{-- Waite --}}
                        Send your request and wait 24 to 48 hours
                    </div>
                </div>
        {{--</div>--}}
        <div id="form" class="col-md-12 col-md-offset-0 panel " style="">
            {{--{!! Form::open(['id'=>'deposito','class'=>'']) !!}--}}
            {!! Form::open(['route'=>'wallets.deposits','method'=>'post','files'=>true,'id'=>'depositos'] ) !!}
            @if( Session::has('errors') )
                <div style="text-align: center; color: red;"> {!! $registro = 'error'  !!}: choice a image</div>
            @endif
            <div class="col-md-4 col-md-offset-0 ">
                <div class="example">
                    <div class="form-group wallets" style="font-weight: 500" >Choice a wallet</div>
                    <div class="form-group">
                        <input type="radio" class="to-labelauty labelauty" name="inputLableautyRadio" value="activation"
                               data-plugin="labelauty" checked="" id="labelauty-774694" style="display: none;">
                        <label class="wallets" for="labelauty-774694">
                            {{--<span class="labelauty-unchecked-image"></span>--}}
                            <span class="labelauty-unchecked">Activation</span>
                            <span class="labelauty-checked-image"></span>
                            <span class="labelauty-checked">Activation</span>
                        </label>
                    </div>
                    <div class="form-group">
                        <input type="radio" class="to-labelauty labelauty" name="inputLableautyRadio" value="commission"
                               data-plugin="labelauty" id="labelauty-486480" style="display: none;">
                        <label class="wallets" for="labelauty-486480">
                            {{--<span class="labelauty-unchecked-image"></span>--}}
                            <span class="labelauty-unchecked">Commissions</span>
                            <span class="labelauty-checked-image"></span>
                            <span class="labelauty-checked">Commissions</span>
                        </label>
                    </div>
                    <div class="form-group">
                        <input type="radio" class="to-labelauty labelauty" name="inputLableautyRadio" value="auctions"
                               data-plugin="labelauty" id="labelauty-684702" style="display: none;">
                        <label class="wallets" for="labelauty-684702">
                            {{--<span class="labelauty-unchecked-image"></span>--}}
                            <span class="labelauty-unchecked">Auctions</span>
                            <span class="labelauty-checked-image"></span>
                            <span class="labelauty-checked">Auctions</span>
                        </label>
                    </div>
                </div>
            </div>
            <div class="col-md-4" style="margin-top: 1.5%;">
                <div class="example">
                    {{--<div class="form-group" style="font-weight: 500">  </div>--}}
                    <div class="form-group" style="font-weight: 500"> Choice a image</div>
                    <div class="form-group">
                        <div class="input-group input-group-file">
                            <input id="namefile" type="text" class="form-control" placeholder="select a image" readonly="">
					    <span class="input-group-btn">
                            <span class="btn btn-primary btn-file waves-effect waves-light">
                                <i class="icon md-upload" aria-hidden="true"></i>
                                <input id="img" type="file" name="image" multiple="">
                            </span>
					    </span>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group ">
                            <span class="input-group-addon">฿</span>
                            <input type="text" class="form-control" placeholder="999.99" name="amount" >
                            <span class="input-group-addon">Currency</span>
                        </div>
                    </div>
                    {{--<div class="form-group form-material">
                        <label class="col-sm-3 control-label">Currency</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="inputCurrency" name="cantidad" data-plugin="formatter" data-pattern="$[[999]].[[99]]">
                            <p class="help-block">$999,999,999.99</p>
                        </div>
                    </div>--}}
                </div>
            </div>
            <div class="col-md-4" style="margin-top: 5%;">
                <div class="example" style="" >
                    <button style="margin-bottom: 15px;" type="submit" id="deposito" name="deposito" class="btn btn-primary btn-block waves-effect waves-light">Deposits</button>
                </div>
            </div>
            {!! Form::close() !!}
        </div> {{--fin del segundo div  --}}
        <div class="row"> {{-- tablas --}}
            <div id="list" class="col-md-12 col-md-offset-0">
                <!-- Panel Filtering -->
                <div class="panel">
                    <header class="panel-heading">
                        <h3 class="panel-title"> Deposits </h3>
                    </header>
                    <div class="panel-body">
                        {{--<div class="padding-bottom-15">
                            <button id="exampleCollapseBtn" class="btn btn-round btn-primary btn-sm btn-pill-left">Collapse All</button>
                            <button id="exampleExpandBtn" class="btn btn-round btn-primary btn-sm btn-pill-right">Expand All</button>
                        </div>--}}
                        <table class="table toggle-circle" id="exampleFootableFiltering">
                            <thead>
                            <tr>
                                <th data-toggle="true">amount</th>
                                <th>wallet</th>
                                <th data-hide="all">Deposit date</th>
                                <th data-hide="all">Status</th>
                                {{--<th data-hide="all">Image Name</th>--}}
                            </tr>
                            </thead>
                        <div class="form-inline padding-bottom-15">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label class="control-label">Status</label>
                                        <select id="filteringStatus" class="form-control">
                                            <option value="">Show all</option>
                                            <option value="active">Active</option>
                                            <option value="pending">pending</option>
                                            <option value="suspended">Rejected</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-6 text-right">
                                    <div class="form-group">
                                        <input id="filteringSearch" type="text" placeholder="Search" class="form-control" autocomplete="off">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <tbody>
                        @foreach($depositos as $deposit)
                            <tr>
                                <td>{!! $deposit['amount'] !!}</td>
                                <td>{!! $deposit['wallet'] !!}</td>
                                <td>{!! $deposit['created_at'] !!}</td>
                                <td>
                                    <span class="label label-table label-success">{!!$deposit['status']!!}</span>
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
        $(':file').change(function()
        {
            //obtenemos un array con los datos del archivo
            var file = $("#img")[0].files[0];
            //obtenemos el nombre del archivo
            var fileName = file.name;
            console.log(fileName);
            //obtenemos la extensión del archivo
            fileExtension = fileName.substring(fileName.lastIndexOf('.') + 1);
            //obtenemos el tamaño del archivo
            var fileSize = file.size;
            //obtenemos el tipo de archivo image/png ejemplo
            var fileType = file.type;
            //mensaje con la información del archivo
//            showMessage("<span class='info'>Archivo para subir: "+fileName+", peso total: "+fileSize+" bytes.</span>");
            $("#namefile").val(fileName);
        });
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
