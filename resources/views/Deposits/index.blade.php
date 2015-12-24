@extends('layouts.main')
@section('head_scripts')
    <link rel="stylesheet" href="/vendor/slidepanel/slidePanel.css">
    <link rel="stylesheet" href="/vendor/jquery-labelauty/jquery-labelauty.css">
    <link rel="stylesheet" href="/css/bootstrap-extend.min.css">
    <style>
        .pasos{
            height:100px; margin:20px 0 20px 0;
        }
        .pasost{
            width: 100%; height: 100%; text-align: center;
        }
    </style>
@endsection

@section('content')
    {{--col-md-6 col-md-offset-3--}}
    <div id="wrapper-main" class="col-md-12 col-md-offset-0">
        {{--<div id="titulo" class="col-md-10 col-md-offset-1 " style="margin-top: 20px">--}}

                <div class="col-md-4 col-md-offset-0 pasos" >
                    <div class="panel pasost">
                        <span style="font-weight:500" >STEP 1: Deposit</span>
                        <br>MAKE A TRANSFER TO THIS ACCOUNT BitCoins
                    </div>
                </div>
                <div class="col-md-4 col-md-offset-0 pasos" >
                    <div class="panel pasost">
                        <span style="font-weight:500" >STEP 2: Validate</span><br>
                        send us a voucher
                    </div>
                </div>
                <div class="col-md-4 col-md-offset-0 pasos" >
                    <div class="panel pasost">
                        <span style="font-weight:500" >STEP 3: Waite</span><br>
                        Your deposit will be available from 24 to 72 hours
                    </div>
                </div>
        {{--</div>--}}
        <div id="form" class="col-md-12 col-md-offset-0 panel " style="">
            {{--{!! Form::open(['id'=>'deposito','class'=>'']) !!}--}}
            {!! Form::open(['route'=>'deposits','method'=>'post','id'=>'deposito'] ) !!}
            <div class="col-md-4 col-md-offset-1    ">
                <div class="example">
                    <div class="form-group" >choice a wallet</div>
                    <div class="form-group">
                        <input type="radio" class="to-labelauty labelauty" name="inputLableautyRadio" value="activation"
                               data-plugin="labelauty" checked="" id="labelauty-774694" style="display: none;">
                        <label for="labelauty-774694">
                            <span class="labelauty-unchecked-image"></span>
                            <span class="labelauty-unchecked">Activation</span>
                            <span class="labelauty-checked-image"></span>
                            <span class="labelauty-checked">Activation</span>
                        </label>
                    </div>
                    <div class="form-group">
                        <input type="radio" class="to-labelauty labelauty" name="inputLableautyRadio" value="Commissions"
                               data-plugin="labelauty" id="labelauty-486480" style="display: none;">
                        <label for="labelauty-486480">
                            <span class="labelauty-unchecked-image"></span>
                            <span class="labelauty-unchecked">Commissions</span>
                            <span class="labelauty-checked-image"></span>
                            <span class="labelauty-checked">Commissions</span>
                        </label>
                    </div>
                    <div class="form-group">
                        <input type="radio" class="to-labelauty labelauty" name="inputLableautyRadio" value="Auctions"
                               data-plugin="labelauty" id="labelauty-684702" style="display: none;">
                        <label for="labelauty-684702">
                            <span class="labelauty-unchecked-image"></span>
                            <span class="labelauty-unchecked">Auctions</span>
                            <span class="labelauty-checked-image"></span>
                            <span class="labelauty-checked">Auctions</span>
                        </label>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="example">
                    <div class="form-group"> selecciona una imagen</div>
                    {{--<div class="form-group">
                        <div class="input-group ">
                            <span class="input-group-addon">$</span>
                            <input type="text" class="form-control" placeholder="">
                            <span class="input-group-addon">.00</span>
                        </div>
                    </div>--}}
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
                    <div class="form-group form-material">
                        <label class="col-sm-3 control-label">Currency</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="inputCurrency" name="cantidad" data-plugin="formatter" data-pattern="$[[999]],[[999]],[[999]].[[99]]">
                            <p class="help-block">$999,999,999.99</p>
                        </div>
                    </div>
                    <button type="submit" id="deposito" name="deposito" class="btn btn-primary btn-block waves-effect waves-light">Deposits</button>
                </div>
            </div>
            {!! Form::close() !!}
        </div>


            <div id="list" class="col-md-12 col-md-offset-0 panel">
                <!-- Panel Sortable -->
                <div class="panel">
                    <header class="panel-heading">
                        <h3 class="panel-title">
                            Deposits
                <span class="panel-desc">
                  Default appearance (with optional sortable-switch &lt;select&gt;)
                </span>
                        </h3>
                    </header>
                    <div class="panel-body">
                        <table class="tablesaw table-bordered table-hover" data-tablesaw-mode="swipe" data-tablesaw-sortable="" data-tablesaw-sortable-switch="" style="width: 100%">
                            <thead>
                            <tr>
                                <th data-tablesaw-sortable-col="" data-tablesaw-sortable-default-col="">Rank</th>
                                <th data-tablesaw-sortable-col="">Movie Title</th>
                                <th id="third" data-tablesaw-sortable-col="">Year</th>
                                <th data-tablesaw-sortable-col="">
                                    <abbr title="Rotten Tomato Rating">Rating</abbr>
                                </th>
                                <th>Reviews</th>
                                <th data-tablesaw-sortable-col="" data-sortable-numeric="">Box Office</th>
                            </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th>1</th>
                                    <td><a href="javascript:void(0)" data-rel="external">Boys Don't Cry</a></td>
                                    <td>2013</td>
                                    <td>100%</td>
                                    <td>74</td>
                                    <td>$2M</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- End Panel Sortable -->
            </div>

    </div>


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
    {!! HTML::script('vendor/formvalidation/formValidation.min.js') !!}
    {!! HTML::script('vendor/formvalidation/framework/bootstrap.min.js') !!}
    {!! HTML::script('validator.js') !!}
    {!! HTML::script('vendor/formatter-js/jquery.formatter.js') !!}
    {!! HTML::script('js/components/formatter-js.js') !!}
@endsection
