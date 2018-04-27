<?php

include('../models/categories.php');

$isValid = 	isset($_POST['category'])
			&& $_POST['category'] != '';
			
if($isValid) {
	$data = ['category' => $_POST['category']];
	add_blog_post($data);
}
$res = get_blog_categories();

?>

<table border="1" width="40%">
	<tr>
		<th>id</th>
		<th>category</th>
	</tr>
		<?php foreach($res as $row){ ?>
		<tr>
			<td><?=$row['id']; ?></td>
			<td><?=$row['category']; ?></td>
			
		</tr>
	<?php } ?>
</table>