<?php

require_once "../db/db.php";

$username = trim(filter_var($_POST['username'], FILTER_SANITIZE_SPECIAL_CHARS));
$email = trim(filter_var($_POST['email'], FILTER_SANITIZE_EMAIL));
$password = trim(filter_var($_POST['pass'], FILTER_SANITIZE_SPECIAL_CHARS));
$repassword = trim(filter_var($_POST['repass'], FILTER_SANITIZE_SPECIAL_CHARS));

$error = "";
if(strlen($username) < 3) {
    $error = "Имя должен содержать более трех символов.";
}else if(strlen($email) < 5) {
    $error = "Email должен содержать более пяти символов.";
}else if(strlen($password) < 5) {
    $error = "Пароль должен содержать более пяти символов.";
}else if($password !== $repassword) {
    $error = "Пароли должны совпадать.";
}

if($error != ""){
    echo $error;
    exit();
}

$salt = 'sdfkglsdj&#%*&@(';
$pass = md5($salt . $password);

$sql = "INSERT INTO users (username, email, password) VALUES (?,?,?)";
$stmt = $pdo->prepare($sql);
$stmt->execute([$username, $email, $pass]);

echo "Done";
