<?php
  $user = $_POST['user']; //get input text
  $pass = $_POST['password'];
  
  include_once '../service/service_user.php';

  $query = save_user($user, $pass);

  if ($query == TRUE) {
      $_SESSION['fail'] = FALSE;
        header('location:login.php');
  } else {
        $_SESSION['fail'] = TRUE;
        header('location:registro.php');
  }
  ?>