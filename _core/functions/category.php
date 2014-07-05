<?php
/*
* Contains the functions dealing with catagories
*/

function category_active($article_url){
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
	$qurrey=mysql_query("select count(*) from categories where URL = BINARY('$article_url')");
	return (mysql_result($qurrey,0) == 1) ? true : false;
}

function category_id_from_url($url){
/**
* Cagegory ID from its URL
*
* Returns Category ID from its URL
*
* Arguments ( $URL )
* --------------------------------------
*
* $URL 	 -> URL of the category
**/

	$url = sanatize($url);
	$qurrey = mysql_query("select SL_NO from categories WHERE URL = '$url' ");
	return mysql_result($qurrey,0);
}


function category_data($category_id){
/**
* Cagegory Information
*
* Returns all informations or Cagegory from its ID
* in an Array.
*
* Arguments ( $category_id )
* --------------------------------------
*
* $category_id 	 -> ID of the category
**/

	$query = "SELECT * from categories WHERE SL_NO = $category_id";
	$data = mysql_fetch_assoc(mysql_query($query));
	$category_data = new category($data); 
	return $category_data;
}

?>