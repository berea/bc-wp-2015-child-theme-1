<?php
/**
 * Template Name: Homepage
 *
 * This template display content at full with, with no sidebars.
 * Please note that this is the WordPress construct of pages and that other 'pages' on your WordPress site will use a different template.
 *
 * @package berea
 */

get_header(); ?>

        <div id="primary" class="content-area">

                <main id="main" class="site-main" role="main">
 
                        <div id="homepage-central-content-block">

                                <?php //include 'page-templates/partials/no_tuition_promise.php'; ?>

                                <?php //include 'page-templates/partials/news.php'; ?>

                                <?php //include 'page-templates/partials/people_slider.php'; ?>

                                <div class="user-entered-content">


<?php
    if (have_posts()) :
        while (have_posts()) :
            the_post();
            the_content();
        endwhile;
    endif;
?>

                                </div><!-- .user-entered-content" -->

                        </div><!-- #homepage-central-content-block -->

                </main><!-- #main -->
                
                <!-- site-main-footer-shim -->
                <div id="main-footer-shim" class="site-main-footer-shim"></div>
                
        </div><!-- #primary -->

<?php get_footer(); ?>
