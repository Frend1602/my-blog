<?php
require_once "../db/db.php";

$user = $pdo->query("SELECT * FROM users WHERE email = '{$_COOKIE['login']}'")->fetch(PDO::FETCH_ASSOC);


$title = trim(filter_var($_POST['title'],FILTER_SANITIZE_SPECIAL_CHARS)) ;
$preview = trim(filter_var($_POST['preview'],FILTER_SANITIZE_SPECIAL_CHARS)) ;
$text = trim(filter_var($_POST['text'],FILTER_SANITIZE_SPECIAL_CHARS)) ;
$file = $_FILES['file'];
$file_path = '';
$user_id = $user['id'];

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

$sql = "INSERT INTO posts (title, preview, text, img,user_id) VALUES (?,?,?,?,?)";
$query = $pdo->prepare($sql);
$query->execute([$title, $preview, $text, $file_path,$user_id]);

header("location: ../index.php");

