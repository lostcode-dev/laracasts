<?php
require "class/Database.php";
require "functions.php";
//require "router.php";

$db = new Database();

$posts = $db->query("SELECT * FROM posts")->fetchAll();

$id = $_GET['id'];

$query = "SELECT * FROM posts where id = :id";

$post = $db->query($query, [':id' => $id])->fetch();

foreach ($posts as $post) {
    echo "<li>" . $post['title'] . "</li>";
}

dd($post);