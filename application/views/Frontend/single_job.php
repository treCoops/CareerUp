<?php
/**
 * Created & developed by treCoops
 * For: degree final
 * Campus ID: COBSCCOMP191P-032
 * Coventry ID: 9631605
 * Date: 2021-04-27
 * Time: 15:44
 */

	$User_Session = $this->session->userdata('User_Session');
?>

<!-- Inner Page Breadcrumb -->
<section class="inner_page_breadcrumb bgc-f0 pt30 pb30" aria-label="breadcrumb">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<h4 class="breadcrumb_title float-left" id="txtMain"></h4>
				<ol class="breadcrumb float-right">
					<li class="breadcrumb-item"><a href="<?php echo base_url('Home') ?>">Home</a></li>
					<li class="breadcrumb-item active" aria-current="page">View Job</li>
				</ol>
			</div>
		</div>
	</div>
</section>
<!-- Candidate Personal Info-->
<section class="emplye_single_v2 mt70 mt50 pt50">
	<div class="container">
		<div class="row">
			<div class="col-lg-9 col-xl-9">
				<div class="candidate_personal_info style3">
					<div class="thumb">
						<img class="img-fluid" id="imgProfile" src="" alt="cl1.jpg">
						<div class="cpi_av_rating"><span id="txtTotalRating"></span></div>
					</div>
					<div class="details">
						<h3 id="txtCompanyName"></h3>
						<p id="txtType" class="text-thm2"><?php echo $type; ?> Company</p>
						<ul class="address_list">
							<li class="list-inline-item"><a href="#"><span id="txtWebsiteUrl" class="flaticon-link text-thm"></span></a></li>
							<li class="list-inline-item"><a href="#"><span id="txtPhoneNumber" class="flaticon-phone-call text-thm"></span></a></li>
							<li class="list-inline-item"><a href="#"><span id="txtEmail" class="flaticon-mail text-thm"></span></a></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-xl-3">
				<div class="candidate_personal_overview style2">
					<?php if($User_Session['User_Job'] == "Candidate"){ ?>
						<a onclick="applyJob();" class="btn btn-block btn-gray"><span class="flaticon-mail pr10"></span> Apply for this job</a>
					<?php } ?>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- Candidate Personal Info Details-->
<section class="bgc-fa employe_details">
	<div class="container">
		<div class="row">
			<div class="col-xl-8">
				<div class="row">
					<div class="col-lg-12">
						<div class="row personer_information_company mt0">
							<div class="col-lg-12">
								<h4 class="fz20 mb30">Company Information</h4>
							</div>

							<div class="col-sm-4 col-lg-4">
								<div class="icon text-thm"><span class="flaticon-paper-plane"></span></div>
								<div class="details">
									<p>Locations</p>
									<p id="txtLocation"></p>
								</div>
							</div>
							<div class="col-sm-4 col-lg-4">
								<div class="icon text-thm"><span class="flaticon-timeline"></span></div>
								<div class="details">
									<p>Since</p>
									<p id="txtSince"></p>
								</div>
							</div>
							<div class="col-sm-4 col-lg-4">
								<div class="icon text-thm"><span class="flaticon-team"></span></div>
								<div class="details">
									<p>Team Size</p>
									<p id="txtTeamSize"></p>
								</div>
							</div>
							<div class="col-sm-4 col-lg-4">
								<div class="icon text-thm"><span class="flaticon-2-squares"></span></div>
								<div class="details">
									<p>Categories</p>
									<p id="txtCategories"></p>
								</div>
							</div>
						</div>
						<div class="candidate_about_info style2">
							<h4 class="fz20 mb30">About Business Network</h4>
							<p id="txtAbout" class="mb30"></p>
						</div>
					</div>

					<div class="col-lg-12">
						<div class="row personer_information_company mt0">
							<div class="col-lg-12">
								<h4 class="fz20 mb30">Job Information</h4>
							</div>

							<div class="col-sm-4 col-lg-4">
								<div class="icon text-thm"><span class="flaticon-job"></span></div>
								<div class="details">
									<p>Job Title</p>
									<p id="txtJobTitle"></p>
								</div>
							</div>
							<div class="col-sm-4 col-lg-4">
								<div class="icon text-thm"><span class="flaticon-timeline"></span></div>
								<div class="details">
									<p>Application Deadline</p>
									<p id="txtDeadLine"></p>
								</div>
							</div>
							<div class="col-sm-4 col-lg-4">
								<div class="icon text-thm"><span class="flaticon-line-chart"></span></div>
								<div class="details">
									<p>Knowledge Level</p>
									<p id="txtKnowledge"></p>
								</div>
							</div>
							<div class="col-sm-4 col-lg-4">
								<div class="icon text-thm"><span class="flaticon-career"></span></div>
								<div class="details">
									<p>Experience Level</p>
									<p id="txtExperience"></p>
								</div>
							</div>
							<div class="col-sm-4 col-lg-4">
								<div class="icon text-thm"><span class="flaticon-graduation-hat"></span></div>
								<div class="details">
									<p>Qualification Level</p>
									<p id="txtQualification"></p>
								</div>
							</div>
							<div class="col-sm-4 col-lg-4">
								<div class="icon text-thm"><span class="flaticon-gender"></span></div>
								<div class="details">
									<p>Gender</p>
									<p id="txtGender"></p>
								</div>
							</div>
						</div>
						<div class="candidate_about_info style2">
							<h4 class="fz20 mb30">About Job</h4>
							<p id="txtAboutJob" class="mb30"></p>
						</div>
					</div>

					<div id="userReviewDiv" class="col-lg-12">
						<div class="candidate_review_posted style2">
							<h4 class="title mb30">Company Review</h4>
							<div id="reviewDivSlot">

							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xl-4">
				<div class="map_sidebar_widget mb30">
					<h4 class="fz20 mb30">Job Location</h4>
					<div class="h300" id="gMap"></div>
					<input type="hidden" name="txtUserId" id="txtUserId" value="<?php echo $user_id; ?>">
					<input type="hidden" name="txtJobId" id="txtJobId" value="<?php echo $job_id; ?>">
				</div>
				<div class="candidate_social_widget">
					<ul>
						<li>Social Profiles</li>
						<li><a id="txtFaceBook" href=""><i class="fa fa-facebook"></i></a></li>
						<li><a id="txtTwitter" href=""><i class="fa fa-twitter"></i></a></li>
						<li><a id="txtInstagram" href=""><i class="fa fa-instagram"></i></a></li>
						<li><a id="txtLinkedIn" href=""><i class="fa fa-linkedin"></i></a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</section>

