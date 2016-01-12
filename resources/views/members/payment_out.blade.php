@extends('layouts.main')
@section('head_scripts')
    <link rel="stylesheet" href="/vendor/slidepanel/slidePanel.css">
    <link rel="stylesheet" href="/vendor/jquery-labelauty/jquery-labelauty.css">
    <link rel="stylesheet" href="/css/bootstrap-extend.min.css">
    <link rel="stylesheet" href="/vendor/footable/footable.css">
@endsection

@section('content')
    <div class="page-content">
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
                                <div id="precio" class="" style="margin:15px;padding:20px 0 0 60px;">
                                    <span style="font-weight: bold; color: black ">$ {!! $new_user->product->price !!}</span>
                                </div>
                            </div>
                            <div id="msj" class="col-md-7 col-md-offset-0" style="float: right; height: 50%">
                                <div style="margin: auto; height: 100px">
                                    <h3>ups!</h3>
                                <span>
                                    you do not have the necessary funds
                                </span><br>
                                <span>
                                    We invite you to make a deposit
                                </span>
                                </div>
                                <div>
                                    <div style="float: right; margin-right: 50px">
                                        {{--<button class="btn btn-info waves-effect waves-light" style="width:110px; margin: 20px" type="button">
                                            <a href="#" onclick="window.location='/wallets/deposits' " style="width: 100%;height: 100%;color: white">accept</a>
                                        </button>--}}
                                        <button id="refil" class="btn btn-info waves-effect waves-light"
                                                style="width:110px; margin: 20px" type="button">
                                            accept
                                        </button>
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
    <script>
        var btn = $("#refil");
        btn.click(function () {
            console.log('click en el boton');
            window.location.href = '/wallets/deposits';
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