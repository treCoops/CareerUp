<?php
/**
 * Created & developed by treCoops
 * For: degree final
 * Campus ID: COBSCCOMP191P-032
 * Coventry ID: 9631605
 * Date: 2021-04-27
 * Time: 13:41
 */
?>

<div class="col-sm-12 col-lg-8 col-xl-9">
	<div class="my_profile_form_area employer_profile">
		<form id="formProfile" method="post" enctype="multipart/form-data">
			<div class="row">
				<div class="col-lg-12">
					<h4 class="fz20 mb20">Company Profile</h4>
				</div>
					<div class="col-lg-12">
						<div class="avatar-upload mb30">
							<div class="avatar-edit">
								<input class="btn btn-thm" type='file' id="imageUpload" name="imageUpload" accept=".png, .jpg, .jpeg" />
								<label for="imageUpload"></label>
							</div>
							<div class="avatar-preview">
								<div id="imagePreview"></div>
							</div>
						</div>
					</div>
					<div class="col-lg-12">
						<div class="my_profile_thumb_edit"></div>
					</div>
					<div class="col-md-6 col-lg-6">
						<div class="my_profile_input form-group">
							<label for="txtCompanyName">Company Name</label>
							<input type="text" class="form-control" id="txtCompanyName" name="txtCompanyName">
						</div>
					</div>
					<div class="col-md-6 col-lg-6">
						<div class="my_profile_input form-group">
							<label for="txtCompanyEmail">Email address</label>
							<input type="email" class="form-control" id="txtCompanyEmail" name="txtCompanyEmail">
						</div>
					</div>
					<div class="col-md-6 col-lg-6">
						<div class="my_profile_input form-group">
							<label for="txtCompanyPhone">Phone</label>
							<input type="text" class="form-control" id="txtCompanyPhone" name="txtCompanyPhone" aria-describedby="phoneNumber" placeholder="ex: 0771234567">
						</div>
					</div>
					<div class="col-md-6 col-lg-6">
						<div class="my_profile_input form-group">
							<label for="txtCompanyWebSite">Website URL</label>
							<input type="text" class="form-control" id="txtCompanyWebSite" name="txtCompanyWebSite">
						</div>
					</div>
					<div class="col-md-6 col-lg-6">
						<div class="my_profile_input form-group">
							<label for="txtCompanyStartDate">Est. Since</label>
							<input type="text" class="form-control datepicker" id="txtCompanyStartDate" name="txtCompanyStartDate">
						</div>
					</div>
					<div class="col-md-6 col-lg-6">
						<div class="my_profile_select_box form-group">
							<label for="cmbCompanyTeamSize">Team Size</label><br>
							<select id="cmbCompanyTeamSize" name="cmbCompanyTeamSize" class="selectpicker">
								<option value="">Select Team Size</option>
								<option value="0-10">0-10</option>
								<option value="10-50">10-50</option>
								<option value="50-100">50-100</option>
								<option value="100-150">100-150</option>
								<option value="150-200">150-200</option>
							</select>
						</div>
					</div>
					<div class="col-md-6 col-lg-6">
						<div class="my_profile_select_box form-group">
							<label for="cmbCompanyCategories">Categories</label><br>
							<select id="cmbCompanyCategories" name="cmbCompanyCategories[]" class="selectpicker" multiple data-actions-box="true">
								<option value="Mobile App Development">Mobile App Development</option>
								<option value="Web Site & Web App Development">Web Site & Web App Development</option>
								<option value="IOT">IOT</option>
								<option value="Standalone App Development">Standalone App Development</option>
							</select>
						</div>
					</div>
					<div class="col-md-6 col-lg-6">
						<div class="my_profile_select_box form-group">
							<label for="cmbCompanyAllowDisability">Allow Disability People to work</label><br>
							<select id="cmbCompanyAllowDisability" name="cmbCompanyAllowDisability" class="selectpicker">
								<option value="1">Yes</option>
								<option value="0">No</option>
							</select>
						</div>
					</div>
					<div class="col-lg-12">
						<div class="my_resume_textarea mt20">
							<div class="form-group">
								<label for="txtCompanyAbout">About Company</label>
								<textarea class="form-control" id="txtCompanyAbout" name="txtCompanyAbout" rows="9">
								</textarea>
							</div>
						</div>
					</div>
					<div class="col-lg-12">
						<h4 class="fz18 mb20">Social Network</h4>
					</div>
					<div class="col-md-6 col-lg-6">
						<div class="my_profile_input form-group">
							<label for="txtCompanyFacebook">Facebook</label>
							<input type="text" class="form-control" name="txtCompanyFacebook" id="txtCompanyFacebook">
						</div>
					</div>
					<div class="col-md-6 col-lg-6">
						<div class="my_profile_input form-group">
							<label for="txtCompanyTwitter">Twitter</label>
							<input type="text" class="form-control" id="txtCompanyTwitter" name="txtCompanyTwitter">
						</div>
					</div>
					<div class="col-md-6 col-lg-6">
						<div class="my_profile_input form-group">
							<label for="txtCompanyLinkedin">Linkedin</label>
							<input type="text" class="form-control" name="txtCompanyLinkedin" id="txtCompanyLinkedin">
						</div>
					</div>
					<div class="col-md-6 col-lg-6">
						<div class="my_profile_input form-group">
							<label for="txtCompanyInstagram">Instagram</label>
							<input type="text" class="form-control" name="txtCompanyInstagram" id="txtCompanyInstagram">
						</div>
					</div>
					<div class="col-lg-12">
						<h4 class="fz18 mb20">Contact Information</h4>
					</div>
					<div class="col-md-6 col-lg-6">
						<div class="my_profile_select_box form-group">
							<label for="cmbCompanyCountry">Country</label><br>
							<select id="cmbCompanyCountry" name="cmbCompanyCountry" class="selectpicker">
								<option value="Sri Lanka">Sri Lanka</option>
							</select>
						</div>
					</div>
					<div class="col-md-6 col-lg-6">
						<div class="my_profile_select_box form-group">
							<label for="cmbCompanyCity">City</label><br>
							<select id="cmbCompanyCity" name="cmbCompanyCity" class="selectpicker">
								<option value="Colombo">Colombo</option>
								<option value="Negombo">Negombo</option>
							</select>
						</div>
					</div>
					<div class="col-lg-12">
						<div class="my_resume_textarea mt20">
							<div class="form-group">
								<label for="txtCompanyAddress">Full Address</label>
								<textarea class="form-control" id="txtCompanyAddress" name="txtCompanyAddress" rows="3"></textarea>
							</div>
						</div>
					</div>
					<div class="col-md-4 col-lg-4">
						<div class="my_profile_input form-group">
							<label for="txtCompanyLocationLatitude">Latitude</label>
							<input type="text" class="form-control" id="txtCompanyLocationLatitude" name="txtCompanyLocationLatitude" aria-describedby="latNumber" readonly>
						</div>
					</div>
					<div class="col-md-4 col-lg-4">
						<div class="my_profile_input form-group">
							<label for="txtCompanyLocationLongitude">Longitude</label>
							<input type="text" class="form-control" id="txtCompanyLocationLongitude" name="txtCompanyLocationLongitude" aria-describedby="latNumber" readonly>
						</div>
					</div>
					<div class="col-md-4 col-lg-4">
						<div class="my_profile_input form-group">
							<label for="txtCompanyLocationZoom">Zoom</label>
							<input type="text" class="form-control" name="txtCompanyLocationZoom" id="txtCompanyLocationZoom" aria-describedby="latNumber" readonly>
							<input type="hidden" class="form-control" name="txtProfileID" id="txtProfileID">
						</div>
					</div>
					<div class="col-lg-12">
						<div class="h300" id="gMap"></div>
					</div>
					<?php if($profile == null){ ?>
						<div class="col-lg-4">
							<div class="my_profile_input">
								<br>
								<button class="btn btn-lg btn-thm" type="submit">Create Profile</button>
								<input type="hidden" class="form-control" name="txtCompanyDataExist" id="txtCompanyDataExist" value="NEW">
							</div>
						</div>
					<?php }else{ ?>
						<div class="col-lg-4">
							<div class="my_profile_input">
								<br>
								<button class="btn btn-lg btn-thm" type="submit">Save Changes</button>
								<input type="hidden" class="form-control" name="txtCompanyDataExist" id="txtCompanyDataExist" value="UPDATE">
								<input type="hidden" class="form-control" name="txtCurrentImage" id="txtCurrentImage">
							</div>
						</div>
					<?php } ?>
			</div>
		</form>
	</div>
