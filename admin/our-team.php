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
                        <h4 class="page-title">Our Team</h4>
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
                        <h4 class="header-title mb-3">Our Team</h4>

                        <form method="post" action="logic/add_team.php" enctype="multipart/form-data">
                            <div class="for-group">
                                <div class="col-md-8 offset-md-2 text-center">
                                <input type="file" name="speaker_img" class="form-control dropify">
                                <label class="">Picture</label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Team's Full Name</label>
                                <input type="text" class="form-control" name="name" aria-describedby="emailHelp" placeholder="Enter Speaker Name">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Team's Title e.g Asst Director</label>
                                <input type="text" class="form-control" name="position" aria-describedby="emailHelp" placeholder="Enter Speaker Institution">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Team's Position</label>
                                <select class="form-control" name="order" >
                                    <option value="">---Select Order ---</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                    <option value="10">10</option>
                                    <option value="11">11</option>
                                    <option value="12">12</option>
                                    <option value="13">13</option>
                                    <option value="14">14</option>
                                    <option value="15">15</option>
                                    <option value="16">16</option>
                                    <option value="17">17</option>
                                    <option value="18">18</option>
                                    <option value="19">19</option>
                                    <option value="20">20</option>
                                    <option value="21">21</option>
                                    <option value="22">22</option>
                                    <option value="23">23</option>
                                    <option value="24">24</option>
                                    <option value="25">25</option>
                                </select>
                            </div>
                            <div class="form-group">
                               <button type="submit" name="submit" class="btn btn-primary btn-block">Add Team</button>
                           </div>
                       </form>
                   </div> <!-- end card-box -->
               </div>
               <div class="col-md-8">
                   <div class="card-box">
                       <h4 class="header-title mb-3">Modify Our Team's Details</h4>
                       <table id="datatable" class="table table-bordered dt-responsive nowrap">
                        <thead>
                            <tr>
                                <th>S/N</th>
                                <th>Our Team's Name</th>
                                <th>Our Team's Picture</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                             <?php
                                $team = $team->all_team();
                                $count = 0;
                                foreach ($team as $team) {?>
                            <tr>
                                <td><?= ++$count?></td>
                                <td><?= $team->team_name?></td>
                                <td><img src="../uploads/teams/<?= $team->team_pic?>" width="100" height="100"></td>
                               
                                <td><a href="" class="btn btn-primary waves-effect waves-light" data-toggle="modal" data-target="#myModal">Edit</a> <a href="logic/delete_team.php?team_id=<?= $team->team_id?>" class="btn btn-danger waves-effect waves-light">Delete</a></td>
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