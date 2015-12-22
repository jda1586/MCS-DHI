@extends('layouts.main')
@section('head_scripts')
    <link rel="stylesheet" href="/assets/examples/css/pages/register-v2.css">
    <link rel="stylesheet" href="/vendor/slidepanel/slidePanel.css">
@endsection

@section('content')
    {{--col-md-6 col-md-offset-3--}}
    <div id="wrapper-main" class="col-md-10 col-md-offset-1" >
        <div id="titulo" class="col-md-10 " style="">
            <div>agregar</div>
            <div>sacar</div>
            <div></div>
            <div></div>
        </div>
        <div id="form" class="col-md-8 col-md-offset-2 " style="">
            <div class="form-group">
                <div class="input-group navbar-nav">
                    <span class="input-group-addon">$</span>
                    <input type="text" class="form-control" placeholder="">
                    <span class="input-group-addon">.00</span>
                </div>
            </div>
        </div>
        <div id="list">

        </div>
    </div>
@endsection