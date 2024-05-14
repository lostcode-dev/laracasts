<?php
use Core\Database;
use Core\Validator;

$header = 'Create a note';
$errors = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $db = new Database();

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

view("notes/create.view.php", [
    'header' => 'Create Note',
    'errors' => $errors
]);
