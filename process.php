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
		if(article_inactive($url) == true){
			echo "article";

		}elseif (category_active($url) == true) {
			echo "category";
		}elseif(wrong_url($url) == true){
			wrong_url_redirect($url);
		}
	}else{
		echo "404 Lol";
	}
?>