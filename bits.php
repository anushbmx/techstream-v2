<?php 
	/* 
		Header Include include.

		$title -> The page title of serving webpage, if not set Default value will be printed.
		$template -> Used to load Custome CSS/JS or any additional files. If not set Default styles will only be loaded.
	*/
	include('_core/init.php');
	$template=0;

	$category_url = "Bits";
	$current_cat_id = category_id_from_url($category_url);
	$category_data = category_data($current_cat_id);

	$post_per_page = $category_data->cat_list_size;
	$list_template = $category_data->cat_list_template;

	if (empty($_GET["page"])== true && isset($_GET["page"]) == false ) {
		$page=0;
		$start = 0;

	}else{
		$page=$_GET["page"];
		$start =  ($page-1) * $post_per_page;	//Sets the starting post from the page number

		if($page < 2){
			$page = 0;
			$start = 0;
		}		
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
									<?php 
										categories_list($category_data->cat_name);
									?>
								</div>
								<div class="row">
									<div class="column-small-10 cat-desc">
										<h1><?php $category_data->category_name(); ?></h1>
										<p><?php $category_data->category_description(); ?></p>
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
													$article_list = article_published($post_per_page, $start, True, $category_data->cat_name);
													while($article_id = mysql_fetch_array($article_list, MYSQL_ASSOC )){
														$data = article_data($article_id['SL_NO'])
												?>
													<li>
												<?php if($list_template == 1 ):?>
							        					<a href="<?php static_url('main'); $data->article_url();?>">
							        						<h3 class="bit-title"><?php $data->article_title();?></h3>
							        						<span class="section-link"><?php $data->article_sub_section(); ?> </span>
							        					</a>
						        				<?php else: ?>
						        						<div class="row">
															<div class="column-xsmall-3 padd0 post-image-small"> <img src="<?php static_url('img'); $data->article_image_small();?>"></div>
															<div class="column-xsmall-9">
																<h3 class="post-list-title"><a href="<?php static_url('main'); $data->article_url();?>" class="post-title-a"><?php $data->article_title();?></a></h3>
																<p><?php echo elliStr($data->ar_description,200); ?> .. <a href="">Read More</a></p>
																<div class="article-add-info">posted in <a href="#"><?php $data->article_section();?></a>  <i class="fa fa-calendar"></i> <?php $data->article_published_data();?></div>
															</div>
														</div>
						        				<?php endif; ?>
													</li>
												<?php
														}// end of while loop
													else:
												?>
													<li>
												<?php if($list_template == 1 ):?>
							        					<a href="#">
							        						<h3 class="bit-title">No Data Found</h3>
							        						<span class="section-link">No data Found</span>
							        					</a>
							        			<?php else: ?>
							        					<div class="row">
															<div class="column-xsmall-3 padd0 post-image-small"> <img src="images/5-Elements-of-Websites-that-Convert-110.jpg"></div>
															<div class="column-xsmall-9">
																<h3 class="post-list-title"><a href="#" class="post-title-a">No Posts Found</a></h3>
																<p>No posts Found</p>
																<div class="article-add-info">posted in <a href="#">NONE</a>  <i class="fa fa-calendar"></i> 4/2/2014</div>
															</div>
														</div>
						        					</li>

												<?php
														endif;
													endif;
												?>
						        			</ul>
							    		 	<?php
											if(article_exist()): 
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