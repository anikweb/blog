@extends('auth.master')

@section('content')
    <div class="mt-0 pt-0 mt-md-5 pt-md-5 row justify-content-center">
        <div class="col-md-7 col-lg-5">
            <div class="wrap">
                <div class="img" style="background-image: url({{ asset('auth/images/bg-1.jpg') }});">
                </div>
                @if (session('status'))
                    <div class="alert alert-success m-1">
                        <i class="fa fa-check"></i>
                        <span>A new verification link has been sent to the email address you provided during registration.</span>
                    </div>
                @endif
                <div class="login-wrap p-4 p-md-5">
                    <div class="pb-2">
                        <p class="text-justify">Thanks for signing up! Before getting started, could you verify your email address by clicking on the link we just emailed to you? If you didn't receive the email, we will gladly send you another.</p>
                    </div>
                    <form action="{{ route('verification.send') }}" class="signin-form" method="POST">
                        @csrf
                        <div class="form-group">
                            <button type="submit" class="form-control btn btn-primary rounded submit px-3">Resend Verification Email</button>
                        </div>
                    </form>
                    <form action="{{ route('logout') }}" class="signin-form text-center" method="POST">
                        @csrf
                        <div class="form-group">
                            <button type="submit" class="btn">-Logout-</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
