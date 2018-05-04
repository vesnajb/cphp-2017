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
function update_blog_users(){
	$sql = 'UPDATE users SET lastname="change" WHERE id=1';
	$query = DB::Get()->query($sql);
	$query->execute();
	return $query->fetchAll(PDO::FETCH_ASSOC);
}
function delete_blog_users(){
	$sql = 'DELETE FROM users WHERE id=3';
	$query = DB::Get()->query($sql);
	$query->execute();
	return $query->fetchAll(PDO::FETCH_ASSOC);
}

?>
<form action="users.php" method="post" autocomplete="off">
	<input type="text" name="firstname" placeholder="firstname" autocomplete="off">
	<input type="text" name="lastname" placeholder="lastname" autocomplete="off">
	<input type="email" name="email" placeholder="email" autocomplete="off">
	<input type="password" name="password" placeholder="password" autocomplete="off">
	<button type="submit"> Save </button>
</form>