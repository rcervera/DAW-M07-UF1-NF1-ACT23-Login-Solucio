<?php

session_start();
// comprovem que tenim enregistrat a la sessió el usuari validat
if(!isset($_SESSION['username']) ) {
   $_SESSION['error'] = "És necessari validar-te com usuari";
   header('Location: formLogin.php');
   exit;      
} 

?>
