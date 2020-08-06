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
                        <h4 class="page-title">Registration Fee</h4>
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
                        <h4 class="header-title mb-3">Account Details</h4>

                        <form method="post" action="logic/add_reg_fee.php">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Bank Name</label>
                                <input type="text" class="form-control" name="name" aria-describedby="emailHelp" placeholder="Enter Bank Name">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Account Name</label>
                                <input type="text" class="form-control" name="acc_name" aria-describedby="emailHelp" placeholder="Enter Account Name">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Account Number</label>
                                <input type="text" class="form-control" name="number" aria-describedby="emailHelp" placeholder="Enter Account Number">
                            </div>
                             <div class="form-group">
                                <label for="exampleInputEmail1">Amount (Naira &#8358;)</label>
                                <input type="text" class="form-control" name="amount" aria-describedby="emailHelp" placeholder="Enter Amount in Naira">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Amount (Dollar $)</label>
                                <input type="text" class="form-control" name="amount" aria-describedby="emailHelp" placeholder="Enter Amount in Dollars">
                            </div>
                            <div class="form-group">
                               <button type="submit" name="submit" class="btn btn-primary btn-block">Add Account Details</button>
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
                                <th>bank Name</th>
                                <th>Account Name</th>
                                <th>Account Number</th>
                                <th>Amount</th>
                                <!-- <th>Action</th> -->
                            </tr>
                        </thead>
                        <tbody>
                            <?php $reg_fee = $reg_fee->view_reg_fee() ?>
                            <tr>
                                <td>1</td>
                                <td><?= $reg_fee->bank?></td>
                                <td><?= $reg_fee->account_name?></td>
                                <td><?= $reg_fee->account_number?></td>
                                <td><?= $reg_fee->amount?></td>
                                <!-- <td><a href="" class="btn btn-danger waves-effect waves-light">Delete</a></td> -->
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div> <!-- container -->
    </div>

<?php
include "includes/footer.php";
?>