<?php
/**
 * Created & developed by treCoops
 * For: degree final
 * Campus ID: COBSCCOMP191P-032
 * Coventry ID: 9631605
 * Date: 2021-04-27
 * Time: 11:40
 */

	$User_Session = $this->session->userdata('User_Session');
?>


<header class="header-nav menu_style_home_two navbar-scrolltofixed stricky main-menu">
	<div class="container">
		<!-- Ace Responsive Menu -->
		<nav>
			<!-- Menu Toggle btn-->
			<div class="menu-toggle">
				<img class="nav_logo_img img-fluid" src="<?php echo base_url() ?>assets/images/header-logo2.png" alt="header-logo2.png">
				<button type="button" id="menu-btn">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
			</div>
			<a href="<?php echo base_url('Home'); ?>" class="navbar_brand float-left dn-smd">
				<img class="img-fluid" src="<?php echo base_url() ?>assets/images/header-logo2.png" alt="header-logo2.png">
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

				<?php if($User_Session != null){ ?>
					<li>
						<a href="<?php echo base_url('Partnerships') ?>"><span class="title">Partnerships</span></a>
					</li>
				<?php } ?>

			</ul>

			<?php if ($User_Session == null) { ?>
				<ul class="sign_up_btn pull-right dn-smd">
					<li><a href="<?php echo base_url('Login'); ?>" class="btn btn-md btn-dark">Log<span class="dn-md">in</span>/Reg<span class="dn-md">ister</span></a></li>
				</ul>
			<?php }else { ?>
				<ul class="header_user_notif pull-right dn-smd">
					<li class="user_notif">
					</li>
					<li class="user_setting">
						<div class="dropdown">
							<?php if($User_Session['Profile_Image'] != null){ ?>
								<a class="btn dropdown-toggle" href="#" data-toggle="dropdown"><img class="rounded-circle" src="<?php base_url() ?>assets/images/profile/<?php echo $User_Session['Profile_Image'] ?>" alt="8.jpg"> <span class="pl15 pr15"><?php echo $User_Session['Username'] ?></span></a>
							<?php }else{ ?>
								<a class="btn dropdown-toggle" href="#" data-toggle="dropdown"><img class="rounded-circle" id="avatar" alt="8.jpg"> <span class="pl15 pr15"><?php echo $User_Session['Username'] ?></span></a>
							<?php } ?>
							<div class="dropdown-menu">
								<div class="user_set_header">
									<p>Hi, <?php echo $User_Session['Username'] ?> <br><span class="address"><?php echo $User_Session['Email'] ?></span></p>
								</div>

								<?php if($User_Session['User_Job'] == "Candidate"){ ?>
									<div class="user_setting_content">
										<?php if($nav == 'profile_c'){ ?>
											<a class="dropdown-item active" href="<?php echo base_url('BCProfile'); ?>"><span class="flaticon-profile"></span> Profile</a>
										<?php } else { ?>
											<a class="dropdown-item" href="<?php echo base_url('BCProfile'); ?>"><span class="flaticon-profile"></span> Profile</a>
										<?php } ?>

										<?php if($nav == 'resume_c'){ ?>
											<a class="dropdown-item active" href="<?php echo base_url('BCResume'); ?>"><span class="flaticon-resume"></span> Resume</a>
										<?php } else { ?>
											<a class="dropdown-item" href="<?php echo base_url('BCResume'); ?>"><span class="flaticon-resume"></span> Resume</a>
										<?php } ?>

										<?php if($nav == 'applied_c'){ ?>
											<a class="dropdown-item active" href="<?php echo base_url('BCAppliedJobs'); ?>"><span class="flaticon-paper-plane"></span> Applied Jobs</a>
										<?php } else { ?>
											<a class="dropdown-item" href="<?php echo base_url('BCAppliedJobs'); ?>"><span class="flaticon-paper-plane"></span> Applied Jobs</a>
										<?php } ?>

										<?php if($nav == 'cv_manager_c'){ ?>
											<a class="dropdown-item active" href="<?php echo base_url('BCCVManager'); ?>"><span class="flaticon-analysis"></span> CV Manager</a>
										<?php } else { ?>
											<a class="dropdown-item" href="<?php echo base_url('BCCVManager'); ?>"><span class="flaticon-analysis"></span> CV Manager</a>
										<?php } ?>

										<?php if($nav == 'job_alert_c'){ ?>
											<a class="dropdown-item active" href="<?php echo base_url('BCJobAlerts'); ?>"><span class="flaticon-alarm"></span> Job Alerts</a>
										<?php } else { ?>
											<a class="dropdown-item" href="<?php echo base_url('BCJobAlerts'); ?>"><span class="flaticon-alarm"></span> Job Alerts</a>
										<?php } ?>

										<?php if($nav == 'change_password_c'){ ?>
											<a class="dropdown-item active" href="<?php echo base_url('BCChangePassword'); ?>"><span class="flaticon-locked"></span> Change Password</a>
										<?php } else { ?>
											<a class="dropdown-item" href="<?php echo base_url('BCChangePassword'); ?>"><span class="flaticon-locked"></span> Change Password</a>
										<?php } ?>

										<a class="dropdown-item" href="<?php echo base_url('Login/logout'); ?>"><span class="flaticon-logout"></span> Logout</a>
									</div>
								<?php }else { ?>

									<div class="user_setting_content">

										<?php if($nav == 'profile'){ ?>
											<a class="dropdown-item active" href="<?php echo base_url('BEProfile'); ?>"><span class="flaticon-profile"></span> Company Profile</a>
										<?php } else { ?>
											<a class="dropdown-item" href="<?php echo base_url('BEProfile'); ?>"><span class="flaticon-profile"></span> Company Profile</a>
										<?php } ?>

										<?php if($nav == 'post'){ ?>
											<a class="dropdown-item active" href="<?php echo base_url('BEPost'); ?>"><span class="flaticon-resume"></span> Post a New Job</a>
										<?php } else { ?>
											<a class="dropdown-item" href="<?php echo base_url('BEPost'); ?>"><span class="flaticon-resume"></span> Post a New Job</a>
										<?php } ?>

										<?php if($nav == 'manage'){ ?>
											<a class="dropdown-item active" href="<?php echo base_url('BEManageJobs'); ?>"><span class="flaticon-paper-plane"></span> Manage Jobs</a>
										<?php } else { ?>
											<a class="dropdown-item" href="<?php echo base_url('BEManageJobs'); ?>"><span class="flaticon-paper-plane"></span> Manage Jobs</a>
										<?php } ?>

										<?php if($nav == 'resumes'){ ?>
											<a class="dropdown-item active" href="<?php echo base_url('BEResumes'); ?>"><span class="flaticon-analysis"></span> Shortlisted Resumes</a>
										<?php } else { ?>
											<a class="dropdown-item" href="<?php echo base_url('BEResumes'); ?>"><span class="flaticon-analysis"></span> Shortlisted Resumes</a>
										<?php } ?>

										<?php if($nav == 'partnerships'){ ?>
											<a class="dropdown-item active" href="<?php echo base_url('BEPartnerships'); ?>"><span class="flaticon-user"></span> Partnerships</a>
										<?php } else { ?>
											<a class="dropdown-item" href="<?php echo base_url('BEPartnerships'); ?>"><span class="flaticon-user"></span> Partnerships</a>
										<?php } ?>

										<?php if($nav == 'change_e'){ ?>
											<a class="dropdown-item active" href="<?php echo base_url('BEChangePassword'); ?>"><span class="flaticon-locked"></span> Change Password</a>
										<?php } else { ?>
											<a class="dropdown-item" href="<?php echo base_url('BEChangePassword'); ?>"><span class="flaticon-locked"></span> Change Password</a>
										<?php } ?>

										<a class="dropdown-item" href="<?php echo base_url('Login/logout'); ?>"><span class="flaticon-logout"></span> Logout</a>

									</div>

								<?php } ?>


							</div>
						</div>
					</li>
				</ul>
			<?php } ?>

		</nav>
		<!-- End of Responsive Menu -->
	</div>
