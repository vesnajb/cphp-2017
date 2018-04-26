<?php

include('../models/posts_category_link.php');

$res = get_blog_posts_category_link();

?>

<table border="1" width="40%">
	<tr>
		<th>id</th>
		<th>pid</th>
		<th>cid</th>
	</tr>
		<?php foreach($res as $row){ ?>
		<tr>
			<td><?=$row['id']; ?></td>
			<td><?=$row['pid']; ?></td>
			<td><?=$row['cid']; ?></td>
		</tr>
	<?php } ?>
</table>