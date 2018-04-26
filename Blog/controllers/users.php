<?php

include('../models/users.php');

$res = get_blog_users();

?>

<table border="1" width="60%">
	<tr>
		<th>id</th>
		<th>firstname</th>
		<th>lastname</th>
		<th>email</th>
		<th>password</th>
		<th>avatar</th>
	</tr>
		<?php foreach($res as $row){ ?>
		<tr>
			<td><?=$row['id']; ?></td>
			<td><?=$row['firstname']; ?></td>
			<td><?=$row['lastname']; ?></td>
			<td><?=$row['email']; ?></td>
			<td><?=$row['password']; ?></td>
			<td><?=$row['avatar']; ?></td>
			
		</tr>
	<?php } ?>
</table>