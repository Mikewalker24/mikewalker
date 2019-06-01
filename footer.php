<footer id="contact">
 	<div class="container">
	    <h3>get in touch</h3>
		  <?php wp_nav_menu( array(
		    'container' => false,
		    'theme_location' => 'social'
		  )); ?> 
	</div>

	<a href="#top" class="top"><img src="http://mikewalker.co/wp-content/uploads/2017/08/white-small.png"></a>

    <div class="copyright">
  		<div class="container clearfix">
  			<div class="copyright-left">
 	 			<p>&copy; Michael Walker <?php echo date('Y'); ?> | </p>
 	 			<a href="mailto:hello@mikewalker.co" id="email"> hello@mikewalker.co</a>		
  			</div>
  			<div class="copyright-right">
  				<p>Developed by Mike Walker | Designed by<a href="http://kindredstudio.ca" target="_blank" id="studio">Kindred Studio</a></p>
  			</div>	
  		</div>
    </div>
</footer>

<script>
// scripts.js, plugins.js and jquery are enqueued in functions.php
/* Google Analytics! */
 var _gaq=[["_setAccount","UA-XXXXX-X"],["_trackPageview"]]; // Change UA-XXXXX-X to be your site's ID
 (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];g.async=1;
 g.src=("https:"==location.protocol?"//ssl":"//www")+".google-analytics.com/ga.js";
 s.parentNode.insertBefore(g,s)}(document,"script"));
</script>

<?php wp_footer(); ?>
</body>
</html>