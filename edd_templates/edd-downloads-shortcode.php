<?php
/**
 * Template Name: EDD Downloads
 *
 * This page template is ready for use with EDD's [downloads] shortcode.
 *
 * @package Convention Magician
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'template-parts/content', 'store-front' ); ?>

			<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->
	
<?php get_footer(); ?>
