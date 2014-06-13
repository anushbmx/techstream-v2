<?php 
/*
* Contains the functions dealing with intenal processing and produces a HTML out put on its own 
*/


function pagination($limit, $start=0,$option = FALSE) {

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
	//unset($func_get_args[3]);

	if($option == true){
		if($func_num_args > 3){
			$fields =' SEC = \''.implode('\' OR SEC = \'',$func_get_args).'\'';
			$query= "SELECT COUNT(SL_NO) FROM data WHERE $fields AND ARTICLE_STATUS=1";
		}else
			return 0;
	}else{
		if($func_num_args>3){
			$fields =' SEC != \''.implode('\' AND SEC != \'',$func_get_args).'\'';
			$query= "SELECT COUNT(SL_NO) FROM data WHERE $fields AND ARTICLE_STATUS=1";
		}else
			$query= "SELECT COUNT(SL_NO) FROM data WHERE ARTICLE_STATUS=1";
	}


	$data =mysql_query($query);

	$total_post = mysql_result($data,0);
	$total_page = ceil($total_post/$limit);

	$current_pages_to_show = 3;
	$custom_range = round($current_pages_to_show/2);										// _________________ DOC __________________________

	if($total_page > 1):
?>

<nav class="pagination">
	<ul>
		<li>Page <?php echo $current_page ?> of <?php echo $total_page ?> :</li>
<?php 
	if($current_page > 1):
?>
		<li><a href="<?php echo $url."?page=".($current_page-1) ?> "><i class="fa fa-chevron-left"></i></a></li>
<?php 
	endif; 
	if ($current_page >= ($current_pages_to_show-1)):
?>
		<li><a href="<?php echo $url ?>">1</a></li>
		<li class="space">...</li>
<?php 
	endif;
	for($i = $current_page - $custom_range; $i <= $current_page + $custom_range; $i++) {
		if ($i > 1 && $i <= $total_page) {
			if($i == $current_page) {
				echo "<li class='active'><a>$i</a></li>";
			}
			else {
				echo '<li><a ';

				if($i!=1)
					echo 'href="'.$url.'?page='.$i.'"';
				else
					echo 'href="'.$url.'"'; 

				echo '>'.$i.'</a></li>';
			}
		}
	}
	if (($current_page+$custom_range) < ($total_page)):
 ?>
		<li class="space">...</li>
		<li><a href="<?php echo $url."&page=".$total_page ?> "><?php echo $total_page ?></a></li>
<?php
	endif;
	if($current_page!= $total_page):
?>
		<li> <a href="<?php echo $url."?page=".($current_page + 1) ?>"><i class="fa fa-chevron-right"></i></a></li>
<?php endif; ?>
	</ul>
</nav>		
<?php
	endif;
}

?>


