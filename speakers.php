<?php
include "includes/header.php";
?>

	<!--=================== PAGE-TITLE ===================-->
	<div class="page-title" style="background-image: url(assets/img/bg-head.jpg);">
		<div class="container">
			<h1 class="title-line-left">Speakers</h1>
			<div class="breadcrumbs">
				<ul>
					<li><a href="index.html">Home</a></li>
					<li>Speakers</li>
				</ul>
			</div>
		</div>
	</div>
	<!--================= PAGE-TITLE END =================-->

	<!--=================== OUR-SPEAKERS ===================-->
	<section class="our-speakers" style="margin-bottom: 6%;">
		<div class="container">
			<h2 class="title-line">Our Speakers</h2>
			<p class="slogan">They possess the secret knowledge and interesting experience of creating a digital product.</p>
			<div class="our-speakers-cover">
				<?php
					$speaker = $speakers->all_speakers();
					foreach ($speaker as $speaker) {?>
				<div class="speaker-item">
					<div class="speaker-item-img">
						<img class="lazy" src="uploads/speakers_picture/<?= $speaker->picture ?>" data-src="uploads/speakers_picture/<?= $speaker->picture ?>" alt="img">
					</div>
					<div class="speaker-item-content">
						<h3><?= $speaker->name ?></h3>
						<div class="prof"><?= $speaker->type ?></div>
						<p><?= $speaker->profile ?></p>
						<a href="speaker-profile.php" class="btn btn-yellow">Profile</a>
					</div>
				</div>
			<?php }?>
			</div>
		</div>
	</section>
	<!--================= OUR-SPEAKERS END =================-->
	<?php

	include "includes/footer.php";
	?>