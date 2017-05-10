<?php
/**
 * The template for displaying Archive pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package ae_boilerplate
 */

get_header(); ?>
<div class="blog-content blog">
	
	<div id="primary" class="content-area">
		<div id="content" class="site-content" role="main">
		<div class="intro">
			<?php 
				if (in_category( 'listen' )) {
					echo '<p>Original yoga playlists, podcasts, and more!</p>';
				}
				if (in_category( 'read' )) {
					echo '<p>The Sacred Fig Healthy Living blog, featuring original & curated content in the yoga & wellness space.</p>';
				}
				if (in_category( 'watch' )) {
					echo '<p>A library of educational yoga videos for all levels.</p>';
				} 							
			?>
			<div class="downArrow">
				<p><span class="icon-down lightToGrey"></span></p>
			</div>			
		</div>
		<?php if ( have_posts() ) : ?>

			<?php /* Start the Loop */ ?>
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
			<?php get_template_part( 'no-results', 'index' ); ?>
		<?php endif; ?>

		</div><!-- #content -->
	</div><!-- #primary -->


<?php get_footer(); ?>