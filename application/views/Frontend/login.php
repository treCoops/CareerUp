<?php
/**
 * Created & developed by treCoops
 * For: degree final
 * Campus ID: COBSCCOMP191P-032
 * Coventry ID: 9631605
 * Date: 2021-04-27
 * Time: 12:35
 */
?>

<!-- Inner Page Breadcrumb -->
<section class="inner_page_breadcrumb bgc-f0 pt30 pb30" aria-label="breadcrumb">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<h4 class="breadcrumb_title float-left">Login/Register</h4>
				<ol class="breadcrumb float-right">
					<li class="breadcrumb-item"><a href="<?php echo base_url('Home'); ?>">Home</a></li>
					<li class="breadcrumb-item active" aria-current="page">Login & Register</li>
				</ol>
			</div>
		</div>
	</div>
</section>

<!-- Our LogIn Register -->
<section class="our-log-reg bgc-fa">
	<div class="container">
		<div class="row">
			<div class="col-sm-12 col-lg-6">
				<div class="login_form">
					<form id="formLogin" action="<?php echo base_url('Login/signIn'); ?>" method="post">
						<div class="heading">
							<h3 class="text-center">Login</h3>
						</div>
						<div class="form-group">
							<input type="email" class="form-control" id="txtEmailForLogin" name="txtEmailForLogin" placeholder="Enter email">
						</div>
						<div class="form-group">
							<input type="password" class="form-control" id="txtPasswordForLogin" name="txtPasswordForLogin" placeholder="Password">
						</div>
						<div class="form-group form-check">
							<h5 class="text-danger text-center"><?php echo $error_message; ?></h5>
<!--							<input type="checkbox" class="form-check-input" id="exampleCheck1">-->
<!--							<label class="form-check-label" for="exampleCheck1">Remember me</label>-->
<!--							<a class="tdu text-thm float-right" href="#">Forgot Password?</a>-->
						</div>
						<button type="submit" class="btn btn-log btn-block btn-thm">Login</button>
						<div class="row mt40"></div>
<!--						<hr>-->
<!--						<div class="row mt40">-->
<!--							<div class="col-lg">-->
<!--								<button type="button" class="btn btn-block color-white bgc-fb"><i class="fa fa-facebook float-left mt5"></i> Facebook</button>-->
<!--							</div>-->
<!--							<div class="col-lg">-->
<!--								<button type="button" class="btn btn-block color-white bgc-gogle"><i class="fa fa-google float-left mt5"></i> Google</button>-->
<!--							</div>-->
<!--						</div>-->
					</form>
				</div>
			</div>
			<div class="col-sm-12 col-lg-6">
				<div class="sign_up_form">
					<div class="heading">
						<h3 class="text-center">Create New Account</h3>
					</div>
					<ul class="nav nav-pills mb-4" id="pills-tab" role="tablist">
						<li class="nav-item">
							<a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-candidate" role="tab" aria-controls="pills-home" aria-selected="true">Candidate</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-employer" role="tab" aria-controls="pills-profile" aria-selected="false">Employer</a>
						</li>
					</ul>
					<div class="tab-content" id="pills-tabContent">
						<div class="tab-pane fade show active" id="pills-candidate" role="tabpanel" aria-labelledby="pills-home-tab">
							<form id="formCandidate" method="post">
								<div class="form-group">
									<input type="text" class="form-control" id="txtCandidateUserName" name="txtCandidateUserName" placeholder="User Name">
									<input type="hidden" class="form-control" id="txtType" name="txtType" value="Candidate">
								</div>
								<div class="form-group">
									<input type="email" class="form-control" id="txtCandidateEmail" name="txtCandidateEmail" placeholder="Email">
								</div>
								<div class="form-group">
									<input type="text" class="form-control" id="txtCandidateContactNo" name="txtCandidateContactNo" placeholder="Phone Number">
								</div>
								<div class="form-group">
									<select id="cmbCandidateJob" name="cmbCandidateJob" class="form-control">
										<option value="" selected>Select Job</option>
										<?php foreach ($jobs as $row){ ?>
											<option value="<?php echo $row->job_id ?>"><?php echo $row->job_name ?></option>
										<?php } ?>
									</select>
								</div>
								<div class="form-group">
									<input type="password" class="form-control" id="txtCandidatePassword" name="txtCandidatePassword" placeholder="Password">
								</div>
								<div class="form-group form-check">
									<input type="checkbox" class="form-check-input" name="chkCandidateTerms" id="chkCandidateTerms">
									<label class="form-check-label" for="exampleCheck2">By Registering You Confirm That You Accept <a class="text-thm" href="<?php echo base_url('Terms'); ?>">Terms & Conditions</a> And <a class="text-thm" href="<?php echo base_url('Terms'); ?>">Privacy Policy</a></label>
								</div>
								<button type="submit" class="btn btn-log btn-block btn-dark">Register</button>
								<div class="row mt40"></div>
