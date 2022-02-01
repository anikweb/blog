<!doctype html>
<html lang="en">
  <head>
  	<title>@if(Route::is('login')) Login  @elseif(Route::is('register')) Sign Up @elseif(Route::is('password.request')) Forget Password @elseif(Route::is('verification.notice')) Verification Email @endif  || Anik Blog</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="//fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="//stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" href="{{ asset('auth/css/style.css') }}">
	</head>
	<body>
	<section class="p-4">
		<div class="container">
            @yield('content')
        </div>
	</section>

	<script src="{{ asset('auth/js/jquery.min.js') }}"></script>
  <script src="{{ asset('auth/js/popper.js') }}"></script>
  <script src="{{ asset('auth/js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('auth/js/main.js') }}"></script>

	</body>
</html>
