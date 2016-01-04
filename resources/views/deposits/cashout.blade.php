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
        .pasost{
            width: 100%; height: 100%; text-align: center; padding-top: 6px;
        }
        .wallets{
            width: 80%;
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
        {{-- PASOS PARA SACAR DINERO  --}}
                <div class="col-md-4 col-md-offset-0 paso1" >
                    <div class="panel pasost">
                        <span style="font-weight:500" >STEP 1: select wallet</span>
                        {{--<br>MAKE A TRANSFER TO THIS ACCOUNT BitCoins--}}
                    </div>
                </div>
                <div class="col-md-4 col-md-offset-0 paso2" >
                    <div class="panel pasost">
                        <span style="font-weight:500" >STEP 2: your acount </span><br>
                        paste the link of your account bitcoins
                    </div>
                </div>
                <div class="col-md-4 col-md-offset-0 paso3" >
                    <div class="panel pasost">
                        <span style="font-weight:500" >STEP 3: Waite</span><br>
                        Your deposit will be available from 24 to 72 hours
                    </div>
                </div>
        {{-- INICIO DEL FORM --}}
        <div id="form" class="col-md-12 col-md-offset-0 panel " style="">
            {!! Form::open(['route'=>'cashout','method'=>'post','id'=>'depositos'] ) !!}
            @if( Session::has('errors') )
                <div style="text-align: center; color: red;"> {!! $registro = 'error'  !!}: check fields</div>
            @endif
            <div class="col-md-4 col-md-offset-0    ">
                <div class="example">
                    <div class="form-group wallets" style="font-weight: 500" >Choice a wallet</div>
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
                <div class="example">
                    <div class="form-group">
                        <div class="input-group ">
                            <span class="input-group-addon">฿</span>
                            <input type="text" class="form-control" placeholder="your account bitcoins ">
                        </div>
                    </div>
                    {{--<div class="form-group">
                        <div class="input-group input-group-file">
                            <input id="namefile" type="text" class="form-control" placeholder="select a image" readonly="">
					    <span class="input-group-btn">
                            <span class="btn btn-primary btn-file waves-effect waves-light">
                                <i class="icon md-upload" aria-hidden="true"></i>
                                <input id="img" type="file" name="image" multiple="">
                            </span>
					    </span>
                        </div>
                    </div>--}}
                    {{--<div class="form-group form-material">
                        <label class="col-sm-3 control-label">Currency</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="inputCurrency" name="cantidad" data-plugin="formatter" data-pattern="$[[999]],[[999]],[[999]].[[99]]">
                            <p class="help-block">$999,999,999.99</p>
                        </div>
                    </div>--}}
                </div>
            </div>
            <div class="col-md-4" style="margin-top: 2%;padding-bottom: 1px;">
                <div class="example">
                    {{--<div class="form-group wallets" style="font-weight: 500" > </div>--}}
                    <div class="form-group">
                        <div class="input-group ">
                            <span class="input-group-addon">฿</span>
                            <input type="text" class="form-control" name="cantidad" placeholder="Currency ">
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
                        <table class="table table-bordered table-hover toggle-circle" id="exampleFootableFiltering">
                            <thead>
                            <tr>
                                <th data-toggle="true">First Name</th>
                                <th>Last Name</th>
                                <th data-hide="phone, tablet">Job Title</th>
                                <th data-hide="phone, tablet">DOB</th>
                                <th data-hide="phone, tablet">Status</th>
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
                                                <option value="disabled">Disabled</option>
                                                <option value="suspended">Suspended</option>
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
                            <tr>
                                <td>Shona</td>
                                <td>Woldt</td>
                                <td>Airline Transport Pilot</td>
                                <td>3 Oct 2015</td>
                                <td>
                                    <span class="label label-table label-success">Active</span>
                                </td>
                            </tr>
                            <tr>
                                <td>Lizzee</td>
                                <td>Goodlow</td>
                                <td>Technical Services Librarian</td>
                                <td>1 Nov 2014</td>
                                <td>
                                    <span class="label label-table label-danger">Suspended</span>
                                </td>
                            </tr>
                            <tr>
                                <td>Isidra</td>
                                <td>Boudreaux</td>
                                <td>Traffic Court Referee</td>
                                <td>22 Jun 2014</td>
                                <td>
                                    <span class="label label-table label-success">Active</span>
                                </td>
                            </tr>
                            <tr>
                                <td>Granville</td>
                                <td>Leonardo</td>
                                <td>Business Services Sales Representative</td>
                                <td>19 Apr 2013</td>
                                <td>
                                    <span class="label label-table label-danger">Suspended</span>
                                </td>
                            </tr>
                            <tr>
                                <td>Lauri</td>
                                <td>Hyland</td>
                                <td>Blackjack Supervisor</td>
                                <td>15 Nov 2014</td>
                                <td>
                                    <span class="label label-table label-danger">Suspended</span>
                                </td>
                            </tr>
                            <tr>
                                <td>Easer</td>
                                <td>Dragoo</td>
                                <td>Drywall Stripper</td>
                                <td>13 Dec 2014</td>
                                <td>
                                    <span class="label label-table label-success">Active</span>
                                </td>
                            </tr>
                            <tr>
                                <td>Maple</td>
                                <td>Halladay</td>
                                <td>Aviation Tactical Readiness Officer</td>
                                <td>30 Dec 2015</td>
                                <td>
                                    <span class="label label-table label-danger">Suspended</span>
                                </td>
                            </tr>
                            <tr>
                                <td>Maxine</td>
                                <td>Woldt</td>
                                <td>Business Services Sales Representative</td>
                                <td>17 Oct 2014</td>
                                <td>
                                    <span class="label label-table label-dark">Disabled</span>
                                </td>
                            </tr>
                            <tr>
                                <td>Lorraine</td>
                                <td>Mcgaughy</td>
                                <td>Hemodialysis Technician</td>
                                <td>11 Nov 2014</td>
                                <td>
                                    <span class="label label-table label-success">Active</span>
                                </td>
                            </tr>
                            <tr>
                                <td>Judi</td>
                                <td>Badgett</td>
                                <td>Electrical Lineworker</td>
                                <td>23 Jun 2013</td>
                                <td>
                                    <span class="label label-table label-success">Active</span>
                                </td>
                            </tr>
                            <tr>
                                <td>Granville</td>
                                <td>Leonardo</td>
                                <td>Business Services Sales Representative</td>
                                <td>19 Apr 2013</td>
                                <td>
                                    <span class="label label-table label-danger">Suspended</span>
                                </td>
                            </tr>
                            <tr>
                                <td>Lauri</td>
                                <td>Hyland</td>
                                <td>Blackjack Supervisor</td>
                                <td>15 Nov 2014</td>
                                <td>
                                    <span class="label label-table label-danger">Suspended</span>
                                </td>
                            </tr>
                            <tr>
                                <td>Easer</td>
                                <td>Dragoo</td>
                                <td>Drywall Stripper</td>
                                <td>13 Dec 2014</td>
                                <td>
                                    <span class="label label-table label-success">Active</span>
                                </td>
                            </tr>
                            <tr>
                                <td>Maple</td>
                                <td>Halladay</td>
                                <td>Aviation Tactical Readiness Officer</td>
                                <td>30 Dec 2015</td>
                                <td>
                                    <span class="label label-table label-danger">Suspended</span>
                                </td>
                            </tr>
                            <tr>
                                <td>Maxine</td>
                                <td>Woldt</td>
                                <td>Business Services Sales Representative</td>
                                <td>17 Oct 2014</td>
                                <td>
                                    <span class="label label-table label-dark">Disabled</span>
                                </td>
                            </tr>
                            <tr>
                                <td>Lorraine</td>
                                <td>Mcgaughy</td>
                                <td>Hemodialysis Technician</td>
                                <td>11 Nov 2014</td>
                                <td>
                                    <span class="label label-table label-success">Active</span>
                                </td>
                            </tr>
                            <tr>
                                <td>Judi</td>
                                <td>Badgett</td>
                                <td>Electrical Lineworker</td>
                                <td>23 Jun 2013</td>
                                <td>
                                    <span class="label label-table label-success">Active</span>
                                </td>
                            </tr>
                            <tr>
                                <td>Granville</td>
                                <td>Leonardo</td>
                                <td>Business Services Sales Representative</td>
                                <td>19 Apr 2013</td>
                                <td>
                                    <span class="label label-table label-danger">Suspended</span>
                                </td>
                            </tr>
                            <tr>
                                <td>Lauri</td>
                                <td>Hyland</td>
                                <td>Blackjack Supervisor</td>
                                <td>15 Nov 2014</td>
                                <td>
                                    <span class="label label-table label-danger">Suspended</span>
                                </td>
                            </tr>
                            <tr>
                                <td>Easer</td>
                                <td>Dragoo</td>
                                <td>Drywall Stripper</td>
                                <td>13 Dec 2014</td>
                                <td>
                                    <span class="label label-table label-success">Active</span>
                                </td>
                            </tr>
                            <tr>
                                <td>Maple</td>
                                <td>Halladay</td>
                                <td>Aviation Tactical Readiness Officer</td>
                                <td>30 Dec 2015</td>
                                <td>
                                    <span class="label label-table label-danger">Suspended</span>
                                </td>
                            </tr>
                            <tr>
                                <td>Maxine</td>
                                <td>Woldt</td>
                                <td>Business Services Sales Representative</td>
                                <td>17 Oct 2014</td>
                                <td>
                                    <span class="label label-table label-dark">Disabled</span>
                                </td>
                            </tr>
                            <tr>
                                <td>Easer</td>
                                <td>Dragoo</td>
                                <td>Drywall Stripper</td>
                                <td>13 Dec 2014</td>
                                <td>
                                    <span class="label label-table label-success">Active</span>
                                </td>
                            </tr>
                            <tr>
                                <td>Maple</td>
                                <td>Halladay</td>
                                <td>Aviation Tactical Readiness Officer</td>
                                <td>30 Dec 2015</td>
                                <td>
                                    <span class="label label-table label-danger">Suspended</span>
                                </td>
                            </tr>
                            <tr>
                                <td>Maxine</td>
                                <td>Woldt</td>
                                <td>Business Services Sales Representative</td>
                                <td>17 Oct 2014</td>
                                <td>
                                    <span class="label label-table label-dark">Disabled</span>
                                </td>
                            </tr>
                            <tr>
                                <td>Easer</td>
                                <td>Dragoo</td>
                                <td>Drywall Stripper</td>
                                <td>13 Dec 2014</td>
                                <td>
                                    <span class="label label-table label-success">Active</span>
                                </td>
                            </tr>
                            <tr>
                                <td>Maple</td>
                                <td>Halladay</td>
                                <td>Aviation Tactical Readiness Officer</td>
                                <td>30 Dec 2015</td>
                                <td>
                                    <span class="label label-table label-danger">Suspended</span>
                                </td>
                            </tr>
                            <tr>
                                <td>Maxine</td>
                                <td>Woldt</td>
                                <td>Business Services Sales Representative</td>
                                <td>17 Oct 2014</td>
                                <td>
                                    <span class="label label-table label-dark">Disabled</span>
                                </td>
                            </tr>
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
    {!! HTML::script('vendor/footable/footable.all.min.js') !!}{{--tablas--}}
    {!! HTML::script('assets/examples/js/tables/footable.js') !!}{{--tablas--}}
    {!! HTML::script('vendor/formvalidation/formValidation.min.js') !!}
    {!! HTML::script('validator.js') !!}
    {!! HTML::script('vendor/formatter-js/jquery.formatter.js') !!}
    {!! HTML::script('js/components/formatter-js.js') !!}
@endsection
