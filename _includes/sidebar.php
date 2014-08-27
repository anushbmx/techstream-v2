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
?>
<h4 class="section-heading hide-large view-small"><i class="fa fa-envelope"></i> Sidebar</h4>
<?php
/*
  #####  Ad BOX ###
*/
	side_search_box();
	newsletter_box();
	ad_box();
	feeds_box();
?>
	
	
	