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
                        <h4 class="page-title">Upcoming Conference</h4>
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
                        <h4 class="header-title mb-3">Upcoming Conference</h4>

                        <form method="post" action="logic/add_up_conference.php" enctype="multipart/form-data">
                             <div class="form-group">
                                <label for="exampleInputEmail1">Conference Image</label>
                                <input type="file" class="form-control dropify" name="file" aria-describedby="emailHelp">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Conference Theme</label>
                                <input type="text" class="form-control" name="theme" aria-describedby="emailHelp" placeholder="Enter Conference Theme">
                            </div>
                            <p>Conference Date E.g (3rd March, 2020)</p>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Day E.g (1st)</label>
                                        <input type="text" class="form-control" name="d" placeholder="4th">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Month</label>
                                        <select type="text" class="form-control" name="m" >
                                            <option value="">Month</option>
                                            <option value="January">January</option>
                                            <option value="February">February</option>
                                            <option value="March">March</option>
                                            <option value="April">April</option>
                                            <option value="May">May</option>
                                            <option value="June">June</option>
                                            <option value="July">July</option>
                                            <option value="August">August</option>
                                            <option value="September">September</option>
                                            <option value="October">October</option>
                                            <option value="November">November</option>
                                            <option value="December">December</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Year</label>
                                        <select type="text" class="form-control" name="y">
                                            <option value="">Year</option>
                                            <option value="2020">2020</option>
                                            <option value="2021">2021</option>
                                            <option value="2022">2022</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label for="exampleInputEmail1">Conference Venue</label>
                                <textarea class="form-control" name="venue" placeholder="Enter Conference Venue" rows="5"></textarea>
                            </div>
                            
                            <div class="form-group">
                               <button type="submit" name="submit" class="btn btn-primary btn-block">Add Upcoming  Conference</button>
                           </div>
                       </form>
                   </div> <!-- end card-box -->
               </div>
               <div class="col-md-8">
                   <div class="card-box">
                       <h4 class="header-title mb-3">Modify Upcoming Conference</h4>
                       <table id="datatable" class="table table-bordered dt-responsive nowrap">
                        <thead>
                            <tr>
                                <th>S/N</th>
                                <th>Conference Theme</th>
                                <th>Conference Date</th>
                                <th>Conference Venue</th>
                                <th>Conference Image</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $conf = $conference->view_up_conference();
                                $count = 0;?>
                            
                                    
                            <tr>
                                <td><?= ++$count?></td>
                                <td><?= $conf->up_theme?></td>
                                <td><?= $conf->location?></td>
                                <td><?= $conf->day.' | '.$conf->month.' | '.$conf->year ?></td>
                                <td><img src="../uploads/upcoming_conference/<?= $conf->up_picture?>" width="100" height="100"></td>                            
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
                                <label for="exampleInputEmail1">Conference Image</label>
                                <input type="file" class="form-control" name="theme" aria-describedby="emailHelp" placeholder="Enter Conference Theme">
                            </div>
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