<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Mosaddek">

    <!--favicon icon-->
    <link rel='shortcut icon' href='favicon.png' type='image/png'/>

    <title>Add Building Map</title>

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
     
<style>
.loader {
    border: 16px solid #f3f3f3; /* Light grey */
    border-top: 16px solid #3498db; /* Blue */
    border-radius: 50%;
    width: 120px;
    height: 120px;
    animation: spin 2s linear infinite;
}

@keyframes spin {
    0% { transform: rotate(0deg); }
    100% { transform: rotate(360deg); }
}
</style>

</head>

<body class="fixed-nav top-nav ">

    <!--navigation : sidebar & header-->
    <nav class="navbar navbar-expand-lg fixed-top navbar-light" id="mainNav">
        <div class="box-container">
           <!--brand name for responsive-->
           <a class="navbar-brand navbar-brand-responsive" href="home/" >
               <img class="pr-3 float-left" src="assets/img/main_logo.png" srcset="assets/img/main_logo@2x.png 2x"  alt=""/>
               <div class="float-left">
                   <div>DELHI FIRE SERVICE</div>
               </div>
           </a>
           <!--/brand name for responsive-->

            <!--responsive navigation list toggle-->
            <button class="navbar-toggler navigation-list-toggler" type="button" data-toggle="collapse" data-target="#navbarListResponsive" aria-controls="navbarListResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!--/responsive navigation list toggle-->

            <!--responsive nav notification toggle-->
            <button class="navbar-toggler nav-notification-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span> <i class="vl_ellipsis-fill-v f16"></i></span>
            </button>
            <!--/responsive nav notification toggle-->

            <div class="collapse navbar-collapse" id="navbarResponsive">

                <!--brand name-->
                <a class="navbar-brand navbar-hide-responsive" href="home/">
                    <img class="pr-3 float-left" src="assets/img/main_logo.png" srcset="assets/img/main_logo@2x.png 2x"  alt=""/>
                    <div class="float-left">
                        <div> DELHI FIRE SERVICE</div>
                    </div>
                </a>
                <!--/brand name-->

                <!--header rightside links-->
                <ul class="navbar-nav header-links ml-auto hide-arrow">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle mr-lg-3" id="userNav" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <div class="user-thumb">
                                <img class="rounded-circle" src="assets/img/avatar/avatar1.jpg" alt=""/>
                            </div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userNav">
                            <a class="dropdown-item" href="#">My Profile</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="logout.php">Sign Out</a>
                        </div>
                    </li>
                </ul>
                <!--/header rightside links-->
            </div>
        </div>
    </nav>
    <!--/navigation : sidebar & header-->

    <!--main content wrapper-->
    <div class="content-wrapper">

        <div class="container-fluid">

            <!--page title-->
            <div class="page-title mb-4 d-flex align-items-center">
                <div class="mr-auto">
                    <h4 class="weight500 d-inline-block pr-3 mr-3 border-right">Add Building Map</h4>
                    
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
                                        <div class="custom-title">Add Building Map</div>
                                    </div>
                                </div>
                                <div class="card-body">
								<form name="addRefNo" id="addRefNo" method="post">
                                    <div class="form-group">
                                        <label>Reference Number</label>
                                        <input class="form-control" name="ref_no" id="ref_no" type="text" placeholder="Reference Number" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Name</label>
                                        <input class="form-control" name ="ownerName" id="ownerName" type="text" placeholder="Name" required>
                                    </div>
                                    <div class="form-group">
                                            <label for="exampleFormControlTextarea1">Address</label>
                                            <textarea class="form-control" id="address" name="address" placeholder="Address" rows="3"></textarea>
                                    </div>
									<div class="input-group mb-3">
										<div class="custom-file">
											<input type="file" class="custom-file-input" id="inputGroupFile03">
											<label class="custom-file-label" for="inputGroupFile03">Choose Building Map</label>
										</div>
									</div>
									<div class="input-group mb-3">
										<div class="custom-file">
											<input type="file" class="custom-file-input" id="inputGroupFile03">
											<label class="custom-file-label" for="inputGroupFile03">Choose checklist Letter</label>
										</div>
									</div>
                                    <div class="form-group">
											<button type="submit" id="submit" class="btn btn-info">Submit</button>
                                    </div>
									<div id="loader" class="loader"></div>
									</form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
		<div class="modal fade" id="refNoAdded" tabindex="-1" role="dialog" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<h4 class="modal-title">Reference Number Added</h4>
					</div>
					
						<div class="modal-body">
							<p id="regMsg">Reference Number has been added.</p>
							
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
	<script>
	$(document).ready(function () {
	
	$('#loader').hide();
	
	$('form#addRefNo').submit(function(e) {
		e.preventDefault();
		$('#loader').show();
		$('#submit').hide();
		var rid=$('#rid').val();
		$.post("services/addRefNo.php",$("#addRefNo").serialize(),function(response){
		console.log(response);
		if(response==1)
		{
			$('#refNoAdded').modal('show');
			$('#loader').hide();
			$('#submit').show();

		}
		else
		{
			alert("error occured. Please TRY AGAIN !!!");
		}
		});
		
		
	});
	
	});
	
	</script>
</body>

</html>

