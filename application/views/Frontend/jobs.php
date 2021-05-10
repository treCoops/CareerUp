<?php
/**
 * Created & developed by treCoops
 * For: degree final
 * Campus ID: COBSCCOMP191P-032
 * Coventry ID: 9631605
 * Date: 2021-04-27
 * Time: 12:44
 */
?>
<!-- Our Candidate List -->
<section class="our-faq bgc-fa mt50">
	<div class="container">
		<div class="row">
			<div class="col-lg-3 col-xl-3 dn-smd">
				<div class="faq_search_widget mb30">
					<h4 class="fz20 mb15">Search Keywords</h4>
					<div class="input-group mb-3">
						<input type="text" class="form-control" placeholder="e.g. web design" aria-label="Recipient's username" aria-describedby="button-addon2">
						<div class="input-group-append">
							<button class="btn btn-outline-secondary" type="button" id="button-addon2"><span class="flaticon-search"></span></button>
						</div>
					</div>
				</div>
				<div class="faq_search_widget mb30">
					<h4 class="fz20 mb15">Location</h4>
					<div class="input-group mb-3">
						<input type="text" class="form-control" placeholder="All Location" aria-label="Recipient's username" aria-describedby="button-addon2">
						<div class="input-group-append">
							<button class="btn btn-outline-secondary" type="button" id="button-addon3"><span class="flaticon-location-pin"></span></button>
						</div>
					</div>
				</div>
				<div class="faq_search_widget mb30">
					<h4 class="fz20 mb15">Category</h4>
					<div class="candidate_revew_select">
						<select class="selectpicker w100 show-tick">
							<option>All Categories</option>
							<option>Recent</option>
							<option>Old Review</option>
						</select>
					</div>
				</div>
				<div class="cl_latest_activity mb30">
					<h4 class="fz20 mb15">Job Type</h4>
					<div class="ui_kit_whitchbox">
						<div class="custom-control custom-switch">
							<input type="checkbox" class="custom-control-input" id="customSwitch1">
							<label class="custom-control-label" for="customSwitch1">Freelance</label>
						</div>
						<div class="custom-control custom-switch">
							<input type="checkbox" class="custom-control-input" id="customSwitch2">
							<label class="custom-control-label" for="customSwitch2">Full Time</label>
						</div>
						<div class="custom-control custom-switch">
							<input type="checkbox" class="custom-control-input" id="customSwitch3">
							<label class="custom-control-label" for="customSwitch3">Part Time</label>
						</div>
						<div class="custom-control custom-switch">
							<input type="checkbox" class="custom-control-input" id="customSwitch4">
							<label class="custom-control-label" for="customSwitch4">Internship</label>
						</div>
						<div class="custom-control custom-switch">
							<input type="checkbox" class="custom-control-input" id="customSwitch5">
							<label class="custom-control-label" for="customSwitch5">Temporary</label>
						</div>
					</div>
				</div>
			</div>

			<div class="col-md-12 col-lg-9 col-xl-9">
				<div class="row">
					<div class="col-sm-12 col-lg-6">
						<div class="candidate_job_alart_btn">
							<button class="btn btn-thm btns dn db-991 float-right">Show Filter</button>
						</div>
					</div>

					<?php $this->load->view('Frontend/Template/filters'); ?>

					<div class="col-lg-12 mt30">
						<div class="fj_post style2">
							<div class="details">
								<h5 class="job_chedule text-thm">Full Time</h5>
								<div class="thumb fn-smd">
									<img class="img-fluid" src="<?php echo base_url() ?>assets/images/partners/1.jpg" alt="1.jpg">
								</div>
								<h4>JEB Product Sales Specialist, Russia & CIS</h4>
								<p>Posted 23 August by <a class="text-thm" href="#">Wiggle CRC</a></p>
								<ul class="featurej_post">
									<li class="list-inline-item"><span class="flaticon-location-pin"></span> <a href="#">Bothell, WA, USA</a></li>
									<li class="list-inline-item"><span class="flaticon-price pl20"></span> <a href="#">$13.00 - $18.00 per hour</a></li>
								</ul>
							</div>
							<a class="favorit" href="#"><span class="flaticon-favorites"></span></a>
						</div>
					</div>
					<div class="col-lg-12">
						<div class="fj_post style2">
							<div class="details">
								<h5 class="job_chedule text-thm">Part Time</h5>
								<div class="thumb fn-smd">
									<img class="img-fluid" src="<?php echo base_url() ?>assets/images/partners/2.jpg" alt="2.jpg">
								</div>
								<h4>General Ledger Accountant</h4>
								<p>Posted 23 August by <a class="text-thm" href="#">Robert Half Finance & Accounting</a></p>
								<ul class="featurej_post">
									<li class="list-inline-item"><span class="flaticon-location-pin"></span> <a href="#">RG40, Wokingham</a></li>
									<li class="list-inline-item"><span class="flaticon-price pl20"></span> <a href="#">$13.00 - $18.00 per hour</a></li>
								</ul>
							</div>
							<a class="favorit" href="#"><span class="flaticon-favorites"></span></a>
						</div>
					</div>
					<div class="col-lg-12">
						<div class="fj_post style2">
							<div class="details">
								<h5 class="job_chedule text-thm">Full Time</h5>
								<div class="thumb fn-smd">
									<img class="img-fluid" src="<?php echo base_url() ?>assets/images/partners/3.jpg" alt="3.jpg">
								</div>
								<h4>Junior Digital Graphic Designer</h4>
								<p>Posted 23 August by <a class="text-thm" href="#">Parkside Recruitment - Uxbridge Finance</a></p>
								<ul class="featurej_post">
									<li class="list-inline-item"><span class="flaticon-location-pin"></span> <a href="#">New Denham, UB8 1JG</a></li>
									<li class="list-inline-item"><span class="flaticon-price pl20"></span> <a href="#">$13.00 - $18.00 per hour</a></li>
								</ul>
							</div>
							<a class="favorit" href="#"><span class="flaticon-favorites"></span></a>
						</div>
					</div>
					<div class="col-lg-12">
						<div class="fj_post style2">
							<div class="details">
								<h5 class="job_chedule text-thm">Full Time</h5>
								<div class="thumb fn-smd">
									<img class="img-fluid" src="<?php echo base_url() ?>assets/images/partners/4.jpg" alt="4.jpg">
								</div>
								<h4>UX/UI Designer</h4>
								<p>Yesterday <a class="text-thm" href="#">NonStop Recruitment Ltd</a></p>
								<ul class="featurej_post">
									<li class="list-inline-item"><span class="flaticon-location-pin"></span> <a href="#">Bothell, WA, USA</a></li>
									<li class="list-inline-item"><span class="flaticon-price pl20"></span> <a href="#">$13.00 - $18.00 per hour</a></li>
								</ul>
							</div>
							<a class="favorit" href="#"><span class="flaticon-favorites"></span></a>
						</div>
					</div>
					<div class="col-lg-12">
						<div class="fj_post style2">
							<div class="details">
								<h5 class="job_chedule text-thm">Part Time</h5>
								<div class="thumb fn-smd">
									<img class="img-fluid" src="<?php echo base_url() ?>assets/images/partners/10.jpg" alt="10.jpg">
								</div>
								<h4>Junior Digital Graphic Designer</h4>
								<p>Posted 23 August by <a class="text-thm" href="#">Posted 23 August by</a></p>
								<ul class="featurej_post">
									<li class="list-inline-item"><span class="flaticon-location-pin"></span> <a href="#">New Denham, UB8 1JG</a></li>
									<li class="list-inline-item"><span class="flaticon-price pl20"></span> <a href="#">$13.00 - $18.00 per hour</a></li>
								</ul>
							</div>
							<a class="favorit" href="#"><span class="flaticon-favorites"></span></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
