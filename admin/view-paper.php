 <?php
 include "includes/header.php";
 include "includes/sidebar.php";
 ?>
 <div class="content-page">
    <div class="content">

        <!-- Start Content-->
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box">
                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item active">Dashboard</li>
                            </ol>
                        </div>
                        <h4 class="page-title">View Papers</h4>
                    </div>
                </div>
            </div>     
            <!-- end page title --> 

            <div class="row">
             <div class="col-md-9">
                 <div class="card-box">
                    <?php $journal = $journal->view_specific_journal($journal->Validate($_GET['paper_id']));
                        if($journal){
                    ?>
                     <h4 class="header-title mb-3">View papers Uploaded by Authors</h4>
                     <h4><?= $journal->title ?></h4>
                     <p><?= $journal->authors ?>, Pages <?= $journal->page_no ?>, Uploaded Date: <?= $journal->upload_date ?></p>
                     <h4>Abstract</h4>
                     <p><?= $journal->abstract ?></p>
                     <p>Submitted by: <?= $journal->firstname.' '.$journal->lastname?></p>
                     <p>Email: <?= $journal->email ?></p>
                     <P>Pages: <?= $journal->page_no ?></p>
                     </div>
                 </div>
                 <div class="col-md-3">
                     <div class="card-box">
                        <div class="row">
                            <div class="col-md-12 text-center">
                                <i class="dripicons-document" style="font-size: 60px; border: 2px solid black; padding:20px 25px; border-radius: 50%"></i>
                                <div class="clearfix"></div>
                                <a href="../uploads/files/<?= $journal->file ?>" download class="btn btn-primary mt-4 btn-block">Download Paper</a>
                            </div>
                        </div>
                     </div>
                 </div>
             <?php }else{?>
                <h4>No result found</h4>
            <?php }?>
             </div> <!-- container -->
         </div>

         <?php
         include "includes/footer.php";
         ?>






