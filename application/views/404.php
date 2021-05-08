<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="keywords" content="candidates, career, employment, freelance, glassdoor, Human Resource Management, indeed, job board, job listing, job portal, job postings, jobs, listings, recruitment, resume">
<meta name="CreativeLayers" content="ATFN">
<!-- css file -->
<link rel="stylesheet" href="<?php base_url() ?>assets/css/bootstrap.min.css">
<link rel="stylesheet" href="<?php base_url() ?>assets/css/style.css">
<!-- Responsive stylesheet -->
<link rel="stylesheet" href="<?php base_url() ?>assets/css/responsive.css">
<!-- Title -->
<title>404|CareerUp</title>
<!-- Favicon -->
<link href="<?php base_url() ?>assets/images/favicon.ico" sizes="128x128" rel="shortcut icon" type="image/x-icon" />
<link href="<?php base_url() ?>assets/images/favicon.ico" sizes="128x128" rel="shortcut icon" />

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<div class="wrapper">
	<div class="preloader"></div>

	<!-- Main Header Nav -->
	<header class="header-nav style_one navbar-scrolltofixed main-menu">
		<div class="container">
		    <!-- Ace Responsive Menu -->
		    <nav>
		        <!-- Menu Toggle btn-->
		        <div class="menu-toggle">
		            <img class="nav_logo_img img-fluid" src="<?php base_url() ?>assets/images/header-logo.png" alt="header-logo.png">
		            <button type="button" id="menu-btn">
		                <span class="icon-bar"></span>
		                <span class="icon-bar"></span>
		                <span class="icon-bar"></span>
		            </button>
		        </div>
		        <a href="index.html" class="navbar_brand float-left dn-smd">
		            <img class="img-fluid mt10" src="<?php base_url() ?>assets/images/header-logo.png" alt="header-logo.png">
		        </a>
		        <!-- Responsive Menu Structure-->
		        <!--Note: declare the Menu style in the data-menu-style="horizontal" (options: horizontal, vertical, accordion) -->
		        <ul id="respMenu" class="ace-responsive-menu" data-menu-style="horizontal">
		            <li>
		                <a href="<?php echo base_url('Home'); ?>"><span class="title">Home</span></a>
		            </li>
		            <li>
		                <a href="<?php echo base_url('Jobs'); ?>"><span class="title">Jobs</span></a>
		            </li>
		            <li>
		                <a href="<?php echo base_url('About'); ?>"><span class="title">About</span></a>
		            </li>
					<li>
		                <a href="<?php echo base_url('Contact'); ?>"><span class="title">Contact</span></a>
		            </li>
		        </ul>
