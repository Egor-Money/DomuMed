<?php 
require 'connectdb.php';
$id = $_GET['id'];
// var_dump($_GET['flag']);
// var_dump($_GET['id']);

if($_GET['flag']==0){
    mysqli_query($db,"UPDATE `users` SET `flag`= 0 WHERE `id` = '$id'");
    header("Location:".$_SERVER["HTTP_REFERER"]);
}
if($_GET['flag']==1){
    mysqli_query($db,"UPDATE `users` SET `flag`= 1 WHERE `id` = '$id'");
    header("Location:".$_SERVER["HTTP_REFERER"]);
}
if($_GET['flag']==2){
    mysqli_query($db,"UPDATE `users` SET `flag`= 2 WHERE `id` = '$id'");
    header("Location:".$_SERVER["HTTP_REFERER"]);
}

?>