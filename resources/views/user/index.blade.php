
<!DOCTYPE html>
<html lang="en-US">

<!-- Mirrored from uitheme.net/vstream/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 17 Oct 2023 03:28:57 GMT -->
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<title>vStream -Responsive Multi-purpose HTML5 Template</title>
	<meta name="description" content="Cabe - Responsive Multi-purpose HTML5 Template">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- STYLESHEETS -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700" rel="stylesheet">
	<link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css" media="all">
	<link rel="stylesheet" href="css/owl.theme.default.min.css" type="text/css" media="all">

	<link rel="stylesheet" href="../../maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" href="css/themify-icons.css">


	<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <style>
    	body{font-family: 'Montserrat', sans-serif; color: #111;font-size: 14px;font-weight: 400;}
    	.h100 {height: 100vh;}
    	.header-wrapper {position: absolute; top:0; width: 100%; padding:20px 0; border-bottom: 1px solid  #ffdbc6;}
		.p100 {padding: 100px 0;}
		.pt100 {padding-top: 100px ;}
		.pt50 {padding-top: 50px;}
		.pb100 {padding-bottom: 100px; }
		.pb50 {padding-bottom: 50px; }
		.banner-content {padding: 0;position: absolute;top: 50%; width: 100%;-webkit-transform: translateY(-50%);-moz-transform: translateY(-50%);-ms-transform: translateY(-50%);-o-transform: translateY(-50%);transform: translateY(-50%);}
		.bscover {background-size: cover; }
		.title-text {font-size: 46px; line-height: 1.45;color: #161537; }
		.title-text span {position: relative;display: inline-block;}
		.title-text span:after {background-color: #ccecfd; width: 100%; height: 6px; content: ''; display: inline-block; position: absolute; left:0; bottom: 10px; z-index: -1;}
		.title-text2 {font-size: 36px; line-height: 1.4;color: #161537; }

		.logo {
            float: left;
            font-size: 26px;
            font-weight: 700;
            color: #132977;
            line-height: 20px;
            position: relative;
            top:-3px;
        }
		.btn {font-size: 11px; letter-spacing: 1px; font-weight: 600; }
		.btn-lg {padding: 18px 55px; }
		ul li a {font-weight: 500; font-size: 14px; }
		p {line-height: 30px;  }
		.icon-div {padding-left: 100px; position: relative; }
		.mb80 {margin-bottom: 80px; }
		.icon-div i {font-size: 40px; color: #132977; position: absolute; top:0px; left:20px;}
		.icon-div h3 {font-size: 24px; margin-bottom: 15px;font-weight: 600;  }
		.icon-div p {font-size: 13px; }
		.demo-item img {width: 100%; box-shadow: 0px 40px 60px -40px rgba(0, 0, 0, 0.5);}
		.demo-item a span { padding: 30px 0 30px 0;text-align: center;display: block;text-decoration: none !important;font-weight: 600;color: #111;font-size: 16px;letter-spacing: 0.4px;text-decoration: none; }
		.brand-wrapper {position: relative; top:-120px; }
		.brand-wrapper img {margin-right: 20px;}
		.brand-wrapper .col-sm-3 {display: flex;}
		.brand-wrapper h4 {font-size: 16px; text-align: left; }
		.brand-wrapper h4 span {font-size: 14px; font-weight: 400; margin-top: 5px; display: block;}
		.bg-black{background-color: #111;}
        .bg-primary {background-color: #132977;}
        .banner-wrapper {background-color: antiquewhite;}
        .btn-primary {
            color: #fff;
            background-color: #132977;
            border-color: #132977;
        }
        .scroll-tiger {color: #132977;}
        .header-wrapper .logo i {
            margin-right: 0px;
            font-size: 30px;
            position: relative;
            top: 5px;
            left: 0px;
        }

		.icon-scroll {position: relative;  left:15px;  }
		.icon-scroll:before {position: absolute;right: -18px;}
		.icon-scroll {width: 30px;height: 50px;margin-left: -20px;bottom: -57%;margin-top: -35px;box-shadow: inset 0 0 0 2px #007bff;border-radius: 25px;transition: right .5s;}
		.icon-scroll:before {content: '';width: 6px;height: 6px;background: #007bff;margin-left: -4px;top: 8px;border-radius: 4px;-webkit-animation-duration: 1.5s;animation-duration: 1.5s;-webkit-animation-iteration-count: infinite;animation-iteration-count: infinite;-webkit-animation-name: scroll;animation-name: scroll;left: 50%;}
		.icon-scroll:after {content: "";position: absolute;z-index: -1; width: 58px;height: 80px;border-radius: 25px;transform: translate(-10px, -10px);transition: all .3s;}
		@-webkit-keyframes scroll {0% {    opacity: 1;}100% {    opacity: 0;    -webkit-transform: translateY(35px);    transform: translateY(35px);}}
		@keyframes scroll {0% {    opacity: 1;}100% {    opacity: 0;    -webkit-transform: translateY(35px);    transform: translateY(35px);}}


		@media (min-width: 1800px) {
			.max-container.container-fluid {
			    padding: 0 200px;
			}
		}
		@media (max-width: 1500px) {
			.title-text {font-size: 38px; margin-top: 20% !important; margin-bottom: 20px !important;}
			.btn-lg {padding: 15px 40px;}
			.icon-scroll {bottom: -135px; }
            .brand-wrapper {top:-90px;}
		}
		@media (max-width: 1300px) {
			.icon-scroll {display: none;}
			.bscover {background-repeat: no-repeat; background-position: center center !important;}
		}
		@media (max-width: 1024px) {
			.title-text { font-size: 32px; }
			.brand-wrapper img {max-width: 50px;height: max-content;}
			.brand-wrapper h4 {font-size: 14px; }
			.banner-wrapper {    background-position: top left 10% !important;  }
		}
		@media (max-width: 768px) {
			.brand-wrapper {display: none;}
			.banner-wrapper {    background-position: top left 30% !important;  }
			.col-xs-3 {width: 33.3%;}
			.col-xs-9 {width: 66.6%;}
			.title-text2 {font-size: 30px; }
		}
		@media (max-width: 480px) {
			.banner-wrapper { background-position: top left 23% !important;  }
			.list-inline li:last-child {display: none;}
		}
    </style>

</head>

<body class="landing">

	<main>
		<div class="header-wrapper">
			<div class="container-fluid max-container">
				<div class="row">
					<div class="col-md-4 col-sm-3 col-xs-3"><a href="index.html" class="logo"><img src="images/logo.png"></a></div>
					<div class="col-md-6 offset-md-2 col-sm-9 offset-sm-0 col-xs-9">
						<ul class="list-inline float-right mb-0 mt-1">
							<li class="list-inline-item pl-4 pr-4"><a class="scroll-tiger" href="#feature">Features</a></li>
							<li class="list-inline-item pl-4 pr-4"><a class="scroll-tiger" href="#demo">Demo</a></li>
							<li class="list-inline-item pl-4 pr-4"><a class="scroll-tiger" href="#contact">Contact</a></li>
						</ul>

					</div>
				</div>
			</div>
		</div>

		<div class="banner-wrapper h100 bscover" style="background-image: url(images/landing-banner.png);">
			<div class="banner-content">
				<div class="container-fluid max-container">
					<div class="row">
						<div class="col-xl-4 col-md-5 col-sm-8">

							<h2 class="title-text mb-5 mt-5"><b><span>Media</span> and Video Streaming html Template</b></h2>
							<a href="#" class="btn btn-lg btn-primary mr-4">PURCHASE NOW</a>
							<div class="icon-scroll pos-bottom-center icon-white"></div>
						</div>
                        <div class="col-xl-8 col-md-7 col-sm-4">
                            <img src="images/phone-3.png" alt="image" class="img-fluid">
                        </div>
					</div>
				</div>
			</div>
		</div>

		<section class="brand-wrapper">
			<div class="container">
				<div class="row">
					<div class="col-sm-3 text-center">
						<img src="images/download1.png" alt="download">
						<h4 class="mt-2">Bootstrap 4.x<span>[bootstrap]</span></h4>
					</div>
					<div class="col-sm-3 text-center">
						<img src="images/download2.png" alt="download">
						<h4 class="mt-2">HTML 5<span>[html]</span></h4>
					</div>
					<div class="col-sm-3 text-center">
						<img src="images/download3.png" alt="download">
						<h4 class="mt-2">jQuery<span>[jquery]</span></h4>
					</div>
					<div class="col-sm-3 text-center">
						<img src="images/download4.png" alt="download">
						<h4 class="mt-2">SASS<span>[sass]</span></h4>
					</div>
				</div>
			</div>
		</section>

		<div class="section pb50 pt50" id="feature">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-md-8 col-lg-6 text-center">
						<h2 class="title-text2 mb-4"><b>Explore Feature</b></h2>
						<p>xChat powers thousands of apps at some of the smartest companies around the world. Be a part of professional community.</p>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-12 pt100"></div>
					<div class="col-xl-4 col-lg-6">
						<div class="icon-div mb80">
							<i class="ti-gift"></i>
							<h3>Developer Friendly</h3>
							<p>Reproduction of the most popular apps, such as Google Analytics, DIgitalOcean, Worpdress, Todoist, etc</p>
						</div>
					</div>
					<div class="col-xl-4 col-lg-6">
						<div class="icon-div mb80">
							<i class="ti-reload"></i>
							<h3>Documentation</h3>
							<p>Reproduction of the most popular apps, such as Google Analytics, DIgitalOcean, Worpdress, Todoist, etc</p>
						</div>
					</div>
					<div class="col-xl-4 col-lg-6">
						<div class="icon-div mb80">
							<i class="ti-medall-alt"></i>
							<h3>Quality Code</h3>
							<p>Reproduction of the most popular apps, such as Google Analytics, DIgitalOcean, Worpdress, Todoist, etc</p>
						</div>
					</div>
					<div class="col-xl-4 col-lg-6">
						<div class="icon-div mb80">
							<i class="ti-comments"></i>
							<h3>24/7 Support</h3>
							<p>Reproduction of the most popular apps, such as Google Analytics, DIgitalOcean, Worpdress, Todoist, etc</p>
						</div>
					</div>
					<div class="col-xl-4 col-lg-6">
						<div class="icon-div mb80">
							<i class="ti-panel"></i>
							<h3>Dark Mode</h3>
							<p>Reproduction of the most popular apps, such as Google Analytics, DIgitalOcean, Worpdress, Todoist, etc</p>
						</div>
					</div>
					<div class="col-xl-4 col-lg-6">
						<div class="icon-div mb80">
							<i class="ti-user"></i>
							<h3>User Friendly</h3>
							<p>Reproduction of the most popular apps, such as Google Analytics, DIgitalOcean, Worpdress, Todoist, etc</p>
						</div>
					</div>
					<div class="col-xl-4 col-lg-6">
						<div class="icon-div mb80">
							<i class="ti-bar-chart"></i>
							<h3>Clean Component</h3>
							<p>Reproduction of the most popular apps, such as Google Analytics, DIgitalOcean, Worpdress, Todoist, etc</p>
						</div>
					</div>
					<div class="col-xl-4 col-lg-6">
						<div class="icon-div mb80">
							<i class="ti-package"></i>
							<h3>12 Color  Option</h3>
							<p>Reproduction of the most popular apps, such as Google Analytics, DIgitalOcean, Worpdress, Todoist, etc</p>
						</div>
					</div>
					<div class="col-xl-4 col-lg-6">
						<div class="icon-div mb80">
							<i class="ti-stats-down"></i>
							<h3>Apps Pages</h3>
							<p>Reproduction of the most popular apps, such as Google Analytics, DIgitalOcean, Worpdress, Todoist, etc</p>
						</div>
					</div>

				</div>
			</div>
		</div>
	</main>
</body>
</html>
