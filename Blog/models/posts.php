<?php

include_once('../config/db.php');

function get_blog_posts(){
	$sql = 'select * from posts';
	$query = DB::Get()->query($sql);
	$query->execute();
	return $query->fetchAll(PDO::FETCH_ASSOC);
}

function add_blog_posts($data){
	$publish_date = date("Y-m-d H:i:s");
	$permalink = str_replace(" ", "-", strtolower($_POST['title']));
	$sql = 'insert into posts (title, permalink, content, publish_date, uid, image) values (:title, :permalink, :content, :publish_date, :uid, :image)';
	
	$query = DB::Get()->prepare($sql);
	$query->bindValue(':title', $data['title'], PDO::PARAM_STR);
	$query->bindValue(':permalink', $permalink, PDO::PARAM_STR);
	$query->bindValue(':content', $data['content'], PDO::PARAM_STR);
	$query->bindValue(':publish_date', $publish_date, PDO::PARAM_STR);
	$query->bindValue(':uid', $data['uid'], PDO::PARAM_INT);
	$query->bindValue(':image', $data['image'], PDO::PARAM_STR);
	$query->execute();
}

function update_blog_posts(){
	$sql = 'UPDATE posts SET title="change" WHERE id=1';
	$query = DB::Get()->query($sql);
	$query->execute();
	return $query->fetchAll(PDO::FETCH_ASSOC);
}

function delete_blog_posts(){
	$sql = 'DELETE FROM posts WHERE id=2';
	$query = DB::Get()->query($sql);
	$query->execute();
	return $query->fetchAll(PDO::FETCH_ASSOC);
}

?>

<form action="posts.php" method="post" autocomplete="off">
	<input type="text" name="title" placeholder="title" autocomplete="off">
	<textarea name="content" placeholder="content" autocomplete="off"></textarea>
	<button type="submit"> Save </button>
</form>