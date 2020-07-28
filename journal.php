<?php
include "includes/header.php";
?>

<!--=================== PAGE-TITLE ===================-->
<div class="page-title" style="background-image: url(assets/img/bg-page-title.jpg);">
	<div class="container">
		<h1 class="title-line-left">Journals</h1>
		<div class="breadcrumbs">
			<ul>
				<li><a href="index.php">Home</a></li>
				<li>Journals</li>
			</ul>
		</div>
	</div>
</div>
<!--================= PAGE-TITLE END =================-->

<!--================= PAGE-CONTACTS =================-->
<section class="page-contacts">
	<div class="container">
		<h2 class="title-line-left">Journals</h2>
		<div class="row">
			<div class="col-md-8">
				<div class="row journal-holder">
					<div class="col-md-3">
						<img src="assets/img/about-1.jpg" class="img-fluid">
					</div>
					<div class="col-md-9">
						<a href="view-journal.php" class="font-weight-bold h5 mb-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.</a>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua.</p>
						<a href="" class="btn mt-3 rounded-0">Download Journal</a>
					</div>
				</div>
				<div class="row journal-holder">
					<div class="col-md-3">
						<img src="assets/img/about-1.jpg" class="img-fluid">
					</div>
					<div class="col-md-9">
						<a href="" class="font-weight-bold h5 mb-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.</a>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua.</p>
						<a href="" class="btn mt-3 rounded-0">Download Journal</a>
					</div>
				</div>					
			</div>
			<div class="col-md-4">
				<h4 class="title-line-left mb-3">Search Journals</h4>
				<form>
					<div class="input-group">
						<input type="text" name="" class="form-control search-input rounded-0">
						<button class="btn search-btn input-control rounded-0"> <i class="fa fa-search"></i></button>
					</div>
				</form>
				<hr>
			</div>
			
		</div>
	</div>
</section>
<!--================= PAGE-CONTACTS END =================-->
<style>
	.btn:hover{
		color: white !important;
	}
	.journal-holder{
		margin-bottom: 30px;
	}
	.form-control{
		padding-left: 15px !important;
	}
	.search-btn{
		width: 10%;
		padding: 0 30px 0 20px;
		text-align: center !important;
		line-height: 10px !important;
	}
	@media(max-width: 576px){
		.journal-holder h5{
			margin-top: 40px;
		}
	}
</style>
<?php
include "includes/footer.php";
?>