<?php 

include('../models/posts.php');

$isValid = 	isset($_POST['title'])
			&& $_POST['title'] != ''
			&& isset($_POST['content'])
			&& $_POST['content'] != '';
if($isValid) {
	$publish_date = date("Y-m-d H:i:s");
	$permalink = str_replace(" ", "-", strtolower($_POST['title']));
	$data = ['title' => $_POST['title'],'permalink' => $permalink,'content' => $_POST['content'],'publish_date' =>$publish_date,'uid' => '','image' => '','image_thumbnail' => ''];
	add_blog_posts($data);
}

$res = get_blog_posts();
update_blog_posts();
delete_blog_posts();
?>

<table border="1" width="100%">
	<tr>
		<th>id</th>
		<th>title</th>
		<th>permalink</th>
		<th>content</th>
		<th>publish date</th>
		<th>uid</th>
		<th>image</th>
		<th>image thumbnail</th>
	</tr>
	<?php foreach($res as $row){ ?>
	<tr>
		<td><?=$row['id']?></td>
		<td><?=$row['title']?></td>
		<td><?=$row['permalink']?></td>
		<td><?=$row['content']?></td>
		<td><?=$row['publish_date']?></td>
		<td><?=$row['uid']?></td>
		<td><?=$row['image']?></td>
		<td><?=$row['image_thumbnail']?></td>
	</tr>
	<?php } ?>
</table>