@extends('layouts.main')
@section('head_scripts')
    <link rel="stylesheet" href="/assets/examples/css/pages/register-v2.css">
    <link rel="stylesheet" href="/vendor/slidepanel/slidePanel.css">
    <script src="/js/components/formatter-js.js"></script>
    <link rel="stylesheet" href="/assets/examples/css/forms/masks.css">
@endsection

@section('content')

    <div class="page animsition" style="animation-duration: 800ms; opacity: 1;">
        <div class="page-content">
            <ol class="breadcrumb">
                <li><a href="javascript:void(0)">Home</a></li>
                <li><a href="javascript:void(0)">Members</a></li>
                <li class="active">Register</li>
            </ol>
            <div class="col-md-4 col-sm-3"></div>
            <div class="col-md-4 col-sm-6">
                <div class="page-register-main">
                    {{--<div class="brand visible-xs">--}}
                    {{--</div>--}}
                    <h3 class="font-size-24">Sign Up</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                    {!! Form::open(['route'=>'members.store','method'=>'post','role'=>'form','id'=>'register']) !!}
                    <div class="form-group">
                        <div class="some-class" style="display: inline-block; margin: 10px 25px;">
                            <input type="radio" class="radio" name="pack" value="1" id="bronce"/>
                            <label for="bronce"><img class="navbar-brand-logo"
                                                     src="/assets/images/logos/BRONZE_PACK.png"
                                                     title="Remark" style="height: 75px; width: 75px"></label>
                        </div>
                        <div class="some-class" style="display: inline-block; margin: 10px 25px;">
                            <input type="radio" class="radio" name="pack" value="2" id="plata"/>
                            <label for="plata"><img class="navbar-brand-logo"
                                                    src="/assets/images/logos/SILVER_PACK.png"
                                                    title="Remark" style="height: 75px; width: 75px"></label>
                        </div>
                        <div class="some-class" style="display: inline-block; margin: 10px 25px;">
                            <input type="radio" class="radio" name="pack" value="3" id="oro"/>
                            <label for="oro"><img class="navbar-brand-logo" src="/assets/images/logos/GOLD_PACK.png"
                                                  title="Remark" style="height: 75px; width: 75px"></label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="sr-only" for="inputName">Full Name</label>
                        <input type="text" class="form-control" id="inputName" name="name" placeholder="Name">
                    </div>
                    <div class="form-group">
                        <label class="sr-only" for="inputLastname">Full Name</label>
                        <input type="text" class="form-control" id="inputLastname" name="lastname"
                               placeholder="Lastname">
                    </div>
                    <div class="form-group">
                        <label class="sr-only" for="inputUsername">Username</label>
                        <input type="text" class="form-control" id="inputUsername" name="user"
                               placeholder="Username">
                    </div>
                    <div class="form-group">
                        <div class="form-group">
                            <select class="form-control" name="country">
                                <option value="">Country</option>
                                <option value="Estados Unidos">Estados Unidos</option>
                                <option value="México">México</option>
                                <option value="Canada">Canada</option>
                                <option value="El Salvador">El Salvador</option>
                                <option value="Brazil">Brazil</option>
                                <option value="Guatemala">Guatemala</option>
                                <option value="Ecuador">Ecuador</option>
                                <option value="Puerto Rico">Puerto Rico</option>
                                <option value="Panama">Panama</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="sr-only" for="inputBirthday">Birthday</label>
                        {{--<input type="text" class="form-control" id="inputBirthday" name="birthday"--}}
                               {{--placeholder="Birthday" data-plugin="datepicker">--}}
                            <input type="text" class="form-control" id="inputDate2" data-plugin="formatter" data-pattern="[[99]]/[[99]]/[[9999]]">
                            <p class="help-block">01/01/2015</p>
                    </div>
                    <div class="form-group">
                        <label class="sr-only" for="inputEmail">Email</label>
                        <input type="email" class="form-control" id="inputEmail" name="email" placeholder="Email">
                    </div>
                    <div class="form-group">
                        <label class="sr-only" for="inputEmail">Email Confirm</label>
                        <input type="email" class="form-control" id="inputEmailConfirm" name="email_confirm"
                               placeholder="Email Confirm">
                    </div>
                    <div class="form-group">
                        <label class="sr-only" for="inputPassword">Password</label>
                        <input type="password" class="form-control" id="inputPassword" name="password"
                               placeholder="Password">
                    </div>
                    <div class="form-group">
                        <label class="sr-only" for="inputPasswordCheck">Retype Password</label>
                        <input type="password" class="form-control" id="inputPasswordCheck" name="password_confirmation"
                               placeholder="Confirm Password">
                    </div>
                    <div class="form-group">
                        <label class="sr-only" for="inputPhone">Phone</label>
                        <input type="text" class="form-control" id="Phone" name="phone" placeholder="Phone">
                    </div>
                    <div class="form-group">
                        <label class="sr-only" for="inputPhone">Sype</label>
                        <input type="text" class="form-control" id="Skype" name="skype" placeholder="Skype">
                    </div>
                    <div class="form-group">
                        <label class="sr-only" for="inputPhone">Whatsapp</label>
                        <input type="text" class="form-control" id="Whatsapp" name="whatsapp" placeholder="Whatsapp">
                    </div>
                    <div class="form-group clearfix">
                        <div class="checkbox-custom checkbox-inline checkbox-primary pull-left">
                            <input type="checkbox" id="inputCheckbox" name="term">
                            <label for="inputCheckbox"></label>
                        </div>
                        <p class="margin-left-35">By clicking Sign Up, you agree to our <a href="#">Terms</a>.</p>
                    </div>
                    <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                    <button type="submit" class="btn btn-primary btn-block waves-effect waves-light">Sign Up
                    </button>
                    {!! Form::close() !!}
                    <p>Have account already? Please go to <a href="login-v2.html">Sign In</a></p>
                </div>
            </div>
            <div class="col-md-4 col-sm-3"></div>
        </div>
    </div>
@endsection

@section('script')

    <script src="/vendor/formatter-js/jquery.formatter.js"></script>
    <!-- Scripts -->
    <script src="/js/components/formatter-js.js"></script>

    {{--<script src="vendor/formvalidation/formValidation.min.js"></script>--}}
    {{--<script src="vendor/formvalidation/framework/bootstrap.min.js"></script>--}}
    {!! HTML::script('vendor/formvalidation/formValidation.min.js') !!}
    {!! HTML::script('vendor/formvalidation/framework/bootstrap.min.js') !!}
    {!! HTML::script('validator.js') !!}

@endsection
