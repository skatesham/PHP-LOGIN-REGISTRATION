<?php
// db Connection

define("HOST", '192.168.1.11');
define("USER", 'php');
define("PASSWORD", 'fatec123');
define("DB", 'pagephp');

$mysqli = new mysqli(HOST, USER , PASSWORD, DB);

/* check connection */
if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}
//echo "Connection Success";
?>