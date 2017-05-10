<?php
/**
 * The Template for displaying all single posts.
 *
 * @package ae_boilerplate
 */

get_header(); ?>


	<div class="grid digitalSingleContainer">
		<div class="grid__item one-half darkBG">
			<?php 
				$thumbURL = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'big' );
				$permalink = get_permalink( $id );
				$postTitle = get_the_title();		

				echo '<div class="featureImg" style="background: url(' . $thumbURL[0] . ') center center; background-size: cover;-webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover; background-size: cover;  ">';
					echo '<header class="entry-header">';
						echo '<div class="intro breadcrumb">';
							echo '<h2 class="logo"><a class="site-title" href="';
							bloginfo('url');
							echo '" title="';
							bloginfo('name');
							echo '">';
							include('logo.php');
							echo '</a></h2>';			
							echo '<p class="slash">/</p> <a class="sub-level" href=/digital>digital </a>';
							echo '<h1 class="post-title">' . $postTitle . '</h1>';
							echo '<div class="excerpt">';
								the_excerpt();
							echo '</div>';
						echo '</div>';
					echo '</header>';
				echo '</div>';
			?>		
		</div>
		
		<div class="grid__item one-half content-column">
			<div class="module">
				<?php 
					if (get_field('role')) {
						
						echo '<p class="role"><span>role: </span>' . get_field('role') . '</p>';		
					}
					if (get_field('brief')) {
						echo '<h4>The Brief</h4>';
						echo '<p>' . get_field('brief') . '</p>';		
					}
					if (get_field('product')) {
						echo '<h4>The Product</h4>';
						echo '<p>' . get_field('product') . '</p>';		
					}
					// IMAGES	 
					$rows = get_field('image');
					if($rows) {
						foreach($rows as $row) {
							echo '<div class="section_photos">';
								if ($row['image']) {
									echo '<div>';
										echo '<img src="' . $row['image'] . '" />';
									echo '</div>';	
								}								
							echo '</div>';
						}
					}
					if (get_field('the_result')) {
						echo '<h4>The result</h4>';
						echo '<p>' . get_field('the_result') . '</p>';		
					}	

					if (get_field('technology_used')) {
						echo '<h4>The technology</h4>';
						echo '<p>' . get_field('technology_used') . '</p>';		
					}	
					if (get_field('lessons_learned')) {
						echo '<h4>Lessons Learned</h4>';
						echo '<p>' . get_field('lessons_learned') . '</p>';		
					}
					if (get_field('link')) {
						echo '<a href="http://' . get_field('link') . '">SEE IT</a>';
					}																												
				?>	
			</div>
		</div>
	</div>

<?php get_footer(); ?>