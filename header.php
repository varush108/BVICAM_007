<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
if(!isset($_SESSION["logged_in"]))
{
        header("location: login.php");
}
?>

<?php 
if($_COOKIE["language"]==="english")
{
$label=[
    "l001"=>"DELHI FIRE SERVICE",
    "l002"=>"My profile",
    "l003"=>"Sign out",
    "l004"=>"Home",
    "l005"=>"Request inspection",
    "l006"=>" View Status",
    "l007"=>"View Completed Requests",
    "l008"=>"Requests Received",
    "l009"=>"Upcoming Inspections",
    "l0010"=>"Scheduled Inspections",
    "l0011"=>"Rescheduled Inspections",
    "l0012"=>"Handle Requests",
    "l0013"=>"View reference numbers"
    ];
}
else
{
$label=[
    "l001"=>"दिल्ली फायर सर्विज",
    "l002"=>"मेरी प्रोफ़ाइल",
    "l003"=>"साइन आउट करें",
    "l004"=>"होम",
    "l005"=>"अनुरोध निरीक्षण",
    "l006"=>"स्थिति देखें",
    "l007"=>"पूर्ण अनुरोध देखें",
    "l008"=>"अनुरोध प्राप्त",
    "l009"=>"आगामी निरीक्षण",
    "l0010"=>"अनुसूचित निरीक्षण",
    "l0011"=>"पुनर्निर्धारित निरीक्षण",
    "l0012"=>"हैंडल रिक्वेस्ट",
    "l0013"=>"संदर्भ संख्या देखें"
    
    ];
}
    
?>


