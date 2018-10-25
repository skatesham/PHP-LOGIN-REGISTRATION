<?php
    // Create Session
    session_start();

    // Get Values from Form Inputs
    $user = filter_input(INPUT_POST, 'user', FILTER_SANITIZE_SPECIAL_CHARS);
    

    $pass = $_POST['password'];
    $hash_pass = hash('sha256', $pass);

    // Acess to the database
    include 'service/mysql.php';
    $user = $mysqli->real_escape_string($user);
    $query = $mysqli->query("SELECT * FROM user WHERE u_user = '$user' AND u_pass = '$hash_pass'");
    if($query->num_rows) {
        $_SESSION['user'] = $user;
        $_SESSION['pass'] = $pass;
        $_SESSION['login'] = TRUE;
        header('location:index.php');
    } else {
        $_SESSION['failin'] = TRUE;
        header('location:login.php');
    }

?>


