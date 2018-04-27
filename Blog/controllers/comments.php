<?php

include('../models/comments.php');

$isValid = 	isset($_POST['author'])
			&& $_POST['author'] != ''
			&& isset($_POST['comment'])
			&& $_POST['comment'] != '';

if($isValid) {
	$data = ['author' => $_POST['author'],'comment' => $_POST['comment'], 'publish_date' =>$_POST['publish_date'],'uid' => $_POST['uid'],'pid' => $_POST['pid']];
	add_blog_post($data);
}

$res = get_blog_comments();

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
			<td><?=$row['publish_date']; ?></td>
			<td><?=$row['pid']; ?></td>
		</tr>
	<?php } ?>
</table>