<!--								<hr>-->
<!--								<div class="row mt40">-->
<!--									<div class="col-lg">-->
<!--										<button type="button" class="btn btn-block color-white bgc-fb"><i class="fa fa-facebook float-left mt5"></i> Facebook</button>-->
<!--									</div>-->
<!--									<div class="col-lg">-->
<!--										<button type="button" onclick="init();" class="btn btn-block color-white bgc-gogle"><i class="fa fa-google float-left mt5"></i> Google</button>-->
<!--									</div>-->
<!--								</div>-->
							</form>
						</div>
						<div class="tab-pane fade" id="pills-employer" role="tabpanel" aria-labelledby="pills-profile-tab">
							<form id="formEmployer" method="post">
								<div class="form-group">
									<input type="text" class="form-control" id="txtEmployerUserName" name="txtEmployerUserName" placeholder="User Name">
									<input type="hidden" class="form-control" id="txtType" name="txtType" value="Employer">
								</div>
								<div class="form-group">
									<input type="email" class="form-control" id="txtEmployerEmail" name="txtEmployerEmail" placeholder="Email">
								</div>
								<div class="form-group">
									<input type="text" class="form-control" id="txtEmployerContactNo" name="txtEmployerContactNo" placeholder="Phone Number">
								</div>
								<div class="form-group">
									<select id="cmbEmployerSector" name="cmbEmployerSector" class="form-control">
										<option value="" selected>Select Sector</option>
										<?php foreach ($sectors as $row){ ?>
											<option value="<?php echo $row->sector_id ?>"><?php echo $row->sector_name ?></option>
										<?php } ?>
									</select>
								</div>
								<div class="form-group">
									<input type="password" class="form-control" id="txtEmployerPassword" name="txtEmployerPassword" placeholder="Password">
								</div>
								<div class="form-group form-check">
									<input type="checkbox" class="form-check-input" id="chkEmployerTerms" name="chkEmployerTerms">
									<label class="form-check-label" for="chkCandidateTerms">By Registering You Confirm That You Accept <a class="text-thm" href="<?php echo base_url('Terms'); ?>">Terms & Conditions</a> And <a class="text-thm" href="<?php echo base_url('Terms'); ?>">Privacy Policy</a></label>
								</div>
								<button type="submit" class="btn btn-log btn-block btn-dark">Register</button>
								<div class="row mt40"></div>
