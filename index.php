<?php
include "includes/header.php";
?>
	<!--==================== MAIN-TWO ====================-->
	<section class="main-two">
		<div class="main-slider-two">
			<div class="main-slide-two">
				<div class="main-slide-date"></div>
				<div class="main-slider-bg" style="background-image: url(assets/img/bg-slider-home2.svg);"></div>
				<img class="img-slide" src="assets/img/home-2-slide-1.png" alt="img">
				<div class="container">
					<div class="main-slide-item">
						<div class="date-slide">January 17, 2019 / Washington DC</div>
						<h2><span>Conference on Software</span>Engineering Practices</h2>
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
			</div>
		</div>
		<div class="main-arrow-cover">
			<div class="container">
				<div class="main-slide-arrow"></div>
			</div>
		</div>
	</section>
	<!--=================== MAIN-TWO END ===================-->

	<!--==================== S-ABOUT ====================-->
	<section class="s-about-home-two">
		<div class="container">
			<div class="row">
				<div class="col-12 col-md-6 about-info">
					<h2 class="title-line-left">More Than a Conference</h2>
					<div class="about-slogan-home-two">Lorem ipsum dolor sit amet, consectetur adipiscing elit,  sed do eiusmod tempor incididunt ut labore.</div>
					<div class="about-info-text">
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusm od tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
					</div>
					<ul class="soc-link">
						<li><a target="_blank" href="https://www.facebook.com/rovadex"><i class="fab fa-facebook-f"></i></a></li>
						<li><a target="_blank" href="https://www.instagram.com/rovadex"><i class="fab fa-instagram"></i></a></li>
						<li><a target="_blank" href="https://www.youtube.com"><i class="fab fa-youtube"></i></a></li>
						<li><a target="_blank" href="https://vimeo.com/"><i class="fab fa-vimeo"></i></a></li>
					</ul>
					<a href="events.html" class="btn btn-yellow rounded-0">read more</a>
				</div>
				<div class="col-12 col-md-6 about-img">
					<a data-fancybox href="https://www.youtube.com/watch?v=_sI_Ps7JSEk&amp;autoplay=1&amp;rel=0&amp;controls=0&amp;showinfo=0">
						<img class="lazy" src="assets/img/placeholder-all.png" data-src="assets/img/news-2.jpg" alt="img">
					</a>
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
						<img class="lazy" src="uploads/speakers_picture/<?= $speaker->picture ?>" data-src="uploads/speakers_picture/<?= $speaker->picture ?>" alt="img">
					</div>
					<div class="speaker-item-content">
						<h3><?= $speaker->name ?></h3>
						<div class="prof"><?= $speaker->type ?></div>
						<p><?= $speaker->profile ?></p>
						
					</div>
				</div>
			<?php }?>
			</div>
		</div>
	</section>
	<!--================ OUR-SPEAKERS END ================-->

	<!--================= S-SCHEDULE-EVENT =================-->
	<section class="s-schedule-event schedule-event-home-two">
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
					<div class="schedule-content">
						
					</div>
				</li>
			<?php }?>
			</ul>
		</div>
	</section>
	<!--=============== S-SCHEDULE-EVENT END ===============-->

	<!--===================== S-VENUE =====================-->
	<section class="s-venue">
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
	<section class="s-partners partners-home-two">
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
	</section>
	<!--================== S-PARTNERS END ==================-->
<?php
include "includes/footer.php";
?>