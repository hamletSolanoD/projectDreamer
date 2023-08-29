<?php
$config = require('config.php');
$db = new Database($config["database"], $_ENV["userDB"], $_ENV["passwordDB"]);

$heading = "My Books";
$books = $db->query("select * from books where user_id = 1");

include("views/books/index.view.php");
