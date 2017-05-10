<?php
/**
 * The template for displaying 404 pages (Not Found).
 *
 * @package ae_boilerplate
 */

get_header(); ?>
	<?php 			
		echo '<header class="entry-header">';
			echo '<div class="intro breadcrumb">';
				echo '<h2 class="logo"><a class="site-title" href="';
				bloginfo('url');
				echo '" title="';
				bloginfo('name');
				echo '">';
				echo 'Richard Wenz';
				echo '</a></h2>';			
			echo '</div>';
		echo '</header>';	
	?>		
	<div class="pageWrapper">
		<section class="error-404 not-found">
			<header class="page-header">
				<h1 class="page-title"><?php _e( 'Nope.' , 'ae_boilerplate' ); ?></h1>
			</header><!-- .page-header -->

			<div class="page-content">
				<p><?php _e( 'Sorry, there\'s nothing here. Make the most of this mistake and do ten push-up\'s.', 'ae_boilerplate' ); ?></p>
			</div><!-- .page-content -->
		</section><!-- .error-404 -->
	</div>
<?php get_footer(); ?>