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
									<div class="column-med-10 padd0 header-content">
										<div class="row">
											<div class="column-small-7 padd0">
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
									        <div class="column-small-5 padd0-small">
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
									    </div>
							        </div>
							        <div class="column-med-2 padd0">
							        	<div class="ads-header-container">
							        		<?php ad_box(); ?>								        	
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
						    <div class="add-on row post-list-1">
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
							    		 		else:
								    		 		echo '<li>';
						        					post_list();
						     						echo '</li>';
							    		 		endif;
							    		 	?>
							    		 	</ul>
							    		 	<ul class="post-list post-list-1-2 hide-large view-small">
							    		 	<?php
												if(article_exist()): 
								            		$article_list = article_published(3,3,False,'Bits');
								            		while($article_id = mysql_fetch_array($article_list, MYSQL_ASSOC )){
							    		 				echo '<li>';
						        						post_list($article_id['SL_NO']);
								        				echo '</li>';
							    		 			}// end of while loop
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
						
						<!-- Most article -->
					    	<?php
								if(article_exist()): 
									echo '<div class="row post-list-2 hide-small"><ul>';
					            		$article_list = article_published(4,3,False,'Bits');
					            		while($article_id = mysql_fetch_array($article_list, MYSQL_ASSOC )){
					            			echo "<li>";
											post_list($article_id['SL_NO'],1);
											echo "</li>";
				    		 			}// end of while loop
			    		 			echo '</ul></div>';
			    		 		endif;
			    		 	?>
					   
					    <!-- End of more article -->
					    <!-- most read -->
						    <div class="row post-list-3">
						    	
						    	<div class="column-small-4 padd0-med sections">
						    		<h3 class="section-heading"><i class="fa fa-file-text"></i> Sections</h3>
						    		<ul class="sections-list section">
						    			<li>
						    				<div class="row">
						    					<div class="column-xxsmall-3 sections-list-icon"><i class="fa fa-clipboard"></i></div>
						    					<div class="column-xxsmall-9 sections-list-description">
						    						<h3 class="post-list-title">Bits</h3>
						    						<h6>For those who code.</h6>
						    						<a href="<?php static_url('main');?>Bits" class="details-link">all work</a>
						    					</div>
						    				</div>
						    			</li>
						    			<li>
						    				<div class="row">
						    					<div class="column-xxsmall-3 sections-list-icon"><i class="fa fa-css3"></i></div>
						    					<div class="column-xxsmall-9 sections-list-description">
						    						<h3 class="post-list-title">Web Design</h3>
						    						<h6>For those who make websites.</h6>
						    						<a href="<?php static_url('main');?>Web-Design" class="details-link">all work</a>
						    					</div>
						    				</div>
						    			</li>
						    			<li>
						    				<div class="row">
						    					<div class="column-xxsmall-3 sections-list-icon"><i class="fa fa-html5"></i></div>
						    					<div class="column-xxsmall-9 sections-list-description">
						    						<h3 class="post-list-title">Web Development</h3>
						    						<h6>For those who code the web.</h6>
						    						<a href="<?php static_url('main');?>Web-Development" class="details-link">all work</a>
						    					</div>
						    				</div>
						    			</li>
						    		</ul>
								</div>
								<div class="column-small-8 padd0">
									<h3 class="section-heading"><i class="fa fa-file-text"></i> Most Read</h3>
									<div class="row">
								    	<div class="column-xsmall-7 most-read-post">
								    		<ul class="sections-list">
								    			<li><?php  post_list(122,2); ?></li>
								    			<li><?php  post_list(125,2); ?></li>
								    			<li><?php  post_list(127,2); ?></li>
								    		</ul>
										</div>
										<div class="column-xsmall-5 most-read-bits">
											<ul class="sections-list">
								    			<li><?php  bits_list(122,1); ?></li>
								    			<li><?php  bits_list(125,1); ?></li>
								    			<li><?php  bits_list(127,1); ?></li>
								    			<li><?php  bits_list(122,1); ?></li>
								    			<li><?php  bits_list(125,1); ?></li>
								    			<li><?php  bits_list(127,1); ?></li>
								    		</ul>
										</div>
								    </div>
								</div>
						    </div>
						    <!-- End of most read -->
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
