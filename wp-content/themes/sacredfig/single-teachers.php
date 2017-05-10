<?php
/**
 * The Template for displaying all single posts.
 *
 * @package ae_boilerplate
 */

get_header(); ?>

<?php 
	if (get_field('quote')) {
		echo '<div class="intro quote"><p>&ldquo;' . get_field('quote') . '&rdquo;</p>';
		echo '	<div class="downArrow"><p><span class="icon-down lightToGrey"></span></p></div>';
		echo '</div>';
	}
	if (get_field('teacher-video')) {
		
		echo '<div class="teacherVideo">' . get_field('teacher-video') . '</div>';		
	}
?>
<div class="bio">
	<?php while ( have_posts() ) : the_post(); ?>

		<?php get_template_part( 'content', 'single' ); ?>

	<?php endwhile; // end of the loop. ?>
</div>


<?php if ( have_rows('monday_class') || have_rows('tuesday_class') || have_rows('wednesday_class') || have_rows('thursday_class') || have_rows('friday_class') || have_rows('saturday_class') || have_rows('sunday_class') ) : ?>
	<?php
		echo '<div class="scheduleTitle">';
			echo '<h3>';
			the_title();
			echo '&#39;s<br>';
			if (get_field('current_location')){
				echo the_field('current_location') . ' ';
			}
			echo 'Class Schedule</h3>';
			echo '<p>click on a day or a time for class details</p>';
		echo '</div>';
	?>

	<div class="teacherSchedule">
		<div class="dayContainer monday">
			<div class="day">
				<a href="#">Monday</a>
			</div>
			<div class="classes">
				<?php
				if( have_rows('monday_class') ):
					while ( have_rows('monday_class') ) : the_row();		
				        echo '<a class="class" href="#">';
					        the_sub_field('time');
				        echo '</a>';
				    endwhile;
				else :
				endif;
				?>
			</div>
			<?php
			if( have_rows('monday_class') ):
			    while ( have_rows('monday_class') ) : the_row();
					echo '<div class="classDetail" style="display:none;">';
						echo '<p><span>';
							echo the_sub_field('time');
						echo '</span> &#64; ';
							echo the_sub_field('class_location');
						echo '</p>';
						echo  '<p>';
							echo the_sub_field('class_description');
						echo '</p>';
						echo '<a href="#" class="closeDetail"><span class="icon-close"></span></a>';
					echo '</div>';
			    endwhile;
			else :
			endif;
			?>
		</div>

		<div class="dayContainer tuesday">
			<div class="day">
				<a href="#">tuesday</a>
			</div>
			<div class="classes">
				<?php
				if( have_rows('tuesday_class') ):
					while ( have_rows('tuesday_class') ) : the_row();		
				        echo '<a class="class" href="#">';
					        the_sub_field('time');
				        echo '</a>';
				    endwhile;
				else :
				endif;
				?>
			</div>
			<?php
			if( have_rows('tuesday_class') ):
			    while ( have_rows('tuesday_class') ) : the_row();
					echo '<div class="classDetail" style="display:none;">';
						echo '<p><span>';
							echo the_sub_field('time');
						echo '</span> &#64; ';
							echo the_sub_field('class_location');
						echo '</p>';
						echo  '<p>';
							echo the_sub_field('class_description');
						echo '</p>';
						echo '<a href="#" class="closeDetail"><span class="icon-close"></span></a>';
					echo '</div>';
			    endwhile;
			else :
			endif;
			?>
		</div>

		<div class="dayContainer wednesday">
			<div class="day">
				<a href="#">wednesday</a>
			</div>
			<div class="classes">
				<?php
				if( have_rows('wednesday_class') ):
					while ( have_rows('wednesday_class') ) : the_row();		
				        echo '<a class="class" href="#">';
					        the_sub_field('time');
				        echo '</a>';
				    endwhile;
				else :
				endif;
				?>
			</div>
			<?php
			if( have_rows('wednesday_class') ):
			    while ( have_rows('wednesday_class') ) : the_row();
					echo '<div class="classDetail" style="display:none;">';
						echo '<p><span>';
							echo the_sub_field('time');
						echo '</span> &#64; ';
							echo the_sub_field('class_location');
						echo '</p>';
						echo  '<p>';
							echo the_sub_field('class_description');
						echo '</p>';
						echo '<a href="#" class="closeDetail"><span class="icon-close"></span></a>';
					echo '</div>';
			    endwhile;
			else :
			endif;
			?>
		</div>

		<div class="dayContainer thursday">
			<div class="day">
				<a href="#">thursday</a>
			</div>
			<div class="classes">
				<?php
				if( have_rows('thursday_class') ):
					while ( have_rows('thursday_class') ) : the_row();		
				        echo '<a class="class" href="#">';
					        the_sub_field('time');
				        echo '</a>';
				    endwhile;
				else :
				endif;
				?>
			</div>
			<?php
			if( have_rows('thursday_class') ):
			    while ( have_rows('thursday_class') ) : the_row();
					echo '<div class="classDetail" style="display:none;">';
						echo '<p><span>';
							echo the_sub_field('time');
						echo '</span> &#64; ';
							echo the_sub_field('class_location');
						echo '</p>';
						echo  '<p>';
							echo the_sub_field('class_description');
						echo '</p>';
						echo '<a href="#" class="closeDetail"><span class="icon-close"></span></a>';
					echo '</div>';
			    endwhile;
			else :
			endif;
			?>
		</div>

		<div class="dayContainer friday">
			<div class="day">
				<a href="#">friday</a>
			</div>
			<div class="classes">
				<?php
				if( have_rows('friday_class') ):
					while ( have_rows('friday_class') ) : the_row();		
				        echo '<a class="class" href="#">';
					        the_sub_field('time');
				        echo '</a>';
				    endwhile;
				else :
				endif;
				?>
			</div>
			<?php
			if( have_rows('friday_class') ):
			    while ( have_rows('friday_class') ) : the_row();
					echo '<div class="classDetail" style="display:none;">';
						echo '<p><span>';
							echo the_sub_field('time');
						echo '</span> &#64; ';
							echo the_sub_field('class_location');
						echo '</p>';
						echo  '<p>';
							echo the_sub_field('class_description');
						echo '</p>';
						echo '<a href="#" class="closeDetail"><span class="icon-close"></span></a>';
					echo '</div>';
			    endwhile;
			else :
			endif;
			?>
		</div>	

		<div class="dayContainer saturday">
			<div class="day">
				<a href="#">saturday</a>
			</div>
			<div class="classes">
				<?php
				if( have_rows('saturday_class') ):
					while ( have_rows('saturday_class') ) : the_row();		
				        echo '<a class="class" href="#">';
					        the_sub_field('time');
				        echo '</a>';
				    endwhile;
				else :
				endif;
				?>
			</div>
			<?php
			if( have_rows('saturday_class') ):
			    while ( have_rows('saturday_class') ) : the_row();
					echo '<div class="classDetail" style="display:none;">';
						echo '<p><span>';
							echo the_sub_field('time');
						echo '</span> &#64; ';
							echo the_sub_field('class_location');
						echo '</p>';
						echo  '<p>';
							echo the_sub_field('class_description');
						echo '</p>';
						echo '<a href="#" class="closeDetail"><span class="icon-close"></span></a>';
					echo '</div>';
			    endwhile;
			else :
			endif;
			?>
		</div>	

		<div class="dayContainer sunday">
			<div class="day">
				<a href="#">sunday</a>
			</div>
			<div class="classes">
				<?php
				if( have_rows('sunday_class') ):
					while ( have_rows('sunday_class') ) : the_row();		
				        echo '<a class="class" href="#">';
					        the_sub_field('time');
				        echo '</a>';
				    endwhile;
				else :
				endif;
				?>
			</div>
			<?php
			if( have_rows('sunday_class') ):
			    while ( have_rows('sunday_class') ) : the_row();
					echo '<div class="classDetail" style="display:none;">';
						echo '<p><span>';
							echo the_sub_field('time');
						echo '</span> &#64; ';
							echo the_sub_field('class_location');
						echo '</p>';
						echo  '<p>';
							echo the_sub_field('class_description');
						echo '</p>';
						echo '<a href="#" class="closeDetail"><span class="icon-close"></span></a>';
					echo '</div>';
			    endwhile;
			else :
			endif;
			?>
		</div>	

		<a href="#" class="openAll globalButton">See all class details</a>
		<a href="#" class="closeAll globalButton">Close all class details</a>
	</div>
<?php endif; ?>
<?php get_footer(); ?>