<?php

include('../models/posts_category_link.php');

$isValid = 	isset($_POST['pid'])
			&& $_POST['pid'] != ''
			&& isset($_POST['cid'])
			&& $_POST['cid'] != '';

if($isValid) {
	$data = ['pid' => $_POST['pid'],'cid' => $_POST['cid']];
	add_blog_post($data);
}

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