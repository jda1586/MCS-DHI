@extends('layouts.main')
@section('head_scripts')
    <link rel="stylesheet" href="/vendor/footable/footable.css">
    <style>
        .wallets {
            padding: 5px 10px 10px 10px;
            cursor: pointer;
        }

        .title {
            margin: 0;
        }

        .current {
            text-align: center;
            margin: 10px;
        }
    </style>
@endsection

@section('content')
    <div class="content">
        <div class="row">
            <div style="margin: 20px 0;">
                <div class="col-md-12">
                    <ol class="breadcrumb">
                        <li><a href="javascript:void(0)">Home</a></li>
                        <li><a href="javascript:void(0)">Tables</a></li>
                        <li class="active">FooTable</li>
                    </ol>
                    <div class="col-md-3" onclick="commissions()">
                        <div class="panel wallets"  id="commissionsBtn" style="background-color: #CED8F6">
                            <p>Commissions</p>
                            <div class="current">
                                <h3 class="title"> $ - 8545854</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3" onclick="activations()" >
                        <div class="panel wallets" id="activationsBtn">
                            <p>Activations</p>
                            <div class="current">
                                <h3 class="title"> $ - 8545854</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3" onclick="utilities()" >
                        <div class="panel wallets" id="utilitiesBtn">
                            <p>Utilities</p>
                            <div class="current">
                                <h3 class="title"> $ - 8545854</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3" onclick="auctions()" >
                        <div class="panel wallets" id="auctionsBtn">
                            <p>Auctions</p>
                            <div class="current">
                                <h3 class="title"> $ - 8545854</h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="col-md-6">
                        <div class="panel">
                            <div class="panel-heading">
                                <h3 class="panel-title">Add BitCoins Accounts</h3>
                            </div>
                            <div class="panel-body">
                                <form class="form-horizontal fv-form fv-form-bootstrap" id="exampleStandardForm"
                                      autocomplete="off" novalidate="novalidate">
                                    <button type="submit" class="fv-hidden-submit"
                                            style="display: none; width: 0px; height: 0px;"></button>
                                    <div class="form-group form-material">
                                        <label class="col-sm-3 control-label">Full name</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" name="standard_fullName"
                                                   data-fv-field="standard_fullName">
                                            <small class="help-block" data-fv-validator="notEmpty"
                                                   data-fv-for="standard_fullName" data-fv-result="NOT_VALIDATED"
                                                   style="display: none;">The full name is required and cannot be empty
                                            </small>
                                        </div>
                                    </div>
                                    <div class="form-group form-material">
                                        <label class="col-sm-3 control-label">Email</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" name="standard_email"
                                                   data-fv-field="standard_email">
                                            <small class="help-block" data-fv-validator="notEmpty"
                                                   data-fv-for="standard_email" data-fv-result="NOT_VALIDATED"
                                                   style="display: none;">The email address is required and cannot be
                                                empty
                                            </small>
                                            <small class="help-block" data-fv-validator="emailAddress"
                                                   data-fv-for="standard_email" data-fv-result="NOT_VALIDATED"
                                                   style="display: none;">The email address is not valid
                                            </small>
                                        </div>
                                    </div>
                                    <div class="text-right">
                                        <button type="submit" class="btn btn-primary waves-effect waves-light"
                                                id="validateButton2">Submit
                                        </button>
                                    </div>
                                </form>
                                <div class="example-wrap">
                                    <div class="example table-responsive">
                                        <table class="table table-bordered">
                                            <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>Acount</th>
                                                <th class="text-nowrap">Action</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td>Lunar probe project</td>
                                                <td>Lunar probe project</td>
                                                <td class="text-nowrap">
                                                    <button type="button"
                                                            class="btn btn-sm btn-icon btn-flat btn-default"
                                                            data-toggle="tooltip" data-original-title="Delete">
                                                        <i class="icon md-close" aria-hidden="true"></i>
                                                    </button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Lunar probe project</td>
                                                <td>Lunar probe project</td>
                                                <td class="text-nowrap">
                                                    <button type="button"
                                                            class="btn btn-sm btn-icon btn-flat btn-default"
                                                            data-toggle="tooltip" data-original-title="Delete">
                                                        <i class="icon md-close" aria-hidden="true"></i>
                                                    </button>
                                                </td>
                                            </tr>

                                            </tbody>
                                        </table>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-6" id="commissions">
                        <div class="panel">
                            <div class="panel-heading">
                                <h3 class="panel-title">Commissions</h3>
                            </div>
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
                    <div class="col-md-6" style="display:none;" id="activations">
                        <div class="panel">
                            <div class="panel-heading">
                                <h3 class="panel-title">Activations</h3>
                            </div>
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
                    <div class="col-md-6" style="display:none;" id="utilities">
                        <div class="panel">
                            <div class="panel-heading">
                                <h3 class="panel-title">Utilities</h3>
                            </div>
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
                    <div class="col-md-6" style="display: none" id="auctions">
                        <div class="panel">
                            <div class="panel-heading">
                                <h3 class="panel-title">Auctions</h3>
                            </div>
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
    </div>
@endsection

@section('script')
    <script src="/vendor/switchery/switchery.min.js"></script>
    <script src="/vendor/intro-js/intro.js"></script>
    {!! HTML::script('vendor/footable/footable.all.min.js') !!}{{--tablas--}}
    {!! HTML::script('assets/examples/js/tables/footable.js') !!}{{--tablas--}}
    <script type="text/javascript">

        function commissions()
        {
            document.getElementById("commissionsBtn").style.backgroundColor = "#CED8F6";
            document.getElementById("activationsBtn").style.backgroundColor = "white";
            document.getElementById("utilitiesBtn").style.backgroundColor = "white";
            document.getElementById("auctionsBtn").style.backgroundColor = "white";
            document.getElementById("commissions").style.display = "block";
            document.getElementById("activations").style.display = "none";
            document.getElementById("utilities").style.display = "none";
            document.getElementById("auctions").style.display = "none";
        }
        function activations()
        {
            document.getElementById("commissionsBtn").style.backgroundColor = "white";
            document.getElementById("activationsBtn").style.backgroundColor = "#CED8F6";
            document.getElementById("utilitiesBtn").style.backgroundColor = "white";
            document.getElementById("auctionsBtn").style.backgroundColor = "white";
            document.getElementById("commissions").style.display = "none";
            document.getElementById("activations").style.display = "block";
            document.getElementById("utilities").style.display = "none";
            document.getElementById("auctions").style.display = "none";
        }

        function utilities()
        {
            document.getElementById("commissionsBtn").style.backgroundColor = "white";
            document.getElementById("activationsBtn").style.backgroundColor = "white";
            document.getElementById("utilitiesBtn").style.backgroundColor = "#CED8F6";
            document.getElementById("auctionsBtn").style.backgroundColor = "white";
            document.getElementById("commissions").style.display = "none";
            document.getElementById("activations").style.display = "none";
            document.getElementById("utilities").style.display = "block";
            document.getElementById("auctions").style.display = "none";
        }

        function auctions()
        {
            document.getElementById("commissionsBtn").style.backgroundColor = "white";
            document.getElementById("activationsBtn").style.backgroundColor = "white";
            document.getElementById("utilitiesBtn").style.backgroundColor = "white";
            document.getElementById("auctionsBtn").style.backgroundColor = "#CED8F6";
            document.getElementById("commissions").style.display = "none";
            document.getElementById("activations").style.display = "none";
            document.getElementById("utilities").style.display = "none";
            document.getElementById("auctions").style.display = "block";
        }
    </script>

@endsection
