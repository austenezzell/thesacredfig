<?php
/**
 * @package ae_boilerplate
 */
?>
<div class="article">
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	
<?php 
	if ( 'teachers' == get_post_type() ) : ?>
		<div class="grid teacherExcrpt">
			<div class="grid__item one-quarter">
				<div class="teacherThumbnail">
					<a class="thumb" href="<?php the_permalink(); ?>"><?php echo get_the_post_thumbnail($page->ID, 'small'); ?></a>
				</div>
			</div>
			<div class="grid__item three-quarters">
				<div class="module aboutTeacher">
					<h2 class="entry-title"><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
					<div class="entry-content">
						<?php 
						$content = get_the_content();
						$trimmed_content = wp_trim_words( $content, 40, '...' );
						echo '<p>' . $trimmed_content . '<p><a class="more" href="'. get_permalink() .'">More</a>';
						?>
					</div><!-- .entry-content -->				
				</div>
			</div>		
		</div>	


<?php elseif ( 'teacher_trainings' == get_post_type() || 'retreats' == get_post_type()  ) : ?>	
	<?php 
		$thumbURL = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'large' );
		$theTitle = get_the_title();

		echo '<div class="locationBox ' . $theTitle . '">';
			echo '<div class="postImage" style="background: url(' . $thumbURL[0] . ') no-repeat center center; background-size: cover;-webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover; background-size: cover;  ">';
	?>

			<header class="entry-header">
				<h2 class="entry-title">
					<a class="productLink" href="<?php the_permalink(); ?>" rel="bookmark"><?php echo get_the_title(); ?><br>
							<?php
								if(get_field('date')) {
									echo '<span class="date">' . get_field('date') . '</span>';
								} else {
									echo '<span class="date">Dates not yet announced</span>';
								}
							?>
					</a>
			</header><!-- .entry-header -->



	

			<footer class="entry-meta">
				<?php if ( 'post' == get_post_type() ) : // Hide category and tag text for pages on Search ?>
					<?php
						/* translators: used between list items, there is a space after the comma */
						$categories_list = get_the_category_list( __( ', ', 'ae_boilerplate' ) );
						if ( $categories_list && ae_boilerplate_categorized_blog() ) :
					?>
					<?php endif; // End if categories ?>

					<?php
						/* translators: used between list items, there is a space after the comma */
						$tags_list = get_the_tag_list( '', __( ', ', 'ae_boilerplate' ) );
						if ( $tags_list ) :
					?>
					<span class="tags-links">
						<?php printf( __( 'Tagged %1$s', 'ae_boilerplate' ), $tags_list ); ?>
					</span>
					<?php endif; // End if $tags_list ?>
				<?php endif; // End if 'post' == get_post_type() ?>

				<?php edit_post_link( __( 'Edit', 'ae_boilerplate' ), '<span class="edit-link">', '</span>' ); ?>
			</footer><!-- .entry-meta -->


		<?php 
				echo '</div>';
			echo '</div>';

			$count_posts = wp_count_posts('teacher_trainings');
			if ($count_posts->publish < 1) {
				
			}
		?>

<?php else : ?>

	<header class="entry-header">
		<div class="date">
			<?php the_date('d-m-Y', '<p class="date">', '</p>'); ?>
		</div>		
		<h2 class="entry-title"><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h2>		
			<?php if ( 'post' == get_post_type() ) : ?>
		<?php endif; ?>
	</header><!-- .entry-header -->

	<?php if ( is_search() ) : // Only display Excerpts for Search ?>
	 	<div class="entry-summary">
		<?php the_excerpt(); ?>
	</div><!-- .entry-summary --> 
	<?php elseif (has_excerpt() ) : ?>
		<div class="entry-summary">
			<?php the_excerpt(); ?>
			<a class="button" href="<?php the_permalink(); ?>" rel="bookmark">see more</a>
		</div><!-- .entry-summary -->
	<?php else : ?>
	<div class="entry-content">
		<?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'ae_boilerplate' ) ); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'ae_boilerplate' ),
				'after'  => '</div>',
			) );
		?>
		<a class="button" href="<?php the_permalink(); ?>" rel="bookmark">see more</a>
	</div><!-- .entry-content -->
	<?php endif; ?>

	<footer class="entry-meta">
		<?php if ( 'post' == get_post_type() ) : // Hide category and tag text for pages on Search ?>
			<?php
				/* translators: used between list items, there is a space after the comma */
				$categories_list = get_the_category_list( __( ', ', 'ae_boilerplate' ) );
				if ( $categories_list && ae_boilerplate_categorized_blog() ) :
			?>
			<?php endif; // End if categories ?>

			<?php
				/* translators: used between list items, there is a space after the comma */
				$tags_list = get_the_tag_list( '', __( ', ', 'ae_boilerplate' ) );
				if ( $tags_list ) :
			?>
			<span class="tags-links">
				<?php printf( __( 'Tagged %1$s', 'ae_boilerplate' ), $tags_list ); ?>
			</span>
			<?php endif; // End if $tags_list ?>
		<?php endif; // End if 'post' == get_post_type() ?>

		<?php edit_post_link( __( 'Edit', 'ae_boilerplate' ), '<span class="edit-link">', '</span>' ); ?>
	</footer><!-- .entry-meta -->
<?php endif; ?>
</article><!-- #post-## -->
</div>