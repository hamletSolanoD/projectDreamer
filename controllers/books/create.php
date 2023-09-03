<?php
require 'Validator.php';
$config = require 'config.php';
$db = new Database($config["database"], $_ENV["userDB"], $_ENV["passwordDB"]);

$heading = "New Book";
if ($_SERVER['REQUEST_METHOD'] === "POST") {
    $errors = [];
    if (!Validator::string($_POST["book_title"], 1, 1000)) {
        $errors['book_title'] = 'A book_title of no more than 1,000 characters is required.';
    }
    if (!Validator::string($_POST["book_desc"], 1, 1000)) {
        $errors['book_desc'] = 'A book_desc of no more than 1,000 characters is required.';
    }
    
    if (empty($errors)) {
        $db->query('INSERT INTO books(book_title, book_desc, user_id) VALUES(:book_title, :book_desc, :user_id)', [
            'book_title' => $_POST['book_title'],
            'book_desc' => $_POST['book_desc'],
            'user_id' => 1
        ]);
    }
}

require 'views/books/create.view.php';
