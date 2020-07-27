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
                        <h4 class="page-title">Upload Papers</h4>
                    </div>
                </div>
            </div>     
            <!-- end page title --> 

            <div class="row">
                <div class="col-md-4">
                    <div class="card-box">
                        <?php 
                                if(isset($_SESSION['err'])){?>
                                    <div class="alert alert-danger"><?= $_SESSION['err'] ?></div>
                                <?php unset($_SESSION['err']);} if(isset($_SESSION['success'])) {?>
                                    <div class="alert alert-success"><?= $_SESSION['success'] ?></div>
                                <?php unset($_SESSION['success']);}
                            ?>
                        <h4 class="header-title mb-3">Upload Papers</h4>

                        <form method="post" action="logic/upload-paper.php" enctype="multipart/form-data">
                            <div class="form-group">
                                
                                <input type="file" class="form-control dropify" name="file">
                                <label for="exampleInputEmail1">Paper File</label>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Participant</label>
                                <select type="text" class="form-control" name="participant" required>
                                    <option selected disabled value="">-- Select Participant --</option>
                                    <?php  
                                        $all = $journal->view_all_journals();
                                        foreach ($all as $all) {?>
                                        
                                    <option value="<?= $all->journal_id?>"><?= $all->firstname.' '.$all->lastname?></option>
                                <?php }?>
                                </select>
                            </div>
                            <div class="form-group">
                               <button type="submit" name="submit" class="btn btn-primary btn-block">Add New Upload</button>
                           </div>
                       </form>
                   </div> <!-- end card-box -->
               </div>
               <div class="col-md-8">
                   <div class="card-box">
                       <h4 class="header-title mb-3">Modify Account Details</h4>
                       <table id="datatable" class="table table-bordered dt-responsive nowrap">
                        <thead>
                            <tr>
                                <th>S/N</th>
                                <th>Journal For: </th>
                                <th>Authors</th>
                                <th>Title</th>
                                <th>File</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                             <?php
                                $newjournal = $journal->view_all_new_journals();
                                $count = 0;
                                foreach ($newjournal as $newjournal) {?>
                            <tr>
                                <td><?= ++$count?></td>
                                <td><?= $newjournal->firstname.' '. $newjournal->lastname?></td>
                                <td><?= $newjournal->authors ?></td>
                                <td><?= $newjournal->title ?></td>
                                <td><a class="badge badge-primary" href="../uploads/new_uploads/<?= $newjournal->file_name ?>" download>Download</a></td>
                                <td><a href="logic/delete_new_paper.php?upload_id=<?= $newjournal->new_upload_id ?>" class="btn btn-danger waves-effect waves-light">Delete</a></td>
                            </tr>
                        <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div> <!-- container -->
    </div>

<?php
include "includes/footer.php";
?>