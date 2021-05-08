<?php
/**
 * Created & developed by treCoops
 * For: degree final
 * Campus ID: COBSCCOMP191P-032
 * Coventry ID: 9631605
 * Date: 2021-04-27
 * Time: 14:31
 */
?>
<div class="col-sm-12 col-lg-8 col-xl-9">
	<div class="my_profile_form_area employer_profile">
		<form id="formProfile" method="post">
			<div class="row">
				<div class="col-lg-12">
					<h4 class="fz20 mb20">My Profile</h4>
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
						<label for="txtCandidateFullName">Full Name</label>
						<input type="text" class="form-control" id="txtCandidateFullName" name="txtCandidateFullName">
					</div>
				</div>
				<div class="col-md-6 col-lg-6">
					<div class="my_profile_input form-group">
						<label for="txtCandidateJobTitle">Job Title</label>
						<input type="text" class="form-control" name="txtCandidateJobTitle" id="txtCandidateJobTitle" placeholder="UX/UI Desginer">
					</div>
				</div>
				<div class="col-md-6 col-lg-6">
					<div class="my_profile_input form-group">
						<label for="txtCandidatePhone">Phone</label>
						<input type="text" class="form-control" id="txtCandidatePhone" name="txtCandidatePhone" aria-describedby="phoneNumber" placeholder="ex: 0771234567">
					</div>
				</div>
				<div class="col-md-6 col-lg-6">
					<div class="my_profile_input form-group">
						<label for="txtCandidateEmail">Email address</label>
						<input type="email" class="form-control" id="txtCandidateEmail" name="txtCandidateEmail" >
					</div>
				</div>
				<div class="col-md-6 col-lg-6">
					<div class="my_profile_input form-group">
						<label for="txtCandidateWebsite">Website</label>
						<input type="text" class="form-control" name="txtCandidateWebsite" id="txtCandidateWebsite">
					</div>
				</div>
				<div class="col-md-6 col-lg-6">
					<div class="my_profile_select_box form-group">
						<label for="cmbCandidateExperienceLevel">Experience</label><br>
						<select class="selectpicker" name="cmbCandidateExperienceLevel" id="cmbCandidateExperienceLevel">
							<option value="Below 1 Year">Below 1 Year</option>
							<option value="1 to 2 Years">1 to 2 Years</option>
							<option value="2 to 3 Years">2 to 3 Years</option>
							<option value="3 to 4 Years">3 to 4 Years</option>
							<option value="4 to 5 Years">4 to 5 Years</option>
							<option value="More Than 5 Years">More Than 5 Years</option>
						</select>
					</div>
				</div>
				<div class="col-md-6 col-lg-6">
					<div class="my_profile_input form-group">
						<label for="txtCandidateDOB">Date Of Birth</label><br>
						<input type="text" class="form-control" id="txtCandidateDOB" name="txtCandidateDOB">
					</div>
				</div>
				<div class="col-md-6 col-lg-6">
					<div class="my_profile_input form-group">
						<label for="txtCandidateAge">Age</label><br>
						<input type="text" class="form-control datepicker" readonly id="txtCandidateAge" name="txtCandidateAge">
					</div>
				</div>
				<div class="col-md-6 col-lg-6">
					<div class="my_profile_select_box form-group">
						<label for="cmbCandidateEducationLevel">Education Levels</label><br>
						<select class="selectpicker" id="cmbCandidateEducationLevel" name="cmbCandidateEducationLevel">
							<option value="A-Level">A-Level</option>
							<option value="Certificate of Higher Education">Certificate of Higher Education</option>
							<option value="Diploma of Higher Education & Foundation Degree">Diploma of Higher Education & Foundation Degree</option>
							<option value="Bachelor's Degree">Bachelor's Degree</option>
							<option value="Masters Degree">Masters Degree</option>
						</select>
					</div>
				</div>
				<div class="col-md-6 col-lg-6">
					<div class="my_profile_select_box form-group">
						<label for="cmbCandidateEducationLevel">Languages</label><br>
						<select class="selectpicker" name="cmbCandidateLanguages[]" id="cmbCandidateLanguages" multiple data-actions-box="true">
							<option value="English">English</option>
							<option value="Sinhala">Sinhala</option>
							<option value="Tamil">Tamil</option>
						</select>
					</div>
				</div>
				<div class="col-md-6 col-lg-6">
					<div class="my_profile_select_box form-group">
						<label for="cmbCandidateCategory">Categories</label><br>
						<select class="selectpicker" multiple data-actions-box="true" id="cmbCandidateCategory" name="cmbCandidateCategory[]">
							<option value="Mobile App Development">Mobile App Development</option>
							<option value="Web Site & Web App Development">Web Site & Web App Development</option>
							<option value="IOT">IOT</option>
							<option value="Standalone App Development">Standalone App Development</option>
						</select>
					</div>
				</div>
				<div class="col-md-6 col-lg-6">
					<div class="my_profile_select_box form-group">
						<label for="cmbCandidateDisability">I am person with disability</label><br>
						<select class="selectpicker" name="cmbCandidateDisability" id="cmbCandidateDisability">
							<option value="1">Yes</option>
							<option value="0">No</option>
						</select>
					</div>
				</div>
				<div class="col-lg-12">
					<div class="my_resume_textarea mt20">
						<div class="form-group">
							<label for="txtCandidateDescription">Description</label>
							<textarea class="form-control" id="txtCandidateDescription" name="txtCandidateDescription" rows="9"></textarea>
						</div>
					</div>
				</div>
				<div class="col-lg-12">
					<h4 class="fz18 mb20">Social Network</h4>
				</div>
				<div class="col-md-6 col-lg-6">
					<div class="my_profile_input form-group">
						<label for="txtCandidateFaceBook">Facebook</label>
						<input type="text" class="form-control" id="txtCandidateFaceBook" name="txtCandidateFaceBook">
					</div>
				</div>
				<div class="col-md-6 col-lg-6">
					<div class="my_profile_input form-group">
						<label for="txtCandidateTwitter">Twitter</label>
						<input type="text" class="form-control" id="txtCandidateTwitter" name="txtCandidateTwitter">
					</div>
				</div>
				<div class="col-md-6 col-lg-6">
					<div class="my_profile_input form-group">
						<label for="txtCandidateLinkedIn">Linkedin</label>
						<input type="text" class="form-control" id="txtCandidateLinkedIn" name="txtCandidateLinkedIn">
					</div>
				</div>
				<div class="col-md-6 col-lg-6">
					<div class="my_profile_input form-group">
						<label for="txtCandidateInstagram">Instagram</label>
						<input type="text" class="form-control" id="txtCandidateInstagram" name="txtCandidateInstagram">
					</div>
				</div>
				<div class="col-lg-12">
					<h4 class="fz18 mb20">Contact Information</h4>
				</div>
				<div class="col-md-6 col-lg-6">
					<div class="my_profile_select_box form-group">
						<label for="cmbCandidateCountry">Country</label><br>
						<select class="selectpicker" id="cmbCandidateCountry" name="cmbCandidateCountry">
							<option value="Sri Lanka">Sri Lanka</option>
						</select>
					</div>
				</div>
				<div class="col-md-6 col-lg-6">
					<div class="my_profile_select_box form-group">
						<label for="cmbCandidateCity">City</label><br>
						<select class="selectpicker" name="cmbCandidateCity" id="cmbCandidateCity">
							<option value="Colombo">Colombo</option>
							<option value="Negombo">Negombo</option>
						</select>
					</div>
				</div>
				<div class="col-lg-12">
					<div class="my_resume_textarea mt20">
						<div class="form-group">
							<label for="txtCandidateFullAddress">Full Address</label>
							<textarea class="form-control" name="txtCandidateFullAddress" id="txtCandidateFullAddress" rows="3"></textarea>
						</div>
					</div>
				</div>
				<div class="col-md-4 col-lg-4">
					<div class="my_profile_input form-group">
						<label for="txtLocationLatitude">Latitude</label>
						<input type="text" class="form-control" id="txtLocationLatitude" name="txtLocationLatitude" aria-describedby="latNumber" readonly>
					</div>
				</div>
				<div class="col-md-4 col-lg-4">
					<div class="my_profile_input form-group">
						<label for="txtLocationLongitude">Longitude</label>
						<input type="text" class="form-control" id="txtLocationLongitude" name="txtLocationLongitude" aria-describedby="latNumber" readonly>
					</div>
				</div>
				<div class="col-md-4 col-lg-4">
					<div class="my_profile_input form-group">
						<label for="txtLocationZoom">Zoom</label>
						<input type="text" class="form-control" id="txtLocationZoom" name="txtLocationZoom" aria-describedby="latNumber" readonly>
						<input type="hidden" class="form-control" name="txtCandidateDataExist" id="txtCandidateDataExist">
						<input type="hidden" class="form-control" name="txtProfileID" id="txtProfileID">
					</div>
				</div>
				<div class="col-lg-12">
					<div class="h300" id="gMap"></div>
				</div>
				<div id="divSubmitButton" class="col-lg-4">
				</div>
			</div>
		</form>
	</div>
