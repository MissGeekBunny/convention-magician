<?php
/**
 * @package Convention Magician
 */

get_header(); ?>

<div class="wrap">
    <div class="primary content-area">
        <main id="main" class="site-main" role="main">

            <?php
            while ( have_posts() ) : the_post();

                //build out woocommerce's product post type in the body of this file.

                the_post_navigation();

                // If comments are open or we have at least one comment, load up the comment template.
                if ( comments_open() || get_comments_number() ) :
                    comments_template();
                endif;

            endwhile; // End of the loop.
            ?>

        </main><!-- #main -->
    </div><!-- .primary -->

    <?php get_sidebar(); ?>

</div><!-- .wrap -->

