<?php
include "includes/header.php";
?>

<!--=================== PAGE-TITLE ===================-->
<div class="page-title" style="background-image: url(assets/img/bg-head.jpg);">
	<div class="container">
		<h1 class="title-line-left">Conference Papers</h1>
		<div class="breadcrumbs">
			<ul>
				<li><a href="index.php">Home</a></li>
				<li>Conference Papers</li>
			</ul>
		</div>
	</div>
</div>
<!--================= PAGE-TITLE END =================-->

<!--================= PAGE-CONTACTS =================-->
<section class="page-contacts">
	<div class="container">
		<h2 class="title-line-left">Conference Papers</h2>
		<div class="row">
			<div class="col-md-8">
				<?php
						if(isset($_POST['send'])){
							$get_new_journals = $journal->search_by_title_author_institution($_POST['search']);
						}
						else{
							$get_new_journals = $journal->view_all_new_journals();
						}
						foreach ($get_new_journals as $get_new_journals) { ?>
				<div class="row journal-holder">
					<div class="col-md-3">
						<img src="assets/img/about-1.jpg" class="img-fluid">
					</div>
					<div class="col-md-9">
						<a href="view-journal.php?pull=<?= $get_new_journals->new_upload_id?>" class="font-weight-bold h5 mb-3"><?= $get_new_journals->title?></a>
						<p><?= substr($get_new_journals->abstract, 0, 150).'....' ?></p>
						<a href="uploads/new_uploads/<?= $get_new_journals->file_name?>" class="btn mt-3 rounded-0">Download Paper</a>
					</div>
				</div>	
				<?php }?>		
			</div>
			<div class="col-md-4">
				<h4 class="title-line-left mb-3">Search Paper</h4>
				<form action="" method="post">
					<div class="input-group">
						<input type="text" name="search" class="form-control search-input rounded-0">
						<button class="btn search-btn input-control rounded-0" name="send"> <i class="fa fa-search"></i></button>
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