<nav class="navbar navbar-expand-lg fixed-top navbar-light" id="mainNav">
        <div class="box-container">
           <!--brand name for responsive-->
           <a class="navbar-brand navbar-brand-responsive" href="home/" >
               <img class="pr-3 float-left" src="assets/img/main_logo.png" srcset="assets/img/main_logo@2x.png 2x"  alt=""/>
               <div class="float-left">
                   <div><?= $label['l001'];?></div>
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
                        <div> <?= $label['l001'];?> </div>
                    </div>
                </a>
                <!--/brand name-->

                <!--header rightside links-->
                <ul class="navbar-nav header-links ml-auto hide-arrow">
                    <li class="nav-item dropdown">
                        <?php 
                        if($_COOKIE["language"]=="english") {
                            
                            
                            ?>
                                <small> भाषा बदलें: <a href="/switch.php?ln=hi">हिंदी </a></small>
                                <?php
                        }
                        else{
            
                                ?>
                                <small> Change Language: <a href="/switch.php?ln=en">English</a></small>
                                <?php
                        }
                        ?>
                        <a class="nav-link dropdown-toggle mr-lg-3" id="userNav" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <div class="user-thumb">
                                <img class="rounded-circle" src="assets/img/avatar/avatar1.jpg" alt=""/>
                            </div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userNav">
                            <a class="dropdown-item" href="#"><?= $label['l002'];?></a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="logout.php"><?= $label['l003'];?></a>
                        </div>
                    </li>
                </ul>
                <!--/header rightside links-->
            </div>
        </div>
    </nav>

    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="box-container">
            <div class="collapse navbar-collapse" id="navbarListResponsive">
                <!--header nav links-->
                <ul class="navbar-nav header-links">
                    <?php if($_SESSION['role']=='user') {?>
					<li class="nav-item ">
                        <a class="nav-link mr-lg-3  btn btn-warning border" href="profile_user.php">
                            <?= $label['l004'];?>
                        </a>
                    </li>
					<?php }?>
					<?php if($_SESSION['role']=='inspector') {?>
					<li class="nav-item ">
                        <a class="nav-link mr-lg-3  btn btn-warning border" href="profile_inspector.php">
                            <?= $label['l004'];?>
                        </a>
                    </li>
					<?php }?>
					<?php if($_SESSION['role']=='system manager') {?>
					<li class="nav-item ">
                        <a class="nav-link mr-lg-3  btn btn-warning border" href="profile_sm.php">
                            <?= $label['l004'];?>
                        </a>
                    </li>
					<?php }?>
					<?php if($_SESSION['role']=='msl') {?>
					<li class="nav-item ">
                        <a class="nav-link mr-lg-3  btn btn-warning border" href="profile_msl.php">
                            <?= $label['l004'];?>
                        </a>
                    </li>
					<?php }?>
					<?php if($_SESSION['role']=='user') {?>
                    <li class="nav-item dropdown ">
                        <a class="nav-link mr-lg-3 btn btn-warning border" id="actionNav" href="Request-Form.php" aria-haspopup="true" aria-expanded="false">
                            <?= $label['l005'];?> 
                        </a>
                    </li>
					<?php } ?>
					<?php if($_SESSION['role']=='user') {?>
                    <li class="nav-item dropdown ">
                        <a class="nav-link mr-lg-3 btn btn-warning border" id="reportNav" href="View-Status.php" aria-haspopup="true" aria-expanded="false">
                            <?= $label['l006'];?>
                        </a>
                    </li>
					<?php } ?>
					<?php if($_SESSION['role']=='system manager') {?>
                    <li class="nav-item dropdown ">
                        <a class="nav-link mr-lg-3 btn btn-warning border" id="reportNav" href="View-Status_sm.php" aria-haspopup="true" aria-expanded="false">
                            <?= $label['l006'];?>
                        </a>
                    </li>
					<?php }?>
					<?php if($_SESSION['role']=='system manager') {?>
                    
                    <li class="nav-item dropdown ">
                        <a class="nav-link mr-lg-3 btn btn-warning border" id="reportNav" href="View-Completed.php" aria-haspopup="true" aria-expanded="false">
                            <?= $label['l007'];?>
                        </a>
                    </li>
					<?php }?>
					<?php if($_SESSION['role']=='inspector') {?>
                    
                    <li class="nav-item dropdown ">
                        <a class="nav-link mr-lg-3 btn btn-warning border" id="orderNav" href="Inspection-Requests.php" aria-haspopup="true" aria-expanded="false">
                            <?= $label['l008'];?>
                        </a>
                    </li>
                    <?php }?>
					<?php if($_SESSION['role']=='inspector') {?>
                    
					<li class="nav-item dropdown ">
                        <a class="nav-link mr-lg-3 btn btn-warning border" id="orderNav" href="Upcoming-Inspection.php" aria-haspopup="true" aria-expanded="false">
                            <?= $label['l009'];?>
                        </a>
                    </li>
					<?php }?>
					<?php if($_SESSION['role']=='system manager') {?>
                    
                    <li class="nav-item dropdown ">
                        <a class="nav-link mr-lg-3 btn btn-warning border" id="orderNav" href="scheduledInspection_sm.php" aria-haspopup="true" aria-expanded="false">
                            <?= $label['l0010'];?>
                        </a>
                    </li>
					<?php }?>
					<?php if($_SESSION['role']=='system manager') {?>
                    
                    <li class="nav-item dropdown ">
                        <a class="nav-link mr-lg-3 btn btn-warning border" id="orderNav" href="Reschedule_Inspections_sm.php" aria-haspopup="true" aria-expanded="false">
                            <?= $label['l0011'];?>
                        </a>
                    </li>
					<?php }?>
					<?php if($_SESSION['role']=='system manager') {?>
                    
                     <li class="nav-item dropdown ">
                        <a class="nav-link mr-lg-3 btn btn-warning border" id="orderNav" href="handleRequests_sm.php" aria-haspopup="true" aria-expanded="false">
                            <?= $label['l0012'];?>
                        </a>
                    </li>
					<?php }?>
					<?php if($_SESSION['role']=='system manager') {?>
                    
                     <li class="nav-item dropdown ">
                        <a class="nav-link mr-lg-3 btn btn-warning border" id="orderNav" href="ViewRefNo_sm.php" aria-haspopup="true" aria-expanded="false">
                            <?= $label['l0013'];?>
                        </a>
                    </li>
					<?php }?>
					
                </ul>
                <!--/header nav links-->
            </div>
        </div>
    </nav>