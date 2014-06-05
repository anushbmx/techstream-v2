<?php
/*
	========================================================
	******************* Header File ************************
	========================================================

	Header file for all pages requests to the system. 

	NB : init.php & the required variables are to be defiled before loading header.php

	Variables used in Header
		$title -> The page title of serving webpage, if not set Default value will be printed.
		$template -> Used to load Custome CSS/JS or any additional files. If not set Default styles will only be loaded.
			
			|Template Value | Description
			-----------------------------------------------------
			| 	  0/Null	| Normal page Template 				|
			|		1 		| Pages with code 	 				|
			-----------------------------------------------------
		$code
*/

?>
<!DOCTYPE html>
<head>
	<title>Index Home</title>
	<link rel="stylesheet" href="css/fonts.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/grid.css">
	<link rel="stylesheet" href="css/font-awesome.css">
	<!-- <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Lato:300,300italic,400,400italic,700,700italic,900"> -->
	<?php 
		if(isset($template)):
			if ($template == 1):
	?>	
	<link rel="stylesheet" href="css/highlight/default.css">	
	<?php
		endif;
	endif;
	?>
</head>

<body>
	<div class="main-container" id="wide">
		<div id="top"></div>  	<!-- used to bring users to top -->
		<header id="main-header">
			<div class="content-inner">
				<div class="inner-container">
						<div class="row">
							<div class="column-small-11 center">
								<a href="#" class="logo ">Tech Stream</a>
							</div>
						</div>
				</div><!-- end of class="inner-container" -->
			</div><!-- end of class="content-inner" -->
		</header><!-- end if id="main-header" -->