<script type="text/javascript" src="<?php echo base_url() ?>assets/js/map-picker.js"></script>
<script type="text/javascript" src="https://maps.google.com/maps/api/js?key=AIzaSyB8BbO_t_LXJLuBuHLnRMvXBJH8_S7q2IM&callback=initMap" async></script>

<script>

	function applyJob(){
		$.ajax({
			url: "<?php echo base_url(''); ?>/BEPost/applyJob",
			data: {
				company_id: $('#txtUserId').val(),
				job_id: $('#txtJobId').val()
			},
			method: "post",
			dataType: "json",
			error: function(error){
				$.notify("Internal server error", "error");
			},
			success: function(r){

				if(r.status === 500){
					$.notify(r.message, "error");
				}
				if(r.status === 200){
					$.notify(r.message, "success");
				}
			}
		});
	}

	function updateUI(id, job_id){
		$.ajax({
			url: "<?php echo base_url(''); ?>/Employer/getProfile",
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
					$.notify("Internal server error", "error");
				}
				if(r.status === 200){

					$('#txtCompanyName').text(" "+r.data.company_name);

					$('#txtWebsiteUrl').text(" "+r.data.company_website);

					$('#txtPhoneNumber').text(' +94'+r.data.company_phone);
					$('#txtEmail').text(" "+r.data.company_email);

					$('#txtLocation').text(r.data.company_city+", "+r.data.company_country);
					$('#txtSince').text(r.data.company_start_date.substring(0,4));

					$('#imgProfile').attr('src', '<?php echo base_url('assets/images/profile/') ?>'+ r.data.company_profile_image_url);

					let categories = ''

					for(a=0; a<r.data.categories.length; a++){
						if(r.data.categories.length === 1){
							categories = r.data.categories[a].category_name
						}else{
							if(a === 0){
								categories = r.data.categories[a].category_name
							}else{
								categories = categories + ", " + r.data.categories[a].category_name
							}
						}
					}

					$('#txtCategories').text(categories);
					$('#txtTotalRating').text(r.data.company_rating);

					$('#txtAbout').text(r.data.company_about);
					$('#txtReviewTopic').text("What is it like to work at "+r.data.company_name);
					$('#txtTeamSize').text(r.data.company_team_size);
					$('#txtProfileId').val(r.data.company_profile_id);

					deleteMarkers()
					let marker = {lat: parseFloat(r.data.company_location_lat), lng: parseFloat(r.data.company_location_lng)};
					addMarker(marker);

					$("#txtFaceBook").prop("href", r.data.company_facebook)
					$("#txtInstagram").prop("href", r.data.company_instagram)
					$("#txtLinkedIn").prop("href", r.data.company_linkedin)
					$("#txtTwitter").prop("href", r.data.company_twitter)

				}
			}
		});


		$.ajax({
			url: "<?php echo base_url(''); ?>/Employer/getReviews",
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
									'<img class="img-fluid rounded-circle float-left" src="assets/images/profile/'+r.data[a].image_url+'" alt="1.jpg">'+
									'<h4>'+r.data[a].review_title+
									'<ul class="review float-right">'+
									'<li class="list-inline-item"><a class="av_review" href="#">'+r.data[a].review_rating+'</a></li>'+star+
									'</ul>'+
									'</h4>'+
									'<ul class="meta">'+
									'<li class="list-inline-item"><a class="text-thm2" href="#">'+r.data[a].reviewer_name+'</a></li>'+
									'<li class="list-inline-item"><a href="#"><span class="flaticon-event"></span> '+moment(r.data[a].created_date).fromNow()+'</a></li>'+
									'</ul>'+
									'<p>'+r.data[a].review_content+'</p>'+
									'</div>'


						$('#reviewDivSlot').append(content);
					}

				}
			}
		});

		$.ajax({
			url: "<?php echo base_url(''); ?>/BEPost/getJobDetails",
			data: {
				job_id: job_id,
			},
			method: "post",
			dataType: "json",
			error: function(error){
				$.notify("Internal server error", "error");
			},
			success: function(r){

				if(r.status === 500){

				}
				if(r.status === 200){
					console.log(r.data);
					$('#txtJobTitle').text(r.data[0].job_post_title);
					$('#txtDeadLine').text(r.data[0].job_post_deadline);
					$('#txtKnowledge').text(r.data[0].job_post_knowledge_level);
					$('#txtExperience').text(r.data[0].job_post_experience_level);
					$('#txtQualification').text(r.data[0].job_post_qualification_level);
					$('#txtGender').text(r.data[0].job_post_gender);
					$('#txtAboutJob').text(r.data[0].job_post_description);
				}
			}
		});
	}



	$(document).ready(function() {
		updateUI($('#txtProfileId').val(), $('#txtJobId').val());
	});

</script>

