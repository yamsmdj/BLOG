<?php

$pdo = new PDO('mysql:dbname=db_blog;host=localhost', 'root', '');

$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$res = $pdo->query('SELECT * FROM articles');

var_dump($res->FetchALl(PDO::FETCH_OBJ));
// $count = $pdo->exec('INSERT INTO articles SET titre="Mon titre", date="' . date('Y-m-d H:i:s') . '"');

// var_dump($count);
