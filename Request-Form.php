<!DOCTYPE html>
<html lang="en">
<?php 
if($_COOKIE["language"]==="english")
{
$lab=[
    "l001"=>"Inspection Request Form",
    "l002"=>"Form",
    "l003"=>"Upload your photo",
    "l004"=>"Upload"
    ];
}
else
{
$lab=[
    "l001"=>"निरीक्षण अनुरोध फॉर्म",
    "l002"=>" फॉर्म",
    "l003"=>"अपनी फोटो अपलोड करें",
    "l004"=>"अपलोड"
    ];
}
    
?>
<?php 

require_once 'config.php';
?>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Mosaddek">

    <!--favicon icon-->
    <link rel='shortcut icon' href='favicon.png' type='image/png'/>

    <title><?= $lab["l001"]; ?></title>

    <!--web fonts-->
    <link href="http://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700,800" rel="stylesheet">
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
0
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
                    <h4 class="weight500 d-inline-block pr-3 mr-3 border-right"><?= $lab["l001"]; ?></h4>
                    
                </div>
            </div>
            <!--/page title-->

            <div class="row">

                <div class="col-xl-12">
                    <div class="card card-shadow mb-4">
                        <div class="card-header border-0">
                            <div class="custom-title-wrap bar-warning">
                                <div class="custom-title"><?= $lab["l002"]; ?></div>
                            </div>
                        </div>
                        <div class="card-body">
						
					<div class="input-group mb-3">
										<div class="custom-file">
											<input type="file" class="custom-file-input" id="inputGroupFile03">
											<label class="custom-file-label" for="inputGroupFile03">Upload your Photo</label>
										</div>
									</div>				<div id="loader" class="loader row center"></div>
									<button type="submit" class="btn btn-success"><?= $lab["l004"]; ?></button>
						
						<form name="requestForm" id="requestForm" action="services/submitRequest.php" method="post">

                                    <div class="form-group">
                                        <label>Reference Number</label>
                                        <input class="form-control" name="ref_no" id="ref_no" type="text" placeholder="Reference Number" required>
                                    </div>
                                    <div id="ref_error" style="color:red;">Invalid reference id</div>
                                    <div class="form-group">
                                        <label>Name</label>
                                        <input class="form-control" name ="ownerName" id="ownerName" type="text" placeholder="Name" required>
                                    </div>
                                   <div class="form-group">
                                        <label>Building address</label>
                                        <input class="form-control" name="address" id="address" type="text" placeholder="Building Address" required>
                                    </div>
									
									<?php
											$sql="SELECT id,question from request_questionnare";
											if($stmt = $pdo->prepare($sql))
											{
												if($stmt->execute() )
											{
													while($row = $stmt->fetch())
													{
													
												
									?>
									<div class="form-group">
                                        <label><?= $row["question"]; ?></label>
										<input type ="hidden" name ="question[]" value="<?= $row["id"];?>"/>
                                        <input class="form-control" name ="answer[]" id="ownerName" type="text" placeholder="Answer" required>
                                    </div>
									<?php 
													} 
												}
											}
									?>
									<div id="loader" class="loader"></div>
                                    <div class="form-group">
											<button type="submit" id="submit" class="btn btn-info">Submit</button>
                                    </div>
                                    
                                   	
									</form>
									
                           
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="modal fade" id="requestAdded" tabindex="-1" role="dialog" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<h4 class="modal-title">Request Added</h4>
					</div>
					
						<div class="modal-body">
							<p id="regMsg">Request been added.</p>
							
						</div>
						<div class="modal-footer">
							<a type="input" href="View-Status.php" name="submit" value="resendEmail" class="btn btn-success btn-icon"><i class="fa fa-check-square-o"></i> Close</a>
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
	<script>
	$(document).ready(function () {
	    
	
	$('#loader').hide();
	$('#ref_error').hide();
	
	
	});
	
	$("#ref_no").keyup(function(){ 
	    var ref_no = $('#ref_no').val();
	    $.post("services/getRefNo.php",{ref_no : ref_no},function(response){
	        console.log(response);
		if(response==0)
		{
		    $('#ref_error').show();
		     $(":input").not("[name=ref_no]").prop("disabled", true);
		}
		else
		{
		    $('#ref_error').hide();
		    $(":input").not("[name=ref_no]")
        .prop("disabled", false);

		}
		});
	});
	
	
	$("#ref_no").change(function(){ 
	    var ref_no = $('#ref_no').val();
	    $.post("services/getRefNo.php",{ref_no : ref_no},function(response){
	        console.log(response);
		if(response==0)
		{
		    $('#ref_error').show();
		     $(":input").not("[name=ref_no]").prop("disabled", true);
		}
		else
		{
		    $('#ref_error').hide();
		    $(":input").not("[name=ref_no]")
        .prop("disabled", false);

		}
		});
	});
		
	
	$('form#requestForm').submit(function(e) {
		e.preventDefault();
		$('#loader').show();
		$.post("services/submitRequest.php",$("#requestForm").serialize(),function(response){
		console.log(response);
		if(response==1)
		{
		    	$('#loader').hide();
	
			$('#requestAdded').modal('show');
		
		}
		else
		{
		    	$('#loader').hide();
		    
			alert("error occured. Please TRY AGAIN !!!");
		}
		});
		
		
	});
	
	
	</script>
</body>

</html>