</header>

<!--<div id="page" class="stylehome1 h0">-->
<!--	<div class="mobile-menu">-->
<!--		<ul class="header_user_notif pull-right">-->
<!--			<li class="user_notif">-->
<!--			</li>-->
<!--			<li class="user_setting">-->
<!--				<div class="dropdown">-->
<!--					<a class="btn dropdown-toggle" href="#" data-toggle="dropdown"><img class="rounded-circle" src="--><?php //base_url() ?><!--assets/images/Users/--><?php //echo $User_Session['Profile_Image'] ?><!--" alt="8.jpg" title="--><?php //echo $User_Session['Username'] ?><!--"></a>-->
<!--					<div class="dropdown-menu">-->
<!--						<div class="user_set_header">-->
<!--							<p>Hi, --><?php //echo $User_Session['Username'] ?><!-- <br><span class="address">--><?php //echo $User_Session['Email'] ?><!--</span></p>-->
<!--						</div>-->
<!--						<div class="user_setting_content">-->
<!--							<a class="dropdown-item active" href="page-candidates-dashboard.html"><span class="flaticon-dashboard"></span> Dashboard</a>-->
<!--							<a class="dropdown-item" href="page-candidates-profile.html"><span class="flaticon-profile"></span> Profile</a>-->
<!--							<a class="dropdown-item" href="page-candidates-my-resume.html"><span class="flaticon-resume"></span> Resume</a>-->
<!--							<a class="dropdown-item" href="page-candidates-applied-jobs.html"><span class="flaticon-paper-plane"></span> Applied Jobs</a>-->
<!--							<a class="dropdown-item" href="page-candidates-cv-manager.html"><span class="flaticon-analysis"></span> CV Manager</a>-->
<!--							<a class="dropdown-item" href="page-candidates-favourite-jobs.html"><span class="flaticon-favorites"></span> Favourite Jobs</a>-->
<!--							<a class="dropdown-item" href="page-candidates-message.html"><span class="flaticon-chat"></span> Messages</a>-->
<!--							<a class="dropdown-item" href="page-candidates-review.html"><span class="flaticon-rating"></span> Reviews</a>-->
<!--							<a class="dropdown-item" href="page-candidates-job-alert.html"><span class="flaticon-alarm"></span> Job Alerts</a>-->
<!--							<a class="dropdown-item" href="page-candidates-change-password.html"><span class="flaticon-locked"></span> Change Password</a>-->
<!--							<a class="dropdown-item" href="loging_register.html"><span class="flaticon-logout"></span> Logout</a>-->
<!--							<a class="dropdown-item" href="#"><span class="flaticon-rubbish-bin"></span> Delete Profile</a>-->
<!--						</div>-->
<!--					</div>-->
<!--				</div>-->
<!--			</li>-->
<!--		</ul>-->
<!--		<div class="header stylehome1 dashbord_mobile_logo">-->
<!--			<img class="nav_logo_img img-fluid float-left mt25" src="--><?php //base_url() ?><!--assets/images/header-logo.png" alt="header-logo.png">-->
<!--			<a class="bg-thm" href="#menu"><span></span></a>-->
<!--		</div>-->
<!--	</div>-->
<!--	<nav id="menu" class="stylehome1">-->
<!--		<ul>-->
<!--			<li><span>Home</span>-->
<!--				<ul>-->
<!--					<li><a href="index.html">Home One</a></li>-->
<!--					<li><a href="index.html">Home Two</a></li>-->
<!--					<li><a href="index3.html">Home Three</a></li>-->
<!--					<li><a href="index4.html">Home Four</a></li>-->
<!--					<li><a href="index5.html">Home Five</a></li>-->
<!--					<li><a href="index6.html">Home Six</a></li>-->
<!--				</ul>-->
<!--			</li>-->
<!---->
<!--			<li><a href="#">Post a Job</a></li>-->
<!--			<li><a class="text-thm" href="loging_register.html">Login/Register</a></li>-->
<!--		</ul>-->
<!--	</nav>-->
<!--</div>-->

<!-- Main Header Nav For Mobile -->

<div id="page" class="stylehome1 h0">
	<div class="mobile-menu">
		<div class="header stylehome1">
			<img class="nav_logo_img img-fluid float-left mt30" src="<?php echo base_url() ?>assets/images/header-logo.png" alt="header-logo.png">
			<a class="bg-thm" href="#menu"><span></span></a>
		</div>
	</div>
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
			<?php if ($User_Session == null) { ?>
				<li><a class="title" href="<?php echo base_url('Login'); ?>">Login</a></li>
			<?php }else { ?>
				<li><a href="<?php echo base_url('Partnerships') ?>"><span class="title">Partnerships</span></a></li>
				<li><a href="<?php echo base_url('Login/logout') ?>"><span class="title">Logout</span></a></li>
			<?php } ?>

		</ul>
	</nav>
</div>