</div>


<script type="text/javascript" src="<?php echo base_url() ?>assets/js/map-picker.js"></script>
<script type="text/javascript" src="https://maps.google.com/maps/api/js?key=AIzaSyB8BbO_t_LXJLuBuHLnRMvXBJH8_S7q2IM&callback=initMap" async></script>

<script>

	function updateUI(){
		if($('#txtCompanyDataExist').val() === 'UPDATE'){
			$.ajax({
				url: "<?php echo base_url(''); ?>/BEProfile/getProfile",
				data: null,
				method: "post",
				dataType: "json",
				error: function(error){
					console.log(error);
					$.notify("Internal server error", "error");

				},
				success: function(r){

					console.log(r);

					$('#txtCompanyName').val(r.company_name);
					$('#txtCompanyEmail').val(r.company_email);
					$('#txtCompanyPhone').val(r.company_phone);
					$('#txtCompanyWebSite').val(r.company_website);
					$('#txtCompanyStartDate').val(r.company_start_date);
					$('#txtCompanyAbout').val(r.company_about);
					$('#txtCompanyFacebook').val(r.company_facebook);
					$('#txtCompanyLinkedin').val(r.company_linkedin);
					$('#txtCompanyInstagram').val(r.company_instagram);
					$('#txtCompanyTwitter').val(r.company_twitter);
					$('#txtCompanyAddress').val(r.company_address);
					$('#txtCompanyLocationLatitude').val(r.company_location_lat);
					$('#txtCompanyLocationLongitude').val(r.company_location_lng);
					$('#txtCompanyLocationZoom').val(r.company_location_zoom);
					$('#txtProfileID').val(r.company_profile_id);
					$('#txtCurrentImage').val(r.company_profile_image_url);

					$('#cmbCompanyTeamSize').val(r.company_team_size);
					$('#cmbCompanyTeamSize').trigger('change');

					let categories = []

					for(let a=0; a<r.categories.length; a++){
						categories.push(r.categories[a].category_name)
					}

					$('#imagePreview').css('background-image', 'url(<?php echo base_url('assets/images/profile/company/') ?>'+ r.company_profile_image_url+')');
					$('#imagePreview').hide();
					$('#imagePreview').fadeIn(650);

					$('#cmbCompanyCategories').selectpicker('val', categories);

					$('#cmbCompanyAllowDisability').val(r.company_allow_disability);
					$('#cmbCompanyAllowDisability').trigger('change');

					$('#cmbCompanyCountry').val(r.company_country);
					$('#cmbCompanyCountry').trigger('change');

					$('#cmbCompanyCity').val(r.company_city);
					$('#cmbCompanyCity').trigger('change');

				}
			});
		}
	}

	$(document).ready(function() {

		updateUI();

		function readURL(input) {
			if (input.files && input.files[0]) {
				var reader = new FileReader();
				reader.onload = function (e) {
					$('#imagePreview').css('background-image', 'url(' + e.target.result + ')');
					$('#imagePreview').hide();
					$('#imagePreview').fadeIn(650);
				}
				reader.readAsDataURL(input.files[0]);
			}
		}

		$("#imageUpload").change(function () {
			readURL(this);
		});

		$("#formProfile").validate({
			ignore: [],
			rules: {
				imageUpload: {
					required: true
				},
				txtCompanyName: {
					required: true
				},
				txtCompanyEmail: {
					required: true,
					email: true
				},
				txtCompanyPhone: {
					required: true,
					digits: true,
					minlength: 10,
					maxlength: 10
				},
				txtCompanyStartDate: {
					required: true
				},
				txtCompanyAbout: {
					required: true
				},
				txtCompanyAddress: {
					required: true
				}
			},
			messages: {
				imageUpload: {
					required: "Company profile image required!"
				},
				txtCompanyName: {
					required: "Company name required!"
				},
				txtCompanyEmail: {
					required: "Company email required!",
					email: "Please enter a valid email!"
				},
				txtCompanyPhone: {
					required: "Company phone no required!",
					digits: "Phone no must have digits only!",
					minlength: "Valid phone no can have 10 digits only!",
					maxlength: "Valid phone no can have 10 digits only!"
				},
				txtCompanyStartDate: {
					required: "Company established date required!"
				},
				txtCompanyAbout: {
					required: "Company description required!"
				},
				txtCompanyAddress: {
					required: "Company address required!"
				}
			},
			submitHandler: function(form) {
				let formData = new FormData(form);

				$.ajax({
					url: '<?php echo base_url('BEProfile/manageProfile'); ?>',
					data: formData,
					dataType: 'json',
					method: 'post',
					processData: false,
					enctype: 'multipart/form-data',
					contentType: false,
					cache: false,
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


