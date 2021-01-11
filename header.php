<!doctype html>

<!--[if lt IE 7]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 lt-ie7"><![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->

<head>
	<meta charset="utf-8">

	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<title><?php 
	
	wp_title('·');
	
	?></title>
    
	<?php // mobile meta ?>
	<meta name="HandheldFriendly" content="True">
	<meta name="MobileOptimized" content="320">
	<meta name="viewport" content="width=device-width, user-scalable=no">
    <link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/favicon.ico">
    <meta name="theme-color" content="#ffffff">
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;0,700;1,300;1,400;1,700&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Courier+Prime:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">

	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/assets/js/showroom.js" defer></script>
	<?php wp_head(); ?>

	<!--[if IE]>
		<style>
			video{
				height: auto !important;
				/* Center the video */
				position: absolute;
				top: 50%;
				left: 50%;
				transform: translate(-50%,-50%);
				opacity: 0;
				transition: opacity 0.5s ease;
			}
		</style>
	<![endif]-->

</head>

<body <?php body_class(); ?> itemscope itemtype="http://schema.org/WebPage">

	<div class="loader">
		

	   	<div class="welcome-div">
			<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 275.66 442.25"><defs><style>.cls-1{fill:#fff;}</style></defs><title>Recurso 5</title><g id="Capa_2" data-name="Capa 2"><g id="Capa_1-2" data-name="Capa 1"><path class="cls-1" d="M138.61,0,0,221.08,138.6,442.25,275.66,221.72ZM94.15,120.79V237.25H90.64a12.91,12.91,0,0,0,0,25.82h94.88a12.91,12.91,0,0,0,0-25.82h-2.47V120.8l61.84,100.32L138.59,393.58,32.32,221.13Zm20.56,116.46V90.47l23.93-41.59,24.45,41-.64,147.41Z"/></g></g></svg>
			<div class="splitTextDiv">Welcome</div>
			<div id="button-inside">Enter</div>
		</div>
	</div>

	<a href="<?php echo get_home_url(); ?>">
	<header id="header" class="header top <?php if (is_front_page()){echo "header-home";} ?>" role="banner" itemscope itemtype="http://schema.org/WPHeader">
		<div class="scroll-left">
			<div class="inner marquee">
				<ul>
					<li><strong>THE ANIMALS OBSERVATORY</strong> DIGITAL SHOWROOM <strong>SPRING/SUMMER 21</strong></li>
					<li><strong>THE ANIMALS OBSERVATORY</strong> DIGITAL SHOWROOM <strong>SPRING/SUMMER 21</strong></li>
					<li><strong>THE ANIMALS OBSERVATORY</strong> DIGITAL SHOWROOM <strong>SPRING/SUMMER 21</strong></li>
				</ul>
				
			</div>
		</div>
	<!-- 	<div class="progress-container">
		   <div id="progress_bar"></div>
		</div> -->
	</header></a>
