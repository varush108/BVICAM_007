<?php
$rid=$_GET["ref_no"];
require_once 'config.php';
		$sql = "SELECT id,name from installation_checklist";
        if($stmt = $pdo->prepare($sql)){

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Mosaddek">

    <!--favicon icon-->
    <link rel='shortcut icon' href='favicon.png' type='image/png'/>

    <title>Add Installation Checklist</title>

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
    <?php include('header.php'); ?>
    <!--/navigation : sidebar & header-->

    <!--main content wrapper-->
    <div class="content-wrapper">
	

        <div class="container-fluid">

            <!--page title-->
            <div class="page-title mb-4 d-flex align-items-center">
                <div class="mr-auto">
                    <h4 class="weight500 d-inline-block pr-3 mr-3 border-right">Add Installation Checklist</h4>
                </div>

            </div>
            <!--/page title-->


            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="round-form" role="tabpanel" aria-labelledby="round-form-tab">
                    <div class="row">
                        
                        <div class="col-xl-6 col-md-6">
                            

                            <div class="card card-shadow mb-4">
                                <div class="card-header border-0">
                                    <div class="custom-title-wrap bar-success">
                                        <div class="custom-title">Form controls</div>
                                    </div>
                                </div>
								
                                <div class="card-body">
                                
                                        
                                        <div class="form-group">
                                            <label for="checklist">Select Checklist</label>
                                            <select class="form-control form-control-lg" id="checklist" required>
											<option disabled selected> select an option</option>
											<?php if($stmt->execute()){
													while($row = $stmt->fetch()){														
											?>
                                                <option value="<?= $row["id"]?>"><?=$row["name"]?></option>
											<?php 
											}
											}
											}
											?>
                                            </select>
                                        </div>
										<input type="hidden" name="rid" id="rid" value="<?=$rid?>"/>
										<div class=" form-group">
										<button class="btn btn-primary" id="addCL" onclick="add()">ADD</button>
										</div>
										<div id="loader" class="loader"></div>
										<div id="request_details" class="card-body">
                            <div class="alert alert-warning" role="alert">
                                <h4 class="alert-heading">CheckList</h4>
                                <hr>									
								<p id="list">
								<p>
								
                            </div>
                        </div>
						<div class=" form-group">
										<button class="btn btn-success" id="submitCL" onclick="submit()">SUBMIT</button>
										</div>
						
                                    
                                </div>
                            </div>
							
							

                           
                        </div>
						<div class="col-xl-6 col-md-6">
						                            <div class="card card-shadow mb-4">
                                <div class="card-header border-0">
                                    <div class="custom-title-wrap bar-success">
                                        <div class="custom-title">Map Letter</div>
                                    </div>
                                </div>
                                <div class="card-body">
                                     <embed src="test.pdf" width="600" height="500" alt="pdf" pluginspage="http://www.adobe.com/products/acrobat/readstep2.html">
									
                                </div>
                            </div>
						
						</div>
                    </div>
                </div>

                </div>
            </div>


	<div class="modal fade" id="checklistAdded" tabindex="-1" role="dialog" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<h4 class="modal-title">Checklist Added</h4>
					</div>
					
						<div class="modal-body">
							<p id="regMsg">CheckList has been added. <br> Please allocate Inspector now for completion. </p>
							
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-success btn-icon"  data-toggle="modal" data-target="#allocateInspector"><i class="fa fa-check-square-o"></i> Allocate inspector</button>
						</div>
					
				</div>
			</div>
			
		</div>
        <div class="modal fade" id="allocateInspector" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel5" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel5">Allocate Inspector</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <form name="allocate" id="allocate">
                                                        <input id="rid" name="rid" type="hidden"></input>
                                    <div class="form-group">
                                        <label>Select Inspector</label>
                                        <select class="form-control" id="inspectorList" name="Inspector">
                                        <option disabled selected>CHOOSE AN INSPECTOR</option>
                                        <?php
                                        	$sql = "SELECT user.UID,user.name from inspectors,user where user.UID = inspectors.user_id";
                                            if($stmt = $pdo->prepare($sql)){
                                                if($stmt->execute())
                                                {
                                                    while($row=$stmt->fetch())
                                                    {
                                                
                                            
                                        ?>
                                            
                                            <option value="<?= $row['UID']?>"><?= $row['name']?></option>
                                            <?php
                                                    }
                                                }
                                            }
                                            ?>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Select Date</label>
                                        <select class="form-control" id="dateList" name="Inspector">
                                        <option disabled selected>CHOOSE AN INSPECTION DATE</option>
                                        <option>10 April 2018</option>
                                        <option>11 April 2018</option>
                                        </select>
                                    </div>
                                                    </form>
                                                    <div id="successMsg">
                                                        
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                <?php printf('<a href= "#" onClick="handle(\'%s\');" class="btn btn-success btn-sm form-pill">ADD INSPECTOR</a> ', $rid);?>
											</div>
                                                
                                            </div>
                                        </div>
                                    </div>

        <!--footer-->
        <?php include('footer.php'); ?>
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
	
	function submit()
	{
		$('#submitCL').prop('disabled',false);
		$('#loader').show();
		$('#addCL').prop('disabled',true);
		var rid=$('#rid').val();
		$.post("services/addChecklist.php",{rid : rid,cid : CL},function(response){
		if(response==1)
		{
			$('#checklistAdded').modal('show');
		}
		else
		{
			alert("error occured. Please TRY AGAIN !!!");
		}
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

