<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from uitheme.net/vstream/home-full.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 17 Oct 2023 03:29:25 GMT -->
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
</head>
<body>
<div class="main-wrapper">
    <!-- header wrapper -->
    <div class="header-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-8 navbar p-0">
                    <a href="index.html" class="logo"><img src="/images/logo.png" alt="logo" style="margin-left: 20px;"></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNavDropdown">
                       <ul class="navbar-nav nav-menu float-none text-center">
                            <li class="nav-item"><a class="nav-link" href="season-full.blade.php">Season</a></li>
                            <li class="nav-item"><a class="nav-link" href="single.blade.php">Single</a></li>
                            <li class="nav-item"><a class="nav-link" href="search.blade.php">Action</a></li>
                            <li class="nav-item"><a class="nav-link" href="video.blade.php">Video</a></li>
                            <li class="nav-item"><a class="nav-link" href="landing.blade.php">Landing</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4">

                    <div class="user-avater">
                        <img src="/images/user-8.png" alt="user">
                        <div class="user-menu">
                            <ul>
                                <li><a href="profile.html"><i class="ti-user"></i>My Profile</a></li>
                                <li><a href="favorites.html"><i class="ti-heart"></i>My Favorites</a></li>
                                <li><a href="{{ url('/sesi/logout') }}"><i class="ti-power-off"></i>Log Out</a></li>
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
