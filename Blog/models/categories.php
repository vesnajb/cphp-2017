
<?php

include_once('../config/db.php');

function get_blog_categories(){
	$sql = 'select * from categories';
	$query = DB::Get()->query($sql);
	$query->execute();
	return $query->fetchAll(PDO::FETCH_ASSOC);
}

function add_blog_categories($data){
	$sql = 'insert into categories (category) values (:category)';
	
	$query = DB::Get()->prepare($sql);
	$query->bindValue(':category', $_POST['category'], PDO::PARAM_STR);
	$query->execute();
}


?>