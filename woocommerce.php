<?php

get_header(); ?>

    <div class="wrap">
        <div class="primary content-area">
            <main id="main" class="site-main" role="main">

            <?php woocommerce_content(); ?>

            </main><!-- #main -->
        </div><!-- .primary -->

        <?php get_sidebar(); ?>

    </div><!-- .wrap -->

<?php get_footer(); ?>