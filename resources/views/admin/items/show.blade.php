@extends('layouts.main')
@section('head_scripts')
    <link rel="stylesheet" href="/vendor/slidepanel/slidePanel.css">
    <link rel="stylesheet" href="/vendor/jquery-labelauty/jquery-labelauty.css">
    <link rel="stylesheet" href="/css/bootstrap-extend.min.css">
    <link rel="stylesheet" href="/css/bootstrap-tokenfield.min.css">
    <link rel="stylesheet" href="/css/bootstrap-select.min.css">
    <link rel="stylesheet" href="/vendor/footable/footable.css">
    <link rel="stylesheet" href="/vendor/multi-select/multi-select.css">
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

                    <select class="form-control" multiple data-plugin="select2">
                        <optgroup label="Alaskan/Hawaiian Time Zone">
                            <option value="AK">Alaska</option>
                            <option value="HI">Hawaii</option>
                        </optgroup>
                        <optgroup label="Pacific Time Zone">
                            <option value="CA">California</option>
                            <option value="NV">Nevada</option>
                            <option value="OR">Oregon</option>
                            <option value="WA">Washington</option>
                        </optgroup>
                        <optgroup label="Mountain Time Zone">
                            <option value="AZ">Arizona</option>
                            <option value="CO">Colorado</option>
                            <option value="ID">Idaho</option>
                            <option value="MT">Montana</option>
                            <option value="NE">Nebraska</option>
                            <option value="NM">New Mexico</option>
                            <option value="ND">North Dakota</option>
                            <option value="UT">Utah</option>
                            <option value="WY">Wyoming</option>
                        </optgroup>
                        <optgroup label="Central Time Zone">
                            <option value="AL">Alabama</option>
                            <option value="AR">Arkansas</option>
                            <option value="IL">Illinois</option>
                            <option value="IA">Iowa</option>
                            <option value="KS">Kansas</option>
                            <option value="KY">Kentucky</option>
                            <option value="LA">Louisiana</option>
                            <option value="MN">Minnesota</option>
                            <option value="MS">Mississippi</option>
                            <option value="MO">Missouri</option>
                            <option value="OK">Oklahoma</option>
                            <option value="SD">South Dakota</option>
                            <option value="TX">Texas</option>
                            <option value="TN">Tennessee</option>
                            <option value="WI">Wisconsin</option>
                        </optgroup>
                        <optgroup label="Eastern Time Zone">
                            <option value="CT">Connecticut</option>
                            <option value="DE">Delaware</option>
                            <option value="FL">Florida</option>
                            <option value="GA">Georgia</option>
                            <option value="IN">Indiana</option>
                            <option value="ME">Maine</option>
                            <option value="MD">Maryland</option>
                            <option value="MA">Massachusetts</option>
                            <option value="MI">Michigan</option>
                            <option value="NH">New Hampshire</option>
                            <option value="NJ">New Jersey</option>
                            <option value="NY">New York</option>
                            <option value="NC">North Carolina</option>
                            <option value="OH">Ohio</option>
                            <option value="PA">Pennsylvania</option>
                            <option value="RI">Rhode Island</option>
                            <option value="SC">South Carolina</option>
                            <option value="VT">Vermont</option>
                            <option value="VA">Virginia</option>
                            <option value="WV">West Virginia</option>
                        </optgroup>
                    </select>
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
    <script type="text/javascript">
        $(".js-example-basic-multiple").select2();
    </script>

    {!! HTML::script('vendor/footable/footable.all.min.js') !!}
    {{--script--}}
    {!! HTML::script('vendor/formvalidation/formValidation.min.js') !!}
    {!! HTML::script('vendor/formvalidation/framework/bootstrap.min.js') !!}
    {!! HTML::script('validator.js') !!}
    {!! HTML::script('vendor/formatter-js/jquery.formatter.js') !!}  {{--para la mascara--}}
    {!! HTML::script('js/components/formatter-js.js') !!}
    {!! HTML::script('assets/examples/js/tables/footable.js') !!}
    {!! HTML::script('/js/bootstrap-select.min.js') !!}
    {!! HTML::script('/js/components/multi-select.js') !!}

@endsection
