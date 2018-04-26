<?php

include_once('../config/db.php');

function get_blog_users(){
	$sql = 'select * from users';
	$query = DB::Get()->query($sql);
	$query->execute();
	return $query->fetchAll(PDO::FETCH_ASSOC);
}

function add_blog_users($data){
	$sql = 'insert into users (firstname, lastname, email, password) values (:firstname, :lastname, :email, :password)';

	$query = DB::Get()->prepare($sql);
	$query->bindValue(':firstname', $_POST['firstname'], PDO::PARAM_STR);
	$query->bindValue(':lastname', $_POST['lastname'], PDO::PARAM_STR);
	$query->bindValue(':email', $_POST['email'], PDO::PARAM_STR);
	$query->bindValue(':password', $_POST['password'], PDO::PARAM_STR);
	$query->execute();
}


?>