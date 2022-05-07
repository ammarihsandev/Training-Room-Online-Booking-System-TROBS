<?php
session_start();

$inactive = 600; // Set timeout period in seconds

if (isset($_SESSION['timeout'])) {
    $session_life = time() - $_SESSION['timeout'];
    if ($session_life > $inactive) {
        session_destroy();
        header("Location: expired.php");
    }
}
$_SESSION['timeout'] = time();

if (!isset($_SESSION['myid']))
{
echo "<script language=\"javascript\" type=\"text/javascript\">
window.location=\"../index.php\";
</script>";
}
?>

<!DOCTYPE html>
<!--[if IE 8]>			<html class="ie ie8"> <![endif]-->
<!--[if IE 9]>			<html class="ie ie9"> <![endif]-->
<!--[if gt IE 9]><!-->	<html> <!--<![endif]-->
<head>

	<!-- Meta -->
	<meta charset="utf-8">
	<meta name="keywords" content="HTML5 Template" />
	<meta name="description" content="Slander - Responsive HTML5 Landing Page">
	<meta name="author" content="">

	<title>Training Room Online Booking System</title>

	<!-- Mobile Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Favicon -->
<link rel="shortcut icon" href="https://trainingcube.com.my/wp-content/uploads/2015/02/Logo-2014-Web-Favicon-2.png" type="image/x-icon"/>
	
	<!-- Google Webfont -->
	<link href='https://fonts.googleapis.com/css?family=Raleway:400,100,200,300,500,600,700,800,900' rel='stylesheet' type='text/css'>

	 <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.js"></script>  
      <link rel="stylesheet" type="text/css" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

	<!-- CSS -->
	<link rel="stylesheet" href="../css/bootstrap.min.css">
	<link rel="stylesheet" href="../font/style.css">
	<link rel="stylesheet" href="../css/font-awesome.min.css">
	<link rel="stylesheet" href="../css/style-mason.css">
	<link rel="stylesheet" href="../css/animate.css">
	<link rel="stylesheet" href="../css/media.css">  
	<link rel="stylesheet" href="../css/responsive.css"> 
	
	<!-- Skin CSS -->
	<link rel="stylesheet" href="../css/skins/default-mason.css">	

	<!-- SLIDER REVOLUTION CSS -->
	<link rel="stylesheet" type="text/css" href="../css/extralayers.css" media="screen" />	
	<link rel="stylesheet" type="text/css" href="../rs-plugin/css/settings.css" media="screen" />

	<!-- IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
	<![endif]-->

	 <style type="text/css">
    .progress.active .progress-bar {
    -webkit-transition: none !important;
    transition: none !important;height: 60px;
}
.progress {background: rgba(245, 245, 245, 1); border: 0px solid rgba(245, 245, 245, 1); border-radius: 4px; height: 40px;}
.progress-bar {height: 60px;}
 
 
 </style>


<style>
 @media (max-width: 450px) {
     .big-container {
         display: none;
     }
 }
 @media (min-width: 250px) {
     .small-container {
         display: none;
     }
 }
 /* Responsive iFrame */
 .responsive-iframe-container {
     position: relative;
     padding-bottom: 56.25%;
     padding-top: 30px;
     height: 0;
     overflow: hidden;
 }
 .responsive-iframe-container iframe,   
 .vresponsive-iframe-container object,  
 .vresponsive-iframe-container embed {
     position: absolute;
     top: 0;
     left: 0;
     width: 100%;
     height: 100%;
 }
 </style>

<script type='text/javascript'>//<![CDATA[
$(function(){
(function blink() { 
  $('.blink_me').fadeOut(500).fadeIn(500, blink); 
})();
});//]]> 

</script>


</head>
<body class="index-mason">
<div id="loader-wrapper">
			<div id="loader"></div>

			<div class="loader-section section-left"></div>
            <div class="loader-section section-right"></div>

		</div>
<div class="u-all">
	<!-- Header -->
	<header class="desktop_header no-mobile">
		<div class="u-topbar u-topbar-dark">
			<div class="container">
				<div class="row">
					<div class="col-md-7 col-xs-12">
						<ul class="ut-contact pull-left">
							<li><a href="tel:0133241016"><span class="icon_phone" ></span> 013 324 1016</a></li>
							<li><a href="mailto:nikakmal@mytrainingcube.com"><span class="icon_mail"></span>nikakmal@mytrainingcube.com</a></li> 
						</ul>
					</div>
					<div class="col-md-5 col-xs-12">
						 
						<div class="ut-social pull-right">
							<a href="https://www.facebook.com/bilikseminarampang" class="social_facebook"></a> 
							<a href="https://plus.google.com/110838693099748696700" class="social_googleplus"></a> 
							<a href="https://bilikseminar.trainingcube.com.my" class="social_dribbble"></a> 
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="u-header">
			<div class="container">
				<div class="uh-logo pull-left">
					<h1><a href="index.php" title="Unique"><img src="../images/logocubic.png" class="img-responsive" alt="Unique"/></a></h1>
				</div>
				 
				<nav class="collapse navbar-collapse" >
					<!-- Main navigation -->
					<ul id="headernavigation" class="nav navbar-nav pull-right">
						<li class="active">
							<a href="index.php">Home</a>
						</li>
						<li>
							<a href="profile.php">Profile</a>
						</li>
						<li>
							<a href="program.php">Program</a>
						</li>
						<li>
							<a href="booking.php">Booking</a>
						</li>
						<li>
							<a href="logout.php"><font color="red">LOG OUT</font></a>
						</li> 
					</ul>
					<!-- /.nav .navbar-nav -->
				</nav>
				<!-- /.navbar-collapse  -->
			</div>
		</div>
	</header>

	<!-- Mobile-Header -->
	<div class="mob-header">
		<div class="container">
			<img src="../images/logocubic.png" alt=""/>
			<div class="nav-list">
				 
				<div class="m-search em">
					<span><a href="profile.php"><i class="icon_profile"></i></a></span>  
				</div>
				<div class="m-search em">
					<span><a href="program.php"><i class="icon_document"></i></a></span>  
				</div>
				<div class="m-search em">
					<span><a href="booking.php"><i class="icon_search_alt"></i></a></span>  
				</div>
<div class="m-search em">
					<span><a href="logout.php"><font  color="red"><i class="icon_lock-open"></i></font></a></span>  
				</div>				
			</div>
		</div>
	</div>