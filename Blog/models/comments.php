<?php

include_once('../config/db.php');

function get_blog_comments(){
	$sql = 'select * from comments';
	$query = DB::Get()->query($sql);
	$query->execute();
	return $query->fetchAll(PDO::FETCH_ASSOC);
}

function add_blog_comments($data){
	$publish_date = date("Y-m-d H:i:s");
	$sql = 'insert into comments (author, comment, publish_date, pid) values (:author, :comment, :publish_date, :pid)';

	$query = DB::Get()->prepare($sql);
	$query->bindValue(':author', $_POST['author'], PDO::PARAM_STR);
	$query->bindValue(':comment', $_POST['comment'], PDO::PARAM_STR);
	$query->bindValue(':publish_date', $publish_date, PDO::PARAM_STR);
	$query->bindValue(':pid', '', PDO::PARAM_INT);
	$query->execute();
}

function update_blog_comments(){
	$sql = 'UPDATE comments SET author="vasil" WHERE id=1';
	$query = DB::Get()->query($sql);
	$query->execute();
	return $query->fetchAll(PDO::FETCH_ASSOC);
}
function delete_blog_comments(){
	$sql = 'DELETE FROM comments WHERE id=2';
	$query = DB::Get()->query($sql);
	$query->execute();
	return $query->fetchAll(PDO::FETCH_ASSOC);
}

?>

<form action="comments.php" method="post" autocomplete="off">
	<input type="text" name="author" placeholder="title" autocomplete="off">
	<textarea name="comment" placeholder="comment" autocomplete="off"></textarea>
	<button type="submit"> Save </button>
</form>