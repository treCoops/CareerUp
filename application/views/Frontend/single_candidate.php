<?php
/**
 * Created & developed by treCoops
 * For: degree final
 * Campus ID: COBSCCOMP191P-032
 * Coventry ID: 9631605
 * Date: 2021-04-27
 * Time: 15:44
 */
?>

<section class="inner_page_breadcrumb bgc-f0 pt30 pb30" aria-label="breadcrumb">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<h4 class="breadcrumb_title float-left" id="txtMain"></h4>
				<ol class="breadcrumb float-right">
					<li class="breadcrumb-item"><a href="<?php echo base_url('Home') ?>">Home</a></li>
					<li class="breadcrumb-item active" aria-current="page">View Candidate</li>
				</ol>
			</div>
		</div>
	</div>
</section>
<section class="bgc-fa zi-1">
	<div class="container">
		<div class="row">
			<div class="col-lg-8 col-xl-8">
				<div class="candidate_personal_info">
					<div class="thumb">
						<img class="img-fluid rounded-circle" id="candidateImage" alt="cs2.jpg">
						<div class="cpi_av_rating"><span id="txtCandidateRating"></span></div>
					</div>
					<div class="details">
						<h3 id="txtCandidateName"></h3>
						<p><?php echo $type;  ?></p>
						<ul class="address_list">
							<li class="list-inline-item"><a id="txtJobRole" href="#">United States</a></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-xl-4">
				<div class="candidate_personal_overview">
					<br/>
					<br/>
					<br/>
					<br/>
					<a href="#reviewDiv" class="btn btn-block btn-thm"></span> Add a Review</a>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- Candidate Personal Info Details-->
<section class="bgc-white">
	<div class="container">
		<div class="row">
			<div class="col-xl-8">
				<div class="row">
					<div id="tab-1" class="col-lg-12">
						<div class="candidate_about_info">
							<h4 class="fz20 mb30">About Me</h4>
							<p id="txtAboutCandidate" class="mb30"></p>
						</div>
					</div>
					<div id="tab-2" class="col-lg-12">
						<div id="educationMasterDiv" class="my_resume_eduarea style2">
							<h4 class="title">Education</h4>
							<div id="educationDiv">

							</div>
						</div>
					</div>
					<div class="col-lg-12">
						<div id="workMasterDiv" class="my_resume_eduarea style2">
							<h4 class="title">Work & Experience</h4>
							<div id="workDiv">

							</div>
						</div>
					</div>
					<div class="col-lg-12">
					</div>
					<div id="skillMasterDiv" class="col-lg-12">
						<div class="my_resume_eduarea">
							<h4 class="title">Skills</h4>
							<div id="skillDiv"></div>
						</div>
					</div>
					<div class="col-lg-12">
						<div id="awardMasterDiv" class="my_resume_eduarea style2">
							<h4 class="title">Awards</h4>
							<div id="awardDiv">

							</div>

						</div>
					</div>
					<div class="col-lg-12">
						<div id="userReviewDiv" class="candidate_review_posted">
							<h4 class="title mb30">Work history and feedback</h4>
							<div id="reviewDivSlot">


							</div>

						</div>
					</div>
					<div id="reviewDiv" class="col-lg-12">
						<h4 class="title fz20">Leave Your Review</h4>
						<div class="candidate_leave_review text-center">
							<div class="detials">
								<form id="review-form" class="ulockd-mrgn630" action="#" method="post">
									<h4 id="txtFormHeading"></h4>
									<div class="star-rating">
										<input type="radio" name="ratings[1]" id="Overall_5" value="5" class="radio">
										<label for="Overall_5"></label>
										<input type="radio" name="ratings[1]" id="Overall_4" value="4" class="radio">
										<label for="Overall_4"></label>
										<input type="radio" name="ratings[1]" id="Overall_3" value="3" class="radio">
										<label for="Overall_3"></label>
										<input type="radio" name="ratings[1]" id="Overall_2" value="2" class="radio">
										<label for="Overall_2"></label>
										<input type="radio" name="ratings[1]" id="Overall_1" value="1" class="radio">
										<label for="Overall_1"></label>
									</div>
									<div class="form-group text-left">
										<label class="title" for="txtReviewTitle">Review Title</label>
										<input class="form-control" type="text" name="txtReviewTitle" id="txtReviewTitle">
									</div>
									<div class="form-group text-left">
										<input type="hidden" name="txtUserId" id="txtUserId" value="<?php echo $user_id; ?>">
										<input type="hidden" name="txtProfileId" id="txtProfileId">
										<label class="control-label title" for="txtReviewContent">Review Content</label>
										<textarea class="form-control" rows="5" name="txtReviewContent" id="txtReviewContent"></textarea>
										<br/>
										<button type="submit" class="btn btn-lg btn-thm">Submit Review <span class="flaticon-right-arrow"></span></button>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xl-4">
				<div class="candidate_working_widget bgc-fa">
					<div class="icon text-thm"><span class="flaticon-controls"></span></div>
					<div class="details">
						<h4>Experience</h4>
						<p id="txtCandidateEx"></p>
					</div>
					<div class="icon text-thm"><span class="flaticon-old-age-man"></span></div>
					<div class="details">
						<h4>Age</h4>
						<p id="txtCandidateAge"></p>
					</div>
					<div class="icon text-thm"><span class="flaticon-paper"></span></div>
					<div class="details">
						<h4>Languages</h4>
						<p id="txtCandidateLanguages"></p>
					</div>
					<div class="icon text-thm"><span class="flaticon-mortarboard"></span></div>
					<div class="details">
						<h4>Education Level</h4>
						<p id="txtCandidateEducation"></p>
					</div>
				</div>
				<div class="candidate_social_widget bgc-fa">
					<ul>
						<li>Social Profiles</li>
						<li><a id="txtFaceBook"><i class="fa fa-facebook"></i></a></li>
						<li><a id="txtInstagram"><i class="fa fa-instagram"></i></a></li>
						<li><a id="txtLinkedIn"><i class="fa fa-linkedin"></i></a></li>
						<li><a id="txtTwitter"><i class="fa fa-twitter"></i></a></li>
					</ul>
				</div>
				<div id="attachmentDiv">
					<h4 class="fz20 mb30">Attachments</h4>
					<div onclick="openDoc('CL')" id="divCoverLetter" class="candidate_document_widget">
						<div class="details">
							<div class="icon"><span class="flaticon-doc"></span></div>
							<h4 class="title">Cover Letter</h4>
							<input type="hidden" id="txtCoverLetter">
							<p>View</p>
						</div>
					</div>
					<div onclick="openDoc('CV')" id="divCV" class="candidate_document_widget">
						<div class="icon"><span class="flaticon-doc"></span></div>
						<div class="details">
							<h4 class="title">Curriculum Vitae</h4>
							<input type="hidden" id="txtCV">
							<p>View</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>



