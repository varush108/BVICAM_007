<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Mosaddek">

    <!--favicon icon-->
    <link rel='shortcut icon' href='favicon.png' type='image/png'/>

    <title>Register Inspector</title>

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
	<?php include('header.php') ?>
    <!--/navigation : sidebar & header-->

    <!--main content wrapper-->
    <div class="content-wrapper">

        <div class="container-fluid">

            <!--page title-->
            <div class="page-title mb-4 d-flex align-items-center">
                <div class="mr-auto">
                    <h4 class="weight500 d-inline-block pr-3 mr-3 border-right">Inspector Register</h4>

                </div>
            </div>
            <!--/page title-->


            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="round-form" role="tabpanel" aria-labelledby="round-form-tab">
                    <div class="row">
                        <div class="col-xl-12 col-md-12">
                            <div class="card card-shadow mb-12">
                                <div class="card-header border-0">
                                    <div class="custom-title-wrap bar-danger">
                                        <div class="custom-title">Inspection Form</div>
                                    </div>
                                </div>
                                <div class="card-body">
								<form name="inspectorRegistration" id="inspectorRegistration" method="post">
                                    <div class="form-group">
                                        <label>Name</label>
                                        <input class="form-control" type="text" name="userName" placeholder="Name of Inspector" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Email </label>
                                        <input class="form-control" type="email" name="userEmail" placeholder="Email" required>
                                    </div>
									<div class="form-group">
										<label>Date of Birth</label>
										<input type="text" onfocus="(this.type='date')" onblur="(this.type='text')" name="userDOB" class="form-control" id="userDOB" placeholder="Enter Date Of Birth" required>
									</div>
									<div class="form-group">
										<label>Mobile Number</label>
										<input type="text" pattern=".{10,12}"   title="Mobile no must be of 10-12 digits only." class="form-control" name="userMobile" id="userMobile" placeholder="Enter Mobile Number" required>
									</div>
									<div class="form-group">
										<label>Aadhaar Number</label>
										<input type="text" pattern=".{10,12}"   title="Aadhaar no must be of exactly 12 digits." class="form-control" name="userAadhar" id="userAadhar" placeholder="Enter Aadhaar Number" required>
									</div>
									<div class="form-group">
                                        <label>Zone</label>
                                        <select class="form-control" name="userZone">
                                            <option disabled selected>Small Zone</option>
											<option value="central">central</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Rank</label>
                                        <input class="form-control" type="text" name="userRank" placeholder="Default input">
                                    </div>
                                   
                                    <div class="form-group">
											
											<button type="submit" class="btn btn-success">SUBMIT</button>
                                    </div>
									</form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



        </div>
		<div class="modal fade" id="regComplete" tabindex="-1" role="dialog" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><i class="fa fa-times"></i></span></button>
						<h4 class="modal-title">Registeration Complete</h4>
					</div>
					
						<div class="modal-body">
							<p id="regMsg"></p>
							
						</div>
						<div class="modal-footer">
							<a type="input" href="" name="submit" value="resendEmail" class="btn btn-success btn-icon"><i class="fa fa-check-square-o"></i> Close</a>
						</div>
					
				</div>
			</div>
			
		</div>

        <!--footer-->
        <?php include('footer.php') ?>
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
	 <script src="assets/js/registrationInspector.js"></script>
</body>

</html>

