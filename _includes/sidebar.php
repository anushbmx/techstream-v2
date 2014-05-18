<?php
/*
	========================================================
	******************* Sidebar File ************************
	========================================================

	Sidebar file for all pages requests to the system. 

	NB : init.php & the required variables are to be defiled before loading sidebar.php

	Variables used in Sidebar
		$sidebar_template -> Used to load Custome modules. If not set Default styles will only be loaded.
			
			|Template Value | Description
			-----------------------------------------------------
			| 	  0/Null	| Template without ads				|
			| 		1 		| Template with ads					|
			|		2 		| Template with ads 				|
			-----------------------------------------------------
		$code
*/

?>
	<h4 class="section-heading hide-large view-small" ><i class="fa fa-level-down"></i> Sideabar</h4>
	<?php 
		if(isset($sidebar_template)): 
			if ($sidebar_template == 1): 
	?>	
	<div class="ad ad-hor">
		<h4 class="section-heading" ><i class="fa fa-eye-slash"></i> Advertisement</h4>						    
		<div class="bsap_1293798 bsap" id="bsap_1293798">
			<div class="bsa_it one">
				<div class="ad1 odd" id="bsa_4751333">
	        		<a target="_blank">
		        		<span class="bsa_it_i">
		        		<img src="images/sample.jpg" alt="Webydo" height="100" width="130"></span>
	        		</a>

	        		<a target="_blank" class="text">
	        			<span class="bsa_it_t">Webydo</span>
	        			<span class="bsa_it_d">40K Professionals are Disrupting the Web Design Industry. Create Your FREE Site.</span>
	        		</a>
	        		<div style="clear:both"></div>
	    		</div>
	    		<span class="bsa_it_p">
	    			<a target="_blank">ads by BSA</a>
	    		</span>
			</div>
		</div>
		<p class="powered_by">Powered by <a href="http://www.adpacks.com">Ad Packs</a></p>
	</div>
	<?php
			endif;
		endif;
	?>
	<div class="search">
		<h4 class="section-heading" ><i class="fa fa-search"></i> Search</h4>
		<form class="searchbar" action="http://techstream.org/search.php" method="get">
	        <input name="q" required="" placeholder="Search" type="text">
	        <input class="submit" value="search" type="submit">
	        <p class="powered_by">Powered by <a href="http://www.google.com/cse/">Google Custom Search</a></p>
	    </form>
	</div>
	<!-- End of Google Custom Search -->

	<div class="newsletter">
		<h4 class="section-heading"><i class="fa fa-envelope"></i> News letter</h4>
		<p>Subscribe to our email newsletter for useful tips and valuable resources, sent out every new article release.</p>
	    <form class="newsletter" action="http://feedburner.google.com/fb/a/mailverify" method="post" target="popupwindow" onsubmit="window.open('http://feedburner.google.com/fb/a/mailverify?uri=techstream/feeds', 'popupwindow', 'scrollbars=yes,width=550,height=520');return true">
	        <input placeholder="Your e-mail address" name="email" type="text">
	        <input value="techstream/feeds" name="uri" type="hidden">
	        <input name="loc" value="en_US" type="hidden">
	        <input class="submit" value="Subscribe" type="submit">
	        <p class="powered_by">Powered by <a href="http://feedburner.google.com/" target="_blank">FeedBurner</a></p>
	    </form> 
	</div>
	<!-- End of News Letter -->