<?php
/**
 * @package ae_boilerplate
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>


<?php if ( 'teacher_trainings' == get_post_type() ) : ?>


<?php
	// need to find a way to input variable for location
	$location = tulum;
?>



<?php


	if ( in_category($location) ) :
		
		
	else :
		

	endif;				
?>



<?php else : ?>

<?php endif; ?>



	
				<?php the_content(); ?>
				<?php
					wp_link_pages( array(
						'before' => '<div class="page-links">' . __( 'Pages:', 'ae_boilerplate' ),
						'after'  => '</div>',
					) );
				?>
				<?php 
					if ( is_single() ){
						if( 'teachers' == get_post_type() ){

						} else {
							echo '<div class="backToBlog">';
								echo '<p><a href="/read-watch-listen/">Back to Read Watch Listen</a></p>';
							echo '</div>';
						}
					}
				?>


</article><!-- #post-## -->
