@extends('layouts.main')
@section('head_scripts')
    <link rel="stylesheet" href="/vendor/slidepanel/slidePanel.css">
    <link rel="stylesheet" href="/vendor/jquery-labelauty/jquery-labelauty.css">
    <link rel="stylesheet" href="/css/bootstrap-extend.min.css">
    <link rel="stylesheet" href="/vendor/footable/footable.css">
    {{--  ---------------------------------------------   --}}
            <!-- Latest compiled and minified CSS -->

    {{--<link rel="stylesheet" href="/vendor/bootstrap-tagsinput/bootstrap-tagsinput.css">
    <link rel="stylesheet" href="/vendor/bootstrap-select/bootstrap-select.css">
    <link rel="stylesheet" href="/vendor/select2/select2.css">--}}

    <!-- Plugins -->
    <link rel="stylesheet" href="/vendor/animsition/animsition.css">
    <link rel="stylesheet" href="/vendor/asscrollable/asScrollable.css">
    <link rel="stylesheet" href="/vendor/switchery/switchery.css">
    <link rel="stylesheet" href="/vendor/intro-js/introjs.css">
    <link rel="stylesheet" href="/vendor/slidepanel/slidePanel.css">
    <link rel="stylesheet" href="/vendor/flag-icon-css/flag-icon.css">
    <link rel="stylesheet" href="/vendor/waves/waves.css">
    <link rel="stylesheet" href="/vendor/select2/select2.css">
    <link rel="stylesheet" href="/vendor/bootstrap-tokenfield/bootstrap-tokenfield.css">
    <link rel="stylesheet" href="/vendor/bootstrap-tagsinput/bootstrap-tagsinput.css">
    <link rel="stylesheet" href="/vendor/bootstrap-select/bootstrap-select.css">
    <link rel="stylesheet" href="/vendor/icheck/icheck.css">
    <link rel="stylesheet" href="/vendor/switchery/switchery.css">
    <link rel="stylesheet" href="/vendor/asrange/asRange.css">
    <link rel="stylesheet" href="/vendor/asspinner/asSpinner.css">
    <link rel="stylesheet" href="/vendor/clockpicker/clockpicker.css">
    <link rel="stylesheet" href="/vendor/ascolorpicker/asColorPicker.css">
    <link rel="stylesheet" href="/vendor/bootstrap-touchspin/bootstrap-touchspin.css">
    <link rel="stylesheet" href="/vendor/card/card.css">
    <link rel="stylesheet" href="/vendor/jquery-labelauty/jquery-labelauty.css">
    <link rel="stylesheet" href="/vendor/bootstrap-datepicker/bootstrap-datepicker.css">
    <link rel="stylesheet" href="/vendor/bootstrap-maxlength/bootstrap-maxlength.css">
    <link rel="stylesheet" href="/vendor/jt-timepicker/jquery-timepicker.css">
    <link rel="stylesheet" href="/vendor/jquery-strength/jquery-strength.css">
    <link rel="stylesheet" href="/vendor/multi-select/multi-select.css">
    <link rel="stylesheet" href="/vendor/typeahead-js/typeahead.css">
    <link rel="stylesheet" href="/assets/examples/css/forms/advanced.css">
    <!-- Fonts -->
    <link rel="stylesheet" href="/fonts/material-design/material-design.min.css">
    <link rel="stylesheet" href="/fonts/brand-icons/brand-icons.min.css">
    <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,300italic'>

    <script src="/vendor/modernizr/modernizr.js"></script>
    <script src="/vendor/breakpoints/breakpoints.js"></script>

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
            <li><a href="javascript:void(0)">Wallets</a></li>
            <li class="active">Cash out</li>
        </ol>
        {{-- PASOS PARA SACAR DINERO  --}}
                <div class="col-md-4 col-md-offset-0 paso1" >
                    <div class="panel pasost">
                        <span style="font-weight:500" >STEP 1: </span>
                        <br> select a wallet
                    </div>
                </div>
                <div class="col-md-4 col-md-offset-0 paso2" >
                    <div class="panel pasost">
                        <span style="font-weight:500" >STEP 2:</span><br>
                        Select your acount
                    </div>
                </div>
                <div class="col-md-4 col-md-offset-0 paso3" >
                    <div class="panel pasost">
                        <span style="font-weight:500" >STEP 3:</span><br>
                        {{--Your deposit will be available from 24 to 72 hours--}}
                        Send your request and wait 24 to 48 hours
                    </div>
                </div>
        {{-- INICIO DEL FORM --}}
        <div id="form" class="col-md-12 col-md-offset-0 panel " style="">
            {!! Form::open(['route'=>'wallets.cashout','method'=>'post','id'=>'salidas'] ) !!}
            @if( Session::has('errors') )
                <div style="text-align: center; color: red;"> {!! $registro = 'error'  !!}: check fields</div>
            @endif
            @foreach($errors->get('nfondos') as $m)
                <div style="text-align: center; color: red;">{!! $m !!}</div>
            @endforeach

            <div class="col-md-4 col-md-offset-0 ">
                <div class="example">
                    @foreach($errors->get('inputLableautyRadio') as $m)
                        <div style="text-align: center; color: red;">{!! $m !!}</div>
                    @endforeach
                    <div class="form-group wallets" style="font-weight: 500" >Select a wallet</div>
                    <div class="form-group">
                        <input type="radio" class="to-labelauty labelauty" name="inputLableautyRadio" value="utilities"
                               data-plugin="labelauty" checked="" id="labelauty-774694" style="display: none;">
                        <label class="wallets" for="labelauty-774694">
                            {{--<span class="labelauty-unchecked-image"></span>--}}
                            <span class="labelauty-unchecked">Utilities</span>
                            <span class="labelauty-checked-image"></span>
                            <span class="labelauty-checked">Utilities</span>
                        </label>
                    </div>
                    <div class="form-group">
                        <input type="radio" class="to-labelauty labelauty" name="inputLableautyRadio" value="commissions"
                               data-plugin="labelauty" id="labelauty-486480" style="display: none;">
                        <label class="wallets" for="labelauty-486480">
                            {{--<span class="labelauty-unchecked-image"></span>--}}
                            <span class="labelauty-unchecked">Commissions</span>
                            <span class="labelauty-checked-image"></span>
                            <span class="labelauty-checked">Commissions</span>
                        </label>
                    </div>
                </div>
            </div>
            <div class="col-md-4" style="margin-top: 4%">
                @foreach($errors->get('bitcoinacount') as $m)
                    <div style="text-align: center; color: red;">{!! $m !!}</div>
                @endforeach
                <div class="form-group wallets" style="font-weight: 500" >Choice your account bitcoin</div>
                <div class="example-wrap">
                    <div class="example">
                        <select name="bitcoinacount"  data-plugin="selectpicker" data-style="btn-primary">
                            @foreach($cuentas as $cuenta)
                                <option value="{!! $cuenta['id'] !!}">{!! $cuenta['name'] !!}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>
            <div class="col-md-4" style="margin-top: 2%;padding-bottom: 1px;">
                @foreach($errors->get('amount') as $m)
                    <div style="text-align: center; color: red;">{!! $m !!}</div>
                @endforeach
                <div class="example">
                    {{--<div class="form-group wallets" style="font-weight: 500" > </div>--}}
                    <div class="form-group">
                        <div class="input-group ">
                            <span class="input-group-addon">฿</span>
                            <input type="text" class="form-control" name="amount" placeholder="amount ">
                            <span class="input-group-addon">.00</span>
                        </div>
                    </div>
                    <button type="submit" id="deposito" name="deposito" class="btn btn-primary btn-block waves-effect waves-light">Cash Out</button>
                </div>
            </div>
            {!! Form::close() !!}
        </div> {{-- fin del fomr--}}

        <div class="row"> {{-- tablas --}}
            <div id="list" class="col-md-12 col-md-offset-0">
                <!-- Panel Filtering -->
                <div class="panel">
                    <header class="panel-heading">
                        <h3 class="panel-title">CashOut</h3>
                    </header>
                    <div class="panel-body">
                        <table class="table toggle-circle" id="exampleFootableFiltering">
                            <thead>
                            <tr>
                                <th data-toggle="true">amount</th>
                                <th>from</th>
                                <th data-hide="all">cashout date</th>
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
                            @foreach($salidas as $deposit)
                                <tr>
                                    <td>{!! $deposit['amount'] !!}</td>
                                    <td>{!! $deposit['from'] !!}</td>
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

    </div> {{-- fin del div wraper--}}


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

    {!! HTML::script('vendor/formvalidation/formValidation.min.js') !!}
    {!! HTML::script('vendor/formvalidation/framework/bootstrap.min.js') !!}
    {!! HTML::script('validator.js') !!}

    {!! HTML::script('vendor/footable/footable.all.min.js') !!}{{--tablas--}}
    {!! HTML::script('assets/examples/js/tables/footable.js') !!}{{--tablas--}}
    {!! HTML::script('vendor/formatter-js/jquery.formatter.js') !!}
    {!! HTML::script('js/components/formatter-js.js') !!}

    <!-- Plugins -->
    {{--<script src="/vendor/bootstrap-tagsinput/bootstrap-tagsinput.min.js"></script>--}}
    <script src="/vendor/bootstrap-select/bootstrap-select.js"></script>

    <!-- Scripts -->
    <script src="/js/components/bootstrap-select.js"></script>

@endsection
