<?php
/**
 * Created & developed by treCoops
 * For: degree final
 * Campus ID: COBSCCOMP191P-032
 * Coventry ID: 9631605
 * Date: 2021-05-10
 * Time: 10:28
 */?>


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
						<input type="text" id="txtSearch" name="txtSearch" placeholder="Search for any key" class="form-control">
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
					<h4 class="fz20 mb15">Category</h4>
					<div class="candidate_revew_select">
						<select id="cmbCompanyCategory" name="cmbCompanyCategory" class="selectpicker w100 show-tick">
							<option value="none">All</option>
							<option value="IT">IT</option>
							<option value="Game">Game</option>
						</select>
					</div>
				</div>
			</div>

			<div class="col-md-12 col-lg-9 col-xl-9">
				<div id="partnershipDiv" class="row">

				</div>
			</div>
		</div>
	</div>
</section>


<script>

	function updateUI(data){
		if(data.length !== 0){
			$('#partnershipDiv').empty();
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
						'<p>'+data[a].sector_name +' Company</p>'+
						'<ul class="featurej_post">'+
						'<li class="list-inline-item"><span class="flaticon-location-pin"></span> <a href="#">'+data[a].company_city+', '+data[a].company_country+'</a></li>'+
						'</ul>'+
						'</div>'+
						'<a onclick="sendRequest(\''+data[a].company_profile_id+'\', \''+data[a].user_id+'\')" class="favorit"><span class="flaticon-mail"></span></a>'+
						'</div>'+
						'</div>'

				$('#partnershipDiv').append(content);
			}
		}
	}

	function sendRequest(profile_id, user_id){
		$.confirm({
			icon: 'fa fa-question-circle',
			title: 'Send request',
			content: 'Do you want to send a request?',
			type: 'green',
			typeAnimated: true,
			buttons: {
				confirm: {
					text: 'Yes',
					btnClass: 'btn-green',
					action: function(){
						$.ajax({
							url: "<?php echo base_url(''); ?>/BEPartnerships/sendRequest",
							data: {
								profileID : profile_id,
								userID: user_id
							},
							method: "post",
							dataType: "json",
							error: function(error){
								console.log(error);
								$.notify("Internal server error", "error");

							},
							success: function(r){
								if(r.status === 200){
									$.alert({
										icon: 'fa fa-check',
										title: 'Success',
										content: r.message,
										type: 'green',
										btnClass: 'btn-green'
									});
								}

								if(r.status === 500){
									$.notify(r.message, "error");
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

	function getAll(){
		$.ajax({
			url: "<?php echo base_url(''); ?>/BEPartnerships/getAllCompanies",
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
			url: "<?php echo base_url(''); ?>/BEPartnerships/getAllCompaniesByCities",
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

	function getCategoryWise(category){
		$.ajax({
			url: "<?php echo base_url(''); ?>/BEPartnerships/getAllCompaniesByCategories",
			data: {
				category: category
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
			url: "<?php echo base_url(''); ?>/BEPartnerships/getAllCompaniesByKeyword",
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

	$(document).ready(function(){

		$('#cmbCompanyCity').on('change', function(e){
			if(this.value === 'none'){
				getAll()
			}else{
				getCityWise(this.value);
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


		$('#cmbCompanyCategory').on('change', function(e){
			if(this.value === 'none'){
				getAll()
			}else{
				getCategoryWise(this.value);
			}
		});

		getAll();
	});

</script>

