<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package ae_boilerplate
 */

get_header(); ?>
<div class="blog-content">
	
	<div id="primary" class="content-area">
		<div id="content" class="site-content" role="main">
		<div class="intro introBlogAllCat">
				<p>To filter posts, select a category<br><a class="readLink" href="/category/blog/read/">Read</a> <span class="bullet">•</span> <a class="watchLink" href="/category/blog/watch/">Watch</a> <span class="bullet">•</span> <a class="listenLink" href="/category/blog/listen/">Listen</a></p>
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