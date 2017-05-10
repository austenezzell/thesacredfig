<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package ae_boilerplate
 */
?>

	</div> <!-- MAIN CONTENT CONTAINER -->
	<footer>
		<p class="footer">made with <span class="love"><?php include('heart.php'); ?></span> &amp; light in NYC</p>
	</footer>
<?php wp_footer(); ?>

<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/plugins.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/main.js"></script>
 
  <!-- GA -->
  <script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-49016719-1', 'thesacredfig.com');
    ga('send', 'pageview');

  </script>

</body>
</html>