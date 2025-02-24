<!DOCTYPE HTML>
<html lang="zxx">
<head>
<title>Bank Locker Management System | Home</title>
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--// Meta tag Keywords -->
<!-- css files -->
<link href="css1/bootstrap.css" rel="stylesheet" type="text/css" media="all" /> <!-- Bootstrap-Core-CSS -->
<link href="css1/style.css" rel="stylesheet" type="text/css" media="all" /> <!-- Style-CSS --> 
<link rel="stylesheet" href="css1/font-awesome.css"> <!-- Font-Awesome-Icons-CSS -->
<link rel="stylesheet" href="css1/flexslider.css" type="text/css" media="all" /> <!-- Banner-Slider-CSS -->
<!-- //css files -->
<link rel="stylesheet" type="text/css" href="css1/demo.css"/>
<!-- online-fonts -->
<link href="//fonts.googleapis.com/css?family=Dosis:200,300,400,500,600,700,800&amp;subset=latin-ext" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Ubuntu+Condensed&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext" rel="stylesheet">
<!-- //online-fonts -->
</head>
<body>

<?php include_once("includes/header.php");?>


<!-- //banner section -->
<!-- about -->
<div class="about" id="about">
	<div class="container">
		<h3 class="w3l-title"><span>About</span> Us</h3>
		<div class="w3-agileits-about-grids">
			<div class="col-md-5 agile-about-right">
				<img src="images1/3.png" alt="" />
			</div>
			<div class="col-md-7 agile-about-left">
				<?php

$ret=mysqli_query($con,"select * from tblpage where PageType='aboutus' ");
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {

?>
				<h3 class="w3l-sub">Offering the most </h3>
				<p class="sub-p">competitive rates and fees</p>
				<p class="sub-p2"><?php  echo $row['PageDescription'];?></p>
				<?php } ?>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
</div>
<!-- //about -->


<!--stats-->
<div data-vide-bg="video/coins">
	<div class="stats center-container" id="stats">
		<div class="container">
			<div class="stats-info">
				<div class="col-md-4 col-xs-4 stats-grid slideanim">
					<i class="fa fa-user-o" aria-hidden="true"></i>
					<div class="agile-one">
						<h4 class="stats-info">Employees</h4>
						<div class='numscroller numscroller-big-bottom' data-slno='1' data-min='0' data-max='12760' data-delay='.5' data-increment="1">12760</div>
					</div>
				</div>
				