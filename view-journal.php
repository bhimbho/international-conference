<?php
include "includes/header.php";
?>

<!--=================== PAGE-TITLE ===================-->
<div class="page-title" style="background-image: url(assets/img/bg-page-title.jpg);">
	<div class="container">
		<h1 class="title-line-left">View Journal</h1>
		<div class="breadcrumbs">
			<ul>
				<li><a href="index.php">Home</a></li>
				<li>View Journal</li>
			</ul>
		</div>
	</div>
</div>
<!--================= PAGE-TITLE END =================-->

<!--================= PAGE-CONTACTS =================-->
<section class="page-contacts">
	<div class="container">
		<?php
			$pull = $journal->view_specific_new_journal($_GET['pull']);
		?>
		<h4 class="title-line-left"><?= $pull->title ?></h4>
		<p class="font-weight-bold"><?= $pull->authors ?>, July 2020 Pages<?= $pull->page_no ?>, Published: <?= $pull->date_upload_created ?></p>
		<div class="row">
			<div class="col-md-12">
				<?= htmlspecialchars_decode($pull->abstract) ?>
			</div>
			
		</div>
	</div>
</section>
<!--================= PAGE-CONTACTS END =================-->

<?php
include "includes/footer.php";
?>