<?php
/**
 * The template for displaying 404 pages (Not Found).
 *
 * @package ae_boilerplate
 */

get_header(); ?>

	<div class="pageWrapper">
		<section class="error-404 not-found">
			<header class="page-header">
				<h1 class="page-title"><?php _e( 'Sorry, there\'s nothing here.' , 'ae_boilerplate' ); ?></h1>
			</header><!-- .page-header -->

			<div class="page-content">
				<p><?php _e( 'Make the most of your time here and do ten push-up\'s.', 'ae_boilerplate' ); ?></p>
			</div><!-- .page-content -->
		</section><!-- .error-404 -->
	</div>
<?php get_footer(); ?>