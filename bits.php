<?php 
	/* 
		Header Include include.

		$title -> The page title of serving webpage, if not set Default value will be printed.
		$template -> Used to load Custome CSS/JS or any additional files. If not set Default styles will only be loaded.
	*/
	include('_core/init.php');
	$template=0;
	$post_per_page = 10;

	if (empty($_GET["page"])== true && isset($_GET["page"]) == false ) {
		$page=0;
		$start = 0;
	}else{
		$page=$_GET["page"];
		$start =  $page * $post_per_page;	//Sets the starting post from the page number
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
									<div class="column-small-2">
										<ul class="cat-list">
											<li><a href="#" class="current">Bits</a></li>									
										</ul>
									</div>
									<div class="column-small-10">
										<ul class="cat-list">
											<li> <a href="#">All</a></li>	
											<li> <a href="#">Web Design</a></li>
											<li> <a href="#">Web Dev</a></li>
											<li> <a href="#" class="active">Bits</a></li>									
										</ul>
									</div>
								</div>
								<div class="row">
									<div class="column-small-2">
										
									</div>
									<div class="column-small-10 cat-desc">
										<h1>Bits</h1>
										<p>Bits are short pices of codes that may or may not bring much large influence on the system. To know more on what is a bit.</p>
									</div>
								</div>
							</div>
						</div>
					</div>					
				</header><!-- end of class = "content-header" -->
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
				<div class="inner-container">
					<div class="row">
						<div class="column-small-11 center">
						    <div class="add-on row">
							    <div class="column-small-8 padd0 add-on-main">
							    	<div class="row">
							    		 <div class="column-small-12 padd0">
							    		 	<ul class="bit bit-list">
							    		 		<?php
												if(article_exist()): 
													$article_list = article_published($post_per_page, $start, True, 'Bits');
													while($article_id = mysql_fetch_array($article_list, MYSQL_ASSOC )){
														$data = article_data($article_id['SL_NO'])
												?>
													<li>
							        					<a href="<?php static_url('main'); $data->article_url();?>">
							        						<h3 class="bit-title"><?php $data->article_title();?></h3>
							        						<span class="section-link"><?php $data->article_sub_section(); ?> </span>
							        					</a>
						        					</li>
												<?php
														}// end of while loop
													else:
												?>
													<li>
							        					<a href="#">
							        						<h3 class="bit-title">No Data Found</h3>
							        						<span class="section-link">No data Found</span>
							        					</a>
						        					</li>
												<?php
													endif;
												?>
						        			</ul>
							    		 	<?php
											if(article_exist()): 
												pagination($post_per_page, $start, True, 'Bits');
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