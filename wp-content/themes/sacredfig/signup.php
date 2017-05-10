<?php
/**
 * Template name: signup
 *
 *
 * @package ae_boilerplate
 */

get_header(); ?>



<div class="signUpForm grid">
	<div class="grid__item two-thirds formColumn">
		<div class="module">
			<h3>About you</h3>
			<p class="formDescription">You're almost there, we just need to know a little more about you.</p>
			<?php
				if (is_page('retreat-sign-up')) {
					gravity_form(4, $display_title=false, $display_description=true, $display_inactive=false, $field_values=null, $ajax=false, $tabindex);
				} else {
					gravity_form(2, $display_title=false, $display_description=true, $display_inactive=false, $field_values=null, $ajax=false, $tabindex);
				}
			 ?>
		</div>
	</div>
	<div class="grid__item one-third contactColumn">
		<div class="module" >
			<h3>Questions?</h3>
			<ul class="sidebarContact">
				<li><p class="instructions">For general inquiries - </p></li>
				<li class="link"><a class="email" href="mailto:om@thesacredfig.com">om@thesacredfig.com</a></li>
				<li><p class="instructions">Or just call us -</p></li>
				<li class="link"><p><a href="tel:+917.817.9263">917.817.9263</a></p></li>
			</ul>
		</div>
	</div>
</div>


<?php get_footer(); ?>
