<?php

$user = 'root';
$password = '';
$db = 'blog';
$host = 'MySQL-5.7';

$dsn = "mysql:host=$host;dbname=$db";
$pdo = new PDO($dsn, $user, $password);
