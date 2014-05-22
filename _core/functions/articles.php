<?php
/*
* Contains the functions dealing with article 
*/

function article_exist(){
	$qurrey=mysql_query("SELECT count(*) FROM data");
	return (mysql_result($qurrey,0) !=0) ? true : false;
}

function article_last_published($selection){
/**
*  Last Published Article
*
* Returns the unique ID of last Published article according to calender
*
* Arguments ( $selection , <category> )
* $selection -> True  : Selects the last post from the specified category
*			 -> False : Selects the last post excluding the specified category 
*				
*				NB : TO select from all category use 'False' with no arguments.
*
*/
	
	
	$func_num_args = func_num_args(); 
	$func_get_args = func_get_args(); 

	if($func_num_args>1){
		unset($func_get_args[0]);
	}

	if($selection == true){
		$fields ='\''.implode('\' OR \'',$func_get_args).'\'';
		if(isset($fields))
			$query= "SELECT * FROM data WHERE SEC = $fields ORDER BY DATE DESC LIMIT 1";
		else
			echo "Cannot select without a catagory";
	}else{
		$fields ='\''.implode('\' AND \'',$func_get_args).'\'';
		if(isset($fields))
			$query= "SELECT * FROM data WHERE SEC  NOT LIKE $fields ORDER BY DATE DESC LIMIT 1";
		else
			$query= "SELECT * FROM data ORDER BY DATE DESC LIMIT 1";
	}

	echo $query;
	$data =mysql_fetch_assoc( mysql_query($query));
	return($data);

}

function article_data($article_id){
/**
* Article Information
*
* Returns all informations or an article from its article ID
* in an Array.
*/

	$data = array();
	$article_id= (int)$article_id;
	$func_num_args = func_num_args(); 
	$func_get_args = func_get_args(); 
	$data =mysql_fetch_assoc( mysql_query("SELECT * from data WHERE SL_NO='$article_id'"));
	return $data;
}

?>