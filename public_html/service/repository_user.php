<?php
include_once 'mysql.php';

function save_user_repo($user, $pass){
	$mysqli = $GLOBALS['mysqli']; 
	$hash_pass = hash('sha256', $pass);
    $user = $mysqli->real_escape_string($user);
    $query = $mysqli->query("SELECT * FROM user WHERE u_user = '$user' AND u_pass = '$hash_pass'");
   	return $query;
}

function read_user_repo($user, $pass){
	$mysqli = $GLOBALS['mysqli'];

	$user = $mysqli->real_escape_string($user);

	$sql = "INSERT INTO user(u_user, u_pass) VALUES ( '$user' , '$pass' );";

	$query = $mysqli->query($sql);

	return $query;
}

?>