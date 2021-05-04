<?php
/**
 * Created & developed by treCoops
 * For: degree final
 * Campus ID: COBSCCOMP191P-032
 * Coventry ID: 9631605
 * Date: 2021-04-27
 * Time: 14:57
 */
?>
<div class="col-lg-8 col-xl-9">
	<div class="row">
		<div class="col-lg-12">
			<h4 class="mb30">Document Manager</h4>
		</div>
		<div class="col-lg-12">
			<h5 class="">Curriculum Vitae</h5>
		</div>
		<div class="col-lg-12 mb30">
			<div class="candidate_job_reivew cv_manager">
				<div class="table-responsive job_review_table">
					<table id="tblCV" class="table">
					</table>
				</div>
			</div>
		</div>
		<div class="col-lg-12 col-xl-12">
			<div class="candidate_resume_uploader">
				<form id="formCV" method="post" class="form-inline">
					<input class="upload-path" id="txtCVPlaceholder" placeholder=""/>
					<label class="upload">
						<input type="file" id="txtCV" name="txtCV" accept=".pdf,.docx,.doc"/>
						<p><span class="flaticon-download"></span> Select Curriculum Vitae</p>
					</label>
					<input type="submit" id="btnCV" class="btn btn-lg btn-thm" style="height: 50px !important; margin-left: 5px !important;" value="Submit">
				</form>
				<small class="form-text text-muted">Suitable files are .doc, .docx, .pdf.</small>
			</div>
		</div>


		<div class="col-lg-12">
			<br/>
			<br/>
			<h5 class="">Cover Letter</h5>
		</div>
		<div class="col-lg-12 mb30">
			<div class="candidate_job_reivew cv_manager">
				<div class="table-responsive job_review_table">
					<table id="tblCL" class="table">
					</table>
				</div>
			</div>
		</div>
		<div class="col-lg-12 col-xl-12">
			<div class="candidate_resume_uploader">
				<form id="formCL" method="post" class="form-inline">
					<input class="upload-path" id="txtCoverLetterPlaceholder" placeholder=""/>
					<label class="upload">
						<input type="file" id="txtCoverletter" name="txtCoverletter" accept=".pdf,.docx,.doc"/>
						<p><span class="flaticon-download"></span> Select Cover Letter</p>
					</label>
					<input type="submit" id="btnCL" class="btn btn-lg btn-thm" style="height: 50px !important; margin-left: 5px !important;" value="Submit">
				</form>
				<small class="form-text text-muted">Suitable files are .doc, .docx, .pdf.</small>
			</div>
		</div>
	</div>
</div>

<script>

	let cvTable, clTable;

	function readURL(input, type) {
		if(type === 'COVER'){
			$('#txtCoverLetterPlaceholder').attr("placeholder", input.files[0].name);
		}

		if(type === 'CV')
			$('#txtCVPlaceholder').attr("placeholder", input.files[0].name);
	}

	function openDoc(data){
		console.log(data);
		window.open("<?php echo base_url('assets/documents/candidate/') ?>"+data);
	}

	$(document).ready(function() {

		$("btnCL").prop('disabled', true);
		$("btnCV").prop('disabled', true);

		$("#txtCoverletter").change(function () {
			readURL(this, 'COVER');
		});

		$("#txtCV").change(function () {
			readURL(this, 'CV');
		});

		cvTable = $('#tblCV').DataTable({
			searching: false,
			paging: false,
			info: false,
			processing: true,
			initComplete: function (settings, json) {
				$("#tblCL").show();
			},
			serverSide: true,
			select: true,
			bDestroy: true,
			dataSrc: "tableData",
			columns: [
				{"data": "document_name", "name": "Document Name", "title": "Document Name",
					mRender: function (data) {
						return '<ul>\n' +
								'<li class="list-inline-item"><a onclick="openDoc(\''+data+'\')"><span class="flaticon-doc font"></span></a></li>\n' +
								'<li class="list-inline-item cv_sbtitle"><a onclick="openDoc(\''+data+'\')">'+data+'</a></li>\n' +
								'</ul>'
					}
				}
			],
			ajax: {
				"url": '<?php echo base_url(''); ?>/BCCVManager/getCVDetails',
				"dataType": "json",
			}

		});

		clTable = $('#tblCL').DataTable({
			searching: false,
			paging: false,
			info: false,
			processing: true,
			initComplete: function (settings, json) {
				$("#tblCL").show();
			},
			serverSide: true,
			select: true,
			bDestroy: true,
			dataSrc: "tableData",
			columns: [
				{"data": "document_name", "name": "Document Name", "title": "Document Name",
					mRender: function (data) {
						return '<ul>\n' +
								'<li class="list-inline-item"><a onclick="openDoc(\''+data+'\')"><span class="flaticon-doc font"></span></a></li>\n' +
								'<li class="list-inline-item cv_sbtitle"><a onclick="openDoc(\''+data+'\')">'+data+'</a></li>\n' +
								'</ul>'
					}
				}
			],
			ajax: {
				"url": '<?php echo base_url(''); ?>/BCCVManager/getCLDetails',
				"dataType": "json",
			}

		});


		$("#formCL").validate({
			ignore: [],
			rules: {
				txtCoverletter: {
					required: true
				}
			},
			messages: {
				txtCoverletter: {
					required: "Select a cover letter!"
				}
			},
			submitHandler: function(form) {
				let formData = new FormData(form);

				$.ajax({
					url: '<?php echo base_url('BCCVManager/addCL'); ?>',
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

						clTable.ajax.reload();
						clTable.draw();

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


		$("#formCV").validate({
			ignore: [],
			rules: {
				txtCV: {
					required: true
				}
			},
			messages: {
				txtCV: {
					required: "Select a cv!"
				}
			},
			submitHandler: function(form) {
				let formData = new FormData(form);

				$.ajax({
					url: '<?php echo base_url('BCCVManager/addCV'); ?>',
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

						cvTable.ajax.reload();
						cvTable.draw();

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
