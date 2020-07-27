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
                                <li class="breadcrumb-item active"><a href="javascript: void(0);">Paper Template</a></li>
                            </ol>
                        </div>
                        <h4 class="page-title">Paper Template</h4>
                    </div>
                </div>
            </div>     
            <!-- end page title --> 

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <?php  
                            echo $session->get_session('success');
                            echo $session->get_session('error');
                            $session->unset_session('success')
                             ?>
                            <h4 class="header-title">Update Paper Template</h4>
                            <form method="post" action="logic/paper_template.php" enctype="multipart/form-data">
                            <div class="form-group">
                            <label>Paper Template file</label>
                            <input type="file" name="template_file" class="form-control">
                            <div>
                            <div class="form-group">
                            <label>Paper Template  </label>
                            <textarea class="form-control" id="editor" name="paper_template" style="height: 200px;"> </textarea> <!-- end Snow-editor-->
                            <div>
                            <button class="btn btn-block btn-primary mt-2" type="submit" name="submit">Update Paper Template</button>
                            </form>
                        </div> <!-- end card-body-->
                    </div> <!-- end card-->
                </div><!-- end col -->
            </div>
        </div> <!-- container -->
    </div> <!-- content -->
    <?php
    include "includes/footer.php";
    ?>