<?php
/**
 * Template name: learn read watch
 *
 *
 * @package ae_boilerplate
 */
get_header(); ?>
<div class="blog-content">
	
	<div id="primary" class="content-area">
		<div id="content" class="site-content" role="main">
		<div class="intro">
			<p>Short description of our blog and what we post</p>
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