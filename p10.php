<html>
<style>
	table,td,th{
		border:solid black;
		border-collapse:collapse;
		width:40%;
		background-color:lightcyan;
	}
	
</style>
</html>
<?php
$user="root";
$db="student";
$server="localhost";
$pwd="";
$a=[];
$conn=mysqli_connect($server,$user,$pwd,$db);
if($conn->connect_error)
	die("conn failed:".connect_error);
$sql="select * from stu";
$result=$conn->query($sql);
echo"<table>";
	echo"<tr>";
	echo"<th>usn</th><th>name</th><th>sem</th></tr>";
if($result->num_rows>0){	
while($r=$result->fetch_assoc())
{	
	echo"<tr>";
	echo"<td>".$r["usn"]."</td>";
	echo"<td>".$r["name"]."</td>";
	echo"<td>".$r["sem"]."</td></tr>";
	array_push($a,$r["usn"]);
}
}
else 
	echo"table is empty";
	echo"</table>";
$n=count($a);
for($i=0;$i<$n-1;$i++)
	for($j=0;$j<$n-$i-1;$j++)
	{
		if($a[$j]>$a[$j+1])
			{
				$temp=$a[$j];
				$a[$j]=$a[$j+1];
				$a[$j+1]=$temp;
			}
		}
$c=[];
$d=[];
$result=$conn->query($sql);
if($result->num_rows>0){	
	while($r=$result->fetch_assoc())
	{
		for($i=0;$i<$n;$i++)
		{
			if($r["usn"]==$a[$i])
			{
				$c[$i]=$r["name"];
				$d[$i]=$r["sem"];
			}
		}
	}
}
echo "<br>";
echo"after sorting";
echo"<table>";
	echo"<tr>";
	echo"<th>usn</th><th>name</th><th>sem</th></tr>";
	for($i=0;$i<$n;$i++)
	{
		echo"<tr>";
		echo"<td>".$a[$i]."</td>";
		echo"<td>".$c[$i]."</td>";
		echo"<td>".$d[$i]."</td></tr>";
	}
	echo"</table>";
	$conn->close();
?>