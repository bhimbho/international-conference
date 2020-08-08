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
                        <h4 class="page-title">Conference</h4>
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
                        <h4 class="header-title mb-3">Conference</h4>

                        <form method="post" action="logic/conference.php">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Conference Theme</label>
                                <input type="text" class="form-control" name="theme" aria-describedby="emailHelp" placeholder="Enter Conference Theme">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Conference Sub-Theme</label>
                                <input type="text" class="form-control" name="subtheme" aria-describedby="emailHelp" placeholder="Enter Conference Sub-theme">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Email</label>
                                <input type="email" class="form-control" name="email" placeholder="3mail@mail.com">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Conference Date</label>
                                <input type="text" class="form-control" name="date" placeholder="3rd of June 2020 to 4th June 2020">
                            </div>
                           <!--  <div class="form-group">
                                <label for="exampleInputEmail1">About</label>
                                <textarea class="form-control" name="about" placeholder="Enter About" rows="5"></textarea>
                            </div> -->
                            <div class="form-group">
                               <button type="submit" name="submit" class="btn btn-primary btn-block">Add Conference</button>
                           </div>
                       </form>
                   </div> <!-- end card-box -->
               </div>
               <div class="col-md-8">
                   <div class="card-box">
                       <h4 class="header-title mb-3">Modify Conference</h4>
                       <table id="datatable" class="table table-bordered dt-responsive nowrap">
                        <thead>
                            <tr>
                                <th>S/N</th>
                                <th>Conference Theme</th>
                                <th>Conference Sub Theme</th>
                                <th>Conference Date</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $conf = $conference->all_conference();
                                $count = 0;
                                foreach ($conf as $conf) {?>
                                    
                            <tr>
                                <td><?= ++$count?></td>
                                <td><?= $conf->theme?></td>
                                <td><?= $conf->sub_theme?></td>
                                <td><?= $conf->date?></td>
                                <td><a href="" class="btn btn-primary waves-effect waves-light" data-toggle="modal" data-target="#myModal" arial-data="<?= $conf->conference_id ?>">Edit</a> <a href="logic/delete_conference.php?conf_id=<?= $conf->conference_id ?>" class="btn btn-danger">Delete</a></td>
                            </tr>
                        <?php }?>
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
                            <label for="exampleInputEmail1">Conference Theme</label>
                            <input type="text" class="form-control" name="" value="Building for tomorrow's substainability">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Conference Sub-Theme</label>
                            <input type="text" class="form-control" name="" value="Lorem ipsum dolor sit amet.">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Conference Date</label>
                            <input type="date" class="form-control" name="" value="">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Conference Venue</label>
                            <input type="text" class="form-control" name="" value="International Conference Center">
                        </div>
                        <div class="form-group">
                            <button type="submit" name="" class="btn btn-primary btn-block">Update Conference Details</button>
                        </div>
                    </form>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->


    <?php
    include "includes/footer.php";
    ?>