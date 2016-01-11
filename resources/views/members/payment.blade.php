@extends('layouts.main')
@section('head_scripts')
    <link rel="stylesheet" href="/vendor/slidepanel/slidePanel.css">
    <link rel="stylesheet" href="/vendor/jquery-labelauty/jquery-labelauty.css">
    <link rel="stylesheet" href="/css/bootstrap-extend.min.css">
    <link rel="stylesheet" href="/vendor/footable/footable.css">
    <link rel="stylesheet" href="/assets/examples/css/forms/masks.css">
@endsection

@section('content')
    {{--<div>
        <div id="wrapper-main" class="col-md-10 col-md-offset-1">
            <div id="producto" class="col-md-5 col-md-offset-0" style="float: left">
                <img src="/assets/images/logos/SILVER_PACK.png" alt="">
                <div id="precio"> $______.00</div>
            </div>
            <div id="msj" class="col-md-7 col-md-offset-0" style="float: right">
                <span>
                    estas a paso, paga el paquete de < name > y comienza disfrutar de los beneficios
                </span>
            </div>
        </div>
    </div>--}}

    <div class="page animsition" style="animation-duration: 800ms; opacity: 1;">
        <ol class="breadcrumb">
            <li><a href="javascript:void(0)">Home</a></li>
            <li><a href="javascript:void(0)">Members</a></li>
            <li class="active">Register</li>
        </ol>

        <div class="page-content">
            <div class="panel">
                {{--<div class="panel-heading">
                    <h3 class="panel-title">DEMO CONTENT</h3>
                </div>--}}
                <div class="panel-body">
                    <div id="wrapper-main" class="col-md-10 col-md-offset-0">
                        <div id="producto" class="col-md-5 col-md-offset-0" style="float: left">
                            <img src="/assets/images/logos/{!! $new_user->product->image['url'] !!}" alt="">
                            <div id="precio" class="" style="margin:15px;padding-left:40px; "> ${!! $new_user->product->price !!}</div>
                        </div>
                        <div id="msj" class="col-md-7 col-md-offset-0" style="float: right; height: 50%">
                            <div style="margin: auto; height: 100px">
                                <h3>ahead!</h3>
                                <span>
                                    You're just one step, {!! $new_user->name !!} pay package and start enjoying the benefits
                                </span>
                            </div>
                            <div>
                                <div style="float: right; margin-right: 50px">
                                    <button id="cancel" class="btn btn-info waves-effect waves-light"
                                            style="width:110px; margin: 20px" type="button">
                                        Cancel
                                    </button>
                                    {{--<a href="#" onclick="window.location='/members/register' " style="width: 100%;height: 100%;color: white">--}}
                                    {{--{{ Form::open() }}--}}
                                    <button class="btn btn-info waves-effect waves-light" style="width: 110px"
                                            type="submit">
                                        Pay
                                    </button>
                                    {{--{{ Form::close() }}--}}
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
    <script>
        var btn = $("#cancel");
        btn.click(function () {
            console.log('click en el boton');
            window.location.href = '/members/register';
        });
    </script>

    {!! HTML::script('vendor/footable/footable.all.min.js') !!}
    {{--script--}}
    {!! HTML::script('vendor/formvalidation/formValidation.min.js') !!}
    {!! HTML::script('vendor/formvalidation/framework/bootstrap.min.js') !!}
    {!! HTML::script('validator.js') !!}
    {!! HTML::script('vendor/formatter-js/jquery.formatter.js') !!}  {{--para la mascara--}}
    {!! HTML::script('js/components/formatter-js.js') !!}
    {!! HTML::script('assets/examples/js/tables/footable.js') !!}
@endsection