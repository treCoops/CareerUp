<?php
/**
 * Created & developed by treCoops
 * For: degree final
 * Campus ID: COBSCCOMP191P-032
 * Coventry ID: 9631605
 * Date: 2021-04-27
 * Time: 11:40
 */
?>


<header class="header-nav menu_style_home_two navbar-scrolltofixed stricky main-menu">
	<div class="container">
		<!-- Ace Responsive Menu -->
		<nav>
			<!-- Menu Toggle btn-->
			<div class="menu-toggle">
				<img class="nav_logo_img img-fluid" src="<?php base_url() ?>assets/images/header-logo2.png" alt="header-logo2.png">
				<button type="button" id="menu-btn">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
			</div>
			<a href="<?php echo base_url('Home'); ?>" class="navbar_brand float-left dn-smd">
				<img class="img-fluid" src="<?php base_url() ?>assets/images/header-logo2.png" alt="header-logo2.png">
			</a>
			<!-- Responsive Menu Structure-->
			<!--Note: declare the Menu style in the data-menu-style="horizontal" (options: horizontal, vertical, accordion) -->
			<ul id="respMenu" class="ace-responsive-menu" data-menu-style="horizontal">
				<li>
					<a href="<?php echo base_url('Home'); ?>"><span class="title">Home</span></a>
				</li>
				<li>
					<a href="<?php echo base_url('HowItWork') ?>"><span class="title">How It Works!</span></a>
				</li>
				<li>
					<a href="<?php echo base_url('About') ?>"><span class="title">About</span></a>
				</li>
				<li>
					<a href="<?php echo base_url('Contact') ?>"><span class="title">Contact</span></a>
				</li>
				<li>
					<a href="<?php echo base_url('Jobs') ?>"><span class="title">Jobs</span></a>
				</li>

<!--				<li>-->
<!--					<a href="#"><span class="title">Employer</span></a>-->
<!--					<ul>-->
<!--						<li>-->
<!--							<a href="#">Employer List</a>-->
<!--							<ul>-->
<!--								<li><a href="employer_list.html">List V1</a></li>-->
<!--								<li><a href="page-employer-list-v2.html">List V2</a></li>-->
<!--								<li><a href="page-employer-list-v3.html">List V3</a></li>-->
<!--							</ul>-->
<!--						</li>-->
<!--						<li>-->
<!--							<a href="#">Employer Single</a>-->
<!--							<ul>-->
<!--								<li><a href="page-employer-single-v1.html">Single V1</a></li>-->
<!--								<li><a href="employer_single.html">Single V2</a></li>-->
<!--								<li><a href="page-employer-single-v3.html">Single V3</a></li>-->
<!--							</ul>-->
<!--						</li>-->
<!--						<li>-->
<!--							<a href="#">Employer Admin</a>-->
<!--							<ul>-->
<!--								<li><a href="page-employer-dashboard.html">Dashboard</a></li>-->
<!--								<li><a href="page-employer-profile.html">Profile</a></li>-->
<!--								<li><a href="page-employer-post-job.html">Post Job</a></li>-->
<!--								<li><a href="page-employer-manage-job.html">Manage Job</a></li>-->
<!--								<li><a href="page-employer-resume.html">Resume</a></li>-->
<!--								<li><a href="page-employer-packages.html">Packages</a></li>-->
<!--								<li><a href="page-employer-transactions.html">Transactions</a></li>-->
<!--								<li><a href="page-employer-change-password.html">Change Password</a></li>-->
<!--							</ul>-->
<!--						</li>-->
<!--					</ul>-->
<!--				</li>-->

			</ul>
			<ul class="sign_up_btn pull-right dn-smd">
				<li><a href="<?php echo base_url('Login'); ?>" class="btn btn-md btn-dark">Log<span class="dn-md">in</span>/Reg<span class="dn-md">ister</span></a></li>
			</ul><!-- Button trigger modal -->
		</nav>
		<!-- End of Responsive Menu -->
	</div>
</header>

<!-- Main Header Nav For Mobile -->
<div id="page" class="stylehome1 h0">
	<div class="mobile-menu">
		<div class="header stylehome1">
			<img class="nav_logo_img img-fluid float-left mt30" src="<?php base_url() ?>assets/images/header-logo.png" alt="header-logo.png">
			<a class="bg-thm" href="#menu"><span></span></a>
		</div>
	</div><!-- /.mobile-menu -->
	<nav id="menu" class="stylehome1">
		<ul>
			<li>
				<a href="<?php echo base_url('Home'); ?>"><span class="title">Home</span></a>
			</li>
			<li>
				<a href="<?php echo base_url('HowItWork') ?>"><span class="title">How It Works!</span></a>
			</li>
			<li>
				<a href="<?php echo base_url('About') ?>"><span class="title">About</span></a>
			</li>
			<li>
				<a href="<?php echo base_url('Contact') ?>"><span class="title">Contact</span></a>
			</li>
			<li>
				<a href="<?php echo base_url('Jobs') ?>"><span class="title">Jobs</span></a>
			</li>
<!--			<li>-->
<!--				<span>Candidates</span>-->
<!--				<ul>-->
<!--					<li><span>Candidates List</span>-->
<!--						<ul>-->
<!--							<li><a href="candidates_list.html">List V1</a></li>-->
<!--							<li><a href="page-candidates-list-v2.html">List V2</a></li>-->
<!--							<li><a href="page-candidates-list-v3.html">List V3</a></li>-->
<!--						</ul>-->
<!--					</li>-->
<!--					<li><span>Candidates Single</span>-->
<!--						<ul>-->
<!--							<li><a href="page-candidates-single-v1.html">Single v1</a></li>-->
<!--							<li><a href="candidates_single.html">Single v2</a></li>-->
<!--							<li><a href="page-candidates-single-v3.html">Single v3</a></li>-->
<!--						</ul>-->
<!--					</li>-->
<!--					<li><span>Candidates Admin</span>-->
<!--						<ul>-->
<!--							<li><a href="page-candidates-dashboard.html">Dashboard</a></li>-->
<!--							<li><a href="page-candidates-profile.html">Profile</a></li>-->
<!--							<li><a href="page-candidates-my-resume.html">My Resume</a></li>-->
<!--							<li><a href="page-candidates-applied-jobs.html">Applied Jobs</a></li>-->
<!--							<li><a href="page-candidates-cv-manager.html">Cv Manager</a></li>-->
<!--							<li><a href="page-candidates-favourite-jobs.html">Favourite Jobs</a></li>-->
<!--							<li><a href="page-candidates-message.html">Message</a></li>-->
<!--							<li><a href="page-candidates-review.html">Review</a></li>-->
<!--							<li><a href="page-candidates-job-alert.html">Job Alert</a></li>-->
<!--							<li><a href="page-candidates-change-password.html">Change Password</a></li>-->
<!--						</ul>-->
<!--					</li>-->
<!---->
<!--				</ul>-->
<!--			</li>-->
			<li><a class="text-thm" href="<?php echo base_url('Login'); ?>">Login/Register</a></li>
		</ul>
	</nav>
</div>
