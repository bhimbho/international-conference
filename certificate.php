<?php
include "includes/header.php";
?>
<style>
	body{
		background: #eee !important;
	}
	.alert-danger{
		display: none;
	}
</style>
<!--=================== PAGE-TITLE ===================-->
<div class="page-title" style="background-image: url(assets/img/bg-head.jpg);">
	<div class="container">
		<div class="alert alert-danger alert-dismissible fade show" role="alert">
		  Please do search for your name.
		   <button type="button" class="close" data-dismiss="alert" aria-label="Close">
		    <span aria-hidden="true">&times;</span>
		  </button>
		</div>
		<form method="post" action="">
			<div class="row">
				<div class="col-md-8">
					<div class="form-group">
						<input type="text" name="search" class="form-control" id="certName" placeholder="Enter your name">
					</div>
				</div>
				<div class="col-md-4">
					<div class="form-group">
						<button class="btn genCert" name="submit">Generate Certificate</button>
					</div>
				</div>
			</div>
		</form>
	</div>
</div>
<!--================= PAGE-TITLE END =================-->

<!--================= PAGE-CONTACTS =================-->
<section class="page-contacts" style="padding-top: 80px; padding-bottom: 80px;">
	<div class="container">
		<div>
			<?php
				if (isset($_POST['submit'])) {
					echo '<h5>Click on your name?</h5>';
					$result = $journal->search_certificate(strtolower($journal->text_val($_POST['search'])));
					// var_dump($result);
					foreach ($result as $result) {?>
			<a href=""><span class="badge badge-success" aria-label="<?= $result->title?>"><?= ucwords($result->firstname.' '.$result->lastname) ?></span></a>
			<?php 	# code...
					}
				}
			?>
		</div>
		<div class="row certificate-body">
			<div class="col-12 cert-holder" id="content" style="">
				<img src="assets/img/cert.jpg" class="certificate-image">
				<h2 class="certiticate-name"></h2>
				<p class="paper-title"></p>
			</div>
			<div class="col-12 text-center mt-5">
				<button class="btn downloadCert">Download Certificate</button>
			</div>
		</div>
		
	</div>
</section>
<!--================= PAGE-CONTACTS END =================-->

<?php
include "includes/footer.php";
?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.4.1/html2canvas.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.5.3/jspdf.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.5.3/jspdf.debug.js"></script>
<script>
	$(function(){
		$(".alert-danger").hide();
		$(".certificate-body").hide();
		$(".certificate-image").hide();
		$("a .badge").click(function(e){
			e.preventDefault();
			var certName = $(this).text();
			var title = $(this).attr('aria-label');
			if(certName == ''){
				$(".alert-danger").show();
			}
			else{
				$(".certificate-body").show();
				$(".certificate-image").show();
				$(".certiticate-name").text(certName);
				$(".paper-title").text(title);
			}
		});

$('.downloadCert').click(function () {
	var doc = new jsPDF('l', 'pt', 'a4');
	var width = doc.internal.pageSize.getWidth();
	var height = doc.internal.pageSize.getHeight();
	doc.addHTML(document.getElementById('content'),function() {
    	doc.save('certificate.pdf');
		})
	})
})
</script>
<style>
@import url('https://fonts.googleapis.com/css2?family=Alex+Brush&display=swap');
.certificate-image{
	position: relative;
	max-width: 100%;
	height: auto;
}
.certiticate-name{
	font-family: 'Alex Brush', cursive;
	font-size: 60px;
	position: absolute;
	top: 52%;
	left: 50%;
	transform: translate(-50%, -50%);
	width: 90%;
	text-align: center;
	color: #000 !important;
}
.paper-title{
	font-size: 20px;
	position: absolute;
	top: 63%;
	left: 50%;
	transform: translate(-50%, -50%);
	width: 80%;
	text-align: center;
	color: #000 !important;
	line-height: 25px;
}
.cert-holder{
	width: 100%;
}
#content{
		background-color: white !important;
	}
	@media print { 
		#content img{
			max-width: 100%;
			max-height: 100%;
		}
}

</style>