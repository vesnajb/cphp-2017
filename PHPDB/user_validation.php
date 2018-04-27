<?php

$EMAIL = 'pero@perovski.com';
$PASSWORD = 'tajna123';

$username = 'root';
$password = 'root';
$host = '127.0.0.1';
$dbname = 'blog';

$dsn = 'mysql:host='.$host.';dbname='.$dbname;

$db = new PDO($dsn, $username, $password); 

$sql = "select id, email, password from users where email = :email and password = :password";// SQL
$query = $db->prepare($sql);// SQL
$query->bindValue(':email', $EMAIL);// SQL
$query->bindValue(':password', $PASSWORD);// SQL

$query->execute();//WORK

$user = $query->fetchAll(PDO::FETCH_ASSOC);// DATA

print_r($user);
?>