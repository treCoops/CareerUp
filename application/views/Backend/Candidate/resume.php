<?php
/**
 * Created & developed by treCoops
 * For: degree final
 * Campus ID: COBSCCOMP191P-032
 * Coventry ID: 9631605
 * Date: 2021-04-27
 * Time: 14:35
 */

$User_Session = $this->session->userdata('User_Session');

?>

<div class="col-sm-12 col-lg-8 col-xl-9">
	<div class="row">
		<div class="col-lg-12">
			<h4 class="fz20 mb20">My Resume</h4>
			<input type="hidden" name="txtUserID" id="txtUserID" value="<?php echo $User_Session['ID'] ?>">
		</div>
		<div class="col-lg-12">
			<div class="my_resume_eduarea">
				<h4 class="title">Education <small class="float-right"><a href="#" data-toggle="modal" data-target="#modalEducation">Add New <span class="flaticon-right-arrow"></span></a></small></h4>
				<div id="educationDiv"></div>
			</div>
		</div>

		<div class="col-lg-12">
			<div class="my_resume_eduarea">
				<h4 class="title">Work & Experience <small class="float-right"><a href="#" data-toggle="modal" data-target="#modalWork">Add New <span class="flaticon-right-arrow"></span></a></small></h4>
				<div id="workDiv"></div>
			</div>
		</div>

		<div class="col-lg-12">
			<div class="my_resume_eduarea">
				<h4 class="title">Skills <small class="float-right"><a href="#" data-toggle="modal" data-target="#modalSkill">Add New <span class="flaticon-right-arrow"></span></a></small></h4>
				<div id="skillDiv"></div>
			</div>
		</div>

		<div class="col-lg-12">
			<div class="my_resume_eduarea">
				<h4 class="title">Awards <small class="float-right"><a href="#"  data-toggle="modal" data-target="#modalAwards">Add New <span class="flaticon-right-arrow"></span></a></small></h4>
				<div id="awardDiv"></div>

			</div>
		</div>

		<!--Education Modal-->
		<div class="sign_up_modal modal fade" id="modalEducation" tabindex="-1" role="dialog" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					</div>
					<div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
						<div class="login_form">
							<form id="forAddEducation" method="post">
								<div class="heading">
									<h3 class="text-center">Add Education Details</h3>
								</div>
								<div class="form-group">
									<label for="cmbEducationCollageName">Select School</label><br>
									<select class="selectpicker form-control" id="cmbEducationCollageName" name="cmbEducationCollageName">
										<option value="National Institute of Business Management(NIBM)">National Institute of Business Management(NIBM)</option>
										<option value="Coventry University">Coventry University</option>
										<option value="University of Colombo">University of Colombo</option>
										<option value="University of Sri Jayewardenepura">University of Sri Jayewardenepura</option>
										<option value="IDM">IDM</option>
										<option value="Informatics Institute of Technology Sri Lanka">Informatics Institute of Technology Sri Lanka</option>
										<option value="Sri Lanka Institute of Information Technology">Sri Lanka Institute of Information Technology</option>
									</select>
								</div>
								<div class="form-group">
									<label for="txtEducationQualificationName">Qualification Name</label><br>
									<input type="text" class="form-control" id="txtEducationQualificationName" name="txtEducationQualificationName">
								</div>
								<div class="form-group">
									<label for="txtEducationFieldOfStudy">Field of Study</label><br>
									<input type="text" class="form-control" id="txtEducationFieldOfStudy" name="txtEducationFieldOfStudy">
								</div>
								<div class="form-group">
									<label for="txtEducationStartDate">Start Date</label><br>
									<input type="text" class="form-control" id="txtEducationStartDate" name="txtEducationStartDate">
								</div>
								<div class="form-group">
									<label for="txtEducationEndDate">End Date</label><br>
									<input type="text" class="form-control" id="txtEducationEndDate" name="txtEducationEndDate">
								</div>
								<div class="form-group">
									<label for="txtEducationGrade">Grade</label><br>
									<input type="text" class="form-control" id="txtEducationGrade" name="txtEducationGrade">
								</div>
								<div class="form-group">
									<label for="txtEducationDescription">Description</label><br>
									<input type="text" class="form-control" id="txtEducationDescription" name="txtEducationDescription">
								</div>
								<button type="submit" class="btn btn-log btn-block btn-thm">Submit</button>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!--Education Modal For Update-->
		<div class="sign_up_modal modal fade" id="modalUpdateEducation" tabindex="-1" role="dialog" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					</div>
					<div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
						<div class="login_form">
							<form id="forEditEducation" method="post">
								<div class="heading">
									<h3 class="text-center">Edit Education Details</h3>
								</div>
								<div class="form-group">
									<label for="cmbEducationUCollageName">Select School</label><br>
									<select class="selectpicker form-control" id="cmbEducationUCollageName" name="cmbEducationUCollageName">
										<option value="National Institute of Business Management(NIBM)">National Institute of Business Management(NIBM)</option>
										<option value="Coventry University">Coventry University</option>
										<option value="University of Colombo">University of Colombo</option>
										<option value="University of Sri Jayewardenepura">University of Sri Jayewardenepura</option>
										<option value="IDM">IDM</option>
										<option value="Informatics Institute of Technology Sri Lanka">Informatics Institute of Technology Sri Lanka</option>
										<option value="Sri Lanka Institute of Information Technology">Sri Lanka Institute of Information Technology</option>
									</select>
								</div>
								<div class="form-group">
									<label for="txtEducationUQualificationName">Qualification Name</label><br>
									<input type="text" class="form-control" id="txtEducationUQualificationName" name="txtEducationUQualificationName">
								</div>
								<div class="form-group">
									<label for="txtEducationUFieldOfStudy">Field of Study</label><br>
									<input type="text" class="form-control" id="txtEducationUFieldOfStudy" name="txtEducationUFieldOfStudy">
								</div>
								<div class="form-group">
									<label for="txtEducationUStartDate">Start Date</label><br>
									<input type="text" class="form-control" id="txtEducationUStartDate" name="txtEducationUStartDate">
								</div>
								<div class="form-group">
									<label for="txtEducationUEndDate">End Date</label><br>
									<input type="text" class="form-control" id="txtEducationUEndDate" name="txtEducationUEndDate">
								</div>
								<div class="form-group">
									<label for="txtEducationUGrade">Grade</label><br>
									<input type="text" class="form-control" id="txtEducationUGrade" name="txtEducationUGrade">
								</div>
								<div class="form-group">
									<label for="txtEducationUDescription">Description</label><br>
									<input type="text" class="form-control" id="txtEducationUDescription" name="txtEducationUDescription">
									<input type="hidden" class="form-control" id="txtEducationUID" name="txtEducationUID">
								</div>
								<button type="submit" class="btn btn-log btn-block btn-thm">Submit</button>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!--Work Modal-->
		<div class="sign_up_modal modal fade" id="modalWork" tabindex="-1" role="dialog" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					</div>
					<div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
						<div class="login_form">
							<form id="forAddWork" method="post">
								<div class="heading">
									<h3 class="text-center">Add Work and Experience Details</h3>
								</div>
								<div class="form-group">
									<label for="txtWorkCompanyName">Company Name</label><br>
									<input type="text" class="form-control" id="txtWorkCompanyName" name="txtWorkCompanyName">
								</div>
								<div class="form-group">
									<label for="cmbWorkPosition">Select Position</label><br>
									<select class="selectpicker form-control" id="cmbWorkPosition" name="cmbWorkPosition">
										<option value="UI/UX Designer">UI/UX Designer</option>
										<option value="Fullstack Developer">Fullstack Developer</option>
										<option value="Database Admin">Database Admin</option>
										<option value="Backend Developer">Backend Developer</option>
										<option value="Web Developer">Web Developer</option>
										<option value="Mobile Developer">Mobile Developer</option>
										<option value="IOT">IOT</option>
									</select>
								</div>

								<div class="form-group">
									<label for="cmbWorkLocation">Select Location</label><br>
									<select class="selectpicker form-control" id="cmbWorkLocation" name="cmbWorkLocation">
										<option value="Sri Lanka">Sri Lanka</option>
										<option value="Germany">Germany</option>
									</select>
								</div>
								<div class="form-group">
									<label for="txtWorkStartDate">Start Date</label><br>
									<input type="text" class="form-control" id="txtWorkStartDate" name="txtWorkStartDate">
								</div>

								<div class="form-group">
									<div class="custom-control custom-checkbox">
										<input type="checkbox" class="custom-control-input" value="abc" checked name="chkCurrentlyWorking" id="chkCurrentlyWorking">
										<label class="custom-control-label" for="chkCurrentlyWorking">Currently Work On This Position</label>
									</div>
								</div>

								<div id="divEndDate" class="form-group">
									<label for="txtWorkEndDate">End Date</label><br>
									<input type="text" class="form-control" id="txtWorkEndDate" name="txtWorkEndDate">
								</div>

								<div class="form-group">
									<label for="txtWorkDescription">Description</label><br>
									<input type="text" class="form-control" id="txtWorkDescription" name="txtWorkDescription">
								</div>
								<button type="submit" class="btn btn-log btn-block btn-thm">Submit</button>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!--Work Modal For Update-->
		<div class="sign_up_modal modal fade" id="modalEditWork" tabindex="-1" role="dialog" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					</div>
					<div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
						<div class="login_form">
							<form id="forUpdateWork" method="post">
								<div class="heading">
									<h3 class="text-center">Edit Work and Experience Details</h3>
								</div>
								<div class="form-group">
									<label for="txtWorkUCompanyName">Company Name</label><br>
									<input type="text" class="form-control" id="txtWorkUCompanyName" name="txtWorkUCompanyName">
								</div>
								<div class="form-group">
									<label for="cmbWorkUPosition">Select Position</label><br>
									<select class="selectpicker form-control" id="cmbWorkUPosition" name="cmbWorkUPosition">
										<option value="UI/UX Designer">UI/UX Designer</option>
										<option value="Fullstack Developer">Fullstack Developer</option>
										<option value="Database Admin">Database Admin</option>
										<option value="Backend Developer">Backend Developer</option>
										<option value="Web Developer">Web Developer</option>
										<option value="Mobile Developer">Mobile Developer</option>
										<option value="IOT">IOT</option>
									</select>
								</div>

								<div class="form-group">
									<label for="cmbWorkULocation">Select Location</label><br>
									<select class="selectpicker form-control" id="cmbWorkULocation" name="cmbWorkULocation">
										<option value="Sri Lanka">Sri Lanka</option>
										<option value="Germany">Germany</option>
									</select>
								</div>
								<div class="form-group">
									<label for="txtWorkUStartDate">Start Date</label><br>
									<input type="text" class="form-control" id="txtWorkUStartDate" name="txtWorkUStartDate">
								</div>

								<div class="form-group">
									<div class="custom-control custom-checkbox">
										<input type="checkbox" class="custom-control-input" value="abc" checked name="chkUCurrentlyWorking" id="chkUCurrentlyWorking">
										<label class="custom-control-label" for="chkUCurrentlyWorking">Currently Work On This Position</label>
									</div>
								</div>

								<div id="divUEndDate" class="form-group">
									<label for="txtWorkUEndDate">End Date</label><br>
									<input type="text" class="form-control" id="txtWorkUEndDate" name="txtWorkUEndDate">
								</div>

								<div class="form-group">
									<label for="txtWorkUDescription">Description</label><br>
									<input type="text" class="form-control" id="txtWorkUDescription" name="txtWorkUDescription">
									<input type="hidden" class="form-control" id="txtWorkUID" name="txtWorkUID">
								</div>
								<button type="submit" class="btn btn-log btn-block btn-thm">Submit</button>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!--Award Modal-->
		<div class="sign_up_modal modal fade" id="modalAwards" tabindex="-1" role="dialog" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					</div>
					<div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
						<div class="login_form">
							<form id="forAddAward" method="post">
								<div class="heading">
									<h3 class="text-center">Add Award Details</h3>
								</div>
								<div class="form-group">
									<label for="txtAwardName">Award Name</label><br>
									<input type="text" class="form-control" id="txtAwardName" name="txtAwardName">
								</div>
								<div class="form-group">
									<label for="txtAwardDate">Date</label><br>
									<input type="text" class="form-control" id="txtAwardDate" name="txtAwardDate">
								</div>
								<div class="form-group">
									<label for="txtAwardDescription">Description</label><br>
									<input type="text" class="form-control" id="txtAwardDescription" name="txtAwardDescription">
								</div>
								<button type="submit" class="btn btn-log btn-block btn-thm">Submit</button>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!--Award Modal for Update-->
		<div class="sign_up_modal modal fade" id="modalUpdateAwards" tabindex="-1" role="dialog" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					</div>
					<div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
						<div class="login_form">
							<form id="forUpdateAward" method="post">
								<div class="heading">
									<h3 class="text-center">Edit Award Details</h3>
								</div>
								<div class="form-group">
									<label for="txtAwardUName">Award Name</label><br>
									<input type="text" class="form-control" id="txtAwardUName" name="txtAwardUName">
								</div>
								<div class="form-group">
									<label for="txtAwardUDate">Date</label><br>
									<input type="text" class="form-control" id="txtAwardUDate" name="txtAwardUDate">
								</div>
								<div class="form-group">
									<label for="txtAwardUDescription">Description</label><br>
									<input type="text" class="form-control" id="txtAwardUDescription" name="txtAwardUDescription">
									<input type="hidden" class="form-control" id="txtAwardUID" name="txtAwardUID">
								</div>
								<button type="submit" class="btn btn-log btn-block btn-thm">Submit</button>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!--Skill Modal-->
		<div class="sign_up_modal modal fade" id="modalSkill" tabindex="-1" role="dialog" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					</div>
					<div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
						<div class="login_form">
							<form id="forAddSkill" method="post">
								<div class="heading">
									<h3 class="text-center">Add Skill Details</h3>
								</div>
								<div class="form-group">
									<label for="cmbWorkPosition">Select Skill</label><br>
									<select class="selectpicker form-control" id="cmbSkillName" name="cmbSkillName">
										<option value="C">C</option>
										<option value="C++">C++</option>
										<option value="Java">Java</option>
										<option value="C#">C#</option>
										<option value="HTML">HTML</option>
										<option value="JavaScript">JavaScript</option>
										<option value="Php">Php</option>
										<option value="Node JS">Node JS</option>
										<option value="Flutter">Flutter</option>
										<option value="Android">Android</option>
										<option value="Swift">Swift</option>
										<option value="Objective C">Objective C</option>
										<option value="Vue JS">Vue JS</option>
									</select>
								</div>
								<div class="form-group">
									<div class="custom-progress bottom-right progress-down" style="width: 100%">
										<label for="rngSkillLevel" class="form-label">Select Skill Level</label>
										<input type="range" id="rngSkillLevel" name="rngSkillLevel" min="0" max="100" step="10" class="custom-range progress-range-counter" value="10">
										<div class="range-count"><span class="range-count-number" data-rangecountnumber="0">10</span> <span class="range-count-unit">%</span></div>
									</div>
								</div>
								<div class="form-group">
									<label for="txtSkillDescription">Description</label><br>
									<input type="text" class="form-control" id="txtSkillDescription" name="txtSkillDescription">
								</div>
								<button type="submit" class="btn btn-log btn-block btn-thm">Submit</button>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!--Skill Modal for Update-->
		<div class="sign_up_modal modal fade" id="modalUpdateSkills" tabindex="-1" role="dialog" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					</div>
					<div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
						<div class="login_form">
							<form id="forUpdateSkill" method="post">
								<div class="heading">
									<h3 class="text-center">Edit Skill Details</h3>
								</div>
								<div class="form-group">
									<label for="cmbSkillUName">Select Skill</label><br>
									<select class="selectpicker form-control" id="cmbSkillUName" name="cmbSkillUName">
										<option value="C">C</option>
										<option value="C++">C++</option>
										<option value="Java">Java</option>
										<option value="C#">C#</option>
										<option value="HTML">HTML</option>
										<option value="JavaScript">JavaScript</option>
										<option value="Php">Php</option>
										<option value="Node JS">Node JS</option>
										<option value="Flutter">Flutter</option>
										<option value="Android">Android</option>
										<option value="Swift">Swift</option>
										<option value="Objective C">Objective C</option>
										<option value="Vue JS">Vue JS</option>
									</select>
								</div>
								<div class="form-group">
									<div class="custom-progress bottom-right progress-down" style="width: 100%">
										<label for="rngSkillULevel" class="form-label">Select Skill Level</label>
										<input type="range" id="rngSkillULevel" name="rngSkillULevel" min="0" max="100" step="10" class="custom-range progress-range-counter" value="10">
										<div class="range-count"><span id="spanSkillLevel" class="range-count-number" data-rangecountnumber="0">10</span> <span class="range-count-unit">%</span></div>
									</div>
								</div>
								<div class="form-group">
									<label for="txtSkillUDescription">Description</label><br>
									<input type="text" class="form-control" id="txtSkillUDescription" name="txtSkillUDescription">
									<input type="hidden" class="form-control" id="txtSkillID" name="txtSkillID">
								</div>
								<button type="submit" class="btn btn-log btn-block btn-thm">Submit</button>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>

	</div>
