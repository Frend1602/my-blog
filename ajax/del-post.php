<?php
require_once "../db/db.php";

$id = $_POST['delete_post'];
$pdo->query("DELETE FROM posts WHERE id = '$id'");

header("location: /auth.php");