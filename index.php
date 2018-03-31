<!DOCTYPE html>
<html lang="en">
<?php 

        header("location: home/index.html");
?>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Mosaddek">

    <!--favicon icon-->
    <link rel='shortcut icon' href='favicon.png' type='image/png'/>

    <title>Inspection Request Form</title>

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

    <!--jqery steps-->
    <link href="assets/vendor/jquery-steps/jquery.steps.css" rel="stylesheet">

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
    <!--/navigation : sidebar & header-->

    <!--main content wrapper-->
    <div class="content-wrapper">

        <div class="container-fluid">

            <!--page title-->
            <div class="page-title mb-4 d-flex align-items-center">
                <div class="mr-auto">
                    <h4 class="weight500 d-inline-block pr-3 mr-3 border-right">Inspection Request Form</h4>
                    <nav aria-label="breadcrumb" class="d-inline-block ">
                        <ol class="breadcrumb p-0">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item"><a href="#">Forms</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Inspection Request Form</li>
                        </ol>
                    </nav>
                </div>
            </div>
            <!--/page title-->

            <div class="row">

                <div class="col-xl-12">
                    <div class="card card-shadow mb-4">
                        <div class="card-header border-0">
                            <div class="custom-title-wrap bar-warning">
                                <div class="custom-title">Form</div>
                            </div>
                        </div>
                        <div class="card-body">
                            <form id="wizard-validation-form" action="#" class="right-text-label-form">
                                <div>
                                    <h3>Step 1</h3>
                                    <section>
                                        <div class="form-group row">
                                            <label class="col-sm-4 col-form-label col-form-label-sm" for="userName">Question</label>
                                            <div class="col-sm-6">
                                                <input class="required form-control" id="userName" name="userName" type="text">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-4 col-form-label col-form-label-sm" for="password"> Question</label>
                                            <div class="col-sm-6">
                                                <input id="password" name="password" type="text" class="required form-control">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-sm-4 col-form-label col-form-label-sm" for="confirm">Question</label>
                                            <div class="col-sm-6">
                                                <input id="confirm" name="confirm" type="text" class="required form-control">
                                            </div>
                                        </div>

                                    </section>
                                    <h3>Step 2</h3>
                                    <section>

                                        <div class="form-group row">
                                            <label class="col-sm-4 col-form-label col-form-label-sm" for="name">Question *</label>
                                            <div class="col-sm-6">
                                                <input id="name" name="name" type="text" class="required form-control">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-4 col-form-label col-form-label-sm " for="surname"> Question *</label>
                                            <div class="col-sm-6">
                                                <input id="surname" name="surname" type="text" class="required form-control">

                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-sm-4 col-form-label col-form-label-sm" for="email">Question *</label>
                                            <div class="col-sm-6">
                                                <input id="email" name="email" type="text" class="required email form-control">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-sm-4 col-form-label col-form-label-sm" for="address">Question </label>
                                            <div class="col-sm-6">
                                                <input id="address" name="address" type="text" class="form-control">
                                            </div>
                                        </div>

                                    </section>
                                    <h3>Step 3</h3>
                                    <section>
										<div class="form-group row">
                                            <label class="col-sm-4 col-form-label col-form-label-sm" for="name">Question *</label>
                                            <div class="col-sm-6">
                                                <input id="name" name="name" type="text" class="required form-control">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-4 col-form-label col-form-label-sm " for="surname"> Question *</label>
                                            <div class="col-sm-6">
                                                <input id="surname" name="surname" type="text" class="required form-control">

                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-sm-4 col-form-label col-form-label-sm" for="email">Question *</label>
                                            <div class="col-sm-6">
                                                <input id="email" name="email" type="text" class="required email form-control">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-sm-4 col-form-label col-form-label-sm" for="address">Question </label>
                                            <div class="col-sm-6">
                                                <input id="address" name="address" type="text" class="form-control">
                                            </div>
                                        </div>
                                        
                                    </section>
                                    <h3>Step 4</h3>
                                    <section>
										<div class="form-group row">
                                            <div class="col-sm-12">
                                                <ul class="list-unstyled">
                                                    <li>First Name : Jane  </li>
                                                    <li>Last Name : Doe </li>
                                                    <li>Emial: jane_doe@testmail.com</li>
                                                    <li>Address: 123 Dreamland, USA </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-sm-12">
                                                <input id="acceptTerms" name="acceptTerms" type="checkbox" class="required">
                                                <label for="acceptTerms">I agree with the Terms and Conditions.</label>
                                            </div>
                                        </div>

                                    </section>
                                </div>
                            </form>
                        </div>
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

    <!--jquery validate-->
    <script src="assets/vendor/jquery-validation/jquery.validate.min.js"></script>

    <!--jquery steps-->
    <script src="assets/vendor/jquery-steps/jquery.steps.min.js"></script>
    <!--init steps-->
    <script src="assets/vendor/js-init/init-form-wizard.js"></script>

    <!--jquery stepy-->
    <script src="assets/vendor/jquery-steps/jquery.stepy.js"></script>

    <!--[if lt IE 9]>
    <script src="assets/vendor/modernizr.js"></script>
    <![endif]-->

    <!--basic scripts initialization-->
    <script src="assets/js/scripts.min.js"></script>
</body>

</html>

