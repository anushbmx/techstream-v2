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
									<div class="column-small-8 cat-desc">
										<h1 class="article-heading"><?php $data->article_title();?></h1>
										<p><?php $data->article_description();?></p>
									</div>
									<div class="column-small-4">
										<?php ad_box() ?>										
									</div>
								</div>
							</div>
						</div>
					</div>					
				</header><!-- end of class = "content-header" -->
				<div class="inner-container">
					<div class="row">
						<div class="column-small-11 center">
						    <div class="add-on row">
							    <div class="column-small-8 add-on-bits">
						    		<div id="bits-article">
										<article class="article" itemtype="http://schema.org/Article">
											<?php $data->article_content();?>
										</article>	
										<?php  social_sharing($article_id); ?>
									</div>
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