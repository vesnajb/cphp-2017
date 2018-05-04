<?php

include('../models/comments.php');

$isValid = 	isset($_POST['author'])
			&& $_POST['author'] != ''
			&& isset($_POST['comment'])
			&& $_POST['comment'] != '';

if($isValid) {
	$publish_date = date("Y-m-d H:i:s");
	$data = ['author' => $_POST['author'],'comment' => $_POST['comment'], 'publish_date' =>$publish_date];
	add_blog_comments($data);
}

$res = get_blog_comments();
update_blog_comments();
delete_blog_comments();

?>

<table border="1" width="60%">
	<tr>
		<th>id</th>
		<th>author</th>
		<th>comment</th>
		<th>publish date</th>
		<th>pid</th>
	</tr>
		<?php foreach($res as $row){ ?>
		<tr>
			<td><?=$row['id']; ?></td>
			<td><?=$row['author']; ?></td>
			<td><?=$row['comment']; ?></td>
			<td><?=$row['publish_date']; ?></td>
			<td><?=$row['pid']; ?></td>

		</tr>
	<?php } ?>
</table>