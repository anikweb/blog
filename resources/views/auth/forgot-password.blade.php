@extends('auth.master')

@section('content')
    <div class="mt-0 pt-0 mt-md-5 pt-md-5 row justify-content-center">
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
                @if (session('status'))
                    <div class="alert alert-success m-1">
                        <i class="fa fa-check"></i> {{ session('status') }}
                    </div>
                @endif
                <div class="login-wrap p-4 p-md-5">
                    <div class="pb-2">
                        <h3>Forget Password</h3>
                        <p>Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.</p>
                    </div>
                    <form action="{{ route('password.email') }}" class="signin-form" method="POST">
                        @csrf
                        <div class="form-group mt-3">
                            <input type="text" id="email" name="email" value="{{ old('email') }}"  class="form-control">
                            <label class="form-control-placeholder" for="email">Email <span>*</span></label>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="form-control btn btn-primary rounded submit px-3">Get Password Reset Link</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

