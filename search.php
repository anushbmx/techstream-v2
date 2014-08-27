<?php 
	/* 
		Header Include include.

		$title -> The page title of serving webpage, if not set Default value will be printed.
		$template -> Used to load Custome CSS/JS or any additional files. If not set Default styles will only be loaded.
	*/
	include('_core/init.php');
	$template=0;

	if (empty($_GET["q"])== true && isset($_GET["q"]) == false ) {
		$title = " Search On Tech Stream" ;
		$description = "Search for contents on Tech Stream";
		$q = false;

	}else{
		$q=$_GET["q"];
		$title = "Search Results for : ".$q;
		$description = "Search Results for : ".$q;
	}

	include('_includes/header.php');
?>
		<div class="content">
			<div class="content-inner">
				<header id="content-header">
					<div class="inner-container">
						<div class="row">
							<div class="column-small-11 center">
								<div class="row">
									<div class="column-small-8 cat-desc">
										<div class="row padd0">
											<?php 
												categories_list($category_data->cat_name);
											?>
										</div>
										<h1 class="article-heading"><?php echo $title; ?></h1>
										<p><?php echo $description; ?></p>
									</div>
									<div class="column-small-4">
										<?php ad_box() ?>										
									</div>
								</div>
							</div>
						</div>
					</div>		
				</header><!-- end of class = "content-header" -->
				<?php main_search_box($q); ?>
				<div class="inner-container">
					<div class="row">
						<div class="column-small-11 center">
						    <div class="add-on row">
							    <div class="column-small-8 padd0 add-on-main">
							    	<div class="row">
							    		 <div class="column-small-12 padd0">
							    		 	 	   	   <!-- Put the following javascript before the closing </head> tag. -->
<script>
  (function() {
    var cx = '012797198311953584218:WMX-1667769647';
    var gcse = document.createElement('script'); gcse.type = 'text/javascript'; gcse.async = true;
    gcse.src = (document.location.protocol == 'https:' ? 'https:' : 'http:') +
        '//www.google.com/cse/cse.js?cx=' + cx;
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(gcse, s);
  })();
</script>

<!-- Place this tag where you want the search results to render -->
<gcse:searchresults-only></gcse:searchresults-only> 		
							    		 </div>
							    	</div>
							    </div>
							    <div class="column-small-4 sidebar">
							    	<?php 
							    		/* 
							    			Side Bar include.

							    			$sidebar_template -> Define a Sidebar template


							    		*/
							    		$sidebar_template=1;
							    		include('_includes/sidebar.php');
							    	?>
							    </div>
							</div>
						</div>
					</div>

				</div><!-- end of class="article-container" -->
			</div><!-- end of class="content-inner" -->		
		</div> <!-- end of class="content" -->
<?php 
	/* 
		Footer include.
		$footer_template -> Define a Footer template
	*/
	include('_includes/footer.php');
?>	