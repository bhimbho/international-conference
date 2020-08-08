<?php
include "includes/header.php";
?>

<!--=================== PAGE-TITLE ===================-->
<div class="page-title" style="background-image: url(assets/img/bg-head.jpg);">
	<div class="container">
		<h1 class="title-line-left">Contacts</h1>
		<div class="breadcrumbs">
			<ul>
				<li><a href="index.html">Home</a></li>
				<li>Contacts</li>
			</ul>
		</div>
	</div>
</div>
<!--================= PAGE-TITLE END =================-->

<!--================= PAGE-CONTACTS =================-->
<section class="page-contacts" style="padding-top: 80px; padding-bottom: 80px;">
	<div class="container">
		<h2 class="title-line-left">Get in Touch</h2>
		<div class="row">
			<div class="col-12 col-sm-4 page-cont-info text-center">
				<i class="fas fa-map-marker-alt fa-3x contact-icon"></i>
				<h5>Address</h5>
				<p>The Federal Polytechnic<br>Ilaro</p>
			</div>
			
			<div class="col-12 col-sm-4 page-cont-info text-center">
				<i class="fa fa-phone fa-3x contact-icon" aria-hidden="true"></i>
				<h5>Phones</h5>
				<ul class="cont-phone">
					<li><a href="tel:+2348036896807">+2348036896807</a></li>
					<li><a href="tel:+234 803 713 3216">+234 803 713 3216</a></li>
					<li><a href="tel:+234 805 353 4214">+234 805 353 4214</a></li>
					<li><a href="tel:+234 803 410 3100">+234 803 410 3100</a></li>		
							
				</ul>
				
			</div>
			<div class="col-12 col-sm-4 page-cont-info text-center">
				
				<i class="fa fa-envelope fa-3x contact-icon" aria-hidden="true"></i>
				<h5>Email</h5>
				<ul class="cont-email">
					<li><a href="mailto:informex@info.mail">fpi2ndinterconf@federalpolyilaro.edu.ng</a></li>
				</ul>
				
			</div>
		</div>
	</div>
</section>
<!--================= PAGE-CONTACTS END =================-->

<?php
include "includes/footer.php";
?>
<style>
	.contact-icon{
		padding: 30px;
		border: 2px solid #188f8b;
		border-radius: 50%;
		margin-bottom: 10px;
	}
	.fas{
		padding: 25px 30px 25px 30px;
	}
</style>