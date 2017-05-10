<?php
/**
 * Template name: home
 *
 *
 * @package ae_boilerplate
 */

get_header(); ?>

<div class="intro">
	<h1>World-class <a href="/retreats">yoga retreats</a> &amp; <a href="/teacher_trainings/">teacher trainings</a><span class="mobileHide">,<br>in the most awe-inspiring <a class="scrollLocations" href="#locationContainer">locations</a> around the globe.</span></h1>
	<div class="downArrow">
		<p><span class="icon-down lightToGrey"></span></p>
	</div>
</div>

<div class="wrapper hpProducts snap">
	<div class="grid">
		<div class="grid__item one-half product">
			<div class="module">
				<h2>Yoga Teacher Trainings</h2>
				<img src="<?php bloginfo('template_directory'); ?>/img/ytt_hp.jpg">
				<h4>Transform your life in 30 days</h4>
				<p><span>26 days, 200 hours</span><br>Transform in every sense of the word. Vastly exceeds the Yoga Alliance requirements.</p><a class="product" href="/teacher_trainings/">learn more</a>
			</div>
		</div>
		<div class="grid__item one-half product">
			<div class="module">
				<h2>Yoga &amp; Wellness Retreats</h2>
				<img src="<?php bloginfo('template_directory'); ?>/img/retreats.jpg">
				<h4>Re-calibrate with what’s essential</h4>
				<p><span>5 &amp; 7 day escapes</span><br>Shift your perspective with super-foods, phenomenal yoga, sunrise meditation &amp; still time for an afternoon swim... </p><a class="product" href="/retreats/">learn more</a>
			</div>
		</div>
	</div>
</div>


<div id="locationContainer" class="locationContainer snap">
	<div class="locations">
		<div id="photos">
			<section class="slider">
				<div class="flexslider">
					<div class="locationsNav">
						<ul class="flex-control-nav">
							<?php if(get_field('location')): ?>
								<?php while(has_sub_field('location')): ?>
									<li><?php the_sub_field('location_city'); ?></li>
								<?php endwhile; ?>
							<?php endif; ?>
						</ul>
					</div>
					<ul class="slides">

							<?php
							if(get_field('location')) {
								while(has_sub_field('location')) {


									echo '<li class="slideContainer">';
										echo '<div class="location slide" style="background:url(' . get_sub_field('location_image') . ') center center; -webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover;  background-size: cover;">';
											echo '<div class="locationContentContainer">';
												echo '<div class="slideContentContainer">';
													echo '<div class="slideContent">';
														echo '<h5>' . get_sub_field('location_city') . '</h5>';
														echo '<h6>' . get_sub_field('location_country') . '</h6>';

														if (get_sub_field('active_location') == 'yes') {
															echo '<a href="' . get_sub_field('teacher_training_link') . '">The Teacher Training: <span class="date">' . get_sub_field('teacher_training_start_date') . '</span></a>';
															echo '<a href="' . get_sub_field('retreats_link') . '">The Retreat: <span class="date">' . get_sub_field('retreat_start_date') . '</span></a>';
														} else {
															echo '<a href="' . get_sub_field('teacher_training_link') . '">The Teacher Training: <span class="date">dates not yet announced</span></a>';
															echo '<a href="' . get_sub_field('retreats_link') . '">The Retreat: <span class="date">dates not yet announced</span></a>';
														}
													echo '</div>';
												echo '</div>';
											echo '</div>';
										echo '</div>';
									echo '</li>';
								}
							}
							?>


					</ul>
				</div><!-- FLEXSLIDER -->
			</section><!-- SLIDER -->
		</div><!-- PHOTOS -->
	</div><!-- LOCATIONS -->
</div><!-- LOCATION CONTAINER -->

<div class="hpPhilosophy">
	<div class="wrapper">
		<div class="grid">
			<div class="grid__item one-half">
				<img class="philImg" src="<?php bloginfo('template_directory'); ?>/img/philosophy.jpg">
			</div>
			<div class="grid__item one-half">
				<div class="module philtxt">
					<h2>About The Sacred Fig</h2>
					<p>We have a modern approach to the timeless wisdom of yoga.  Our roots run deep in ancient yoga philosophy, and we apply it to our present culture in a relevant & accessible way.  We see science & spirit as simply different paths towards the same goal: self-knowledge.  As so we utilize modern fields of study... </p><a href="/about/">More about us</a>
				</div>
			</div>
		</div>
	</div>
</div>
<?php get_footer(); ?>
