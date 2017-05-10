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

<link href='http://fonts.googleapis.com/css?family=Playfair+Display:400,700,400italic,700italic|Raleway:400,200,600,800|Open+Sans:400,800,600,300' rel='stylesheet' type='text/css'>




<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<div class="loading">
		<div class="logo">
			<a href="/"><?php include('logo.php'); ?></a>
		</div>
	</div>

	<div class="navigation colorChange">
		<nav>
			<div class="navGroup">
				<a class="nav-home navItem lighterColorChange" href="/"><span>The</span> <span>Sacred</span> <span>Fig</span></a>
			</div>
			<div class="navGroup">
				<a  class="nav-teacherTraining <?php if ( 'teacher_trainings' == get_post_type() ){ echo 'current'; } ?>"  href="/teacher_trainings/">Teacher Trainings</a>
			</div>
			<div class="navGroup">
				<a  class="nav-retreats navItem <?php if ( 'retreats' == get_post_type() ) { echo 'current'; } ?>" href="/retreats/">Retreats</a>
			</div>
			<div class="navGroup">
				<a class="nav-about navItem <?php if( is_page_template('about.php') ) { echo 'current'; } ?>" href="/about/">About</a>
				<ul class="subNavItems">
					<li><a class="nav-teachers navItem <?php if( 'teachers' == get_post_type() ) { echo 'subNavCurrent'; } ?>" href="/teachers/">Our Teachers</a></li>
				</ul>
			</div>
			<div class="navGroup">
				<a class="nav-learn navItem" href="/read-watch-listen">Read Watch Listen</a>
			</div>
			<div class="navGroup">
				<a class="nav-contact navItem <?php if( is_page_template('contact.php') ) { echo 'current'; } ?>" href="/contact">Contact</a>
			</div>
			<div class="quickContact">
				<p class="socialLinks"><a class="socialLink" href="https://www.instagram.com/thesacredfig/"><span class="icon-instagram"></span></a><a class="socialLink" href="https://www.facebook.com/TheSacredFig"><span class="icon-facebook"></span></a><a class="socialLink" href="https://plus.google.com/106417913844473796205" rel="publisher"><span class="icon-googleplus"></span></a><a class="socialLink" href="https://www.youtube.com/channel/UCv-RAQRCUE6ymk_EHnLQZIw"><span class="icon-youtube"></span></a></p>
				<p><a href="tel:+9178179263">917.817.9263</a></p>
				<a href="mailto:om@thesacredfig.com">om@thesacredfig.com</a>
			</div>
		</nav>
	</div>
	<div class="mainContent">
		<a href="#" class="navToggle"><span class="icon-nav"></span></a>
		<div class="navOpenCover" style="display:none;"></div>
		<?php do_action( 'before' ); ?>
		<header>
			<?php
				if ( is_page_template('homepage.php') ) {

					echo '<div class="homeHeader">';
						echo '<div class="mainImg animateImage">';
							echo '<div class="siteTitle">';
							echo '<h2>';
								include('txtlogo.php');
							echo '</h2>';
							echo '</div>';
						echo '</div>';
						echo '<div class="logo">';
							echo '<a href="/">';
								include('logo.php');
							echo '</a>';
						echo '</div>';
					echo '</div>';
				}  elseif ( is_page_template('about.php') ) {
					$thumbURL = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'large' );
					echo '<div class="aboutPageHeader">';
						echo '<div class="mainImg animateImage" style="background: url(' . $thumbURL[0] . ') no-repeat fixed 50% -140px; background-size: cover;-webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover; background-size: cover;  ">';
							echo '<div class="siteTitle">';
								echo '<h1>The Sacred Fig</h1>';
								echo '<h2 class="location">Ancient teachings, modern approach</h2>';
								echo '<p class="location">' . get_field('country') . '</p>';
							echo '</div>';
							echo '<div class="logo">';
								echo '<a href="/">';
									include('logo.php');
								echo '</a>';
							echo '</div>';
						echo '</div>';
					echo '</div>';
  				} elseif ( is_page_template('signup.php') ) {
					echo '<div class="homeHeader signUpHeader">';
						echo '<div class="mainImg animateImage">';
							echo '<div class="siteTitle">';
							echo '<h2>We need<br>Your Info</h2>';
							echo '</div>';
						echo '</div>';
						echo '<div class="logo">';
							echo '<a href="/">';
								include('logo.php');
							echo '</a>';
						echo '</div>';
					echo '</div>';
  				} elseif ( is_page_template('stay-posted.php') ) {
					echo '<div class="homeHeader signUpHeader">';
						echo '<div class="mainImg animateImage">';
							echo '<div class="siteTitle">';
							echo '<h2>We&#39;ll keep you<br>in the loop</h2>';
							echo '</div>';
						echo '</div>';
						echo '<div class="logo">';
							echo '<a href="/">';
								include('logo.php');
							echo '</a>';
						echo '</div>';
					echo '</div>';
  				} elseif ( is_page_template('reserve-spot.php') || is_page_template('teachertrainingreserve.php') ) {
					echo '<div class="homeHeader signUpHeader">';
						echo '<div class="mainImg animateImage">';
							echo '<div class="siteTitle">';
							echo '<h2>Reserve<br>Your<br>Spot</h2>';
							echo '</div>';
						echo '</div>';
						echo '<div class="logo">';
							echo '<a href="/">';
								include('logo.php');
							echo '</a>';
						echo '</div>';
					echo '</div>';
				} elseif ( is_page_template('contact.php') ) {
					echo '<div class="homeHeader contactHeader">';
						echo '<div class="mainImg animateImage">';
							echo '<div class="siteTitle">';
								echo '<h2>Say<br>Hello</h2>';
							echo '</div>';
						echo '</div>';
						echo '<div class="logo">';
							echo '<a href="/">';
								include('logo.php');
							echo '</a>';
						echo '</div>';
					echo '</div>';
				} elseif(is_singular( 'teachers' ) ){

					echo '<div class="singleTeacherHeader">';
					$teacherBGImage = get_field('featured_bg');
					if( !empty($teacherBGImage) ) {
						echo '<div class="mainImg animateImage" style="background: url(' . $teacherBGImage['url'] . ') no-repeat fixed 50% -140px; background-size: cover;-webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover; background-size: cover;  ">'; echo '<div class="siteTitle">';
					} else {
						echo '<div class="mainImg animateImage" style="background: url(' . get_bloginfo('template_directory') . '/img/clouds.jpg ) no-repeat fixed 50% -140px; background-size: cover;-webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover; background-size: cover;  ">'; echo '<div class="siteTitle">';
					}
							if ( has_post_thumbnail() ) {
								echo '<div class="profileImage">';
								the_post_thumbnail();
								echo '</div>';
							}
							echo '<h2>';
							the_title();
							echo '</h2>';
							if (get_field('title')){
								echo '<p class="employeeTitle">' . get_field('title') . '</p>';
							}
							echo '</div>';
						echo '</div>';
						echo '<div class="logo">';
							echo '<a href="/">';
								include('logo.php');
							echo '</a>';
						echo '</div>';
					echo '</div>';

				} elseif(is_archive() ){
					if ( 'teacher_trainings' == get_post_type() ) {
						echo '<div class="videoHeader">';
							echo '<div id="playVideoButton" class="videoContainer">';
								echo '<div class="video teacherTrainingsVideo"><iframe id="video" width="640" height="360" src="https://www.youtube.com/embed/gLp4w7A0pNs?rel=0&enablejsapi=1" frameborder="0" allowfullscreen></iframe></div>';
								echo '<div class="videoCover">';
									echo '<div class="videoHover"></div>';
									echo '<div class="videoCoverContent">';
										echo '<h2 class="title">';
											echo 'Teacher<br>Trainings';
										echo '</h2>';
										include('play-button.php');
										echo '<p>Play video</p>';
									echo '</div>';
								echo '</div>';
							echo '</div>';
						echo '</div>';
					} elseif ( 'retreats' == get_post_type() ) {
						echo '<div class="homeHeader retreatsHeader">';
							echo '<div class="mainImg">';
								echo '<div class="siteTitle">';
									echo '<h2>';
										echo 'Retreats';
									echo '</h2>';
								echo '</div>';
							echo '</div>';
							echo '<div class="logo">';
								echo '<a href="/">';
										include('logo.php');
								echo '</a>';
							echo '</div>';
						echo '</div>';
					} elseif (in_category( 'listen' )) {
						echo '<div class="homeHeader blogIndexHeader listenHeader">';
							echo '<div class="mainImg animateImage">';
								echo '<div class="siteTitle">';
								echo '<h2>Listen</h2>';
								echo '</div>';
							echo '</div>';
							echo '<div class="logo">';
								echo '<a href="/">';
									include('logo.php');
								echo '</a>';
							echo '</div>';
						echo '</div>';
					} elseif (in_category( 'read' )) {
						echo '<div class="homeHeader blogIndexHeader readHeader readOnly">';
							echo '<div class="mainImg animateImage">';
								echo '<div class="siteTitle">';
								echo '<h2>Read</h2>';
								echo '</div>';
							echo '</div>';
							echo '<div class="logo">';
								echo '<a href="/">';
									include('logo.php');
								echo '</a>';
							echo '</div>';
						echo '</div>';
					} elseif (in_category( 'watch' )) {
						echo '<div class="homeHeader blogIndexHeader watchHeader watchOnly">';
							echo '<div class="mainImg animateImage">';
								echo '<div class="siteTitle">';
								echo '<h2>Watch</h2>';
								echo '</div>';
							echo '</div>';
							echo '<div class="logo">';
								echo '<a href="/">';
									include('logo.php');
								echo '</a>';
							echo '</div>';
						echo '</div>';
					}

					 else { echo '<div class="standardHeader">';
						echo '<div class="logo">';
							echo '<a href="/">';
									include('logo.php');
							echo '</a>';
						echo '</div>';
					echo '</div>';
				}
				} elseif ( 'teacher_trainings' == get_post_type() ) {

					$thumbURL = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'large' );

					echo '<div class="teacherTrainingHeader">';
						echo '<div class="mainImg animateImage" style="background: url(' . $thumbURL[0] . ') no-repeat fixed 50% -140px; background-size: cover;-webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover; background-size: cover;  ">';
							echo '<div class="siteTitle">';
								echo '<div class="logo">';
									echo '<a href="/">';
										include('logo.php');
									echo '</a>';
								echo '</div>';
								echo '<h1>Yoga Teacher Training</h1>';
								echo '<h2 class="location">';
								the_title();
								echo '</h2>';
								if(get_field('date')) {
									echo '<p class="location">' . get_field('date') . '</p>';
								} else {
									echo '<p class="location">Dates not yet announced</p>';
								}
							echo '</div>';
						echo '</div>';
					echo '</div>';

				} elseif ( 'retreats' == get_post_type() ) {

					$thumbURL = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'large' );

					echo '<div class="teacherTrainingHeader">';
						echo '<div class="mainImg animateImage" style="background: url(' . $thumbURL[0] . ') no-repeat fixed 50% -140px; background-size: cover;-webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover; background-size: cover;  ">';
							echo '<div class="siteTitle">';
								echo '<div class="logo">';
									echo '<a href="/">';
										include('logo.php');
									echo '</a>';
								echo '</div>';
								echo '<h1>Yoga &amp; Wellness Retreat</h1>';
								echo '<h2 class="location">';
								the_title();
								echo '</h2>';
								if(get_field('date')) {
									echo '<p class="location">' . get_field('date') . '</p>';
								} else {
									echo '<p class="location">Dates not yet announced</p>';
								}
							echo '</div>';
						echo '</div>';
					echo '</div>';
				} elseif ( is_home() ) {
					echo '<div class="homeHeader blogIndexHeader">';
						echo '<div class="mainImg animateImage">';
							echo '<div class="siteTitle">';
							echo '<h2><a href="/category/blog/read/">Read</a><br><a href="/category/blog/watch">Watch</a><br><a href="/category/blog/listen">Listen</a></h2>';
							echo '</div>';
						echo '</div>';
						echo '<div class="logo">';
							echo '<a href="/">';
								include('logo.php');
							echo '</a>';
						echo '</div>';
					echo '</div>';


				} elseif ( is_single() ){

					$thumbURL = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'large' );

					echo '<div class="singleBlogPost">';
						if ( has_post_thumbnail() ) {
							echo '<div class="mainImg animateImage" style="background: url(' . $thumbURL[0] . ') no-repeat fixed 50% -140px; background-size: cover;-webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover; background-size: cover;  ">';
						} else {
							echo '<div class="mainImg animateImage">';
						}
							echo '<div class="siteTitle">';
								echo '<h2 class="location">';
								the_title();
								echo '</h2>';
								the_date('d-m-Y', '<p class="date">', '</p>');
								echo '<p class="location">' . get_field('date') . '</p>';
							echo '</div>';
							echo '<div class="logo">';
								echo '<a href="/">';
									include('logo.php');
								echo '</a>';
							echo '</div>';
						echo '</div>';
					echo '</div>';

				} else {

					echo '<div class="standardHeader">';
						echo '<div class="logo">';
							echo '<a href="/">';
									include('logo.php');
								echo '</a>';
						echo '</div>';



					echo '</div>';
				}
			?>

		</header>
