<?php
require "class/Database.php";
require "functions.php";
//require "router.php";

$db = new Database();
$posts = $db->query("SELECT * FROM posts")->fetchAll(PDO::FETCH_ASSOC);
$post = $db->query("SELECT * FROM posts where id = 1")->fetch(PDO::FETCH_ASSOC);

foreach ($posts as $post) {
    echo "<li>" . $post['title'] . "</li>";
}

echo "<li>" . $post['title'] . "</li>";
