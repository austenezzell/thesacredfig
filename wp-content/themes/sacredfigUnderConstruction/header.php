<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package ae_boilerplate
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<link rel="stylesheet" id="style-css" href="<?php bloginfo('template_directory'); ?>/stylesheets/_style.css" type="text/css" media="all">

<script>
if (!window.jQuery) {
    document.write('<script src="<?php bloginfo('template_directory'); ?>/js/vendor/jquery-1.9.1.min.js"><\/script>');
}
</script>

<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,800italic,400,300,700,600,800|Raleway:400,100,200,600,800,900' rel='stylesheet' type='text/css'>



<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site colorChange">
	<div class="mainContentContainer">
		<?php do_action( 'before' ); ?>
		<header>
			<div class="header">
				<h1 class="logo  white" alt="The Sacred Fig Yoga Teacher Training">
					<?php include('logo.php'); ?>
				</h1>
			</div>
		</header>
		



				
			
