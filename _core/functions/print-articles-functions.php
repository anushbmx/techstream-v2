<?php
function print_post($article_id,$article=1){
	$article_data=article_data($article_id);
?>
<div id="content">
    <div class="content-inner">
        <div class="article" role="main">
            <div class="ts-post">
                <div class="ts-box ts-light-box">
                 <?php top_sharing($article_id) ?>
                </div>
                 <?php top_article_ad(); ?>
                <article>
                	<?php echo $article_data['FULLTEXT']; ?>
                    <?php next_pre_article($article_id); ?>
                </article>
               
                <div class="ts-box ts-white-box">
					<?php author($article_data['AUTHOR_CODE']);?>
                    <div class="newline"></div>
                </div>
            </div>
              <?php bottom_article_ad2(); ?>
             <?php article_sharing(); ?>
             <?php bottom_article_ad(); ?>
             <div class="ts-box ts-white-box">
             <?php disqus_comment(); ?>
               <div class="newline"></div>
                </div>
             
        </div>
        <?php include('_include/sidebar.html'); ?>
  		<div class="newline"></div> 
    </div><!-- content-inner -->
</div> <!-- content --> 
<?php
}
function print_section($sec_data,$page=1,$article=2){ ?>
<div id="content">
    <div class="content-inner">
        <div class="article index" role="main">
        <div class="ts-box ts-light-box">
		    <?php if ($page==1) {echo "<h1>".$sec_data['SEC_NAME']."</h1>";} else {echo "<h1>".$sec_data['SEC_NAME'].":: Page $page</h1>";}?>
            <p class="post-title"><?php echo $sec_data['SEC_DESC'] ?>.</p>
        </div>
         <?php top_page_ad(); ?>
         <div class="ts-archive-container">
         <div class="ts-row">
			<?php
            $posts_per_page=10;
            $start_from = ($page-1) * $posts_per_page;
if($sec_data['SEC_LEVEL']==2){$query="SELECT * FROM data  WHERE SUBSEC='".$sec_data['SEC_NAME']."' AND ARTICLE_STATUS=1 ORDER BY DATE DESC  LIMIT $start_from, 10";}else{$query="SELECT * FROM data  WHERE SECURL = '".$sec_data['SEC_URL']."' AND ARTICLE_STATUS=1 ORDER BY DATE DESC  LIMIT $start_from, 10";}
			$query_result=mysql_query($query);
            $i=0;
            while($latest_post = mysql_fetch_array($query_result, MYSQL_ASSOC )){		
                if($i%2 ==0 && $i!=0) echo "</div>\n<div class=\"ts-row\">";
                ++$i;
            ?>
            <article id="post-11349" class="ts-box">
                    <h3><a href="http://techstream.org/<?php echo $latest_post['LINK'];?>" title="<?php echo $latest_post['TITLE'];?>"><?php echo $latest_post['TITLE'];?></a></h3>
                    <div class="ts-thumb">
                        <a href="http://techstream.org/<?php echo $latest_post['LINK'];?>" class="ts-img" title="<?php echo $latest_post['TITLE'];?>"><img src="http://ns2.techstream.org/<?php echo $latest_post['IMG110'];?>" alt="<?php echo $latest_post['TITLE'];?>" width="150" height="110"></a>
                    </div><!-- //ct-latest-thumb-->
                     <p class="post_info"> In <a href="http://techstream.org/<?php echo $latest_post['SECURL'];?>" title="<?php echo $latest_post['SEC'];?>"><?php echo $latest_post['SEC'];?></a> on <time pubdate="pubdate"><?php echo date('F jS Y',strtotime($latest_post['DATE'])) ?></time></p>
                    <p ><?php echo elliStr($latest_post['DES'], 300) ;?>....<a href="<?php echo $latest_post['LINK'];?>" title="<?php echo $latest_post['TITLE'];?>" class="read_more" >READ MORE</a></p>  
                    <div class="newline"></div>
                </article>
            <?php } ?>
            </div>
         </div>
    <?php 	
	if($sec_data['SEC_LEVEL']==2){$query="SELECT COUNT(SL_NO) FROM data  WHERE SUBSEC='".$sec_data['SEC_NAME']."' AND ARTICLE_STATUS=1 ";}else{$query="SELECT COUNT(SL_NO) FROM data  WHERE SECURL = '".$sec_data['SEC_URL']."' AND ARTICLE_STATUS=1";}
	$url="http://techstream.org/".$sec_data['SEC_URL'];
	numbered_nav($page,$posts_per_page,$query,$url);
?>
	             <?php bottom_page_ad(); ?>

        </div><!--- class article , roll= article -->        
        <?php include('_include/sidebar.html')?>
         <div class="newline"></div> 
    </div><!-- content-inner -->
</div> <!-- content -->	
<?php
}
function author($AUTHOR_CODE){
	$author_data=author_data($AUTHOR_CODE);
	?>
          <div class="author-avatar">
                <img alt='<?php echo $author_data['first_name']; ?>' src='<?php echo "http://ns2.techstream.org/avatars/".$author_data['avatar']?>' class='avatar avatar-105 photo' height='80' width='80' />							
                </div>
                <div class="author-desc">
                    <h4><?php echo $author_data['first_name']; ?></h4>
                    <p><?php echo $author_data['About_Author'];?></p>
                <div>
                <ul class="author-social-profiles">
                <li><strong>Social Links: </strong></li>
                 <?php if(empty($author_data['TW'])==false){ ?><li class="so twitter"><a href="http://www.twitter.com/<?php echo $author_data['TW'] ?>"></a><?php } ?>
        <?php if(empty($author_data['FB'])==false){ ?><li class="so facebook"><a href="http://www.facebook.com/<?php echo $author_data['FB'] ?>"></a></li> <?php } ?>
           <?php if(empty($author_data['FT'])==false){ ?><li class="so forrst"><a href="http://forrst.com/people/<?php echo $author_data['FB'] ?>"></a></li> <?php } ?>
             <?php if(empty($author_data['DB'])==false){ ?><li class="so dribbble"><a href="http://dribbble.com/<?php echo $author_data['FB'] ?>"></a></li> <?php } ?>
                <li class="so gplus"><a href="https://plus.google.com/u/0/<?php echo $author_data['GPLUS'] ?>?rel=author"></a></li>
                </ul>
           	 	</div>
            </div>
<?php
}
function article_sharing(){
?>
<div class="ts-box ts-light-box ts-after-article-sharing">
                <div class="share-box">
                    <div class="addthis_toolbox addthis_default_style ">
                        <a class="addthis_button_facebook_like" fb:like:layout="box_count"></a>
                        <a class="addthis_button_tweet" tw:count="vertical"></a>
                        <a class="addthis_button_google_plusone" g:plusone:size="tall"></a>
                        <a class="addthis_counter"></a>            
                    </div>
                    <div id="load"><div class="bar1"></div><div class="bar1"></div></div>
                </div>                    
</div>
<?php
}
function top_sharing($article_id){
	$article_data=article_data($article_id);
?>

		<p class="post_info entry-meta">Posted In <a title="<?php echo $article_data['SEC'] ?>" href="http://techstream.org/<?php echo $article_data['SECURL'] ?>"><?php echo $article_data['SEC'] ?></a> on <time pubdate="pubdate"><?php echo date('F jS Y',strtotime($article_data['DATE'])) ?></time></p>
	<div class="top-sharing">
        <div class="addthis_toolbox addthis_default_style add_this" >
        <a class="addthis_button_facebook_like" fb:like:layout="button_count"></a>
        <a class="addthis_button_tweet"></a>
        <a class="addthis_button_google_plusone" g:plusone:size="medium" g:plusone:annotation="bubble"></a>
        <a class="addthis_button_pinterest_pinit"></a>
        <a class="addthis_button_stumbleupon_badge"></a> 
        </div>
		
    </div>
   <?php
}
function next_pre_article($article_id){
$article_data=article_data($article_id);
$query1="SELECT * FROM data WHERE DATE < '".$article_data['DATE']."' and  ARTICLE_STATUS=1 ORDER BY date DESC LIMIT 1";
$query2="SELECT * FROM data WHERE DATE > '".$article_data['DATE']."' and  ARTICLE_STATUS=1 ORDER BY date LIMIT 1";
$result_before=mysql_fetch_array(mysql_query($query1));
$result_after=mysql_fetch_array(mysql_query($query2));
?>
<div class="ts-nxtpre-article">
    <div class="post-prev">        
	    <strong>Previous:</strong><br> 
         <?php if($result_before!=0){ ?><a href="http://techstream.org/<?php echo $result_before['LINK'];?>"  rel="prev" title="<?php echo $result_before['TITLE']; ?>"><?php echo $result_before['TITLE']; ?></a><?php }else{ ?> NO Previous<?php } ?>  
    </div>
    <div class="post-next">        
	    <strong>Next:</strong><br>
         <?php if($result_after!=0){ ?><a href="http://techstream.org/<?php echo $result_after['LINK'];?>" title="<?php echo $result_after['TITLE']; ?>" rel="next"><?php echo $result_after['TITLE']; ?></a><?php }else{ ?> Next In Near Future <?php } ?>            
    </div>
    <div class="newline"></div>
</div>
<?php
}
function archives($section){
	echo "<div class=\"projects\">";
	 $result=mysql_query("SELECT * FROM data where ( SEC ='$section')");
	while($row = mysql_fetch_array($result, MYSQL_ASSOC )){
		echo "<p> <a href=\"http://techstream.org/".$row['LINK']."\"><time>".date('M-d-Y',strtotime($row['DATE'] ))."</time>".$row['TITLE']."</a></p>";
	} 
	echo "</div>";
}

