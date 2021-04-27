<?php
/**
 * Created & developed by treCoops
 * For: degree final
 * Campus ID: COBSCCOMP191P-032
 * Coventry ID: 9631605
 * Date: 2021-04-27
 * Time: 13:33
 */
?>

<div class="col-sm-12 col-lg-4 col-xl-3 dn-smd">

<!--	Candidate Area-->

<!--	<div class="user_profile">-->
<!--		<div class="media">-->
<!--			<img src="--><?php //base_url() ?><!--assets/images/team/8.jpg" class="align-self-start mr-3 rounded-circle" alt="8.jpg">-->
<!--			<div class="media-body">-->
<!--				<h5 class="mt-0">Hi, Martha Griffin</h5>-->
<!--				<p>Bothell, WA, USA</p>-->
<!--			</div>-->
<!--		</div>-->
<!--	</div>-->
<!--	<div class="dashbord_nav_list">-->
<!--		<ul>-->
<!--			--><?php //if($nav == 'dashboard_c'){ ?>
<!--				<li class="active"><a href="--><?php //echo base_url('BCDashboard'); ?><!--"><span class="flaticon-dashboard"></span> Dashboard</a></li>-->
<!--			--><?php //} else { ?>
<!--				<li ><a href="--><?php //echo base_url('BCDashboard'); ?><!--"><span class="flaticon-dashboard"></span> Dashboard</a></li>-->
<!--			--><?php //} ?>
<!---->
<!--			--><?php //if($nav == 'profile_c'){ ?>
<!--				<li class="active"><a href="--><?php //echo base_url('BCProfile'); ?><!--"><span class="flaticon-profile"></span> Profile</a></li>-->
<!--			--><?php //} else { ?>
<!--				<li ><a href="--><?php //echo base_url('BCProfile'); ?><!--"><span class="flaticon-profile"></span> Profile</a></li>-->
<!--			--><?php //} ?>
<!---->
<!--			--><?php //if($nav == 'resume_c'){ ?>
<!--				<li class="active"><a href="--><?php //echo base_url('BCResume'); ?><!--"><span class="flaticon-resume"></span> Resume</a></li>-->
<!--			--><?php //} else { ?>
<!--				<li ><a href="--><?php //echo base_url('BCResume'); ?><!--"><span class="flaticon-resume"></span> Resume</a></li>-->
<!--			--><?php //} ?>
<!---->
<!--			--><?php //if($nav == 'applied_c'){ ?>
<!--				<li class="active"><a href="--><?php //echo base_url('BCAppliedJobs'); ?><!--"><span class="flaticon-paper-plane"></span> Applied Jobs</a></li>-->
<!--			--><?php //} else { ?>
<!--				<li ><a href="--><?php //echo base_url('BCAppliedJobs'); ?><!--"><span class="flaticon-paper-plane"></span> Applied Jobs</a></li>-->
<!--			--><?php //} ?>
<!---->
<!--			--><?php //if($nav == 'cv_manager_c'){ ?>
<!--				<li class="active"><a href="--><?php //echo base_url('BCCVManager'); ?><!--"><span class="flaticon-analysis"></span> CV Manager</a></li>-->
<!--			--><?php //} else { ?>
<!--				<li ><a href="--><?php //echo base_url('BCCVManager'); ?><!--"><span class="flaticon-analysis"></span> CV Manager</a></li>-->
<!--			--><?php //} ?>
<!---->
<!--			--><?php //if($nav == 'job_alert_c'){ ?>
<!--				<li class="active"><a href="--><?php //echo base_url('BCJobAlerts'); ?><!--"><span class="flaticon-alarm"></span> Job Alerts</a></li>-->
<!--			--><?php //} else { ?>
<!--				<li ><a href="--><?php //echo base_url('BCJobAlerts'); ?><!--"><span class="flaticon-alarm"></span> Job Alerts</a></li>-->
<!--			--><?php //} ?>
<!---->
<!--			--><?php //if($nav == 'change_password_c'){ ?>
<!--				<li class="active"><a href="--><?php //echo base_url('BCChangePassword'); ?><!--"><span class="flaticon-locked"></span> Change Password</a></li>-->
<!--			--><?php //} else { ?>
<!--				<li ><a href="--><?php //echo base_url('BCChangePassword'); ?><!--"><span class="flaticon-locked"></span> Change Password</a></li>-->
<!--			--><?php //} ?>
<!---->
<!--			<li><a href="loging_register.html"><span class="flaticon-logout"></span> Logout</a></li>-->
<!--			<li><a href="#"><span class="flaticon-rubbish-bin"></span> Delete Profile</a></li>-->
<!--		</ul>-->
<!--	</div>-->

