<?php

$header = 'Note';

$id = $_GET['id'];

$db = new Database();
$note = $db->query("SELECT * FROM notes where id = :id", [':id' => $id])->fetch();

require "views/note.view.php";