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
		<form class="searchbar" action="<?php echo static_url('main')."/search.php" ?>" method="get">
	        <input type="search" name="q" required="" placeholder="<?php if($q != false) echo $q; else echo "Type to seach"; ?>" >
	        <input type="submit" class="submit" value="search" >
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
							<form action="<?php echo static_url('main')."/search.php" ?>">
								<input type="search" class="search-box" name="q" placeholder="<?php if($q != false) echo $q; else echo "Type to seach"; ?>" >
								<input type="submit" value="search" class="search-button">
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
	<!-- <script type="text/javascript" src="http://cdn.adpacks.com/adpacks.js?legacyid=1293798&zoneid=1386&key=9db79f8dbe2e599ab3e31808ec3b6880&serve=C6SI42Y&placement=techstreamorg&circle=dev" id="_adpacks_js"></script> -->
<?php 
		$GLOBALS['ad']  = true;
	endif;
}
?>
