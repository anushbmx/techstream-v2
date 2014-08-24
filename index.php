<?php 
	/* 
		Header Include include.

		$title -> The page title of serving webpage, if not set Default value will be printed.
		$template -> Used to load Custome CSS/JS or any additional files. If not set Default styles will only be loaded.


		-------------------
		TODO's

			Make a place holder for no result images
	*/
	include('_core/init.php');
	$template=0;
	$description="Tech stream is a Web Design and Development blog dedicated to provide inspiring and innovative contents.";
	$keywords="Tech Stream Projects,Techstream works, Tech Stream ,Tech Stream";
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
							            <?php if(article_exist()): 

							            		$article_id = article_last_published(FALSE,'Bits');
							            		$data = article_data($article_id)
							            ?>
							            	<a href="<?php static_url('main'); $data->article_url();?>">
								            	<img src="<?php static_url('images'); $data->article_image();?>"/>
								            	<div class="overlay-box">
								            		<h1 class="overlay-heading"><?php $data->article_title();?></h1>
								            	</div><!-- end of class ="overlay-box" -->
								            </a>
							            <?php else: ?>
							            	<img src="images/Hello-World.jpg"/>
							            	<div class="overlay-box">
							            		<h1 class="overlay-heading">No Posts Found</h1>
							            	</div><!-- end of class ="overlay-box" -->							            	
							            <?php endif; ?>
							            </div><!-- end of class="atticle-image" -->
							        </div> <!-- end of column -1 -->
							        <div class="column-small-4 padd0-small">
							        	<div class="bits-container center-small">
							        		<h2 class="section-heading"><i class="fa fa-clipboard fa-2"></i>  Bits</h2>
							        		<div class="bits">
							        			<ul class="bit">
							        			<?php
													if(article_exist()): 
									            		$article_list = article_published(3,0,True,'Bits');
									            		while($article_id = mysql_fetch_array($article_list, MYSQL_ASSOC )){
									            			$data = article_data($article_id['SL_NO'])
								    		 	?>
							        				<li>
							        					<a href="<?php static_url('main'); $data->article_url();?>">
							        						<h3 class="bit-title"><?php $data->article_title();?></h3>
							        						<span class="section-link">in <?php $data->article_sub_section();?></span>
							        					</a>
							        				</li>
							        			<?php
							        					}//end of while
							        			?>
							        				<li class="more-bits"><a href="<?php static_url('main');?>Bits">More ... <i class="fa fa-long-arrow-right"></i></a></li>
							        			<?php
							        				else:
							        			?>
							        				<li>
							        					<a href="#">
							        						<h3 class="bit-title">No Bits Found</h3>
							        						<span class="section-link">Nothing found</span>
							        					</a>
							        				</li>
							        			<?php 
							        				endif;
							        			?>
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
				<?php main_search_box(); ?>
				<div class="inner-container">
					<div class="row">
						<div class="column-small-11 center">						    
						    <div class="add-on row">
							    <div class="column-small-8 padd0 add-on-main">
							    	<div class="row">
							    		 <div class="column-small-12 padd0">
							    		 <h4 class="section-heading"><i class="fa fa-file-text"></i> Posts</h4>
							    		 	<ul class="post-list">
							    		 	<?php
												if(article_exist()): 
								            		$article_list = article_published(2,1,False,'Bits');
								            		while($article_id = mysql_fetch_array($article_list, MYSQL_ASSOC )){
							    		 				echo '<li>';
						        						post_list($article_id['SL_NO']);
								        				echo '</li>';
							    		 			}// end of while loop
							    		 	?>
							    		 		
							    		 	<?php
							    		 		else:
								    		 		echo '<li>';
						        					post_list();
						     						echo '</li>';
							    		 		endif;
							    		 	?>
							    		 	</ul>
							    		 </div>
							    	</div>
							    </div>
							    <div class="column-small-4 sidebar hide-small">
								    <?php 
							    		/* 
							    			Side Bar include.

							    			$sidebar_template -> Define a Sidebar template


							    		*/
							    		include('_includes/sidebar.php');
							    	?>
							    </div>
							</div>
						</div>
						<!-- Most Read -->
					    <div class="row post-list-2">
					    	<div class="column-small-11 center add-on ">
						    	<ul>
							    	<li>
							    		<h3 class="post-list-title"><a class="post-title-a" href="">Article 1</a></h3>
							    		<img src="http://ns2.techstream.org/images/Complete-Guide-To-Responsive-Web-Design.jpg">
							    		<p>Lorren Ipsome is the new generation of the txt in the man kind of all persons in earth.</p>
							    	</li>
							    	<li>
							    		<h3 class="post-list-title"><a class="post-title-a" href="">Article 1</a></h3>
							    		<img src="http://ns2.techstream.org/images/Maker-Party-Logos-with-CSS.jpg">
							    		<p>Lorren Ipsome is the new generation of the txt in the man kind of all persons in earth.</p>
							    	</li>
							    	<li>
							    		<h3 class="post-list-title"><a class="post-title-a" href="">Article 1</a></h3>
							    		<img src="http://ns2.techstream.org/images/World-Wide-Web-in-the-Middle-of-2014.jpg">
							    		<p>Lorren Ipsome is the new generation of the txt in the man kind of all persons in earth.</p>
							    	</li>
							    	<li>
							    		<h3 class="post-list-title"><a class="post-title-a" href="">Article 1</a></h3>
							    		<img src="http://ns2.techstream.org/images/Hello-World.jpg">
							    		<p>Lorren Ipsome is the new generation of the txt in the man kind of all persons in earth.</p>
							    	</li>
							    </ul>
							</div>
					    </div>
					    <!-- End of Mostread -->
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
