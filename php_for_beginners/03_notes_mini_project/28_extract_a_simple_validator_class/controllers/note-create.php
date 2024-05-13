<?php

require "class/Validator.php";

$header = 'Create a note';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $db = new Database();

    $errors = [];

    if (Validator::required($_POST['body'])) {
        $errors['body'] = 'A body is required.';
    }

    if (Validator::moreThan($_POST['body'], 255)) {
        $errors['body'] = 'The body cant be more than 255 characters.';
    }

    if (empty($errors)) {
        $db->query(
            "INSERT INTO notes (body, user_id) VALUES (:body, :user_id)",
            [':body' => $_POST['body'], ':user_id' => 1]
        );
    }
}

require "views/note-create.view.php";
