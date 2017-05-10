<?php
/**
 * Template name: work
 *
 *
 * @package ae_boilerplate
 */

get_header(); ?>


	<div class="archiveContent">
		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<div class="breadcrumb">
					<?php 
							echo '<h2 class="logo"><a class="site-title" href="';
							bloginfo('url');
							echo '" title="';
							bloginfo('name');
							echo '">';
							echo 'Richard Wenz';
							echo '</a></h2>';	
					?>
					<h1 class="page-title">Work</h1>
				</div><!-- BREADCRUMB -->
			</header><!-- .page-header -->

			
			<?php query_posts( array( 'posts_per_page' => -1, 'post_status' => 'publish' ) );?>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php
					/* Include the Post-Format-specific template for the content.
					 * If you want to overload this in a child theme then include a file
					 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
					 */
					get_template_part( 'content', get_post_format() );
				?>

			<?php endwhile; ?>

			

		<?php else : ?>

			<?php get_template_part( 'no-results', 'archive' ); ?>

		<?php endif; ?>

	</div>

<?php get_footer(); ?>
