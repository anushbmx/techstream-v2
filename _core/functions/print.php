<?php 
/*
* Contains the functions dealing with intenal processing and produces a HTML out put on its own 
*/


function pagination($limit, $start=0, $url = NULL, $option = FALSE) {

/**
*  Last Published Article
*
* Returns the unique ID of last Published article according to calender
*
* Arguments ( $selection , <category> )
* --------------------------------------
*
* $url 		 -> Url for 
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

	$current_page = $start / $limit ;
	if($current_page < 2 )
		$current_page = 1;

	$func_num_args = func_num_args();
	$func_get_args = func_get_args(); 

	unset($func_get_args[0]);
	unset($func_get_args[1]);
	unset($func_get_args[2]);
	unset($func_get_args[3]);

	if($option == true){
		if($func_num_args > 3){
			$fields =' SEC = \''.implode('\' OR SEC = \'',$func_get_args).'\'';
			$query= "SELECT COUNT(SL_NO) FROM data WHERE $fields AND STATUS=1 AND TYPE = 0";
		}else
			return 0;
	}else{
		if($func_num_args>3){
			$fields =' SEC != \''.implode('\' AND SEC != \'',$func_get_args).'\'';
			$query= "SELECT COUNT(SL_NO) FROM data WHERE $fields AND STATUS=1 AND TYPE = 0";
		}else
			$query= "SELECT COUNT(SL_NO) FROM data WHERE STATUS=1 AND TYPE = 0";
	}


	$data =mysql_query($query);

	$posts_per_page = $limit;
	$numposts = mysql_result($data,0);

	$max_page = ceil($numposts/$posts_per_page);
	$pages_to_show = 6;

	$custom_range = round($pages_to_show/2);

	if($max_page > 1) {
		echo '<nav class="pagination"><ul><li>Page '.$current_page.' of '.$max_page.' : </li>';
		if($current_page!= 1){
			echo '<li><a ';
			if($current_page!=2){
				echo 'href="'.$url.'&page='.($current_page-1).'"';
			}else{
				echo 'href="'.$url.'"'; 
			}
			echo '><i class="fa fa-chevron-left"></i></a></li>';
		}
		if ($current_page >= ($pages_to_show-1)) {
			echo '<li><a href="'.$url.'">1</a></li><li class="space">...</li>';
		}
		for($i = $current_page - $custom_range; $i <= $current_page + $custom_range; $i++){
			if ($i >= 1 && $i <= $max_page){
				if($i == $current_page) {
					echo '<li class="active"><a>'.$i.'</a></li>';
				}else{
					echo '<li><a ';
					if($i!=1){ echo 'href="'.$url.'&page='.$i.'"'; }else {echo 'href="'.$url.'"'; }
					echo '>'.$i.'</a></li>';
				}
			}
		}
		if (($current_page+$custom_range) < ($max_page))
			echo '<li class="space">...</li><li><a href="'.$url.'&page='.$max_page.'">'.$max_page.'</a></li>';
		
		if($current_page!= $max_page)
			echo '<li> <a href="'.$url.'&page='.($current_page+1).'"><i class="fa fa-chevron-right"></i></a></li>';
		echo '</ul></nav>';

	}
}

function categories_list($name = "All Articles") {

/**
*  Last Published Article
*
* Returns the unique ID of last Published article according to calender
*
* Arguments ( $selection , <category> )
* --------------------------------------
*
* $name 		 -> Url for 
*
**/
	$data = array();
	$query = "SELECT * FROM categories WHERE PARENT_SEC = 0000 AND ACTIVE = 1";

	$data =mysql_query($query);
	echo '<ul class="cat-list">';

	while($category_data = mysql_fetch_array($data, MYSQL_ASSOC )){
		$cat_data = category_data($category_data['SL_NO']);
		echo '			<li> <a href="'.static_url('main',1).$cat_data->cat_url.'"';
		if($name == $cat_data->cat_name ) 
			echo 'class = "active" ';

		echo '>'.$cat_data->cat_name.'</a></li>';
	}
	echo '</ul>';	
}

function social_sharing($article_id) {

/**
* Social Sharing Links
*
* Social Sharing Links to Facebook, twitter, Google Plus and Linked In
*
* Arguments ( $article_id )
* --------------------------------------
*
* $article_id 		 -> Article ID
*
**/
	$article_id = sanatize($article_id);
	$data = article_data($article_id);

	echo '<ul class="article-sharing">';
	echo '	<li>Share it on :</li>';
	echo '	<li><i class="fa fa-facebook-square"></i><a href="http://www.facebook.com/sharer.php?u='.static_url('main',1).$data->ar_url.'&t='.str_replace(" ", "+", $data->ar_title).'" target="_blank" >facebook</a> | </li>';
	echo '	<li><i class="fa fa-twitter"><a href="http://twitter.com/intent/tweet?url='.static_url('main',1).$data->ar_url.'&text='.str_replace(" ", "+", $data->ar_title).'&via=techstream_org" target="_blank"></i>Twitter</a> | </li>';
	echo '	<li><i class="fa fa-google-plus-square"><a href="https://plus.google.com/share?url='.static_url('main',1).$data->ar_url.'" target="_blank" ></i>Google+</a></li>';
	//echo '	<li><i class="fa fa-linkedin"><a href="#"></i>Linked in</a></li>';
	echo '	<li class="top"><i class="fa fa-long-arrow-up"><a href="#top"></i> Back to Top</a></li>';
	echo '</ul>';
}

