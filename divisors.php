<?php 
 include_once 'seguretat.php';
  include 'plantilles/cap.php';
  include 'plantilles/menu.php';
   $_SESSION['comptadors'][1]++;
?>

<div class="container">	
	

<?php
 
$num1 = 50;
$num2 = 60;
echo("<table border=1");
	// primera fila
	echo "<tr>";
	echo "<td bgcolor='#7777FF'></td>";
	for($i=$num1; $i<=$num2; $i++)
	{
 		echo "<td bgcolor='#CCAAFF'>".$i."</td>";
	}
	echo "</tr>";

	// resta de les 10 files
 	for($i=1; $i<=10; $i++)
	{
		
		echo "<tr>";
		// primera columna
 		echo "<td bgcolor='#CCAAFF'>".$i."</td>";

 		//Seleccionem el color
		if($i%2==0)
		{
			$color = "#FFDDAA";
		}
		else
		{
			$color = "#FFFFAA";
		}

 		// divisors?
 		for($j=$num1; $j<=$num2; $j++)
		{
			if( (($j+50)%$i) == 0)
			{
				$valor="*";
			}
			else $valor ="-";
	 		echo "<td bgcolor='".$color."'>".$valor."</td>";
		}

 		echo "</tr>";
	}

 
echo("</table>");
 
 
?>
 
</div>

<?php 
   include 'plantilles/peu.php' 
?>