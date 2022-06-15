@extends('admin.layouts.auth')

@section('title','Login')

@section('body')
<div class="auth-form">
    <div class="text-center mb-3">
        <a href="index.html"><img src="{{ adminAssets('images/logo-full.png') }}" alt=""></a>
    </div>
    <h4 class="text-center mb-4 text-white">Sign in your account</h4>
    <form action="{{ route('login') }}" method="POST">
        @csrf
        <input type="hidden" name="admin" value="true">
        <div class="form-group">
            <label class="mb-1 text-white"><strong>Email</strong></label>
            <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}">
            @error('email')
                <p class="invalid-feedback" role="alert">
                    <strong class="text-white">{{ $message }}</strong>
                </p>
            @enderror
        </div>
        <div class="form-group">
            <label class="mb-1 text-white"><strong>Password</strong></label>
            <input type="password" name="password" class="@error('password') is-invalid @enderror form-control">
            @error('password')
                <p class="invalid-feedback" role="alert">
                    <strong class="text-white">{{ $message }}</strong>
                </p>
            @enderror
        </div>
        <div class="form-row d-flex justify-content-between mt-4 mb-2">
            <div class="form-group">
               <div class="custom-control custom-checkbox ml-1 text-white">
                    <input type="checkbox" class="custom-control-input" id="basic_checkbox_1">
                    <label class="custom-control-label" for="basic_checkbox_1">Remember my preference</label>
                </div>
            </div>
        </div>
        <div class="text-center">
            <button type="submit" class="btn bg-white text-primary btn-block">Sign Me In</button>
        </div>
    </form>
</div>
@endsection
