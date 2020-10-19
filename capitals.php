<?php
	$eu = array( "Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=> "Brussels",
	"Denmark"=>"Copenhagen", "Finland"=>"Helsinki", "France" => "Paris", "Slovakia"=>"Bratislava",
	"Slovenia"=>"Ljubljana", "Germany" => "Berlin", "Greece" => "Athens", "Ireland"=>"Dublin",
	"Netherlands"=>"Amsterdam", "Portugal"=>"Lisbon", "Spain"=>"Madrid", "Sweden"=>"Stockholm",
	 "United Kingdom"=>"London", "Cyprus"=>"Nicosia", "Lithuania"=>"Vilnius",
	"Czech Republic"=>"Prague", "Estonia"=>"Tallin", "Hungary"=>"Budapest", "Latvia"=>"Riga",
	"Malta"=>"Valetta", "Austria" => "Vienna", "Poland"=>"Warsaw") ;


  include_once 'seguretat.php';
  include 'plantilles/cap.php';
  include 'plantilles/menu.php';
   $_SESSION['comptadors'][2]++;
?>

<div class="container">	
  <?php 
	foreach ($eu as $key => $value) {
	  	    echo "La capital de ".$key." es ".$value."<br>";
	}

 ?>
</div>

<?php 
   include 'plantilles/peu.php' 
?>




