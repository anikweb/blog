@extends('auth.master')

@section('content')
    <div class="row justify-content-center">
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
                            <h3 class="mb-4">Sign Up</h3>
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
                    <form action="{{ route('register') }}" class="signin-form" method="POST">
                        @csrf
                        <div class="form-group mt-3">
                            <input type="text" id="name" name="name" value="{{ old('name') }}" class="form-control">
                            <label class="form-control-placeholder" for="name">Full Name <span>*</span></label>
                        </div>
                        <div class="form-group mt-3">
                            <input type="text" id="email" name="email" value="{{ old('email') }}"  class="form-control">
                            <label class="form-control-placeholder" for="email">Email <span>*</span></label>
                        </div>
                        <div class="form-group">
                            <input id="password-field" type="password" value="{{ old('password') }}" class="form-control" name="password">
                            <label class="form-control-placeholder" for="password">Password <span>*</span></label>
                            <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                        </div>
                        <div class="form-group">
                            <input id="password_confirmation" type="password" class="form-control" name="password_confirmation">
                            <label class="form-control-placeholder" for="password_confirmation">Confirm Password <span>*</span></label>
                            <span toggle="#password_confirmation" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="form-control btn btn-primary rounded submit px-3">Sign Up</button>
                        </div>
                    </form>
                    <p class="text-center">Already registered? <a  href="{{ route('login') }}"> Login</a></p>
                </div>
            </div>
        </div>
    </div>
@endsection

