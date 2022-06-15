@extends('theme.layouts.layout')
@section('body')
<div class="breadcrumb-area breadcrumb-mt breadcrumb-ptb-2">
    <div class="container">
        <div class="breadcrumb-content text-center">
            <h2>Login / Register</h2>
            <ul>
                <li>
                    <a href="{{ route('home') }}">Home </a>
                </li>
                <li><span> > </span></li>
                <li>
                    <a href="{{ route('products') }}">Product </a>
                </li>
                <li><span> > </span></li>
                <li class="active"> Login / Register </li>
            </ul>
        </div>
    </div>
</div>
<div class="login-register-area bg-gray pt-155 pb-160">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 col-md-12 ml-auto mr-auto">
                <div class="login-register-wrapper">
                    <div class="login-register-tab-list nav">
                        <a class="active" data-toggle="tab" href="#lg1">
                            <h4> login </h4>
                        </a>
                        <a data-toggle="tab" href="#lg2">
                            <h4> register </h4>
                        </a>
                    </div>
                    <div class="tab-content">
                        <div id="lg1" class="tab-pane active">
                            <div class="login-form-container">
                                <div class="login-register-form">
                                    <div class="login-message"></div>
                                    <form id="loginForm" action="{{ route('login') }}" method="post">
                                        @csrf
                                        <input type="text" name="email" class="mb-0" placeholder="Email">
                                        <p class="text-danger" id="email-error"></p>
                                        <input type="password" name="password" class="mb-0" placeholder="Password">
                                        <p class="text-danger" id="password-error"></p>
                                        <div class="button-box">
                                            <div class="login-toggle-btn">
                                                <input type="checkbox">
                                                <label>Remember me</label>
                                                <a href="#">Forgot Password?</a>
                                            </div>
                                            <button type="submit">Login</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div id="lg2" class="tab-pane">
                            <div class="login-form-container">
                                <div class="login-register-form">
                                    <div class="register-message"></div>
                                    <form id="signupForm" action="{{ route('register') }}" method="post">
                                        @csrf
                                        <input type="text" class="mb-0" name="name" placeholder="Name">
                                        <p class="text-danger" id="register-name-error"></p>
                                        <input name="email" class="mb-0" placeholder="Email" type="email">
                                        <p class="text-danger" id="register-email-error"></p>
                                        <input type="password" class="mb-0" name="password" placeholder="Password">
                                        <p class="text-danger" id="register-password-error"></p>
                                        <div class="button-box">
                                            <button type="submit">Register</button>
                                        </div>
                                    </form>
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
    $("#loginForm").submit(function(e){
        e.preventDefault();
        var form = $(this);
        $.ajax({
            type: form.attr("method"),
            url: form.attr("action"),
            data: form.serialize(),
            beforeSend: function()
            {
                form.find("button").prop("disabled",true);
                form.find("button").text("Please wait...");
            },
            success: function(res)
            {
                $(".login-message").text("Login Successfull.");
                $(".login-message").addClass("alert alert-success");
                setTimeout(function(){
                    window.location.href = '{{ route('home') }}';
                },3000);
            },
            error: function(e)
            {
                form.find("button").prop("disabled",false);
                form.find("button").text("Login");
                $("#email-error").text("");
                $("#password-error").text("");
                $.each(e.responseJSON.errors,function(index,item){
                    $("#"+index+"-error").text(item[0]);
                });
            }
        });
    });

    $("#signupForm").submit(function(e){
        e.preventDefault();
        var form = $(this);
        $.ajax({
            type: form.attr("method"),
            url: form.attr("action"),
            data: form.serialize(),
            beforeSend: function()
            {
                form.find("button").prop("disabled",true);
                form.find("button").text("Please wait...");
            },
            success: function(res)
            {
                $(".register-message").text("You account created successfully.");
                $(".register-message").addClass("alert alert-success");
                setTimeout(function(){
                    window.location.href = '{{ route('home') }}';
                },3000);
            },
            error: function(e)
            {
                form.find("button").prop("disabled",false);
                form.find("button").text("Register");
                $("#register-name-error").text("");
                $("#register-email-error").text("");
                $("#register-password-error").text("");
                $.each(e.responseJSON.errors,function(index,item){
                    $("#register-"+index+"-error").text(item[0]);
                });
            }
        });
    });
</script>
@endsection
