<?php
/**
 * The Template for displaying all single posts.
 *
 * @package ae_boilerplate
 */

get_header(); ?>

		<div class="snap">
			<img src="<?php bloginfo('template-directory');?>/img/farm.jpg" >
		</div>


		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'content', 'single' ); ?>

		<?php endwhile; // end of the loop. ?>



<?php get_footer(); ?>