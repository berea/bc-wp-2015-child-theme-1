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

        <?php
        // The Query
        $the_query = new WP_Query('cat=-1');

        // The Loop
        if ( $the_query->have_posts() ) {
            echo '<ul>';
            while ( $the_query->have_posts() ) {
                $the_query->the_post();
                echo '<li>' . get_the_title() . '</li>';
            }
            echo '</ul>';
        } else {
            // no posts found
        }
        /* Restore original Post Data */
        wp_reset_postdata();
        ?>




    </main><!-- #main -->

</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
