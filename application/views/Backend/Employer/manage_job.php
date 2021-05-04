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
		<div class="col-sm-4 col-md-4 col-lg-4 col-xl-4">
			<div class="icon_boxs">
				<div class="icon"><span class="flaticon-work"></span></div>
				<div class="details"><h4>2 Job Posted</h4></div>
			</div>
		</div>
		<div class="col-sm-4 col-md-4 col-lg-4 col-xl-4">
			<div class="icon_boxs">
				<div class="icon style2"><span class="flaticon-resume"></span></div>
				<div class="details"><h4>3 Applications</h4></div>
			</div>
		</div>
		<div class="col-sm-4 col-md-4 col-lg-4 col-xl-4">
			<div class="icon_boxs">
				<div class="icon style3"><span class="flaticon-work"></span></div>
				<div class="details"><h4>1 Active Jobs</h4></div>
			</div>
		</div>
		<div class="col-lg-12">
			<div class="cnddte_fvrt_job candidate_job_reivew style2">
				<div class="table-responsive job_review_table">
					<table id="tblJobs" class="table">
						<thead class="thead-light">
						<tr>
							<th scope="col">Job Title</th>
							<th scope="col">Applications</th>
							<th scope="col">Status</th>
							<th scope="col"></th>
						</tr>
						</thead>
						<tbody>
						<tr>
							<th scope="row">
								<h4>General Ledger Accountant</h4>
								<p><span class="flaticon-location-pin"></span> RG40, Wokingham</p>
								<ul>
									<li class="list-inline-item"><a href="#"><span class="flaticon-event"> Created: </span></a></li>
									<li class="list-inline-item"><a class="color-black22" href="#">Dec 03, 2017</a></li>
									<li class="list-inline-item"><a href="#"><span class="flaticon-event"> Expiry: </span></a></li>
									<li class="list-inline-item"><a class="color-black22" href="#">Oct 22, 2018</a></li>
								</ul>
							</th>
							<td><span class="color-black22">17</span> Application(s)</td>
							<td class="text-thm2">Inactive</td>
							<td>
								<ul class="view_edit_delete_list">
									<li class="list-inline-item"><a href="#" data-toggle="tooltip" data-placement="bottom" title="View"><span class="flaticon-eye"></span></a></li>
									<li class="list-inline-item"><a href="#" data-toggle="tooltip" data-placement="bottom" title="Edit"><span class="flaticon-edit"></span></a></li>
									<li class="list-inline-item"><a href="#" data-toggle="tooltip" data-placement="bottom" title="Delete"><span class="flaticon-rubbish-bin"></span></a></li>
								</ul>
							</td>
						</tr>
						<tr>
							<th scope="row">
								<h4>Financed Bank</h4>
								<p><span class="flaticon-location-pin"></span> London, United Kingdom</p>
								<ul>
									<li class="list-inline-item"><a href="#"><span class="flaticon-event"> Created: </span></a></li>
									<li class="list-inline-item"><a class="color-black22" href="#">Dec 03, 2017</a></li>
									<li class="list-inline-item"><a href="#"><span class="flaticon-event"> Expiry: </span></a></li>
									<li class="list-inline-item"><a class="color-black22" href="#">Oct 22, 2018</a></li>
								</ul>
							</th>
							<td><span class="color-black22">14</span> Application(s)</td>
							<td class="color-red">Active</td>
							<td>
								<ul class="view_edit_delete_list">
									<li class="list-inline-item"><a href="#" data-toggle="tooltip" data-placement="bottom" title="View"><span class="flaticon-eye"></span></a></li>
									<li class="list-inline-item"><a href="#" data-toggle="tooltip" data-placement="bottom" title="Edit"><span class="flaticon-edit"></span></a></li>
									<li class="list-inline-item"><a href="#" data-toggle="tooltip" data-placement="bottom" title="Delete"><span class="flaticon-rubbish-bin"></span></a></li>
								</ul>
							</td>
						</tr>
						<tr>
							<th scope="row">
								<h4>UX/UI Designer</h4>
								<p><span class="flaticon-location-pin"></span> RG40, Wokingham</p>
								<ul>
									<li class="list-inline-item"><a href="#"><span class="flaticon-event"> Created: </span></a></li>
									<li class="list-inline-item"><a class="color-black22" href="#">Dec 03, 2017</a></li>
									<li class="list-inline-item"><a href="#"><span class="flaticon-event"> Expiry: </span></a></li>
									<li class="list-inline-item"><a class="color-black22" href="#">Oct 22, 2018</a></li>
								</ul>
							</th>
							<td><span class="color-black22">05</span> Application(s)</td>
							<td class="color-red">Active</td>
							<td>
								<ul class="view_edit_delete_list">
									<li class="list-inline-item"><a href="#" data-toggle="tooltip" data-placement="bottom" title="View"><span class="flaticon-eye"></span></a></li>
									<li class="list-inline-item"><a href="#" data-toggle="tooltip" data-placement="bottom" title="Edit"><span class="flaticon-edit"></span></a></li>
									<li class="list-inline-item"><a href="#" data-toggle="tooltip" data-placement="bottom" title="Delete"><span class="flaticon-rubbish-bin"></span></a></li>
								</ul>
							</td>
						</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>

<script>

	let dTable;

	$(document).ready(function() {

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
				{"data": "partner_id", "name": "Partner ID", "title": "Partner ID"},
				{"data": "partner_name", "name": "Partner Name", "title": "Partner Name"},
				{"data": "partner_description", "name": "Partner Description", "title": "Partner Description"},
				{"data": "partner_image", "name": "Partner Image", "title": "Partner Image",
					mRender: function(data) {
						return '<div class="d-flex">' +
								'<div class="usr-img-frame mr-2 rounded-circle">'+
								'<img alt="avatar" class="img-fluid" src="<?php echo base_url(); ?>assets/img/Partner/' + data + '">'+
								'</div>'+
								'</div>'
					}
				},
				{"data": "partner_status", "name": "Partner Active Status", "title": "Partner Active Status",
					mRender: function(data) {
						if(data === '1'){
							return '<span class=" shadow-none badge outline-badge-primary">Activated</span>'
						}
						if(data === '0'){
							return '<span class=" shadow-none badge outline-badge-danger">Deactivated</span>'
						}
					}
				},
				{"data": "partner_id", "name": "Action", "title": "Action",
					mRender: function (id) {
						return '<td class="text-center"><ul class="table-controls">\n' +
								'<li class="list-inline-item" data-toggle="tooltip" data-placement="top" title="Edit"><button onclick="edit(\''+id+'\')" class="btn btn-outline-info" ><svg xmlns="http://www.w3.org/2000/svg" width="5" height="5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2 p-1 br-6 mb-1"><path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path></svg></button></li>\n' +
								'<li class="list-inline-item" data-toggle="tooltip" data-placement="top" title="Delete"><button onclick="del(\''+id+'\')" class="btn btn-outline-danger"><svg xmlns="http://www.w3.org/2000/svg" width="5" height="5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash p-1 br-6 mb-1"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path></svg></button></li>\n' +
								'</ul></td>'
					}
				}
			],
			"language": {
				"emptyTable": "No subjects to show..."
			},
			"ajax": {
				"url": '<?php echo base_url(''); ?>/BEManageJobs/getAllJobPostsForTable',
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

	});

</script>
