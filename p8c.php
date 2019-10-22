<?php
$a1=array(
		array(1,2),
		array(3,4)
		);
$a2=array(
		array(1,2),
		array(3,4)
		);
$a=array();
for($r=0;$r<2;$r++)
		for($c=0;$c<2;$c++)
			$a[$r][$c]=$a1[$r][$c]+$a2[$r][$c];
		
//echo "array 1:</pre>";print_r($a1);
//echo "array 2:";print_r($a2);
echo "<pre/>";print_r($a);
?>