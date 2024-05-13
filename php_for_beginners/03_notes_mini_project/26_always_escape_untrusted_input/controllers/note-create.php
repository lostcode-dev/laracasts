<?php

$header = 'Create a note';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $db = new Database();

    $db->query(
        "INSERT INTO notes (body, user_id) VALUES (:body, :user_id)",
        [':body' => $_POST['body'], ':user_id' => 1]
    );
}

require "views/note-create.view.php";
