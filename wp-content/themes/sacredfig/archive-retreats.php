<?php
/**
 * The template for displaying Archive pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package ae_boilerplate
 */

get_header(); ?>
<div class="archiveTeacherTraining">
	<div class="intro">
		<h2>Re-calibrate with what's essential.</h2>
		<p><span>5 &amp; 7 day escapes</span><br>Shift your perspective with super-foods, phenomenal yoga, sunrise meditation &amp; still time for an afternoon swim... </p>
	</div>
	<div class="pageTitle">
		<h3 class="selectDestination">Select a destination</h3>
	</div>

	<div class="archiveContent">
		<?php if ( have_posts() ) : ?>
	
				<?php
					// Show an optional term description.
					$term_description = term_description();
					if ( ! empty( $term_description ) ) :
						printf( '<div class="taxonomy-description">%s</div>', $term_description );
					endif;
				?>
				
			<?php /* Start the Loop */ ?>
			<!-- oldest posts firs -->
			<?php query_posts($query_string . '&orderby=date&order=ASC'); ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php
					/* Include the Post-Format-specific template for the content.
					 * If you want to overload this in a child theme then include a file
					 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
					 */
					get_template_part( 'content', get_post_format() );
				?>

			<?php endwhile; ?>

			<?php ae_boilerplate_content_nav( 'nav-below' ); ?>

		<?php else : ?>

			<?php get_template_part( 'no-results', 'archive' ); ?>

		<?php endif; ?>

	</div>
</div>
<?php get_footer(); ?>