<!--		        <ul class="sign_up_btn pull-right dn-smd mt10">-->
<!--					<li><a href="#" class="btn btn-md" data-toggle="modal" data-target="#exampleModalCenter">Log<span class="dn-md">in</span>/Reg<span class="dn-md">ister</span></a></li>-->
<!--				</ul>-->
<!--Button trigger modal-->
		    </nav>
		    <!-- End of Responsive Menu -->
		</div>
	</header>
	<!-- Modal -->

	<!-- Main Header Nav For Mobile -->
	<div id="page" class="stylehome1 h0">
		<div class="mobile-menu">
			<div class="header stylehome1">
	            <img class="nav_logo_img img-fluid float-left mt25" src="<?php base_url() ?>assets/images/header-logo.png" alt="header-logo.png">
				<a class="bg-thm" href="#menu"><span></span></a>
			</div>
		</div><!-- /.mobile-menu -->
		<nav id="menu" class="stylehome1">
			<ul>
				<li>
					<a href="<?php echo base_url('Home'); ?>"><span class="title">Home</span></a>
				</li>
				<li>
					<a href="<?php echo base_url('Jobs'); ?>"><span class="title">Jobs</span></a>
				</li>
				<li>
					<a href="<?php echo base_url('About'); ?>"><span class="title">About</span></a>
				</li>
				<li>
					<a href="<?php echo base_url('Contact'); ?>"><span class="title">Contact</span></a>
				</li>
			</ul>
		</nav>
	</div>

	<!-- Our Error Page -->
	<section class="our-error bgc-fa">
		<div class="container">
			<div class="row">
				<div class="col-lg-10 offset-lg-1 text-center">
					<div class="error_page newsletter_widget">
						<div class="erro_code"><img class="img-fluid" src="<?php base_url() ?>assets/images/resource/404.png" alt="404.png"></div>
						<h4>We Are Sorry, Page Not Found</h4>
						<p>Unfortunately the page you were looking for could not be found. It may be temporarily unavailable, moved or no longer exist. Check the Url you entered for any mistakes and try again.</p>
					</div>
					<a class="text-thm mt25" href="<?php echo base_url('Home'); ?>">Back to Homepage <span class="flaticon-right-arrow pl10"></span></a>
				</div>
			</div>
		</div>
	</section>

	<!-- Our Footer -->
	<section class="footer_one">
		<div class="container">
			<div class="row">
				<div class="col-sm-4 col-md-4 col-md-3 col-lg-4">
					<div class="quick_link_widget">
						<h4>Quick Links</h4>
						<ul class="list-unstyled">
							<li><a href="<?php echo base_url('Jobs') ?>">Jobs</a></li>
						</ul>
						<ul class="list-unstyled">
							<li><a href="<?php echo base_url('About') ?>">About</a></li>
						</ul>
						<ul class="list-unstyled">
							<li><a href="<?php echo base_url('Contact') ?>">Contact</a></li>
						</ul>
						<ul class="list-unstyled">
							<li><a href="<?php echo base_url('Terms') ?>">Terms & Conditions</a></li>
						</ul>
					</div>
				</div>
				<div class="col-sm-4 col-md-4 col-md-3 col-lg-4">
					<div class="candidate_widget">
						<h4>For Candidates</h4>
						<ul class="list-unstyled">
							<li><a href="<?php echo base_url('Jobs') ?>">Dashboard</a></li>
							<li><a href="<?php echo base_url('Jobs') ?>">Search For Job</a></li>
						</ul>
					</div>
				</div>
				<div class="col-sm-4 col-md-4 col-md-3 col-lg-4">
					<div class="employe_widget">
						<h4>For Employers</h4>
						<ul class="list-unstyled">
							<li><a href="<?php echo base_url('BEDashboard') ?>">Dashboard</a></li>
							<li><a href="#">Post New Job</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Our Footer Bottom Area -->
	<section class="footer_bottom_area p0">
		<div class="container">
			<div class="row">
				<div class="col-lg-4 pb10 pt10">
					<div class="copyright-widget tac-smd mt20">
						<p>© <script>
								let dt = new Date();
								document.write(dt.getFullYear());
							</script> CareerUp. All Rights Reserved.</p>
					</div>
				</div>
			</div>
		</div>
	</section>
<a class="scrollToHome text-thm" href="#"><i class="flaticon-rocket-launch"></i></a>
</div>
<!-- Wrapper End -->
<script type="text/javascript" src="<?php base_url() ?>assets/js/jquery-3.3.1.js"></script>
<script type="text/javascript" src="<?php base_url() ?>assets/js/jquery-migrate-3.0.0.min.js"></script>
<script type="text/javascript" src="<?php base_url() ?>assets/js/popper.min.js"></script>
<script type="text/javascript" src="<?php base_url() ?>assets/js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php base_url() ?>assets/js/jquery.mmenu.all.js"></script>
<script type="text/javascript" src="<?php base_url() ?>assets/js/ace-responsive-menu.js"></script>
<script type="text/javascript" src="<?php base_url() ?>assets/js/bootstrap-select.min.js"></script>
<script type="text/javascript" src="<?php base_url() ?>assets/js/snackbar.min.js"></script>
<script type="text/javascript" src="<?php base_url() ?>assets/js/simplebar.js"></script>
<script type="text/javascript" src="<?php base_url() ?>assets/js/parallax.js"></script>
<script type="text/javascript" src="<?php base_url() ?>assets/js/scrollto.js"></script>
<script type="text/javascript" src="<?php base_url() ?>assets/js/jquery-scrolltofixed-min.js"></script>
<script type="text/javascript" src="<?php base_url() ?>assets/js/jquery.counterup.js"></script>
<script type="text/javascript" src="<?php base_url() ?>assets/js/wow.min.js"></script>
<script type="text/javascript" src="<?php base_url() ?>assets/js/progressbar.js"></script>
<script type="text/javascript" src="<?php base_url() ?>assets/js/slider.js"></script>
<script type="text/javascript" src="<?php base_url() ?>assets/js/timepicker.js"></script>
<!-- Custom script for all pages --> 
<script type="text/javascript" src="<?php base_url() ?>assets/js/script.js"></script>
</body>

<!-- Mirrored from grandetest.com/theme/html-careerup/404.php by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 26 Apr 2021 05:45:39 GMT -->
</html>
