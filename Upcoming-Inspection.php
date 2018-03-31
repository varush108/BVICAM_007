<!DOCTYPE html>
<html lang="en">
 <?php
session_start();
require_once 'config.php';
		$sql = "SELECT ref_no.ref_no,request_details.visits,request_details.ref_id, request_details.status,request_details.building_address,request_details.DOI,request_details.inspector_allocated,user.name as uname FROM request_details,user,ref_no WHERE request_details.ref_id=ref_no.id and ref_no.user_id = user.UID  AND request_details.inspector_allocated= :uid AND request_details.status IN ('Accepted','Shortcomings' ) "  ;
        
        if($stmt = $pdo->prepare($sql)){
			$stmt->bindParam(':uid', $_SESSION["uid"]);

?>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Mosaddek">

    <!--favicon icon-->
    <link rel='shortcut icon' href='favicon.png' type='image/png'/>

    <title>Upcoming Inspections</title>

    <!--web fonts-->
    <link href="http://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700,800" rel="stylesheet">
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
    <link rel='shortcut icon' href='favicon.png' type='image/png'/>
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
                    <h4 class="weight500 d-inline-block pr-3 mr-3 border-right">Upcoming Inspections</h4>
                    
                </div>
            </div>
            <!--/page title-->

            <div class="row">
                <div class="col-xl-12 col-md-12">
					<div class="card card-shadow mb-4">
                        <div class="card-header border-0">
                            <div class="custom-title-wrap bar-primary">
                                <div class="custom-title">Upcoming Inspections</div>
                            </div>
                        </div>
                        <div class="card-body">
                            <table class="table table-hover table-dark">
                                <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Reference Number</th>
                                    <th scope="col">Owner Name</th>
                                    <th scope="col">Building Address</th>
                                    <th scope="col">Date Of Inspection</th>
                                    <th scope="col">Visit Number</th>
                                    <th scope="col">Details</th>
									<th scope="col">Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                 <?php if($stmt->execute()){
                                        $count=0;
								while($row = $stmt->fetch()){
								    $count++;
									 
										 
									 
									?>
									<tr>
                                    <th scope="row"><?=$count?></th>
                                    <td><?= $row["ref_no"]?></td>
                                    <td><?= $row["uname"]?></td>
								    <td><?= $row["building_address"]?></td>

									<td><?= $row["DOI"]?></td>
									<td><?= $row["visits"]?></td>
                                   
                                    
                                    <td>
										<?php printf('<a href= "#" onClick="handle(\'%s\');" class="btn btn-danger btn-sm form-pill">View</a> ', $row["ref_no"]);?>
									</td>
									 <td>
										<a href= "Inspection-Form.php?rid=<?= $row['ref_id'];?> " target="_blank" class="btn btn-success btn-sm form-pill">DO INSPECTION</a>
									</td>
                                </tr>
									 <?php }}}?>

                                </tbody>
                            </table>
                        </div>
						<div class="col-xl-12 col-md-12">
							 <div id="request_details" class="card-body">
                            <div class="alert alert-warning" role="alert">
                                <h4 class="alert-heading">Visits</h4>
                                <p id="visits"></p>
                                <hr>
								<h4 class="alert-heading">Status</h4>
                                <p id="status">
									
								</p>
                                <hr>
								<h4 class="alert-heading">Details Of Owner</h4>
                                <p id="InsName"></p>
								
                                <p id="InsRank"> </p>
								
								<p id="InsMobile"></p>
								
								<p id="InsEmail"></p>
								
								<p id="InsRatings"></p>
								
								<p id="InsRank"></p>
								
								
                            </div>
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

    <!--[if lt IE 9]>
    <script src="assets/vendor/modernizr.js"></script>
    <![endif]-->

    <!--basic scripts initialization-->
    <script src="assets/js/scripts.min.js"></script>
		<script>
	
	$(document).ready(function () {
	
	$('#request_details').hide();
	
	});
	</script>
	
	<script>
	
	function handle(ref_no)
	{
		$('#request_details').show();
	
		$.post("services/getRequestDataInspector.php",{ref_no : ref_no},function(response){
		var data=JSON.parse(response);
		console.log(data);
		if(data["success"] && data["data"])
		{
			$('#visits').html(data["visits"]);
			if(data["status"]=="Submitted")
			{
				$('#status').html('<button type="button" class="btn btn-primary">Submitted</button>');
			}
			else if(data["status"]=="In Process")
			{
				$('#status').html('<button type="button" class="btn btn-warning">In Process</button>');
			}
			else if(data["status"]=="Accepted")
			{
				$('#status').html('<button type="button" class="btn btn-success">Accepted</button>');
			}
			else if(data["status"]=="Rejected")
			{
				$('#status').html('<button type="button" class="btn btn-danger">Rejected</button>');
			}
			else if(data["status"]=="Shortcomings")
			{
				$('#status').html('<button type="button" class="btn btn-info">Shortcomings</button>');
			}
			
			$('#InsName').html('<strong>Name :</strong>'+data["InspectorName"]);
			$('#InsEmail').html('<strong>Email :</strong>'+data["InspectorEmail"]);
			$('#InsMobile').html('<strong>Contact No :</strong>'+data["InspectorMobile"]);
						
		}
		else
		{
			$('#heading1').append("ERROR OCCURED");
		}
		
		});	

	}
</script>

</body>

</html>