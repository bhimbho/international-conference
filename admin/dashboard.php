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
                        <h4 class="page-title">Dashboard</h4>
                    </div>
                </div>
            </div>     
            <!-- end page title --> 

            <div class="row">
                <div class="col-xl-4">
                    <div class="card-box widget-chart-one gradient-success bx-shadow-lg">
                        <div class="float-left" dir="ltr">
                            <input data-plugin="knob" data-width="80" data-height="80" data-linecap=round
                            data-fgColor="#ffffff" data-bgcolor="rgba(255,255,255,0.2)" value="<?= $journal->count_journal() ?>" data-skin="tron" data-angleOffset="180"
                            data-readOnly=true data-thickness=".1"/>
                        </div>
                        <div class="widget-chart-one-content text-right">
                            <p class="text-white mb-0 mt-2">Participants</p>
                            <h3 class="text-white"><?= $journal->count_journal() ?></h3>
                        </div>
                    </div> <!-- end card-box-->
                </div> <!-- end col -->
                <div class="col-xl-4">
                    <div class="card-box widget-chart-one gradient-success bx-shadow-lg">
                        <div class="float-left" dir="ltr">
                            <input data-plugin="knob" data-width="80" data-height="80" data-linecap=round
                            data-fgColor="#ffffff" data-bgcolor="rgba(255,255,255,0.2)" value="<?= $speakers->count_speakers() ?>" data-skin="tron" data-angleOffset="180"
                            data-readOnly=true data-thickness=".1"/>
                        </div>
                        <div class="widget-chart-one-content text-right">
                            <p class="text-white mb-0 mt-2">Speakers</p>
                            <h3 class="text-white"><?= $speakers->count_speakers() ?></h3>
                        </div>
                    </div> <!-- end card-box-->
                </div> <!-- end col -->
                <div class="col-xl-4">
                    <div class="card-box widget-chart-one gradient-success bx-shadow-lg">
                        <div class="float-left" dir="ltr">
                            <input data-plugin="knob" data-width="80" data-height="80" data-linecap=round
                            data-fgColor="#ffffff" data-bgcolor="rgba(255,255,255,0.2)" value="<?= $journal->count_new_journal() ?>" data-skin="tron" data-angleOffset="180"
                            data-readOnly=true data-thickness=".1"/>
                        </div>
                        <div class="widget-chart-one-content text-right">
                            <p class="text-white mb-0 mt-2">Admin Reuploads</p>
                            <h3 class="text-white"><?= $journal->count_new_journal() ?></h3>
                        </div>
                    </div> <!-- end card-box-->
                </div> <!-- end col -->
            </div>
            <!-- end row -->
        </div> <!-- container -->
    </div> <!-- content -->

    <?php
    include "includes/footer.php";
    ?>