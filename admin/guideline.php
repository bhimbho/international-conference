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
                        <h4 class="page-title">Paper Guidelines</h4>
                    </div>
                </div>
            </div>     
            <!-- end page title --> 

            <div class="row">
                <div class="col-md-12">
                    <div class="card-box">
                        <div class="col-md-8 offset-md-2">
                            <h4 class="header-title mb-3">Paper Guidelines</h4>

                            <form method="post" action="logic/update_guideline.php">
                                <div class="form-group">
                                   <textarea class="form-control" rows="10" id="summernote-editor" name="guideline"><?= $guideline->view_guideline()->guideline?></textarea>
                                </div>
                                <div class="form-group">
                                 <button type="submit" name="submit" class="btn btn-primary btn-block">Update Paper Guidelines</button>
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