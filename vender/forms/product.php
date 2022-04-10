<?php
session_start();
require "../connectdb.php";

$summa = $_POST['summa'];
$name1 = $_POST['name'];

function upload($file){
    $edx = pathinfo($file['name'],PATHINFO_EXTENSION);
    $name = uniqid().'.'.$edx;
    move_uploaded_file($file['tmp_name'],'../content/'.$name);
    return $name;
};

if(isset($_POST['submit'])){
$url = upload($_FILES['file']);
if(mysqli_query($link,"INSERT INTO `product` (`id`,`name`,`summa`, `img`) VALUES (NULL, '$name1', '$summa', '$url')"));
    header('Location: ../admin.php');
}
?>



<section class="admin-form">
    <form action="product.php" method="post" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?=$row['id']?>">
        <div class="row">
            <div class="col-lg-3">
                <label>Назавание</label>
            </div>
            <div class="col-lg-9">
                <input class="form-control" type="text" name="name" value="<?=$row['name']?>">
            </div>
            <div class="col-lg-3">
                <label>Сумма</label>
            </div>
            <div class="col-lg-9">
                <input class="form-control" type="number" name="summa" value="<?=$row['summa']?>">
            </div>
            <div class="col-lg-3">
                <label>Фото</label>
            </div>
            <div class="col-lg-9">
                <input class="" type="file" name="file">
            </div>
            <div class="col-lg-9">
                <button type="submit" name="submit" class="btn btn-primary">Добавить</button>
            </div>
            <div class="col-lg-9">
                <button type="submit" name="update" class="btn btn-primary">Обновить</button>
            </div>
        </div>
    </form>
</section>
