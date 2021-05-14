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
						<input type="text" class="form-control" placeholder="Search for any key" id="txtSearch" name="txtSearch">
					</div>
				</div>
				<div class="faq_search_widget mb30">
					<h4 class="fz20 mb15">City</h4>
					<div class="candidate_revew_select">
						<select id="cmbCompanyCity" name="cmbCompanyCity" class="selectpicker w100 show-tick">
							<option value="none">All</option>
							<option value="Colombo">Colombo</option>
							<option value="Negombo">Negombo</option>
						</select>
					</div>
				</div>
				<div class="faq_search_widget mb30">
					<h4 class="fz20 mb15">Experience Level</h4>
					<div class="candidate_revew_select">
						<select id="cmbExperienceLevel" name="cmbExperienceLevel" class="selectpicker w100 show-tick">
							<option value="none">All</option>
							<option value="Below 1 Year">Below 1 Year</option>
							<option value="1 to 2 Years">1 to 2 Years</option>
							<option value="2 to 3 Years">2 to 3 Years</option>
							<option value="3 to 4 Years">3 to 4 Years</option>
							<option value="4 to 5 Years">4 to 5 Years</option>
							<option value="More Than 5 Years">More Than 5 Years</option>
						</select>
					</div>
				</div>
				<div class="faq_search_widget mb30">
					<h4 class="fz20 mb15">Knowledge Level</h4>
					<div class="candidate_revew_select">
						<select id="cmbKnowledgeLevel" name="cmbKnowledgeLevel" class="selectpicker w100 show-tick">
							<option value="none">All</option>
							<option value="A-Level">A-Level</option>
							<option value="Internship">Internship</option>
							<option value="Basic">Basic</option>
							<option value="Standard">Standard</option>
							<option value="Advance">Advance</option>
							<option value="Expert">Expert</option>
						</select>
					</div>
				</div>
				<div class="faq_search_widget mb30">
					<h4 class="fz20 mb15">Gender</h4>
					<div class="candidate_revew_select">
						<select id="cmbGender" name="cmbGender" class="selectpicker w100 show-tick">
							<option value="Male & Female">Male & Female</option>
							<option value="Male Only">Male Only</option>
							<option value="Female Only">Female Only</option>
						</select>
					</div>
				</div>
			</div>

			<div class="col-md-12 col-lg-9 col-xl-9">
				<div id="jobDiv" class="row">
<!--					<div class="col-sm-12 col-lg-6">-->
<!---->
<!--					</div>-->
<!---->
<!--					<div class="col-lg-12 mt30">-->
<!--						<div class="fj_post style2">-->
<!--							<div class="details">-->
<!--								<h5 class="job_chedule text-thm">Full Time</h5>-->
<!--								<div class="thumb fn-smd">-->
<!--									<img class="img-fluid" src="--><?php //echo base_url() ?><!--assets/images/partners/1.jpg" alt="1.jpg">-->
<!--								</div>-->
<!--								<h4>JEB Product Sales Specialist, Russia & CIS</h4>-->
<!--								<p>Posted 23 August by <a class="text-thm" href="#">Wiggle CRC</a></p>-->
<!--								<ul class="featurej_post">-->
<!--									<li class="list-inline-item"><span class="flaticon-location-pin"></span> <a href="#">Bothell, WA, USA</a></li>-->
<!--									<li class="list-inline-item"><span class="flaticon-price pl20"></span> <a href="#">$13.00 - $18.00 per hour</a></li>-->
<!--								</ul>-->
<!--							</div>-->
<!--							<a class="favorit" href="#"><span class="flaticon-favorites"></span></a>-->
<!--						</div>-->
<!--					</div>-->
				</div>
			</div>
		</div>
	</div>
</section>

