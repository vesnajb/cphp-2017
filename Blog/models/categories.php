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

function update_blog_categories(){
	$sql = 'UPDATE categories SET category="zivot" WHERE id=3';
	$query = DB::Get()->query($sql);
	$query->execute();
	return $query->fetchAll(PDO::FETCH_ASSOC);
}
function delete_blog_categories(){
	$sql = 'DELETE FROM categories WHERE id=2';
	$query = DB::Get()->query($sql);
	$query->execute();
	return $query->fetchAll(PDO::FETCH_ASSOC);
}

?>
<form action="categories.php" method="post" autocomplete="off">
	<input type="text" name="category" placeholder="title" autocomplete="off">
	<button type="submit"> Save </button>
</form>