<?php
$hostname = "127.0.0.1";
$username = "root";
$userpassword = "root";
$namedb = "domumed";

$link = mysqli_connect($hostname,$username,$userpassword,$namedb);


if(!$link){
    echo "Пошёл нахуй, БД не работает";
}