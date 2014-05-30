<?php
/*
* Contains the functions dealing with article 
*/

function article_exist($option = FALSE){
/**
*  Article Exist
*
* Returns the TRUE or FALSE if 1 or more article exists in all sections or as 
* mentioned i argument.
*
* Arguments ( $selection , <category> )
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

function article_data($article_id){
/**
* Article Information
*
* Returns all informations or an article from its article ID
* in an Array.
**/

	$data = array();
	$article_id= (int)$article_id;
	$func_num_args = func_num_args(); 
	$func_get_args = func_get_args(); 

	$query="SELECT * from data WHERE SL_NO='$article_id'";

	$data =mysql_fetch_assoc(mysql_query($query));
	
	return $data;
}

?>