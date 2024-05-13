<?php

$header = 'Notes';

$db = new Database();
$notes = $db->query("SELECT * FROM notes where user_id = 1")->get();

require "views/notes.view.php";