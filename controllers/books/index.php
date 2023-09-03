<?php
$config = require(base_path('/config.php'));
$db = new Database($config["database"], $_ENV["userDB"], $_ENV["passwordDB"]);

$heading = "My Books";
$books = $db->query("select * from books where user_id = 1")->get();

view("/books/index.view.php",
[
        "heading"=> $heading,
        "books" => $books

]);
