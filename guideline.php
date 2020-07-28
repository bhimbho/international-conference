<?php
include "includes/header.php";
?>

<!--=================== PAGE-TITLE ===================-->
<div class="page-title" style="background-image: url(assets/img/bg-page-title.jpg);">
	<div class="container">
		<h1 class="title-line-left">Guidelines</h1>
		<div class="breadcrumbs">
			<ul>
				<li><a href="index.php">Home</a></li>
				<li>Paper Guidelines</li>
			</ul>
		</div>
	</div>
</div>
<!--================= PAGE-TITLE END =================-->

<!--================= PAGE-CONTACTS =================-->
<section class="page-contacts">
	<div class="container">
		<!-- <h2 class="title-line-left">Journal Guidelines</h2> -->
		<div class="row">
			<div class="col-md-12">
				<?= htmlspecialchars_decode($guideline->view_guideline()->guideline);
				?>
			</div>
			
		</div>
	</div>
</section>
<!--================= PAGE-CONTACTS END =================-->

<?php
include "includes/footer.php";
?>