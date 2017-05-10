<?php
/**
 * The Template for displaying all single posts.
 *
 * @package ae_boilerplate
 */

get_header(); ?>

<?php

		if(get_field('product_status') == 'No'){
			echo '<div class="notification"><div class="module">';
				echo '<h3>Dates have not been announced for our retreat in ' . get_the_title() . '</h3>';
				echo '<p>Sign up to stay posted on this retreat. We will let you know as soon as more information is available.</p>';
				echo '<a href="#" class="closeNotification">close</a>';
			echo '</div></div>';
		}

		echo '<div class="featuredTxt intro">';
			echo '<p class="subhead">' . get_field('featuredtxt') . '</p>';
			echo '<div class="downArrow">';
				echo '<p><span class="icon-down lightToGrey"></span></p>';
			echo '</div>';
		echo '</div>';
?>

<?php
	if($content = $post->post_content ) {
		while ( have_posts() ) : the_post();
			echo '<div class="videoContainer">';
				echo '<div class="overview">';
					the_content();
				echo '</div>';
			echo '</div>';
		endwhile;
	}
?>

<div class="subnavContainer">
	<div class="singleSubnav">
		<nav>
			<ul>
				<?php if(get_field('about-location')) { echo '<li><a class="navAbout" href="#about">About ' . get_the_title() . '</a></li>'; } ?>
				<?php if(get_field('retreat-center')) { echo '<li><a class="navcenter" href="#retreatcenter">The Retreat Center</a></li>'; } ?>
				<?php if(get_field('curriculum')) { echo '<li><a class="navcurriculum" href="#curriculum">curriculum</a></li>'; } ?>
				<?php if(get_field('product_status') == 'Yes'){
					if(get_field('schedule')) { echo '<li><a class="navSchedule" href="#schedule">Daily Schedule</a></li>'; }
				} ?>
				<?php if(get_field('product_status') == 'No') {} else { echo '<li><a class="navFaculty" href="#faculty">Faculty</a></li>'; } ?>
				<?php if(get_field('testimonials')) { echo '<li><a class="navTestimonials" href="#testimonials">Testimonials</a></li>'; } ?>

				<li><a class="navInvestment" href="#investment">Investment</a></li>
				<?php if(get_field('product_status') == 'No'){
					echo '<li><a class="navBook" href="#book">Stay Posted</a></li>';
					} else {
						echo '<li><a class="navBook" href="#book">Book</a></li>';
					}
				?>
			</ul>
		</nav>
	</div>
</div>

<?php
if(get_field('about-location')) {

	echo '<div id="about" class="grid singlePageModule ">';
		echo '<div class="moduleWrapper">';
			echo '<div class="grid__item one-third">';
				echo '<div class="singleAboutPhotos">';

					$aboutImageOne = get_field('about-image-one');
					$aboutImageTwo = get_field('about-image-two');
					$aboutImageThree = get_field('about-image-three');
					if( !empty($aboutImageOne) ) {
						echo '<img class="imageOne image" src="' . $aboutImageOne['url'] . '" alt="' . $aboutImageOne['alt'] . '" />';
					}
					if( !empty($aboutImageTwo) ) {
						echo '<img class="imageOne image" src="' . $aboutImageTwo['url'] . '" alt="' . $aboutImageTwo['alt'] . '" />';
					}
					if( !empty($aboutImageThree) ) {
						echo '<img class="imageOne image" src="' . $aboutImageThree['url'] . '" alt="' . $aboutImageThree['alt'] . '" />';
					}

				echo '</div>';
			echo '</div>';
			echo '<div class="grid__item two-thirds">';
				echo '<div class="module">';
					echo '<h3>About ' . get_the_title() . '</h3>';
					echo the_field('about-location');
				echo '</div>';
			echo '</div>';
		echo '</div>';
	echo '</div>';
}
if(get_field('retreat-center')) {

	echo '<div id="retreatcenter" class="grid singlePageModule ">';
		echo '<div class="moduleWrapper">';
			echo '<div class="grid__item two-thirds">';
				echo '<div class="module">';
					echo '<h3>The Retreat Center</h3>';
					echo the_field('retreat-center');
				echo '</div>';
			echo '</div>';
			echo '<div class="grid__item one-third">';
				echo '<div class="singleAboutPhotos">';

					$centerImageOne = get_field('center-image-one');
					$centerImageTwo = get_field('center-image-two');
					$centerImageThree = get_field('center-image-three');
					if( !empty($centerImageOne) ) {
						echo '<img class="imageOne image" src="' . $centerImageOne['url'] . '" alt="' . $centerImageOne['alt'] . '" />';
					}
					if( !empty($centerImageTwo) ) {
						echo '<img class="imageOne image" src="' . $centerImageTwo['url'] . '" alt="' . $centerImageTwo['alt'] . '" />';
					}
					if( !empty($centerImageThree) ) {
						echo '<img class="imageOne image" src="' . $centerImageThree['url'] . '" alt="' . $centerImageThree['alt'] . '" />';
					}

				echo '</div>';
			echo '</div>';
		echo '</div>';
	echo '</div>';
}


