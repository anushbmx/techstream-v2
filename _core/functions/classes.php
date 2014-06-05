<?php

/*
*
*	Class definitons
*	
*	Contains all the class definitions used in the CMS
*/

class article {
/**
* Class Article
*
* An object to contain all information of an article 
*
* Data extraction can be done in two ways.
*				1. Direct call of variables
*				2. Function call ( WILL ECHO THE DATA)
* 
* When data is required in its raw form the varianles can be called with the object name + varianle suffixing ar_ as prefix
*
* Example : article->ar_id;
*			Will give an output of article ID.
*
* When the data is to be displayed function call can be employed with object name + function suffixing article_ as prefix
*
* Example :  article->article_id();
*			Will print the article ID.	
*
**/

// Varianbles for article

	var $ar_id;
	var $ar_title;
	var $ar_secion;
	var $ar_section_url;
	var $ar_sub_section;
	var $ar_url;
	var $ar_description;
	var $ar_keywords;
	var $ar_image;
	var $ar_image_small;
	var $ar_published_date;
	var $ar_content;
	var $ar_created_date;
	var $ar_status;
	var $ar_author_id;
	var $ar_approver_id;

// Constructor Class to initialize the variables of the class

	function article($data){

		$this->ar_id = $data[SL_NO];
	    $this->ar_title = $data[TITLE];
		$this->ar_section = $data[SEC];
		$this->ar_section_url = $data[SECURL];
		$this->ar_sub_section =	$data[SUBSEC];
		$this->ar_url =	$data[LINK];
		$this->ar_description =	$data[DES];
		$this->ar_keywords =	$data[KEY_WORDS];
		$this->ar_image =	$data[IMG];
		$this->ar_image_small = $data[IMG110];
		$this->ar_published_date = $data[DATE];
		$this->ar_content = $data[FULLTEXT];
		$this->ar_created_date = $data[CREATED_DATE]; 
		$this->ar_status = $data[ARTICLE_STATUS];
		$this->ar_author_id =	$data[AUTHOR_CODE];
		$this->ar_approver_id = $data[APPROVED_USER];
	}

	function article_id(){
		echo $this->ar_id;
	}

	function article_title(){
		
		echo $this->ar_title;
	}

	function article_section(){
		echo $this->ar_section;
	}

	function article_section_url(){
		echo $this->ar_section_url;
	}

	function article_sub_section(){
		echo $article_sub_section;
	}

	function article_url(){
		echo $this->ar_url;
	}

	function article_description(){
		echo $this->ar_description;
	}

	function article_keywords(){
		echo $this->ar_keywords;
	}

	function article_image(){
		echo $this->ar_image;
	}

	function article_image_small(){
		echo $this->ar_image_small;
	}

	function article_published_data(){
		echo date('F jS Y',strtotime($this->ar_created_date));
	}

	function article_content(){
		echo $this->ar_content;
	}

	function article_create_date(){
		echo date('F jS Y',strtotime($this->ar_created_date)); 
	}

	function article_status(){
		echo $this->ar_created_date;
	}

}

?>