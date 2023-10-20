@extends('layout.app')
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

<body class="full-wrap" style="background-color: black;">
    @section('content')
    {{-- <div class="preloader"></div>
        <div class="toggle-div mt-4">
            <h4 class="d-inline">Dark Mode</h4>
            <div class="d-inline float-right">
                <label class="toggle toggle-init"><input type="checkbox"><span class="toggle-icon"></span></label>
            </div>
        </div>
    </div> --}}
        <!-- banenr wrapper -->
        <div class="banner-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="banner-slider owl-carousel owl-theme">
                            <div class="owl-items">
                                <div class="banner-wrap justify-content-between align-items-center">
                                    <div class="left-wrap">
                                        <h2>Mother of  <br>Brooklyn</h2>
                                        <span class="tag"><b>SEASON 1</b></span>
                                        <span class="tag">2020</span>
                                        <span class="tag"><b>HD</b></span>
                                        <span class="tag"><b>16+</b></span>
                                        <span class="tag">2 h 20 min</span>
                                        <span class="tag">Action</span>
                                        <span class="tag"></span>
                                        <p>Radhe is a singing prodigy determined to follow in the classical footsteps of his grandfather. Tamanna is a YouTube pop sensation desperate to become .</p>
                                        <a href="season.html" class="btn btn-lg"><img src="/images/play.png" alt="icn">Watch now</a>
                                    </div>
                                    <div class="right-wrap" style="background-image: url(/images/banner-4.jpg);"></div>
                                </div>
                            </div>

                            <div class="owl-items">
                                <div class="banner-wrap justify-content-between align-items-center">
                                    <div class="left-wrap">
                                        <h2>Made <br> in heaven</h2>
                                        <span class="tag"><b>SEASON 1</b></span>
                                        <span class="tag">2020</span>
                                        <span class="tag"><b>HD</b></span>
                                        <span class="tag"><b>16+</b></span>
                                        <span class="tag">2 h 20 min</span>
                                        <span class="tag">Action</span>
                                        <p>Radhe is a singing prodigy determined to follow in the classical footsteps of his grandfather. Tamanna is a YouTube pop sensation desperate to become .</p>
                                        <a href="video.html" class="btn btn-lg"><img src="/images/play.png" alt="icn">Watch now</a>
                                    </div>
                                    <div class="right-wrap" style="background-image: url(/images/banner-3.jpg);"></div>
                                </div>
                            </div>


                            <div class="owl-items">
                                <div class="banner-wrap justify-content-between align-items-center">
                                    <div class="left-wrap">
                                        <h2>Zero<br> dark night</h2>
                                        <span class="tag"><b>SEASON 1</b></span>
                                        <span class="tag">2020</span>
                                        <span class="tag"><b>HD</b></span>
                                        <span class="tag"><b>16+</b></span>
                                        <span class="tag">2 h 20 min</span>
                                        <span class="tag">Action</span>
                                        <p>Radhe is a singing prodigy determined to follow in the classical footsteps of his grandfather. Tamanna is a YouTube pop sensation desperate to become .</p>
                                        <a href="video.html" class="btn btn-lg"><img src="/images/play.png" alt="icn">Watch now</a>
                                    </div>
                                    <div class="right-wrap" style="background-image: url(/images/banner-2.jpg);"></div>
                                </div>

                            </div>
                            <div class="owl-items">

                                <div class="banner-wrap justify-content-between align-items-center">
                                    <div class="left-wrap">
                                        <h2>The <br> night ever</h2>
                                        <span class="tag"><b>SEASON 1</b></span>
                                        <span class="tag">2020</span>
                                        <span class="tag"><b>HD</b></span>
                                        <span class="tag"><b>16+</b></span>
                                        <span class="tag">2 h 20 min</span>
                                        <span class="tag">Action</span>
                                        <p>Radhe is a singing prodigy determined to follow in the classical footsteps of his grandfather. Tamanna is a YouTube pop sensation desperate to become .</p>
                                        <a href="video.html" class="btn btn-lg"><img src="/images/play.png" alt="icn">Watch now</a>
                                    </div>
                                    <div class="right-wrap">
                                        <video autoplay muted loop id="myVideo">
                                          <source src="/images/video3.mp4" type="video/mp4">
                                        </video>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- banenr wrapper -->
        <!-- slider wrapper -->
        <div class="slide-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-6 text-left mb-4 mt-4">
                        <h2 style="color: white">Movie List</h2>
                    </div>

                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="slide-slider-full owl-carousel owl-theme">
                            <div class="owl-items">
                                <a class="slide-one" href="season.html">
                                    <div class="slide-image"><img src="/images/s5.jpg" alt="image"></div>
                                    <div class="slide-content">
                                        <h2>Made in haven <img src="/images/plus.png" alt="icon"></h2>
                                        <p>Radhe is a singing prodigy determined to follow in the classical footsteps of his grandfather.</p>
                                        <span class="tag">2 h 20 min</span>
                                        <span class="tag">2020</span>
                                        <span class="tag"><b>16+</b></span>
                                        <span class="tag"><b>Action</b></span>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- slider wrapper -->

        <!-- slider wrapper -->
    </div>

    <script src="js/plugin.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="js/scripts.js"></script>
    <script src="js/video-player.js"></script>
@endsection
</body>


<!-- Mirrored from uitheme.net/vstream/home-full.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 17 Oct 2023 03:29:25 GMT -->
</html>
