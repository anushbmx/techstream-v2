<?php
/*
* Contains the functions dealing with Users 
*/

function user_data($user_id){
/**
* User Information
*
* Returns all informations or User from user_id
* in an Array.
*
* Arguments ( $user_id )
* --------------------------------------
*
* $user_id 	 -> ID of user
**/

	$data = array();
	$user_id= (int)$user_id;

	$query="SELECT * from users WHERE user_id='$user_id'";

	$data =mysql_fetch_assoc(mysql_query($query));
	return $data;
}

?>