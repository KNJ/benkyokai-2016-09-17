<?php

require_once __DIR__ . '/vendor/autoload.php';

$pdo = new PDO('sqlite::memory:');

// usersテーブル
$pdo->query("CREATE TABLE users(id integer, name text)");
$pdo->query("INSERT INTO users VALUES (1, 'Alice')");
$pdo->query("INSERT INTO users VALUES (2, 'Bob')");

// itemテーブル
$pdo->query("CREATE TABLE items(id integer, name text)");
$pdo->query("INSERT INTO items VALUES (1, 'mouse')");
$pdo->query("INSERT INTO items VALUES (2, 'keyboard')");

$model = new \App\Model($pdo);
$row = $model->find('users', 1);
var_dump($row);