</div>

<script type="text/javascript" src="<?php echo base_url() ?>assets/js/map-picker.js"></script>
<script type="text/javascript" src="https://maps.google.com/maps/api/js?key=AIzaSyB8BbO_t_LXJLuBuHLnRMvXBJH8_S7q2IM&callback=initMap" async></script>


<script>

	function updateButton(name){
		$('#divSubmitButton').empty();
		$content = '<div class="my_profile_input"><br><button class="btn btn-lg btn-thm" type="submit">'+name+'</button></div>'
		$('#divSubmitButton').append($content);
	}

	function updateUI(){
		$.ajax({
			url: "<?php echo base_url(''); ?>/BCProfile/getProfile",
			data: null,
			method: "post",
			dataType: "json",
			error: function(error){
				console.log(error);
				$.notify("Internal server error", "error");

			},
			success: function(r){

				if(r.status === 500){
					$('#txtCandidateDataExist').val('NEW');
					updateButton('Create Profile')
				}
				if(r.status === 200){
					$('#txtCandidateDataExist').val('UPDATE');
					updateButton('Save Changes')

					console.log(r.data);

					deleteMarkers()
					let marker = {lat: parseFloat(r.data.candidate_location_latitude), lng: parseFloat(r.data.candidate_location_longitude)};
					addMarker(marker);
					addMarker()

					$('#txtCandidateFullName').val(r.data.candidate_full_name);
					$('#txtCandidateJobTitle').val(r.data.candidate_job_title);
					$('#txtCandidatePhone').val('0'+r.data.candidate_phone_no);
					$('#txtCandidateEmail').val(r.data.candidate_email);
					$('#txtCandidateWebsite').val(r.data.candidate_website);
					$('#txtCandidateDOB').val(r.data.candidate_date_of_birth);
					$('#txtCandidateAge').val(r.data.candidate_age);
					$('#txtCandidateDescription').val(r.data.candidate_description);
					$('#txtCandidateFaceBook').val(r.data.candidate_facebook);
					$('#txtCandidateTwitter').val(r.data.candidate_twitter);
					$('#txtCandidateLinkedIn').val(r.data.candidate_linkedIn);
					$('#txtCandidateInstagram').val(r.data.candidate_instagram);
					$('#txtCandidateFullAddress').val(r.data.candidate_address);
					$('#txtLocationLatitude').val(r.data.candidate_location_latitude);
					$('#txtLocationLongitude').val(r.data.candidate_location_longitude);
					$('#txtLocationZoom').val(r.data.candidate_location_zoom);
					$('#txtProfileID').val(r.data.candidate_profile_id);

					$('#imagePreview').css('background-image', 'url(<?php echo base_url('assets/images/profile/') ?>'+ r.data.candidate_profile_image_url+')');
					$('#imagePreview').hide();
					$('#imagePreview').fadeIn(650);


					$('#cmbCandidateExperienceLevel').val(r.data.candidate_experience);
					$('#cmbCandidateExperienceLevel').trigger('change');

					$('#cmbCandidateEducationLevel').val(r.data.candidate_education_level);
					$('#cmbCandidateEducationLevel').trigger('change');

					$('#cmbCandidateDisability').val(r.data.candidate_disability);
					$('#cmbCandidateDisability').trigger('change');

					$('#cmbCandidateCountry').val(r.data.candidate_country);
					$('#cmbCandidateCountry').trigger('change');

					$('#cmbCandidateCity').val(r.data.candidate_city);
					$('#cmbCandidateCity').trigger('change');

					let categories = []
					let languages = []

					for(let a=0; a<r.data.categories.length; a++){
						categories.push(r.data.categories[a].category_name)
					}
					for(let a=0; a<r.data.languages.length; a++){
						languages.push(r.data.languages[a].language_title)
					}

					$('#cmbCandidateCategory').selectpicker('val', categories);
					$('#cmbCandidateLanguages').selectpicker('val', languages);

				}
			}
		});
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

		flatpickr('#txtCandidateDOB', {
			maxDate: new Date()
		});

		$('#txtCandidateDOB').on('change', function() {
			let today = new Date();
			console.log(this.value);
			let birthDate = new Date(this.value);
			let age = today.getFullYear() - birthDate.getFullYear();
			let m = today.getMonth() - birthDate.getMonth();
			if (m < 0 || (m === 0 && today.getDate() < birthDate.getDate()))
			{
				age--;
			}
			console.log(age);
			$('#txtCandidateAge').val(age);
		});

		$("#formProfile").validate({
			ignore: [],
			rules: {
				txtCandidateFullName: {
					required: true
				},
				txtCandidateJobTitle: {
					required: true
				},
				txtCandidateEmail: {
					required: true,
					email: true
				},
				txtCandidatePhone: {
					required: true,
					digits: true,
					minlength: 10,
					maxlength: 10
				},
				txtCandidateDOB: {
					required: true
				},
				txtCandidateAge: {
					required: true,
					digits: true,
					minlength: 2,
					maxlength: 2
				},
				txtCandidateDescription: {
					required: true
				},
				txtCandidateFullAddress: {
					required: true
				}
			},
			messages: {
				txtCandidateFullName: {
					required: "Candidate full name required!"
				},
				txtCandidateJobTitle: {
					required: "Candidate job title required!"
				},
				txtCandidateEmail: {
					required: "Candidate email required!",
					email: "Please enter a valid email!"
				},
				txtCandidatePhone: {
					required: "Candidate phone no required!",
					digits: "Phone no must have digits only!",
					minlength: "Valid phone no can have 10 digits only!",
					maxlength: "Valid phone no can have 10 digits only!"
				},
				txtCandidateDOB: {
					required: "candidate DOB required!"
				},
				txtCandidateAge: {
					required: "Candidate age required!",
					digits: "Candidate age must have digits only!",
					minlength: "Valid age can have 2 digits only!",
					maxlength: "Valid age can have 2 digits only!"
				},
				txtCandidateDescription: {
					required: "Candidate description required!"
				},
				txtCandidateFullAddress: {
					required: "Candidate address required!"
				}
			},
			submitHandler: function(form) {
				let formData = new FormData(form);

				$.ajax({
					url: '<?php echo base_url('BCProfile/manageProfile'); ?>',
					data: formData,
					dataType: 'json',
					method: 'post',
					processData: false,
					enctype: 'multipart/form-data',
					contentType: false,
					cache: false,
					error: function(error){
						console.log(error);
						$.notify("Internal server error", "error");
					},
					success: function(r){
						if(r.status == 200){
							$.notify(r.message, "success");
							updateUI();
						}

						if(r.status == 201){
							$.notify(r.message, "success");
							updateUI();
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
