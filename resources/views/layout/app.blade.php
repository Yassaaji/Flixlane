<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Vstream - Media Landing Page</title>

    <link rel="stylesheet" href="/css/themify-icons.css">
    <!-- Favicon icon -->
    <link rel="icon" type="/image/png" sizes="16x16" href="/images/favicon.png">
    <!-- Custom Stylesheet -->
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="{{ url('css/komentar.css ') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    {{-- ICON Flaticon --}}
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-solid-rounded/css/uicons-solid-rounded.css'>
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-bold-rounded/css/uicons-bold-rounded.css'>
    <style>
        .user-avater {
            position: relative;
            width: 150px; /* Sesuaikan ukuran sesuai kebutuhan */
            height: 150px; /* Sesuaikan ukuran sesuai kebutuhan */
            border-radius: 50%;
        }





    </style>

</head>
<body>
<div class="main-wrapper">
    <!-- header wrapper -->
    <div class="header-wrapper">
        <div class="container-fluid">
            <div class="row" >
                <div class="col-lg-8 navbar p-0">
                    <a href="{{ url('/home') }}" class="logo"><img src="/images/logo.png" alt="logo" style="margin-left: 20px;"></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNavDropdown">
                       <ul class="navbar-nav nav-menu float-none text-center">
                            <li class="nav-item"><a class="nav-link" href="{{ url('/home') }}">Home</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ url('/season') }}">Anime</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ url('/single') }}">Drakor</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ url('/search') }}">Drachin</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ url('/detail') }}">Action</a></li>
                            {{-- <li class="nav-item"><a class="nav-link" href="{{ url('/video') }}">Video</a></li> --}}
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4">

                    <div class="user-avater">
                        <img src="{{ asset('storage/' . Auth::user()->profile) }}" height="100%" width="150%" alt="user">
                        <div class="user-menu">
                            <ul>
                                <li><a href="profile.html"><i class="ti-user"></i>My Profile</a></li>
                                <li><a href="favorites.html"><i class="ti-heart"></i>My Favorites</a></li>
                                <li><a href="term.html"><i class="ti-world"></i>Privacy Policy</a></li>
                                <li><a href="home.html"><i class="ti-power-off"></i>Log Out</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="search-div">
                        <input type="text" placeholder="Seacrh">
                    </div>
                </div>

            </div>
        </div>
        <div class="main-content py-3 px-3">
            <div class="container-fluid">
              @yield('content')
            </div>
        </div>
    </div>
</body>
</html>
