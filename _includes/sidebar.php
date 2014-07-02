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
*/

/*
  #####  Ad BOX ###
*/
	ad_box();
	if($GLOBALS['search'] == false):
?>
<?php
		$GLOBALS['search']  = true;
	endif;
?>
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