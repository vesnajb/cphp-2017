<?php

include_once('../config/db.php');

function get_blog_posts_category_link(){
	$sql = 'select * from posts_category_link';
	$query = DB::Get()->query($sql);
	$query->execute();
	return $query->fetchAll(PDO::FETCH_ASSOC);
}

function add_blog_post($data){
	$sql = 'insert into posts_category_link (pid, cid) values (:pid, :cid)';
	$query = DB::Get()->prepare($sql);
	$query->blindValue(':pid', $data['pid'], PDO::PARAM_INT);
	$query->blindValue(':cid', $data['cid'], PDO::PARAM_INT);
	$query->execute();
}


?>