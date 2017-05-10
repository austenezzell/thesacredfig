<?php
/**
 * Template name: about
 *
 *
 * @package ae_boilerplate
 */

get_header(); ?>
<div class="intro">
	<p>As the story goes…<br>a young prince seeking shelter, seeking truth Found both under the shade of the Sacred Fig Tree.</p>
	<div class="downArrow">
		<p><span class="icon-down lightToGrey"></span></p>
	</div>
</div>
<div class="wrapper about">
	<div class="module mainAbout">
			<h2>About The Sacred Fig</h2>
			<p>The Sacred Fig Tree is known by many names &amp; revered across many cultures. In Buddhist teachings, it’s a symbol of consciousness.  After seeking enlightenment through extreme practices, a Brahmin prince by the name of Siddhartha eventually sat beneath the Sacred Fig Tree in silence, where he discovered his Buddha nature.  After his transformation, followers called it The Bodhi Tree, or the tree of enlightenment.</p>
			<p>Hindus similarly revere The Sacred Fig.  In Hindi, it’s known as The Peepal Tree, and Indians believe that the wood from this tree was used to light the original sacred fire, with which the gods granted knowledge to humanity.  In the west, we inherently understand the potent metaphor as a connection with all living things.</p>
			<p>The Sacred Fig is a metaphor for our great potential.  It reminds us of those before us, who found freedom and clarity under it’s broad canopy.</p>
	</div>
	<div class="beliefs">
		<div class="grid">
			<div class="grid__item one-third">
				<div class="belief beliefOne">
					<h4>Ancient teachings,<br>modern approach</h4>
					<p>We integrate the wisdom of ancient teachings, with the most current psychology, science &amp; technology. If the Bhagavad Gita &amp; quantum physics had a lovechild, it would probably look &amp; talk a whole like we do. </p>
				</div>
			</div>
			<div class="grid__item one-third">
				<div class="belief beliefTwo">
					<h4>Be More</h4>
					<p>Everytime we walk down the street, or open a magazine, everything around us tells to have more.  We radically (and methodically) challenge that current value system:  Be More. Whether you’re on board with us to be a yoga teacher or not, we’ll guide you to be more confident, joyful, focused, and connected.</p>
				</div>	
			</div>
			<div class="grid__item one-third">
				<div class="belief beliefThree">
					<h4>Bye bye bad habits</h4>
					<p>We all know those people who seem to navigate life with a sense of ease.  It all starts with breaking the cycle of recurring negative thought patterns, and creating new neurological pathways.  It might sound complicated, it’s not.  We’ll guide you.</p>
				</div>
			</div>				
		</div>
	</div>
	<div class="bottomSection">
		<div class="founder twoCol founderBG">
			<div class="grid">
				<div class="grid__item one-half aboutAnton">
					<div class="module">
						<h2>Anton Brandt</h2>
						<h4>Founder &amp; Facilitator</h4>
						<?php
							if(get_field('about_anton')){
								echo '<p>' . the_field('about_anton') . '</p>';
							}
						?>
						<a href="/teachers/anton-brandt">More about Anton</a>
					</div>
				</div>
				<div class="grid__item one-half antonPhoto">
					<!-- <img class="" src="<?php bloginfo(template_directory);?>/img/anton_founder.jpg" alt=""> -->
				</div>
			</div>
		</div>
		<div class="aboutPageTeachers twoCol teachersBG">
			<div class="grid">
				<div class="grid__item one-half teachersPhoto">
					
				</div>
				<div class="grid__item one-half aboutTeachers">
					<div class="module">
						<h2>Our Teachers</h2>
						<h4>A community of world-class yoga educators</h4>
						<?php
							if(get_field('about_our_teachers')){
								echo '<p>' . the_field('about_our_teachers') . '</p>';
							}
						?>
						<a href="/teachers/">See our teachers</a>
					</div>
				</div>			
			</div>
		</div>
	</div>

</div>


	
<?php get_footer(); ?>