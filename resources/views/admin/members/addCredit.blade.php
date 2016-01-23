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
    <style>
    </style>
@endsection

@section('content')
    <div class="content" style="padding: 20px;">
        <div class="row">
            <div class="page-header">
                <h1 class="page-title">Credits</h1>
                <ol class="breadcrumb">
                    <li><a href="../index.html">Home</a></li>
                    <li><a href="javascript:void(0)">Admin</a></li>
                    <li class="active">Add Credit</li>
                </ol>
            </div>
            <div class="col-md-6">
                <div class="panel clearfix" style="padding: 10px">
                    <div class="col-md-12">
                        <!-- Example Basic Constraints -->
                        <div class="example-wrap margin-md-0">
                            <h4 class="example-title">Add Credits</h4>
                            <div class="example">
                                <form class="form-horizontal fv-form fv-form-bootstrap" id="exampleConstraintsForm"
                                      novalidate="novalidate" autocomplete="off">
                                    <button class="fv-hidden-submit" style="width: 0px; height: 0px; display: none;"
                                            type="submit"></button>
                                    <div class="form-group form-material">
                                        <label class="col-sm-3 control-label">Required</label>
                                        <div class="col-sm-9">
                                            <input name="requiredInput" class="form-control" type="text"
                                                   data-fv-notempty-message="This is required" data-fv-notempty="true"
                                                   data-fv-field="requiredInput">
                                            <small class="help-block" style="display: none;"
                                                   data-fv-validator="notEmpty" data-fv-for="requiredInput"
                                                   data-fv-result="NOT_VALIDATED">This is required
                                            </small>
                                        </div>
                                    </div>
                                    <div class="form-group form-material">
                                        <label class="col-sm-3 control-label">Wallet</label>
                                        <div class="col-sm-9">
                                            <select name="requiredSelect" class="form-control" data-fv-notempty="true"
                                                    data-fv-field="requiredSelect">
                                                <option value="">Please choose</option>
                                                <option value="foo">Activation</option>
                                                <option value="bar">Commission</option>
                                                <option value="bar">Action</option>
                                                <option value="bar">Utilities</option>
                                            </select>
                                            <small class="help-block" style="display: none;"
                                                   data-fv-validator="notEmpty" data-fv-for="requiredSelect"
                                                   data-fv-result="NOT_VALIDATED">Please enter a value
                                            </small>
                                        </div>
                                    </div>
                                    <div class="form-group form-material">
                                        <label class="col-sm-3 control-label">Amount</label>
                                        <div class="col-sm-9">
                                            <input name="requiredInput" class="form-control" type="text"
                                                   data-fv-notempty-message="This is required" data-fv-notempty="true"
                                                   data-fv-field="requiredInput">
                                            <small class="help-block" style="display: none;"
                                                   data-fv-validator="notEmpty" data-fv-for="requiredInput"
                                                   data-fv-result="NOT_VALIDATED">This is required
                                            </small>
                                        </div>
                                    </div>
                                    <div class="form-group form-material">
                                        <div class="col-sm-9">
                                            <button class="btn btn-primary waves-effect waves-light"
                                                    id="validateButton1" type="submit">Enviar
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- End Example Basic Constraints -->
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="panel clearfix" style="padding: 10px">
                    <div class="col-md-12">
                        <div class="example-wrap margin-md-0">
                            <h4 class="example-title">Last Movements</h4>
                            <div class="example">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection

    @section('script')

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

    <!-- Scripts -->
    <script src="/js/components/jquery-labelauty.js"></script>
    <script src="/js/components/bootstrap-select.js"></script>
    <script src="/js/components/bootstrap-maxlength.js"></script>

@endsection