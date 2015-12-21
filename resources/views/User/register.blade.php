@extends('layouts.main')
@section('head_scripts')
    <link rel="stylesheet" href="/assets/examples/css/pages/register-v2.css">
    <link rel="stylesheet" href="/vendor/slidepanel/slidePanel.css">
@endsection

@section('content')
    <div class="page-register-v2 layout-full page-dark">
        <div class="page-brand-info">
            <div class="brand">
                <img class="brand-img" src="../../../../assets/images/logo@2x.png" alt="...">
                <h2 class="brand-text font-size-40">Remark</h2>
            </div>
            <p class="font-size-20">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua.</p>
        </div>
        <div class="page-register-main">
            <div class="brand visible-xs">
                <img class="brand-img" src="../../../../assets/images/logo-blue@2x.png" alt="...">
                <h3 class="brand-text font-size-40">Remark</h3>
            </div>
            <h3 class="font-size-24">Sign Up</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
            <form method="post" role="form">
                <div class="form-group">
                    <label class="sr-only" for="inputName">Full Name</label>
                    <input type="text" class="form-control" id="inputName" name="name" placeholder="Name">
                </div>
                <div class="form-group">
                    <label class="sr-only" for="inputLastname">Full Name</label>
                    <input type="text" class="form-control" id="inputLastname" name="lastname" placeholder="Lastname">
                </div>
                <div class="form-group">
                    <label class="sr-only" for="inputUsername">Email</label>
                    <input type="email" class="form-control" id="inputUsername" name="username" placeholder="Username">
                </div>
                <div class="form-group">
                    <div class="form-group">
                        <select class="form-control">
                            <option value="">Pais</option>
                            <option value="Estados Unidos">Estados Unidos</option>
                            <option value="México">México</option>
                            <option value="Canada">Canada</option>
                            <option value="El Salvador">El Salvador</option>
                            <option value="Brazil">Brazil</option>
                            <option value="Guatemala">Guatemala</option>
                            <option value="Ecuador">Ecuador</option>
                            <option value="Puerto Rico">Puerto Rico</option>
                            <option value="Panama">Panama</option>
                            <option value="Cuba">Cuba</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label class="sr-only" for="inputEmail">Email</label>
                    <input type="email" class="form-control" id="inputEmail" name="email" placeholder="Email">
                </div>
                <div class="form-group">
                    <label class="sr-only" for="inputPassword">Password</label>
                    <input type="password" class="form-control" id="inputPassword" name="password"
                           placeholder="Password">
                </div>
                <div class="form-group">
                    <label class="sr-only" for="inputPasswordCheck">Retype Password</label>
                    <input type="password" class="form-control" id="inputPasswordCheck" name="passwordCheck"
                           placeholder="Confirm Password">
                </div>
                <div class="form-group">
                    <label class="sr-only" for="inputPhone">Retype Password</label>
                    <input type="password" class="form-control" id="inputPhone" name="phone" placeholder="Phone">
                </div>
                <div class="form-group clearfix">
                    <div class="checkbox-custom checkbox-inline checkbox-primary pull-left">
                        <input type="checkbox" id="inputCheckbox" name="term">
                        <label for="inputCheckbox"></label>
                    </div>
                    <p class="margin-left-35">By clicking Sign Up, you agree to our <a href="#">Terms</a>.</p>
                </div>
                <button type="submit" class="btn btn-primary btn-block waves-effect waves-light">Sign Up</button>
            </form>
            <p>Have account already? Please go to <a href="login-v2.html">Sign In</a></p>
        </div>

    </div>
@endsection