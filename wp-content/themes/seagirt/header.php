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

		<!-- GOOGLE ANALYTICS -->
		<!-- Global site tag (gtag.js) - Google Analytics -->
		<script async src="https://www.googletagmanager.com/gtag/js?id=UA-110164430-1"></script>
		<script>
		  window.dataLayer = window.dataLayer || [];
		  function gtag(){dataLayer.push(arguments);}
		  gtag('js', new Date());

		  gtag('config', 'UA-110164430-1');
		</script>


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
	          <?php html5blank_nav(); ?>
	        </ul>
	      </nav> <!-- end mobile nav-->

	      <!-- HAMBURGER -->
	      <div class="hamburger">
	        <a href="#" class="js-mobile-trigger">
	          <svg class="icon icon-menu2"><use xlink:href="<?php bloginfo('template_url'); ?>/assets/dist/img/symbol-defs.svg#icon-menu2"></use></svg>
	        </a>
	      </div>

				<!-- SOCIAL MEDIA -->
	      <nav class="nav">
	        <ul class="nav__navigation">
	          <?php html5blank_nav(); ?>
	        </ul>
	        <ul class="nav__social-media">
						<!-- Get the social media partials code and inject here -->
				    <?php get_template_part('partials/social_media') ?>
	        </ul>
	      </nav>

				<!--  HEADER IMAGE CONTAINER DIV -->
				<div class="hero">
					<a href="<?php bloginfo('url'); ?>">
						<img class="hero__image" src="<?php bloginfo('template_url'); ?>/assets/src/img/homepageheader.jpg" alt="Sea Girt Lighthouse" title="Sea Girt Lighthouse Header Image">
						<img class="hero__sg-logo" src="<?php bloginfo('template_url'); ?>/assets/src/img/seagirtfinallogo.png" alt="Sea Girt Logo">
					</a>
				</div>
	    </header>
