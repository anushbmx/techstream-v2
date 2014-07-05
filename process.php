<?php 
/* 
			############ URL Processor ############
		
		All requests to the CMS will be handeled by the following sections
		Once a http request is received the URL is split and analysed for all 
		possiblities.


*/
	include('_core/init.php');
	if(isset($_GET['url'])){
		$url=mysql_real_escape_string($_GET['url']);
		if(is_article($url) == true){
			require('post.php');
		}elseif (category_valid($url) == true) {
			include('article.php');
		}elseif(wrong_url($url) == true){
			include('post.php');
		}elseif(wrong_category($url)==true){
			wrong_category_redirect($url);
		}
	}else{
		echo "404 Lol";
	}
?>