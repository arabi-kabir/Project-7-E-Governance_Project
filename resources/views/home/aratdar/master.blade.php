<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
        <link rel="stylesheet" href="{{ asset('css/toastr.min.css') }}">
        <!-- <link rel="stylesheet" href="{{ asset('css/auth_css.css') }}"> -->


        <title>e-Bazar</title>
    </head>
    <body>

        <nav class="navbar navbar-expand-md navbar-dark bg-dark navbar-laravel">
            <div class="container-fluid">
                <a class="navbar-brand" href="">e - Bazar</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                Aratdar : {{ session('user')->fullname }} <span class="caret"></span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="">Profile</a>
                                <a class="dropdown-item" href="{{ route('logout') }}">Logout</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-3 myNav">
                        <ul class="list-group">
                            <!-- <a href="{{ route('aratdar_home') }}"><li class="list-group-item @yield('')"> <i class="fa fa-home" aria-hidden="true"></i>Dashboard</li></a> -->
                            <a href="{{ route('aratdar_allocation') }}"><li class="list-group-item @yield('1')"> <i class="fas fa-history"></i> My Allocation </li></a>
                            <a href="{{ route('my_profile_aradtdar') }}"><li class="list-group-item @yield('2')"> <i class="fas fa-notes-medical"></i> My Profile </li></a>
                        </ul>
                    </div>
                    <div class="col-lg-9">
                        @include('include.error')

                        @yield('content')
                    </div>
                </div>
            </div>
        </main>

        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="{{ asset('js/jQuery.js') }}"></script>
        <script src="{{ asset('js/popper.js') }}"></script>
        <script src="{{ asset('js/bootstrap.js') }}"></script>

        <script src="{{ asset('js/toastr.min.js') }}"></script>
        @include('include.custom')

    </body>
</html>