function numbered_nav($page,$posts_per_page,$query,$url,$pages_to_show = 7, $always_show = false) {
		$custom_range = round($pages_to_show/2);
		$numposts = mysql_result(mysql_query($query),0);
		$max_page = ceil($numposts /$posts_per_page);

		if($max_page > 1):
			echo "<div class='page_numbers'><ul><li>Page $page of $max_page</li>";
			if($page!= 1){echo '<li><a ';
						if($page!=2){ echo 'href="'.$url.'&page='.($page-1).'"'; }else {echo 'href="'.$url.'"'; }
						echo '>&laquo;</a></li>';
			}
			if ($page >= ($pages_to_show-1)) {
				echo '<li><a href="'.$url.'">1</a></li><li class="space">...</li>';
			}
			for($i = $page - $custom_range; $i <= $page + $custom_range; $i++) {
				if ($i >= 1 && $i <= $max_page) {
					if($i == $page) {
						echo "<li class='active_page'><a> $i</a></li>";
					}
					else {
						echo '<li><a ';
						if($i!=1){ echo 'href="'.$url.'&page='.$i.'"'; }else {echo 'href="'.$url.'"'; }
						echo '>'.$i.'</a></li>';
					}
				}
			}
			if (($page+$custom_range) < ($max_page)) {
				echo '<li class="space">...</li><li><a href="'.$url.'&page='.$max_page.'">'.$max_page.'</a></li>';
			}
			if($page!= $max_page){echo '<li> <a href="'.$url.'&page='.($page+1).'">&raquo;</a></li>';}
			echo "</ul><div class=\"newline\"></div></div>";
		
		endif;
}

function sitemap($section,$subsection){
	if(is_numeric($subsection)){
		 $result=mysql_query("SELECT * FROM data where ( SEC ='$section') and ARTICLE_STATUS=1");
			 
	}else{
		 $result=mysql_query("SELECT * FROM data where ( SEC ='$section' and SUBSEC='$subsection') and ARTICLE_STATUS=1");
	}
	while($row = mysql_fetch_array($result, MYSQL_ASSOC )){
		echo "<li> <a href=\"http://techstream.org/".$row['LINK']."\">".$row['TITLE']."</a></li>";
	} 
}
function disqus_comment(){
?>
	<div id="disqus_thread"></div>
	<script type="text/javascript">
	var disqus_shortname = 'techstream'; 
	(function() {
	var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;
	dsq.src = 'http://' + disqus_shortname + '.disqus.com/embed.js';
	(document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
	})();
	</script>
	<noscript>Please enable JavaScript to view the <a href="http://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
	<a href="http://disqus.com" class="dsq-brlink">comments powered by <span class="logo-disqus">Disqus</span></a>
        
<?php
}
?>