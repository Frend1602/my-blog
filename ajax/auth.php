<?php
require_once "../db/db.php";

$email = trim(filter_var($_POST['email'], FILTER_SANITIZE_EMAIL));
$password = trim(filter_var($_POST['pass'], FILTER_UNSAFE_RAW));

$error = "";
if(strlen($email) < 5) {
    $error = "Email должен содержать более пяти символов.";
}else if(strlen($password) < 5) {
    $error = "Пароль должен содержать более пяти символов.";
}

if($error != ""){
    echo $error;
    exit();
}

$salt = 'sdfkglsdj&#%*&@(';
$pass = md5($salt . $password);

$sql = 'SELECT * FROM `users` WHERE `email` = :email AND `password` = :password';
$query = $pdo->prepare($sql);
$query->execute(['email' => $email, 'password' => $pass]);

$user = $query->fetch(PDO::FETCH_OBJ);

if($user->id == 0) {
    echo "Неверный пользователь";
}
else{
    setcookie('login', $user->username, time() + 3600 * 24 * 30, "/");
    echo "Done";
}
