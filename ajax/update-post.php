<?php
require_once "../db/db.php";

$id = $_POST['id'];
$title = trim(filter_var($_POST['title'],FILTER_SANITIZE_SPECIAL_CHARS)) ;
$preview = trim(filter_var($_POST['preview'],FILTER_SANITIZE_SPECIAL_CHARS)) ;
$text = trim(filter_var($_POST['text'],FILTER_SANITIZE_SPECIAL_CHARS)) ;
$file = $_FILES['file'];
$file_path = trim(filter_var($_POST['imgPath'],FILTER_SANITIZE_SPECIAL_CHARS));

if(!empty($file['name'])){
    move_uploaded_file($file['tmp_name'], "../img/" . $file['name']);
    $file_path = "img/" . $file['name'];
}

$error = "";
if(strlen($title) < 3) {
    $error = "Заголовок должен содержать более трех символов.";
}else if(strlen($text) < 5) {
    $error = "Текст статьи должен содержать более пяти символов.";
}else if(strlen($preview) < 5) {
    $error = "Превью статьи должно содержать более пяти символов.";
}

if($error != ""){
    echo $error;
    exit();
}

$sql = "UPDATE posts SET title = ?, preview = ?, text = ?,img = ? WHERE id = ?";
$query = $pdo->prepare($sql);
$query->execute([$title, $preview, $text,$file_path, $id]);

header("location: /");