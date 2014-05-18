<?php
/*
	========================================================
	******************* Footer File ************************
	========================================================

	Footer file for all pages requests to the system. 

	NB : init.php & the required variables are to be defiled before loading footer.php

	Variables used in Footer
		$footer_template -> Used to load Custome modules. If not set Default styles will only be loaded.
			
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
							<div class="row">
							    <div class="column-small-7">
									<ul class="footer-links">
										<li><a href="http://techstream.org/About_us">About</a></li>
										<li><a href="http://techstream.org/all-articles">All Articles</a></li>
										<li><a href="http://techstream.org/Contact">Contact Us</a></li>
										<li><a href="http://techstream.org/licensing">News Letter</a></li>
										<li><a href="http://techstream.org/sitemap">Site map</a></li>
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
							    <div class="column-small-7">
							    	<ul class="footer-links">
										<li><a href="http://techstream.org/Privacy">Privacy</a></li>
										<li><a href="http://techstream.org/Licence">Licence</a></li>
										<li><a href="http://techstream.org/Credits">Credits</a></li>
										<li><a href="http://techstream.org/sitemap">Site Map <i class="fa fa-sitemap"></i></a></a></li>
									</ul>
							    </div>
							    <div class="column-small-5">
									<ul class="footer-links footer-right">
										<li>&copy; {{Year}} Tech Stream</li>
									</ul>
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
	<script src="js/highlight.pack.js"></script>
	<script>hljs.initHighlightingOnLoad();</script>
</body>
</html>