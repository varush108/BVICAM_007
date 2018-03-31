<!DOCTYPE html>
<html lang="en">
  
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Mosaddek">

    <!--favicon icon-->
    <link rel='shortcut icon' href='favicon.png' type='image/png'/>

    <title>Profile</title>

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

<body class="fixed-nav">

    <!--navigation : sidebar & header-->
    <nav class="navbar navbar-expand-lg fixed-top navbar-light" id="mainNav">

        <!--brand name-->
        <a class="navbar-brand" href="#" data-jq-dropdown="#jq-dropdown-1">
            <img class="pr-3 float-left" src="assets/img/logo-icon.png" srcset="assets/img/logo-icon@2x.png 2x"  alt=""/>
            <div class="float-left">
                <div>DashLab <i class="fa fa-caret-down pl-2"></i></div>
                <span class="page-direction f12 weight300">
                    <span>home</span>
                    <i class="fa fa-angle-right"></i>
                    <span>ui element</span>
                </span>
            </div>
        </a>
        <!--/brand name-->

        <!--brand mega menu-->
        <div id="jq-dropdown-1" class="jq-dropdown">
            <div class="b-mega-menu">
                <div class="card card-shadow">
                    <div class="card-header p-2 pl-3">
                        <div class="navbar-brand mt-2">
                            <img class="pr-3 float-left" src="assets/img/logo-icon.png" srcset="assets/img/logo-icon@2x.png 2x"  alt=""/>
                            <div class="float-left">
                                <div>DashLab</div>
                                <span class="page-direction f12 weight300">
                                    <span>home</span>
                                    <i class="fa fa-angle-right"></i>
                                    <span>ui element</span>
                                </span>
                            </div>
                        </div>

                        <div class="widget-action-link">
                            <ul class="nav nav-tabs wal-nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true"><i class="fa fa-home"></i></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="analytics-tab" data-toggle="tab" href="#analytics" role="tab" aria-controls="analytics" aria-selected="false"><i class="fa fa-desktop"></i></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="application-tab" data-toggle="tab" href="#application" role="tab" aria-controls="application" aria-selected="false"><i class="fa fa-magnet"></i></a>
                                </li>
                            </ul>

                        </div>
                    </div>
                    <div class="card-body p-0 ">
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                <div class="row no-gutters">
                                    <div class="col-4 border-right">
                                        <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                            <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true"><i class="fa fa-home pr-2"></i> Application</a>
                                            <a class="nav-link" id="v-pills-report-tab" data-toggle="pill" href="#v-pills-report" role="tab" aria-controls="v-pills-report" aria-selected="false"><i class="fa fa-desktop pr-2"></i> Reports</a>
                                            <a class="nav-link" id="v-pills-management-tab" data-toggle="pill" href="#v-pills-management" role="tab" aria-controls="v-pills-management" aria-selected="false"><i class="fa fa-magnet pr-2"></i>Management</a>
                                            <a class="nav-link" id="v-pills-blog-tab" data-toggle="pill" href="#v-pills-blog" role="tab" aria-controls="v-pills-blog" aria-selected="false"><i class="fa fa-comments-o pr-2"></i>Blog</a>
                                        </div>
                                    </div>
                                    <div class="col-8">
                                        <div class="tab-content" id="v-pills-tabContent">
                                            <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                                                <ul class="list-unstyled b-mega-menu-link">
                                                    <li><a href="#">Bootstrap 4 Stable</a></li>
                                                    <li class="active"><a href="javascript:;">DashLab Modern Admin</a></li>
                                                    <li><a href="#">Awesome Widgets Collection</a></li>
                                                    <li><a href="#">Developer Friendly Code</a></li>
                                                    <li><a href="#">SASS and GULP Task</a></li>
                                                    <li><a href="#">Fully Responsive</a></li>
                                                </ul>
                                            </div>
                                            <div class="tab-pane fade" id="v-pills-report" role="tabpanel" aria-labelledby="v-pills-report-tab">
                                                <ul class="list-unstyled b-mega-menu-link">
                                                    <li><a href="#">Daily Reports</a></li>
                                                    <li><a href="javascript:;">Weekly Reports</a></li>
                                                    <li class="active"><a href="#">Monthly Reports</a></li>
                                                    <li><a href="#">Yearly Reports</a></li>
                                                    <li><a href="#">HR Reports</a></li>
                                                    <li><a href="#">Product Reports</a></li>
                                                    <li><a href="#">Order Reports</a></li>
                                                    <li><a href="#">Revenue Reports</a></li>
                                                </ul>
                                            </div>
                                            <div class="tab-pane fade" id="v-pills-management" role="tabpanel" aria-labelledby="v-pills-management-tab">
                                                <ul class="list-unstyled b-mega-menu-link">
                                                    <li><a href="#">HR Management</a></li>
                                                    <li class="active"><a href="javascript:;">Product Management</a></li>
                                                    <li><a href="#">Role Management</a></li>
                                                    <li><a href="#">Sales Management</a></li>
                                                    <li><a href="#">Employee Management</a></li>
                                                </ul>
                                            </div>
                                            <div class="tab-pane fade" id="v-pills-blog" role="tabpanel" aria-labelledby="v-pills-blog-tab">
                                                <ul class="list-unstyled b-mega-menu-link">
                                                    <li class="active"><a href="#">Educational Blog</a></li>
                                                    <li> <a href="javascript:;">Technology Blog</a></li>
                                                    <li><a href="#">Political Blog</a></li>
                                                    <li><a href="#">Woocommerce Blog</a></li>
                                                    <li><a href="#">Entertainment Blog</a></li>
                                                    <li><a href="#">Newspapper Blog</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="analytics" role="tabpanel" aria-labelledby="analytics-tab">
                                <div class="p-5 m-4 text-center">
                                    <i class="fa fa-desktop f50 text-muted mb-4"></i>
                                    <p class="mb-5">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC</p>
                                    <a href="#" class="btn btn-primary">Get Started</a>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="application" role="tabpanel" aria-labelledby="application-tab">
                                <div class="p-5 m-4 text-center">
                                    <i class="fa fa-magnet f50 text-muted mb-4"></i>
                                    <p class="mb-5">The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33</p>
                                    <a href="#" class="btn btn-purple">Get Started</a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!--/brand mega menu-->

        <!--responsive nav toggle-->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <!--/responsive nav toggle-->

        <div class="collapse navbar-collapse" id="navbarResponsive">

            <!--left side nav-->
            <ul class="navbar-nav left-side-nav" id="accordion">

                <li class="nav-item-search" data-toggle="tooltip" data-placement="right" title="Search">
                    <div class="nav-link nav-link-collapse collapsed" data-toggle="collapse">
                        <i class="vl_search"></i>
                        <span class="nav-link-text">
                            <input type="text" class="search-form" placeholder="Search Report"/>
                        </span>
                    </div>
                </li>

                <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
                    <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" data-target="#dashboard">
                        <i class="vl_dashboard"></i>
                        <span class="nav-link-text">Dashboard </span>
                    </a>
                    <ul class="sidenav-second-level collapse" id="dashboard" data-parent="#accordion">
                        <li> <a href="index.html">Dashboard 1</a> </li>
                        <li> <a href="dashboard-2.html">Dashboard 2</a></li>
                        <li> <a href="dashboard-3.html">Dashboard 3</a></li>
                        <li> <a href="dashboard-4.html">Dashboard 4</a></li>
                        <li> <a href="dashboard-5.html">Dashboard 5</a></li>
                        <li> <a href="dashboard-6.html">Dashboard 6</a></li>
                    </ul>
                </li>

                <li class="nav-item" data-toggle="tooltip" data-placement="right" title="UI Elements">
                    <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" data-target="#ui_elements">
                        <i class="vl_slider-h-range"></i>
                        <span class="nav-link-text">UI Elements</span>
                    </a>
                    <ul class="sidenav-second-level collapse" id="ui_elements" data-parent="#accordion">
                        <li> <a href="alert.html">Alerts</a> </li>
                        <li> <a href="buttons.html">Buttons</a></li>
                        <li> <a href="dropdown.html">Dropdown</a></li>
                        <li> <a href="modals.html">Modal</a></li>
                        <li> <a href="toastr-notification.html">Notification Toastr</a></li>
                        <li> <a href="progress.html">Progress</a></li>
                        <li> <a href="popover-tooltips.html">Popup & Tooltips</a></li>
                        <li> <a href="typography.html">Typography</a></li>
                        <li> <a href="tabs-accordion.html">Tabs & Accordion</a></li>
                        <li> <a href="tree.html">Tree</a></li>
                    </ul>
                </li>
                <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Widgets">
                    <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" data-target="#widgets">
                        <i class="vl_bond"></i>
                        <span class="nav-link-text">Widgets</span>
                    </a>
                    <ul class="sidenav-second-level collapse " id="widgets" data-parent="#accordion">
                        <li> <a href="widget-basic.html">Basic Widgets</a> </li>
                        <li> <a href="widget-chart.html">Chart Widgets</a> </li>
                    </ul>
                </li>

                <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Calendar">
                    <a class="nav-link" href="calendar-external-events.html">
                        <i class="vl_calendar"></i>
                        <span class="nav-link-text">Calendar <span class="badge badge-primary">2</span> </span>
                    </a>
                </li>

                <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Icons">
                    <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" data-target="#icons">
                        <i class="vl_hand-mike"></i>
                        <span class="nav-link-text">Icons</span>
                    </a>
                    <ul class="sidenav-second-level collapse " id="icons" data-parent="#accordion">
                        <li> <a href="icon-fontawesome.html">Fontawesome Icons</a> </li>
                        <li> <a href="icon-simple-line.html">Simple Line Icons</a> </li>
                        <li> <a href="icon-themify.html">Themify Icons</a> </li>
                        <li> <a href="icon-weather.html">Weather Icons</a> </li>
                    </ul>
                </li>

                <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Forms">
                    <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" data-target="#forms">
                        <i class="vl_form"></i>
                        <span class="nav-link-text">Forms</span>
                    </a>
                    <ul class="sidenav-second-level collapse " id="forms" data-parent="#accordion">
                        <li> <a href="form-basic.html">Basic Forms</a> </li>
                        <li> <a href="form-checkbox-radio.html">Checkbox & Radio</a> </li>
                        <li> <a href="form-input-group.html">Input Group</a> </li>
                        <li> <a href="form-validation.html">Form Validation</a> </li>
                        <li> <a href="editor-summernote.html">Editor Summernote</a> </li>
                        <li> <a href="form-dropzone.html">Dropzone</a> </li>
                        <li> <a href="form-pickers.html">Pickers</a> </li>
                        <li> <a href="form-select2.html">Select 2</a> </li>
                        <li> <a href="form-multi-select.html">Multiple Select</a> </li>
                        <li> <a href="form-wizard.html">Form Wizard</a> </li>
                    </ul>
                </li>

                <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Data Tables">
                    <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" data-target="#d_tables">
                        <i class="vl_grid-even"></i>
                        <span class="nav-link-text">Data Tables</span>
                    </a>
                    <ul class="sidenav-second-level collapse " id="d_tables" data-parent="#accordion">
                        <li> <a href="table-basic.html">Basic Table</a> </li>
                        <li> <a href="table-datatable.html">Data Table</a> </li>
                        <li> <a href="table-ajax-datatable.html">Ajax Data Table</a> </li>
                    </ul>
                </li>

                <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Charts">
                    <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" data-target="#charts">
                        <i class="vl_graph-bar"></i>
                        <span class="nav-link-text">Charts</span>
                    </a>
                    <ul class="sidenav-second-level collapse" id="charts" data-parent="#accordion">
                        <li class="active"> <a href="chartjs.html">Chartjs</a> </li>
                        <li> <a href="echarts.html">eCharts</a> </li>
                    </ul>
                </li>

                <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Exra Pages">
                    <a class="nav-link nav-link-collapse " data-toggle="collapse" data-target="#extra_pages">
                        <i class="vl_files"></i>
                        <span class="nav-link-text">Extra Pages</span>
                    </a>
                    <ul class="sidenav-second-level collapse show" id="extra_pages" data-parent="#accordion">
                        <li class="active"> <a href="profile.html">Profile</a> </li>
                        <li> <a href="invoice.html">Invoice</a> </li>
                        <li> <a href="blank-page.html">Blank Page</a> </li>
                        <li> <a href="login.html">Login Page</a> </li>
                        <li> <a href="registration.html">Registration Page</a> </li>
                        <li> <a href="404.html">404 Error</a> </li>
                    </ul>
                </li>

                <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Layouts">
                    <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" data-target="#layouts">
                        <i class="vl_board"></i>
                        <span class="nav-link-text">Layouts</span>
                    </a>
                    <ul class="sidenav-second-level collapse" id="layouts" data-parent="#accordion">
                        <li> <a href="layout-top-nav.html">Top Nav </a></li>
                        <li> <a href="layout-dark-nav.html">Dark Left Nav</a> </li>
                        <li> <a href="blank-page.html">Light Left Nav</a> </li>
                        <li> <a href="layout-default-collapsed.html">Nav Collapsed Light</a></li>
                        <li> <a href="layout-dark-nav-collapsed.html">Nav Collapsed Dark</a></li>
                        <li> <a href="layout-floating-leftside-dark.html">Floating Nav Dark</a></li>
                        <li> <a href="layout-floating-leftside-dark-collapsed.html">Floating Collapsed Dark </a></li>
                        <li> <a href="layout-floating-leftside-light.html">Floating Nav Light </a></li>
                        <li> <a href="layout-floating-leftside-light-collapsed.html">Floating Collapsed Light </a></li>
                    </ul>
                </li>

                <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Menu Levels">
                    <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" data-target="#multi_menu">
                        <i class="vl_sitemap1"></i>
                        <span class="nav-link-text">Menu Levels</span>
                    </a>
                    <ul class="sidenav-second-level collapse" id="multi_menu" data-parent="#accordion">
                        <li>
                            <a href="#">Second Level Item</a>
                        </li>
                        <li>
                            <a href="#">Second Level Item</a>
                        </li>
                        <li>
                            <a href="#">Second Level Item</a>
                        </li>
                        <li>
                            <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" data-target="#multi_menu_2">Third Level</a>
                            <ul class="sidenav-third-level collapse" id="multi_menu_2">
                                <li>
                                    <a href="#">Third Level Item</a>
                                </li>
                                <li>
                                    <a href="#">Third Level Item</a>
                                </li>
                                <li>
                                    <a href="#">Third Level Item</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
            </ul>
            <!--/left side nav-->

            <!--nav push link-->
            <ul class="navbar-nav sidenav-toggler">
                <li class="nav-item">
                    <a class="nav-link text-center" id="left-nav-toggler">
                        <i class="fa fa-angle-left"></i>
                    </a>
                </li>
            </ul>
            <!--/nav push link-->

            <!--header leftside links-->
            <ul class="navbar-nav header-links">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle mr-lg-2" id="actionNav" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Application
                    </a>
                    <div class="dropdown-menu" aria-labelledby="actionNav">
                        <a class="dropdown-item" href="#">Bootstrap 4 Stable</a>
                        <a class="dropdown-item" href="#">DashLab Modern Admin</a>
                        <a class="dropdown-item" href="#">Awesome Widgets Collection</a>
                        <a class="dropdown-item" href="#">Developer Friendly Code</a>
                        <a class="dropdown-item" href="#">SASS and GULP Task</a>
                        <a class="dropdown-item" href="#">Fully Responsive</a>
                        <a class="dropdown-item" href="#">Latest Version Plugins</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle mr-lg-2" id="reportNav" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Reports
                    </a>
                    <div class="dropdown-menu" aria-labelledby="reportNav">
                        <a class="dropdown-item" href="#">Daily Reports</a>
                        <a class="dropdown-item" href="#">Weekly Reports</a>
                        <a class="dropdown-item" href="#">Monthly Reports</a>
                        <a class="dropdown-item" href="#">Yearly Reports</a>
                        <a class="dropdown-item" href="#">HR Reports</a>
                        <a class="dropdown-item" href="#">Product Reports</a>
                        <a class="dropdown-item" href="#">Order Reports</a>
                        <a class="dropdown-item" href="#">Revenue Reports</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle mr-lg-2" id="orderNav" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Management
                    </a>
                    <div class="dropdown-menu" aria-labelledby="orderNav">
                        <a class="dropdown-item" href="#">HR Management</a>
                        <a class="dropdown-item" href="#">Product Management</a>
                        <a class="dropdown-item" href="#">Role Management</a>
                        <a class="dropdown-item" href="#">Sales Management</a>
                        <a class="dropdown-item" href="#">Employee Management</a>
                    </div>
                </li>
            </ul>
            <!--/header leftside links-->

            <!--header rightside links-->
            <ul class="navbar-nav header-links ml-auto hide-arrow">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle mr-lg-3" id="messagesDropdown" href="#" data-toggle="dropdown"
                       aria-haspopup="true" aria-expanded="false">
                        <i class="vl_chat-bubble"></i>
                        <span class="d-lg-none">Messages
                            <span class="badge badge-pill badge-primary">9 New</span>
                        </span>
                        <div class="notification-alarm">
                            <span class="wave wave-danger"></span>
                            <span class="dot"></span>
                        </div>
                    </a>

                    <div class="dropdown-menu dropdown-menu-right header-right-dropdown-width pb-0" aria-labelledby="messagesDropdown">
                        <h6 class="dropdown-header weight500 ">Messages</h6>
                        <div class="dropdown-divider mb-0"></div>
                        <a class="dropdown-item border-bottom msg-unread" href="#">
                            <div class="float-left notificaton-thumb">
                                <img class="rounded-circle" src="assets/img/avatar/avatar4.jpg" alt=""/>
                            </div>
                            <span class="weight500">Andrew Flinton</span>
                            <span class="small float-right text-muted">08:30 AM</span>

                            <div class="dropdown-message">
                                I hope that you will be there in time. See you then
                            </div>
                        </a>

                        <a class="dropdown-item border-bottom msg-unread" href="#">
                            <div class="float-left notificaton-thumb">
                                <img class="rounded-circle" src="assets/img/avatar/avatar2.jpg" alt=""/>
                            </div>
                            <span class="weight500">John Doe</span>
                            <span class="small float-right text-muted">10:28 AM</span>

                            <div class="dropdown-message">
                                Hello this is an example message. Just want to show how it looks
                            </div>
                        </a>

                        <a class="dropdown-item border-bottom" href="#">
                            <div class="float-left notificaton-thumb">
                                <img class="rounded-circle" src="assets/img/avatar/avatar3.jpg" alt=""/>
                            </div>
                            <span class="weight500">Dash Don</span>
                            <span class="small float-right text-muted">07:12 PM</span>

                            <div class="dropdown-message">
                                Hi, This is Dash Don form usa. I'm looking for someone who really good at design and frontend like mosaddek
                            </div>
                        </a>

                        <a class="dropdown-item border-bottom" href="#">
                            <div class="float-left notificaton-thumb">
                                <img class="rounded-circle" src="assets/img/avatar/avatar1.jpg" alt=""/>
                            </div>
                            <span class="weight500">dkmosa</span>
                            <span class="small float-right text-muted">12:10 PM</span>

                            <div class="dropdown-message">
                                We build a beautiful dashboard admin panel for professional
                            </div>
                        </a>
                        <a class="dropdown-item small" href="#">View all messages</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle mr-lg-3" id="alertsDropdown" href="#" data-toggle="dropdown"
                       aria-haspopup="true" aria-expanded="false">
                        <i class="vl_bell"></i>
                        <span class="d-lg-none">Notification
                            <span class="badge badge-pill badge-warning">5 New</span>
                        </span>
                        <div class="notification-alarm">
                            <span class="wave wave-warning"></span>
                            <span class="dot bg-warning"></span>
                        </div>
                    </a>

                    <div class="dropdown-menu dropdown-menu-right header-right-dropdown-width pb-0" aria-labelledby="alertsDropdown">
                        <h6 class="dropdown-header weight500">Notification</h6>

                        <div class="dropdown-divider mb-0"></div>
                        <a class="dropdown-item border-bottom" href="#">
                            <span class="text-primary">
                            <span class="weight500">
                                <i class="vl_bell weight600 pr-2"></i>Weekly Update</span>
                            </span>
                            <span class="small float-right text-muted">03:14 AM</span>

                            <div class="dropdown-message f12">
                                This week project update report generated. All team members are requested to check the updates
                            </div>
                        </a>

                        <a class="dropdown-item border-bottom" href="#">
                            <span class="text-danger">
                            <span class="weight500">
                                <i class="vl_Download-circle weight600 pr-2"></i>Server Error</span>
                            </span>
                            <span class="small float-right text-muted">10:34 AM</span>

                            <div class="dropdown-message f12">
                                Unexpectedly server response stop. Responsible members are requested to fix it soon
                            </div>
                        </a>

                        <a class="dropdown-item border-bottom" href="#">
                            <span class="text-success">
                            <span class="weight500">
                                <i class="vl_screen weight600 pr-2"></i>Monthly Meeting</span>
                            </span>
                            <span class="small float-right text-muted">12:30 AM</span>

                            <div class="dropdown-message f12">
                                Our monthly meeting will be held on tomorrow sharp 12:30. All members are requested to attend this meeting.
                            </div>
                        </a>

                        <a class="dropdown-item small" href="#">View all notification</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle mr-lg-3" id="userNav" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <div class="user-thumb">
                            <img class="rounded-circle" src="assets/img/avatar/avatar1.jpg" alt=""/>
                        </div>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userNav">
                        <a class="dropdown-item" href="#">My Profile</a>
                        <a class="dropdown-item" href="#">Account Settings</a>
                        <a class="dropdown-item" href="#">Inbox <span class="badge badge-primary">3</span></a>
                        <a class="dropdown-item" href="#">Message <span class="badge badge-success">5</span></a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="login.html">Sign Out</a>
                    </div>
                </li>
            </ul>
            <!--/header rightside links-->

        </div>
    </nav>
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
                                    <a class="nav-link active" href="#">Menu 1</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Menu 2</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Menu 3</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Menu 4</a>
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
                                <h5 class="text-uppercase mb-0">User Name</h5>
                                <p class="text-muted mb-0">About </p>
                                <p class="text-uppercase mb-0"><strong>+91 0000 000000 </strong></p>
                                <div class="rattings mb-4">
                                    <i class="fa fa-star text-warning"></i>
                                    <i class="fa fa-star text-warning"></i>
                                    <i class="fa fa-star text-warning"></i>
                                    <i class="fa fa-star text-warning"></i>
                                    <i class="fa fa-star-o text-warning"></i>
                                </div>
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
        <footer class="sticky-footer">
            <div class="container">
                <div class="text-center">
                    <small>Copyright &copy; VectorLab 2018</small>
                </div>
            </div>
        </footer>
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

