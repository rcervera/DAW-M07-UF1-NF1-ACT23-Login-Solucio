<?php


function comprova_usuari($username, $password) {
  $claus = array ('enric'=>"z67yeeui", 'carles'=>"sdfe3sdf",'Manel'=>"axeeeldds23");
  if(isset($claus[$username]) && $claus[$username]==$password) return true;
  else return false;  
}

session_start();
if(isset($_POST['username']) && isset($_POST['password'])) { 	// Han enviat dades via POST
    $usuari = $_POST['username'];
    $password = $_POST['password'];
    
    if(comprova_usuari($usuari,$password)) {    // i dades són correctes
        
        // registrem el nom d'usuari a la sessió
        $_SESSION['username'] = $usuari;               
        // carreguem aplicació
        header('Location: index.php');
        
        
    } else {   // Username/Password incorrectes
       $_SESSION['error'] = "Usuari o password incorrectes"; 
       header('Location: formLogin.php');
    }
   
} else {     // 'Dades no enviades
      $_SESSION['error'] = "Has de validar-te";
      header('Location: formLogin.php');
}

?>
