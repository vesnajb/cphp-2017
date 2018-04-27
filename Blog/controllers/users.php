<?php

include('../models/users.php');

$isValid = isset($_POST['firstname'])
			&& $_POST['firstname'] != ''
			&& isset($_POST['lastname'])
			&& $_POST['lastname'] != ''
			&& isset($_POST['email'])
			&& $_POST['email'] != ''
			&& isset($_POST['password'])
			&& $_POST['password'] != '';

if($isValid) {
	$data = ['firstname' => $_POST['firstname'],'lastname' => $_POST['lastname'],'email' => $_POST['email'],'password' =>$_POST['password'],'avatar' => $_POST['avatar']];
	add_blog_post($data);
}

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