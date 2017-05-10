	 <?php
        query_posts('posts_per_page=16');
		
		while (have_posts()) : the_post();
		echo '<li>';
			echo '<a class="article" href="';
				the_permalink();
				echo '"><h3>';
					the_title();
				echo '</h3>';
				echo '<div class="date">';
					echo get_the_date(m) . '.' . get_the_date(y);
				echo '</div>';
				echo '<div class="excerpt">';
					the_excerpt();
				echo '</div>';
			echo '</a>';
		echo '</li>';	
		endwhile;
	?>
	<li>
		<a href="/digital" class="archive-link">older digital projects</a>
	</li>