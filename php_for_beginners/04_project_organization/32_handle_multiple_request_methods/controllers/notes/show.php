<?php

use Core\Database;

$header = 'Note';

$db = new Database();

$id = $_GET['id'];
$currentUserId = 1;

$note = $db->query(
    "SELECT * FROM notes where id = :id",
    [':id' => $id]
)->finOrFail();

authorize($note['user_id'] === $currentUserId);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $db->query(
        "DELETE FROM notes WHERE id = :id",
        [':id' => $_POST['id']]
    );

    header('location: /notes');
    exit;
} else {
    view("notes/show.view.php", [
        'header' => 'Notes',
        'note' => $note
    ]);
}
