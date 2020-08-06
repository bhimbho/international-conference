<?php
include "includes/header.php";
?>

<!--=================== PAGE-TITLE ===================-->
<div class="page-title" style="background-image: url(assets/img/bg-head.jpg);">
	<div class="container">
		<h1 class="title-line-left">About Us</h1>
		<div class="breadcrumbs">
			<ul>
				<li><a href="index.html">Home</a></li>
				<li>About Us</li>
			</ul>
		</div>
	</div>
</div>
<!--================= PAGE-TITLE END =================-->

<!--==================== OVERVIEW ====================-->
<section class="overview" style="padding-top: 80px; padding-bottom: 0px;">
	<div class="container">
		<div class="row">
			<div class="col-12 col-md-6">
				<div class="overview-info">
					<!-- <h2 class="title-line-left">Overview</h2> -->
					<div class="title-line-left">
						<?= html_entity_decode($about->view_about()->about) ?>
					</div>
				</div>
			</div>
			<div class="col-12 col-md-6 overview-img-cover">
				<div class="overview-img-cover">
					<div class="overview-img" style="width: 100% !important; height: 25%;">
						<img src="assets/img/overview-1.jpg" class="img-fluid" alt="img">
						<img src="assets/img/overview-2.jpg" class="img-fluid" alt="img">
					</div>
					<!-- <div class="overview-img"> -->
						<!-- <img src="assets/img/overview-3.jpg" class="img-fluid" alt="img" style="border: 2px solid red; object-fit: none !important;"> -->
					<!-- </div> -->
				</div>
			</div>
		</div>
	</div>
</section>
<!--================== OVERVIEW END ==================-->
<!--================= OUR-HISTORY END =================-->
<!-- <section class="our-history s-title-bg">
	<span class="title-bg">Our History</span>
	<div class="container">
		<div class="row">
			<div class="col-12 col-sm-6">
				<div class="our-history-left">
					<h2 class="title-line-left">Our History</h2>
					<div class="overview-info-item">
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod aliqua. Ut enim ad minim veniam.</p>
						<p>Elementum nibh tellus molestie nunc non blandit massa enim. Pretium aenean pharetra magna ac placerat vestibulum lectus.</p>
					</div>
					<div class="overview-info-item">
						<h5>Our Certificates</h5>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod aliqua. Ut enim ad minim. </p>
					</div>
					<div class="history-cert">
						<div class="history-cert-img">
							<a href="assets/img/certificate-1.jpg" data-fancybox="gallery2">
								<img src="assets/img/certificate-1.jpg" alt="img">
							</a>
						</div>
						<div class="history-cert-img">
							<a href="assets/img/certificate-1.jpg" data-fancybox="gallery2">
								<img src="assets/img/certificate-1.jpg" alt="img">
							</a>
						</div>
					</div>
				</div>
			</div>
			<div class="col-12 col-sm-6">
				<div class="history-info-cover">
					<div class="history-info">
						<h4 class="title"><span>2012-2014. </span>Our Establishment</h4>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod aliqua. Ut enim ad minim veniam. Elementum nibh tellus molestie.</p>
					</div>
					<div class="history-info">
						<h4 class="title"><span>2014. </span>The Early Days</h4>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod aliqua. Ut enim ad minim veniam.</p>
					</div>
					<div class="history-info">
						<h4 class="title"><span>2015-2016. </span>Prosperity of Company</h4>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod aliqua. Ut enim ad minim veniam.</p>
					</div>
					<div class="history-info">
						<h4 class="title"><span>2017-2018. </span>Worldwide Recognition</h4>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod aliqua. Ut enim ad minim veniam.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section> -->
<!--================= OUR-HISTORY END =================-->

<!--=================== S-OUR-TEAM ===================-->
<section class="s-our-team about-team" style="padding-top: 80px; padding-bottom: 0px;">
	<div class="our-team-bg" style="background-image: url(assets/img/bg-team-about.svg);"></div>
	<div class="container">
		<h2 class="title-line">Our Team</h2>
		<p class="slogan">They possess the secret knowledge and interesting experience of creating a digital product.</p>
		<div class="row team-cover">
			<div class="col-6 col-sm-4 team-item">
				<a href="about.html" class="team-img">
					<img src="assets/img/team-1.jpg" alt="team">
				</a>
				<h4 class="title"><a href="about.html">Anthony Watson</a></h4>
				<div class="prof">CEO, Infodex</div>

			</div>
			
		</div>
	</div>
</section>
<!--================= S-OUR-TEAM END =================-->

<!--================ S-UPCOMING-COURSE ================-->
<section class="s-upcoming-course s-title-bg" style="padding-top: 50px; padding-bottom: 80px;">
	<span class="title-bg-left">Upcoming Conference</span>
	<div class="container">
		<h2 class="title-line">Upcoming Conference</h2>
		<p class="slogan">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.</p>
		<div class="upcoming-course-cover">
			<div class="course-item-left">
				<div class="upcoming-course-item">
					<div class="date-cover">
						<div class="day">12</div>
						<div class="date-info">
							<div class="month">november, 2018</div>
							<div class="name">The Plaza Center</div>
						</div>
					</div>
					<h3 class="title"><a>Information Technology in The Banking Sector</a></h3>
					<div class="upcoming-course-adr">
						<i class="fas fa-map-marker-alt"></i>
						<p>768 Fifth Avenue New York, <br>NY 10019  <span>|</span>  The Plaza Center</p>
					</div>
					<a href="single-events.html" class="btn">register</a>
				</div>
			</div>
			<div class="upcoming-course-img">
				<img src="assets/img/curses-1.jpg" alt="img">
			</div>
		</div>
	</div>
</section>
<!--============== S-UPCOMING-COURSE END ==============-->

<!--==================== S-COUNTER ====================-->
<!-- <section class="s-counter counter-animate counter-active s-bg">
	<div class="mask" style="background-image: url(assets/img/bg-effect-counter.svg);"></div>
	<div class="container">
		<div class="row counter-cover">
			<div class="col-6 col-sm-3 counter-item">
				<div class="counter-number"><span data-number="28">0</span></div>
				<h5>speakers</h5>
			</div>
			<div class="col-6 col-sm-3 counter-item">
				<div class="counter-number"><span data-number="3">0</span>k</div>
				<h5>happy customers</h5>
			</div>
			<div class="col-6 col-sm-3 counter-item">
				<div class="counter-number"><span data-number="650">0</span></div>
				<h5>Places</h5>
			</div>
			<div class="col-6 col-sm-3 counter-item">
				<div class="counter-number"><span data-number="350">0</span></div>
				<h5>Podcasts</h5>
			</div>
		</div>
	</div>
</section> -->
<!--================== S-COUNTER END ==================-->
<?php
include "includes/footer.php";
?>