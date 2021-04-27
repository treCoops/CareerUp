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
					<form action="#">
						<div class="heading">
							<h3 class="text-center">Quick Login</h3>
						</div>
						<div class="form-group">
							<input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
						</div>
						<div class="form-group">
							<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
						</div>
						<div class="form-group form-check">
							<input type="checkbox" class="form-check-input" id="exampleCheck1">
							<label class="form-check-label" for="exampleCheck1">Remember me</label>
							<a class="tdu text-thm float-right" href="#">Forgot Password?</a>
						</div>
						<button type="submit" class="btn btn-log btn-block btn-thm">Login</button>
						<hr>
						<div class="row mt40">
							<div class="col-lg">
								<button type="submit" class="btn btn-block color-white bgc-fb"><i class="fa fa-facebook float-left mt5"></i> Facebook</button>
							</div>
							<div class="col-lg">
								<button type="submit" class="btn btn-block color-white bgc-gogle"><i class="fa fa-google float-left mt5"></i> Google</button>
							</div>
						</div>
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
							<a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Candidate</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Employer</a>
						</li>
					</ul>
					<div class="tab-content" id="pills-tabContent">
						<div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
							<form action="#">
								<div class="form-group">
									<input type="text" class="form-control" id="exampleInputName1" placeholder="User Name">
								</div>
								<div class="form-group">
									<input type="email" class="form-control" id="exampleInputEmail2" placeholder="Email">
								</div>
								<div class="form-group">
									<input type="number" class="form-control" id="exampleInputPhone1" placeholder="Phone Number">
								</div>
								<div class="form-group">
									<select id="inputState1" class="form-control">
										<option selected>Select Sector</option>
										<option>Web Developer</option>
										<option>Ui/Ux Designer</option>
										<option>Photoeditor</option>
										<option>Graphics Designer</option>
									</select>
								</div>
								<div class="form-group">
									<input type="password" class="form-control" id="exampleInputPassword2" placeholder="Password">
								</div>
								<div class="form-group form-check">
									<input type="checkbox" class="form-check-input" id="exampleCheck2">
									<label class="form-check-label" for="exampleCheck2">By Registering You Confirm That You Accept <a class="text-thm" href="terms_and_conditions.html">Terms & Conditions</a> And <a class="text-thm" href="terms_and_conditions.html">Privacy Policy</a></label>
								</div>
								<button type="submit" class="btn btn-log btn-block btn-dark">Register</button>
								<hr>
								<div class="row mt40">
									<div class="col-lg">
										<button type="submit" class="btn btn-block color-white bgc-fb"><i class="fa fa-facebook float-left mt5"></i> Facebook</button>
									</div>
									<div class="col-lg">
										<button type="submit" class="btn btn-block color-white bgc-gogle"><i class="fa fa-google float-left mt5"></i> Google</button>
									</div>
								</div>
							</form>
						</div>
						<div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
							<form action="#">
								<div class="form-group">
									<input type="text" class="form-control" id="exampleInputName2" placeholder="User Name">
								</div>
								<div class="form-group">
									<input type="email" class="form-control" id="exampleInputEmail3" placeholder="Email">
								</div>
								<div class="form-group">
									<input type="number" class="form-control" id="exampleInputPhone2" placeholder="Phone Number">
								</div>
								<div class="form-group">
									<select id="inputState2" class="form-control">
										<option selected>Select Sector</option>
										<option>Web Developer</option>
										<option>Ui/Ux Designer</option>
										<option>Photoeditor</option>
										<option>Graphics Designer</option>
									</select>
								</div>
								<div class="form-group">
									<input type="password" class="form-control" id="exampleInputPassword3" placeholder="Password">
								</div>
								<div class="form-group form-check">
									<input type="checkbox" class="form-check-input" id="exampleCheck3">
									<label class="form-check-label" for="exampleCheck3">By Registering You Confirm That You Accept <a class="text-thm" href="terms_and_conditions.html">Terms & Conditions</a> And <a class="text-thm" href="terms_and_conditions.html">Privacy Policy</a></label>
								</div>
								<button type="submit" class="btn btn-log btn-block btn-dark">Register</button>
								<hr>
								<div class="row mt40">
									<div class="col-lg">
										<button type="submit" class="btn btn-block color-white bgc-fb"><i class="fa fa-facebook float-left mt5"></i> Facebook</button>
									</div>
									<div class="col-lg">
										<button type="submit" class="btn btn-block color-white bgc-gogle"><i class="fa fa-google float-left mt5"></i> Google</button>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
