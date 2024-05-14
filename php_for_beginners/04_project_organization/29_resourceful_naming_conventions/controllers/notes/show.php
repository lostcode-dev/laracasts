<?php

$header = 'Note';

$id = $_GET['id'];
$currentUserId = 1;

$db = new Database();
$note = $db->query(
    "SELECT * FROM notes where id = :id",
    [':id' => $id]
)->finOrFail();

authorize($note['user_id'] === $currentUserId);

require "views/notes/show.view.php";
