<?php
session_start();

$route = htmlspecialchars($_SERVER['PHP_SELF']);

if(isset($_POST['registro'])){ //check if form was submitted
  $user = $_POST['user']; //get input text
  $pass = $_POST['password'];
  
  include_once '../service/service_user.php';

  $query = save_user($user, $pass);

	if ($query) {
  		$_SESSION['fail'] = FALSE;
        header('location:login.php');
	} else {
        $_SESSION['fail'] = TRUE;
        header('location:registro.php');
        
	}

  // Fail POST
  if(isset($_SESSION['fail'])){
    if($_SESSION['fail']){
      echo "<script type='text/javascript'>fail();</script>";
    }
  }
}  
?>