<script>

	function updateUI(data){
		if(data.length !== 0){
			$('#jobDiv').empty();
			let content = ''
			for(let a=0; a<data.length; a++){
				content = '<div class="col-lg-12 mt30">'+
						'<div class="fj_post style2">'+
						'<div class="details">'+
						'<h5 class="job_chedule text-thm"></h5>'+
						'<div class="thumb fn-smd">'+
						'<img class="img-fluid" style="width: 130px; height: 130px" src="assets/images/profile/'+data[a].company_profile_image_url+'" alt="1.jpg">'+
						'</div>'+
						'<h4><a class="text-thm" href="/CareerUp/Employer?id='+data[a].user_id+'">'+data[a].company_name+'</a></h4>'+
						'<p>'+data[a].job_post_title +'</p>'+
						'<ul class="featurej_post">'+
						'<li class="list-inline-item"><span class="flaticon-location-pin"></span> <a href="#">'+data[a].company_city+', '+data[a].company_country+'</a></li>'+
						'</ul>'+
						'</div>'+
						'</div>'+
						'</div>'

				$('#jobDiv').append(content);
			}
		}
	}

	function getAll(){
		$.ajax({
			url: "<?php echo base_url(''); ?>/BEPost/getAllJobs",
			data: {},
			method: "post",
			dataType: "json",
			error: function(error){
				console.log(error);
				$.notify("Internal server error", "error");

			},
			success: function(r){
				if(r.status = 200){
					updateUI(r.data)
				}else{
					$.notify("No company available", "error");
				}
			}
		});
	}

	function getCityWise(cityName){
		$.ajax({
			url: "<?php echo base_url(''); ?>/BEPost/getAllJobsByCities",
			data: {
				cityName: cityName
			},
			method: "post",
			dataType: "json",
			error: function(error){
				console.log(error);
				$.notify("Internal server error", "error");
			},
			success: function(r){
				if(r.status === 200){
					updateUI(r.data)
				}
			}
		});
	}

	function getKnowledgeWise(kw){
		$.ajax({
			url: "<?php echo base_url(''); ?>/BEPost/getAllJobsByKnowledge",
			data: {
				kw: kw
			},
			method: "post",
			dataType: "json",
			error: function(error){
				console.log(error);
				$.notify("Internal server error", "error");
			},
			success: function(r){
				if(r.status === 200){
					updateUI(r.data)
				}
			}
		});
	}

	function getExperienceWise(ex){
		$.ajax({
			url: "<?php echo base_url(''); ?>/BEPost/getAllJobsByExperienceWise",
			data: {
				ex: ex
			},
			method: "post",
			dataType: "json",
			error: function(error){
				console.log(error);
				$.notify("Internal server error", "error");
			},
			success: function(r){
				if(r.status === 200){
					updateUI(r.data)
				}
			}
		});
	}

	function search(val){
		$.ajax({
			url: "<?php echo base_url(''); ?>/BEPost/getAllJobsByKeyword",
			data: {
				value: val
			},
			method: "post",
			dataType: "json",
			error: function(error){
				console.log(error);
				$.notify("Internal server error", "error");
			},
			success: function(r){
				if(r.status === 200){
					updateUI(r.data)
				}
			}
		});
	}

	function getGenderWise(gender){
		$.ajax({
			url: "<?php echo base_url(''); ?>/BEPost/getAllJobsByGenderWise",
			data: {
				gender: gender
			},
			method: "post",
			dataType: "json",
			error: function(error){
				console.log(error);
				$.notify("Internal server error", "error");
			},
			success: function(r){
				if(r.status === 200){
					updateUI(r.data)
				}
			}
		});
	}

	$(document).ready(function (){
		$('#cmbCompanyCity').on('change', function(e){
			if(this.value === 'none'){
				getAll()
			}else{
				getCityWise(this.value);
			}
		});

		$('#cmbExperienceLevel').on('change', function(e){
			if(this.value === 'none'){
				getAll()
			}else{
				getExperienceWise(this.value);
			}
		});

		$('#cmbKnowledgeLevel').on('change', function(e){
			if(this.value === 'none'){
				getAll()
			}else{
				getKnowledgeWise(this.value);
			}
		});

		$('#cmbGender').on('change', function(e){
			if(this.value === 'none'){
				getAll()
			}else{
				if(this.value === 'Male & Female'){
					getAll()
				}else{
					getGenderWise(this.value);
				}
			}
		});

		$('#txtSearch').keyup(function() {
			let val = $('#txtSearch').val();
			if(val != ''){
				search(val)
			}else{
				getAll()
			}
		});

		getAll()
	});

</script>
