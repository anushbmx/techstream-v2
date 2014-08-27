<?php 
/*
* Contains the functions printing HTML without any manipulation
*/

function side_search_box($q = false){

/**
*  Main search
*
* Prints the FUll width search box
*
**/
	if($GLOBALS['search'] == false):
?>
	<div class="search">
		<h4 class="section-heading" ><i class="fa fa-search"></i> Search</h4>
		<form class="searchbar" action="<?php echo static_url('main')."/search.php" ?>" method="get" class="search">
		<div class="row">
	        <div class="column-xsmall-8  padd0"><input type="search" name="q" required="" placeholder="<?php if($q != false) echo $q; else echo "Type to seach"; ?>" ></div>
	        <div class="column-xsmall-2 padd0-xsmall"><input type="submit" class="submit" value="search" class="search-button" ></div>
	    </div>
	        <p class="powered_by">Powered by <a href="http://www.google.com/cse/">Google Custom Search</a></p>
	    </form>
	</div>
<?php
		$GLOBALS['search']  = true;
	endif;
}

function comment_box(){

/**
*  Comment box
*
* Prints the JS for comments from Disquss
*
**/
?>
	<div id="comments">
		<h4 class="section-heading"><i class="fa fa-comment"></i> Comments</h4>
	</div><!-- end of id="comments" -->
<?php
}

function main_search_box($q) {

/**
*  Main search
*
* Prints the FUll width search box
*
**/
	if($GLOBALS['search'] == false):
?>
		<div id="search-container">
			<div class="inner-container">
				<div class="row">
					<div class="column-small-11 center">
						<div class="top-search">
							<form action="<?php echo static_url('main')."/search.php" ?>" class="search">
							<div class="row">
								<div class="column-xsmall-10 padd0"><input type="search" class="search-box" name="q" placeholder="<?php if($q != false) echo $q; else echo "Type to seach"; ?>" ></div>
								<div class="column-xsmall-2 padd0-xsmall"><input type="submit" value="search" class="search-button"></div>
							</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div><!-- end of id="search-container" -->
<?php 
	$GLOBALS['search']  = true;
	endif;
}

function ad_box() {

/**
*  Ad BOX
*
* Prints Ad from BSA
*
**/
	if($GLOBALS['ad'] == false):
?>
	<script type="text/javascript" src="http://cdn.adpacks.com/adpacks.js?legacyid=1293798&zoneid=1386&key=9db79f8dbe2e599ab3e31808ec3b6880&serve=C6SI42Y&placement=techstreamorg&circle=dev" id="_adpacks_js"></script>
<?php 
		$GLOBALS['ad']  = true;
	endif;
}


function newsletter_box(){

/**
*  News letter BOX
*
* Prints News letter signup box
*
**/
?>

<div class="newsletter">
	<h4 class="section-heading"><i class="fa fa-envelope"></i> News letter</h4>
	<p>Subscribe to our email newsletter for useful tips and valuable resources, sent out every new article release.</p>
	<form class="newsletter" action="http://feedburner.google.com/fb/a/mailverify" method="post" target="popupwindow" onsubmit="window.open('http://feedburner.google.com/fb/a/mailverify?uri=techstream/feeds', 'popupwindow', 'scrollbars=yes,width=550,height=520');return true">
		<div class="row">
	    	<div class="column-xsmall-8 padd0">
	    		<input placeholder="Your e-mail address" name="email" type="text">
			</div>
			<div class="column-xsmall-4 padd0-xsmall">
				<input class="submit" value="Subscribe" type="submit">
			</div>
	    </div>
	    <input value="techstream/feeds" name="uri" type="hidden">
		        <input name="loc" value="en_US" type="hidden">
		
		<p class="powered_by">Powered by <a href="http://feedburner.google.com/" target="_blank">FeedBurner</a></p>
	</form> 
</div>
<!-- End of News Letter -->

<?php
}
function feeds_box(){

/**
*  Social BOX
*
* Prints RSS and Twitter Link
*
**/
?>


<h4 class="section-heading"><i class="fa fa-share-alt fa-2"></i> Feeds</h4>
<ul class="feed-header">
	<li><a href="http://techstream.org/sitemap" class="tw-rss"><i class="fa fa-rss"></i><span class="hover-eff">RSS</span></a></li>
	<li><a href="http://techstream.org/sitemap" class="tw-twitter"><i class="fa fa-twitter"></i></a></li>
</ul>

<?php
}
?>