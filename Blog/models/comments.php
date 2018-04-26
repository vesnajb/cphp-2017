<?php

include_once('../config/db.php');

function get_blog_comments(){
	$sql = 'select * from comments';
	$query = DB::Get()->query($sql);
	$query->execute();
	return $query->fetchAll(PDO::FETCH_ASSOC);
}

function add_blog_comments($data){
	$sql = 'insert into comments (author, comment, publish_date, pid) values (:author, :comment, :publish_date, :pid)';

	$query = DB::Get()->prepare($sql);
	$query->bindValue(':author', $_POST['author'], PDO::PARAM_STR);
	$query->bindValue(':comment', $_POST['comment'], PDO::PARAM_STR);
	$query->bindValue(':publish_date', $_POST['publish_date'], PDO::PARAM_STR);
	$query->bindValue(':pid', $_POST['pid'], PDO::PARAM_INT);
	$query->execute();
}


?>