<?php 
	/* 
		Header Include include.

		$title -> The page title of serving webpage, if not set Default value will be printed.
		$template -> Used to load Custome CSS/JS or any additional files. If not set Default styles will only be loaded.
	*/

	include('_core/init.php');
	$template=1;

	$article_id = 145;
	$data = article_data($article_id);
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
							            	<img src="<?php static_url('images'); $data->article_image();?>"/>
							            	<div class="overlay-box hide-large view-small">
							            		<h1 class="overlay-heading"><?php $data->article_title();?></h1>
							            	</div><!-- end of class ="overlay-box" -->
							            </div><!-- end of class="atticle-image" -->							         
							        </div> <!-- end of column -1 -->
							        <div class="column-small-6">
							        	<div class="article-info-container center-small">
								        	<h1 class="article-heading hide-small"><?php $data->article_title();?></h1>
								        	<ul class="post-addon">
								        		<li><i class="fa fa-folder-open"></i> <a href="<?php static_url('main'); $data->article_section_url();?>"><?php $data->article_section();?></a></li>
								        		<li><i class="fa fa-calendar"></i> <?php $data->article_published_data();?> </li>
								        		<li><i class="fa fa-comment"></i> <a href="#comments">comments</a></li>
							        		</ul>
									    	<div class="ad ad-h center-small">
								        		<div class="bsap_1293798 bsap" id="bsap_1293798">
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
								        	</div>
								        </div><!-- end of class="article-info-container" -->							        	
							        </div><!-- end of column 2 -->
							    </div>
							</div>
						</div>
					</div>					
				</header><!-- end of class = "content-header" -->
				<div id="content-article">
					<div class="inner-container">
						<div class="row">
							<div class="column-small-11 center">
								<article class="article">
									<?php $data->article_content();?>
							    </article>  <!-- end of class="article" -->
							    <?php  social_sharing($article_id); ?>
							</div>
						</div>
					</div><!-- end of class="article-container" -->
				</div><!-- end of id="content-article"-->
				<div class="inner-container">
					<div class="row">
						<div class="column-small-11 center">
							<div class="add-on row">
							    <div class="column-small-8 add-on-main">
							    	<?php article_author($article_id); ?>
							    	<h4 class="section-heading">Comments</h4>
							    	<div id="comments">
							    	</div><!-- end of id="comments" -->
							    </div>
							    <div class="column-small-4 sidebar">
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
					</div>
				</div>
			</div><!-- end of class="content-inner" -->		
		</div> <!-- end of class="content" -->
<?php 
	/* 
		Footer include.
		$footer_template -> Define a Footer template
	*/
	include('_includes/footer.php');
?>