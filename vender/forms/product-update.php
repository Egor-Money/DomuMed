<?php
session_start();
require '../connectdb.php';


$id = $_POST['id'];
$name = $_POST['name'];
$summa = $_POST['summa'];


if(isset($_POST['submit'])){
    $update = mysqli_query($link, "UPDATE `product` SET `name`='$name',`summa`='$summa' WHERE `id` = '$id'");
    var_dump("UPDATE `product` SET `name`='$name',`summa`='$summa' WHERE `id` = '$id'");    
    header('Location: ../admin.php');
}


?>
<section class="admin-form">
    <form action="product-update.php" method="post" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?=$row['id']?>">
        <div class="row">
            <div class="col-lg-3">
                <label>Название</label>
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
            <div class="col-lg-9">
                <button type="submit" name="submit" class="btn btn-primary">Обновить</button>
            </div>
        </div>
    </form>
</section>

