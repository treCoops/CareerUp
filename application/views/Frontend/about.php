<?php
/**
 * Created & developed by treCoops
 * For: degree final
 * Campus ID: COBSCCOMP191P-032
 * Coventry ID: 9631605
 * Date: 2021-04-27
 * Time: 12:15
 */
?>

<!-- Inner Page Breadcrumb -->
<section class="inner_page_breadcrumb bgc-f0 pt30 pb30" aria-label="breadcrumb">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<h4 class="breadcrumb_title float-left">About Us</h4>
				<ol class="breadcrumb float-right">
					<li class="breadcrumb-item"><a href="<?php echo base_url('Home'); ?>">Home</a></li>
					<li class="breadcrumb-item active" aria-current="page">About</li>
				</ol>
			</div>
		</div>
	</div>
</section>

<!-- About Text Content -->
<section class="about-section bgc-fa">
	<div class="container">
		<div class="row">
			<div class="col-lg-6">
				<div class="about_content">
					<h3>About Career up</h3>
					<p class="color-black22 mt30">Every single one of our jobs has some kind of flexibility option - such as telecommuting a part-time schedule or a flexible or flextime schedule.</p>
					<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum 'Content here, content here', making it look like readable English. <br><br>Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will.

				</div>
			</div>
			<div class="col-lg-6">
				<div class="about_thumb mt50">
					<img class="img-fluid" src="<?php echo base_url() ?>assets/images/about/1.png" alt="1.png">
				</div>
			</div>
		</div>
	</div>
</section>

<!-- How It's Work -->
<section class="popular-job">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 text-center">
				<div class="ulockd-main-title">
					<h3 class="mt0">How It Works?</h3>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-6 col-lg-4 prpl5">
				<div class="icon_box_hiw">
					<div class="icon"><div class="list_tag float-right"><p>1</p></div><span class="flaticon-unlocked"></span></div>
					<div class="details">
						<h4>Create An Account</h4>
						<p>Post a job to tell us about your project. We'll quickly match you with the right freelancers.</p>
					</div>
				</div>
			</div>
			<div class="col-sm-6 col-lg-4 prpl5 mt20-xxsd">
				<div class="icon_box_hiw">
					<div class="icon middle"><div class="list_tag float-right"><p>2</p></div><span class="flaticon-job"></span></div>
					<div class="details">
						<h4>Search Jobs</h4>
						<p>Browse profiles, reviews, and proposals then interview top candidates.</p>
					</div>
				</div>
			</div>
			<div class="col-sm-6 col-lg-4 prpl5 mt20-xxsd">
				<div class="icon_box_hiw">
					<div class="icon"><div class="list_tag float-right"><p>3</p></div><span class="flaticon-trophy"></span></div>
					<div class="details">
						<h4>Save & Apply</h4>
						<p>Use the Upwork platform to chat, share files, and collaborate from your desktop or on the go.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- Our Partners -->
<!--<section class="our-partner">-->
<!--	<div class="container">-->
<!--		<div class="row">-->
<!--			<div class="col-xs-6 col-sm-4 col-lg-2">-->
<!--				<div class="our_partners text-center">-->
<!--					<img class="img-fluid" src="images/partners/5.jpg" alt="5.jpg">-->
<!--				</div>-->
<!--			</div>-->
<!--			<div class="col-xs-6 col-sm-4 col-lg-3">-->
<!--				<div class="our_partners text-center">-->
<!--					<img class="img-fluid" src="images/partners/6.jpg" alt="6.jpg">-->
<!--				</div>-->
<!--			</div>-->
<!--			<div class="col-xs-6 col-sm-4 col-lg-2">-->
<!--				<div class="our_partners text-center">-->
<!--					<img class="img-fluid" src="images/partners/7.jpg" alt="7.jpg">-->
<!--				</div>-->
<!--			</div>-->
<!--			<div class="col-xs-6 col-sm-4 col-lg-3">-->
<!--				<div class="our_partners text-center">-->
<!--					<img class="img-fluid" src="images/partners/8.jpg" alt="8.jpg">-->
<!--				</div>-->
<!--			</div>-->
<!--			<div class="col-xs-6 col-sm-4 col-lg-2">-->
<!--				<div class="our_partners text-center">-->
<!--					<img class="img-fluid" src="images/partners/9.jpg" alt="9.jpg">-->
<!--				</div>-->
<!--			</div>-->
<!--		</div>-->
<!--	</div>-->
<!--</section>-->

<script>
	(function(window, $) {
		var $mapster = $('#map-canvas').mapster(Mapster.MAP_OPTIONS);
		// if (navigator.geolocation) {
		//   navigator.geolocation.getCurrentPosition(function(position) {
		//     $mapster.mapster('addMarker', {
		//       lat: position.coords.latitude,
		//       lng: position.coords.longitude
		//     });
		//   });
		// }

		$mapster.mapster('getCurrentPosition', function(position) {
			$mapster.mapster('addMarker', {
				lat: position.coords.latitude,
				lng: position.coords.longitude
			});
		});

	}(window, jQuery));
</script>
