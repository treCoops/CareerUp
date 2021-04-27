<?php
/**
 * Created & developed by treCoops
 * For: degree final
 * Campus ID: COBSCCOMP191P-032
 * Coventry ID: 9631605
 * Date: 2021-04-27
 * Time: 13:04
 */?>


<div class="col-sm-12 col-lg-6">
	<div class="candidate_revew_select text-right mt50 mt10-smd">
		<ul>
			<li class="list-inline-item">Sort by:</li>
			<li class="list-inline-item">
				<select class="selectpicker show-tick">
					<option>Date</option>
				</select>
			</li>
		</ul>
	</div>
	<div class="content_details">
		<div class="details">
			<a href="javascript:void(0)" class="closebtn" onclick="closeNav()"><span>Hide Filter</span><i>×</i></a>
			<div class="faq_search_widget mb30">
				<h4 class="fz20 mb15">Search Keywords</h4>
				<div class="input-group mb-3">
					<input type="text" class="form-control" placeholder="Find Your Question" aria-label="Recipient's username" aria-describedby="button-addon2">
					<div class="input-group-append">
						<button class="btn btn-outline-secondary" type="button" id="button-addon4"><span class="flaticon-search"></span></button>
					</div>
				</div>
			</div>
			<div class="faq_search_widget mb30">
				<h4 class="fz20 mb15">Location</h4>
				<div class="input-group mb-3">
					<input type="text" class="form-control" placeholder="Find Your Question" aria-label="Recipient's username" aria-describedby="button-addon2">
					<div class="input-group-append">
						<button class="btn btn-outline-secondary" type="button" id="button-addon5"><span class="flaticon-location-pin"></span></button>
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
						<input type="checkbox" class="custom-control-input" id="customSwitch6">
						<label class="custom-control-label" for="customSwitch6">Freelance</label>
					</div>
					<div class="custom-control custom-switch">
						<input type="checkbox" class="custom-control-input" id="customSwitch7">
						<label class="custom-control-label" for="customSwitch7">Full Time</label>
					</div>
					<div class="custom-control custom-switch">
						<input type="checkbox" class="custom-control-input" id="customSwitch8">
						<label class="custom-control-label" for="customSwitch8">Part Time</label>
					</div>
					<div class="custom-control custom-switch">
						<input type="checkbox" class="custom-control-input" id="customSwitch9">
						<label class="custom-control-label" for="customSwitch9">Internship</label>
					</div>
					<div class="custom-control custom-switch">
						<input type="checkbox" class="custom-control-input" id="customSwitch10">
						<label class="custom-control-label" for="customSwitch10">Temporary</label>
					</div>
				</div>
			</div>

