<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
   	<link rel="shortcut icon" href="images/favicon.png">
    <title>SONAR HOTSUITE</title>
    <!--Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="vendor/jqueryui-editable/css/jqueryui-editable.css" rel="stylesheet">
    <link href="vendor/eufont/eufont.css" rel="stylesheet">
    <link href="css/sonarsuite.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">
	<script src="vendor/jquery.js"></script>
    <script src="vendor/jquery-ui.js"></script>
	<script src="http://cdnjs.cloudflare.com/ajax/libs/modernizr/2.6.2/modernizr.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="vendor/jquery.validate.js"></script>
</head>
<body>
<section id="container">
	<aside id="sidebar">
    	<div class="sidebar-menu">
        	<ul>
            	<li><a href="#"><i class="icon-logo"><img src="images/favicon.png"></i> <span class="text">Acit Jazz</span></a></li>
            	<li class="current"><a href="#"><i class="icon-home"></i> <span class="text">Dashboard</span></a></li>
            	<li><a href="#"><i class="icon-plane"></i> <span class="text">Publisher</span></a></li>
            	<li><a href="#"><i class="icon-chart2"></i> <span class="text">Analytics</span></a></li>
            	<li><a href="#"><i class="icon-check-box-outline-blank"></i> <span class="text">Assignments</span></a></li>
            	<li><a href="#"><i class="icon-people"></i> <span class="text">Contact</span></a></li>
            	<li><a href="#"><i class="icon-cog"></i> <span class="text">Setting</span></a></li>
            	<li><a href="#"><i class="icon-question-circle"></i> <span class="text">Help</span></a></li>
            </ul>
        </div>
    </aside>
    <main id="main">
    	<div class="head-toolbar">
        	<div class="fr upgradeAction">
            	<a href="#" class="button">Upgrade to Pro</a>
                <a href="#"><i class="icon-search"></i></a>
                <a href="#"><i class="icon-message"></i></a>
            </div>
        </div>
        <div class="maincontainer">
			<?php 
            if(@$_GET['page']=='style'){
                include("style.php");
            }else if(@$_GET['page']=='about'){ 
                include("about.php");
            }else if(@$_GET['page']=='diy'){ 
                include("diy.php");
            }else if(@$_GET['page']=='events'){ 
                include("events.php");
            }else if(@$_GET['page']=='skin'){ 
                include("skin.php");
            }else if(@$_GET['page']=='relations'){ 
                include("relations.php");
            }else if(@$_GET['page']=='join'){ 
                include("join.php");
            }else if(@$_GET['page']=='quiz'){ 
                include("quiz.php");
            }else if(@$_GET['page']=='search'){ 
                include("search.php");
            }else if(@$_GET['page']=='promo'){ 
                include("promo.php");
            }else if(@$_GET['page']=='thanks'){ 
                include("thanks.php");
            }else if(@$_GET['page']=='terms'){ 
                include("terms.php");
            }else{ 
                include("home.php");
            }?>
        </div>
    </main><!-- end #main-->
</section><!-- end #container-->

<!--Core js-->
<script src="vendor/magnific-popup/magnific-popup.js"></script>
<script src="vendor/custom.js"></script>
<!--script for this page-->
</body>
</html>