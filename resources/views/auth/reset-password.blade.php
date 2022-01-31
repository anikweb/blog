<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('password.update') }}">
            @csrf

            <!-- Password Reset Token -->
            <input type="hidden" name="token" value="{{ $request->route('token') }}">

            <!-- Email Address -->
            <div>
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email', $request->email)" required autofocus />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class="block mt-1 w-full" type="password" name="password" required />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-label for="password_confirmation" :value="__('Confirm Password')" />

                <x-input id="password_confirmation" class="block mt-1 w-full"
                                    type="password"
                                    name="password_confirmation" required />
            </div>

            <div class="flex items-center justify-end mt-4">
                <x-button>
                    {{ __('Reset Password') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>

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
                <div class="login-wrap p-4 p-md-5">
                    <div class="pb-2">
                        <h3>Reset Password</h3>
                    </div>
                    <form action="{{ route('password.update') }}" class="signin-form" method="POST">
                        @csrf
                        <input type="hidden" name="token" value="{{ $request->route('token') }}">
                            <input type="hidden" id="email" name="email" value="{{ $request->email }}"  class="form-control">
                        <div class="form-group">
                            <input id="password-field" type="password" value="{{ old('password') }}" class="form-control" name="password">
                            <label class="form-control-placeholder" for="password">New Password <span>*</span></label>
                            <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                        </div>
                        <div class="form-group">
                            <input id="password_confirmation" type="password" class="form-control" name="password_confirmation">
                            <label class="form-control-placeholder" for="password_confirmation">Confirm Password <span>*</span></label>
                            <span toggle="#password_confirmation" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="form-control btn btn-primary rounded submit px-3">Reset Password</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
