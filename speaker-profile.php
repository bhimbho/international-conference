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
				<li>Speaker Profile</li>
			</ul>
		</div>
	</div>
</div>
<!--================= PAGE-TITLE END =================-->

<!--=================== OUR-SPEAKERS ===================-->
<section class="our-speakers" style="margin-bottom: 6%; padding-top: 80px; padding-bottom: 0px;">
	<div class="container">
		<?php
		$speaker =$speakers->view_speaker($_GET['speaker_id']);
		?>
		<h2 class="title-line">Our Speakers</h2>
		<p class="slogan">They possess the secret knowledge and interesting experience worth listening to.</p>
		<div class="our-speakers-cover" style="height: auto !important;">
			<div class="col-md-12 ">
				<div class="row profile-holder">
					<div class="col-md-3 profile-card py-4">
						<img src="uploads/speakers_picture/<?= $speaker->picture ?>" class="img-fluid profile-img">
						<h5 class="text-center"><?= $speaker->name ?></h5>
						<p class="text-center text-white"><?= $speaker->type ?></p>
					</div>
					<div class="col-md-9 profile-details pt-3 pb-4">
						<?= html_entity_decode($speaker->profile) ?>
					</div>
				</div>
				<div class="container profile-page">
					<div class="row">
						<div class="col-md-3">
							
						</div>
						
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!--================= OUR-SPEAKERS END =================-->
<?php

include "includes/footer.php";
?>
<style>
.profile-holder{
	box-shadow: 0px 5px 10px 0px rgba(0,0,0,0.2);
	position: relative;
}
.profile-card{
	background-color: #188F8B;
	height: auto;
}

.profile-img{
	margin-top: 50px;
	border-top-left-radius: 50px;
	border-bottom-right-radius: 50px;

}
@media(max-width: 576px){

	.profile-details{
		padding-top: 20px;
	}
}
</style>
