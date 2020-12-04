<?php
/**
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package berea
 */

get_header(); ?>


<main id="main" class="site-main" role="main">

	<div id="primary" class="content-area">
		<?php if ( have_posts() ) : ?>

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php
				/* Include the Post-Format-specific template for the content.
                 * If you want to override this in a child theme, then include a file
                 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
                 */
				get_template_part( 'page-templates/partials/content', 'page' );
				?>
				
				<hr/>
				<p>Berea College, the first interracial and coeducational college in the South, focuses on learning, labor and service. The College only admits academically promising students with limited financial resources—primarily from Kentucky and Appalachia—but welcomes students from 41 states and 76 countries. Every Berea student receives a Tuition Promise Scholarship, which means no Berea student pays for tuition.  Berea is one of nine federally recognized Work Colleges, so students work 10 hours or more weekly to earn money for books, housing and meals.  The College’s motto, “God has made of one blood all peoples of the earth,” speaks to its inclusive Christian character.</p>
				
				<?php
				// If comments are open or we have at least one comment, load up the comment template
				if ( comments_open() || '0' != get_comments_number() ) :
					comments_template();
				endif;
				?>

			<?php endwhile; ?>

			<?php berea_paging_nav(); ?>

		<?php else : ?>

			<?php get_template_part( 'page-templates/partials/content', 'none' ); ?>

			<?php
			// If comments are open or we have at least one comment, load up the comment template
			if ( comments_open() || '0' != get_comments_number() ) :
				comments_template();
			endif;
			?>

		<?php endif; ?>

	</div><!-- #primary -->

	<?php (in_category(array('news', 'features'))) ? get_sidebar('news') : get_sidebar(); ?>

	<div style="clear:both;"></div>

</main>

<?php get_footer(); ?>