<script>

	function openDoc(type){
		if(type === 'CV'){
			window.open("<?php echo base_url('assets/documents/candidate/') ?>"+$('#txtCV').val());
		}

		if(type === 'CL'){
			window.open("<?php echo base_url('assets/documents/candidate/') ?>"+$('#txtCoverLetter').val());
		}
	}

	function updateEducationDiv(id){
		$.ajax({
			url: "<?php echo base_url(''); ?>/BCResume/getAllEducationDetails",
			data: {
				ID: id
			},
			method: "post",
			dataType: "json",
			error: function(error){
				console.log(error);
				$.notify("Internal server error", "error");

			},
			success: function(r){

				if(r.status == 200){
					$('#educationMasterDiv').show();
					$('#educationDiv').empty();
					let content = ''
					for(let a=0; a<r.data.length; a++){

						content = '<div class="content">' +
								'<div class="circle bgc-thm"></div>' +
								'<p class="edu_center">'+r.data[a].education_qualification_name+' in '+r.data[a].education_field_of_study+'<small>'+r.data[a].education_start_date+' - '+r.data[a].education_end_date+'</small></p>' +
								'<h4 class="edu_stats">'+r.data[a].education_college_name+'</h4>' +
								'<h6 class="">'+ r.data[a].education_grade +'</h6>'+
								'<p class="mb0">'+r.data[a].education_description+'.</p>' +
								'</div>'

						$('#educationDiv').append(content);
					}
				}

				if(r.status == 500){
					$('#educationMasterDiv').hide();
				}


			}
		});
	}

	function updateWorkDiv(id){
		$.ajax({
			url: "<?php echo base_url(''); ?>/BCResume/getAllWorkDetails",
			data: {
				ID: id
			},
			method: "post",
			dataType: "json",
			error: function(error){
				console.log(error);
				$.notify("Internal server error", "error");

			},
			success: function(r){

				if(r.status == 200) {
					$('#workMasterDiv').show();
					$('#workDiv').empty();
					let content = ''
					for (let a = 0; a < r.data.length; a++) {

						if (r.data[a].work_currently === '1') {
							content = '<div class="content"><div class="circle bgc-thm"></div>' +
									'<p class="edu_center">' + r.data[a].work_company_name + ' <small>' + r.data[a].work_start_date + ' - Present</small></p>' +
									'<h4 class="edu_stats">' + r.data[a].work_position +
									'</h4> ' +
									'<h6 class="">' + r.data[a].work_location + '</h6>' +
									'<p>' + r.data[a].work_description + '.</p></div>'
						}
						if (r.data[a].work_currently === '0') {
							content = '<div class="content"><div class="circle bgc-thm"></div>' +
									'<p class="edu_center">' + r.data[a].work_company_name + ' <small>' + r.data[a].work_start_date + ' - ' + r.data[a].work_end_date + ' (' + r.data[a].experience_time + ')</small></p>' +
									'<h4 class="edu_stats">' + r.data[a].work_position +
									'</h4> ' +
									'<h6 class="">' + r.data[a].work_location + '</h6>' +
									'<p>' + r.data[a].work_description + '.</p></div>'
						}

						$('#workDiv').append(content);
					}

				}

				if(r.status == 500){
					$('#workMasterDiv').hide();
				}
			}
		});
	}

	function updateSkillDiv(id){
		$.ajax({
			url: "<?php echo base_url(''); ?>/BCResume/getAllSkillDetails",
			data: {
				ID: id
			},
			method: "post",
			dataType: "json",
			error: function(error){
				console.log(error);
				$.notify("Internal server error", "error");

			},
			success: function(r){


				if(r.status == 200) {
					$('#skillMasterDiv').show();
					$('#skillDiv').empty();
					let content = ''
					for (let a = 0; a < r.data.length; a++) {
						content = '<div class="content">' +
								'<div class="circle"></div>' +
								'<p class="edu_center" style="text-align: start">' + r.data[a].skill_name + '</p>' +
								'<h4 class="edu_stats">' +
								'<div class="progress br-30" style="width: 70%">' +
								'<div class="progress-bar" role="progressbar" style="width: ' + r.data[a].skill_level + '%; background-color: #82b440;" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">' + r.data[a].skill_level + '%</div>' +
								'</div>' +
								'</h4>' +
								'<p style="text-align: start">' + r.data[a].skill_description + '</p>' +
								'</div>'
						$('#skillDiv').append(content);
					}

				}
				if(r.status == 500){
					$('#skillMasterDiv').hide();
				}
			}
		});
	}

	function updateAwardDiv(id){
		$.ajax({
			url: "<?php echo base_url(''); ?>/BCResume/getAllAwardDetails",
			data: {
				ID: id
			},
			method: "post",
			dataType: "json",
			error: function(error){
				console.log(error);
				$.notify("Internal server error", "error");

			},
			success: function(r){

				if(r.status == 200) {
					$('#awardMasterDiv').show();
					$('#awardDiv').empty();
					let content = ''
					for (let a = 0; a < r.data.length; a++) {
						content = '<div class="content">' +
								'<div class="circle bgc-thm"></div>' +
								'<p class="edu_center">' + r.data[a].award_date + '</p>' +
								'<h4 class="edu_stats">' + r.data[a].award_name +
								'</h4>' +
								'<p>' + r.data[a].award_description + '</p>' +
								'</div>'

						$('#awardDiv').append(content);
					}

				}

				if(r.status == 500){
					$('#awardMasterDiv').hide();
				}
			}
		});
	}

	function getDocuments(id){
		$.ajax({
			url: "<?php echo base_url(''); ?>/BCCVManager/getDocuments",
			data: {
				ID: id
			},
			method: "post",
			dataType: "json",
			error: function(error){
				console.log(error);
				$.notify("Internal server error", "error");

			},
			success: function(r){
				if(r.status == 200) {
					$('#attachmentDiv').show();
					for(let a=0; a<r.data.length; a++){
						if(r.data[a].document_type === "CV"){
							$('#divCoverLetter').show();
							$('#txtCV').val(r.data[a].document_name);
						}

						if(r.data[a].document_type === "CL"){
							$('#divCV').show();
							$('#txtCoverLetter').val(r.data[a].document_name);
						}
					}
				}

				if(r.status == 500){
					$('#attachmentDiv').hide();
				}
			}
		});
	}

	function updateUI(id){
		$.ajax({
			url: "<?php echo base_url(''); ?>/Candidate/getProfile",
			data: {
				id: $('#txtUserId').val()
			},
			method: "post",
			dataType: "json",
			error: function(error){
				console.log(error);
				$.notify("Internal server error", "error");

			},
			success: function(r){

				if(r.status === 500){
					console.log(error);
					$.notify("Internal server error", "error");
				}
				if(r.status === 200){
					$('#txtCandidateName').text(" "+r.data.candidate_full_name);
					$('#txtJobRole').text(r.data.candidate_city+", "+r.data.candidate_country);
					$('#txtCandidateRating').text(r.data.candidate_rating);

					$('#candidateImage').attr('src', '<?php echo base_url('assets/images/profile/') ?>'+ r.data.candidate_profile_image_url);

					$('#txtAboutCandidate').text(r.data.candidate_description);
					$('#txtCandidateEx').text(r.data.candidate_experience);
					$('#txtCandidateAge').text(r.data.candidate_age+" years");

					let language = ''

					for(a=0; a<r.data.languages.length; a++){
						if(r.data.categories.length === 1){
							language = r.data.languages[a].language_title
						}else{
							if(a === 0){
								language = r.data.languages[a].language_title
							}else{
								language = language + ", " + r.data.languages[a].language_title
							}
						}
					}

					$('#txtCandidateLanguages').text(language);
					$('#txtProfileId').val(r.data.candidate_profile_id);
					$('#txtCandidateEducation').text(r.data.candidate_education_level);
					$('#txtFormHeading').text('What dou you think about '+r.data.candidate_full_name);

					$("#txtFaceBook").prop("href", r.data.company_facebook)
					$("#txtInstagram").prop("href", r.data.company_instagram)
					$("#txtLinkedIn").prop("href", r.data.company_linkedin)
					$("#txtTwitter").prop("href", r.data.company_twitter)

				}
			}
		});


		$.ajax({
			url: "<?php echo base_url(''); ?>/Candidate/getReviews",
			data: {
				user_id: $('#txtUserId').val(),
			},
			method: "post",
			dataType: "json",
			error: function(error){
				console.log(error);
				$.notify("Internal server error", "error");

			},
			success: function(r){

				if(r.status === 500){
					$('#userReviewDiv').hide();
				}
				if(r.status === 200){
					$('#userReviewDiv').show();
					$('#reviewDivSlot').empty();

					console.log(r.data);

					let content = ''

					for(let a=0; a<r.data.length; a++){

						let star = '';
						for(let b=1; b<=5; b++) {
							if(b <= r.data[a].review_rating){
								star = star + '<li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>'
							}else{
								star = star + '<li class="list-inline-item"><a href="#"><i class="fa fa-star-o"></i></a></li>'
							}

						}

						content = '<div class="details">'+
								'<img style="width: 100px; height: 100px" class="img-fluid rounded-circle float-left" src="assets/images/profile/'+r.data[a].image_url+'" alt="1.jpg">'+
								'<h4>'+r.data[a].review_title+
								'<ul class="review float-right">'+
								'<li class="list-inline-item"><a class="av_review" href="#">'+r.data[a].review_rating+'</a></li>'+star+
								'</ul>'+
								'</h4>'+
								'<ul class="meta">'+
								'<li class="list-inline-item"><a class="text-thm2" href="#"> &ensp;'+r.data[a].reviewer_name+'</a></li>'+
								'<li class="list-inline-item"><a href="#"><span class="flaticon-event"></span> '+moment(r.data[a].created_date).fromNow()+'</a></li>'+
								'</ul>'+
								'<p>'+r.data[a].review_content+'</p>'+
								'</div>'


						$('#reviewDivSlot').append(content);
					}

				}
			}
		});
	}

	$(document).ready(function() {
		$('#attachmentDiv').hide();
		$('#divCoverLetter').hide();
		$('#divCoverLetter').hide();
		updateUI();
		updateEducationDiv($('#txtUserId').val())
		updateWorkDiv($('#txtUserId').val())
		updateAwardDiv($('#txtUserId').val())
		updateSkillDiv($('#txtUserId').val())
		getDocuments($('#txtUserId').val());

		$("#review-form").validate({
			ignore: [],
			rules: {
				Overall_1: {
					required: true
				},
				txtReviewTitle: {
					required: true,
				},
				txtReviewContent: {
					required: true,
				}
			},
			messages: {
				Overall_1: {
					required: "Rating required"
				},
				txtReviewTitle: {
					required: 'Review topic required!',
				},
				txtReviewContent: {
					required: 'Review content required!',
				}
			},
			submitHandler: function(form) {
				let formData = new FormData(form);

				$.ajax({
					url: '<?php echo base_url('Candidate/addReview'); ?>',
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