if(get_field('curriculum')) {
	echo '<div id="curriculum" class="singlePageModule">';
		echo '<div class="heart"><span class="icon-heart"></span></div>';
		echo '<div class="module">';
			echo '<h3>curriculum</h3>';
		echo '</div>';

		$rows = get_field('curriculum');
		if($rows) {
			foreach($rows as $row) {
				echo '<div class="curriculumpod">';
					echo '<div class="module">';
						echo '<header class="podHeader">';
							echo '<h4>' . $row['curriculumtitle'] . '</h4>';
							echo '<p class="hours">' . $row['hours'] . ' hours</p>';
							echo '<p class="important">' . $row['intro'] . '</p>';
							echo '<a class="learnMore" href="#">learn more</a>';
						echo '</header>';
						echo '<div class="description">' . $row['description'] . '</div>';
					echo '</div>';
				echo '</div>';
			}
		}
	echo '</div>';
}
if(get_field('product_status') == 'Yes'){
	if(get_field('schedule')) {
		echo '<div id="schedule" class="singlePageModule">';
			echo '<div class="heart"><span class="icon-heart"></span></div>';
			echo '<div class="module moduleTitle">';
				echo '<h3>Daily Schedule</h3>';
			echo '</div>';
			if(get_field('schedule_description')) {
				echo '<div class="scheduleDescription">';
					echo '<p>' . the_field('schedule_description') . '</p>';
				echo '</div>';
			}

			$scheduleitems = get_field('schedule');
			if($scheduleitems) {
				foreach($scheduleitems as $scheduleitem) {
					echo '<div class="grid scheduleItem">';
						echo '<div class="grid__item one-quarter">';
							echo '<div class="module time">';
								echo '<p>' . $scheduleitem['time'] . '</p>';
							echo '</div>';
						echo '</div>';
						echo '<div class="grid__item three-quarters ">';
							echo '<div class="module scheduleContent">';
								echo '<p>' . $scheduleitem['description'] . '</p>';
							echo '</div>';
						echo '</div>';
					echo '</div>';
				}
			}
		echo '</div>';
	}
}
?>

<?php
if(get_field('product_status') == 'No') {

} else {
echo '<div id="faculty" class="singlePageModule">';

	echo '<div class="wrapper">';
		echo '<div class="heart"><span class="icon-heart"></span></div>';
		echo '<div class="module moduleTitle">';
			echo '<h3>faculty</h3>';
		echo '</div>';
		echo '<div class="teachers">';


			while ( have_posts() ) : the_post();

					$categories = get_the_category();
					$category_id = $categories[0]->cat_ID;


			endwhile;



				$queryObject = new WP_Query( 'post_type=teachers' );
				if ($queryObject->have_posts()) {
				    while ($queryObject->have_posts()) {
				        $queryObject->the_post();
				        $ids[] = get_the_ID();

				        if ( in_category($category_id) ) {
							echo '<div class="grid teacherExcrpt visHidden">';
								echo '<div class="grid__item one-quarter">';
									echo '<div class="teacherThumbnail">';
										echo get_the_post_thumbnail($page->ID, 'small');
									echo '</div>';
								echo '</div>';
								echo '<div class="grid__item three-quarters">';
									echo '<div class="module aboutTeacher">';
										echo '<h4 class="teacherName">';
										
										the_title();
										echo '</h4>';
										echo '<div class="entry-content">';
											$content = get_the_content();
											$trimmed_content = wp_trim_words( $content, 40, '...' );
											echo '<div class="trimmedContent"><p>' . $trimmed_content . '</p></div>';
											echo '<div class="fullContent" style="display:none;">' . $content . '<div class="fullBioLink"><a href="' . get_permalink() . '">See ' . $teacher . '\'s full bio, schedule and more</a></div></div>';
											echo '<a class="more" href="#">More</a>';
										echo '</div>';
									echo '</div>';
								echo '</div>';
							echo '</div>';
						}
					}
				}
			wp_reset_query();

		echo '</div>';
	echo '</div>';
echo '</div>';

}
?>


