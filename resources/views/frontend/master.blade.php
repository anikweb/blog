<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8"/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
        <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport'/>
        <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('frontend/img/favicon.ico') }}">
        <link rel="icon" type="image/png" href="{{ asset('frontend/img/favicon.ico') }}">
        <title>Anik Blog</title>
        <!-- Google Font -->
        <link href="//fonts.googleapis.com/css?family=Playfair+Display:400,700|Source+Sans+Pro:400,600,700" rel="stylesheet">
        <!-- Font Awesome Icons -->
        <link rel="stylesheet" href="//use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
        <!-- Main CSS -->
        <link href="{{ asset('frontend/css/main.css') }}" rel="stylesheet"/>
    </head>
    <body>
        <!--------------------------------------
        NAVBAR
        --------------------------------------->
        <nav class="topnav navbar navbar-expand-lg navbar-light bg-white fixed-top">
            <div class="container">
                <a class="navbar-brand" href="{{ route('frontend') }}"><strong>Mundana</strong></a>
                <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="navbar-collapse collapse" id="navbarColor02" style="">
                    {{-- Left Menu  --}}
                    <ul class="navbar-nav mr-auto d-flex align-items-center">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('frontend') }}">Home</a>
                        </li>
                    </ul>
                    {{-- Right Menu  --}}
                    <ul class="navbar-nav ml-auto d-flex align-items-center">
                        @auth
                            <div class="dropdown">
                                <button type="button" class="btn btn-outline-primary dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-user"></i> My Account
                                </button>
                                <div class="dropdown-menu" style="border:1px solid green; box-shadow:none">
                                    <a class="dropdown-item" href="{{ route('dashboard') }}">Dashboard</a>
                                    <form action="{{ route('logout') }}" method="POST">
                                        @csrf
                                        <button class="dropdown-item">Sign out</button>
                                    </form>
                                </div>
                            </div>
                        @else
                            <li class="nav-item highlight pr-1">
                                <a class="btn btn-outline-primary" href="{{ route('login') }}"><i class="fa fa-sign-in-alt"></i> Sign in</a>
                            </li>
                            <li class="nav-item highlight">
                                <a class="btn btn-outline-primary" href="{{ route('register') }}"><i class="fa fa-user-plus"></i> Sign up</a>
                            </li>
                        @endauth
                        {{-- <li class="nav-item highlight">
                            <a class="nav-link"  href="#">Login</a>
                        </li> --}}
                    </ul>
                </div>
            </div>
        </nav>
        <!-- End Navbar -->
        @yield('content')
        <!--------------------------------------
        FOOTER
        --------------------------------------->
        <div class="container mt-5">
            <footer class="bg-white border-top p-3 text-muted small">
                <div class="row align-items-center justify-content-between">
                    <div>
                        <span class="navbar-brand mr-2"><strong>Mundana</strong></span> Copyright &copy;
                        <script>document.write(new Date().getFullYear())</script>
                        . All rights reserved.
                    </div>
                    <div>
                        Made with <a target="_blank" class="text-secondary font-weight-bold" href="https://www.wowthemes.net/mundana-free-html-bootstrap-template/">Mundana Theme</a> by WowThemes.net.
                    </div>
                </div>
            </footer>
        </div>
        <!-- End Footer -->

        <!--------------------------------------
        JAVASCRIPTS
        --------------------------------------->
        <script src="{{ asset('frontend/js/vendor/jquery.min.js') }}" type="text/javascript"></script>
        <script src="{{ asset('frontend/js/vendor/popper.min.js') }}" type="text/javascript"></script>
        <script src="{{ asset('frontend/js/vendor/bootstrap.min.js') }}" type="text/javascript"></script>
        <script src="{{ asset('frontend/js/functions.js') }}" type="text/javascript"></script>
    </body>
</html>