function article_author($article_id) {

/**
* Author Information
*
* Author Informaion box with social links
*
* Arguments ( $article_id )
* --------------------------------------
*
* $article_id 		 -> Article ID
*
**/

	$article_id = sanatize($article_id);
	$data = article_data($article_id);
	$user_data = user_data($data->ar_author_id);


	echo '<div class="about-author">';
    echo '	<div class="row">';
    echo '		<h4 class="section-heading" >About the Author</h4>';
    echo '		<div class="column-xsmall-2 padd0 author-avatar"><img src="'.static_url('img',1).'avatars/'.$user_data['avatar'].'"></div>';
    echo '		<div class="column-xsmall-10">';
    echo '			<h3 itemprop="author" >'.$user_data['first_name'].'</h3>';
    echo '			<p>'.$user_data['About_Author'].'</p>';
    echo '			<ul class="author-social">';
    if(empty($user_data['TW'])==false)
    	echo '				<li><a href="http://twitter.com/"'.$user_data['TW'].'><i class="fa fa-twitter"></i></a></li>';

    if(empty($user_data['FB'])==false)
  		echo '				<li><a href="http://facebook.com/'.$user_data['FB'].'"><i class="fa fa-facebook"></i></a></li>';

    if(empty($user_data['DB'])==false)
    	echo '				<li><a href="http://dribbble.com/'.$user_data['FB'].'"><i class="fa fa-dribbble"></i></a></li>';

    echo '<li><a href="https://plus.google.com/u/0/'.$user_data['GPLUS'].'?rel=author"><i class="fa fa-google-plus"></i></a></li>';
    echo '			</ul>';
    echo '		</div>';
    echo '	</div>';
    echo '</div>';
}

function post_list($article_id) {

/**
* Post List Printing
*
* Prints Posts in list templates
*
* Arguments ( $article_id )
* --------------------------------------
*
* $article_id 		 -> Article ID
*
**/

	if(isset($article_id) == true):
		$data = article_data($article_id);

		echo '<div class="row">';
		echo '	<div class="column-xsmall-3 padd0 post-image-small"><a href="'.static_url('main',1).$data->ar_url.'" class="post-title-a"><img src="'.static_url('img',1).$data->ar_image_small.'"></a></div>';
		echo '	<div class="column-xsmall-9">';
		echo '		<h3 class="post-list-title"><a href="'.static_url('main',1).$data->ar_url.'" class="post-title-a">'.$data->ar_title.'</a></h3>';
		echo '		<p>'.elliStr($data->ar_description,200).' .. <a href="'.static_url('main',1).$data->ar_url.'">Read More</a></p>';
		echo '		<p class="article-add-info">Posted in <a href="'.static_url('main',1).$data->ar_section_url.'">'.$data->ar_section.'</a>  | <i class="fa fa-calendar"></i> '.date('F jS Y',strtotime($data->ar_created_date)).' | <i class="fa fa-comment"></i> <a href="'.static_url('main',1).$data->ar_url.'#disqus_thread">Comments</a></p>';
		echo '	</div>';
		echo '</div>';
	else:
		echo '<div class="row">';
		echo '	<div class="column-xsmall-3 padd0 post-image-small"> <img src="images/5-Elements-of-Websites-that-Convert-110.jpg"></div>';
		echo '	<div class="column-xsmall-9">';
		echo '		<h3 class="post-list-title"><a href="#" class="post-title-a">No Posts Found</a></h3>';
		echo '		<p>No posts Found</p>';
		echo '		<p class="article-add-info">No data</p>';
		echo '	</div>';
		echo '</div>';
	endif;

}

function bits_list($article_id) {

/**
* Bits List Printing
*
* Prints Bits in list templates
*
* Arguments ( $article_id )
* --------------------------------------
*
* $article_id 		 -> Article ID
*
**/
	if(isset($article_id) == true):
		$data = article_data($article_id);
		echo '<a href="'.static_url('main',1).$data->ar_url.'">';
		echo '	<h3 class="bit-title">'.$data->ar_title.'</h3>';
		echo '	<span class="section-link">'.$data->ar_sub_section.'</span>';
		echo '</a>';
	else:
		echo '<a href="#">';
		echo '	<h3 class="bit-title">No Data Found</h3>';
		echo '	<span class="section-link">No data Found</span>';
		echo '</a>';
	endif;

}

?>





