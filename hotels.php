<?php
include "includes/header.php";
?>

<!--=================== PAGE-TITLE ===================-->
<div class="page-title" style="background-image: url(assets/img/bg-page-title.jpg);">
	<div class="container">
		<h1 class="title-line-left">Hotels</h1>
		<div class="breadcrumbs">
			<ul>
				<li><a href="index.php">Home</a></li>
				<li>Hotels</li>
			</ul>
		</div>
	</div>
</div>
<!--================= PAGE-TITLE END =================-->

<!--================= PAGE-CONTACTS =================-->
<section class="page-contacts">
	<div class="container">
		<h2 class="title-line-left">Hotel Details</h2>
		<div class="row">
			<div class="col-md-12">
				<table class="table table-striped">
					<thead>
						<tr>
							<th class="font-weight-bold">S/N</th>
							<th class="font-weight-bold">Hotel Name</th>
							<th class="font-weight-bold">Rates</th>
							<th class="font-weight-bold">Rooms</th>
							<th class="font-weight-bold">Location</th>
							<th class="font-weight-bold">Contact</th>
						</tr>
					</thead>
					<tbody>
						 <?php
                                $hotels = $hotel->all_hotels('DESC');
                                $count = 0;
                                foreach ($hotels as $hotels) {?>

						<tr>
							<th><?= ++$count ?></th>
							<td><?= $hotels->hotel_name ?></td>
							<td><?= $hotels->location ?></td>
							<td><?= html_entity_decode($hotels->room) ?></td>
							<td><?= html_entity_decode($hotels->rate) ?></td>
							<td><?= $hotels->contact ?></td>
						</tr>
						<?php }?>
					</tbody>
				</table>
			</div>
			
		</div>
	</div>
</section>
<!--================= PAGE-CONTACTS END =================-->

<?php
include "includes/footer.php";
?>