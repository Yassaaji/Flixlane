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

<body class="full-wrap">
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
                                        <span class="rnd">IMDb 6.7</span>
                                        <h2>Mother of  <br>Brooklyn</h2>
                                        <span class="tag"><b>SEASON 1</b></span>
                                        <span class="tag">2020</span>
                                        <span class="tag"><b>HD</b></span>
                                        <span class="tag"><b>16+</b></span>
                                        <span class="tag">2 h 20 min</span>
                                        <p>Radhe is a singing prodigy determined to follow in the classical footsteps of his grandfather. Tamanna is a YouTube pop sensation desperate to become .</p>
                                        <a href="season.html" class="btn btn-lg"><img src="/images/play.png" alt="icn">Watch now</a>
                                    </div>
                                    <div class="right-wrap" style="background-image: url(/images/banner-4.jpg);"></div>
                                </div>
                            </div>

                            <div class="owl-items">
                                <div class="banner-wrap justify-content-between align-items-center">
                                    <div class="left-wrap">
                                        <span class="rnd">IMDb 6.7</span>
                                        <h2>Made <br> in heaven</h2>
                                        <span class="tag"><b>SEASON 1</b></span>
                                        <span class="tag">2020</span>
                                        <span class="tag"><b>HD</b></span>
                                        <span class="tag"><b>16+</b></span>
                                        <span class="tag">2 h 20 min</span>
                                        <p>Radhe is a singing prodigy determined to follow in the classical footsteps of his grandfather. Tamanna is a YouTube pop sensation desperate to become .</p>
                                        <a href="video.html" class="btn btn-lg"><img src="/images/play.png" alt="icn">Watch now</a>
                                    </div>
                                    <div class="right-wrap" style="background-image: url(/images/banner-3.jpg);"></div>
                                </div>
                            </div>


                            <div class="owl-items">
                                <div class="banner-wrap justify-content-between align-items-center">
                                    <div class="left-wrap">
                                        <span class="rnd">IMDb 6.7</span>
                                        <h2>Zero<br> dark night</h2>
                                        <span class="tag"><b>SEASON 1</b></span>
                                        <span class="tag">2020</span>
                                        <span class="tag"><b>HD</b></span>
                                        <span class="tag"><b>16+</b></span>
                                        <span class="tag">2 h 20 min</span>
                                        <p>Radhe is a singing prodigy determined to follow in the classical footsteps of his grandfather. Tamanna is a YouTube pop sensation desperate to become .</p>
                                        <a href="video.html" class="btn btn-lg"><img src="/images/play.png" alt="icn">Watch now</a>
                                    </div>
                                    <div class="right-wrap" style="background-image: url(/images/banner-2.jpg);"></div>
                                </div>

                            </div>
                            <div class="owl-items">

                                <div class="banner-wrap justify-content-between align-items-center">
                                    <div class="left-wrap">
                                        <span class="rnd">IMDb 6.7</span>
                                        <h2>The <br> night ever</h2>
                                        <span class="tag"><b>SEASON 1</b></span>
                                        <span class="tag">2020</span>
                                        <span class="tag"><b>HD</b></span>
                                        <span class="tag"><b>16+</b></span>
                                        <span class="tag">2 h 20 min</span>
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
                        <h2>Specials & Latest Movies</h2>
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
                                        <span class="tag"><b>HD</b></span>
                                        <span class="tag"><b>16+</b></span>
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
        <div class="slide-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-6 text-left mb-4 mt-4">
                        <h2>Specials & Latest Movies</h2>
                    </div>

                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="slide-slider-full owl-carousel owl-theme">
                            <div class="owl-items">
                                <a class="slide-one" href="season.html">
                                    <div class="slide-image"><img src="/images/s9.jpg" alt="image"></div>
                                    <div class="slide-content">
                                        <h2>Second Man of Earth <img src="/images/plus.png" alt="icon"></h2>
                                        <p>Radhe is a singing prodigy determined to follow in the classical footsteps of his grandfather.</p>
                                        <span class="tag">2 h 20 min</span>
                                        <span class="tag">2020</span>
                                        <span class="tag"><b>HD</b></span>
                                        <span class="tag"><b>16+</b></span>
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
        <div class="slide-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-6 text-left mb-4 mt-4">
                        <h2>Specials & Latest Movies</h2>
                    </div>

                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="slide-slider-full owl-carousel owl-theme">
                            <div class="owl-items">
                                <a class="slide-one slide-two" href="#">
                                    <div class="slide-image" style="background-image: url(/images/s17.png);"></div>
                                    <div class="slide-content">
                                        <h2>Batman Knight <img src="/images/plus.png" alt="icon"></h2>
                                        <span class="tag">2 h 20 min</span>
                                        <span class="tag">2020</span>
                                        <span class="tag"><b>HD</b></span>
                                        <span class="tag"><b>16+</b></span>
                                    </div>
                                </a>
                            </div>
                            <div class="owl-items">
                                <a class="slide-one slide-two" href="#">
                                    <div class="slide-image" style="background-image: url(/images/s18.jpg);"></div>
                                    <div class="slide-content">
                                        <h2>Gimini Man <img src="/images/plus.png" alt="icon"></h2>
                                        <span class="tag">2 h 20 min</span>
                                        <span class="tag">2020</span>
                                        <span class="tag"><b>HD</b></span>
                                        <span class="tag"><b>16+</b></span>
                                    </div>
                                </a>
                            </div>
                            <div class="owl-items">
                                <a class="slide-one slide-two" href="#">
                                    <div class="slide-image" style="background-image: url(/images/s19.jpg);"></div>
                                    <div class="slide-content">
                                        <h2>Create of Shadow <img src="/images/plus.png" alt="icon"></h2>
                                        <span class="tag">2 h 20 min</span>
                                        <span class="tag">2020</span>
                                        <span class="tag"><b>HD</b></span>
                                        <span class="tag"><b>16+</b></span>
                                    </div>
                                </a>
                            </div>
                            <div class="owl-items">
                                <a class="slide-one slide-two" href="#">
                                    <div class="slide-image" style="background-image: url(/images/s20.jpg);"></div>
                                    <div class="slide-content">
                                        <h2>Jusy Cry yourself <img src="/images/plus.png" alt="icon"></h2>
                                        <span class="tag">2 h 20 min</span>
                                        <span class="tag">2020</span>
                                        <span class="tag"><b>HD</b></span>
                                        <span class="tag"><b>16+</b></span>
                                    </div>
                                </a>
                            </div>

                            <div class="owl-items">
                                <a class="slide-one slide-two" href="#">
                                    <div class="slide-image" style="background-image: url(/images/s7.jpg);"></div>
                                    <div class="slide-content">
                                        <h2>Create of Shadow <img src="/images/plus.png" alt="icon"></h2>
                                        <span class="tag">2 h 20 min</span>
                                        <span class="tag">2020</span>
                                        <span class="tag"><b>HD</b></span>
                                        <span class="tag"><b>16+</b></span>
                                    </div>
                                </a>
                            </div>
                            <div class="owl-items">
                                <a class="slide-one slide-two" href="#">
                                    <div class="slide-image" style="background-image: url(images/s8.jpg);"></div>
                                    <div class="slide-content">
                                        <h2>Jusy Cry yourself <img src="images/plus.png" alt="icon"></h2>
                                        <span class="tag">2 h 20 min</span>
                                        <span class="tag">2020</span>
                                        <span class="tag"><b>HD</b></span>
                                        <span class="tag"><b>16+</b></span>
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
        <div class="category-wrapper slide-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-6 text-left mb-4 mt-4">
                        <h2>Watch in Your Language</h2>
                    </div>

                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="category-slider owl-carousel owl-theme">
                            <div class="owl-items">
                                <a href="search.html" class="category-wrap" style="background-image: url(/images/gb1.png);"><span>Spanish</span></a>
                            </div>

                            <div class="owl-items">
                                <a href="search.html" class="category-wrap" style="background-image: url(/images/gb2.png);"><span>Romania</span></a>
                            </div>
                            <div class="owl-items">
                                <a href="search.html" class="category-wrap" style="background-image: url(/images/gb3.png);"><span>English</span></a>
                            </div>
                            <div class="owl-items">
                                <a href="search.html" class="category-wrap" style="background-image: url(/images/gb4.png);"><span>Swiss</span></a>
                            </div>

                            <div class="owl-items">
                                <a href="search.html" class="category-wrap" style="background-image: url(/images/gb2.png);"><span>Italina</span></a>
                            </div>

                            <div class="owl-items">
                                <a href="search.html" class="category-wrap" style="background-image: url(/images/gb3.png);"><span>Urdu</span></a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- slider wrapper -->
        <!-- slider wrapper -->
        <div class="slide-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-6 text-left mb-4 mt-4">
                        <h2>Specials & Latest Movies</h2>
                    </div>

                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="slide-slider-full owl-carousel owl-theme">
                            <div class="owl-items">
                                <a class="slide-one" href="season.html">
                                    <div class="slide-image"><img src="/images/s13.jpg" alt="image"></div>
                                    <div class="slide-content">
                                        <h2>Second Man of Earth <img src="/images/plus.png" alt="icon"></h2>
                                        <p>Radhe is a singing prodigy determined to follow in the classical footsteps of his grandfather.</p>
                                        <span class="tag">2 h 20 min</span>
                                        <span class="tag">2020</span>
                                        <span class="tag"><b>HD</b></span>
                                        <span class="tag"><b>16+</b></span>
                                    </div>
                                </a>
                            </div>
                            {{-- <div class="owl-items">
                                <a class="slide-one" href="season.html">
                                    <div class="slide-image"><img src="/images/s14.jpg" alt="image"></div>
                                    <div class="slide-content">
                                        <h2>Defective Area <img src="/images/plus.png" alt="icon"></h2>
                                        <p>Radhe is a singing prodigy determined to follow in the classical footsteps of his grandfather.</p>
                                        <span class="tag">2 h 20 min</span>
                                        <span class="tag">2020</span>
                                        <span class="tag"><b>HD</b></span>
                                        <span class="tag"><b>16+</b></span>
                                    </div>
                                </a>
                            </div>
                            <div class="owl-items">
                                <a class="slide-one" href="season.html">
                                    <div class="slide-image"><img src="/images/s15.jpg" alt="image"></div>
                                    <div class="slide-content">
                                        <h2>Law of Order <img src="/images/plus.png" alt="icon"></h2>
                                        <p>Radhe is a singing prodigy determined to follow in the classical footsteps of his grandfather.</p>
                                        <span class="tag">2 h 20 min</span>
                                        <span class="tag">2020</span>
                                        <span class="tag"><b>HD</b></span>
                                        <span class="tag"><b>16+</b></span>
                                    </div>
                                </a>
                            </div>
                            <div class="owl-items">
                                <a class="slide-one" href="season.html">
                                    <div class="slide-image"><img src="/images/s16.jpg" alt="image"></div>
                                    <div class="slide-content">
                                        <h2>Ravata of Sky <img src="/images/plus.png" alt="icon"></h2>
                                        <p>Radhe is a singing prodigy determined to follow in the classical footsteps of his grandfather.</p>
                                        <span class="tag">2 h 20 min</span>
                                        <span class="tag">2020</span>
                                        <span class="tag"><b>HD</b></span>
                                        <span class="tag"><b>16+</b></span>
                                    </div>
                                </a>
                            </div>

                            <div class="owl-items">
                                <a class="slide-one" href="season.html">
                                    <div class="slide-image"><img src="/images/s5.jpg" alt="image"></div>
                                    <div class="slide-content">
                                        <h2>Law of Order <img src="images/plus.png" alt="icon"></h2>
                                        <p>Radhe is a singing prodigy determined to follow in the classical footsteps of his grandfather.</p>
                                        <span class="tag">2 h 20 min</span>
                                        <span class="tag">2020</span>
                                        <span class="tag"><b>HD</b></span>
                                        <span class="tag"><b>16+</b></span>
                                    </div>
                                </a>
                            </div>
                            <div class="owl-items">
                                <a class="slide-one" href="season.html">
                                    <div class="slide-image"><img src="images/s6.jpg" alt="image"></div>
                                    <div class="slide-content">
                                        <h2>Ravata of Sky <img src="images/plus.png" alt="icon"></h2>
                                        <p>Radhe is a singing prodigy determined to follow in the classical footsteps of his grandfather.</p>
                                        <span class="tag">2 h 20 min</span>
                                        <span class="tag">2020</span>
                                        <span class="tag"><b>HD</b></span>
                                        <span class="tag"><b>16+</b></span>
                                    </div>
                                </a> --}}
                            {{-- K --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- slider wrapper -->
         {{-- <div class="footer-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 text-left">
                        <h4 class="mb-4">We are digital agency, a small design agency based in paris as i was groping to remove the chain from about my victim’s neck only through language.</h4>
                    </div>
                    <div class="col-sm-6 text-left">
                        <img src="images/icon-21.png" alt="icon" class="icon-img">
                    </div> --}}
                    {{-- <div class="col-sm-5 offset-sm-1 text-right">
                        <form action="#" class="mt-0">
                            <input type="text" placeholder="Email">
                            <button>Submit</button>
                        </form>
                    </div>
                    <div class="col-sm-12">
                        <div class="middle-footer">
                            <div class="row">
                                <div class="col-md-4 col-lg-2 col-sm-6 col-xs-6 md-mb25">
                                    <h5>Social Link</h5>
                                    <ul>
                                        <li><a href="#">Facebook</a></li>
                                        <li><a href="#">Twitter</a></li>
                                        <li><a href="#">Instagram</a></li>
                                        <li><a href="#">Youtube</a></li>
                                        <li><a href="#">Dribble</a></li>
                                    </ul>
                                </div>
                                <div class="col-md-4 col-lg-2 col-sm-6 col-xs-6 md-mb25">
                                    <h5>ONLINE</h5>
                                    <ul>
                                        <li><a href="#">Web</a></li>
                                        <li><a href="#">Series</a></li>
                                        <li><a href="#">Natak</a></li>
                                        <li><a href="#">Comedy</a></li>
                                        <li><a href="#">Action</a></li>
                                    </ul>
                                </div>
                                <div class="col-md-4 col-lg-2 col-sm-6 col-xs-6 md-mb25">
                                    <h5>Language</h5>
                                    <ul>
                                        <li><a href="#">English</a></li>
                                        <li><a href="#">Spanish</a></li>
                                        <li><a href="#">Arab</a></li>
                                        <li><a href="#">Urdu</a></li>
                                        <li><a href="#">Brazil</a></li>
                                    </ul>
                                </div>
                                <div class="col-md-4 col-lg-2 col-sm-6 col-xs-6">
                                    <h5>Channel</h5>
                                    <ul>
                                        <li><a href="#">Makeup</a></li>
                                        <li><a href="#">Dresses</a></li>
                                        <li><a href="#">Girls</a></li>
                                        <li><a href="#">Sandals</a></li>
                                        <li><a href="#">Headphones</a></li>
                                    </ul>
                                </div>
                                <div class="col-md-4 col-lg-2 col-sm-6 col-xs-6">
                                    <h5>About</h5>
                                    <ul>
                                        <li><a href="#">FAQ</a></li>
                                        <li><a href="#">Term of use</a></li>
                                        <li><a href="#">Privacy Policy</a></li>
                                        <li><a href="#">Feedback</a></li>
                                        <li><a href="#">Careers</a></li>
                                    </ul>
                                </div>
                                <div class="col-md-4 col-lg-2 col-sm-6 col-xs-6">
                                    <h5 class="mb-3">Office</h5>
                                    <p style="width: 100%;">41 madison ave, floor 24 new work, NY 10010 <br>1-877-932-7111</p>
                                    <p style="width: 100%;">41 madison ave, floor 24 new work, NY 10010 <br>1-877-932-7111</p>
                                </div>
                            </div>
                        </div>
                    </div>--}}

                     {{-- <div class="col-sm-12 lower-footer"></div>
                    <div class="col-sm-6">
                        <p class="copyright-text">© 2020 copyright. All rights reserved.</p>
                    </div>
                    <div class="col-sm-6 text-right">
                        <p class="float-right copyright-text">In case of any concern, <a href="#">contact us</a></p>
                    </div>
                </div>
            </div>
        </div>

    </div> --}}

    <script src="js/plugin.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="js/scripts.js"></script>
    <script src="js/video-player.js"></script>
@endsection
</body>


<!-- Mirrored from uitheme.net/vstream/home-full.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 17 Oct 2023 03:29:25 GMT -->
</html>
