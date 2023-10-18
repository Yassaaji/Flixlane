@extends('layout.app')
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from uitheme.net/vstream/single-full.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 17 Oct 2023 03:29:25 GMT -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Vstream - Media Landing Page</title>

    <link rel="stylesheet" href="css/themify-icons.css">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon.png">
    <!-- Custom Stylesheet -->
    <link rel="stylesheet" href="css/style.css">
</head>

<body class="full-wrap" style="background-color: black">
@section('content')
        <!-- banenr wrapper -->
        <div class="banner-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12">
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
                                <a href="video.html" class="btn btn-lg"><img src="images/play.png" alt="icn">Watch now</a>
                                <a href="#" class="icon-bttn"><i class="ti-plus text-white"></i></a>
                                <div class="icon-bttn">
                                    <i class="ti-sharethis text-white mr-4"></i>
                                    <div class="share-icons">
                                        <a href="#"><i class="ti-facebook"></i></a>
                                        <a href="#"><i class="ti-twitter-alt"></i></a>
                                        <a href="#"><i class="mr-0 ti-pinterest"></i></a>
                                    </div>
                                </div>

                            </div>
                            <div class="right-wrap" style="background-image: url(images/banner-2.jpg);"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- banenr wrapper -->

        <!-- crew wrapper -->
        <div class="slide-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-6 text-left mb-4 mt-4">
                        <h2>The Crew</h2>
                    </div>

                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="team-slider-full owl-carousel owl-theme">
                            <div class="owl-items"><a href="#" class="crew-wrap"><img src="images/team1.jpg" alt="team"><span>David Wenham</span></a></div>
                            <div class="owl-items"><a href="#" class="crew-wrap"><img src="images/team2.jpg" alt="team"><span>Johnny Depp</span></a></div>
                            <div class="owl-items"><a href="#" class="crew-wrap"><img src="images/team3.jpg" alt="team"><span>Javier Bardem</span></a></div>
                            <div class="owl-items"><a href="#" class="crew-wrap"><img src="images/team4.jpg" alt="team"><span>Brenton T</span></a></div>
                            <div class="owl-items"><a href="#" class="crew-wrap"><img src="images/team8.jpg" alt="team"><span>Kaya Scodelario</span></a></div>
                            <div class="owl-items"><a href="#" class="crew-wrap"><img src="images/team6.jpg" alt="team"><span>Kevin McNally</span></a></div>
                            <div class="owl-items"><a href="#" class="crew-wrap"><img src="images/team7.jpg" alt="team"><span>McNally</span></a></div>
                            <div class="owl-items"><a href="#" class="crew-wrap"><img src="images/team5.jpg" alt="team"><span>Wenham</span></a></div>
                            <div class="owl-items"><a href="#" class="crew-wrap"><img src="images/team8.jpg" alt="team"><span>Kaya Scodelario</span></a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


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
                                    <div class="slide-image"><img src="images/s1.jpg" alt="image"></div>
                                    <div class="slide-content">
                                        <h2>Made in haven <img src="images/plus.png" alt="icon"></h2>
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
                                    <div class="slide-image"><img src="images/s2.jpg" alt="image"></div>
                                    <div class="slide-content">
                                        <h2>Made in haven <img src="images/plus.png" alt="icon"></h2>
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
                                    <div class="slide-image"><img src="images/s3.jpg" alt="image"></div>
                                    <div class="slide-content">
                                        <h2>Made in haven <img src="images/plus.png" alt="icon"></h2>
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
                                    <div class="slide-image"><img src="images/s4.jpg" alt="image"></div>
                                    <div class="slide-content">
                                        <h2>Made in haven <img src="images/plus.png" alt="icon"></h2>
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

        <div class="footer-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 text-left">
                        <h4 class="mb-4">We are digital agency, a small design agency based in paris as i was groping to remove the chain from about my victim’s neck only through language.</h4>
                    </div>
                    <div class="col-sm-6 text-left">
                        <img src="images/icon-21.png" alt="icon" class="icon-img">
                    </div>
                    <div class="col-sm-5 offset-sm-1 text-right">
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
                    </div>

                    <div class="col-sm-12 lower-footer"></div>
                    <div class="col-sm-6">
                        <p class="copyright-text">© 2020 copyright. All rights reserved.</p>
                    </div>
                    <div class="col-sm-6 text-right">
                        <p class="float-right copyright-text">In case of any concern, <a href="#">contact us</a></p>
                    </div>
                </div>
            </div>
        </div>

    </div>




    <script src="js/plugin.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="js/scripts.js"></script>
@endsection
</body>


<!-- Mirrored from uitheme.net/vstream/single-full.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 17 Oct 2023 03:29:25 GMT -->
</html>
