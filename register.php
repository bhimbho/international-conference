<?php
include "includes/header.php";
?>

<!--=================== PAGE-TITLE ===================-->
<div class="page-title" style="background-image: url(assets/img/bg-page-title.jpg);">
	<div class="container">
		<h1 class="title-line-left">Register</h1>
		<div class="breadcrumbs">
			<ul>
				<li><a href="index.php">Home</a></li>
				<li>Register</li>
			</ul>
		</div>
	</div>
</div>
<!--================= PAGE-TITLE END =================-->

<!--================= PAGE-CONTACTS =================-->
<section class="page-contacts">
	<div class="container">
		<h2 class="title-line-left">Register Your Papers</h2>
		<div class="row">
			<div class="col-12 col-sm-12">
				<form id='contactform' action="" name="contactform">
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<input type="text" name="" class="form-control rounded-0" placeholder="Surname">
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<input type="text" name="" class="form-control rounded-0" placeholder="Other Name">
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<input type="text" name="" class="form-control rounded-0" placeholder="Institution">
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<input type="text" name="" class="form-control rounded-0" placeholder="Paper Title">
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<input type="file" name="" class="form-control rounded-0 file" placeholder="File">
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<input type="text" name="" class="form-control rounded-0" placeholder="Pages">
							</div>
						</div>
						<div class="col-md-12">
							<div class="form-group">
								<textarea class="form-control rounded-0" rows="8" style="resize: none">Abstract</textarea>
							</div>
						</div>
					</div>
					<div class="btn-form-cover">
						<button id="#submit" type="submit" class="btn rounded-0">Register Paper</button>
					</div>
				</form>
				<div id="message"></div>
			</div>
		</div>
	</div>
</section>
<!--================= PAGE-CONTACTS END =================-->
<style>
	.form-control{
		padding-left: 15px !important;
	}
	textarea:focus, .file:focus{
		border-color: #2ccfbb;
		box-shadow: 0px 0px 10px 0px rgba(44,207,187,0.65) !important;
	}
</style>
<?php
include "includes/footer.php";
?>