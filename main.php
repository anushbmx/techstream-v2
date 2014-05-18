<?php 
	/* 
		Header Include include.

		$title -> The page title of serving webpage, if not set Default value will be printed.
		$template -> Used to load Custome CSS/JS or any additional files. If not set Default styles will only be loaded.
	*/
	$template=1;
	include('_includes/header.php');
?>
		<div class="content">
			<div class="content-inner">
				<header id="content-header">
					<div class="inner-container">
						<div class="row">
							<div class="column-small-11 center">
								<div class="row">
									<div class="column-small-6 padd0">
							            <div class="article-image center-small">
							            	<img src="images/Hello-World.jpg"/>
							            	<div class="overlay-box">
							            		<h1 class="overlay-heading">This is the big title</h1>
							            	</div><!-- end of class ="overlay-box" -->
							            </div><!-- end of class="atticle-image" -->
							        </div> <!-- end of column -1 -->
							        <div class="column-small-4 padd0-small">
							        	<div class="bits-container center-small">
							        		<h2 class="section-heading"><i class="fa fa-clipboard fa-2"></i>  Bits</h2>
							        		<div class="bits">
							        			<ul class="bit">
							        				<li>
							        					<a href="#">
							        						<h3 class="bit-title">Fix HTML HEIGHT</h3>
							        						<span class="section-link">in Javascript</span>
							        					</a>
							        				</li>
							        				<li>
							        					<a href="#">
							        						<h3 class="bit-title">Max height in CSS</h3>
							        						<span class="section-link">in CSS</span>
							        					</a>
							        				</li>
							        				<li>
							        					<a href="#">
							        						<h3 class="bit-title">Date in HTML</h3>
							        						<span class="section-link">in HTML5</span>
							        					</a>
							        				</li>
							        				<li class="more-bits"><a href="#">More ... <i class="fa fa-long-arrow-right"></i></a></li>
							        			</ul>
							        		</div><!-- end of class="bits" -->
							        	</div><!-- end of class="bits-container" -->
							        </div><!-- end of column 2 -->
							        <div class="column-small-2 hide-small">
							        	<div class="feeds-header-container">
							        		<h2 class="section-heading"><i class="fa fa-share-alt fa-2"></i> Feeds</h2>
								        	<ul class="feed-header">
								        		<li><a href="http://techstream.org/sitemap" class="tw-rss"><i class="fa fa-rss"></i><span class="hover-eff">RSS</span></a></li>
												<li><a href="http://techstream.org/sitemap" class="tw-twitter"><i class="fa fa-twitter"></i></a></li>
								        	</ul>
								        </div>
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
							    		 <h4 class="section-heading"><i class="fa fa-file-text"></i> Posts</h4>
							    		 	<ul class="post-list">
							    		 		<li>
							    		 			<div class="row">
							    		 				<div class="column-xsmall-3 padd0 post-image-small"> <img src="images/5-Elements-of-Websites-that-Convert-110.jpg"></div>
							    		 				<div class="column-xsmall-9">
							    		 					<h3 class="post-list-title"><a href="#" class="post-title-a">Sample title of the Article</a></h3>
							    		 					<p> THis is a simple attcle, in the context of typing elements of the website that can convert.Praesent diam velit, accumsan id dui et, hendrerit varius lorem. <a href="">Read More</a></p>
							    		 					<div class="article-add-info">posted in <a href="#">Web Design</a>  <i class="fa fa-calendar"></i> 4/2/2014</div>
							    		 				</div>
							    		 			</div>
							    		 		</li>
							    		 		<li>
							    		 			<div class="row">
							    		 				<div class="column-xsmall-3 padd0 post-image-small"> <img src="images/5-Elements-of-Websites-that-Convert-110.jpg"></div>
							    		 				<div class="column-xsmall-9">
							    		 					<h3 class="post-list-title"><a href="#" class="post-title-a">Sample title of the Article</a></h3>
							    		 					<p> THis is a simple attcle, in the context of typing elements of the website that can convert.Praesent diam velit, accumsan id dui et, hendrerit varius lorem. <a href="">Read More</a></p>
							    		 					<div class="article-add-info">posted in <a href="#">Web Design</a>  <i class="fa fa-calendar"></i> 4/2/2014</div>
							    		 				</div>
							    		 			</div>
							    		 		</li>
							    		 		<li>
							    		 			<div class="row">
							    		 				<div class="column-xsmall-3 padd0 post-image-small"> <img src="images/5-Elements-of-Websites-that-Convert-110.jpg"></div>
							    		 				<div class="column-xsmall-9">
							    		 					<h3 class="post-list-title"><a href="#" class="post-title-a">Sample title of the Article</a></h3>
							    		 					<p> THis is a simple attcle, in the context of typing elements of the website that can convert.Praesent diam velit, accumsan id dui et, hendrerit varius lorem. <a href="">Read More</a></p>
							    		 					<div class="article-add-info">posted in <a href="#">Web Design</a>  <i class="fa fa-calendar"></i> 4/2/2014</div>
							    		 				</div>
							    		 			</div>
							    		 		</li>
							    		 		<li>
							    		 			<div class="row">
							    		 				<div class="column-xsmall-3 padd0 post-image-small"> <img src="images/5-Elements-of-Websites-that-Convert-110.jpg"></div>
							    		 				<div class="column-xsmall-9">
							    		 					<h3 class="post-list-title"><a href="#" class="post-title-a">Sample title of the Article</a></h3>
							    		 					<p> THis is a simple attcle, in the context of typing elements of the website that can convert.Praesent diam velit, accumsan id dui et, hendrerit varius lorem. <a href="">Read More</a></p>
							    		 					<div class="article-add-info">posted in <a href="#">Web Design</a>  <i class="fa fa-calendar"></i> 4/2/2014</div>
							    		 				</div>
							    		 			</div>
							    		 		</li>
							    		 		<li class="more-post">
							    		 			<a href="">More Post... <i class="fa fa-long-arrow-right"></i></a>
							    		 		</li>
							    		 	</ul>
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
