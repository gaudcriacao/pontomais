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

	<!-- <script src="<?php echo get_template_directory_uri(); ?>/assets/js/pace.min.js"></script> -->


	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	<?php if ( ! get_option( 'site_icon' ) ) : ?>
		<link href="<?php echo get_template_directory_uri(); ?>/assets/images/favicon.png" rel="shortcut icon" />
	<?php endif; ?>
	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/assets/js/html5.js"></script>
	<![endif]-->
	<script src="https://use.typekit.net/uhz7hoy.js"></script>
	<script>try{Typekit.load({ async: true });}catch(e){}</script>

	<?php wp_head(); ?>

	<!-- GAnalytics -->
	<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

	  ga('create', 'UA-73905426-1', 'auto');
	  ga('create', 'UA-73874945-1', 'auto', 'gaud');
	  ga('send', 'pageview');
	  ga('gaud.send', 'pageview');

	</script>

</head>

<body <?php body_class(); ?>>

	<?php if(is_mobile()) {
		echo '<div class="alerta-mobile">
			<span>Para vizualizar melhor nosso site vire seu aparelho para o modo retrato.<br>Obrigado.</span>
		</div>';
		};
	?>

<header id="header" class="data-scroll-header">
<!-- NAV -->
<nav class="navbar navbar-default navbar-fixed-top main-menu">
		<div class="container">
				<div class="row">
					<div class="col-lg-9 col-md-12 col-xs-12">
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
								if ( is_front_page() ) {
								    // This is the blog posts index
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
								} else {
								    // This is not the blog posts index
										wp_nav_menu(
											array(
												'theme_location' => 'pages-menu',
												'depth'          => 2,
												'container'      => false,
												'menu_class'     => 'nav navbar-nav navbar-right',
												'fallback_cb'    => 'Odin_Bootstrap_Nav_Walker::fallback',
												'walker'         => new Odin_Bootstrap_Nav_Walker()
											)
										);
								}
							?>
						</nav><!-- .navbar-collapse -->
					</div>
					<div class="col-md-3 hidden-xs hidden-sm hidden-ipad">
						<div class="login-menu">
							<ul>
								<li><a href="http://app.pontomaisweb.com.br/#/acessar">Entrar</a></li>
								<li><a href="http://app.pontomaisweb.com.br/#/cadastrar" id="experimente" class="btn btn-md btn-bold">Experimente</a></li>
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
