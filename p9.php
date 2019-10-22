<?php
	$allst="Mississippi Alabama Texas Massuchutes Kansas";
	$starr=[];
	$s1=explode(' ',$allst);
	$i=0;
	foreach($s1 as $s){
		if(preg_match('/xas$/',($s))){
			$starr[$i]=$s;
			$i=$i+1;
		    echo"\nthe state that ends with xas: ".$s;
		}
	}
	foreach($s1 as $s){
		if(preg_match('/^k.*s$/i',($s))){
			$starr[$i]=$s;
			$i=$i+1;
		    echo"<br>\nthe state that begins with k & ends with s: ".$s;
		}
	}
	foreach($s1 as $s){
		if(preg_match('/^M.*s$/',($s))){
			$starr[$i]=$s;
			$i=$i+1;
		    echo"<br>\nthe state that begin with M & ends with s: ".$s;
		}
	}
	foreach($s1 as $s){
		if(preg_match('/^M.*i$/',($s))){
			$starr[$i]=$s;
			$i=$i+1;
		    echo"<br>\nthe state that begins with M & ends with i: ".$s;
		}
	}
	$i=0;
	foreach($starr as $s){
		echo"<br>the ".$i." element in starr: ".$s;
		$i=$i+1;
	}
?>