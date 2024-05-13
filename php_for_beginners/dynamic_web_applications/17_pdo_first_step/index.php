<?php

require "functions.php";
//require "router.php";

$dsn = 'mysql:host=localhost;dbname=myapp;';
$pdo = new PDO($dsn, 'root', '');

$statement = $pdo->prepare("SELECT * FROM posts");

$statement->execute();

$posts = $statement->fetchAll(PDO::FETCH_ASSOC);

foreach ($posts as $post) {
    echo "<li>" . $post['title'] . "</li>";
}