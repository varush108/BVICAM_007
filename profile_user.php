<!DOCTYPE html>
<html lang="en">
<?php 
if($_COOKIE["language"]==="english")
{
$labeluser=[
    "l001"=>"User Profile",
    "l002"=>"Edit",
    "l003"=>"Submitted Requests",
    "l004"=>"Requests Completed",
    "l005"=>"Scheduled Inspections",
    "l006"=>"Requests Declined"
    ];
}
else
{
$labeluser=[
    "l001"=>"उपयोगकर्ता प्रोफ़ाइल",
    "l002"=>"संपादित करें",
    "l003"=>"प्रस्तुत किए गए अनुरोध", 
    "l004"=>"पूर्ण अनुरोध",
    "l005"=>"अनुसूचित निरीक्षण",
    "l006"=>"अस्वीकृत अनुरोध"
    ];
}
    
?>
<?php 
session_start();
require_once 'config.php';
?>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Mosaddek">

    <!--favicon icon-->
    <link rel='shortcut icon' href='favicon.png' type='image/png'/>

    <title><?= $labeluser["l001"]; ?></title>

    <!--web fonts-->
    <link href="http://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700,800" rel="stylesheet">
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
    <!--bootstrap styles-->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!--icon font-->
    <link href="assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="assets/vendor/dashlab-icon/dashlab-icon.css" rel="stylesheet">
    <link href="assets/vendor/simple-line-icons/css/simple-line-icons.css" rel="stylesheet">
    <link href="assets/vendor/themify-icons/css/themify-icons.css" rel="stylesheet">
    <link href="assets/vendor/weather-icons/css/weather-icons.min.css" rel="stylesheet">

    <!--custom scrollbar-->
    <link href="assets/vendor/m-custom-scrollbar/jquery.mCustomScrollbar.css" rel="stylesheet">

    <!--jquery dropdown-->
    <link href="assets/vendor/jquery-dropdown-master/jquery.dropdown.css" rel="stylesheet">

    <!--jquery ui-->
    <link href="assets/vendor/jquery-ui/jquery-ui.min.css" rel="stylesheet">

    <!--iCheck-->
    <link href="assets/vendor/icheck/skins/all.css" rel="stylesheet">

    <!--vector maps -->
    <link href="assets/vendor/vector-map/jquery-jvectormap-1.1.1.css" rel="stylesheet" >

    <!--custom styles-->
    <link href="assets/css/main.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="assets/vendor/html5shiv.js"></script>
    <script src="assets/vendor/respond.min.js"></script>
    <![endif]-->
     

</head>

<body class="fixed-nav top-nav leftnav-floating left-side-toggled">

<!--navigation : sidebar & header-->
<?php include('header.php'); ?>
<!--/navigation : sidebar & header-->

