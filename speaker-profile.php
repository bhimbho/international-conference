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
		<h2 class="title-line">Our Speakers</h2>
		<p class="slogan">They possess the secret knowledge and interesting experience of creating a digital product.</p>
		<div class="our-speakers-cover">
			<div class="col-md-12 ">
				<div class="row profile-holder">
					<div class="col-md-2 profile-card py-4"></div>
					<div class="col-md-10 py-4"></div>
				</div>
				<div class="container profile-page">
					<div class="row">
						<div class="col-md-3">
							<img src="assets/img/choose-1.jpg" class="img-fluid profile-img">
							<h5 class="text-center">Font Awesome</h5>
							<p class="text-center">PhD, Msc, Bsc, PDP, NNPC, GDP</p>
						</div>
						<div class="col-md-9 profile-details">
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
								tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
								quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
								consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
								cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
							proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
								tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
								quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
								consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
								cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
							proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
								tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
								quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
								consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
								cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
							proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
								tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
								quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
								consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
								cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
							proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
								tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
								quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
								consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
								cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
							proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
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
	height: 140vh;
}
.profile-card{
	background-color: #188F8B;
	height: auto;
}
.profile-page{
	position: absolute;
	top: 50%;
	left: 50%;
	transform: translate(-50%, -50%);
	width: 90%;
	height: auto;
}
.profile-img{
	margin-top: 50px;
	border-top-left-radius: 50px;
	border-bottom-right-radius: 50px;

}
@media(max-width: 576px){
	.profile-holder{
		height: 220vh;
	}
	.profile-card{
		height: 30vh;
	}
	.profile-page{
		width: 100%;
		height: 220vh;
	}
	.profile-img{
		margin-top: 50px;
	}
	.profile-details{
		padding-top: 20px;
	}
}
</style>