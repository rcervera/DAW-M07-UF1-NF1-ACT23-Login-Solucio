<?php 
 include_once 'seguretat.php';
  include 'plantilles/cap.php';
  include 'plantilles/menu.php';

  $_SESSION['comptadors'][0]++;
?>

<div class="container">	
	

<?php
$numero=7;
echo "<h1>Taula de multiplicar del numero $numero</h1>";
echo "<table>";
for($i=1;$i<=10;$i++)
{
   echo "<tr>";
   echo "<td>".$i."</td><td>*</td><td>".$numero."</td><td>=</td><td>".$i*$numero."</td>";
   echo "</tr>";
}
echo "</table>";
?>

</div>

<?php 
   include 'plantilles/peu.php' 
?>