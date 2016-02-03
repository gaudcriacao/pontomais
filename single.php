<?php
/**
 * The Template for displaying all single posts.
 *
 * @package Odin
 * @since 2.2.0
 */

get_header(); ?>

<div class="post-title">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h1><?php the_title(); ?></h1>
				<div class="data-post">
							<?php odin_posted_on(); ?>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="container">

	<div id="primary" class="<?php echo odin_classes_page_sidebar(); ?>">
		<main id="main-content" class="site-main" role="main">
			<?php
				// Start the Loop.
				while ( have_posts() ) : the_post();

					/*
					 * Include the post format-specific template for the content. If you want to
					 * use this in a child theme, then include a file called called content-___.php
					 * (where ___ is the post format) and that will be used instead.
					 */
					get_template_part( 'content', get_post_format() );

				endwhile;
			?>
		</main><!-- #main -->
	</div><!-- #primary col-md-9 -->

	<!-- Sidebar col-md-3 -->
		<?php get_sidebar(); ?>
		<!-- Sidebar -->
</div>

<?php
get_footer();
