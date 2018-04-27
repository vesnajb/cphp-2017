<?php

$username = 'root';
$password = 'root';
$host = '127.0.0.1';
$dbname = 'blog';

$dsn = 'mysql:host='.$host.';dbname='.$dbname;

$DB = new PDO($dsn, $username, $password);

$sql_posts = "select * from posts";
$posts = $DB->query($sql_posts); //priprema na querito
$posts->execute();
$res_posts = 
?>