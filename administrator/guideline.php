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
                                <li class="breadcrumb-item active"><a href="javascript: void(0);">Guidelines</a></li>
                            </ol>
                        </div>
                        <h4 class="page-title">Guidelines</h4>
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
                            <h4 class="header-title">Update Guidelines</h4>
                            <form method="post" action="logic/guideline.php">
                            <textarea class="form-control" id="editor" name="guideline" style="height: 200px;"><?= $guideline->view_guideline()->guideline?> </textarea> <!-- end Snow-editor-->
                            <button class="btn btn-block btn-primary mt-2" type="submit" name="submit">Update Guidelines</button>
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