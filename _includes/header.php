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
			|		1 		| Article 	 				|
			-----------------------------------------------------
		$code
*/

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=Edge" />
	<meta http-equiv="content-type" content="text/html;" />
	<meta name="robots" content="index,follow" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" user-scalable="no">

	<?php 
		if(isset($template)):
			if ($template == 1):
	?>	
	<title><?php $data->article_title();?></title>
	<meta name="description" content="<?php $data->article_description();?>"/>
	<link rel="canonical" href="<?php static_url('main'); $data->article_url();?>" />

	<!-- Open Graph -->
	<meta property="og:title" content="<?php $data->article_title();?>" />
	<meta property="og:image" content="<?php static_url('images'); $data->article_image();?>" />
	<meta property="og:site_name" content="Tech Stream" />
	<meta property="og:description" content="<?php $data->article_description();?>"/>
	<meta property="og:type" content="article">

	<!-- Twitter -->
	<meta name="twitter:title" content="<?php $data->article_title();?>" />
	<meta name="twitter:card" content="summary" />
	<meta name="twitter:image" content="<?php static_url('images'); $data->article_image();?>" />
	<meta name="twitter:site" content="@techstream_org" />
	<meta name="twitter:creator" content="@techstream_org" />
	<meta name="twitter:domain" content="techstream.org" />
    <meta name="twitter:description" content="<?php $data->article_description();?>"/>


	<link rel="stylesheet" href="css/highlight/default.css">	
	<?php
		else:
	?>
		<title><?php if(empty($title)==false){ echo $title; ?> | Tech Stream<?php }else{ ?>Tech Stream<?php } ?></title>
		<meta name="description" content="<?php echo $description ?>"/>

		<meta property="og:locale" content="en_US">
		<meta property="og:title" content="<?php if(empty($title)==false){ echo $title; ?> | Tech Stream<?php }else{ ?>Tech Stream<?php } ?>">
		<meta property="og:description" content="<?php echo $description ?>">
		<meta property="og:type" content="website">
	<?php
		endif;
	endif;
	?>

	<link rel="publisher" href="https://plus.google.com/109470966265063246951">

	<link rel="stylesheet" type="text/css" href="css/style.css" media="all">
	<link rel="stylesheet" type="text/css" href="css/grid.css" media="all">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.css" media="all">
	<link rel="stylesheet" type="text/css" href="css/fonts.css" media="all">
	<!-- Remove when deploying -->
	<link rel="stylesheet" type="text/css" href="css/custom.css" media="all">
	<!-- end of remove -->
</head>

<body>
	<div class="main-container" id="wide">
		<div id="top"></div>  	<!-- used to bring users to top -->
		<header id="main-header">
			<div class="content-inner">
				<div class="inner-container">
						<div class="row">
							<div class="column-small-11 center">
								<a href="<?php echo static_url('main',1) ?>" class="logo ">Tech Stream</a>
							</div>
						</div>
				</div><!-- end of class="inner-container" -->
			</div><!-- end of class="content-inner" -->
		</header><!-- end if id="main-header" -->