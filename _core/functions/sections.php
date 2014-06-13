<?php
/*
* Contains the functions dealing with catagories and other sections 
*/

function section_valid_url($article_url){
/**
*  Article URL Valid
*
* Returns the TRUE or FALSE if the URL is a valid post 
*
* Arguments ( $article_url )
* -------------------------------------
*
* $article_url -> URL to be inspected
*
**/

	$article_url=mysql_real_escape_string($article_url);
	$qurrey=mysql_query("select count(*) from data where LINK = BINARY('$url') and ARTICLE_STATUS=1");
	return (mysql_result($qurrey,0) == 1) ? true : false;
}

?>