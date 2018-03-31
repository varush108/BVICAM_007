<!DOCTYPE html>
<html lang="en">
<?php 
if($_COOKIE["language"]==="english")
{
$label=[
    "l001"=>"Registration",
    "l002"=>"Create account",
    "l003"=>"Enter name",
    "l004"=>"Enter email",
    "l005"=>"Enter date of birth",
    "l006"=>"Enter mobile number",
    "l007"=>"Enter Aadhaar Number",
    "l008"=>"Enter Password",
    "l009"=>"Confirm Password",
    "l0010"=>"Password and Confirmed password are not same!",
    "l0011"=>"I agree to the terms",
    "l0012"=>"Sign Up",
    "l0013"=>"Sign up with facebook",
    "l0014"=>"Already have an account ?",
    "l0015"=>"Login"
    ];
}
else
{
$label=[
    "l001"=>"पंजीकरण",
    "l002"=>"खाता बनाएं",
    "l003"=>"नाम दर्ज करें",
    "l004"=>"ईमेल दर्ज करें",
    "l005"=>"जन्म् की तारीख़ दर्ज करे",
    "l006"=>"मोबाइल नंबर दर्ज करें",
    "l007"=>"आधार संख्या दर्ज करें",
    "l008"=>"पास वर्ड दर्ज करें",
    "l009"=>"पासवर्ड की पुष्टि कीजिये",
    "l0010"=>"पासवर्ड और पुष्टि किए गए पासवर्ड समान नहीं हैं!",
    "l0011"=>"मुझे शर्तें स्वीकार हैं",
    "l0012"=>"साइन अप करें",
    "l0013"=>"फेसबुक से साइन अप करे",
    "l0014"=>"क्या आपके पास पहले से एक खाता मौजूद है ?",
    "l0015"=>"लॉग इन करे"
    ];
}
    
?> 
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Mosaddek">

    <!--favicon icon-->
    <link rel='shortcut icon' href='favicon.png' type='image/png'/>

    <title><?= $label["l001"]; ?></title>

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

<body class="login-bg">

    <div class="container">
        <div class="row">
            <div class="col-xl-12 d-lg-flex align-items-center">
                <!--login form-->
                <div class="login-form">
                    <h4 class="text-uppercase text-purple text-center mb-5"><?= $label["l002"]; ?></h4>
                    <form name="registrationForm" id="registrationForm" method="post">
						<div class="form-group">
                            <input type="text" class="form-control" name="userName" id="userName" placeholder="<?= $label["l003"]; ?>" required>
							
                        </div>
						
                        <div class="form-group">
                            <input type="email" class="form-control" name="userEmail" id="userEmail1" placeholder=<?= $label["l004"]; ?>" required>
                        </div>
						<div class="form-group">
                            <input type="text" onfocus="(this.type='date')" onblur="(this.type='text')" name="userDOB" class="form-control" id="userDOB" placeholder="<?= $label["l005"]; ?>" required>
                        </div>
						<div class="form-group">
                            <input type="text" pattern=".{10,12}"   title="Mobile no must be of 10-12 digits only." class="form-control" name="userMobile" id="userMobile" placeholder="<?= $label["l006"]; ?>" required>
                        </div>
						<div class="form-group">
                            <input type="text" pattern=".{12}"   title="Aadhaar no must be of exactly 12 digits." class="form-control" name="userAadhar" id="userAadhar" placeholder="<?= $label["l007"]; ?>" required>
                        </div>
                        <div class="form-group mb-4">
                            <input type="password" class="form-control" name="password" id="password" placeholder="<?= $label["l008"]; ?>" required>
                        </div>
                        <div class="form-group mb-4">
                            <input type="password" class="form-control" id="password_again" placeholder="<?= $label["l009"]; ?>" required>
                        </div>
						<div id="password_err" class="alert alert-danger" >
                                <?= $label["l0010"]; ?>
                         </div>
						
                        <div class="custom-control custom-checkbox my-1 mr-sm-2 position-relative">
                            <span style="position: absolute; top: 8px; left: 0;">
                                <input type="checkbox" class="custom-control-input" id="customControlInline">
                                <label class="custom-control-label" for="customControlInline" style="padding-left: 25px"><?= $label["l0011"]; ?></label>
                            </span>
                            <button type="submit" class="btn btn-purple float-right"><?= $label["l0012"]; ?></button>
                        </div>

                       <div class="form-divider"></div>

                         <!--<a href="#" class="btn btn-facebook text-uppercase"><i class="fa fa-facebook-square"></i> <?= $label["l0013"]; ?></a> -->
                        <div class="text-center mt-4 f12">
                             <?= $label["l0014"]; ?> <a href="login.php" class="btn-link text-capitalize"><?= $label["l0015"]; ?></a>
                        </div>
                    </form>
                </div>
                <!--/login form-->

                <!--
                <div class="login-promo registration-promo  basic-gradient  text-white position-relative">
                    <div class="login-promo-content text-center">
                        <a href="#" class="mb-4 d-block">
                            <img class="pr-3" src="assets/img/logo-icon.png" srcset="assets/img/logo-icon@2x.png 2x" alt="">
                            <span class="text-uppercase weight800 text-white f18">dashlab</span>
                        </a>
                        <h1 class="text-white">Let’s Start The Journey</h1>
                        <p>Enter the most beautiful admin ever</p>
                        <a href="#" class="play-btn mt-4"><i class="fa fa-play"></i></a>
                    </div>
                </div>-->

            </div>
        </div>
    </div>
	<div class="modal fade" id="mobileOTP" tabindex="-1" role="dialog" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><i class="fa fa-times"></i></span></button>
						<h4 class="modal-title">Mobile Verification</h4>
					</div>
					<form name="OTPform" id="OTPform" method="post">
						<div class="modal-body">
							<p id="OTPmsg"></p>
							<p id="OTPerror" >The Otp you entered is not correct. Please enter the correct OTP.</p>
							<div class="form-group">
								<label for="accountEmail">OTP</label>
								<input id="OTP"  name="OTP"  type="text" class="form-control" required="" value="" />
								<span class="help-block">The OTP sent on your mobile number.</span>
							</div>
						</div>
						<div class="modal-footer">
							<button class="btn btn-success btn-icon"><i class="fa fa-check-square-o"></i> Verify</button>
						
						</div>
					</form>
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
							<a type="input" href="login.php" name="submit" value="resendEmail" class="btn btn-success btn-icon"><i class="fa fa-check-square-o"></i> Login</a>
						</div>
					
				</div>
			</div>
			
		</div>

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
	<script src="assets/js/registration.js"></script>
</body>
  
</html>

