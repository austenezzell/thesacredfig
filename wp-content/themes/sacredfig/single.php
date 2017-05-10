<?php
/**
 * The Template for displaying all single posts.
 *
 * @package ae_boilerplate
 */

get_header(); ?>


	<?php 
		if (get_field('teacher-video')) {
			echo '<div class="teacherVideo">' . get_field('teacher-video') . '</div>';		
		}
	?>
	<div class="articleWrapper">
	<?php while ( have_posts() ) : the_post(); ?>

		<?php get_template_part( 'content', 'single' ); ?>

	<?php endwhile; // end of the loop. ?>
	</div>

<?php get_footer(); ?>