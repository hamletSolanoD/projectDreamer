<?php
require 'Validator.php';
$config = require 'config.php';
$db = new Database($config["database"], $_ENV["userDB"], $_ENV["passwordDB"]);

$heading = "New Book";
if ($_SERVER['REQUEST_METHOD'] === "POST") {
    $errors = [];
    if (!Validator::string($_POST["body"], 1, 1000)) {
        $errors['body'] = 'A body of no more than 1,000 characters is required.';
    }
    if (empty($errors)) {
        $db->query('INSERT INTO books(title,description, user_id) VALUES(:title,:description, :user_id)', [
            'title' => $_POST['title'],
            'description' => $_POST['description'],
            'user_id' => 1
        ]);
    }
}

require 'views/books/create.view.php';
