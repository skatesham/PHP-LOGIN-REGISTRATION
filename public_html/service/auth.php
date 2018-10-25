<?php
    // Create Session
    session_start([
        //'cookie_lifetime' => 86400,
        'cookie_lifetime' => 60,
    ]);

    $_SESSION['login'] = TRUE;
    header('location:/sistemaphp');
?>


