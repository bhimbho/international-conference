<?php session_start(); 
include('classes/autoload.php');
admin_autoloader_no_step();
$conference = new conference;
$speakers = new speakers;
$guideline = new guideline;
$hotel = new hotel;
$reg_fee =  new registration_fee;
$journal =  new journal;
$venue =  new venue;
?>
<!DOCTYPE html>
<html lang="zxx">
<head>
	<meta charset="UTF-8">
	<title>Informex</title>
	<!-- ===================== META ===================== -->
	<meta name="keywords" content="">
	<meta name="description" content="">
	<meta name="format-detection" content="telephone=no">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="shortcut icon" href="assets/img/favicon.png">
	<!-- ===================== STYLE ===================== -->
	<link rel="stylesheet" href="assets/css/slick.min.css">
	<link rel="stylesheet" href="assets/css/bootstrap-grid.css">
	<link rel="stylesheet" href="assets/css/bootstrap.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />
	<link rel="stylesheet" href="assets/css/style.css">
</head>

<body id="home" class="version-2" style="background-color: #fff;">
	<!--===================== HEADER =====================-->
	<header class="header-two">
		<a href="#" class="nav-btn">
			<span></span>
			<span></span>
			<span></span>
		</a>
		<div class="header-two-top">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-12 col-md-6 col-lg-3 logo-two-cover">
						<a href="index.html" class="logo-footer">
							<img src="assets/img/logo.png" alt="logo">
							<div class="logo-text"><span>INtl.</span>Conference</div>
						</a>
					</div>
					<div class="col-3 header-top-info"></div>
					<div class="col-3 header-top-info"></div>
					<div class="col-12 col-sm-6 col-lg-3 header-two-btn">
						<a href="register.php" class="btn">register</a>
					</div>
				</div>
			</div>
		</div>
		<div class="header-menu header-menu-two">
			<div class="container">
				<div class="row">
					<div class="col-10">
						<nav class="nav-menu">
							<ul class="nav-list">
								<li><a href="index.php">Home</a></li>
								<li><a href="about.php">About us</a></li>
								<li><a href="speakers.php">Speakers</a></li>
								<li><a href="schedule.php">Schedule</a></li>
								<li><a href="hotels.php">Hotels</a></li>
								<li><a href="contacts.php">Contacts</a></li>
							</ul>
						</nav>
					</div>
					<!-- <div class="col-2">
						<div class="header-two-search">
							<div class="header-search-icon">
								<i class="fas fa-search"></i>
							</div>
							<form action="#">
								<input type="search" name="search" placeholder="Search">
								<button class="btn-search rounded-0" type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
							</form>
						</div>
					</div> -->
				</div>
			</div>
		</div>
	</header>
	<!--=================== HEADER END ===================-->