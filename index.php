<?php
include "includes/header.php";
?>
<!--==================== MAIN-TWO ====================-->

<section class="main-two">
	<div class="main-slider-two">
		<div class="main-slide-two">
			<div class="main-slide-date"></div>
			<div class="main-slider-bg" style="background-image: url(assets/img/bg-slider.jpg);"></div>
			<img class="img-slide" src="assets/img/" alt="img">
			<div class="container">
				<div class="main-slide-item">
					<h2 class="text-warning mb-0 intl-conf" style="font-size: 40px; line-height: 30px; margin-top: 150px; ">2ND INTERNATIONAL CONFERENCE</h2>
					<h4 class="text-warning">The Federal Polytechnic, Ilaro</h4>
					<div class="date-slide mt-2 "><?= $conference->conference_slider()->date ?></div>
					<h2 style="font-size: 20px; line-height: 30px;"><span class="big-text font-weight-bold" style="font-size: 32px; line-height: 50px"><?= $conference->conference_slider()->theme ?></span>
	</h2>
						<div class="slide-tag">#Virtual Conference</div>
						<div class="slide-btn-cover">
							<a href="register.php" class="btn btn-yellow rounded-0">Registration/Submission</a>
							<a href="speakers.php" class="btn btn-border rounded-0">Our Speakers</a>
						</div>
					</div>
				</div>
			</div>
		<!-- <div class="main-slide-two">
			<div class="main-slide-date"></div>
			<div class="main-slider-bg" style="background-image: url(assets/img/bg-slider-home2.svg);"></div>
			<img class="img-slide" src="assets/img/home-2-slide-2.png" alt="img">
			<div class="container">
				<div class="main-slide-item">
					<div class="date-slide">January 17, 2019 / Washington DC</div>
					<h2><span>Technology in</span>The Banking Sector</h2>
					<div class="slide-tag">#Web_Conference</div>
					<div class="slide-btn-cover">
						<a href="register.php" class="btn btn-yellow rounded-0">register now</a>
						<a href="single-events.html" class="btn btn-border rounded-0">more details</a>
					</div>
				</div>
			</div>
		</div>
		<div class="main-slide-two">
			<div class="main-slide-date"></div>
			<div class="main-slider-bg" style="background-image: url(assets/img/bg-slider-home2.svg);"></div>
			<img class="img-slide" src="assets/img/home-2-slide-3.png" alt="img">
			<div class="container">
				<div class="main-slide-item">
					<div class="date-slide">January 17, 2019 / Washington DC</div>
					<h2><span>Ultimate Skills For an</span>Start in IT Recruiting</h2>
					<div class="slide-tag">#Web_Conference</div>
					<div class="slide-btn-cover">
						<a href="register.php" class="btn btn-yellow rounded-0">register now</a>
						<a href="single-events.html" class="btn btn-border rounded-0">more details</a>
					</div>
				</div>
			</div>
		</div> -->
	</div>
	<div class="main-arrow-cover">
		<div class="container">
			<div class="main-slide-arrow"></div>
		</div>
	</div>
</section>
<!--=================== MAIN-TWO END ===================-->

<!--==================== S-ABOUT ====================-->
<section class="s-about-home-two" style="padding-top: 0px;">
	<div class="container" style="padding-top: 80px; padding-bottom: 50px;">
		<div class="row about-page">
			<div class="col-12 col-md-6 about-info">
				<h2 class="title-line-left">Welcome Message</h2>
				<!-- <div class="about-slogan-home-two">Lorem ipsum dolor sit amet, consectetur adipiscing elit,  sed do eiusmod tempor incididunt ut labore.</div> -->
				<div class="about-info-text">
					<p><?= htmlspecialchars_decode($about->view_welcome()->welcome) ?></p>
				</div>
				<a href="about.php" class="btn btn-yellow rounded-0">About Us</a>
			</div>
			<div class="col-12 col-md-6 about-image">

				<img src="uploads/welcome.jpeg" data-src="uploads/welcome.jpeg" alt="welcome-spech-creator" style="height: 500px; min-width: 100%">

			</div>
		</div>
	</div>
</section>
<!--================== S-ABOUTK END ==================-->