</div>


<script>

	function del(id, status){

		if(status === 'EDUCATION'){
			$.confirm({
				icon: 'fa fa-trash',
				title: 'Delete education record',
				content: 'Do you want to delete this education details?',
				type: 'red',
				typeAnimated: true,
				buttons: {
					confirm: {
						text: 'Delete',
						btnClass: 'btn-red',
						action: function(){
							$.ajax({
								url: "<?php echo base_url(''); ?>/BCResume/deleteEducation",
								data: {ID : id},
								method: "post",
								dataType: "json",
								error: function(error){
									console.log(error);
									$.notify("Internal server error", "error");

								},
								success: function(r){
									if(r.result){
										$.alert({
											icon: 'fa fa-check',
											title: 'Success',
											content: 'Details have been deleted',
											type: 'green',
											btnClass: 'btn-green'
										});

										updateEducationDiv()
									}else{
										$.alert({
											icon: 'fa fa-times',
											title: 'Error',
											content: 'Operation failed',
											type: 'red',
											btnClass: 'btn-red'
										});
									}
								}
							});


						}
					},
					close: function () {

					}
				}
			});
		}

		if(status === 'WORK'){
			$.confirm({
				icon: 'fa fa-trash',
				title: 'Delete work record',
				content: 'Do you want to delete this work details?',
				type: 'red',
				typeAnimated: true,
				buttons: {
					confirm: {
						text: 'Delete',
						btnClass: 'btn-red',
						action: function(){
							$.ajax({
								url: "<?php echo base_url(''); ?>/BCResume/deleteWork",
								data: {ID : id},
								method: "post",
								dataType: "json",
								error: function(error){
									console.log(error);
									$.notify("Internal server error", "error");

								},
								success: function(r){
									if(r.result){
										$.alert({
											icon: 'fa fa-check',
											title: 'Success',
											content: 'Details have been deleted',
											type: 'green',
											btnClass: 'btn-green'
										});

										updateWorkDiv()
									}else{
										$.alert({
											icon: 'fa fa-times',
											title: 'Error',
											content: 'Operation failed',
											type: 'red',
											btnClass: 'btn-red'
										});
									}
								}
							});


						}
					},
					close: function () {

					}
				}
			});
		}

		if(status === 'AWARD'){
			$.confirm({
				icon: 'fa fa-trash',
				title: 'Delete award record',
				content: 'Do you want to delete this award details?',
				type: 'red',
				typeAnimated: true,
				buttons: {
					confirm: {
						text: 'Delete',
						btnClass: 'btn-red',
						action: function(){
							$.ajax({
								url: "<?php echo base_url(''); ?>/BCResume/deleteAward",
								data: {ID : id},
								method: "post",
								dataType: "json",
								error: function(error){
									console.log(error);
									$.notify("Internal server error", "error");

								},
								success: function(r){
									if(r.result){
										$.alert({
											icon: 'fa fa-check',
											title: 'Success',
											content: 'Details have been deleted',
											type: 'green',
											btnClass: 'btn-green'
										});

										updateAwardDiv()
									}else{
										$.alert({
											icon: 'fa fa-times',
											title: 'Error',
											content: 'Operation failed',
											type: 'red',
											btnClass: 'btn-red'
										});
									}
								}
							});


						}
					},
					close: function () {

					}
				}
			});
		}

		if(status === 'SKILL'){
			$.confirm({
				icon: 'fa fa-trash',
				title: 'Delete skill record',
				content: 'Do you want to delete this skill details?',
				type: 'red',
				typeAnimated: true,
				buttons: {
					confirm: {
						text: 'Delete',
						btnClass: 'btn-red',
						action: function(){
							$.ajax({
								url: "<?php echo base_url(''); ?>/BCResume/deleteSkill",
								data: {ID : id},
								method: "post",
								dataType: "json",
								error: function(error){
									console.log(error);
									$.notify("Internal server error", "error");

								},
								success: function(r){
									if(r.result){
										$.alert({
											icon: 'fa fa-check',
											title: 'Success',
											content: 'Details have been deleted',
											type: 'green',
											btnClass: 'btn-green'
										});

										updateSkillDiv()
									}else{
										$.alert({
											icon: 'fa fa-times',
											title: 'Error',
											content: 'Operation failed',
											type: 'red',
											btnClass: 'btn-red'
										});
									}
								}
							});


						}
					},
					close: function () {

					}
				}
			});
		}
	}

	function update(id, status){
		if(status === 'EDUCATION'){
			$.ajax({
				url: "<?php echo base_url(''); ?>/BCResume/selectedEducationDetails",
				data: {
					ID: id
				},
				method: "post",
				dataType: "json",
				error: function (error) {
					console.log(error);
					$.notify("Internal server error", "error");

				},
				success: function (r) {

					$('#txtEducationUQualificationName').val(r.data[0].education_qualification_name);
					$('#txtEducationUFieldOfStudy').val(r.data[0].education_field_of_study);
					$('#txtEducationUStartDate').val(r.data[0].education_start_date);
					$('#txtEducationUEndDate').val(r.data[0].education_end_date);
					$('#txtEducationUGrade').val(r.data[0].education_grade);
					$('#txtEducationUDescription').val(r.data[0].education_description);
					$('#txtEducationUID').val(r.data[0].education_id);

					$('#cmbEducationUCollageName').val(r.data[0].education_college_name);
					$('#cmbEducationUCollageName').trigger('change');

					$('#modalUpdateEducation').modal('show');

				}
			});
		}
		if(status === 'WORK'){
			$.ajax({
				url: "<?php echo base_url(''); ?>/BCResume/selectedWorkDetails",
				data: {
					ID: id
				},
				method: "post",
				dataType: "json",
				error: function (error) {
					console.log(error);
					$.notify("Internal server error", "error");

				},
				success: function (r) {

					console.log(r.data);

					$('#txtWorkUCompanyName').val(r.data[0].work_company_name);
					$('#txtWorkUStartDate').val(r.data[0].work_start_date);
					$('#txtWorkUEndDate').val(r.data[0].work_end_date);
					$('#txtWorkUDescription').val(r.data[0].work_description);
					$('#txtWorkUID').val(r.data[0].work_id);

					$('#cmbWorkUPosition').val(r.data[0].work_position);
					$('#cmbWorkUPosition').trigger('change');

					$('#cmbWorkULocation').val(r.data[0].work_location);
					$('#cmbWorkULocation').trigger('change');

					if(r.data[0].work_currently === '1'){
						$("#divUEndDate").hide();
						$( "#chkUCurrentlyWorking" ).prop( "checked", true );
					}
					if(r.data[0].work_currently === '0'){
						$( "#chkUCurrentlyWorking" ).prop( "checked", false );
						$("#divUEndDate").show();
					}

					$('#modalEditWork').modal('show');

				}
			});
		}
		if(status === 'AWARD'){
			$.ajax({
				url: "<?php echo base_url(''); ?>/BCResume/selectedAwardDetails",
				data: {
					ID: id
				},
				method: "post",
				dataType: "json",
				error: function (error) {
					console.log(error);
					$.notify("Internal server error", "error");

				},
				success: function (r) {

					$('#txtAwardUName').val(r.data[0].award_name);
					$('#txtAwardUDate').val(r.data[0].award_date);
					$('#txtAwardUDescription').val(r.data[0].award_description);
					$('#txtAwardUID').val(r.data[0].award_id);

					$('#modalUpdateAwards').modal('show');

				}
			});
		}

		if(status === 'SKILL'){
			$.ajax({
				url: "<?php echo base_url(''); ?>/BCResume/selectedSkillDetails",
				data: {
					ID: id
				},
				method: "post",
				dataType: "json",
				error: function (error) {
					console.log(error);
					$.notify("Internal server error", "error");

				},
				success: function (r) {

					$('#cmbSkillUName').val(r.data[0].skill_name);
					$('#cmbSkillUName').trigger('change');

					$('#rngSkillULevel').val(r.data[0].skill_level);
					$('#spanSkillLevel').text(r.data[0].skill_level);

					$('#txtSkillUDescription').val(r.data[0].skill_description);
					$('#txtSkillID').val(r.data[0].skill_id);

					$('#modalUpdateSkills').modal('show');

				}
			});
		}
	}

	function updateEducationDiv(){
		$.ajax({
			url: "<?php echo base_url(''); ?>/BCResume/getAllEducationDetails",
			data: {
				ID: $('#txtUserID').val()
			},
			method: "post",
			dataType: "json",
			error: function(error){
				console.log(error);
				$.notify("Internal server error", "error");

			},
			success: function(r){
				$('#educationDiv').empty();
				let status = 'EDUCATION'
				let content = ''
				for(let a=0; a<r.data.length; a++){
					content = '<div class="content"><div class="circle"></div>' +
							   '<p class="edu_center">'+r.data[a].education_college_name+' <small>'+r.data[a].education_start_date+' - '+r.data[a].education_end_date+'</small></p>' +
					           '<h4 class="edu_stats">'+r.data[a].education_qualification_name+' in '+r.data[a].education_field_of_study +
							   '<ul class="edu_stats_list float-right">' +
							   '<li class="list-inline-item"><a href="#" onclick="update(\''+r.data[a].education_id+'\', \''+status+'\')" data-toggle="tooltip" data-placement="top" title="Edit"><span class="flaticon-edit"></span></a></li>' +
					           '<li class="list-inline-item"><a href="#" onclick="del(\''+r.data[a].education_id+'\', \''+status+'\')" data-toggle="tooltip" data-placement="top" title="Delete"><span class="flaticon-rubbish-bin"></span></a></li>' +
				               '</ul>' +
							   '</h4> ' +
							   '<h6 class="">'+ r.data[a].education_grade +'</h6>'+
							   '<p>'+r.data[a].education_description+'.</p></div>'
					$('#educationDiv').append(content);
				}
			}
		});
	}

	function updateWorkDiv(){
		$.ajax({
			url: "<?php echo base_url(''); ?>/BCResume/getAllWorkDetails",
			data: {
				ID: $('#txtUserID').val()
			},
			method: "post",
			dataType: "json",
			error: function(error){
				console.log(error);
				$.notify("Internal server error", "error");

			},
			success: function(r){
				$('#workDiv').empty();
				let status = 'WORK'
				let content = ''
				for(let a=0; a<r.data.length; a++){

					if(r.data[a].work_currently === '1'){
						content = '<div class="content"><div class="circle"></div>' +
								'<p class="edu_center">'+r.data[a].work_company_name+' <small>'+r.data[a].work_start_date+' - Present</small></p>' +
								'<h4 class="edu_stats">'+r.data[a].work_position+
								'<ul class="edu_stats_list float-right">' +
								'<li class="list-inline-item"><a href="#" onclick="update(\''+r.data[a].work_id+'\', \''+status+'\')" data-toggle="tooltip" data-placement="top" title="Edit"><span class="flaticon-edit"></span></a></li>' +
								'<li class="list-inline-item"><a href="#" onclick="del(\''+r.data[a].work_id+'\', \''+status+'\')" data-toggle="tooltip" data-placement="top" title="Delete"><span class="flaticon-rubbish-bin"></span></a></li>' +
								'</ul>' +
								'</h4> ' +
								'<h6 class="">'+ r.data[a].work_location +'</h6>'+
								'<p>'+r.data[a].work_description+'.</p></div>'
					}if(r.data[a].work_currently === '0'){
						content = '<div class="content"><div class="circle"></div>' +
								'<p class="edu_center">'+r.data[a].work_company_name+' <small>'+r.data[a].work_start_date+' - '+r.data[a].work_end_date+' ('+r.data[a].experience_time+')</small></p>' +
								'<h4 class="edu_stats">'+r.data[a].work_position+
								'<ul class="edu_stats_list float-right">' +
								'<li class="list-inline-item"><a href="#" onclick="update(\''+r.data[a].work_id+'\', \''+status+'\')" data-toggle="tooltip" data-placement="top" title="Edit"><span class="flaticon-edit"></span></a></li>' +
								'<li class="list-inline-item"><a href="#" onclick="del(\''+r.data[a].work_id+'\', \''+status+'\')" data-toggle="tooltip" data-placement="top" title="Delete"><span class="flaticon-rubbish-bin"></span></a></li>' +
								'</ul>' +
								'</h4> ' +
								'<h6 class="">'+ r.data[a].work_location +'</h6>'+
								'<p>'+r.data[a].work_description+'.</p></div>'
					}

					$('#workDiv').append(content);
				}
			}
		});
	}

	function updateAwardDiv(){
		$.ajax({
			url: "<?php echo base_url(''); ?>/BCResume/getAllAwardDetails",
			data: {
				ID: $('#txtUserID').val()
			},
			method: "post",
			dataType: "json",
			error: function(error){
				console.log(error);
				$.notify("Internal server error", "error");

			},
			success: function(r){
				$('#awardDiv').empty();
				let status = 'AWARD'
				let content = ''
				for(let a=0; a<r.data.length; a++){
					content = '<div class="content">'+
							  '<div class="circle"></div>'+
							  '<p class="edu_center">'+r.data[a].award_date+'</p>'+
							  '<h4 class="edu_stats">'+r.data[a].award_name+
						      '<ul class="edu_stats_list float-right">'+
							  '<li class="list-inline-item"><a href="#" onclick="update(\''+r.data[a].award_id+'\', \''+status+'\')" data-toggle="tooltip" data-placement="top" title="Edit"><span class="flaticon-edit"></span></a></li>'+
							  '<li class="list-inline-item"><a href="#" onclick="del(\''+r.data[a].award_id+'\', \''+status+'\')" data-toggle="tooltip" data-placement="top" title="Delete"><span class="flaticon-rubbish-bin"></span></a></li>'+
						      '</ul>'+
							  '</h4>'+
					          '<p>'+r.data[a].award_description+'</p>'+
				              '</div>'

					$('#awardDiv').append(content);
				}
			}
		});
	}

	function updateSkillDiv(){
		$.ajax({
			url: "<?php echo base_url(''); ?>/BCResume/getAllSkillDetails",
			data: {
				ID: $('#txtUserID').val()
			},
			method: "post",
			dataType: "json",
			error: function(error){
				console.log(error);
				$.notify("Internal server error", "error");

			},
			success: function(r){

				console.log(r);

				$('#skillDiv').empty();
				let status = 'SKILL'
				let content = ''
				for(let a=0; a<r.data.length; a++){
					content = '<div class="content">'+
							'<div class="circle"></div>'+
							'<p class="edu_center">'+r.data[a].skill_name+'</p>'+
							'<h4 class="edu_stats">'+
							'<div class="progress br-30" style="width: 70%">'+
							'<div class="progress-bar" role="progressbar" style="width: '+r.data[a].skill_level+'%; background-color: #82b440;" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">'+r.data[a].skill_level+'%</div>'+
							'</div>'+
							'<ul class="edu_stats_list float-right">'+
							'<li class="list-inline-item"><a href="#" onclick="update(\''+r.data[a].skill_id+'\', \''+status+'\')" data-toggle="tooltip" data-placement="top" title="Edit"><span class="flaticon-edit"></span></a></li>'+
							'<li class="list-inline-item"><a href="#" onclick="del(\''+r.data[a].skill_id+'\', \''+status+'\')" data-toggle="tooltip" data-placement="top" title="Delete"><span class="flaticon-rubbish-bin"></span></a></li>'+
							'</ul>'+
							'</h4>'+
							'<p>'+r.data[a].skill_description+'</p>'+
							'</div>'
					$('#skillDiv').append(content);
				}
			}
		});
	}

	$(document).ready(function() {

		$("#divEndDate").hide();

		$('#chkCurrentlyWorking').change(function() {
			if (this.checked) {
				$("#divEndDate").hide();
			} else {
				$("#divEndDate").show();
			}
		});

		$('#chkUCurrentlyWorking').change(function() {
			if (this.checked) {
				$("#divUEndDate").hide();
			} else {
				$("#divUEndDate").show();
			}
		});

		updateEducationDiv()
		updateWorkDiv()
		updateAwardDiv()
		updateSkillDiv()

		flatpickr('#txtEducationStartDate', {
			maxDate: new Date(),
			dateFormat: 'Y'
		});

		flatpickr('#txtEducationEndDate', {
			dateFormat: 'Y'
		});

		flatpickr('#txtEducationUStartDate', {
			maxDate: new Date(),
			dateFormat: 'Y'
		});

		flatpickr('#txtEducationUEndDate', {
			dateFormat: 'Y'
		});

		flatpickr('#txtWorkStartDate', {
			maxDate: new Date(),
			dateFormat: 'Y-m-d'
		});

		flatpickr('#txtWorkEndDate', {
			dateFormat: 'Y-m-d'
		});

		flatpickr('#txtWorkUStartDate', {
			maxDate: new Date(),
			dateFormat: 'Y-m-d'
		});

		flatpickr('#txtWorkUEndDate', {
			dateFormat: 'Y-m-d'
		});

		flatpickr('#txtAwardDate', {
			maxDate: new Date(),
			dateFormat: 'M-Y'
		});

		flatpickr('#txtAwardUDate', {
			maxDate: new Date(),
			dateFormat: 'M-Y'
		});

		$("#forAddEducation").validate({
			ignore: [],
			rules: {
				txtEducationQualificationName: {
					required: true
				},
				txtEducationFieldOfStudy: {
					required: true
				},
				txtEducationStartDate: {
					required: true
				},
				txtEducationEndDate: {
					required: true
				},
				txtEducationGrade: {
					required: true
				},
				txtEducationDescription: {
					required: true
				}
			},
			messages: {
				txtEducationQualificationName: {
					required: "Qualification name required!"
				},
				txtEducationFieldOfStudy: {
					required: "Field of study required!"
				},
				txtEducationStartDate: {
					required: "Start date required!"
				},
				txtEducationEndDate: {
					required: "End date required!"
				},
				txtEducationGrade: {
					required: "Grade required!"
				},
				txtEducationDescription: {
					required: "Description required!"
				}
			},
			submitHandler: function(form) {
				let formData = new FormData(form);

				$.ajax({
					url: '<?php echo base_url('BCResume/addEducation'); ?>',
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
							$('#modalEducation').modal('toggle');
							updateEducationDiv()
						}

						if(r.status == 500){
							$.notify(r.message, "error");
						}

					}
				});
			}

		});

		$("#forEditEducation").validate({
			ignore: [],
			rules: {
				txtEducationUQualificationName: {
					required: true
				},
				txtEducationUFieldOfStudy: {
					required: true
				},
				txtEducationUStartDate: {
					required: true
				},
				txtEducationUEndDate: {
					required: true
				},
				txtEducationUGrade: {
					required: true
				},
				txtEducationUDescription: {
					required: true
				}
			},
			messages: {
				txtEducationUQualificationName: {
					required: "Qualification name required!"
				},
				txtEducationUFieldOfStudy: {
					required: "Field of study required!"
				},
				txtEducationUStartDate: {
					required: "Start date required!"
				},
				txtEducationUEndDate: {
					required: "End date required!"
				},
				txtEducationUGrade: {
					required: "Grade required!"
				},
				txtEducationUDescription: {
					required: "Description required!"
				}
			},
			submitHandler: function(form) {
				let formData = new FormData(form);

				$.ajax({
					url: '<?php echo base_url('BCResume/editEducation'); ?>',
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
							$('#modalUpdateEducation').modal('toggle');
							updateEducationDiv();
						}

						if(r.status == 500){
							$.notify(r.message, "error");
						}

					}
				});
			}

		});



		$("#forAddWork").validate({
			ignore: [],
			rules: {
				txtWorkCompanyName: {
					required: true
				},
				txtWorkStartDate: {
					required: true
				},
				txtWorkDescription: {
					required: true
				}
			},
			messages: {
				txtWorkCompanyName: {
					required: "Company name required!"
				},
				txtWorkStartDate: {
					required: "Start date required!"
				},
				txtWorkEndDate: {
					required: "End date required!"
				},
				txtWorkDescription: {
					required: "Work description required!"
				}
			},
			submitHandler: function(form) {
				let formData = new FormData(form);

				$.ajax({
					url: '<?php echo base_url('BCResume/addWork'); ?>',
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
							console.log(r);

							$.notify(r.message, "success");
							$('#modalWork').modal('toggle');
							updateWorkDiv();
						}

						if(r.status == 500){
							$.notify(r.message, "error");
						}

					}
				});
			}

		});

		$("#forUpdateWork").validate({
			ignore: [],
			rules: {
				txtWorkUCompanyName: {
					required: true
				},
				txtWorkUStartDate: {
					required: true
				},
				txtWorkUDescription: {
					required: true
				}
			},
			messages: {
				txtWorkUCompanyName: {
					required: "Company name required!"
				},
				txtWorkUStartDate: {
					required: "Start date required!"
				},
				txtWorkUEndDate: {
					required: "End date required!"
				},
				txtWorkUDescription: {
					required: "Work description required!"
				}
			},
			submitHandler: function(form) {
				let formData = new FormData(form);

				$.ajax({
					url: '<?php echo base_url('BCResume/updateWork'); ?>',
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
							console.log(r);

							$.notify(r.message, "success");
							$('#modalEditWork').modal('toggle');
							updateWorkDiv();
						}

						if(r.status == 500){
							$.notify(r.message, "error");
						}

					}
				});
			}

		});



		$("#forAddAward").validate({
			ignore: [],
			rules: {
				txtAwardName: {
					required: true
				},
				txtAwardDate: {
					required: true
				},
				txtAwardDescription: {
					required: true
				}
			},
			messages: {
				txtAwardName: {
					required: "Award name required!"
				},
				txtAwardDate: {
					required: "Award date required!"
				},
				txtAwardDescription: {
					required: "Award description required!"
				}
			},
			submitHandler: function(form) {
				let formData = new FormData(form);

				$.ajax({
					url: '<?php echo base_url('BCResume/addAward'); ?>',
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
							$('#modalAwards').modal('toggle');
							updateAwardDiv()
						}

						if(r.status == 500){
							$.notify(r.message, "error");
						}

					}
				});
			}

		});

		$("#forUpdateAward").validate({
			ignore: [],
			rules: {
				txtAwardUName: {
					required: true
				},
				txtAwardUDate: {
					required: true
				},
				txtAwardUDescription: {
					required: true
				}
			},
			messages: {
				txtAwardUName: {
					required: "Award name required!"
				},
				txtAwardUDate: {
					required: "Award date required!"
				},
				txtAwardUDescription: {
					required: "Award description required!"
				}
			},
			submitHandler: function(form) {
				let formData = new FormData(form);

				$.ajax({
					url: '<?php echo base_url('BCResume/updateAward'); ?>',
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
							$('#modalUpdateAwards').modal('toggle');
							updateAwardDiv()
						}

						if(r.status == 500){
							$.notify(r.message, "error");
						}

					}
				});
			}

		});



		$("#forAddSkill").validate({
			ignore: [],
			rules: {
				txtSkillDescription: {
					required: true
				}
			},
			messages: {
				txtSkillDescription: {
					required: "Skill description required!"
				}
			},
			submitHandler: function(form) {
				let formData = new FormData(form);

				$.ajax({
					url: '<?php echo base_url('BCResume/addSkill'); ?>',
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
							$('#modalSkill').modal('toggle');
							updateSkillDiv()
						}

						if(r.status == 500){
							$.notify(r.message, "error");
						}

					}
				});
			}

		});

		$("#forUpdateSkill").validate({
			ignore: [],
			rules: {
				txtSkillUDescription: {
					required: true
				}
			},
			messages: {
				txtSkillUDescription: {
					required: "Skill description required!"
				}
			},
			submitHandler: function(form) {
				let formData = new FormData(form);

				$.ajax({
					url: '<?php echo base_url('BCResume/updateSkill'); ?>',
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
							$('#modalUpdateSkills').modal('toggle');
							updateSkillDiv()
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
