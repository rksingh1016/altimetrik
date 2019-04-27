
//This program prints an array of 10 prime numbers and a table of 10x10
<?php
$count = 0 ;
$number = 2 ;
$prime_nos = array();
while ($count < 10 )
{
	$div_count=0;
	
	for ( $i=1;$i<=$number;$i++)
	{
	if (($number%$i)==0)
		{
		$div_count++;
		}
	}
	if ($div_count<3)
	{
	//echo $number." , ";
	$prime_nos[] = $number; 
	$count=$count+1;
	}
$number=$number+1;
}
for($i=0;$i<10;$i++){
echo $lijst[$i];
echo "<br>";
}

echo "<table border =\"1\" style='border-collapse: collapse'>";
	for ($row=1; $row <= 10; $row++) { 
		echo "<tr> \n";
		for ($col=1; $col <= 10; $col++) { 
		   $p = $col * $row;
		   echo "<td>$p</td> \n";
		   	}
	  	    echo "</tr>";
		}
		echo "</table>";
?>