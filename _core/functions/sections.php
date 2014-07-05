<?php
/*
* Contains the functions dealing with catagories and other sections 
*/

function section_valid_url($section_url){
/**
*  Section URL Valid
*
* Returns the TRUE or FALSE if the URL is a valid post 
*
* Arguments ( $article_url )
* -------------------------------------
*
* $section_url -> URL to be inspected
*
**/

	$section_url=mysql_real_escape_string($section_url);
	$qurrey=mysql_query("select count(*) from data where LINK = BINARY('$section_url') and ARTICLE_STATUS=1");
	return (mysql_result($qurrey,0) == 1) ? true : false;
}



?>