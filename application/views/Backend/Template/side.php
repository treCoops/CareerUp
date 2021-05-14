<?php
/**
 * Created & developed by treCoops
 * For: degree final
 * Campus ID: COBSCCOMP191P-032
 * Coventry ID: 9631605
 * Date: 2021-04-27
 * Time: 13:33
 */
$User_Session = $this->session->userdata('User_Session');
?>

<div class="col-sm-12 col-lg-4 col-xl-3 dn-smd">

<!--	Candidate Area-->

	<?php if ($User_Session == null) { ?>
		<ul class="sign_up_btn pull-right dn-smd">
			<li><a href="<?php echo base_url('Login'); ?>" class="btn btn-md btn-dark">Log<span class="dn-md">in</span>/Reg<span class="dn-md">ister</span></a></li>
		</ul>
	<?php }else { ?>
		<div class="user_profile">
			<div class="media">
				<?php if($User_Session['Profile_Image'] != null){ ?>
				<img src="<?php base_url() ?>assets/images/profile/<?php echo $User_Session['Profile_Image'] ?>" class="align-self-start mr-3 rounded-circle" alt="8.jpg">
				<?php }else{ ?>
				<img class="align-self-start mr-3 rounded-circle" id="avatar1" alt="8.jpg"> <span class="pl15 pr15">
				<?php } ?>
				<div class="media-body">
					<h5 class="mt-0">Hi, <?php echo $User_Session['Username'] ?></h5>
					<h6><?php echo $User_Session['Email'] ?></h6>
				</div>
			</div>
		</div>

		<?php if($User_Session['User_Job'] == "Candidate"){ ?>
				<div class="dashbord_nav_list">
					<ul>
						<?php if($nav == 'profile_c'){ ?>
							<li class="active"><a href="<?php echo base_url('BCProfile'); ?>"><span class="flaticon-profile"></span> Profile</a></li>
						<?php } else { ?>
							<li ><a href="<?php echo base_url('BCProfile'); ?>"><span class="flaticon-profile"></span> Profile</a></li>
						<?php } ?>

						<?php if($nav == 'resume_c'){ ?>
							<li class="active"><a href="<?php echo base_url('BCResume'); ?>"><span class="flaticon-resume"></span> Resume</a></li>
						<?php } else { ?>
							<li ><a href="<?php echo base_url('BCResume'); ?>"><span class="flaticon-resume"></span> Resume</a></li>
						<?php } ?>

						<?php if($nav == 'applied_c'){ ?>
							<li class="active"><a href="<?php echo base_url('BCAppliedJobs'); ?>"><span class="flaticon-paper-plane"></span> Applied Jobs</a></li>
						<?php } else { ?>
							<li ><a href="<?php echo base_url('BCAppliedJobs'); ?>"><span class="flaticon-paper-plane"></span> Applied Jobs</a></li>
						<?php } ?>

						<?php if($nav == 'cv_manager_c'){ ?>
							<li class="active"><a href="<?php echo base_url('BCCVManager'); ?>"><span class="flaticon-analysis"></span> CV Manager</a></li>
						<?php } else { ?>
							<li ><a href="<?php echo base_url('BCCVManager'); ?>"><span class="flaticon-analysis"></span> CV Manager</a></li>
						<?php } ?>

						<?php if($nav == 'job_alert_c'){ ?>
							<li class="active"><a href="<?php echo base_url('BCJobAlerts'); ?>"><span class="flaticon-alarm"></span> Job Alerts</a></li>
						<?php } else { ?>
							<li ><a href="<?php echo base_url('BCJobAlerts'); ?>"><span class="flaticon-alarm"></span> Job Alerts</a></li>
						<?php } ?>

						<?php if($nav == 'change_password_c'){ ?>
							<li class="active"><a href="<?php echo base_url('BCChangePassword'); ?>"><span class="flaticon-locked"></span> Change Password</a></li>
						<?php } else { ?>
							<li ><a href="<?php echo base_url('BCChangePassword'); ?>"><span class="flaticon-locked"></span> Change Password</a></li>
						<?php } ?>

						<li><a href="<?php echo base_url('Login/logout'); ?>"><span class="flaticon-logout"></span> Logout</a></li>
						<li><a href="#"><span class="flaticon-rubbish-bin"></span> Delete Profile</a></li>
					</ul>
				</div>

			<!--	<div class="skill_sidebar_widget">-->
			<!--		<h4>Skills Percentage <span class="float-right font-weight-bold">85%</span></h4>-->
			<!--		<p>Put value for "Cover Image" field to increase your skill up to "15%"</p>-->
			<!--		<ul class="skills">-->
			<!--			<li class="progressbar3" data-width="85" data-target="85"></li>-->
			<!--		</ul>-->
			<!--	</div>-->

		<?php }else { ?>
				<div class="dashbord_nav_list">
					<ul>

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

						<li><a href="<?php echo base_url('Login/logout'); ?>"><span class="flaticon-logout"></span> Logout</a></li>
						<li><a href="#"><span class="flaticon-rubbish-bin"></span> Delete Profile</a></li>
					</ul>
				</div>
		<?php } ?>
	<?php } ?>
	
</div>
