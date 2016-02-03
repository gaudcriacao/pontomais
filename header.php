<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till #main div
 *
 * @package Odin
 * @since 2.2.0
 */
?><!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	<?php if ( ! get_option( 'site_icon' ) ) : ?>
		<link href="<?php echo get_template_directory_uri(); ?>/assets/images/favicon.ico" rel="shortcut icon" />
	<?php endif; ?>
	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/assets/js/html5.js"></script>
	<![endif]-->
	<script src="https://use.typekit.net/uhz7hoy.js"></script>
  <script>try{Typekit.load({ async: true });}catch(e){}</script>

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

	<a id="skippy" class="sr-only sr-only-focusable" href="#content">
		<div class="container">
			<span class="skiplink-text"><?php _e( 'Skip to content', 'odin' ); ?></span>
		</div>
	</a>

<header id="header" class="data-scroll-header">
<!-- NAV -->
<nav class="navbar navbar-default navbar-fixed-top main-menu">
		<div class="container">
				<div class="row">
					<div class="col-md-9 col-xs-12">
						<div class="navbar-header">
							<button id="trigger-overlay" class="navbar-toggle" type="button">
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
							<a class="navbar-brand" href="<?php echo home_url(); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-full.svg" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" />
							</a>
						</div>
						<nav class="collapse navbar-collapse navbar-main-navigation hidden-xs hidden-sm hidden-ipad" role="navigation">
							<?php
								wp_nav_menu(
									array(
										'theme_location' => 'main-menu',
										'depth'          => 2,
										'container'      => false,
										'menu_class'     => 'nav navbar-nav navbar-right',
										'fallback_cb'    => 'Odin_Bootstrap_Nav_Walker::fallback',
										'walker'         => new Odin_Bootstrap_Nav_Walker()
									)
								);
							?>
						</nav><!-- .navbar-collapse -->
					</div>
					<div class="col-md-3 hidden-sm hidden-ipad">
						<div class="login-menu">
							<ul>
								<li><a href="#">Entrar</a></li>
								<li><a href="#" class="btn btn-md btn-bold btn-verde-mid-outline">Experimente</a></li>
							</ul>
						</div>
					</div>
				</div>
		</div><!-- .container-->
	</div>
</nav>
<!-- FIM NAV -->

</header>

	<div id="wrapper" class="container-fluid">
		<div class="row">