<!--			<div class="cl_pricing_slider mb30">-->
<!--				<h4 class="fz20 mb20">Hourly Rate</h4>-->
<!--				<div id="slider-range2"></div>-->
<!--				<p class="text-center">-->
<!--					<input class="sl_input" type="text" id="amount2">-->
<!--				</p>-->
<!--			</div>-->
<!--			<div class="cl_skill_checkbox mb30">-->
<!--				<h4 class="fz20 mb20">Skills</h4>-->
<!--				<div class="content ui_kit_checkbox text-left">-->
<!--					<div class="custom-control custom-checkbox">-->
<!--						<input type="checkbox" class="custom-control-input" id="customCheck37">-->
<!--						<label class="custom-control-label" for="customCheck37">HTML 5</label>-->
<!--					</div>-->
<!--					<div class="custom-control custom-checkbox">-->
<!--						<input type="checkbox" class="custom-control-input" id="customCheck38">-->
<!--						<label class="custom-control-label" for="customCheck38">Javascript</label>-->
<!--					</div>-->
<!--					<div class="custom-control custom-checkbox">-->
<!--						<input type="checkbox" class="custom-control-input" id="customCheck39">-->
<!--						<label class="custom-control-label" for="customCheck39">PHP</label>-->
<!--					</div>-->
<!--					<div class="custom-control custom-checkbox">-->
<!--						<input type="checkbox" class="custom-control-input" id="customCheck40">-->
<!--						<label class="custom-control-label" for="customCheck40">jQuery</label>-->
<!--					</div>-->
<!--					<div class="custom-control custom-checkbox">-->
<!--						<input type="checkbox" class="custom-control-input" id="customCheck41">-->
<!--						<label class="custom-control-label" for="customCheck41">UX/UI Design</label>-->
<!--					</div>-->
<!--					<div class="custom-control custom-checkbox">-->
<!--						<input type="checkbox" class="custom-control-input" id="customCheck42">-->
<!--						<label class="custom-control-label" for="customCheck42">Design</label>-->
<!--					</div>-->
<!--					<div class="custom-control custom-checkbox">-->
<!--						<input type="checkbox" class="custom-control-input" id="customCheck43">-->
<!--						<label class="custom-control-label" for="customCheck43">Web Design</label>-->
<!--					</div>-->
<!--					<div class="custom-control custom-checkbox">-->
<!--						<input type="checkbox" class="custom-control-input" id="customCheck44">-->
<!--						<label class="custom-control-label" for="customCheck44">Graphic Design</label>-->
<!--					</div>-->
<!--					<div class="custom-control custom-checkbox">-->
<!--						<input type="checkbox" class="custom-control-input" id="customCheck45">-->
<!--						<label class="custom-control-label" for="customCheck45">Sketch App</label>-->
<!--					</div>-->
<!--					<div class="custom-control custom-checkbox">-->
<!--						<input type="checkbox" class="custom-control-input" id="customCheck46">-->
<!--						<label class="custom-control-label" for="customCheck46">UI Design</label>-->
<!--					</div>-->
<!--					<div class="custom-control custom-checkbox">-->
<!--						<input type="checkbox" class="custom-control-input" id="customCheck47">-->
<!--						<label class="custom-control-label" for="customCheck47">Graphic Design</label>-->
<!--					</div>-->
<!--					<div class="custom-control custom-checkbox">-->
<!--						<input type="checkbox" class="custom-control-input" id="customCheck48">-->
<!--						<label class="custom-control-label" for="customCheck48">Sketch App</label>-->
<!--					</div>-->
<!--					<div class="custom-control custom-checkbox">-->
<!--						<input type="checkbox" class="custom-control-input" id="customCheck49">-->
<!--						<label class="custom-control-label" for="customCheck49">UI Design</label>-->
<!--					</div>-->
<!--				</div>-->
<!--			</div>-->
<!--			<div class="cl_carrer_lever mb30">-->
<!--				<div id="accordion6" class="accordion">-->
<!--					<div class="link mb10">Career Level<i class="fa fa-caret-up"></i></div>-->
<!--					<div class="cl_submenu">-->
<!--						<div class="ui_kit_checkbox">-->
<!--							<div class="custom-control custom-checkbox">-->
<!--								<input type="checkbox" class="custom-control-input" id="customCheck50">-->
<!--								<label class="custom-control-label" for="customCheck50">Intermediate</label>-->
<!--							</div>-->
<!--							<div class="custom-control custom-checkbox">-->
<!--								<input type="checkbox" class="custom-control-input" id="customCheck51">-->
<!--								<label class="custom-control-label" for="customCheck51">Normal</label>-->
<!--							</div>-->
<!--							<div class="custom-control custom-checkbox">-->
<!--								<input type="checkbox" class="custom-control-input" id="customCheck52">-->
<!--								<label class="custom-control-label" for="customCheck52">Special</label>-->
<!--							</div>-->
<!--							<div class="custom-control custom-checkbox">-->
<!--								<input type="checkbox" class="custom-control-input" id="customCheck53">-->
<!--								<label class="custom-control-label" for="customCheck53">Experienced</label>-->
<!--							</div>-->
<!--						</div>-->
<!--					</div>-->
<!--				</div>-->
<!--			</div>-->
<!--			<div class="cl_carrer_lever mb30">-->
<!--				<div id="accordion7" class="accordion">-->
<!--					<div class="link mb10">Experince<i class="fa fa-caret-up"></i></div>-->
<!--					<div class="cl_submenu">-->
<!--						<div class="ui_kit_checkbox">-->
<!--							<div class="custom-control custom-checkbox">-->
<!--								<input type="checkbox" class="custom-control-input" id="customCheck54">-->
<!--								<label class="custom-control-label" for="customCheck54">1Year to 2Year</label>-->
<!--							</div>-->
<!--							<div class="custom-control custom-checkbox">-->
<!--								<input type="checkbox" class="custom-control-input" id="customCheck55">-->
<!--								<label class="custom-control-label" for="customCheck55">2Year to 3Year</label>-->
<!--							</div>-->
<!--							<div class="custom-control custom-checkbox">-->
<!--								<input type="checkbox" class="custom-control-input" id="customCheck56">-->
<!--								<label class="custom-control-label" for="customCheck56">3Year to 4Year</label>-->
<!--							</div>-->
<!--							<div class="custom-control custom-checkbox">-->
<!--								<input type="checkbox" class="custom-control-input" id="customCheck57">-->
<!--								<label class="custom-control-label" for="customCheck57">4Year to 5Year</label>-->
<!--							</div>-->
<!--						</div>-->
<!--					</div>-->
<!--				</div>-->
<!--			</div>-->
<!--			<div class="cl_carrer_lever mb30">-->
<!--				<div id="accordion8" class="accordion">-->
<!--					<div class="link mb10">Gender<i class="fa fa-caret-up"></i></div>-->
<!--					<div class="cl_submenu">-->
<!--						<div class="ui_kit_checkbox">-->
<!--							<div class="custom-control custom-checkbox">-->
<!--								<input type="checkbox" class="custom-control-input" id="customCheck58">-->
<!--								<label class="custom-control-label" for="customCheck58">Male</label>-->
<!--							</div>-->
<!--							<div class="custom-control custom-checkbox">-->
<!--								<input type="checkbox" class="custom-control-input" id="customCheck59">-->
<!--								<label class="custom-control-label" for="customCheck59">Female</label>-->
<!--							</div>-->
<!--							<div class="custom-control custom-checkbox">-->
<!--								<input type="checkbox" class="custom-control-input" id="customCheck60">-->
<!--								<label class="custom-control-label" for="customCheck60">Others</label>-->
<!--							</div>-->
<!--						</div>-->
<!--					</div>-->
<!--				</div>-->
<!--			</div>-->
<!--			<div class="cl_carrer_lever mb30">-->
<!--				<div id="accordion9" class="accordion">-->
<!--					<div class="link mb10">Industry<i class="fa fa-caret-up"></i></div>-->
<!--					<div class="cl_submenu">-->
<!--						<div class="ui_kit_checkbox">-->
<!--							<div class="custom-control custom-checkbox">-->
<!--								<input type="checkbox" class="custom-control-input" id="customCheck61">-->
<!--								<label class="custom-control-label" for="customCheck61">Development</label>-->
<!--							</div>-->
<!--							<div class="custom-control custom-checkbox">-->
<!--								<input type="checkbox" class="custom-control-input" id="customCheck62">-->
<!--								<label class="custom-control-label" for="customCheck62">Management</label>-->
<!--							</div>-->
<!--							<div class="custom-control custom-checkbox">-->
<!--								<input type="checkbox" class="custom-control-input" id="customCheck63">-->
<!--								<label class="custom-control-label" for="customCheck63">Finance</label>-->
<!--							</div>-->
<!--							<div class="custom-control custom-checkbox">-->
<!--								<input type="checkbox" class="custom-control-input" id="customCheck64">-->
<!--								<label class="custom-control-label" for="customCheck64">HTML Department</label>-->
<!--							</div>-->
<!--							<div class="custom-control custom-checkbox">-->
<!--								<input type="checkbox" class="custom-control-input" id="customCheck65">-->
<!--								<label class="custom-control-label" for="customCheck65">Seo</label>-->
<!--							</div>-->
<!--							<div class="custom-control custom-checkbox">-->
<!--								<input type="checkbox" class="custom-control-input" id="customCheck66">-->
<!--								<label class="custom-control-label" for="customCheck66">Banking</label>-->
<!--							</div>-->
<!--						</div>-->
<!--					</div>-->
<!--				</div>-->
<!--			</div>-->
<!--			<div class="cl_carrer_lever">-->
<!--				<div id="accordion10" class="accordion">-->
<!--					<div class="link mb10">Qualification<i class="fa fa-caret-up"></i></div>-->
<!--					<div class="cl_submenu">-->
<!--						<div class="ui_kit_checkbox">-->
<!--							<div class="custom-control custom-checkbox">-->
<!--								<input type="checkbox" class="custom-control-input" id="customCheck67">-->
<!--								<label class="custom-control-label" for="customCheck67">Certificate</label>-->
<!--							</div>-->
<!--							<div class="custom-control custom-checkbox">-->
<!--								<input type="checkbox" class="custom-control-input" id="customCheck68">-->
<!--								<label class="custom-control-label" for="customCheck68">Diploma</label>-->
<!--							</div>-->
<!--							<div class="custom-control custom-checkbox">-->
<!--								<input type="checkbox" class="custom-control-input" id="customCheck69">-->
<!--								<label class="custom-control-label" for="customCheck69">Associate</label>-->
<!--							</div>-->
<!--							<div class="custom-control custom-checkbox">-->
<!--								<input type="checkbox" class="custom-control-input" id="customCheck70">-->
<!--								<label class="custom-control-label" for="customCheck70">Degree Bachelor</label>-->
<!--							</div>-->
<!--							<div class="custom-control custom-checkbox">-->
<!--								<input type="checkbox" class="custom-control-input" id="customCheck71">-->
<!--								<label class="custom-control-label" for="customCheck71">Associate</label>-->
<!--							</div>-->
<!--							<div class="custom-control custom-checkbox">-->
<!--								<input type="checkbox" class="custom-control-input" id="customCheck72">-->
<!--								<label class="custom-control-label" for="customCheck72">Master's Degree</label>-->
<!--							</div>-->
<!--						</div>-->
<!--					</div>-->
<!--				</div>-->
<!--			</div>-->

		</div>
	</div>
</div>
