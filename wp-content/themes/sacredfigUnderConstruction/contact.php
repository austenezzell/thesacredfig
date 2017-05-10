<?php
/**
 * Template name: contact
 *
 *
 * @package ae_boilerplate
 */

get_header(); ?>
<div class="contactHeaderImg">
<?php

	echo '<header>';
		echo '<div class="intro">';
			echo '<h1 class="logo"><a class="site-title" href="';
			bloginfo('url');
			echo '" title="';
			bloginfo('name');
			echo '">';
			echo 'Richard Wenz';
			echo '</a></h1>';
		echo '</div>';
	echo '</header>';

?>	
</div><!-- contactheaderImg -->
<div class="aboutContent grid">
	<div class="grid__item two-thirds">
		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'content', 'page' ); ?>

		<?php endwhile; // end of the loop. ?>
	</div>
	<div class="grid__item one-third colTwo">
		<ul>
			<li><h3>get in touch</h3></li>
			<li><a href="http://www.linkedin.com/in/richwenz">linkedIn</a></li>
			<li><p class="phone">949-606-5887</p></li>
			<li><a class="email" href="mailto:richjohnwenz@gmail.com">richjohnwenz@gmail.com</a></li>
		</ul>
	</div>
</p>
</div>

<?php get_footer(); ?>
