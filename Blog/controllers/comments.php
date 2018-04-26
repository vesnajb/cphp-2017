<?php

include('../models/comments.php');

$res = get_blog_comments();

?>

<table border="1" width="60%">
	<tr>
		<th>id</th>
		<th>author</th>
		<th>comment</th>
		<th>publish_date</th>
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