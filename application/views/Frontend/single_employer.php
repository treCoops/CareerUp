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

<!-- Inner Page Breadcrumb -->
<section class="inner_page_breadcrumb bgc-f0 pt30 pb30" aria-label="breadcrumb">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<h4 class="breadcrumb_title float-left">View Employer(Name Placeholder)</h4>
				<ol class="breadcrumb float-right">
					<li class="breadcrumb-item"><a href="<?php echo base_url('Home') ?>">Home</a></li>
					<li class="breadcrumb-item active" aria-current="page">View Employers</li>
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
					<a href="#reviewDiv" class="btn btn-block btn-gray"><span class="flaticon-consulting-message pr10"></span> Add a Review</a>
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
<!--					<div class="col-lg-12">-->
<!--						<div class="my_resume_eduarea">-->
<!--							<h4 class="title mb30">Open Position</h4>-->
<!--						</div>-->
<!--					</div>-->
<!---->
<!--					<div class="col-lg-12">-->
<!--						<div class="fj_post style2 one">-->
<!--							<div class="details">-->
<!--								<h5 class="job_chedule text-thm2">Part Time</h5>-->
<!--								<div class="thumb fn-smd">-->
<!--									<img class="img-fluid" src="--><?php //echo base_url() ?><!--assets/images/partners/2.jpg" alt="2.jpg">-->
<!--								</div>-->
<!--								<h4>General Ledger Accountant</h4>-->
<!--								<p>Posted 23 August by <a class="text-thm2" href="#">Robert Half Finance & Accounting</a></p>-->
<!--								<ul class="featurej_post">-->
<!--									<li class="list-inline-item"><span class="flaticon-location-pin"></span> <a href="#">RG40, Wokingham</a></li>-->
<!--									<li class="list-inline-item"><span class="flaticon-price pl20"></span> <a href="#">$13.00 - $18.00 per hour</a></li>-->
<!--								</ul>-->
<!--							</div>-->
<!--							<a class="favorit" href="#"><span class="flaticon-favorites"></span></a>-->
<!--						</div>-->
<!--					</div>-->

					<div id="userReviewDiv" class="col-lg-12">
						<div class="candidate_review_posted style2">
							<h4 class="title mb30">Company Review</h4>
							<div id="reviewDivSlot">

							</div>
						</div>
					</div>
					<div id="reviewDiv" class="col-lg-12">
						<h4 class="title">Leave Your Review</h4>
						<div class="candidate_leave_review text-center">
							<div class="detials">
								<form id="review-form" class="ulockd-mrgn630">
									<h4 id="txtReviewTopic"></h4>
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
				<div class="map_sidebar_widget mb30">
					<h4 class="fz20 mb30">Job Location</h4>
					<div class="h300" id="gMap"></div>
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

	function updateUI(id){
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
					console.log(error);
					$.notify("Internal server error", "error");
				}
				if(r.status === 200){

					console.log(r.data);

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
					console.log(error);
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
	}



	$(document).ready(function() {
		updateUI($('#txtProfileId').val());

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
					url: '<?php echo base_url('Employer/addReview'); ?>',
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

