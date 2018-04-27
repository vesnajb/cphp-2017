<?php 
$username = 'root';
$password = 'root';
$host = '127.0.0.1';
$dbname = 'blog';
// dsn - data source name
$dsn = 'mysql:host='.$host.';dbname='.$dbname;
// PDO - php data object
$DB = new PDO($dsn, $username, $password);
$isValid = 	isset($_POST['title'])
			&& $_POST['title'] != ''
			&& isset($_POST['content'])
			&& $_POST['content'] != '';
if($isValid) {
	$publish_date = date('Y-m-d H:i:s');
	$permalink = str_replace(" ", "-", strtolower($_POST['title']));
	$sql = 'insert into posts (title, content, publish_date, permalink) values (:title, :content, :publish_date, :permalink)';
	$query = $DB->prepare($sql);
	$query->bindValue(':title', $_POST['title'], PDO::PARAM_STR);
	$query->bindValue(':content', $_POST['content'], PDO::PARAM_STR);
	$query->bindValue(':publish_date', $publish_date, PDO::PARAM_STR);
	$query->bindValue(':permalink', $permalink, PDO::PARAM_STR);
	$query->execute();
}
$sql = "select * from posts";
$query = $DB->query($sql);
$query->execute();
$res = $query->fetchAll(PDO::FETCH_ASSOC);
?>

<form action="db3.php" method="post">
	<input type="text" name="title" placeholder="title">
	<textarea name="content" placeholder="content"></textarea>
	<button type="submit"> Save </button>
</form>

<table border="1" width="80%">
	<tr>
		<th>id</th>
		<th>title</th>
		<th>content</th>
		<th>permalink</th>
		<th>publish date</th>
	</tr>
	<?php foreach($res as $row){ ?>
	<tr>
		<td><?=$row['id'];?></td>
		<td><?=$row['title'];?></td>
		<td><?=$row['content'];?></td>
		<td><?=$row['permalink'];?></td>
		<td><?=$row['publish_date'];?></td>
	</tr>
	<?php } ?>
</table>
