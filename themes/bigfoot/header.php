<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<?php wp_head(); ?>
	<!--[if lte IE 9]>
	<script src="<?php bloginfo('template_url'); ?>/js/html5shiv/html5shiv.min.js"></script>
	<script src="<?php bloginfo('template_url'); ?>/js/html5shiv/html5shiv-print.min.js"></script>
	<script src="<?php bloginfo('template_url'); ?>/js/respond/respond.min.js"></script>
	<script src="<?php bloginfo('template_url'); ?>/js/respond/respond.matchmedia.addListener.minjs"></script>
<![endif]-->
	<!--[if lte IE 8]>
<script type="text/javascript">
	alert('Thank you for visiting <?php bloginfo('title'); ?>, it appears your view our website on an old, out of date browser this may affect your ability to view and navigate our website. For the best possible viewing experience, please install a more up to date web browser.');
</script>
<![endif]-->
</head>

<body <?php body_class(); ?>>
	<div id="wrapper" class="hfeed">
		<section id="header" class="adminBarFix fixed-top ">
			<!-- NAVBAR TOP -->
			<div class="navbar navbar-expand-lg navbar-dark bg-dark flex-row shadow">
				<div class="container">
					<!-- LOGO -->
					<a class="navbar-brand mr-auto p-0" href="<?php bloginfo('url'); ?>" title="Go to homepage">
						<img src="<?php bloginfo('template_url'); ?>/img/template/logo.svg" height="50" alt="<?php bloginfo('description'); ?>">
						<!-- If you only have .png type for the logo, create 2 versions of it and use it like in the example below -->
						<!--
						<img class="img-fluid d-md-none" src="<?php bloginfo('template_url'); ?>/img/template/logo-sm.png" alt="<?php bloginfo('description'); ?>">
						<img class="img-fluid d-none d-md-inline" src="<?php bloginfo('template_url'); ?>/img/template/logo-lg.png" alt="<?php bloginfo('description'); ?>">
						 -->
					</a>

					<!-- EXTRA LINKS - remove if you do not need them -->
					<ul class="navbar-nav flex-row mr-lg-0">
						<li class="nav-item">
							<a class="nav-link pr-2"><i class="fa fa-facebook"></i></a>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle mr-1" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<i class="fa fa-user"></i>
								<span class="caret"></span>
							</a>
							<ul class="dropdown-menu dropdown-menu-right position-absolute" aria-labelledby="navbarDropdownMenuLink">
								<li><a class="dropdown-item" href="">User</a></li>
								<li><a class="dropdown-item" href="">Login</a></li>
							</ul>
						</li>
					</ul>


					<!-- HAMBURGER BUTTON -->
					<!-- For a different type change .ham--fold class to any of them https://oziocb.github.io/Hams/ -->
					<button class="ham ham--fold navbar-toggler collapsed ml-lg-0 border-0" type="button" data-toggle="collapse" data-target="#navbar__dropdownMenu" aria-controls="navbar__dropdownMenu" aria-expanded="false" aria-label="Toggle navigation">
						<div class="ham__box">
							<span class="ham__bar ham__bar--top"></span>
							<span class="ham__bar ham__bar--mid"></span>
							<span class="ham__bar ham__bar--bottom"></span>
						</div>
					</button>
				</div>
			</div>

			<!-- NAVBAR BOTTOM / DROPDOWN MENU -->
			<nav class="parentMainMenu navbar navbar-expand-lg">
				<div class="parentMainMenu__inner container">
					<div class="noTransition collapse navbar-collapse d-block justify-content-between pt-4 pb-3 py-md-1" id="navbar__dropdownMenu">
						<?php get_search_form(); ?>
						<ul class="navbar-nav text-center">
							<?php
							$args = array(
								'theme_location' 	=> 'main-menu',
								'container' 			=> '',
								'items_wrap' 			=> '%3$s',
								'fallback_cb' 		=> 'WP_Bootstrap_Navwalker::fallback',
								'walker' 					=> new WP_Bootstrap_Navwalker() // documentation - https://wp-bootstrap.github.io/wp-bootstrap-navwalker/
							);
							wp_nav_menu($args);
							?>
						</ul>
					</div>
				</div>
			</nav>

		</section>





















		<div id="content">