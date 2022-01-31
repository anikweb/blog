@extends('auth.master')

@section('content')
    <div class="row justify-content-center pt-0 mt-0 pt-md-5 mt-md-5">
        <div class="col-md-7 col-lg-5">
            <div class="wrap">
                <div class="img" style="background-image: url({{ asset('auth/images/bg-1.jpg') }});">
                </div>
                @if ($errors->any())
                    <div class="alert alert-danger m-1">
                        <ul class="mx-2 p-0"  >
                            @foreach ($errors->all() as $error)
                                <li style="text-decoration: none; list-style-type:none;"><i class="fa fa-exclamation-circle"></i> {{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <div class="login-wrap p-4 p-md-5">
                    <div class="d-flex">
                        <div class="w-100">
                            <h3 class="mb-4">Sign In</h3>
                        </div>
                        <div class="w-100">
                            <p class="social-media d-flex justify-content-end">
                                <a href="#" class="social-icon d-flex align-items-center justify-content-center">
                                    <span class="fa fa-facebook"></span>
                                </a>
                                <a href="#" class="social-icon d-flex align-items-center justify-content-center">
                                    <span class="fa fa-twitter"></span>
                                </a>
                            </p>
                        </div>
                    </div>
                    <form action="{{ route('login') }}" class="signin-form" method="POST">
                        @csrf
                        <div class="form-group mt-3">
                            <input type="text" name="email" value="{{ old('email') }}" class="form-control">
                            <label class="form-control-placeholder" for="username">Email or Username</label>
                        </div>
                        <div class="form-group">
                            <input id="password-field" type="password" class="form-control" name="password" autocomplete="current-password">
                            <label class="form-control-placeholder" for="password">Password</label>
                            <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="form-control btn btn-primary rounded submit px-3">Sign In</button>
                        </div>
                        <div class="form-group d-md-flex">
                            <div class="w-100 text-left">
                                <label class="checkbox-wrap checkbox-primary mb-0">Remember Me
                                    <input type="checkbox" name="remember">
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                            <div class="w-100 text-md-right">
                                <a href="{{ route('password.request') }}">Forgot Password</a>
                            </div>
                        </div>
                    </form>
                    <p class="text-center">Not a member? <a  href="{{ route('register') }}">Sign Up</a></p>
                </div>
            </div>
        </div>
    </div>
@endsection
