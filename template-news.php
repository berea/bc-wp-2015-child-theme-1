<?php
/**
 * Template Name: News
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package berea
 */

get_header(); ?>

<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">


        <div id="news-list">

        <?php

        // The Query
        $the_query = new WP_Query();

        // The Loop
        if ( $the_query->have_posts() ) {
            echo '<ul>';
            while ( $the_query->have_posts() ) {
                $the_query->the_post();
                echo '<li><a href="' . get_the_permalink() . '">' . get_the_title() . '</a></li>';
            }
            echo '</ul>';
        } else {
            // no posts found
        }
        /* Restore original Post Data */
        wp_reset_postdata();

        ?>

        </div>

    </main><!-- #main -->

    <!-- site-main-footer-shim -->
    <div id="main-footer-shim" class="site-main-footer-shim"></div>

</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
