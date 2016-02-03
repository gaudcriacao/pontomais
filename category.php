<?php
/**
 * The template for displaying Category pages.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Odin
 * @since 2.2.0
 */

get_header(); ?>

	<main id="content" tabindex="-1" role="main">

			<?php if ( have_posts() ) : ?>

				<header class="page-header">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<?php
								the_archive_title( '<h1 class="page-title">', '</h1>' );
								the_archive_description( '<div class="taxonomy-description">', '</div>' );
							?>
						</div>
					</div>
				</div>
				</header><!-- .page-header -->

				<div class="container">
					<div class="row">
						<div class="col-md-9 site-main">
									<!-- Start the Loop. -->
									<?php while ( have_posts() ) : the_post(); ?>

								<div class="cat-post-item">
							    <div class="post-header">
							    	<h3><?php the_title(); ?></h3>
							    </div>
									<div class="media equal-height">
									  <div class="media-left media-middle post-thumb">
									    <a href="<?php the_permalink(); ?>">
												<?php
													if ( has_post_thumbnail() )
														the_post_thumbnail( 'thumbnail' );
													else
														echo '<img class="media-object" src="' . get_bloginfo( 'stylesheet_directory' ) . '/assets/images/default.gif" alt="title" title="title" />';
												?>
									    </a>
									  </div>
									  <div class="media-body">
											<div class="post-cat-excerpt">
												<?php echo excerpt(55); ?>
											</div>
									  </div>
									</div>
									<div class="read-more">
										<a href="<?php the_permalink(); ?>" class="hvr-grow">Continue lendo</a>
									</div>
								</div>

									<?php endwhile; ?>

									<?php
									// Page navigation.
									odin_paging_nav();
									?>

								<?php else : ?>
									 <!-- If no content, include the "No posts found" template.
									get_template_part( 'content', 'none' ); -->

							<?php endif; ?>
						</div>
						<!-- SIDEBAR -->
						<?php get_sidebar(); ?>
						<!-- SIDEBAR -->
					</div>
				</div>

	</main><!-- #main -->

<?php
get_footer();
