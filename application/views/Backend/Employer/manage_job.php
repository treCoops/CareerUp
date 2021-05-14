<?php
/**
 * Created & developed by treCoops
 * For: degree final
 * Campus ID: COBSCCOMP191P-032
 * Coventry ID: 9631605
 * Date: 2021-04-27
 * Time: 14:04
 */

?>

<div class="col-sm-12 col-lg-8 col-xl-9">
	<div class="row">
		<div class="col-lg-12">
			<h4 class="mb30">Manage Jobs</h4>
		</div>

		<div class="col-lg-12">
			<div class="cnddte_fvrt_job candidate_job_reivew style2">
				<div class="table-responsive job_review_table">
					<input type="hidden" id="txtProfileID" value="<?php echo $profile_ID ?>">
					<table id="tblJobs" class="table">
					</table>
				</div>
			</div>
		</div>

		<div class="sign_up_modal modal fade" id="modalUpdateJob" tabindex="-1" role="dialog" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					</div>
					<div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
						<div class="login_form">
							<form id="formJobPost" method="post">
								<div class="heading">
									<h3 class="text-center">Edit Skill Details</h3>
								</div>

								<div class="form-group">
									<label for="txtJobTitle">Job Title</label>
									<input type="text" class="form-control" name="txtJobTitle" id="txtJobTitle" placeholder="Ex: Fullstack Developer">
								</div>

								<div class="form-group">
									<label for="txtJobDescription">Job Description</label>
									<textarea class="form-control" id="txtJobDescription" name="txtJobDescription" rows="9"></textarea>
								</div>


								<div class="form-group">
									<label for="txtJobDeadlineDate">Application Deadline Date</label>
									<input type="text" class="form-control" id="txtJobDeadlineDate" name="txtJobDeadlineDate">
								</div>

								<div class="form-group">
									<label for="cmbJobKnowledgeLevel">Knowledge Level</label><br>
									<select id="cmbJobKnowledgeLevel" name="cmbJobKnowledgeLevel" class="selectpicker form-control">
										<option value="Internship">Internship</option>
										<option value="Basic">Basic</option>
										<option value="Standard">Standard</option>
										<option value="Advance">Advance</option>
										<option value="Expert">Expert</option>
									</select>
								</div>

								<div class="form-group">
									<label for="cmbJobExperienceLevel">Experience Years</label><br>
									<select class="selectpicker form-control" id="cmbJobExperienceLevel" name="cmbJobExperienceLevel">
										<option value="Below 1 Year">Below 1 Year</option>
										<option value="1 to 2 Years">1 to 2 Years</option>
										<option value="2 to 3 Years">2 to 3 Years</option>
										<option value="3 to 4 Years">3 to 4 Years</option>
										<option value="4 to 5 Years">4 to 5 Years</option>
										<option value="More Than 5 Years">More Than 5 Years</option>
									</select>
								</div>

								<div class="form-group">
									<label for="cmbGender">Gender</label><br>
									<select class="selectpicker form-control" id="cmbGender" name="cmbGender">
										<option value="Male Only">Male Only</option>
										<option value="Female Only">Female Only</option>
										<option value="Male & Female">Male & Female</option>
									</select>
								</div>

								<div class="form-group">
									<label for="cmbJobQualificationLevel">Qualification</label><br>
									<select class="selectpicker form-control" id="cmbJobQualificationLevel" name="cmbJobQualificationLevel">
										<option value="A-Level">A-Level</option>
										<option value="Certificate of Higher Education">Certificate of Higher Education</option>
										<option value="Diploma of Higher Education & Foundation Degree">Diploma of Higher Education & Foundation Degree</option>
										<option value="Bachelor's Degree">Bachelor's Degree</option>
										<option value="Masters Degree">Masters Degree</option>
									</select>
								</div>

								<br>
								<input type="hidden" id="txtJobID" name="txtJobID">
								<button class="btn btn-lg btn-thm" type="submit">Update</button>

							</form>
						</div>
					</div>
				</div>
			</div>
		</div>

	</div>
</div>