<!--main content wrapper-->
<div class="content-wrapper">

    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-6">
                <div class="card card-shadow mb-4">
                    <div class="card-body">
                        <div class=" widget-action-link">
                            <div class="dropdown">
                                <a href="#" class="btn btn-transparent text-secondary dropdown-hover p-0" data-toggle="dropdown">
                                    <i class=" vl_ellipsis-fill-h"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right vl-dropdown">
                                    <a class="dropdown-item" href="#"><?= $labeluser["l002"]; ?></a>
                                </div>
                            </div>
                        </div>
                        <!--
                        <div class="text-center">
                            <strong>405</strong>
                            <span class="text-muted">Following</span>
                            <span class="pl-2 pr-2 text-muted weight800">.</span>
                            <strong>1690</strong>
                            <span class="text-muted">Follower</span>
                        </div> -->
                        <div class="text-center">
                            <div class="mt-4 mb-3">
                                <img class="rounded-circle" src="assets/img/avatar/avatar-large3.jpg" width="85" alt=""/>
                            </div>
                          <h5 class="text-uppercase mb-0"><?= $_SESSION["name"]; ?></h5>
                            <p class="text-uppercase mb-0"><strong><?= $_SESSION["email"] ?></strong></p>
                          
                            <p class="text-uppercase mb-0"><strong><?= $_SESSION["mobile"] ?></strong></p>
                            <!--
                            <div class="mb-1">
                                <a href="#" class="btn btn-sm btn-pill btn-primary pl-4 pr-4">Follow</a>
                                <a href="#" class="btn btn-sm btn-pill btn-purple  pl-4 pr-4">Message</a>
                            </div>
                            -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-md-12">
                <div class="row">
                    <div class=" col-sm-6">
                        <div class="card card-shadow mb-4">
                            <div class="card-body">
                                <div class="media d-flex align-items-center">
                                    <div class="mr-4 rounded-circle bg-warning sr-icon-box bubble-shadow-small">
                                        <i class="icon-like"></i>
                                    </div>
                                    <div class="media-body">
									<?php
											$sql="SELECT id from ref_no where user_id=:uid";
											 if($stmt = $pdo->prepare($sql))
											{
												 $stmt->bindParam(':uid', $_SESSION["uid"]);
												if($stmt->execute())
												{
													$count = $stmt->rowCount();
										?>
                                        <h4 class="text-uppercase mb-0 weight500 text-dark"><?= $count; ?></h4>
												<?php
												}
											}
											?>
                                        <span class="text-muted"><?= $labeluser["l003"]; ?></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=" col-sm-6">
                        <div class="card card-shadow mb-4">
                            <div class="card-body">
                                <div class="media d-flex align-items-center">
                                    <div class="mr-4 rounded-circle bg-purple sr-icon-box bubble-shadow-small">
                                        <i class=" icon-check"></i>
                                    </div>
									<?php
											$sql="SELECT ref_no.id from ref_no,request_details where user_id=:uid AND request_details.ref_id=ref_no.id AND request_details.status='Completed' ";
											 if($stmt = $pdo->prepare($sql))
											{
												 $stmt->bindParam(':uid', $_SESSION["uid"]);
												if($stmt->execute())
												{
													$count = $stmt->rowCount();
										?>
                                    <div class="media-body">
									
                                        <h4 class="text-uppercase mb-0 weight500 text-dark"><?= $count; ?></h4>
									<?php			}
											}
									?>
                                        <span class="text-muted"><?= $labeluser["l004"]; ?></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=" col-sm-6">
                        <div class="card card-shadow mb-4">
                            <div class="card-body">
                                <div class="media d-flex align-items-center">
                                    <div class="mr-4 rounded-circle bg-purple-light sr-icon-box bubble-shadow-small">
                                        <i class="icon-note"></i>
                                    </div>
                                    <div class="media-body">
									<?php
											$sql="SELECT ref_no.id from ref_no,request_details where user_id=:uid AND request_details.ref_id=ref_no.id AND request_details.DOI IS NOT NULL ";
											 if($stmt = $pdo->prepare($sql))
											{
												 $stmt->bindParam(':uid', $_SESSION["uid"]);
												if($stmt->execute())
												{
													$count = $stmt->rowCount();
										?>
                                        <h4 class="text-uppercase mb-0 weight500 text-dark"><?= $count; ?></h4>
                                        <span class="text-muted"><?= $labeluser["l005"]; ?></span>
										<?php 
												}
											}
											?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=" col-sm-6">
                        <div class="card card-shadow mb-4">
                            <div class="card-body">
                                <div class="media d-flex align-items-center">
                                    <div class="mr-4 rounded-circle bg-danger sr-icon-box bubble-shadow-small">
                                        <i class=" icon-close"></i>
                                    </div>
                                    <div class="media-body">
	<?php
											$sql="SELECT ref_no.id from ref_no,request_details where user_id=:uid AND request_details.ref_id=ref_no.id AND request_details.status = 'Rejected' ";
											 if($stmt = $pdo->prepare($sql))
											{
												 $stmt->bindParam(':uid', $_SESSION["uid"]);
												if($stmt->execute())
												{
													$count = $stmt->rowCount();
										?>
                                        <h4 class="text-uppercase mb-0 weight500 text-dark"><?= $count; ?></h4>
                                        <span class="text-muted"><?= $labeluser["l006"]; ?></span>
										<?php 
												}
											}
											?>
                                                              
							        </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>

    <!--footer-->
    <?php include('footer.php'); ?>
    <!--/footer-->
</div>
<!--/main content wrapper-->

<!--basic scripts-->
<script src="assets/vendor/jquery/jquery.min.js"></script>
<script src="assets/vendor/jquery-ui/jquery-ui.min.js"></script>
<script src="assets/vendor/popper.min.js"></script>
<script src="assets/vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="assets/vendor/jquery-dropdown-master/jquery.dropdown.js"></script>
<script src="assets/vendor/m-custom-scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="assets/vendor/icheck/skins/icheck.min.js"></script>

<!--chartjs-->
<script src="assets/vendor/chartjs/Chart.bundle.min.js"></script>
<!--chartjs initialization-->
<script src="assets/vendor/js-init/chartjs/init-mixed-chart.js"></script>
<script src="assets/vendor/js-init/chartjs/init-doughnut-chart2.js"></script>
<script src="assets/vendor/js-init/chartjs/init-area-chart.js"></script>
<script src="assets/vendor/js-init/chartjs/init-line-chart.js"></script>

<!--echarts-->
<script type="text/javascript" src="assets/vendor/echarts/echarts-all-3.js"></script>

<!--init echarts-->
<script type="text/javascript" src="assets/vendor/js-init/echart/init-doughnut-chart.js"></script>

<!--flot chart-->
<script src="assets/vendor/flot/jquery.flot.min.js"></script>
<script src="assets/vendor/flot/jquery.flot.pie.min.js"></script>
<script src="assets/vendor/flot/jquery.flot.tooltip.min.js"></script>
<!--flot chart initialization-->
<script src="assets/vendor/js-init/flot/init-flot-widget.js"></script>

<!--vectormap-->
<script src="assets/vendor/vector-map/jquery-jvectormap-1.2.2.min.js"></script>
<script src="assets/vendor/vector-map/jquery-jvectormap-world-mill-en.js"></script>
<script src="assets/vendor/vector-map/jquery-jvectormap-us-aea.js"></script>
<!--vectormap initialization-->
<script src="assets/vendor/js-init/vmap/init-vmap-world.js"></script>
<script src="assets/vendor/js-init/vmap/init-vmap-usa.js"></script>

<!--to do list-->
<script src="assets/vendor/icheck/skins/icheck.min.js"></script>
<!--to do list initialization-->
<script src="assets/vendor/js-init/init-todo-list.js"></script>

<!--[if lt IE 9]>
<script src="assets/vendor/modernizr.js"></script>
<![endif]-->

<!--basic scripts initialization-->
<script src="assets/js/scripts.min.js"></script>

</body>

</html>

