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
                                {{--<form class="form-horizontal fv-form fv-form-bootstrap" id="exampleConstraintsForm"
                                      novalidate="novalidate" autocomplete="off">--}}
                                {{--{!! Form::open(['route'=>'admin.members.addcredit','method'=>'post','id'=>'addcredit','class'=>'form-horizontal fv-form fv-form-bootstrap'] ) !!}
                                @if( Session::has('errors') )
                                    <div style="text-align: center; color: red;"> {!! $registro = 'error'  !!}: check the fields</div>
                                @endif
                                <button class="fv-hidden-submit" style="width: 0px; height: 0px; display: none;"
                                        type="submit"></button>
                                <div class="form-group form-material">
                                    <label class="col-sm-3 control-label">User:</label>
                                    <div class="col-sm-9">
                                        <input name="user" class="form-control" type="text" value="{!! $user !!}"
                                               data-fv-notempty-message="This is required" data-fv-notempty="true"
                                               data-fv-field="requiredInput">
                                        <small class="help-block" style="display: none;"
                                               data-fv-validator="notEmpty" data-fv-for="requiredInput"
                                               data-fv-result="NOT_VALIDATED">This is required
                                        </small>
                                    </div>
                                    @foreach($errors->get('user') as $m)
                                        <div style="text-align: center; color: red;">{!! $m !!}</div>
                                    @endforeach
                                </div>
                                <div class="form-group form-material">
                                    <label class="col-sm-3 control-label">Wallet</label>
                                    <div class="col-sm-9">
                                        <select name="wallet" class="form-control" data-fv-notempty="true"
                                                data-fv-field="requiredSelect">
                                            <option value="">Please choose</option>
                                            <option value="activation">Activation</option>
                                            <option value="commission">Commission</option>
                                            <option value="action">Action</option>
                                            <option value="utilities">Utilities</option>
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
                                        <input name="amount" class="form-control" type="text"
                                               data-fv-notempty-message="This is required" data-fv-notempty="true"
                                               data-fv-field="requiredInput">
                                        <small class="help-block" style="display: none;"
                                               data-fv-validator="notEmpty" data-fv-for="requiredInput"
                                               data-fv-result="NOT_VALIDATED">This is required
                                        </small>
                                    </div>
                                </div>
                                <div class="form-group form-material">
                                    <div class="col-sm-9" style="float: right">
                                        <button class="btn btn-primary waves-effect waves-light" style="float: right; width: 150px;"
                                                id="validateButton1" type="submit">add credit
                                        </button>
                                    </div>
                                </div>
                                {!! Form::close() !!}--}}
                                {{--</form>--}}
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
                                <table class="table  table-hover toggle-circle footable-loaded footable no-paging default"
                                       id="exampleFootableFiltering">
                                    <thead>
                                    <tr>
                                        <th class="footable-visible footable-sortable">User</th>
                                        <th class="footable-visible footable-sortable">Wallet</th>
                                        <th class="footable-visible footable-sortable">Amount</th>
                                        <th class="footable-visible footable-sortable">Date</th>
                                    </tr>
                                    </thead>

                                    <tbody>
                                    <tr class="footable-odd" style="display: table-row;">
                                        <td class="footable-visible">Woldt</td>
                                        <td class="footable-visible">Business</td>
                                        <td class="footable-visible">5454545</td>
                                        <td class="footable-visible">17 Oct 2014</td>
                                    </tr>
                                    </tbody>
                                    {{--<tfoot>--}}
                                    {{--<tr>--}}
                                        {{--<td class="footable-visible" colspan="5">--}}
                                            {{--<div class="text-right">--}}
                                                {{--<ul class="pagination">--}}
                                                    {{--<li class="footable-page-arrow disabled"><a href="#first"--}}
                                                                                                {{--data-page="first">«</a>--}}
                                                    {{--<li class="footable-page-arrow disabled"><a href="#prev"--}}
                                                                                                {{--data-page="prev">‹</a>--}}
                                                    {{--</li>--}}
                                                    {{--<li class="footable-page active"><a href="#" data-page="0">1</a>--}}
                                                    {{--</li>--}}
                                                    {{--<li class="footable-page-arrow disabled"><a href="#next"--}}
                                                                                                {{--data-page="next">›</a>--}}
                                                    {{--</li>--}}
                                                    {{--<li class="footable-page-arrow disabled"><a href="#last"--}}
                                                                                                {{--data-page="last">»</a>--}}
                                                    {{--</li>--}}
                                                {{--</ul>--}}
                                            {{--</div>--}}
                                        {{--</td>--}}
                                    {{--</tr>--}}
                                    {{--</tfoot>--}}
                                </table>
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
