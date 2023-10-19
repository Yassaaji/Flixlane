@extends('layout.app')
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from uitheme.net/vstream/search-full.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 17 Oct 2023 03:29:25 GMT -->
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

        <!-- slider wrapper -->
        <div class="slide-wrapper search-wrap-slide">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-6 text-left mb-4 mt-4">
                        <h2 style="color: white">Specials & Latest Movies</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12 mt-4">
                        <div class="slide-slider-full owl-carousel owl-theme">
                            <div class="owl-items">
                                <a class="slide-one" href="{{ url('/video') }}">
                                    <div class="slide-image"><img src="images/s8.jpg" alt="image"></div>
                                    <div class="slide-content">
                                        <h2>Sky Staar <i class="bi bi-heart-fill" style="font-size: 15px; margin-left: 100px; padding-left: 50px"></i> <span class="total-like" style="font-size: 15px; padding-left: 5px">250</span></h2>
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
    </div>




    <script src="js/plugin.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="js/scripts.js"></script>
 @endsection
</body>


<!-- Mirrored from uitheme.net/vstream/search-full.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 17 Oct 2023 03:29:25 GMT -->
</html>
