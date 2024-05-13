<?php

$header = 'Note';

$id = $_GET['id'];
$currentUserId = 1;

$db = new Database();
$note = $db->query(
    "SELECT * FROM notes where id = :id",
    [':id' => $id]
)->fetch();

if(!$note) {
    abort(Response::NOT_FOUND);
}

if ($note['user_id'] !== $currentUserId) {
    abort(Response::FORBIDDEN);
}

require "views/note.view.php";
