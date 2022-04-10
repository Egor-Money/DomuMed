<?php
session_start();
require "connectdb.php";
$login = $_POST['login'];
$password = $_POST['password'];
$email = $_POST['email'];



if(isset($_POST['singin'])){
    $loginusers = mysqli_query($link, "SELECT * FROM `users` WHERE (`login` = '$login' OR `email` = '$email') AND `password` = '$password'");
    if(mysqli_num_rows($loginusers)>0){ 
    $user = mysqli_fetch_assoc($loginusers);
    $_SESSION['users'] = [
        'id' => $user['id'],
        'login' => $user['login'],
        'password' => $user['password'],
        'email' => $user['email'],
        'FIO' => $user['FIO'],
        'birthday' => $user['birthday'],
        'flag' => $user['flag'],
    ];


header("location: ../index.php");
}
else{ 
    $_SESSION["message"] = "Неверный логин или пароль";
    header("location: ../auth.php");
}
}
