<?php
$t=array(
	array(1,2,3),
	array(4,5,6),
	array(7,8,9));
	
echo "<h2>matrix</h2>";
for($r=0;$r<3;$r++)
{	
	echo"<br>";
	for($c=0;$c<3;$c++)
		echo" ". $t[$r][$c];
}	
echo "<h2>transpose matrix</h2>";
for($r=0;$r<3;$r++)
{	
	echo"<br>";
	for($c=0;$c<3;$c++)
		echo" ".$t[$c][$r];
}	

?>