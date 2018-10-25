<?php
include_once 'repository_user.php';

function save_user($user, $pass){
	$pass = hash('sha256', $pass);
	return save_user_repo($user, $pass);
}

function read_user($user, $pass){
	$pass = hash('sha256', $pass);
	return read_user_repo($user, $pass);
}

function teste(){
	$user = "louco1";
	$pass = "123";
	print("<hr>");
	//var_dump(save_user($user, $pass));

	var_dump(read_user($user, $pass)->row_num);
	//print("<hr>");
}
//teste();

?>