<?php
/**
 * Created & developed by treCoops
 * For: degree final
 * Campus ID: COBSCCOMP191P-032
 * Coventry ID: 9631605
 * Date: 2021-04-27
 * Time: 11:39
 */
	$User_Session = $this->session->userdata('User_Session');
	if($User_Session == null){
		$name = 'empty';
	}else{
		$name = $User_Session['Username'];
	}
?>

<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
	<?php $this->load->view('Frontend/Template/header'); ?>
</head>
<body>
<div class="wrapper">
	<div class="preloader"></div>

	<!-- Main Header Nav & Mobile Nav -->
	<?php $this->load->view('Frontend/Template/navigation'); ?>

	<!-- Home Design -->
	<?php $this->load->view($page); ?>

	<!-- Our Footer Top Area -->
	<?php $this->load->view('Frontend/Template/footer'); ?>

	<a class="scrollToHome text-thm" href="#"><i class="flaticon-rocket-launch"></i></a>
	<input type="hidden" id="txtName" value="<?php echo $name; ?>">

</div>
<!-- Wrapper End -->

<?php $this->load->view('Frontend/Template/script'); ?>
<script>
	$(document).ready(function() {

		if($('#txtName').val() !== "empty")
			document.getElementById("avatar").src = generateAvatar($('#txtName').val().substring(0, 2), "white", "#009578");
	});
</script>
</body>
</html>
