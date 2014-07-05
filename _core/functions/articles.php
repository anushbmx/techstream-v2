<?php

function wrong_url_redirect($url){
/**
*  Wrong URL Redirect
*
* Redirects the request to proper URL
*
* Arguments ( $url )
* -------------------------------------
*
* $url -> Requested URL
*
**/
	$qurrey=mysql_query("select * from data where LOWER(LINK)='$url'");
	$data=mysql_fetch_array($qurrey);
	$location="Location:".static_url('main',1).$data['LINK'];
	header ('HTTP/1.1 301 Moved Permanently');
	header($location) ;
}

function wrong_url($url){
/**
*  Wrong URL
*
* Returns the TRUE or FALSE if the URL is a requested in wrong order post of Active Articles only
*
* Arguments ( $url )
* -------------------------------------
*
* $url -> Requested URL
*
**/
	$url=mysql_real_escape_string($url);
	$url=strtolower($url);
	$qurrey=mysql_query("select count(*) from data where LOWER(LINK)='$url' and ARTICLE_STATUS=1");
	return (mysql_result($qurrey,0) == 1) ? true : false;
}

function article_inactive($article_url){
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
	$qurrey=mysql_query("select count(*) from data where LINK = BINARY('$article_url')");
	return (mysql_result($qurrey,0) == 1) ? true : false;
}

function article_active($article_url){
/**
*  Article URL Valid
*
* Returns the TRUE or FALSE if the URL is a valid post & active
*
* Arguments ( $article_url )
* -------------------------------------
*
* $article_url -> URL to be inspected
*
**/

	$article_url=mysql_real_escape_string($article_url);
	$qurrey=mysql_query("select count(*) from data where LINK = BINARY('$article_url') and ARTICLE_STATUS=1");
	return (mysql_result($qurrey,0) == 1) ? true : false;
}

function article_exist($option = FALSE){
/**
*  Article Exist
*
* Returns the TRUE or FALSE if 1 or more article exists in all sections or as 
* mentioned i argument.
*
* Arguments ( $selection , <category> )
* -------------------------------------
*
* $option    -> True  : Checks if article exists in specified category
*			 -> False : Selects the last post excluding the specified category 
*				
*				NB : TO select from all category use 'False' with no arguments,
*					 Default argument for $option is set to FALSE to facilitate
*					 use of function without any arguments.
*
**/
	
	
	$func_num_args = func_num_args();
	$func_get_args = func_get_args(); 


	if($option == true){
		if($func_num_args>1){
			unset($func_get_args[0]);
			$fields =' SEC = \''.implode('\' AND SEC = \'',$func_get_args).'\'';
			$query= "SELECT count(*) FROM data WHERE $fields";
		}else
			return FALSE;
	}else{
		if($func_num_args>1){
			unset($func_get_args[0]);
			$fields =' SEC != \''.implode('\' AND SEC != \'',$func_get_args).'\'';
			$query= "SELECT count(*) FROM data WHERE $fields";
		}else
			$query= "SELECT count(*) FROM data";
	}

	$qurrey=mysql_query($query);

	return (mysql_result($qurrey,0) !=0) ? true : false;
}

function article_last_published($option = FALSE){
/**
*  Last Published Article
*
* Returns the unique ID of last Published article according to calender
*
* Arguments ( $selection , <category> )
* --------------------------------------
*
* $option    -> True  : Selects the last post from the specified category
*			 -> False : Selects the last post excluding the specified category 
*				
*				NB : TO select from all category use 'False' with no arguments,
*					 Default argument for $option is set to FALSE to facilitate
*					 use of function without any arguments.
*
**/
	

	$func_num_args = func_num_args();
	$func_get_args = func_get_args(); 


	if($option == true){
		if($func_num_args == 1){
			unset($func_get_args[0]);
			$fields =' SEC = \''.implode('\' OR SEC = \'',$func_get_args).'\'';
			$query= "SELECT SL_NO FROM data WHERE $fields AND ARTICLE_STATUS=1 ORDER BY DATE DESC LIMIT 1";
		}else
			return 0;
	}else{
		if($func_num_args>1){
			unset($func_get_args[0]);
			$fields =' SEC != \''.implode('\' AND SEC != \'',$func_get_args).'\'';
			$query= "SELECT SL_NO FROM data WHERE $fields AND ARTICLE_STATUS=1 ORDER BY DATE DESC LIMIT 1";
		}else
			$query= "SELECT SL_NO FROM data WHERE ARTICLE_STATUS=1 ORDER BY DATE DESC LIMIT 1";
	}

	$data =mysql_result(mysql_query($query),0);
	
	return $data;

}

function article_published($limit, $start=0, $option = FALSE){
/**
*  Last Published Article
*
* Returns the unique ID of last Published article according to calender
*
* Arguments ( $selection , <category> )
* --------------------------------------
*
* $limit 	 -> Number of results to print / display
* $start 	 -> Index number to start
* $option    -> True  : Selects the last post from the specified category
*			 -> False : Selects the last post excluding the specified category 
*				
*				NB : TO select from all category use 'False' with no arguments,
*					 Default argument for $option is set to FALSE to facilitate
*					 use of function without any arguments.
*
**/
	

	$func_num_args = func_num_args();
	$func_get_args = func_get_args(); 

	unset($func_get_args[0]);
	unset($func_get_args[1]);
	unset($func_get_args[2]);

	if($option == true){
		if($func_num_args > 3){
			$fields =' SEC = \''.implode('\' OR SEC = \'',$func_get_args).'\'';
			$query= "SELECT SL_NO FROM data WHERE $fields AND ARTICLE_STATUS=1 ORDER BY DATE DESC LIMIT $start, $limit";
		}else
			return 0;
	}else{
		if($func_num_args>3){
			$fields =' SEC != \''.implode('\' AND SEC != \'',$func_get_args).'\'';
			$query= "SELECT SL_NO FROM data WHERE $fields AND ARTICLE_STATUS=1 ORDER BY DATE DESC LIMIT $start, $limit";
		}else
			$query= "SELECT SL_NO FROM data WHERE ARTICLE_STATUS=1 ORDER BY DATE DESC LIMIT $start, $limit";
	}

	$data =mysql_query($query);
	
	return $data;

}

function article_data($article_id){
/**
* Article Information
*
* Returns all informations or an article from its article ID
* in an Array.
*
* Arguments ( $selection , <category> )
* --------------------------------------
*
* $article_id 	 -> ID of article
**/

	$data = array();
	$article_id= (int)$article_id;
	$func_num_args = func_num_args(); 
	$func_get_args = func_get_args(); 

	$query="SELECT * from data WHERE SL_NO='$article_id'";

	$data =mysql_fetch_assoc(mysql_query($query));
	
	$ar_data = new article($data); 

	return $ar_data;
}

?>