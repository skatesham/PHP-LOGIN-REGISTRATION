<?php
    // Create Session
    session_start();

    // Get Values from Form Inputs
    $user = filter_input(INPUT_POST, 'user', FILTER_SANITIZE_SPECIAL_CHARS);
    $pass = $_POST['password'];

    // Acess to the database
    include_once '../service/service_user.php';

    $query = read_user($user, $pass);
    
    if($query->num_rows) {
        $_SESSION['user'] = $user;
        $_SESSION['login'] = TRUE;
        header('location:index.php');
    } else {
        $_SESSION['failin'] = TRUE;
        header('location:login.php');
    }

?>