<!--================== OUR-SPEAKERS ==================-->
<section class="our-speakers speakers-home-two">
	<div class="bg-img" style="background-image: url(assets/img/bg-team-home-2.svg);"></div>
	<span class="title-position title-position-left">Speakers</span>
	<span class="title-position title-position-right">Experts</span>
	<div class="container">
		<h2 class="title-line">Our Speakers</h2>
		<p class="slogan">They possess the secret knowledge and interesting experience of creating a digital product.</p>
		<div class="our-speakers-cover">
			<?php
			$speaker = $speakers->all_speakers_limit();
			foreach ($speaker as $speaker) {?>

			<div class="speaker-item">
				<div class="speaker-item-img">
					<img class="lazy" src="uploads/speakers_picture/<?= $speaker->picture ?>" data-src="uploads/speakers_picture/<?= $speaker->picture ?>" alt="img" style="height: 350px">
				</div>
				<div class="speaker-item-content">
					<h3><?= $speaker->name ?></h3>
					<div class="prof"><?= $speaker->type ?></div>
					<a href="speaker-profile.php?speaker_id=<?= $speaker->speaker_id ?>" class="btn btn-yellow">Profile</a>
				</div>
			</div>
			<?php }?>
		</div>
	</div>
</section>
<!--================ OUR-SPEAKERS END ================-->

<!--================= S-SCHEDULE-EVENT =================-->
<section class="s-schedule-event schedule-event-home-two" style="padding-bottom: 40px !important">
	<span class="title-position title-position-left">Program</span>
	<div class="container">
		<h2 class="title-line">Schedule of Event</h2>
		<!-- <p class="slogan">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.</p> -->
		<ul class="schedule-cover">
			<?php
			$conf = $conference->all_conference_date('ASC');
			foreach ($conf as $conf) {?>
			<li>
				<div class="schedule-header">
					<div class="schedule-time"><?= $conf->date ?></div>
					<div class="schedule-title"><?= $conf->event ?></div>
					<i class="fa fa-chevron-left" aria-hidden="true"></i>
				</div>
				<!-- <div class="schedule-content">
					<div class="schedule-title"><?= $conf->description ?></div>
				</div> -->
			</li>
			<?php }?>
		</ul>
	</div>
</section>
<!--=============== S-SCHEDULE-EVENT END ===============-->
<!--===================== S-VENUE =====================-->
<section class="row"  style="padding-top: 40px; padding-bottom: 40px !important;">
	<div class="container">
		<div class="row">
			<div class="col-md-12 owl-carousel owl-theme">
				<div class="item">
					<img src="assets/img/about-1.jpg">
				</div>
				<div class="item">
					<img src="assets/img/about-1.jpg">
				</div>
				<div class="item">
					<img src="assets/img/about-1.jpg">
				</div>
				
			</div>
		</div>
	</div>
</section>
<!--=================== S-VENUE END ===================-->
<!--===================== S-VENUE =====================-->
<section class="s-venue"  style="padding-top: 50px; padding-bottom: 40px !important">
	<div class="container">
		<div class="row">
			<div class="col-12 col-sm-4">
				<h2 class="title-line-left">Venue</h2>
				<ul>
					<li><i class="fas fa-map-marker-alt"></i><?= $venue->view_venue()->venue_address ?></li>
					<li><i class="fas fa-street-view"></i><?= $venue->view_venue()->venue_hall ?></li>
				</ul>
			</div>
			<div class="col-12 col-sm-8"><img class="lazy" src="uploads/venue/<?= $venue->view_venue()->venue_picture ?>" data-src="uploads/venue/<?= $venue->view_venue()->venue_picture ?>" alt="venue_image"></div>
		</div>
	</div>
</section>
<!--=================== S-VENUE END ===================-->

<!--==================== S-PARTNERS ====================-->
<!-- <section class="s-partners partners-home-two">
	<div class="container">
		<div class="row">
			<?php 
			$sponsor = $sponsors->all_sponsor();
			foreach ($sponsor as $sponsor) {
				?>
				<div class="col-6 col-sm-4 col-md-2"><img class="lazy" src="uploads/sponsors/<?= $sponsor->sponsor_img?>" data-src="uploads/sponsors/<?= $sponsor->sponsor_img?>" alt="img"></div>
				<?php }?>
			</div>
		</div>
	</section> -->
	<!--================== S-PARTNERS END ==================-->
	<?php
	include "includes/footer.php";
	?>
	<style type="text/css">
	@media(max-width: 576px){
		.main-slide-item .big-text{
			font-size: 20px !important;
			line-height: 30px !important;
		}
		.main-slide-item h2{
			font-size: 14px !important;
		}
		.about-info{
			order: 1;
		}
		.about-image img{
			height: 300px !important; 
			min-width: 100%;
		}
		.intl-conf{
			margin-top: 50px !important;
		}
	}
</style>
<script>
	$(function(){
		$('.owl-carousel').owlCarousel({
			loop:true,
			margin:20,
			nav:false,
			dots: true,
			autoplay: true,
			autoplayTimeout:3000,
			responsive:{
				0:{
					items:1
				},
				600:{
					items:3
				},
				1000:{
					items:3
				}
			}
		})
	})		
</script>