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
                        <h4 class="page-title">Venue</h4>
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
                        <h4 class="header-title mb-3">Venue</h4>

                        <form method="post" action="logic/add_venue.php" enctype="multipart/form-data">
                            <div class="for-group">
                                <div class="col-md-8 offset-md-2 text-center">
                                <input type="file" name="venue_img" class="form-control dropify">
                                <label class="">Picture</label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Address</label>
                                <input type="text" class="form-control" name="name" aria-describedby="emailHelp" placeholder="Enter Speaker Name">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Hall Name</label>
                                <input type="text" class="form-control" name="institution" aria-describedby="emailHelp" placeholder="Enter Speaker Institution">
                            </div>
                            <div class="form-group">
                               <button type="submit" name="submit" class="btn btn-primary btn-block">Add Speaker</button>
                           </div>
                       </form>
                   </div> <!-- end card-box -->
               </div>
               <div class="col-md-8">
                   <div class="card-box">
                       <h4 class="header-title mb-3">Modify Speaker's Details</h4>
                       <table id="datatable" class="table table-bordered dt-responsive nowrap">
                        <thead>
                            <tr>
                                <th>S/N</th>
                                <th>Venue's Address</th>
                                <th>Venue's Hall</th>
                                <th>Speaker Image</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                             <?php
                                $venue = $venue->view_venue();
                                $count = 0;
                                ?>
                            <tr>
                                <td><?= ++$count?></td>
                                <td><?= $venue->venue_address?></td>
                                <td><?= $venue->venue_hall?></td>
                                <td><img src="../uploads/venue/<?= $venue->venue_picture?>" width="100" height="100"></td>
                                <td><a href="" class="btn btn-primary waves-effect waves-light" data-toggle="modal" data-target="#myModal">Edit</a> <a href="logic/delete_speaker.php?speaker_id=<?= $venue->venue_id?>" class="btn btn-danger waves-effect waves-light">Delete</a></td>
                            </tr>
                        
                        </tbody>
                    </table>
                </div>
            </div>
        </div> <!-- container -->
    </div>


    <!-- sample modal content -->
    <div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel">Edit Conference Details</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                <div class="modal-body">
                    <form method="post">
                        <div class="form-group">
                                <div class="col-md-8 offset-md-2 text-center">
                                <input type="file" name="" class="form-control dropify">
                                <label class="">Passport</label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Speaker's Type</label>
                                <input type="text" class="form-control" name="" value="Senior Speaker">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Speaker's Name</label>
                                <input type="text" class="form-control" name="" value="Font Awesome">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Speaker's Institution</label>
                                <input type="text" class="form-control" name="" value="Federal Polytechnic Ilaro">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Speaker's Email Address</label>
                                <input type="text" class="form-control" name="" value="font@mail.com">
                            </div>
                            <div class="form-group">
                               <button type="submit" name="" class="btn btn-primary btn-block">Update Speaker's Details</button>
                           </div>
                    </form>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->


    <?php
    include "includes/footer.php";
    ?>