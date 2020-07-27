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
                                <li class="breadcrumb-item active"><a href="javascript: void(0);">Contact</a></li>
                            </ol>
                        </div>
                        <h4 class="page-title">Contact</h4>
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
                            <h4 class="header-title">Update Contact</h4>
                            <form method="post" action="logic/contact.php">
                            <div class="form-group">
                            <label>Contact Phone</label>
                            <input type="text" name="contact_phone" class="form-control">
                            <div>
                            <div class="form-group">
                            <label>Contact Address</label>
                            <textarea class="form-control" id="editor" name="contact_address" style="height: 200px;"> </textarea> <!-- end Snow-editor-->
                            <div>
                            <button class="btn btn-block btn-primary mt-2" type="submit" name="submit">Update Contact</button>
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