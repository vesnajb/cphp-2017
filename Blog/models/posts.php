<?php

include_once('../config/db.php');

function get_blog_posts(){
	$sql = 'select * from posts';
	$query = DB::Get()->query($sql);
	$query->execute();
	return $query->fetchAll(PDO::FETCH_ASSOC);
}

function add_blog_post($data){
	$sql = 'insert into posts (title, permalink, content, publish_date, uid, image) values (:title, :permalink, :content, :publish_date, :uid, :image)';
	$query = DB::Get()->prepare($sql);
	$query->blindValue(':title', $data['title'], PDO::PARAM_STR);
	$query->blindValue(':permalink', $data['permalink'], PDO::PARAM_STR);
	$query->blindValue(':content', $data['content'], PDO::PARAM_STR);
	$query->blindValue(':publish_date', $data['publish_date'], PDO::PARAM_STR);
	$query->blindValue(':uid', $data['uid'], PDO::PARAM_INT);
	$query->blindValue(':image', $data['image'], PDO::PARAM_STR);
	$query->execute();
}


?>