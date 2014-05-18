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
						        			</ul>
							    		 	<nav class="pagination">
							    		 		<ul>
							    		 			<li>Page 1 of 15 :</li>
							    		 			<li> <a href="http://techstream.org/all-articles?page=2"><i class="fa fa-chevron-left"></i></a></li>
							    		 			<li class="active"><a> 1</a></li>
							    		 			<li><a href="http://techstream.org/all-articles?page=2">2</a></li>
							    		 			<li><a href="http://techstream.org/all-articles?page=3">3</a></li>
							    		 			<li><a href="http://techstream.org/all-articles?page=4">4</a></li>
							    		 			<li><a href="http://techstream.org/all-articles?page=5">5</a></li>
							    		 			<li class="space">...</li>
							    		 			<li><a href="http://techstream.org/all-articles?page=15">15</a></li>
							    		 			<li> <a href="http://techstream.org/all-articles?page=2"><i class="fa fa-chevron-right"></i></a></li>
							    		 		</ul>
							    		 	</nav><!-- end of class="pagination" -->						        			
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