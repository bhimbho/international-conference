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
                        <h4 class="page-title">Welcome Message</h4>
                    </div>
                </div>
            </div>     
            <!-- end page title --> 

            <div class="row">
                <div class="col-md-12">
                    <div class="card-box">
                        <div class="col-md-8 offset-md-2">
                             <?php 
                                if(isset($_SESSION['err'])){?>
                                    <div class="alert alert-danger"><?= $_SESSION['err'] ?></div>
                                <?php unset($_SESSION['err']);} if(isset($_SESSION['success'])) {?>
                                    <div class="alert alert-success"><?= $_SESSION['success'] ?></div>
                                <?php unset($_SESSION['success']);}
                            ?>
                            <h4 class="header-title mb-3">Welcome Message</h4>

                            <form method="post" action="logic/welcome.php">
                                <div class="form-group">
                                   <textarea class="form-control" rows="10" id="summernote-editor" name="welcome"><?= $about->view_welcome()->welcome?></textarea>
                                </div>
                                <div class="form-group">
                                 <button type="submit" name="submit" class="btn btn-primary btn-block">Update Welome Message</button>
                             </div>
                         </form>
                     </div>
                 </div> <!-- end card-box -->
             </div>

         </div> <!-- container -->
     </div>

     <?php
     include "includes/footer.php";
     ?>