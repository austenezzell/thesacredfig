<?php
/**
 * The Template for displaying all single posts.
 *
 * @package ae_boilerplate
 */

get_header(); ?>
	<div class="photos">
		<div id="photoContainer" class="photo-container">	
			<?php 			
				echo '<header class="entry-header">';
					echo '<div class="intro breadcrumb">';
						echo '<h2 class="logo"><a class="site-title" href="';
						bloginfo('url');
						echo '" title="';
						bloginfo('name');
						echo '">';
						include('logo.php');
						echo '</a></h2>';			
						echo '<p class="slash">/</p> <a class="sub-level" href=/photography>photography </a>';
					echo '</div>';
				echo '</header>';	
			?>		


			<section class="photoHeader">
				<div class="image">
					
					<div class="detail snap">
						<h1 class="portfolioTitle"><?php the_title();?></h1>
						<div class="imageContainer">
							<?php the_post_thumbnail( 'large' ); ?> 
						</div>
					</div>
				
					<div class="tutorial">
						<p class="scroll">Scroll</p>
					</div>
				</div>
			</section>
			<div class="portfolioImages">
			<?php
			if(get_field('image'))
			{      
			    while(has_sub_field('image'))
			    {                        
			        echo '<section>';
			          echo '<div class="image">';
			            echo '<div class="detail snap">';
			           		echo '<div class="imageContainer">';
			            		echo '<img src="' . get_sub_field('image') .'">';
			            	echo '</di>';
			            echo '</div>';
			            echo '<h4 class="photograph-title">' . get_sub_field('title') . '</h4>';
			          echo '</div>';
			        echo '</section>';                                             
			    }
			}
			?>  	
			</div><!-- PORTFOLIOIMAGES -->
        </div><!-- PHOTO CONTAINER -->
	</div><!-- PHOTOS -->
		<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'content', 'single' ); ?>

		<?php endwhile; // end of the loop. ?>



<?php get_footer(); ?>