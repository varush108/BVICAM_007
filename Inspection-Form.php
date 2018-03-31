<!DOCTYPE html>
<html lang="en">
<?php

session_start();
$rid=$_GET["rid"];
require_once 'config.php';
    $sql="SELECT installation_checklist.name,ref_checklist.id from installation_checklist,ref_checklist where installation_checklist.id=ref_checklist.checklist_id AND ref_checklist.ref_id=".$rid;
    
    if ($stmt = $pdo->prepare($sql)) {
        if ($stmt->execute()) {
            ?>


<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Mosaddek">

    <!--favicon icon-->
    <link rel='shortcut icon' href='favicon.png' type='image/png'/>

    <title>Inspection Form</title>

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
                    <h4 class="weight500 d-inline-block pr-3 mr-3 border-right">Inspection Form</h4>
                    
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
								<form name="inspectionForm" id="inspectionForm" method="post" action="response.php">
								<?php $total = $stmt->rowCount(); ?>
								<input type="hidden" name="count" value="<?= $total; ?>" > </input>
								<ul>
                                    <?php	$count=0;
            while ($row=$stmt->fetch()) {
                $count++; ?>
                                    <li class="question-li">
                                            <input type="hidden" name="question<?= $count; ?>" value="<?= $row['id']; ?>" class="question-number"> </input>
                                        <div class="form-group">
                                        <label><strong><?= $row["name"] ?></strong></label>
                                        <div class="input-group mb-3">
                                <select class="form-control checklist" name="answer<?= $count; ?>" id="checklist" required>
												<option selected value="yes">Installed</option>
												<option value="no">Not Installed</option>
                                            </select>
                                            <input type="hidden" name="image<?= $count; ?>" data-count="<?= $count; ?>">
                                <div class="input-group-append">
                                    <button class="btn btn-outline-secondary open-image-selector" type="button" data-count="<?= $count; ?>">Attach Photo</button>
                                </div>
                            </div>
									    </div>
                                    <img src="" class="preview-image" data-count="<?= $count ?>" style="max-width: 200px;">
									</li>
									<?php 
            }
        }
    }
    ?>
					
									<div class="form-group">
							       <input type="checkbox" name="shortcomingBox" id="shortcomingBox" onchange="valueChanged();" class="iCheck-flat" >
                                    <label class="control-label">Shortcomings (ifany)</label>		
									</div>
									<div id="shortcomings">
										<div class="form-group">
                                            <label for="shortcomingDesc">Shortcomings Descriptions</label>
                                            <textarea class="form-control" id="shortcomingDesc"  name="shortcomingDesc" placeholder="Description of Shortcomings" rows="3"></textarea>
										</div>
										<div class="form-group">
                                            <label for="daysExtended">Extension Given(in days)</label>
                                            <input type="text" class="form-control" id="daysExtended"  name="daysExtended" placeholder="No of days" ></input>
										</div>
										<div class="form-group">
                                            <label for="remarks">Remarks</label>
                                            <textarea class="form-control" id="remarks" placeholder="Remarks" rows="3"></textarea>
										</div>
									</div>
                                    <div class="form-group">
											<button type="submit" class="btn btn-success">Submit</button>
                                    </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div id="image-selector" class="collapse" style="text-align: center;">
                                        <select name="" id="videoSource"></select>
                                        <br>
                                        <div id="debug"></div>
                                        <br>
                                        <video id="video" autoplay></video>
                                        <br>
                                        <button id="snap">Snap Photo</button>
                                        <br>
                                        <canvas id="canvas" style="display: none;"></canvas>
                                        <br>
                                        <input type="hidden" id="count-state" value="0">
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
    <script src="assets/js/main.js"></script>    
	<script>
	
	$(document).ready(function () {
        $("#shortcomings").hide();
        $('.checklist').on('change', function() {
            if($(this).val() == 'no') {
                $(this).parent().find('.open-image-selector').attr('disabled', true);
            } else {
                $(this).parent().find('.open-image-selector').attr('disabled', false);
            }
        });
	    $('.open-image-selector').on('click', function() {
            $('#image-selector').show();
            $('#inspectionForm').hide();
            $('#count-state').val($(this).data('count'));
        });
        $('#inspectionForm').on('submit', function(e) {
            e.preventDefault();
            var questions = [];
            $('#inspectionForm .question-li').each(function(i, question) {
                var temp = {};
                temp.questionId = $(question).find('.question-number').val();
                temp.answer = $(question).find('.checklist').val();
                temp.image = $(question).find('.preview-image').attr('src');
                questions.push(temp);
            });
            console.log(questions);
        })
	});
	</script>
	
	<script>
			function valueChanged()
		{
			
			if($('#shortcomingBox').is(":checked")) 
			{
				console.log("checked");
				
				$("#shortcomings").show();
			}
			else
			{
				console.log("unchecked");
				$("#shortcomings").hide();
			}
		}

	</script>
	
</body>

</html>

