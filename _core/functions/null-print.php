<?php 
/*
* Contains the functions printing HTML without any manipulation
*/

function main_search_box() {

/**
*  Main search
*
* Prints the FUll width search box
*
**/
?>
<div id="search-container">
	<div class="inner-container">
		<div class="row">
			<div class="column-small-11 center">
				<div class="top-search">
					<form action="">
						<input type="search" class="search-box" placeholder="Search for" >
						<input type="submit" value="search" class="search-button">
					</form>
				</div>
			</div>
		</div>
	</div>
</div><!-- end of id="search-container" -->
<?php 
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

			<div class="bsap_1293798 bsap ad ad-h" id="bsap_1293798">
			<small class="advert">Advertisement </small>

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
<?php 
		$GLOBALS['ad']  = true;
	endif;
}
?>
