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
                        <h4 class="page-title">Papers Uploaded</h4>
                    </div>
                </div>
            </div>     
            <!-- end page title --> 

            <div class="row">
               <div class="col-md-12">
                   <div class="card-box">
                       <h4 class="header-title mb-3">Papers Uploaded by Authors</h4>
                       <table id="datatable" class="table table-bordered dt-responsive nowrap">
                        <thead>
                            <tr>
                                <th>S/N</th>
                                <th>Uploader</th>
                                <th>Paper Title</th> 
                                <th>Author</th>
                                <th>Institution</th>
                                
                                <th>Paper Pages</th>
                                <th>Date</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                             <?php
                                $journal = $journal->view_all_journals();
                                $count = 0;
                                foreach ($journal as $journal) {?>
                            <tr>
                                <td><?= ++$count ?></td>
                                <td><?= $journal->firstname.' '.$journal->lastname?></td>
                                <td><?= $journal->title?></td>
                                <td><?= $journal->authors?></td>
                                <td><?= $journal->institution?></td>
                                <td><?= $journal->authors?></td>
                                <td><?= $journal->upload_date?></td>
                                <td><a href="view-paper.php?paper_id=<?= $journal->journal_id?>" class="btn btn-primary waves-effect waves-light">View</a> <a href="delete-paper.php?paper_id=<?= $journal->journal_id?>" class="btn btn-danger waves-effect waves-light">Delete</a></td>
                            </tr>
                        <?php }?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div> <!-- container -->
    </div>

<?php
include "includes/footer.php";
?>