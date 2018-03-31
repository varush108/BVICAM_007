<!DOCTYPE html>
<html lang="en">
<?php
session_start();
require_once 'config.php';
		$sql = "SELECT ref_no.ref_no,request_details.visits,request_details.created_at as DOC, request_details.ref_id, request_details.status,request_details.building_address,request_details.DOI,request_details.inspector_allocated,user.name as uname FROM request_details,user,ref_no WHERE request_details.ref_id=ref_no.id and ref_no.user_id = user.UID  AND request_details.inspector_allocated= :uid AND DOI IS NULL "  ;
        
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

    <title>Request Received</title>

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
                    <h4 class="weight500 d-inline-block pr-3 mr-3 border-right">Requests Received</h4>
                   
                </div>
            </div>
            <!--/page title-->

            <div class="row">
                

                <div class="col-xl-12 col-md-12">
					<div class="card card-shadow mb-4">
                        <div class="card-header border-0">
                            <div class="custom-title-wrap bar-primary">
                                <div class="custom-title">List of Requests</div>
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
                                    <th scope="col">Date of Request</th>
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

									<td><?= $row["DOC"]?></td>
									
                                    
                                    <td>
										<?php printf('<a href= "#" onClick="accept(\'%s\');" class="btn btn-success btn-sm form-pill">Accept</a> ', $row["ref_id"]);?>
									
										<?php printf('<a href= "#" onClick="decline(\'%s\');" class="btn btn-danger btn-sm form-pill">Decline</a> ', $row["ref_id"]);?>
									</td>
									
                                </tr>
									 <?php }}}?>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

        </div>
                <div class="modal fade" id="allocateInspector" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel5" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel5">Add Inspection Date</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <form name="allocate" id="allocate">
                                                        <input id="rid" name="rid" type="hidden"></input>
                                    <div class="form-group">
                                        <label>Select Inspector</label>
                                        <input type="text" onfocus="(this.type='date')" onblur="(this.type='text')" name="userDOB" class="form-control" id="userDOB" placeholder="Enter Date Of Birth" required>
                                    </div>
                                                    </form>
                                                    <div id="successMsg">
                                                        
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                <?php printf('<a href= "#" onClick="handle(\'%s\');" class="btn btn-success btn-sm form-pill">Ad Date</a> ', $rid);?>
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
	
	});
	var CL = new Array();
	$('#submitCL').prop('disabled',true);
	function add()
	{
			$('#submitCL').prop('disabled',false);
		$('#loader').show();
			$('#addCL').prop('disabled',true);

		
		var mySelect = document.getElementById( "checklist" );
		var cid=mySelect.options[ mySelect.selectedIndex ].value;
		$.post("services/getChecklistNameFromId.php",{cid : cid},function(response){
						var data=JSON.parse(response);
			if(data["success"])
			{
			$('#list').append("<br>" + data["name"]);
			CL.push(cid);
			}
			else
			{
				alert("Error in Adding. TRY AGAIN!!!");
			}
			$('#loader').hide();
			$('#addCL').prop('disabled',false);
		});
		
		
	}
	
	function handle(rid)
    {
       // var rid =$('#rid').val();
          
			var mySelect = document.getElementById( "inspectorList" );
		var ins=mySelect.options[ mySelect.selectedIndex ].value;
		console.log("ins : "+ins);
        	$.post("services/updateAllocatedInspector.php",{rid : rid, ins : ins}, function(data) {

					 if(data==1)
					 {
						 
						 $("#successMsg").html("Inspector has been allocated.");
						 window.location.replace("handleRequests_sm.php");
					 }
					 else
					 {
						
						$("#successMsg").html("Inspector Couldn't be allocated.Please try again !!!!");
					}
					});
					
					
    }
	
	</script>
</body>

</html>

