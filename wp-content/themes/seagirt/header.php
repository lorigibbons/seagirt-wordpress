<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' : '; } ?><?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<!-- TYPEKIT / GOOGLE FONTS / FONTS.COM -->
		<link href="https://fonts.googleapis.com/css?family=Cinzel|Montserrat" rel="stylesheet">

		<!-- STYLES ARE ENQUED THROUGH FUNCTIONS.PHP -->

		<?php wp_head(); ?>

	</head>
	<body <?php body_class(); ?>>
		<div class="site-wrapper">
		    <!-- HEADER -->
		    <header>
		      <!-- MOBILE NAV -->
		      <nav class="mobile-nav js-mobile-nav">
		        <div class="mobile-nav__close"> <!-- X Button on mobile nav-->
		          <a href="#" class="js-mobile-nav-close">&times;</a> <!-- Appears when navigation is closed AND is under portrait size-->
		        </div>
		        <ul>
		          <li class="home"><a href="index.html">Home</a></li>
		          <li class="about"><a href="about.html">About</a></li>
		          <li class="about"><a href="services.html">Services</a></li>
		          <li class="tours"><a href="tour.html">Tours</a></li>
		          <li class="news"><a href="news.html">News</a></li>
		          <li class="contact"><a href="contact.html">Contact</a></li>
		        </ul>
		      </nav> <!-- end mobile nav-->

		      <!-- HAMBURGER -->
		      <div class="hamburger">
		        <a href="#" class="js-mobile-trigger">
		          <svg class="icon icon-menu2"><use xlink:href="assets/dist/img/symbol-defs.svg#icon-menu2"></use></svg>
		        </a>
		      </div>


		      <nav class="nav">
		        <ul class="nav__navigation">
		          <li class="home"><a href="index.html">Home</a></li>
		          <li class="about"><a href="about.html">About</a></li>
		          <li class="about"><a href="services.html">Services</a></li>
		          <li class="tours"><a href="tour.html">Tours</a></li>
		          <li class="news"><a href="news.html">News</a></li>
		          <li class="contact"><a href="contact.html">Contact</a></li>
		        </ul>
		        <ul class="nav__social-media">
		          <!-- EMAIL -->
		          <li><a href="#" target="_blank"><svg class="icon icon-envelop"><use xlink:href="assets/dist/img/symbol-defs.svg#icon-envelop"></use></svg></a></li>
		          <!-- FACEBOOK -->
		          <li><a href="#" target="_blank"><svg class="icon icon-facebook"><use xlink:href="assets/dist/img/symbol-defs.svg#icon-facebook"></use></svg></a></li>
		          <!-- INSTAGRAM -->
		          <li><a href="#" target="_blank"><svg class="icon icon-instagram"><use xlink:href="assets/dist/img/symbol-defs.svg#icon-instagram"></use></svg></a></li>
		          <!-- TWITTER -->
		          <li><a href="#" target="_blank"><svg class="icon icon-twitter"><use xlink:href="assets/dist/img/symbol-defs.svg#icon-twitter"></use></svg></a></use></li>
		        </ul>
		      </nav>
		      <img class="lighthouse-image" src="<?php bloginfo('template_url'); ?>/assets\src\img\homepageheader.jpg" alt="Sea Girt Lighthouse" title="Sea Girt Lighthouse Header Image">
		      <img class="sg-logo" src="<?php bloginfo('template_url'); ?>/assets\src\img\seagirtfinallogo.png" alt="Sea Girt Logo">

		    </header>