<!--	<div class="skill_sidebar_widget">-->
<!--		<h4>Skills Percentage <span class="float-right font-weight-bold">85%</span></h4>-->
<!--		<p>Put value for "Cover Image" field to increase your skill up to "15%"</p>-->
<!--		<ul class="skills">-->
<!--			<li class="progressbar3" data-width="85" data-target="85"></li>-->
<!--		</ul>-->
<!--	</div>-->




<!--	Employer Area-->

	<div class="user_profile">
		<div class="media">
			<img src="<?php base_url() ?>assets/images/team/e1.png" class="align-self-start mr-3 rounded-circle" alt="e1.png">
			<div class="media-body">
				<h5 class="mt-0">Hi, CreativeLayers</h5>
				<p>Bothell, WA, USA</p>
			</div>
		</div>
	</div>
	<div class="dashbord_nav_list">
		<ul>
			<?php if($nav == 'dashboard'){ ?>
				<li class="active"><a href="<?php echo base_url('BEDashboard'); ?>"><span class="flaticon-dashboard"></span> Dashboard</a></li>
			<?php } else { ?>
				<li ><a href="<?php echo base_url('BEDashboard'); ?>"><span class="flaticon-dashboard"></span> Dashboard</a></li>
			<?php } ?>

			<?php if($nav == 'profile'){ ?>
				<li class="active"><a href="<?php echo base_url('BEProfile'); ?>"><span class="flaticon-profile"></span> Company Profile</a></li>
			<?php } else { ?>
				<li><a href="<?php echo base_url('BEProfile'); ?>"><span class="flaticon-profile"></span> Company Profile</a></li>
			<?php } ?>

			<?php if($nav == 'post'){ ?>
				<li class="active"><a href="<?php echo base_url('BEPost'); ?>"><span class="flaticon-resume"></span> Post a New Job</a></li>
			<?php } else { ?>
				<li><a href="<?php echo base_url('BEPost'); ?>"><span class="flaticon-resume"></span> Post a New Job</a></li>
			<?php } ?>

			<?php if($nav == 'manage'){ ?>
				<li class="active"><a href="<?php echo base_url('BEManageJobs'); ?>"><span class="flaticon-paper-plane"></span> Manage Jobs</a></li>
			<?php } else { ?>
				<li><a href="<?php echo base_url('BEManageJobs'); ?>"><span class="flaticon-paper-plane"></span> Manage Jobs</a></li>
			<?php } ?>

			<?php if($nav == 'resumes'){ ?>
				<li class="active"><a href="<?php echo base_url('BEResumes'); ?>"><span class="flaticon-analysis"></span> Shortlisted Resumes</a></li>
			<?php } else { ?>
				<li><a href="<?php echo base_url('BEResumes'); ?>"><span class="flaticon-analysis"></span> Shortlisted Resumes</a></li>
			<?php } ?>

			<?php if($nav == 'partnerships'){ ?>
				<li class="active"><a href="<?php echo base_url('BEPartnerships'); ?>"><span class="flaticon-user"></span> Partnerships</a></li>
			<?php } else { ?>
				<li><a href="<?php echo base_url('BEPartnerships'); ?>"><span class="flaticon-user"></span> Partnerships</a></li>
			<?php } ?>

			<?php if($nav == 'change_e'){ ?>
				<li class="active"><a href="<?php echo base_url('BEChangePassword'); ?>"><span class="flaticon-locked"></span> Change Password</a></li>
			<?php } else { ?>
				<li><a href="<?php echo base_url('BEChangePassword'); ?>"><span class="flaticon-locked"></span> Change Password</a></li>
			<?php } ?>

			<li><a href="<?php echo base_url('BEDashboard'); ?>"><span class="flaticon-logout"></span> Logout</a></li>
			<li><a href="<?php echo base_url('BEDashboard'); ?>"><span class="flaticon-rubbish-bin"></span> Delete Profile</a></li>
		</ul>
	</div>
	
</div>
