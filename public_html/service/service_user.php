<?php
include_once 'repository_user.php';

function save_user($user, $pass){
	return save_user_repo($user, $pass);
}

function read_user($user, $pass){
	return read_user_repo($user, $pass);
}

?>