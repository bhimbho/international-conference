<?php
include "includes/header.php";
?>

<!--=================== PAGE-TITLE ===================-->
<div class="page-title" style="background-image: url(assets/img/bg-head.jpg);">
	<div class="container">
		<h1 class="title-line-left">Registration Fee</h1>
		<div class="breadcrumbs">
			<ul>
				<li><a href="index.php">Home</a></li>
				<li>Paper Registration Fee</li>
			</ul>
		</div>
	</div>
</div>
<!--================= PAGE-TITLE END =================-->

<!--================= PAGE-CONTACTS =================-->
<section class="page-contacts" style="padding-top: 80px; padding-bottom: 80px;">
	<div class="container">
		<h2 class="title-line-left">Registration Fee</h2>
		<div class="row">
			<div class="col-md-12">
				<div class="card">
					<div class="card-body">
						<div class="row">
							<div class="col-md-4" style="border-right: 1px solid lightgray">
								<img src="assets/img/payment.png" class="img-fluid">
							</div>
							<div class="col-md-8">
								<h4>Bank Details</h4>
								<table class="table">
									<?php
										$reg_fee = $reg_fee->view_reg_fee();
									?>
									<tr>
										<td><span class="font-weight-bold">Bank Name: </span></td>
										<td><span> <?= $reg_fee->bank ?></span></td>
									</tr>
									<tr>
										<td><span class="font-weight-bold">Account Name: </span></td>
										<td><span> <?= $reg_fee->account_name ?></span></td>
									</tr>
									<tr>
										<td><span class="font-weight-bold">Account Number: </span></td>
										<td><span> <?= $reg_fee->account_number ?></span></td>
									</tr>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
			
		</div>
	</div>
</section>
<!--================= PAGE-CONTACTS END =================-->

<?php
include "includes/footer.php";
?>