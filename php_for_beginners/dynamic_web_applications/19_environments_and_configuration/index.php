<?php
require "class/Database.php";
require "functions.php";
//require "router.php";

$db = new Database();

$posts = $db->query("SELECT * FROM posts")->fetchAll();
$post = $db->query("SELECT * FROM posts where id = 1")->fetch();

foreach ($posts as $post) {
    echo "<li>" . $post['title'] . "</li>";
}

echo "<li>" . $post['title'] . "</li>";
