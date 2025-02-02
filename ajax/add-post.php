<?php
require_once "../db/db.php";

$title = $_POST['title'];
$preview = $_POST['preview'];
$text = $_POST['text'];
$file = $_FILES['file'];
$file_path = '';

if(!empty($file['name'])){
    move_uploaded_file($file['tmp_name'], "../img/" . $file['name']);
    $file_path = "img/" . $file['name'];
}

//$error = "";
//if(strlen($title) < 3) {
//    $error = "Заголовок должен содержать более трех символов.";
//}else if(strlen($text) < 5) {
//    $error = "Текст статьи должен содержать более пяти символов.";
//}else if(strlen($preview) < 5) {
//    $error = "Превью статьи должно содержать более пяти символов.";
//}
//
//if($error != ""){
//    echo $error;
//    exit();
//}


$sql = "INSERT INTO posts (title, preview, text, img) VALUES (?,?,?,?)";
$query = $pdo->prepare($sql);
$query->execute([$title, $preview, $text, $file_path]);

header("location: ../index.php");

