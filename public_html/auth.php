<?php
    // Create Session
    session_start();
    $_SESSION['login'] = true;
    $_SESSION['user'] = true;
    header('location:index.php');
?>


