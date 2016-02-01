@extends('layouts.main')
@section('head_scripts')
    <link rel="stylesheet" href="/vendor/slidepanel/slidePanel.css">
    <link rel="stylesheet" href="/vendor/jquery-labelauty/jquery-labelauty.css">
    <link rel="stylesheet" href="/css/bootstrap-extend.min.css">
    <link rel="stylesheet" href="/css/bootstrap-tokenfield.min.css">
    <link rel="stylesheet" href="/css/bootstrap-select.min.css">
    <link rel="stylesheet" href="/vendor/footable/footable.css">
    <style>
        .p {
            margin: 0;;
        }
    </style>
@endsection

@section('content')
    <div class="content top-buffer">
        <div class="page-header">
            <h1 class="page-title">Item</h1>
            <ol class="breadcrumb">
                <li><a href="#">Home</a></li>
                <li><a href="#">Admin</a></li>
                <li class="active">Item</li>
            </ol>
        </div>
        <div class="container panel">
            <div class="row">
                <div class="col-md-4" style="padding: 25px 10px 50px 10px; text-align: center; position: relative;">
                    <img src="/assets/images/logos/dream_house_200.png" alt="Responsive image">
                    <div style="position: absolute; bottom: 20px; left: 20px;">
                        <button type="button"
                                class="btn btn-floating btn-success btn-sm waves-effect waves-float waves-light"><i
                                    class="icon md-edit" aria-hidden="true"></i></button>
                    </div>
                </div>
                <div class="col-md-8">
                    <div style="padding: 25px 15px; position: relative;">
                        <p class="p">SKU: Ejemplo</p>
                        <p class="p">Name: Ejemplo</p>
                        <p class="p">Description: fdsghsdgndzhgn</p>
                        <div style="position: absolute; top: 20px; right: 20px;">
                            <button type="button"
                                    class="btn btn-floating btn-success btn-sm waves-effect waves-float waves-light"><i
                                        class="icon md-edit" aria-hidden="true"></i></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <p>Feueteres</p>
                    <ul>
                        <li>gsdfgsdf</li>
                        <li>gsdfgsdf</li>
                        <li>gsdfgsdf</li>
                        <li>gsdfgsdf</li>
                    </ul>
                    <button type="button" class="btn btn-primary waves-effect waves-light pull-right">Submit</button>
                </div>
                <div class="col-md-8">
                    <p>Tags:</p>
                    <div class="tokenfield form-control"><input type="text" class="form-control"
                                                                data-plugin="tokenfield" value="red,green,blue"
                                                                tabindex="-1"
                                                                style="position: absolute; left: -10000px;"><input
                                type="text" tabindex="-1" style="position: absolute; left: -10000px;">
                        <div class="token"><span class="token-label" style="max-width: 542px;">red</span><a href="#"
                                                                                                            class="close"
                                                                                                            tabindex="-1">×</a>
                        </div>
                        <div class="token"><span class="token-label" style="max-width: 542px;">green</span><a href="#"
                                                                                                              class="close"
                                                                                                              tabindex="-1">×</a>
                        </div>
                        <div class="token"><span class="token-label" style="max-width: 542px;">blue</span><a href="#"
                                                                                                             class="close"
                                                                                                             tabindex="-1">×</a>
                        </div>
                        <input type="text" class="token-input" autocomplete="off" placeholder=""
                               id="1454307941525175-tokenfield" tabindex="0" style="min-width: 60px; width: 393.797px;">
                    </div>
                </div>
                <div class="col-md-12">
                    <p>Extra Images</p>
                    <ul>
                        <li>gsdfgsdf</li>
                        <li>gsdfgsdf</li>
                        <li>gsdfgsdf</li>
                        <li>gsdfgsdf</li>
                    </ul>

                    <div class="btn-group bootstrap-select show-tick dropup">
                        <button type="button" class="btn dropdown-toggle btn-select" data-toggle="dropdown"
                                title="Nothing selected" aria-expanded="false"><span class="filter-option pull-left">Nothing selected</span>&nbsp;<span
                                    class="bs-caret"><span class="caret"></span></span></button>
                        <div class="dropdown-menu open" style="max-height: 313px; overflow: hidden; min-height: 119px;">
                            <ul class="dropdown-menu inner" role="menu"
                                style="max-height: 301px; overflow-y: auto; min-height: 107px;">
                                <li class="dropdown-header " data-optgroup="1"><span class="text">Condiments</span></li>
                                <li data-original-index="0" data-optgroup="1"><a tabindex="0" class="opt  " style=""
                                                                                 data-tokens="null"><span class="text">Mustard</span><span
                                                class="icon md-check check-mark"></span></a></li>
                                <li data-original-index="1" data-optgroup="1"><a tabindex="0" class="opt  " style=""
                                                                                 data-tokens="null"><span class="text">Ketchup</span><span
                                                class="icon md-check check-mark"></span></a></li>
                                <li data-original-index="2" data-optgroup="1"><a tabindex="0" class="opt  " style=""
                                                                                 data-tokens="null"><span class="text">Relish</span><span
                                                class="icon md-check check-mark"></span></a></li>
                                <li class="divider" data-optgroup="2div"></li>
                                <li class="dropdown-header " data-optgroup="2"><span class="text">Breads</span></li>
                                <li data-original-index="3" data-optgroup="2"><a tabindex="0" class="opt  " style=""
                                                                                 data-tokens="null"><span class="text">Plain</span><span
                                                class="icon md-check check-mark"></span></a></li>
                                <li data-original-index="4" data-optgroup="2"><a tabindex="0" class="opt  " style=""
                                                                                 data-tokens="null"><span class="text">Steamed</span><span
                                                class="icon md-check check-mark"></span></a></li>
                                <li data-original-index="5" data-optgroup="2"><a tabindex="0" class="opt  " style=""
                                                                                 data-tokens="null"><span class="text">Toasted</span><span
                                                class="icon md-check check-mark"></span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <p>...</p>
                </div>
                <div class="col-md-12">
                    <p>...</p>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('script')
    <script>
        function myFunction() {
            window.location = "{!! route('admin.items.register') !!}";
        }
    </script>

    {!! HTML::script('vendor/footable/footable.all.min.js') !!}
    {{--script--}}
    {!! HTML::script('vendor/formvalidation/formValidation.min.js') !!}
    {!! HTML::script('vendor/formvalidation/framework/bootstrap.min.js') !!}
    {!! HTML::script('validator.js') !!}
    {!! HTML::script('vendor/formatter-js/jquery.formatter.js') !!}  {{--para la mascara--}}
    {!! HTML::script('js/components/formatter-js.js') !!}
    {!! HTML::script('assets/examples/js/tables/footable.js') !!}
    {!! HTML::script('/css/bootstrap-select.min.js') !!}
@endsection
