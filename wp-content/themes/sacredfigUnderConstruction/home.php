<?php
/**
 * Template name: home
 *
 *
 * @package ae_boilerplate
 */

get_header(); ?>

<h2 class="comingSoon">From this small seed,<br>a mighty tree will grow.</h2>
<div class="signUp">
	<div class="mailingList">
		<?php gravity_form(1, false, false, false, '', true); ?>
	</div>
	<p class="instructions progress">Sign up, we’ll keep you posted on our progress.</p>
</div>

<p class="instructions">Say hello, we’d love to hear from you</p>
<a class="emailLink" href="mailto:anton@thesacredfig.com">anton@thesacredfig.com</a>

<?php get_footer(); ?>
