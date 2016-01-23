@extends('layouts.main')
@section('head_scripts')
    <link rel="stylesheet" href="/vendor/footable/footable.css">
    <style>
        .wallets {
            cursor: pointer;
        }

        .shadow {
            -webkit-box-shadow: 4px 3px 17px 1px rgba(0, 0, 0, 0.75);
            -moz-box-shadow: 4px 3px 17px 1px rgba(0, 0, 0, 0.75);
            box-shadow: 4px 3px 17px 1px rgba(0, 0, 0, 0.75);
        }
    </style>
@endsection

@section('content')
    <div class="content">
        <div class="row">
            <div style="margin: 20px 0;">
                <div class="col-md-12">
                    <div class="page-header">
                        <h1 class="page-title">Wallets</h1>
                        <ol class="breadcrumb">
                            <li><a href="../index.html">Home</a></li>
                            <li class="active">Wallets</li>
                        </ol>
                    </div>
                    <div class="col-md-3" onclick="commissions()">
                        <div class="widget wallets shadow" id="commissionsBtn">
                            <div class="widget-content padding-30 bg-light-blue-a400" id="commissionsBtn">
                                <div class="widget-watermark darker font-size-60 margin-15"><i
                                            class="icon md-mall" aria-hidden="true"></i></div>
                                <div class="counter counter-md counter-inverse text-left">
                                    <div class="counter-number-group">
                                        <span class="counter-number">$ {{ number_format($wallets->comission,2,'.',',') }}</span>
                                        <span class="counter-number-related text-capitalize">Commission</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3" onclick="activations()">
                        <div class="widget wallets" id="activationsBtn">
                            <div class="widget-content padding-30 bg-blue-900" id="activationsBtn">
                                <div class="widget-watermark darker font-size-60 margin-15"><i class="icon md-check"
                                                                                               aria-hidden="true"></i>
                                </div>
                                <div class="counter counter-md counter-inverse text-left">
                                    <div class="counter-number-group">
                                        <span class="counter-number">$ {{ number_format($wallets->activation,2,'.',',') }}</span>
                                        <br>
                                        <span class="counter-number-related text-capitalize">Activations</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3" onclick="utilities()">
                        <div class="widget wallets" id="utilitiesBtn">
                            <div class="widget-content padding-30 bg-cyan-700" id="utilitiesBtn">
                                <div class="widget-watermark darker font-size-60 margin-15"><i
                                            class="icon md-male-female" aria-hidden="true"></i></div>
                                <div class="counter counter-md counter-inverse text-left">
                                    <div class="counter-number-group">
                                        <span class="counter-number">$ {{ number_format($wallets->utilities,2,'.',',') }}</span>
                                        <br>
                                        <span class="counter-number-related text-capitalize">utilities</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3" onclick="auctions()">
                        <div class="widget wallets" id="auctionsBtn">
                            <div class="widget-content padding-30 bg-indigo-a400" id="auctionsBtn">
                                <div class="widget-watermark darker font-size-60 margin-15"><i class="icon md-star"
                                                                                               aria-hidden="true"></i>
                                </div>
                                <div class="counter counter-md counter-inverse text-left">
                                    <div class="counter-number-group">
                                        <span class="counter-number">$ {{ number_format($wallets->auction,2,'.',',') }}</span>
                                        <br>
                                        <span class="counter-number-related text-capitalize">Auctions</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="col-md-6">
                        <div class="panel">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="panel-title-icon icon md-comments"
                                                           aria-hidden="true"></i>Add BitCoins Accounts</h3>
                            </div>
                            <div class="panel-body">
                                <form class="form-horizontal fv-form fv-form-bootstrap" id="exampleStandardForm"
                                      autocomplete="off" novalidate="novalidate">
                                    <button type="submit" class="fv-hidden-submit"
                                            style="display: none; width: 0px; height: 0px;"></button>
                                    <div class="form-group form-material">
                                        <label class="col-sm-3 control-label">Name Account</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" name="account"
                                                   data-fv-field="account">
                                            <small class="help-block" data-fv-validator="notEmpty"
                                                   data-fv-for="account" data-fv-result="NOT_VALIDATED"
                                                   style="display: none;">The full name is required and cannot be empty
                                            </small>
                                        </div>
                                    </div>
                                    <div class="form-group form-material">
                                        <label class="col-sm-3 control-label">Account Number</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" name="number"
                                                   data-fv-field="number">
                                            <small class="help-block" data-fv-validator="notEmpty"
                                                   data-fv-for="number" data-fv-result="NOT_VALIDATED"
                                                   style="display: none;">The account number is required and cannot be
                                                empty
                                            </small>
                                        </div>
                                    </div>
                                    <div class="form-group form-material">
                                        <label class="col-sm-3 control-label">Token Number</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" name="token"
                                                   data-fv-field="token">
                                            <small class="help-block" data-fv-validator="notEmpty"
                                                   data-fv-for="token" data-fv-result="NOT_VALIDATED"
                                                   style="display: none;">The account number is required and cannot be
                                                empty
                                            </small>
                                        </div>
                                    </div>
                                    <div class="text-right">
                                        <button type="button" class="btn btn-primary waves-effect waves-light"
                                                id="validateButton1">Token
                                        </button>
                                        <button type="submit" class="btn btn-primary waves-effect waves-light"
                                                id="validateButton2">Submit
                                        </button>
                                    </div>
                                </form>
                                <div class="example-wrap">
                                    <div class="example table-responsive">
                                        <table class="table">
                                            <thead>
                                            <tr>
                                                <th width="80%">Name</th>
                                                <th class="text-nowrap">Action</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($bitcoin_accounts as $account)
                                                <tr>
                                                    <td>{{ $account->name }}</td>
                                                    <td class="text-nowrap" width="50px;">
                                                        <button type="button"
                                                                class="btn btn-sm btn-icon btn-flat btn-default"
                                                                data-toggle="tooltip" data-original-title="Delete">
                                                            <i class="icon md-close" aria-hidden="true"></i>
                                                        </button>
                                                    </td>
                                                </tr>
                                            @endforeach
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
                                <h3 class="panel-title"><i class="panel-title-icon icon md-mall"
                                                           aria-hidden="true"></i>Commissions Report</h3>
                            </div>
                            <div class="panel-body">
                                <div class="example-wrap">
                                    <div class="example table-responsive">
                                        <table class="table">
                                            <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Description</th>
                                                <th>Amount</th>
                                                <th>Date</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($commission_movements as $movement)
                                            {!! \DHI\Libraries\Wallets\MovementHelper::getMinRow($movement) !!}
                                            @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                    <a href="javascript:void(0);">See all movements</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6" style="display:none;" id="activations">
                        <div class="panel">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="panel-title-icon icon md-check"
                                                           aria-hidden="true"></i>Activations Report</h3>
                            </div>
                            <div class="panel-body">
                                <div class="example-wrap">
                                    <div class="example table-responsive">
                                        <table class="table">
                                            <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Description</th>
                                                <th>Amount</th>
                                                <th>Date</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($activation_movements as $movement)
                                            {!! \DHI\Libraries\Wallets\MovementHelper::getMinRow($movement) !!}
                                            @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                    <a href="javascript:void(0);">See all movements</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6" style="display:none;" id="utilities">
                        <div class="panel">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="panel-title-icon icon md-male-female"
                                                           aria-hidden="true"></i>Utilities Report</h3>
                            </div>
                            <div class="panel-body">
                                <div class="example-wrap">
                                    <div class="example table-responsive">
                                        <table class="table">
                                            <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Description</th>
                                                <th>Amount</th>
                                                <th>Date</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($utilities_movements as $movement)
                                            {!! \DHI\Libraries\Wallets\MovementHelper::getMinRow($movement) !!}
                                            @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                    <a href="javascript:void(0);">See all movements</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6" style="display: none" id="auctions">
                        <div class="panel">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="panel-title-icon icon md-star"
                                                           aria-hidden="true"></i>Auctions Report</h3>
                            </div>
                            <div class="panel-body">
                                <div class="example-wrap">
                                    <div class="example table-responsive">
                                        <table class="table">
                                            <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Description</th>
                                                <th>Amount</th>
                                                <th>Date</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($auction_movements as $movement)
                                            {!! \DHI\Libraries\Wallets\MovementHelper::getMinRow($movement) !!}
                                            @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                    <a href="javascript:void(0);">See all movements</a>
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

        function commissions() {
            document.getElementById("commissionsBtn").className = "widget wallets shadow";
            document.getElementById("activationsBtn").className = "widget wallets";
            document.getElementById("utilitiesBtn").className = "widget wallets";
            document.getElementById("auctionsBtn").className = "widget wallets";
            document.getElementById("commissions").style.display = "block";
            document.getElementById("activations").style.display = "none";
            document.getElementById("utilities").style.display = "none";
            document.getElementById("auctions").style.display = "none";
        }
        function activations() {
            document.getElementById("commissionsBtn").className = "widget wallets";
            document.getElementById("activationsBtn").className = "widget wallets shadow";
            document.getElementById("utilitiesBtn").className = "widget wallets";
            document.getElementById("auctionsBtn").className = "widget wallets";
            document.getElementById("commissions").style.display = "none";
            document.getElementById("activations").style.display = "block";
            document.getElementById("utilities").style.display = "none";
            document.getElementById("auctions").style.display = "none";
        }

        function utilities() {
            document.getElementById("commissionsBtn").className = "widget wallets";
            document.getElementById("activationsBtn").className = "widget wallets";
            document.getElementById("utilitiesBtn").className = "widget wallets shadow";
            document.getElementById("auctionsBtn").className = "widget wallets";
            document.getElementById("commissions").style.display = "none";
            document.getElementById("activations").style.display = "none";
            document.getElementById("utilities").style.display = "block";
            document.getElementById("auctions").style.display = "none";
        }

        function auctions() {
            document.getElementById("commissionsBtn").className = "widget wallets";
            document.getElementById("activationsBtn").className = "widget wallets";
            document.getElementById("utilitiesBtn").className = "widget wallets";
            document.getElementById("auctionsBtn").className = "widget wallets shadow";
            document.getElementById("commissions").style.display = "none";
            document.getElementById("activations").style.display = "none";
            document.getElementById("utilities").style.display = "none";
            document.getElementById("auctions").style.display = "block";
        }
    </script>

@endsection
