<?php 
function sitemap($section,$subsection){
	if(is_numeric($subsection)){
		 $result=mysql_query("SELECT * FROM data where ( SEC ='$section')");
			 
	}else{
		 $result=mysql_query("SELECT * FROM data where ( SEC ='$section' and SUBSEC='$subsection')");
	}
	while($row = mysql_fetch_array($result, MYSQL_ASSOC )){
		echo "<li> <a href=\"http://techstream.org/".$row['LINK']."\">".$row['TITLE']."</a></li>";
	} 
}

function archives($section){
	echo "<div class=\"projects\">";
	 $result=mysql_query("SELECT * FROM data where ( SEC ='$section')");
	while($row = mysql_fetch_array($result, MYSQL_ASSOC )){
		echo "<p> <a href=\"http://techstream.org/".$row['LINK']."\"><time>".date('M-d-Y',strtotime($row['DATE'] ))."</time>".$row['TITLE']."</a></p>";
	} 
	echo "</div>";
}

function AllArticles($section,$subsection,$url){
	if(isset($url)==false){$url="index.php";}
	echo "<div id=\"archives\"> "; 
	if (isset($_GET["page"])) { $page  = $_GET["page"]; } else { $page=1; };
	$start_from = ($page-1) * 20;
	if(is_numeric($subsection)== false && is_numeric($section)== false){
		$rr=mysql_query("SELECT * FROM data where SEC='$section' and SUBSEC='$subsection' ORDER BY DATE DESC  LIMIT $start_from, 20");
	}elseif(is_numeric($section)==false){
		$rr=mysql_query("SELECT * FROM data where SEC='$section' ORDER BY DATE DESC  LIMIT $start_from, 20");
	}else{
		$rr=mysql_query("SELECT * FROM data ORDER BY DATE DESC  LIMIT $start_from, 20");
	}
	while($row = mysql_fetch_array($rr, MYSQL_ASSOC )){
		echo "<div class=\"ts-post\">";		//Image Holder
		echo" <a href=\"http://techstream.org/" .$row['LINK']. "\"><h5>".$row['TITLE']."</h5></a>";
		echo "<div class=\"image\"><a href=\"http://techstream.org/".$row['LINK']."\"><img src=\"http://ns2.techstream.org/".$row['IMG110']."\" alt=\"".$row['TITLE']."\"/></a></div>";		//Time 
		echo "<div class=\"detail\">Posted On<time>".date('M-d-Y',strtotime($row['DATE'] ))."</time></div>";// description tag
		echo "<div class=\"description\">";		
		echo"<p>".elliStr($row['DES'], 240)."......<a href=\"http://techstream.org/" .$row['LINK']. "\" class=\"read_more\">READ MORE</a>";
		echo"</div>"; 		// End of Description
		echo"</div> ";		//End of New Post
	}
	echo "</div>";
	// counting the page
	if(is_numeric($subsection)== false && is_numeric($section)== false){
		$rr=mysql_query("SELECT COUNT(TITLE) FROM data where SEC='$section' and SUBSEC='$subsection' ORDER BY DATE DESC  LIMIT $start_from, 20");
	}elseif(is_numeric($section)==false){
		$sql = "SELECT COUNT(TITLE) FROM data where SEC='$section'";
	}else{
		$sql = "SELECT COUNT(TITLE) FROM data";
	}
	
	$rs_result = mysql_query($sql);
	$row = mysql_fetch_row($rs_result);
	$total_records = $row[0];
	$total_pages = ceil($total_records / 20);	
	echo "\n<div id=\"page_numbers\">"; 
		echo "\n<ul>";
			echo"<li class=\"page_info\">Page 1 of $total_pages</li>";
			for ($i=1; $i<=$total_pages; $i++) {
				if($i==$page)
					echo "<li class=\"active_page\"><a href='".$url."?page=".$i."' >".$i."</a> </li>";
				else
					echo "<li><a href='".$url."?page=".$i."' >".$i."</a> </li>";
			};
		echo "\n</li>";
	echo "\n</div>";
		 
}

?>