<!--								<div class="row mt40">-->
<!--									<div class="col-lg">-->
<!--										<button type="button" class="btn btn-block color-white bgc-fb"><i class="fa fa-facebook float-left mt5"></i> Facebook</button>-->
<!--									</div>-->
<!--									<div class="col-lg">-->
<!--										<button type="button" class="btn btn-block color-white bgc-gogle"><i class="fa fa-google float-left mt5"></i> Google</button>-->
<!--									</div>-->
<!--								</div>-->
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<script>
	$(document).ready(function() {
		// $("#formLogin").validate({
		// 	ignore: [],
		// 	rules: {
		// 		txtEmailForLogin: {
		// 			required: true,
		// 			email: true
		// 		},
		// 		txtPasswordForLogin: {
		// 			required: true,
		// 			minlength: 6
		// 		}
		// 	},
		// 	messages: {
		// 		txtEmailForLogin: {
		// 			required: 'Email required!',
		// 			email: 'Please enter a valid email!'
		// 		},
		// 		txtPasswordForLogin: {
		// 			required: 'Password required!',
		// 			minlength: "Password must have more than 6 characters!"
		// 		}
		// 	},
		// 	submitHandler: function(form) {
		// 		form.submit();
		// 	}
		//
		// });

		$("#formCandidate").validate({
			ignore: [],
			rules: {
				txtCandidateUserName: {
					required: true
				},
				txtCandidateEmail: {
					required: true,
					email: true
				},
				cmbCandidateJob: {
					required: true
				},
				txtCandidateContactNo: {
					required: true,
					digits: true,
					minlength: 10,
					maxlength: 10
				},
				txtCandidatePassword: {
					required: true,
					minlength: 6
				},
				chkCandidateTerms: {
					required: true
				}
			},
			messages: {
				txtCandidateUserName: {
					required: "Username required!"
				},
				txtCandidateEmail: {
					required: "Email required!",
					email: "Please enter a valid email!"
				},
				cmbCandidateJob: {
					required: "Please select your job role."
				},
				txtCandidateContactNo: {
					required: "Contact no. required!",
					digits: "Contact no. can have digits only!",
					minlength: "Contact no. can have 10 digits only!",
					maxlength: "Contact no. can have 10 digits only!"
				},
				txtCandidatePassword: {
					required: "Password required!",
					minlength: "Password must have more than 6 characters!"
				},
				chkCandidateTerms: {
					required: "Please agree with terms & conditions!"
				}
			},
			submitHandler: function(form) {
				let formData = new FormData(form);

				$.ajax({
					url: '<?php echo base_url('Login/signUp'); ?>',
					data: formData,
					dataType: 'json',
					method: 'post',
					processData: false,
					contentType: false,
					error: function(error){
						$.notify("Internal server error", "error");
					},
					success: function(r){
						if(r.status == 200){
							$.notify(r.message, "success");
						}

						if(r.status == 500){
							$.notify(r.message, "error");
						}

					}
				});
			}

		});

		$("#formEmployer").validate({
			ignore: [],
			rules: {
				txtEmployerUserName: {
					required: true
				},
				txtEmployerEmail: {
					required: true,
					email: true
				},
				cmbEmployerSector: {
					required: true
				},
				txtEmployerContactNo: {
					required: true,
					digits: true,
					minlength: 10,
					maxlength: 10
				},
				txtEmployerPassword: {
					required: true,
					minlength: 6
				},
				chkEmployerTerms: {
					required: true
				}
			},
			messages: {
				txtEmployerUserName: {
					required: "Username required!"
				},
				txtEmployerEmail: {
					required: "Email required!",
					email: "Please enter a valid email!"
				},
				cmbEmployerSector: {
					required: "Please select your job role."
				},
				txtEmployerContactNo: {
					required: "Contact no. required!",
					digits: "Contact no. can have digits only!",
					minlength: "Contact no. can have 10 digits only!",
					maxlength: "Contact no. can have 10 digits only!"
				},
				txtEmployerPassword: {
					required: "Password required!",
					minlength: "Password must have more than 6 characters!"
				},
				chkEmployerTerms: {
					required: "Please agree with terms & conditions!"
				}
			},
			submitHandler: function(form) {
				let formData = new FormData(form);

				$.ajax({
					url: '<?php echo base_url('Login/signUp'); ?>',
					data: formData,
					dataType: 'json',
					method: 'post',
					processData: false,
					contentType: false,
					error: function(error){
						$.notify("Internal server error", "error");
					},
					success: function(r){
						if(r.status == 200){
							$.notify(r.message, "success");
						}

						if(r.status == 500){
							$.notify(r.message, "error");
						}

					}
				});
			}

		});
	});
</script>