<?php
	$rows = get_field('testimonials');
	if($rows) {
		echo '<div id="testimonials" class="singlePageModule">';
			echo '<div class="heart"><span class="icon-heart"></span></div>';
			echo '<div class="module moduleTitle">';
				echo '<h3>Testimonials</h3>';
			echo '</div>';

			echo '<div class="testimonialsWrapper">';
				echo '<section class="slider">';
					echo '<div class="flexslider">';
						echo '<ul class="slides">';

							foreach($rows as $row) {
								echo '<li class="slideContainer"><div class="testimonial">';
									if($row['quote']) {
										echo '<div class="quote">';
											echo '<p>' . $row['quote'] . '</p>';
										echo '</div>';
									}
									if($row['videoquote']) {
										echo '<div class="video-testimonial">';
											echo $row['videoquote'];
										echo '</div>';
									}
									if($row['author']) {
										echo '<div class="author">';
											echo '<p>' . $row['author'] . '</p>';
										echo '</div>';
									}
								echo '</li>';
							}
						echo '</ul>';
					echo '</div>';
				echo '</section>';
			echo '</div>';
		echo '</div>';
	}
?>


<div id="investment" class="singlePageModule">
	<div class="heart"><span class="icon-heart"></span></div>
	<div class="module moduleTitle">
		<h3>Investment</h3>
		<h4>what you get</h4>
	</div>
	<div class="module">

		<?php
			if(get_field('product_status') == 'No'){
				echo '<p class="TBA">TBA</p>';
			} else {

				$rows = get_field('what_you_get');

				$deposite_date_one = get_field('deposit_by_date_one');
				$deposite_date_two = get_field('deposit_by_date_two');
				$deposite_date_three = get_field('deposit_by_date_three');

				$deposite_price_one = get_field('first_deposit_price');
				$deposite_price_two = get_field('second_deposit_price');
				$deposite_price_three = get_field('third_deposit_price');

				if($rows) {
					foreach($rows as $row) {
						echo '<ul class="whatYouGet">';
							echo '<li>' . $row['what_you_get'] . '</li>';
						echo '</ul>';
					}
				}

				echo '<div class="prices">';
					echo '<p class="instructions">All inclusive of the above:</p>';
					echo '<div>';

						if ($deposite_price_one == 'TBA') {
							echo '<p>TBA';
                            echo ' <span>(Application received with USD $300 deposit by ' . $deposite_date_one . ')</span></p>';

						} elseif ($deposite_price_one && $deposite_price_one != 'TBA' ) {
                            echo '<p>USD $';
                            echo $deposite_price_one;
                            echo ' <span>(Application received with USD $300 deposit by ' . $deposite_date_one . ')</span></p>';
                        }

                        if ($deposite_price_two == 'TBA') {
                            echo '<p>TBA';
                            echo ' <span>(Application received with USD $300 deposit by ' . $deposite_date_two . ')</span></p>';

                        } elseif ($deposite_price_two && $deposite_price_two != 'TBA' ) {
                            echo '<p>USD $';
                            echo $deposite_price_two;
                            echo ' <span>(Application received with USD $300 deposit by ' . $deposite_date_two . ')</span></p>';
                        }

                        if ($deposite_price_three == 'TBA') {
                            echo '<p>TBA';
                            echo ' <span>(Application received with USD $300 deposit by ' . $deposite_date_three . ')</span></p>';

                        } elseif ($deposite_price_three && $deposite_price_three != 'TBA' ) {
                            echo '<p>USD $';
                            echo $deposite_price_three;
                            echo ' <span>(Application received with USD $300 deposit by ' . $deposite_date_three . ')</span></p>';
                        }

					echo '</div>';
				echo '</div>';
			}
		?>

	</div>
</div>

<div id="book" class="singlePageModule">
	<div class="heart"><span class="icon-heart"></span></div>
	<div class="bookNow">
		<?php
			$category = get_the_category();
			if(get_field('product_status') == 'No'){
				echo '<p class="become">We are ironing out the details.</p>';
				echo '<a href="/stay-posted/?location=';
				echo $category[0]->cat_name;
				echo '" class="bookButton">Stay Posted</a>';
				echo '<p class="instructions">&amp; we will let you know when the dates are announced</p>';
			} else {
				echo '<p class="become">Join a<br>Sacred Fig<br>Yoga Retreat</p>';
				echo '<a href="/retreat-reserve-your-spot/?product=';
				echo $category[0]->cat_name;
				echo '&location=';
				the_title();
				echo '" class="bookButton">Book Now</a>';
				echo '<p class="instructions">&amp; say bye bye to bad habits</p>';
			}
		?>
	</div>
</div>

<div class="quickBook slideup" style="display:none;">
		<?php
			if(get_field('product_status') == 'No'){
				echo '<p class="instructions">We are ironing out the details';
				echo '<a href="/stay-posted/?location=';
				echo $category[0]->cat_name;
				echo '" class="book">Stay Posted</a>';
			} else {
				$category = get_the_category();
				echo '<p class="instructions">Join a Sacred Fig Yoga Retreat <a class="book" href="/retreat-reserve-your-spot/?product=';
				echo $category[0]->cat_name;
				echo '&location=';
				the_title();
				echo '">Book Now</a></p>';
			}
		?>
</div>
<?php get_footer(); ?>
