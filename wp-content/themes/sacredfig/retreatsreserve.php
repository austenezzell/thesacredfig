<?php
/**
 * Template name: reserve
 *
 *
 * @package ae_boilerplate
 */

get_header(); ?>



<div class="signUpForm grid">
	<div class="grid__item two-thirds formColumn">
		<div class="module">
			<?php
				$location = $_GET['location'];
				$product = $_GET['product'];
				echo '<h3>' . $product . ' Deposite</h3>';

				while ( have_posts() ) {
					the_post();
					get_template_part( 'content', 'single' );
				}
			?>

			<a class="reserveYourSpace" href="
				<?php 
				$rows = get_field('training_location');
				if($rows)
				{
					foreach($rows as $row)
					{
						if ( $row['training_location'] == $location ) {
							echo $row['paypal_link'];
						}
					}
				}
				?>
			">Reserve your space</a>
		</div>
	</div>
	<div class="grid__item one-third contactColumn">
		<div class="module">
			<h3>Questions?</h3>
			<ul class="sidebarContact">
				<li><p class="instructions">For general inquiries - </p></li>
				<li class="link"><a class="email" href="mailto:om@thesacredfig.com">om@thesacredfig.com</a></li>
				<li><p class="instructions">Or just call us -</p></li>
				<li class="link"><p><a href="tel:+9178179263">917.817.9263</a></p></li>
			</ul>
		</div>	
	</div>
</div>


<?php get_footer(); ?>
