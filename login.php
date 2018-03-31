<!DOCTYPE html>
<html lang="en">
<?php 
if($_COOKIE["language"]==="english")
{
$label=[
    "l001"=>"LOGIN",
    "l002"=>"Enter Email",
    "l003"=>"Enter Password",
    "l004"=>"Create new account"
    ];
}
else
{
$label=[
    "l001"=>"लॉग इन",
    "l002"=>"ईमेल दर्ज करें",
    "l003"=>"पास वर्ड दर्ज करें",
    "l004"=>"नया खाता बनाएँ"
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
     
<style>
.loader,.pcls {
    border: 8px solid #f3f3f3; /* Light grey */
    border-top: 8px solid #3498db; /* Blue */
    border-radius: 50%;
    width: 50px;
    height: 50px;
    animation: spin 2s linear infinite;
}

@keyframes spin {
    0% { transform: rotate(0deg); }
    100% { transform: rotate(360deg); }
}
</style>

</head>

<body class="login-bg">

    <div class="container align-items-center">
        <div class="row">
            <div class="col-xl-12 d-lg-flex align-items-center" >
                <!--login form-->
                <div class="login-form " >
                    <h4 class="text-uppercase text-purple text-center mb-5"><?= $label['l001']; ?></h4>
                    <form method="post" name="loginForm" id="loginForm">
					<div id="err" class="form-group alert alert-danger" >
                              <?= $label["l004"]; ?>
                         </div>
                        <div class="form-group">
                            <input type="email" class="form-control" name="emailLog" id="emailLog" placeholder="<?= $label['l002'];?>">
                        </div>
                        <div class="form-group mb-4">
                            <input type="password" class="form-control" name="passwordLog" id="passwordLog" placeholder="<?= $label['l003']; ?>">
                        </div>

                        <div class="form-group clearfix" style="text-align:center;">
                            <!--<a href="#" class="float-left forgot-link my-2">Forgot Password ?</a>-->
                             <div id="loader" class="loader" ></div>
                            <button id="loginSubmit" type="submit" class="btn btn-purple "><?= $label["l001"]; ?></button>
                        </div>
                        
                       


                       <div class="form-divider"></div>

                        <!-- <a href="#" class="btn btn-facebook text-uppercase"><i class="fa fa-facebook-square"></i> Login with facebook</a> -->
                        <div class="text-center mt-4">
                            <a href="registration.php" class="btn-link text-capitalize f12"><?= $label["l004"]; ?></a>
                        </div>
                    </form>
                </div>
                <!--/login form-->

                

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
	<script>
		$(document).ready(function () {
		     $('#loader').hide();
			$("#err").hide();	
			$('form#loginForm').submit(function(e) {
			 //   $('#loader').show();
				    $('#loginSubmit').prop('disabled',true);
					
				e.preventDefault();
				$.post("services/checkLogin.php", $("#loginForm").serialize(), function(data) {
				    console.log(data);
					if(data==1)
					{
		//			    $('#loader').hide();
				        $('#loginSubmit').prop('disabled',false);
					
						$("#err").show();
					}
					else
					{
						 window.location.replace(data);
					}
				});
			});
	
	
	});
	
	</script>
	
</body>

  
</html>

