<?php

$username = 'root';
$password = 'root';
$host = '127.0.0.1';
$dbname = 'blog';

// dsn - data sourse name
$dsn = 'mysql:host='.$host.';dbname='.$dbname;

//PDO - php data object vgradena klasa vo php

$DB = new PDO($dsn, $username, $password); // se povikuva constructorot vo pdo, constructor parametri

$isValid = isset($_POST['firstname'])
			&& $_POST['firstname'] != ''
			&& isset($_POST['lastname'])
			&& $_POST['lastname'] != ''
			&& isset($_POST['email'])
			&& $_POST['email'] != ''
			&& isset($_POST['password'])
			&& $_POST['password'] != '';

if ($isValid) {
	$sql = 'insert into users (firstname, lastname, email, password) values (:firstname, :lastname, :email, :password)'; //:firstname placeholder za zamena so realna vrednost

	$query = $DB->prepare($sql);

	$query->bindValue(':firstname', $_POST['firstname'], PDO::PARAM_STR);
	$query->bindValue(':lastname', $_POST['lastname'], PDO::PARAM_STR);
	$query->bindValue(':email', $_POST['email'], PDO::PARAM_STR);
	$query->bindValue(':password', $_POST['password'], PDO::PARAM_STR);

	$query->execute();
}


// $sql = 'insert into users (firstname, lastname, email, password) values (:firstname, :lastname, :email, :password)';

// $query = $DB->prepare($sql);

// $query->bindValue(':firstname', 'Pero', PDO::PARAM_STR);
// $query->bindValue(':lastname', 'Perovski', PDO::PARAM_STR);
// $query->bindValue(':email', 'pero@perovski.com', PDO::PARAM_STR);
// $query->bindValue(':password', 'tajna123', PDO::PARAM_STR);

// $query->execute();
// print_r($DB);

$sql = "select * from users";
$query = $DB->query($sql); //priprema na querito
$query->execute();// querito se izvrsuva vo mysql

// print_r($query->fetchAll(PDO::FETCH_ASSOC));

$res = $query->fetchAll(PDO::FETCH_ASSOC); //fetchall vraka niza od nizi

?>
<form action="db1.php" method="post" autocomplete="off">
	<input type="text" name="firstname" placeholder="firstname" autocomplete="off">
	<input type="text" name="lastname" placeholder="lastname" autocomplete="off">
	<input type="email" name="email" placeholder="email" autocomplete="off">
	<input type="password" name="password" placeholder="password" autocomplete="off">
	<button type="submit"> Save </button>
</form>

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