<script>

	let dTable;

	function edit(id){
		$.ajax({
			url: "<?php echo base_url(''); ?>BEManageJobs/getSelectedPostDetails",
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

				$('#txtJobTitle').val(r.data[0].job_post_title);
				$('#txtJobDescription').val(r.data[0].job_post_description);
				$('#txtJobDeadlineDate').val(r.data[0].job_post_deadline);
				$('#txtJobID').val(r.data[0].job_post_id);


				$('#cmbJobKnowledgeLevel').val(r.data[0].job_post_knowledge_level);
				$('#cmbJobKnowledgeLevel').trigger('change');

				$('#cmbJobExperienceLevel').val(r.data[0].job_post_experience_level);
				$('#cmbJobExperienceLevel').trigger('change');

				$('#cmbGender').val(r.data[0].job_post_gender);
				$('#cmbGender').trigger('change');

				$('#cmbJobQualificationLevel').val(r.data[0].job_post_qualification_level);
				$('#cmbJobQualificationLevel').trigger('change');

				$('#modalUpdateJob').modal('show');

			}
		});


	}

	function del(id){
		$.confirm({
			icon: 'fa fa-trash',
			title: 'Delete post',
			content: 'Do you want to delete this job post?',
			type: 'red',
			typeAnimated: true,
			buttons: {
				confirm: {
					text: 'Delete',
					btnClass: 'btn-red',
					action: function(){
						$.ajax({
							url: "<?php echo base_url(''); ?>/BEManageJobs/deletePost",
							data: {ID : id},
							method: "post",
							dataType: "json",
							error: function(error){
								console.log(error);
								$.notify("Internal server error", "error");

							},
							success: function(r){
								if(r.result){
									dTable.ajax.reload();
									dTable.draw();
									$.alert({
										icon: 'fa fa-check',
										title: 'Success',
										content: 'Post have been deleted',
										type: 'green',
										btnClass: 'btn-green'
									});

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
					url: '<?php echo base_url('BEManageJobs/editJobPost'); ?>',
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

						dTable.ajax.reload();
						dTable.draw();
						$('#modalUpdateJob').modal('hide');

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

		dTable = $('#tblJobs').DataTable({
			"processing": true,
			"initComplete": function (settings, json) {
				$("#tblJobs").show();
			},
			"serverSide": true,
			"select": true,
			"searching": true,
			"bDestroy": true,
			"dataSrc": "tableData",
			"columns": [
				{"data": "job_post_id", "name": "Post ID", "title": "Post ID"},
				{"data": "job_post_title", "name": "Job Title", "title": "Job Title"},
				{"data": "job_post_description", "name": "Job Description", "title": "Job Description"},
				{"data": "job_post_deadline", "name": "Deadline", "title": "Deadline"},

				{"data": "job_post_id", "name": "Action", "title": "Action",
					mRender: function (id) {
						return '<td>'+
								'<ul class="view_edit_delete_list">'+
								'<li class="list-inline-item"><a onclick="edit(\''+id+'\');" data-toggle="tooltip" data-placement="bottom" title="Edit"><span class="flaticon-edit"></span></a></li>'+
								'<li class="list-inline-item"><a onclick="del(\''+id+'\');" data-toggle="tooltip" data-placement="bottom" title="Delete"><span class="flaticon-rubbish-bin"></span></a></li>'+
								'</ul>'+
								'</td>'
					}
				}
			],
			"language": {
				"emptyTable": "No subjects to show..."
			},
			ajax: {
				url: '<?php echo base_url(''); ?>/BEManageJobs/getAllJobPostsForTable',
				dataType: "json",
				data: {
					ID: $('#txtProfileID').val()
				},
				method: "post"
			},
			"oLanguage": {
				"oPaginate": { "sPrevious": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-left"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg>', "sNext": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>' },
				"sInfo": "Showing page _PAGE_ of _PAGES_",
				"sSearch": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>',
				"sSearchPlaceholder": "Search...",
				"sLengthMenu": "Results :  _MENU_",
			},
			"lengthMenu": [7, 10, 20, 50],
			"pageLength": 7,
			columnDefs: [ {
				targets: [ 0 ],
				orderData: [ 0, 1 ]
			}, {
				targets: [ 1 ],
				orderData: [ 1, 0 ]
			}, {
				targets: [ 2 ],
				orderData: [ 2, 0 ]
			} ]
		});

	});

</script>
