@extends('layouts.main')
@section('head_scripts')
    <link rel="stylesheet" href="/vendor/slidepanel/slidePanel.css">
    <link rel="stylesheet" href="/vendor/jquery-labelauty/jquery-labelauty.css">
    <link rel="stylesheet" href="/css/bootstrap-extend.min.css">
@endsection

@section('content')
    {{--col-md-6 col-md-offset-3--}}
    <div id="wrapper-main" class="col-md-10 col-md-offset-1">
        <div id="titulo" class="col-md-10 col-md-offset-1 " style="">
            <div class="example">
                <div class="col-md-3 col-md-offset-1 panel">sacar</div>
                <div class="col-md-3 col-md-offset-1 panel">sacar</div>
                <div class="col-md-3 col-md-offset-1 panel">sacar</div>
            </div>

        </div>
        <div id="form" class="col-md-8 col-md-offset-2 panel " style="">
            <div class="col-md-4 col-md-offset-1    ">
                <div class="example">
                    <div class="form-group">
                        <input type="radio" class="to-labelauty labelauty" name="inputLableautyRadio"
                               data-plugin="labelauty" checked="" id="labelauty-774694" style="display: none;">
                        <label for="labelauty-774694">
                            <span class="labelauty-unchecked-image"></span>
                            <span class="labelauty-unchecked">Activation</span>
                            <span class="labelauty-checked-image"></span>
                            <span class="labelauty-checked">Activation</span>
                        </label>
                    </div>
                    <div class="form-group">
                        <input type="radio" class="to-labelauty labelauty" name="inputLableautyRadio"
                               data-plugin="labelauty" id="labelauty-486480" style="display: none;">
                        <label for="labelauty-486480">
                            <span class="labelauty-unchecked-image"></span>
                            <span class="labelauty-unchecked">Commissions</span>
                            <span class="labelauty-checked-image"></span>
                            <span class="labelauty-checked">Commissions</span>
                        </label>
                    </div>
                    <div class="form-group">
                        <input type="radio" class="to-labelauty labelauty" name="inputLableautyRadio"
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
                    <div class="form-group">
                        <div class="input-group ">
                            <span class="input-group-addon">$</span>
                            <input type="text" class="form-control" placeholder="">
                            <span class="input-group-addon">.00</span>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group input-group-file">
                            <input type="text" class="form-control" readonly="">
					    <span class="input-group-btn">
                            <span class="btn btn-primary btn-file waves-effect waves-light">
                                <i class="icon md-upload" aria-hidden="true"></i>
                                <input type="file" name="" multiple="">
                            </span>
					    </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="list">

        </div>
    </div>
@endsection