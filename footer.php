<?php
/**
 * The template for displaying the footer.
 *
 * Contains footer content and the closing of the
 * #main div element.
 *
 * @package Odin
 * @since 2.2.0
 */
?>

		</div><!-- .row -->
	</div><!-- #wrapper -->
	<footer id="footer" role="contentinfo">
		<div class="container container-footer">
			<div class="row">
				<div class="row-height">
					<div class="col-md-3 col-sm-6 col-xs-12 col-md-height col-md-middle">
						<div class="footer-logo">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-white.svg" alt="" class="img-responsive" />
						</div>
					</div>
					<div class="col-md-6 col-sm-6 col-xs-12 col-md-height col-md-middle">
						<div class="footer-telefone">
							<span>Alguma dúvida?</span>
							<a href="tel:4136218423">41 4063.9567</a>
						</div>
					</div>
					<div class="col-md-3 col-sm-12 col-xs-12 col-md-height col-md-middle">
						<div class="footer-social">
							<ul>
								<li class="icon-social icon-facebook hvr-grow">
									<a class="" href="https://facebook.com/pontomaisweb" target="_blank">
										<i class="fa fa-facebook"></i>
									</a>
								</li>
								<li class="icon-social icon-linkedin hvr-grow">
								<a href="https://www.linkedin.com/company/pontomais" target="_blank">
									<i class="fa fa-linkedin"></i>
								</a>
								</li>
								<li class="icon-social icon-youtube hvr-grow">
									<a href="https://plus.google.com/b/108846468602979680116/108846468602979680116/about?gmbpt=true&pageId=108846468602979680116&hl=pt-BR&_ga=1.93896669.1795850432.1455903600" target="_blank">
										<i class="fa fa-google-plus"></i>
									</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div id="copyright" class="container">
			<div class="row">
				<div class="col-md-12">
					Copyright &copy; <?php echo date("Y"); ?> <?php bloginfo('name'); ?> Todos os direitos reservados. Desenvolvido por <a href="https://www.gaud.com.br" rel="nofollow" target="_blank">Gaud Marketing Digital</a>
				</div>
			</div>
		</div>
	</footer><!-- #footer -->

	<div class="overlay overlay-hugeinc">
		<button type="button" class="overlay-close">Close</button>
		<nav>
			<?php
				wp_nav_menu(
					array(
						'theme_location' => 'mobile-menu',
						'depth'          => 2,
						'container'      => false,
						'menu_class'     => '',
						'fallback_cb'    => 'Odin_Bootstrap_Nav_Walker::fallback',
						'walker'         => new Odin_Bootstrap_Nav_Walker()
					)
				);
			?>
		</nav>
	</div>

	<?php wp_footer(); ?>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
	<script type="text/javascript" async src="https://d335luupugsy2.cloudfront.net/js/loader-scripts/e5080e17-8c6a-49c9-9180-da8c1c34b38f-loader.js"></script>
</body>
</html>
