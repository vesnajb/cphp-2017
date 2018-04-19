<?php

$username = 'root';
$password = null;
$host = '127.0.0.1';
$dbname = 'blog';

// dsn - data sourse name
$dsn = 'mysql:host='.$host.';dbname='.$dbname;

//PDO - php data object vgradena klasa vo php

$DB = new PDO($dsn, $username, $password);

$isValid = isset($_POST['category'])
			&& $_POST['category'] != '';

if ($isValid) {
	$sql = 'insert into categories (category) values (:category)';

	$query = $DB->prepare($sql);

	$query->bindValue(':category', $_POST['category'], PDO::PARAM_STR);

	$query->execute();
}

$sql = "select * from categories";
$query = $DB->query($sql); //priprema na querito
$query->execute();// querito se izvrsuva vo mysql

// print_r($query->fetchAll(PDO::FETCH_ASSOC));

$res = $query->fetchAll(PDO::FETCH_ASSOC); //fetchall vraka niza od nizi

?>
<form action="domasna.php" method="post" autocomplete="off">
	<input type="text" name="category" placeholder="category" autocomplete="off">
	<button type="submit"> Save </button>
</form>

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
