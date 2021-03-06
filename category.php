<?php 
	/* 
		Header Include include.

		$title -> The page title of serving webpage, if not set Default value will be printed.
		$template -> Used to load Custome CSS/JS or any additional files. If not set Default styles will only be loaded.
	*/
	$template=0;
	$current_cat_id = category_id_from_url($url);
	$category_data = category_data($current_cat_id);

	$post_per_page = $category_data->cat_list_size;
	$list_template = $category_data->cat_list_template;

	if (empty($_GET["page"])== true && isset($_GET["page"]) == false ) {
		$page=0;
		$start = 0;
		$title = $category_data->cat_name;
		$description = $category_data->cat_desc;

	}else{
		$page=$_GET["page"];
		$start =  $page * $post_per_page;	//Sets the starting post from the page number

		if($page < 2){
			$page = 0;
			$start = 0;
		}	
		$title = $category_data->cat_name." : - Page -".$page;
		$description = $category_data->cat_desc." - Page -".$page;

	}
	$keywords = $category_data->cat_keywords;
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
										<p><?php $category_data->category_description(); ?></p>
									</div>
									<div class="column-small-4">
										<?php ad_box() ?>										
									</div>
								</div>
							</div>
						</div>
					</div>					
				</header><!-- end of class = "content-header" -->
				<?php main_search_box(); ?>
				<div class="inner-container">
					<div class="row">
						<div class="column-small-11 center">
						    <div class="add-on row">
							    <div class="column-small-8 padd0 add-on-main">
							    	<div class="row">
							    		 <div class="column-small-12 padd0">
							    		 	<ul 
							    		 		<?php 
							    		 			if($list_template == 1)
							    		 				echo 'class="bit bit-list"';
							    		 			else
							    		 				echo 'class="post-list"';
							    		 		?>
							    		 	>
							    		 		<?php
												if(article_exist()): 
													if($category_data->cat_url == "all-articles")
														$article_list = article_published($post_per_page, $start, False, 'Bits');
													else
														$article_list = article_published($post_per_page, $start, True, $category_data->cat_name);

													while($article_id = mysql_fetch_array($article_list, MYSQL_ASSOC )){
												 		echo '<li>';
														if($list_template == 1 )
															bits_list($article_id['SL_NO']);
														else
							        						post_list($article_id['SL_NO']);

								        				echo '</li>';
													}// end of while loop
												else:
													echo '<li>';
													if($list_template == 1 )
														bits_list();
													else
						        						post_list();

						     						echo '</li>';
												endif;
												?>
						        			</ul>
							    		 	<?php
											if(article_exist()): 
												if($category_data->cat_url == "all-articles")
													pagination($post_per_page, $start, $category_data->cat_url, False, 'Bits');
												else
													pagination($post_per_page, $start, $category_data->cat_url, True, $category_data->cat_name);
											endif;
											?>			        			
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