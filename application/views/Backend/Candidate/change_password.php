<?php
/**
 * Created & developed by treCoops
 * For: degree final
 * Campus ID: COBSCCOMP191P-032
 * Coventry ID: 9631605
 * Date: 2021-04-27
 * Time: 15:07
 */
?>
<div class="col-lg-6 col-xl-6">
	<div class="password_change_form">
		<h4>Change Password</h4>
		<form id="formChangePasswordCandidate">
			<div class="form-group">
				<label for="txtOldPassword">Old Password</label>
				<input type="password" class="form-control" id="txtOldPassword" name="txtOldPassword">
			</div>
			<div class="form-group">
				<label for="txtNewPassword">New Password</label>
				<input type="password" class="form-control" id="txtNewPassword" name="txtNewPassword">
			</div>
			<div class="form-group">
				<label for="txtConfirmPassword">Confirm Password</label>
				<input type="password" class="form-control" id="txtConfirmPassword" name="txtConfirmPassword">
			</div>
			<button type="submit" class="btn btn-thm">Update</button>
		</form>
	</div>
</div>

<script>

	$(document).ready(function() {

		$("#formChangePasswordCandidate").validate({
			ignore: [],
			rules: {
				txtOldPassword: {
					required: true,
					minlength: 6
				},
				txtNewPassword: {
					required: true,
					minlength: 6
				},
				txtConfirmPassword: {
					required: true,
					minlength: 6,
					equalTo: '#txtNewPassword'
				}
			},
			messages: {
				txtOldPassword: {
					required: 'Current password required!',
					minlength: "Current password must have more than 6 characters!"
				},
				txtNewPassword: {
					required: 'New password required!',
					minlength: "New password must have more than 6 characters!"
				},
				txtConfirmPassword: {
					required: 'Confirm password required!',
					minlength: "Confirm password must have more than 6 characters!",
					equalTo: "Password is not matching"
				}
			},
			submitHandler: function(form) {
				let formData = new FormData(form);

				$.ajax({
					url: '<?php echo base_url('BCChangePassword/changePassword'); ?>',
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
