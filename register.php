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
				 <?php 
                                if(isset($_SESSION['err'])){?>
                                    <div class="alert alert-danger"><?= $_SESSION['err'] ?></div>
                                <?php unset($_SESSION['err']);} if(isset($_SESSION['success'])) {?>
                                    <div class="alert alert-success"><?= $_SESSION['success'] ?></div>
                                <?php unset($_SESSION['success']);}
                            ?>
				<form id='' action="includes/add_journal.php" method="post" enctype="multipart/form-data">
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								0<input type="text" name="surname" class="form-control rounded-0" placeholder="Surname">
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								1<input type="text" name="lastname" class="form-control rounded-0" placeholder="Other Name">
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								2<input type="text" name="institution" class="form-control rounded-0" placeholder="Institution">
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								3<input type="text" name="title" class="form-control rounded-0" placeholder="Paper Title">
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								4<input type="email" name="email" class="form-control rounded-0" placeholder="mail@mail.com">
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								5<input type="text" name="phone" class="form-control rounded-0" placeholder="+234">
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<input type="file" name="file" class="form-control rounded-0 file" placeholder="File">
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								6<input type="text" name="page_no" class="form-control rounded-0" placeholder="150">
							</div>
						</div>
						<div class="col-md-12">
							<div class="form-group">
								7<textarea class="form-control rounded-0" rows="8" style="resize: none" name="authors" placeholder="Authors"></textarea>
							</div>
						</div>
						<div class="col-md-12">
							<div class="form-group">
								8<textarea class="form-control rounded-0" name="abstract" rows="8" style="resize: none" placeholder="Abstract"></textarea>
							</div>
						</div>
					</div>
					<div class="btn-form-cover">
						<button id="#submit" type="submit" name="submit" class="btn rounded-0">Register Paper</button>
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