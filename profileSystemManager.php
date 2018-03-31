<!DOCTYPE html>
<html lang="en">
  
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Mosaddek">

    <!--favicon icon-->
    <link rel="icon" type="image/png" href="assets/img/favicon.html">

    <title>Profile System Manager</title>

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

    <!--custom styles-->
    <link href="assets/css/main.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="assets/vendor/html5shiv.js"></script>
    <script src="assets/vendor/respond.min.js"></script>
    <![endif]-->
     

</head>

<body class="fixed-nav top-nav">

    <!--navigation : sidebar & header-->
    <? include('header.php') ?>
    <!--/navigation : sidebar & header-->

    <!--main content wrapper-->
    <div class="content-wrapper">

        <!--profile banner-->
        <div class="profile-banner" style="background-image: url('assets/img/profile-banner.jpg')">
            <div class="row ">
                <div class="col-md-6 ml-auto text-lg-right">

                    <div class="text-right">
                        <div class="dropdown mb-5">
                            <a href="#" class="btn btn-transparent text-light dropdown-hover p-0" data-toggle="dropdown">
                                <i class=" vl_ellipsis-fill-h"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right vl-dropdown">
							<button type="button" class="btn btn-sm btn-dark" data-toggle="modal" data-target="#exampleModal4" data-whatever="@mdo">Edit Your Profile</button>
                                <!--<a class="dropdown-item" href="#"> Edit</a>
                                <a class="dropdown-item" href="#"> Delete</a>
                                <a class="dropdown-item" href="#"> Settings</a> -->
                            </div>
                        </div>
                    </div>
								<div class="col-md-4 mb-4">
                                    <!--<p>Form modal content</p>
                                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal4" data-whatever="@mdo">Launch demo modal</button> -->

                                    <div class="modal fade" id="exampleModal4" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel5" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel5"><strong>New message</strong></h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <form>
                                                        <div class="form-group">
                                                            <label for="recipient-name" class="col-form-label">Recipient:</label>
                                                            <input type="text" class="form-control" id="recipient-name">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="message-text" class="col-form-label">Message:</label>
                                                            <textarea class="form-control" id="message-text"></textarea>
                                                        </div>
                                                    </form>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                    <button type="button" class="btn btn-primary">Send message</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                    <!--<div class="profile-follower-info">
                        <div class="d-inline-block px-4 text-left text-light">
                            <strong class="f14 d-block">9</strong>
                            <p>Follower</p>
                        </div>
                        <div class="d-inline-block px-4 text-left text-light">
                            <strong class="f14 d-block">37</strong>
                            <p>Following</p>
                        </div>
                        <div class="d-inline-block px-4 text-left text-light">
                            <strong class="f14 d-block">5</strong>
                            <p>Level</p>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
        <!--/profile banner-->

        <!--profile nav-->
        <div class="profile-nav bg-white">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-8 ml-auto">
                        <div class="profile-nav-links">
                            <ul class="nav f12">
                                <li class="nav-item">
                                    <a class="nav-link active" href="handleRequests.html">Handle Requests</a>
                                </li>
								<li class="nav-item">
                                    <a class="nav-link" href="#">Add Building Map</a>
                                </li>
								
                                <li class="nav-item">
                                    <a class="nav-link" href="scheduleInspection.html">Scheduled Inspections</a>
                                </li>
                                
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Verify Reports</a>
                                </li>
								<li class="nav-item">
                                    <a class="nav-link" href="#">Register an Inspector</a>
                                </li>
                            </ul>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!--/profile nav-->

        <div class="container-fluid">

            <div class="row">
                <div class="col-xl-4 col-md-6 profile-info-position">
                    <div class="card card-shadow mb-4 ">
                        <div class="card-body">
                            <div class="text-center">
                                <div class="mt-4 mb-3">
                                    <img class="rounded-circle" src="assets/img/avatar/avatar-large3.jpg" width="85" alt=""/>
                                </div>
                                <h5 class="text-uppercase mb-0">System Manager</h5>
                              <!--<div class="profile-social-link mb-4">
                                    <a href="#" class="mx-2"><i class="fa fa-facebook-square"></i></a>
                                    <a href="#" class="mx-2"><i class="fa fa-twitter"></i></a>
                                    <a href="#" class="mx-2"><i class="fa fa-youtube"></i></a>
                                </div> -->
                                <!--<div class="badge-icon mb-4">
                                    <img src="assets/img/badge/level.svg" width="50" alt="Level" data-toggle="tooltip" data-placement="top" title="Level 5"/>
                                    <img src="assets/img/badge/status.svg" width="50" alt="Status" data-toggle="tooltip" data-placement="top" title="Status"/>
                                    <img src="assets/img/badge/disable.svg" width="50" alt="Disable" data-toggle="tooltip" data-placement="top" title="Disable"/>
                                    <img src="assets/img/badge/trendy.svg" width="50" alt="Trendy" data-toggle="tooltip" data-placement="top" title="Trendy"/>
                                    <img src="assets/img/badge/monthly-top-seller.svg" width="50" alt="Monthly Top Seller" data-toggle="tooltip" data-placement="top" title="Monthly Top Seller"/>
                                </div> -->
                            </div>

                        </div>
                    </div>

                    <!--<div class="card card-shadow mb-4">
                        <div class="card-header border-0">
                            <div class="custom-title-wrap bar-danger">
                                <div class="custom-title">Points</div>
                            </div>
                            <div class="progress mt-4" style="height: 5px;">
                                <div class="progress-bar bg-purple-light" role="progressbar" style="width: 60%;" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="mt-2">
                                <span class="float-left f12 text-muted">Total 7250</span>
                                <span class="float-right f12 text-muted">1250 Left</span>
                            </div>
                        </div>
                        <div class="dropdown-divider"></div>
                        <div class="card-body">
                            <div class="row f12 mb-3">
                                <div class="col-6">Article Read</div>
                                <div class="col-6">
                                    <div class="row">
                                        <div class="col-6">900/1200</div>
                                        <div class="col-6">
                                            <div class="progress mt-2" style="height: 5px;">
                                                <div class="progress-bar bg-info" role="progressbar" style="width: 30%;" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row f12 mb-3">
                                <div class="col-6">Comments</div>
                                <div class="col-6">
                                    <div class="row">
                                        <div class="col-6">145/450</div>
                                        <div class="col-6">
                                            <div class="progress mt-2" style="height: 5px;">
                                                <div class="progress-bar bg-primary" role="progressbar" style="width: 50%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row f12 mb-3">
                                <div class="col-6">Likes</div>
                                <div class="col-6">
                                    <div class="row">
                                        <div class="col-6">370/750</div>
                                        <div class="col-6">
                                            <div class="progress mt-2" style="height: 5px;">
                                                <div class="progress-bar bg-success" role="progressbar" style="width: 35%;" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row f12">
                                <div class="col-6">Share</div>
                                <div class="col-6">
                                    <div class="row">
                                        <div class="col-6">30/100</div>
                                        <div class="col-6">
                                            <div class="progress mt-2" style="height: 5px;">
                                                <div class="progress-bar bg-danger" role="progressbar" style="width: 60%;" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="text-center mt-4">
                                <a href="#" class="btn btn-sm btn-pill btn-outline-primary">View All</a>
                            </div>
                        </div>
                    </div> -->

                    <!--<div class="card card-shadow mb-4">
                        <div class="card-header border-0">
                            <div class="custom-title-wrap bar-success">
                                <div class="custom-title">Your Items</div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="media text-muted mb-3">
                                <img class="rounded mr-3" src="assets/img/watch.jpg" width="80" alt=""/>
                                <p class="media-body pb-3 mb-0">
                                    <a href="#" class="d-block text-secondary"><strong class="">Bhawin Jagad</strong></a>
                                    Donec id elit non mi porta gravida at eget metus.
                                </p>
                            </div>
                            <div class="media text-muted">
                                <img class="rounded mr-3" src="assets/img/device.jpg" width="80" alt=""/>
                                <p class="media-body pb-3 mb-0">
                                    <a href="#" class="d-block text-secondary"><strong class="">Bhawin Jagad</strong></a>
                                    Donec id elit non mi porta gravida at eget metus.
                                </p>
                            </div>
                            <div class="text-center mt-4">
                                <a href="#" class="btn btn-sm btn-pill btn-outline-success">View All</a>
                            </div>
                        </div>
                    </div> -->

                </div>

                <div class="col-xl-8 col-md-6">
                    <div class="timeline-title btn-pill bg-gray text-muted d-inline-block px-3 py-1 mb-5 mx-5">January 2018</div>
                    <ul class="list-unstyled base-timeline activity-timeline">

                        <li class="">
                            <div class="timeline-icon bg-danger">
                                <i class="fa fa-tasks"></i>
                            </div>
                            <div class="act-time">Today</div>
                            <div class="base-timeline-info">
                                <a href="#" class="text-uppercase weight700 f12 text-danger">Task Added</a>
                                <span class="d-block">You have added task #26 Successfully to the project “Agile CRM”</span>
                            </div>
                            <small class="text-muted">
                                28 mins ago
                            </small>
                        </li>
                        <li class="">
                            <div class="timeline-icon bg-success">
                                <i class="fa fa-download"></i>
                            </div>
                            <div class="base-timeline-info">
                                <a href="#" class="text-uppercase weight700 f12 text-success">Download Complete</a>
                                <span class="d-block">You downloaded the pdf documentation file of Agile CRM</span>
                            </div>
                            <small class="text-muted">
                                45 mins ago
                            </small>
                        </li>
                        <li class="">
                            <div class="timeline-icon bg-primary">
                                <i class="fa fa-handshake-o"></i>
                            </div>
                            <div class="act-time">Yesterday</div>
                            <div class="base-timeline-info">
                                <a href="#" class="text-uppercase weight700 f12 text-primary">Deal Added</a>
                                <span class="d-block">Final deal with ABC Company is done and added to the “Upcoming deal” list</span>
                            </div>
                            <small class="text-muted">
                                12 mins ago
                            </small>
                        </li>
                        <li class="">
                            <div class="timeline-icon">
                                <img src="assets/img/avatar/avatar2.jpg" alt=""/>
                            </div>
                            <div class="base-timeline-info">
                                <a href="#" class="text-uppercase weight700 f12 text-info">Charlie Johnson</a>
                                <span class="d-block">joined DashLab last week.</span>
                            </div>
                            <small class="text-muted">
                                3 days ago
                            </small>
                        </li>
                        <li class="">
                            <div class="timeline-icon bg-purple">
                                <i class="fa fa-check"></i>
                            </div>
                            <div class="act-time">29 January</div>
                            <div class="base-timeline-info">
                                <a href="#" class="text-uppercase weight700 f12 text-purple">Task Complete</a>
                                <span class="d-block">5 tasks for 29 january is completed successfully and no task pending</span>
                            </div>
                            <small class="text-muted">
                                07:00 PM
                            </small>
                        </li>
                    </ul>

                    <br/>

                    <div class="timeline-title btn-pill bg-gray text-muted d-inline-block px-3 py-1 mb-5 mx-5">February 2018</div>
                    <ul class="list-unstyled base-timeline activity-timeline">

                        <li class="">
                            <div class="timeline-icon bg-dark">
                                <i class="fa fa-tasks"></i>
                            </div>
                            <div class="act-time">02 February</div>
                            <div class="base-timeline-info">
                                <a href="#" class="text-uppercase weight700 f12 text-dark">Task Added</a>
                                <span class="d-block">You have added task #26 Successfully to the project “Agile CRM”</span>
                            </div>
                            <small class="text-muted">
                                28 mins ago
                            </small>
                        </li>
                        <li class="">
                            <div class="timeline-icon bg-warning">
                                <i class="fa fa-handshake-o"></i>
                            </div>
                            <div class="act-time">04 february</div>
                            <div class="base-timeline-info">
                                <a href="#" class="text-uppercase weight700 f12 text-warning">Deal Added</a>
                                <span class="d-block">Final deal with ABC Company is done and added to the “Upcoming deal” list</span>
                            </div>
                            <small class="text-muted">
                                12 mins ago
                            </small>
                        </li>
                    </ul>

                    <br/>

                    <div class="timeline-title btn-pill bg-gray text-muted d-inline-block px-3 py-1 mb-5 mx-5">March 2018</div>
                    <ul class="list-unstyled base-timeline activity-timeline">

                        <li class="">
                            <div class="timeline-icon bg-purple">
                                <i class="fa fa-tasks"></i>
                            </div>
                            <div class="act-time">05 March</div>
                            <div class="base-timeline-info">
                                <a href="#" class="text-uppercase weight700 f12 text-purple">Task Added</a>
                                <span class="d-block">You have added task #26 Successfully to the project “Agile CRM”</span>
                            </div>
                            <small class="text-muted">
                                28 mins ago
                            </small>
                        </li>
                        <li class="">
                            <div class="timeline-icon bg-info">
                                <i class="fa fa-handshake-o"></i>
                            </div>
                            <div class="act-time">06 March</div>
                            <div class="base-timeline-info">
                                <a href="#" class="text-uppercase weight700 f12 text-info">Deal Added</a>
                                <span class="d-block">Final deal with ABC Company is done and added to the “Upcoming deal” list</span>
                            </div>
                            <small class="text-muted">
                                12 mins ago
                            </small>
                        </li>
                        <li class="">
                            <div class="timeline-icon bg-danger">
                                <i class="fa fa-calendar-o"></i>
                            </div>
                            <div class="act-time">06 March</div>
                            <div class="base-timeline-info">
                                <a href="#" class="text-uppercase weight700 f12 text-danger">Event Created</a>
                                <span class="d-block">Final deal with ABC Company is done and added to the “Upcoming deal” list</span>
                            </div>
                            <small class="text-muted">
                                43 mins ago
                            </small>
                        </li>
                    </ul>

                    <br/>

                </div>
            </div>

        </div>

        <!--footer-->
        <? include('footer.php') ?>
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

    <!--[if lt IE 9]>
    <script src="assets/vendor/modernizr.js"></script>
    <![endif]-->

    <!--basic scripts initialization-->
    <script src="assets/js/scripts.min.js"></script>
</body>

<!-- Mirrored from thevectorlab.net/dashlab-v1.1/profile.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 13 Mar 2018 13:19:01 GMT -->
</html>

