<?php
/**
 * Template name: about
 *
 *
 * @package ae_boilerplate
 */

get_header(); ?>

<div class="banner about">
	<div class="wrapper">
		<div class="hp-featured">
			<div id="slide-left" class="featured-bg"></div>
			<h1>about  <span class="frey">FREY</span><span class="environmental">ENVIRONMENTAL INC.</span></h1>
		</div>
	</div>
</div>

<div class="main-content">

	<div class="about-frey grid">
		<div class="grid__item two-thirds pod">
			<?php while ( have_posts() ) : the_post(); ?>

				<?php the_content() ?>

			<?php endwhile; // end of the loop. ?>

			
		</div>
		<div class="grid__item one-third pod">
		
			<img src="<?php the_field('about_img'); ?>" alt="" />
		</div>
	</div>
	<div class="about-detail grid">
		<div class="grid__item one-third photo-column">
			<div class="about-detail-img">
				<img src="<?php the_field('project_management_img_1'); ?>" alt="" />
				<p><?php the_field('photo1_description'); ?></p>
			</div>
			<div class="about-detail-img">
				<img src="<?php the_field('project_management_img_2'); ?>" alt="" />
				<p><?php the_field('photo2_description'); ?></p>
			</div>			
		</div>
		<div class="grid__item two-thirds pod">
			<h3>Total quality project management program</h3>
			
			<p><?php the_field('project_management'); ?></p>			
		</div>
	</div><!-- ABOUT DETAIL -->
	<div class="staff">
		<h2>Staff</h2>

		<?php 
		 		 
		$rows = get_field('staff');
		if($rows)
		{
			
		 
			foreach($rows as $row)
			{
				echo '<div class="employee">';
				echo '<div class="employee-description">';
				echo '<div class="employee-img">';
				echo '<img src="' . $row['employee_photo'] . '" >';
				echo '</div>';
				echo '<h6>' . $row['employee_name'] . '</h6>';
				echo '<p>' . $row['employee_credentials'] . '</p>';
				echo '</div></div>';
			}
		 
			echo '</ul>';
		}
		 
		?>

	</div><!-- STAFF -->
	



	

<?php get_footer(); ?>
