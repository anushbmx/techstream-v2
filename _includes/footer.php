<?php
/*
	========================================================
	******************* Footer File ************************
	========================================================

	Footer file for all pages requests to the system. 

	NB : init.php & the required variables are to be defiled before loading footer.php

	Variables used in Footer
		$template -> Used to load Custome modules. If not set Default styles will only be loaded.
			
			|Template Value | Description
			-----------------------------------------------------
			| 		1 		| Code to include js for code		|
			|		2 		| without js for codehighlite		|
			-----------------------------------------------------
		$code
*/

?>
		<footer id="footer">
			<div class="inner-inner">
				<div class="inner-container">
					<div class="row">
						<div class="column-small-11 center">
							<div class="row footer-top">
							    <div class="column-small-7">
									<ul class="footer-links">
										<li><a href="http://techstream.org/About_us">About</a></li>
										<li><a href="http://techstream.org/all-articles">All Articles</a></li>
										<li><a href="http://techstream.org/licensing">News Letter</a></li>
									</ul>
								</div>
							    <div class="column-small-5">
									<ul class="footer-links footer-right footer-social">
										<li>Follow us :</li>
										<li><a href="http://techstream.org/sitemap">Facebook</a></li>
										<li><a href="http://techstream.org/sitemap">Twitter</a></li>
										<li><a href="http://techstream.org/sitemap" class="last-link">Google+</a></li>
									</ul>
								</div>
							</div>
							<div class="row footer-bottom">
								<div class="row ">
									<div class="column-small-12">
										<ul class="footer-links friends-links">
											<li class="link-title">Friends : </li>
											<li><a href="http://techstream.org/Licence">Licence</a></li>
											<li><a href="http://techstream.org/Credits">Credits</a></li>
											<li><a href="http://techstream.org/sitemap">Site Map </a></a></li>
										</ul>
									</div>
								</div>
								<div class="row">
								    <div class="column-small-7">
								    	<ul class="footer-links">
											<li><a href="http://techstream.org/Privacy">Privacy</a></li>
											<li><a href="http://techstream.org/Licence">Licence</a></li>
											<li><a href="http://techstream.org/Credits">Credits</a></li>
											<li><a href="http://techstream.org/sitemap"><i class="fa fa-sitemap"></i> Site Map </a></a></li>
										</ul>
								    </div>
								    <div class="column-small-5">
										<ul class="footer-links footer-right">
											<li>&copy; <?php echo date('Y',time()); ?> Tech Stream. All code <a href="http://opensource.org/licenses/MIT">MIT license</a></li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>	

				<div class="row">
					<div class="column-small-10 center">
					</div>
				</div><!-- End of Row -->
			</div><!-- end of class="content-inner" -->
		</footer>
	</div> <!-- end of class="main-container" -->
	<script type="text/javascript">
		/* * * CONFIGURATION VARIABLES: EDIT BEFORE PASTING INTO YOUR WEBPAGE * * */
		var disqus_shortname = 'techstream'; // required: replace example with your forum shortname

		/* * * DON'T EDIT BELOW THIS LINE * * */
		(function () {
		var s = document.createElement('script'); s.async = true;
		s.type = 'text/javascript';
		s.src = 'http://' + disqus_shortname + '.disqus.com/count.js';
		(document.getElementsByTagName('HEAD')[0] || document.getElementsByTagName('BODY')[0]).appendChild(s);
		}());
	</script> 
	<?php 
		if(isset($template)):
			if ($template == 1):
	?>	
		<script src="js/highlight.pack.js"></script>
		<script>hljs.initHighlightingOnLoad();</script>
	<?php
		endif;
	endif;
	require('../_core/db_close.php')
	?>
</body>
</html>