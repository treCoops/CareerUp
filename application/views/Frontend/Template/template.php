<?php
/**
 * Created & developed by treCoops
 * For: degree final
 * Campus ID: COBSCCOMP191P-032
 * Coventry ID: 9631605
 * Date: 2021-04-27
 * Time: 11:39
 */
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
</div>
<!-- Wrapper End -->

<?php $this->load->view('Frontend/Template/script'); ?>
</body>
</html>
