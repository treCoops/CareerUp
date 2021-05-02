<?php
/**
 * Created & developed by treCoops
 * For: degree final
 * Campus ID: COBSCCOMP191P-032
 * Coventry ID: 9631605
 * Date: 2021-04-27
 * Time: 13:51
 */
?>

<div class="col-sm-12 col-lg-8 col-xl-9">
	<div class="my_profile_form_area">
		<form id="formJobPost" method="post">
			<div class="row">
				<div class="col-lg-12">
					<h4 class="fz20 mb20">Post a New Job</h4>
				</div>
				<div class="col-lg-12 mt30">
					<div class="my_profile_thumb_edit"></div>
				</div>
				<div class="col-lg-12">
					<div class="my_profile_input form-group">
						<label for="txtJobTitle">Job Title</label>
						<input type="text" class="form-control" name="txtJobTitle" id="txtJobTitle" placeholder="Ex: Fullstack Developer">
					</div>
				</div>
				<div class="col-lg-12">
					<div class="my_resume_textarea">
						<div class="form-group">
							<label for="txtJobDescription">Job Description</label>
							<textarea class="form-control" id="txtJobDescription" name="txtJobDescription" rows="9"></textarea>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-lg-6">
					<div class="my_profile_input form-group">
						<label for="txtJobDeadlineDate">Application Deadline Date</label>
						<input type="text" class="form-control" id="txtJobDeadlineDate" name="txtJobDeadlineDate">
					</div>
				</div>
				<div class="col-md-6 col-lg-6">
					<div class="my_profile_select_box form-group">
						<label for="cmbJobKnowledgeLevel">Knowledge Level</label><br>
						<select id="cmbJobKnowledgeLevel" name="cmbJobKnowledgeLevel" class="selectpicker">
							<option value="Internship">Internship</option>
							<option value="Basic">Basic</option>
							<option value="Standard">Standard</option>
							<option value="Advance">Advance</option>
							<option value="Expert">Expert</option>
						</select>
					</div>
				</div>
				<div class="col-md-6 col-lg-6">
					<div class="my_profile_select_box form-group">
						<label for="cmbJobExperienceLevel">Experience Years</label><br>
						<select class="selectpicker" id="cmbJobExperienceLevel" name="cmbJobExperienceLevel">
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
					<div class="my_profile_select_box form-group">
						<label for="cmbGender">Gender</label><br>
						<select class="selectpicker" id="cmbGender" name="cmbGender">
							<option value="Male Only">Male Only</option>
							<option value="Female Only">Female Only</option>
							<option value="Male & Female">Male & Female</option>
						</select>
					</div>
				</div>
				<div class="col-md-6 col-lg-6">
					<div class="my_profile_select_box form-group">
						<label for="cmbJobQualificationLevel">Qualification</label><br>
						<select class="selectpicker" id="cmbJobQualificationLevel" name="cmbJobQualificationLevel">
							<option value="A-Level">A-Level</option>
							<option value="Certificate of Higher Education">Certificate of Higher Education</option>
							<option value="Diploma of Higher Education & Foundation Degree">Diploma of Higher Education & Foundation Degree</option>
							<option value="Bachelor's Degree">Bachelor's Degree</option>
							<option value="Masters Degree">Masters Degree</option>
						</select>
					</div>
				</div>

				<div class="col-md-6 col-lg-6"></div>
				<div class="col-md-6 col-lg-6">
					<div class="my_profile_input">
						<br>
						<button class="btn btn-lg btn-thm" type="submit">Post</button>
					</div>
				</div>
			</div>
		</form>
	</div>
</div>

<script>
	$(document).ready(function() {

		flatpickr('#txtJobDeadlineDate', {
			minDate: new Date()
		});

		$("#formJobPost").validate({
			ignore: [],
			rules: {
				txtJobTitle: {
					required: true
				},
				txtJobDescription: {
					required: true
				},
				txtJobDeadlineDate: {
					required: true
				}
			},
			messages: {
				txtJobTitle: {
					required: "Select at least one category!"
				},
				txtJobDescription: {
					required: "Company name required!"
				},
				txtJobDeadlineDate: {
					required: "Company email required!"
				}
			},
			submitHandler: function (form) {
				let formData = new FormData(form);

				$.ajax({
					url: '<?php echo base_url('BEPost/createJobPost'); ?>',
					data: formData,
					dataType: 'json',
					method: 'post',
					processData: false,
					enctype: 'multipart/form-data',
					contentType: false,
					cache: false,
					error: function (error) {
						console.log(error);
						$.notify("Internal server error", "error");
					},
					success: function (r) {
						if (r.status == 200) {
							$.notify(r.message, "success");
						}

						if (r.status == 500) {
							$.notify(r.message, "error");
						}

					}
				});
			}

		});

	});
</script>
