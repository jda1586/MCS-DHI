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
    <link rel="stylesheet" href="/vendor/animsition/animsition.css">
    <link rel="stylesheet" href="/vendor/asscrollable/asScrollable.css">
    <link rel="stylesheet" href="/vendor/switchery/switchery.css">
    <link rel="stylesheet" href="/vendor/intro-js/introjs.css">
    <link rel="stylesheet" href="/vendor/slidepanel/slidePanel.css">
    <link rel="stylesheet" href="/vendor/flag-icon-css/flag-icon.css">
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
    <style>
        .spinnerUi {
            width: 100% !important;
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
            {!! Form::open(['route'=>'admin.items.store','method'=>'post','id'=>'newitem'] ) !!}
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
                            <div class="form-group">
                                <h4 class="example-title">Name </h4>
                                <label class="sr-only" for="inputName">Full Name</label>
                                <input type="text" class="form-control" id="inputName" name="name" placeholder="Name"
                                       data-fv-field="name">
                            </div>
                            <div class="form-group">
                                <h4 class="example-title">Price</h4>
                                <input type="text" class="form-control" name="amount" data-plugin="TouchSpin"
                                       data-min="-1000000000" data-max="1000000000" data-stepinterval="50"
                                       data-maxboostedstep="10000000" data-prefix="$" value="0"/>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6" style="padding-right:0px; float:right">
                        <div class="example">
                            <div class="form-group">
                                <h4 class="example-title">Choice a image </h4>
                                <div class="input-group input-group-file">
                                    <input id="namefile" type="text" class="form-control" placeholder="select a image" readonly=""/>
                                        <span class="input-group-btn">
                                            <span class="btn btn-primary btn-file waves-effect waves-light">
                                                <i class="icon md-upload" aria-hidden="true"></i>
                                                <input id="img" type="file" name="image" multiple="">
                                            </span>
                                        </span>
                                </div>
                            </div>
                            <div class="form-group" style="width:100%;">
                                <h4 class="example-title">Stock</h4>
                                <div tabindex="0" class="spinnerUi" style="width:100%;">
                                    <input type="text" name="stock" class="form-control" data-plugin="asSpinner"
                                           value="0"/>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="example" style="width: 100%;">Description</div>
                <div class="example">
                    <span>English</span>
                  <textarea class="maxlength-textarea form-control" data-plugin="maxlength"
                            data-placement="bottom-right-inside" name="decription"
                            maxlength="255" rows="3" placeholder="Description in English."></textarea>
                </div>
                {{--<div class="example">
                    <span>Español</span>
                  <textarea class="maxlength-textarea form-control" data-plugin="maxlength"
                            data-placement="bottom-right-inside"
                            maxlength="100" rows="3" placeholder="Descripción en Español."></textarea>
                </div>--}}
                    <div class="example" style="width: 100%;">Feactures</div>
                <div class="example">
                    <span>English</span>
                  <textarea class="maxlength-textarea form-control" data-plugin="maxlength"
                            data-placement="bottom-right-inside" name="feactures"
                            maxlength="255" rows="3" placeholder="Description in English."></textarea>
                </div>

                <div class="example" style="width: 100%">
                    <div class="example" style="margin: auto">
                        <button style="margin-left:25%;max-width:300px" type="submit" id="deposito" name="deposito"
                                class="btn btn-primary btn-block waves-effect waves-light">Save Item
                        </button>
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
    <!-- Plugins -->
    <script src="/vendor/switchery/switchery.min.js"></script>
    <script src="/vendor/intro-js/intro.js"></script>
    <script src="/vendor/screenfull/screenfull.js"></script>
    <script src="/vendor/slidepanel/jquery-slidePanel.js"></script>
    <script src="/vendor/select2/select2.min.js"></script>
    <script src="/vendor/bootstrap-tokenfield/bootstrap-tokenfield.min.js"></script>
    <script src="/vendor/bootstrap-tagsinput/bootstrap-tagsinput.min.js"></script>
    <script src="/vendor/bootstrap-select/bootstrap-select.js"></script>
    <script src="/vendor/icheck/icheck.min.js"></script>
    <script src="/vendor/switchery/switchery.min.js"></script>
    <script src="/vendor/asrange/jquery-asRange.min.js"></script>
    <script src="/vendor/asspinner/jquery-asSpinner.min.js"></script>
    <script src="/vendor/clockpicker/bootstrap-clockpicker.min.js"></script>
    <script src="/vendor/ascolor/jquery-asColor.min.js"></script>
    <script src="/vendor/asgradient/jquery-asGradient.min.js"></script>
    <script src="/vendor/ascolorpicker/jquery-asColorPicker.min.js"></script>
    <script src="/vendor/bootstrap-maxlength/bootstrap-maxlength.js"></script>
    <script src="/vendor/jquery-knob/jquery.knob.js"></script>
    <script src="/vendor/bootstrap-touchspin/jquery.bootstrap-touchspin.min.js"></script>
    <script src="/vendor/card/jquery.card.js"></script>
    <script src="/vendor/jquery-labelauty/jquery-labelauty.js"></script>
    <script src="/vendor/bootstrap-datepicker/bootstrap-datepicker.js"></script>
    <script src="/vendor/jt-timepicker/jquery.timepicker.min.js"></script>
    <script src="/vendor/datepair-js/datepair.min.js"></script>
    <script src="/vendor/datepair-js/jquery.datepair.min.js"></script>
    <script src="/vendor/jquery-strength/jquery-strength.min.js"></script>
    <script src="/vendor/multi-select/jquery.multi-select.js"></script>
    <script src="/vendor/typeahead-js/bloodhound.min.js"></script>
    <script src="/vendor/typeahead-js/typeahead.jquery.min.js"></script>
    <script src="/vendor/jquery-placeholder/jquery.placeholder.js"></script>
    <!-- Scripts -->
    <script src="/js/core.js"></script>
    <script src="/assets/js/site.js"></script>
    <script src="/assets/js/sections/menu.js"></script>
    <script src="/assets/js/sections/menubar.js"></script>
    <script src="/assets/js/sections/gridmenu.js"></script>
    <script src="/assets/js/sections/sidebar.js"></script>
    <script src="/js/configs/config-colors.js"></script>
    <script src="/assets/js/configs/config-tour.js"></script>
    <script src="/js/components/asscrollable.js"></script>
    <script src="/js/components/animsition.js"></script>
    <script src="/js/components/slidepanel.js"></script>
    <script src="/js/components/switchery.js"></script>
    <script src="/js/components/select2.js"></script>
    <script src="/js/components/bootstrap-tokenfield.js"></script>
    <script src="/js/components/bootstrap-tagsinput.js"></script>
    <script src="/js/components/bootstrap-select.js"></script>
    <script src="/js/components/icheck.js"></script>
    <script src="/js/components/switchery.js"></script>
    <script src="/js/components/asrange.js"></script>
    <script src="/js/components/asspinner.js"></script>
    <script src="/js/components/clockpicker.js"></script>
    <script src="/js/components/ascolorpicker.js"></script>
    <script src="/js/components/bootstrap-maxlength.js"></script>
    <script src="/js/components/jquery-knob.js"></script>
    <script src="/js/components/bootstrap-touchspin.js"></script>
    <script src="/js/components/card.js"></script>
    <script src="/js/components/jquery-labelauty.js"></script>
    <script src="/js/components/bootstrap-datepicker.js"></script>
    <script src="/js/components/jt-timepicker.js"></script>
    <script src="/js/components/datepair-js.js"></script>
    <script src="/js/components/jquery-strength.js"></script>
    <script src="/js/components/multi-select.js"></script>
    <script src="/js/components/jquery-placeholder.js"></script>
    <script src="/assets/examples/js/forms/advanced.js"></script>

@endsection