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
                        <h4 class="page-title">Important Dates</h4>
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
                        <h4 class="header-title mb-3">Important Dates</h4>

                        <form method="post" action="logic/add_imp_dates.php">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Event Title</label>
                                <input type="text" class="form-control" name="title" aria-describedby="emailHelp" placeholder="Enter Event Title">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Event Date</label>
                                <input type="text" class="form-control" name="date" aria-describedby="emailHelp" placeholder="Enter Event Date">
                            </div>
                            <div class="form-group">
                               <button type="submit" name="submit" class="btn btn-primary btn-block">Add Date</button>
                           </div>
                       </form>
                   </div> <!-- end card-box -->
               </div>
               <div class="col-md-8">
                   <div class="card-box">
                       <h4 class="header-title mb-3">Modify Events</h4>
                       <table id="datatable" class="table table-bordered dt-responsive nowrap">
                        <thead>
                            <tr>
                                <th>S/N</th>
                                <th>Event Title</th>
                                <th>Event Date</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                             <?php
                                $conference_date = $conference->all_conference_date('DESC');
                                $count = 0;
                                foreach ($conference_date as $conference_date) {?>
                            <tr>
                                <td><?= ++$count?></td>
                                <td><?= ++$conference_date->event?></td>
                                <td><?= ++$conference_date->date?></td>
                                <td><a href="logic/delete_imp_date.php?date_id=<?= $conference_date->conference_date_id?>" class="btn btn-danger">Delete</a></td>
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