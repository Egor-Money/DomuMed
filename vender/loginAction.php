<?php
session_start();
require "connectdb.php";
$FIO = $_POST['FIO'];
$login = $_POST['login'];
$email = $_POST['email'];
$password = $_POST['password'];
$confpassword = $_POST['confpassword'];
$date = $_POST['date'];

if(isset($_POST['submit'])){
    $checkuser = mysqli_query($link, "SELECT 'login' FROM 'user' WHERE 'login' = '$login'");
    if(mysqli_num_rows($chechuser) > 0){
        $_SESSION["message"] = "Пользователь с таким логином уже существует";
        header("location: " .$_SERVER["HTTP_REFERER"]);
    }
}

else if($password!==$confpassword){
    $_SESSION["message"]= "пароли не совпадают";
    header("location: " .$_SERVER["HTTP_REFERER"]);
}
else{
   
    $addusers = mysqli_query($link, "INSERT INTO `users` (`login`, `password`, `email`, `flag`, `FIO`, `birthday`) VALUES ('$login', '$password', '$email',0, '$FIO','$date')");
    if($addusers){
    $_SESSION["message"] = "Пользователь успешно зарегистрирован";
    header("location: ../index.php");
}
}
