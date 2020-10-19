<?php
session_start();
include 'plantilles/cap.php';
?>
<div class="container">
  
  <h2>User Login </h2>
  <form name="login" method="post" action="processaLogin.php">
	<div class="form-group">
    		<label for="username">Username</label>
    		<input type="text" class="form-control" name="username">
 	</div>
	<div class="form-group">
    		<label for="password">Password</label>
    		<input type="password" class="form-control" name="password">
 	</div>   	 

	<?php
	 
	   if(isset($_SESSION['error'])) {		  
		  echo '<div class="form-group">';
		  echo '<div class="alert alert-danger" role="alert">';
		  echo $_SESSION['error'];
		  echo '</div>';
		  echo '</div>';  
		  unset($_SESSION['error']);	     
	   }


	?>
	<button type="submit" class="btn btn-primary mb-2">Login</button>  
	</form>
	<div class="alert alert-dark" role="alert">
				per entrar pots utilitzar username: enric  password: z67yeeui
	</div>
</div>

<?php
	include 'plantilles/peu.php';
?>
