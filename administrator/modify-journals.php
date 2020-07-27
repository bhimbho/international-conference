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
                        <h4 class="page-title">Modify Journal</h4>
                    </div>
                </div>
            </div>     
            <!-- end page title --> 
            <?php 
                if(isset($_GET['journal'])){
                    $journal_id = filter_var(trim($_GET['journal']), FILTER_SANITIZE_STRING);
                    $this_journal = $journal->view_specific_journal($journal_id);
                }
            ?>
            <div class="row">
                <div class="col-8">
                    <div class="card">
                        <div class="card-body">

                            <h4 class="text-uppercase"><?= $this_journal->title ?></h4>
                            <p><?= $this_journal->authors ?>, <b><?= ($this_journal->volume_id == "0") ? "No Volume Yet" : $journal->get_volume($this_journal->volume_id)->volume_name;?></b>, August 2019, Pages <?= $this_journal->page_no ?>, https://doi.org/10.1093/adaptation/apy006 Published: <?= $this_journal->publish_date ?></p>
                            <hr>
                            <h4>Abstract</h4>
                            <hr>
                            <p><?= $this_journal->abstract ?></p>

                            <h4>Submitted by: <?= $this_journal->firstname.' '.$this_journal->lastname ?></h4>
                            <h6>Email: <?= $this_journal->email ?></h6>
                            <h6>Email: <?= $this_journal->phone ?></h6>
                            <h5>Pages: <span class="badge badge-dark"><?= $this_journal->page_no ?></span></h5>
                        </div> <!-- end card body-->
                    </div> <!-- end card -->
                </div><!-- end col-->
                <div class="col-4">

                    <div class="card">
                        <div class="card-body">
                            <a href="docs/<?php echo $this_journal->file ?>" download class="btn btn-info btn-block">Download Journal</a>
                            <form class="mt-3" method="post" action="logic/assign_volume.php">
                                <?php 
                                    include 'error.php';
                                ?>
                                <div class="form-group">
                                    <label>Journal Title</label>
                                    <input type="text" name="" value="<?= $this_journal->title ?>" class="form-control" readonly>
                                    <input type="hidden" name="journal_id" value="<?= $this_journal->journal_id ?>" class="form-control" readonly>
                                </div>
                                <div class="form-group">
                                    <label>Assign Volume</label>
                                    <select class="form-control" name="volume_id">
                                        <option>--Select Volume--</option>
                                        <?php 
                                        $vol = $journal->all_volumes();
                                        foreach ($vol as $vol) {?>
                                        <option value="<?php echo $vol->volume_id?>"><?php echo $vol->volume_name?></option>
                                        <?php     # code...
                                        }?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <button class="btn btn-info btn-block" name="assign">Assign Volume & Approve</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
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