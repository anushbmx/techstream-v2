<?php 

function array_sanatize(&$item){
	$item=htmlentities(mysql_real_escape_string($item));
}

function sanatize($data){
	return mysql_real_escape_string($data);
}
	
function elliStr($s,$n) {
	for ( $x = 0; $x < strlen($s); $x++ ) {
		$o = ($n+$x >= strlen($s)? $s : ($s{$n+$x} == " "?
		substr($s,0,$n+$x) . "" : ""));
		if ( $o!= "" ) { return $o; }
	}
} 

function static_url($data = 'images', $print = 0 ){
    if(strcmp($data, 'images') == 0)
        $url =  "http://ns2.techstream.org/images/";
    elseif (strcmp($data, 'img') == 0) 
        $url =  "http://ns2.techstream.org/";
    else
        $url =  "http://next.techstream.org/";

    if($print == 0){
        echo $url;
    }else{
        return $url;
    }
}

	
?>