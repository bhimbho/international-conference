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
                                <li class="breadcrumb-item"><a href="javascript: void(0);">WITED</a></li>
                                <li class="breadcrumb-item active"><a href="javascript: void(0);">Journals</a></li>
                            </ol>
                        </div>
                        <h4 class="page-title">Journals</h4>
                    </div>
                </div>
            </div>     
            <!-- end page title --> 

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                         <?php 
                                    include 'error.php';
                                ?>

                            <div class="table-responsive">
                                <table id="basic-datatable" class="table dt-responsive nowrap">
                                    <thead>
                                        <tr>
                                            <th>S/N</th>
                                            <th>Authors</th>
                                            <!-- <th>Email</th> -->
                                            <!-- <th>Phone Number</th> -->
                                            <th>Journal Title</th>
                                            <th>Abstract</th>
                                            <th>Page No</th>
                                            <th>Publish Status</th>
                                            <th>Date uploaded</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        
                                        $count = 0;
                                        $all_jounrals = $journal->view_all_journals();
                                        foreach ($all_jounrals as $all_jounrals) {?>
                                        <tr>
                                            <td><?= ++$count ?></td>
                                            <td><?= $all_jounrals->authors ?></td>
                                            <td><?= $all_jounrals->title ?></td>
                                            <td><?= substr($all_jounrals->abstract,0,30)."..." ?></td>
                                            <td><?= $all_jounrals->page_no ?></td>
                                            <td><?= ($all_jounrals->publish_status == "0") ? "unpublished" : "published";?></td>
                                            <td><?= $all_jounrals->upload_date ?></td>
                                            <td><a href="modify-journals.php?journal=<?php echo  $all_jounrals->journal_id ?>" class="btn btn-primary waves-effect waves-light">View</a> <a href="logic/unpublish-journal.php?journal=<?php echo  $all_jounrals->journal_id ?>" class="btn btn-success">Unpublish</a> <a href="logic/delete_journal.php?journal=<?php echo  $all_jounrals->journal_id ?>" class="btn btn-danger">Delete</a></td>
                                        </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div> <!-- end card body-->
                    </div> <!-- end card -->
                </div><!-- end col-->
            </div>
            <!-- end row-->
        </div> <!-- container -->

    </div> <!-- content -->

    <?php
    include "includes/footer.php";
    ?>
    <!-- Long Content Scroll Modal -->
    <div class="modal fade" id="exampleModalScrollable" tabindex="-1" role="dialog"
    aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalScrollableTitle">Journal: The importance of Malaria drugs in Africa</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <embed src="docs/work.pdf" type="application/pdf" width="100%" height="100%"></embed>
            </div>
        </div>
    </div>
</div>