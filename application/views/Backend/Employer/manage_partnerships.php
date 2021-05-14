<?php
/**
 * Created & developed by treCoops
 * For: degree final
 * Campus ID: COBSCCOMP191P-032
 * Coventry ID: 9631605
 * Date: 2021-04-27
 * Time: 15:34
 */
?>
<div class="col-sm-12 col-lg-8 col-xl-9">
	<div class="row">
		<div class="col-lg-12">
			<h4 class="mb30">Partnerships</h4>
		</div>
		<div class="col-sm-4 col-md-4 col-lg-4 col-xl-4">
			<div class="custom-control custom-switch">
				<?php if($isEnabled){ ?>
					<input type="checkbox" class="custom-control-input" checked name="switchEnablePartnership" id="switchEnablePartnership">
				<?php }else{ ?>
					<input type="checkbox" class="custom-control-input" name="switchEnablePartnership" id="switchEnablePartnership">
				<?php } ?>

				<label class="custom-control-label" for="switchEnablePartnership">Enable Partnerships</label>
				<input type="hidden" id="txtProfileId" name="txtProfileId" value="<?php echo $profileID; ?>">
			</div>
		</div>
		<div class="col-lg-12">
			<div class="cnddte_fvrt_job candidate_job_reivew style2">
				<div class="table-responsive job_review_table">
					<table id="tblPartnership" class="table">
					</table>
				</div>
			</div>
		</div>
	</div>
</div>


<script>

	function del(id){
		$.confirm({
			icon: 'fa fa-trash',
			title: 'Delete partnership request',
			content: 'Do you want to delete this partnership request?',
			type: 'red',
			typeAnimated: true,
			buttons: {
				confirm: {
					text: 'Delete',
					btnClass: 'btn-red',
					action: function(){
						$.ajax({
							url: "<?php echo base_url(''); ?>/BEPartnerships/deletePartnershipRecord",
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
									dTable.ajax.reload();
									dTable.draw();
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

	function view(id){
		$.ajax({
			url: "<?php echo base_url(''); ?>/BEPartnerships/updateReadStatus",
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
				if(r.data[0].profile_type === 'Candidate'){
					location.href = '<?php echo base_url('Candidate?id='); ?>' + r.data[0].sender_user_id;
				}else{
					location.href = '<?php echo base_url('Employer?id='); ?>' + r.data[0].sender_user_id;
				}

				dTable.ajax.reload();
				dTable.draw();
			}
		});
	}

	let dTable;

	function initTable(){
		dTable = $('#tblPartnership').DataTable({
			"processing": true,
			"initComplete": function (settings, json) {
				$("#tblPartnership").show();
			},
			"serverSide": true,
			"select": true,
			"searching": true,
			"bDestroy": true,
			"dataSrc": "tableData",
			"columns": [
				{"data": "partnership_request_id", "name": "Request ID", "title": "Request ID"},
				{"data": "sender_name", "name": "Name", "title": "Name"},
				{"data": "sender_email", "name": "E-Mail", "title": "E-Mail"},
				{"data": "sender_contact_no", "name": "Contact No.", "title": "Contact No."},
				{"data": "read_status", "name": "Read Status", "title": "Read Status",
					mRender: function(data) {
						if(data === '1'){
							return '<span class="alert-dark"> Read </span>'
						}
						if(data === '0'){
							return '<span class="alert-primary"> New </span>'
						}
					}
				},
				{"data": "partnership_request_id", "name": "Action", "title": "Action",
					mRender: function (id) {
						return '<td>'+
								'<ul class="view_edit_delete_list">'+
								'<li class="list-inline-item"><a onclick="view(\''+id+'\');" data-toggle="tooltip" data-placement="bottom" title="View"><span class="flaticon-eye"></span></a></li>'+
								'<li class="list-inline-item"><a onclick="del(\''+id+'\');" data-toggle="tooltip" data-placement="bottom" title="Delete"><span class="flaticon-rubbish-bin"></span></a></li>'+
								'</ul>'+
								'</td>'
					}
				}
			],
			"language": {
				"emptyTable": "No subjects to show..."
			},
			"ajax": {
				"url": '<?php echo base_url(''); ?>/BEPartnerships/getAllPartnershipRequestsForTable',
				"dataType": "json",
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
	}

	function updateStatus(status){
		$.ajax({
			url: "<?php echo base_url(''); ?>/BEPartnerships/updateStatus",
			data: {
				id: $('#txtProfileId').val(),
				status: status
			},
			method: "post",
			dataType: "json",
			error: function(error){
				console.log(error);
				$.notify("Internal server error", "error");

			},
			success: function(r){
				if (r.status == 200) {
					$.notify(r.message, "success");
				}

				if (r.status == 500) {
					$.notify(r.message, "error");
				}
			}
		});
	}


	$(document).ready(function(){
		$('#switchEnablePartnership').change(function() {
			if (this.checked) {
				updateStatus(1);
			} else {
				updateStatus(0);
			}
		});

		initTable();

	});


</script>

