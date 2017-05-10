<?php
/**
 * @package ae_boilerplate
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	

	
				<?php the_content(); ?>
				<?php
					wp_link_pages( array(
						'before' => '<div class="page-links">' . __( 'Pages:', 'ae_boilerplate' ),
						'after'  => '</div>',
					) );
				?>
			


</article><!-- #post-## -->
