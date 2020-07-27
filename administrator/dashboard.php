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
                                <li class="breadcrumb-item active"><a href="javascript: void(0);">Dashboard</a></li>
                            </ol>
                        </div>
                        <h4 class="page-title">Dashboard</h4>
                    </div>
                </div>
            </div>     
            <!-- end page title --> 

            <div class="row">
                <div class="col-xl-4 col-md-6">
                    <div class="card-box">
                        <h4 class="header-title mt-0 mb-2">All Journals</h4>
                        <div class="mt-1">
                            <div class="float-left" dir="ltr">
                                <input data-plugin="knob" data-width="64" data-height="64" data-fgColor="#f05050 "
                                data-bgColor="#F9B9B9" value="58"
                                data-skin="tron" data-angleOffset="180" data-readOnly=true
                                data-thickness=".15"/>
                            </div>
                            <div class="text-right">
                                <h2 class="mt-3 pt-1 mb-1"> 268 </h2>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div><!-- end col -->

                <div class="col-xl-4 col-md-6">
                    <div class="card-box">
                        <h4 class="header-title mt-0 mb-3">All Authors</h4>
                        <div class="mt-1">
                            <div class="float-left" dir="ltr">
                                <input data-plugin="knob" data-width="64" data-height="64" data-fgColor="#675db7"
                                data-bgColor="#e8e7f4" value="80"
                                data-skin="tron" data-angleOffset="180" data-readOnly=true
                                data-thickness=".15"/>
                            </div>
                            <div class="text-right">
                                <h2 class="mt-3 pt-1 mb-1"> 8715 </h2>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div><!-- end col -->

                <div class="col-xl-4 col-md-6">
                    <div class="card-box">
                        <h4 class="header-title mt-0 mb-3">All Users</h4>
                        <div class="mt-1">
                            <div class="float-left" dir="ltr">
                                <input data-plugin="knob" data-width="64" data-height="64" data-fgColor="#23b397"
                                data-bgColor="#c8ece5" value="77"
                                data-skin="tron" data-angleOffset="180" data-readOnly=true
                                data-thickness=".15"/>
                            </div>
                            <div class="text-right">
                                <h2 class="mt-3 pt-1 mb-1"> $925 </h2>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div><!-- end col -->
            </div>
        </div> <!-- container -->
    </div> <!-- content -->
    <?php
    include "includes/footer.php";
    ?>

