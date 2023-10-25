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
    <link rel="stylesheet" href="{{ asset('css/komentar.css ') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    {{-- ICON Flaticon --}}
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-solid-rounded/css/uicons-solid-rounded.css'>
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-bold-rounded/css/uicons-bold-rounded.css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Custom Stylesheet -->
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/video-player.css')}}">
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
                            @foreach ($kategori as $kt)
                            <li class="nav-item"><a class="nav-link" href="{{ Route('Anime', $kt->id) }}">{{ $kt->kategori }}</a></li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4">

                    <div class="user-avater">
                        @if (Auth::user()->profile)
                        <img src="{{ asset('storage/' . Auth::user()->profile) }}" height="100%" width="150%" alt="Profile Picture" id="preview-picture">
                        @else
                            <img src="{{ asset('images/profiledefault.jpg') }}" alt="Default Profile Image">
                        @endif

                        <div class="user-menu">
                            <ul>
                                <li><a href="{{ url('/profile') }}"><i class="ti-user"></i>My Profile</a></li>
                                <li><a href="{{ url('/bookmark') }}"><i class="fa-regular fa-bookmark"></i>Bookmark</a></li>
                                <li><a href="{{ url('/sesi/logout') }}"><i class="ti-power-off"></i>Log Out</a></li>
                            </ul>
                        </div>
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
