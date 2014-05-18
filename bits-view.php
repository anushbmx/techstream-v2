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
									<div class="column-small-8 cat-desc">
										<h1 class="article-heading">The Big Title of this all msss</h1>
										<p>Bits are short pices of codes that may or may not bring much large influence on the system. To know more on what is a bit.</p>
									</div>
									<div class="column-small-4">
										<div class="ad ad-hor ad-h">
							        		<small class="advert">Advertisement </small>
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
							    <div class="column-small-8 add-on-main">
						    		<div id="bits-article">
										<article class="article">
											<p>psum. Sed pellentesque ante sapien, at consectetur nunc ornare et. Integer tincidunt ac magna id vestibulum. Vivamus diam tellus, mollis ut lorem vel, interdum egestas augue. Sed sagittis hendrerit dapibus. Donec orci urna, gravida a sagittis eu, we do have some <code>moz-border</code> in line. lobortis vitae sapien.</p>

											<pre><code>
&lt;?php
	echo('hello world');
?&gt;
											</code></pre>
											<p>Nam nec risus vel est gravida tincidunt. Interdum et malesuada fames ac ante ipsum primis in faucibus. Praesent accumsan tempor tellus quis lobortis. Quisque posuere hendrerit luctus. Aliquam cursus purus a consequat rutrum. Nunc semper mattis nulla eu sollicitudin. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Mauris facilisis justo quis elit egestas, ac semper diam blandit. Vivamus vitae dui quam. Curabitur eget accumsan ipsum. Curabitur at neque pretium, pretium sem vel, lobortis ipsum. Phasellus dapibus scelerisque diam, a lacinia felis blandit vel. Maecenas tristique nunc at pretium posuere. Nulla vel egestas leo. Maecenas posuere ac augue sed condimentum.</p>
											<pre><code>
input[type="radio"] {
	-webkit-appearance: none;
	border: 1px solid #cacece;
	box-shadow: 0 1px 2px rgba(0,0,0,0.05), inset 0 -15px 10px -12px rgba(0,0,0,0.05);
	display: inline-block;
	position: relative;
	top: 3px;
	margin: 0 10px;
	padding: 8px;
	-webkit-border-radius: 20px;
	-moz-border-radius: 20px;
	-ms-border-radius: 20px;
	-o-border-radius: 20px;
	border-radius: 20px;	
}

input[type="radio"]:checked{
	background-color: #ededed;
	border: 1px solid #ccc;
	box-shadow: 0 1px 2px rgba(0,0,0,0.05), inset 0 -15px 10px -12px rgba(0,0,0,0.05), inset 15px 10px -12px rgba(255,255,255,0.1), inset 0 0 10px rgba(0,0,0,0.1);
}
											</code></pre>
											<p>Nam nec risus vel est gravida tincidunt. Interdum et malesuada fames ac ante ipsum primis in faucibus. Praesent accumsan tempor tellus quis lobortis. Quisque posuere hendrerit luctus. Aliquam cursus purus a consequat rutrum. Nunc semper mattis nulla eu sollicitudin. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Mauris facilisis justo quis elit egestas, ac semper diam blandit. Vivamus vitae dui quam. Curabitur eget accumsan ipsum. Curabitur at neque pretium, pretium sem vel, lobortis ipsum. Phasellus dapibus scelerisque diam, a lacinia felis blandit vel. Maecenas tristique nunc at pretium posuere. Nulla vel egestas leo. Maecenas posuere ac augue sed condimentum.</p>

										</article>	
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