<?php
include_once 'seguretat.php';
include 'plantilles/cap.php';
include 'plantilles/menu.php';
?>

<?php
	if(!isset($_SESSION['comptadors'])) {
		$_SESSION['comptadors'] = array(0,0,0);
	}
?>

<div class="container">
  <h3>Benvingut <?php  echo $_SESSION['username'];  ?></h3>
  <p> Petita Aplicació per utilitzar sessions i validació d'usuaris</p>
  <p>
  	La pàgina "Taula del 7" ha estat visitada <?php echo $_SESSION['comptadors'][0]; ?>
  </p>
  <p>
  	La pàgina "Divisors" ha estat visitada <?php echo $_SESSION['comptadors'][1]; ?>
  </p>
  <p>
  	La pàgina "Capitals" ha estat visitada <?php echo $_SESSION['comptadors'][2]; ?>
  </p>


</div>


<?php
  include 'plantilles/peu.php';
?>


