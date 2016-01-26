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
    <link rel="stylesheet" href="/vendor/bootstrap-select/bootstrap-select.css">
    <link rel="stylesheet" href="/assets/examples/css/forms/advanced.css">
    <link rel="stylesheet" href="/vendor/bootstrap-maxlength/bootstrap-maxlength.css">
    <link rel="stylesheet" href="/vendor/asspinner/asSpinner.css">
    <style>
        .spinnerUi {
            width: 100%!important;
        }
    </style>
@endsection

@section('content')
    <div id="wrapper-main" class="col-md-12 col-md-offset-0">
        <div class="page-header">
            <h1 class="page-title">New Item</h1>
            <ol class="breadcrumb">
                <li><a href="{!! route('home') !!}">Home</a></li>
                <li><a href="javascript:void(0)">Items</a></li>
                <li class="active">Register</li>
            </ol>
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

            <div class="col-md-3 col-md-offset-0 ">
                {{--<div class="example">
                    @foreach($errors->get('inputLableautyRadio') as $m)
                        <div style="text-align: center; color: red;">{!! $m !!}</div>
                    @endforeach
                    <div class="form-group wallets" style="font-weight: 500">Select a wallet</div>
                    <div class="form-group wallets">
                        <input type="radio" class="to-labelauty wallets" name="inputLableautyRadio"
                               data-plugin="labelauty"
                               value="Utilities"
                               data-labelauty="Utilities|selected Utilities" checked/>
                    </div>
                    <div class="form-group wallets">
                        <input type="radio" class="to-labelauty" name="inputLableautyRadio" data-plugin="labelauty"
                               value="Commissions"
                               data-labelauty="Commissions|Commissions"/>
                    </div>
                </div>--}}
            </div>
            <div class="col-md-6" style="margin-top: 4%">

                @foreach($errors->get('bitcoinacount') as $m)
                    <div style="text-align: center; color: red;">{!! $m !!}</div>
                @endforeach
                <div class="example">
                    <div class="col-md-6" style="padding-left:0px;float: left">
                        <div class="example">
                            <h4 class="example-title">Default Spinner</h4>
                            <label class="sr-only" for="inputName">Full Name</label>
                            <input type="text" class="form-control" id="inputName" name="name" placeholder="Name"
                                   data-fv-field="name">
                            <small class="help-block" data-fv-validator="notEmpty" data-fv-for="name"
                                   data-fv-result="NOT_VALIDATED" style="display: none;">The name is required and cannot
                                be
                                empty
                            </small>
                            <small class="help-block" data-fv-validator="stringLength" data-fv-for="name"
                                   data-fv-result="NOT_VALIDATED" style="display: none;">Please enter a value with valid
                                length
                            </small>
                            <small class="help-block" data-fv-validator="regexp" data-fv-for="name"
                                   data-fv-result="NOT_VALIDATED" style="display: none;">only letters allowed
                            </small>
                        </div>

                    </div>
                    <div class="col-md-6" style="padding-right:0px; float:right">
                        <div class="example" style="width:100%;">
                            <h4 class="example-title">Stock</h4>
                            <div tabindex="0" class="spinnerUi" style="width:100%;">
                                <input type="text" class="form-control" style="width:50%" data-plugin="asSpinner" value="0">
                            </div>
                        </div>
                        <div class="example">
                            <h4 class="example-title">Price</h4>
                            <div class="input-group bootstrap-touchspin"><span class="input-group-btn"><button
                                            class="btn btn-default bootstrap-touchspin-down" type="button">-
                                    </button></span><span
                                        class="input-group-addon bootstrap-touchspin-prefix">$</span><input type="text"
                                                                                                            class="form-control"
                                                                                                            name="touchSpinPrefix"
                                                                                                            data-plugin="TouchSpin"
                                                                                                            data-min="-1000000000"
                                                                                                            data-max="1000000000"
                                                                                                            data-stepinterval="50"
                                                                                                            data-maxboostedstep="10000000"
                                                                                                            data-prefix="$"
                                                                                                            value="0"
                                                                                                            style="display: block;"><span
                                        class="input-group-addon bootstrap-touchspin-postfix"
                                        style="display: none;"></span><span class="input-group-btn"><button
                                            class="btn btn-default bootstrap-touchspin-up" type="button">+
                                    </button></span></div>
                        </div>
                    </div>
                </div>
                <div class="example" style="width: 100%;">Description</div>
                <div class="example">
                    <span>English</span>
                  <textarea class="maxlength-textarea form-control" data-plugin="maxlength"
                            data-placement="bottom-right-inside"
                            maxlength="100" rows="3" placeholder="Description in English."></textarea>
                </div>
                <div class="example">
                    <span>Español</span>
                  <textarea class="maxlength-textarea form-control" data-plugin="maxlength"
                            data-placement="bottom-right-inside"
                            maxlength="100" rows="3" placeholder="Descripción en Español."></textarea>
                </div>
                <div class="form-group wallets" style="font-weight: 500">Choice your account bitcoin</div>
                <div class="example-wrap">
                    <div class="example">
                        <select name="bitcoinacount" data-plugin="selectpicker" data-style="btn-primary">
                            {{--@foreach($cuentas as $cuenta)
                                <option value="{!! $cuenta['id'] !!}">{!! $cuenta['name'] !!}</option>
                            @endforeach--}}
                        </select>
                    </div>
                </div>
            </div>
            <div class="col-md-3" style="margin-top: 2%;padding-bottom: 1px;">
                {{--@foreach($errors->get('amount') as $m)
                    <div style="text-align: center; color: red;">{!! $m !!}</div>
                @endforeach
                <div class="example">
                    --}}{{--<div class="form-group wallets" style="font-weight: 500" > </div>--}}{{--
                    <div class="form-group">
                        <div class="input-group ">
                            <span class="input-group-addon">$</span>
                            <input type="text" class="form-control" name="amount" placeholder="amount ">
                            <span class="input-group-addon">.00</span>
                        </div>
                    </div>
                    <button type="submit" id="deposito" name="deposito"
                            class="btn btn-primary btn-block waves-effect waves-light">Cash Out
                    </button>
                </div>--}}
            </div>
            {!! Form::close() !!}
        </div> {{-- fin del fomr--}}
    </div>

@endsection

@section('script')
    <script>
        $(':file').change(function () {
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
    <script src="/vendor/jquery-labelauty/jquery-labelauty.js"></script>
    <script src="/vendor/bootstrap-maxlength/bootstrap-maxlength.min.js"></script>
    <script src="/vendor/asspinner/jquery-asSpinner.min.js"></script>

    <!-- Scripts -->
    <script src="/js/components/jquery-labelauty.js"></script>
    <script src="/js/components/bootstrap-select.js"></script>
    <script src="/js/components/bootstrap-maxlength.js"></script>
    <script src="/js/components/asspinner.js"></script>

@endsection