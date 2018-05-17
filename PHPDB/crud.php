<?php 
$username = 'root';
$password = '';
$host = '127.0.0.1';
$dbname = 'blog';
// dsn - data source name
$dsn = 'mysql:host='.$host.';dbname='.$dbname;
// PDO - php data object
$DB = new PDO($dsn, $username, $password);
$sql_select = "select * from categories";
$sql_select_one = "select * from categories where id = :id";
$sql_update = "update categories set category = :category where id = :id";
$sql_insert = "insert into categories (category) values (:category)";
$sql_delete = "delete from categories where id = :id";
if(isset($_GET['cid']) && strlen($_GET['cid']) > 0){
	$q_delete = $DB->prepare($sql_delete);
	$q_delete->bindValue(':id', $_GET['cid'], PDO::PARAM_INT);
	$q_delete->execute();
}
if(isset($_GET['edit']) && strlen($_GET['edit']) > 0){
	$q_select_one = $DB->prepare($sql_select_one);
	$q_select_one->bindValue(':id', $_GET['edit'], PDO::PARAM_INT);
	$q_select_one->execute();
	$sc = $q_select_one->fetchAll(PDO::FETCH_ASSOC)[0];
}
if(isset($_POST['action']) && $_POST['action'] == 'update'){
	$q_update = $DB->prepare($sql_update);
	$q_update->bindValue(':id', $_POST['id'], PDO::PARAM_INT);
	$q_update->bindValue(':category', $_POST['category'], PDO::PARAM_STR);
	$q_update->execute();
}
$query = $DB->query($sql_select);
$query->execute();
$categories = $query->fetchAll(PDO::FETCH_ASSOC);
?>

<?php if(isset($sc)){ ?>
<form action="crud.php" method="post">
	<input type="hidden" name="id" value="<?=$sc['id']?>">
	<input type="text" name="category" value="<?=$sc['category']?>">
	<button type="submit" name="action" value="update">Edit</button>
</form>
<?php } ?>

<table border="1" width="50%">
	<tr>

		<th>Category name</th>
		<th>Edit</th>
		<th>Delete</th>
	</tr>
	<?php foreach($categories as $c){ ?>
	<tr>

		<td><?=$c['category']?></td>
		<td>
			<a href="crud.php?edit=<?=$c['id']?>">EDIT</a>				
		</td>
		<td>
			<a href="crud.php?cid=<?=$c['id']?>">DELETE</a>				
		</td>
	</tr>
	<?php } ?>
</table>