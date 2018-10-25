<?php
// db Connection
$mysqli = new mysqli('192.168.1.11', 'php', 'fatec123', 'pagephp');

/* check connection */
if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}
//echo "Connection Success";
?>