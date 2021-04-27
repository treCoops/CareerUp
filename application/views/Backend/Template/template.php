<?php
/**
 * Created & developed by treCoops
 * For: degree final
 * Campus ID: COBSCCOMP191P-032
 * Coventry ID: 9631605
 * Date: 2021-04-27
 * Time: 13:17
 */
?>

<!DOCTYPE html>
<html dir="ltr" lang="en">
<head>
	<?php $this->load->view('Backend/Template/header'); ?>
</head>
<body>
<div class="wrapper">
	<div class="preloader"></div>

	<!-- Main Header Nav $ Mobile Nav -->
	<?php $this->load->view('Backend/Template/navigation'); ?>

	<section class="our-dashbord dashbord">
		<div class="container">
			<div class="row">
				<?php $this->load->view('Backend/Template/side'); ?>
				<?php $this->load->view($page); ?>
			</div>
		</div>
	</section>



	<a class="scrollToHome text-thm" href="#"><i class="flaticon-rocket-launch"></i></a>
</div>
<?php $this->load->view('Backend/Template/scripts'); ?>
</body>
</html>
