<?php

	$fp=fopen("cntlog.txt","r");
	$count=fread($fp,10);
	fclose($fp);
	$count=$count+1;
	echo "page views: ".$count."</p>";
	$fp=fopen("cntlog.txt","w");
	fwrite($fp,$count);
	fclose($fp);


?>
