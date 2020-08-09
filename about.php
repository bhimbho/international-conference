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

<!--=================== S-OUR-TEAM ===================-->
<section class="s-our-team about-team" style="padding-top: 80px; padding-bottom: 0px;">
	<div class="our-team-bg" style="background-image: url(assets/img/bg-team-about.svg);"></div>
	<div class="container">
		<h2 class="title-line">Conference Organizing Committee</h2>
		<!-- <p class="slogan">They possess the secret knowledge and interesting experience of creating a digital product.</p> -->
		<div class="row team-cover">
			<?php 
				$team = $team->all_team();
				foreach ($team as $team) {?>
			<div class="col-6 col-sm-4 team-item">
				<a href="" class="team-img">
					<img src="uploads/teams/<?= $team->team_pic ?>" alt="team" style="object-fit: contain, width: 100%; min-height: 25em">
				</a>
				<h4 class="title"><?= $team->team_name ?></h4>
				<div class="prof"><?= $team->team_pos ?></div>

			</div>
			<?php }?>
		</div>
	</div>
</section>
<!--================= S-OUR-TEAM END =================-->

<!--================ S-UPCOMING-COURSE ================-->
<section class="s-upcoming-course s-title-bg" style="padding-top: 50px; padding-bottom: 80px;">
	<span class="title-bg-left">Upcoming Conference</span>
	<div class="container">
		<h2 class="title-line">Upcoming Conference</h2>
		<!-- <p class="slogan">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.</p> -->
		<div class="upcoming-course-cover">
			<div class="course-item-left">
				<div class="upcoming-course-item">
					<div class="date-cover">
						<div class="day"><?= $conference->view_up_conference()->day?></div>
						<div class="date-info">
							<div class="month"><?= $conference->view_up_conference()->month.' '.$conference->view_up_conference()->year?></div>
							<!-- <div class="name">The Plaza Center</div> -->
						</div>
					</div>
					<h3 class="title"><a><?= $conference->view_up_conference()->up_theme?></a></h3>
					<div class="upcoming-course-adr">
						<i class="fas fa-map-marker-alt"></i>
						<p><?= $conference->view_up_conference()->location?></p>
					</div>
					<!-- <a href="single-events.html" class="btn">register</a> -->
				</div>
			</div>
			<div class="upcoming-course-img">
				<!-- <img src="uploads/upcoming_conference/<?= $conference->view_up_conference()->up_picture?>" alt="upcoming conference"> -->
				<img src="assets/img/upcoming.jpg" alt="upcoming conference">
				<!-- assets/img/upcoming.jpg -->
			</div>
		</div>
	</div>
</section>
<!--============== S-UPCOMING-COURSE END ==============-->

<!--================== S-COUNTER END ==================-->
<?php
include "includes/footer.php";
?>
<style type="text/css">
@media screen and (max-width: 576px){
	.team-img img{
		min-height: 15em !important;
	}
}
</style>