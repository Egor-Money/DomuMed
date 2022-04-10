<?php
$job = [
    1 => 'Управляющие',
    2 => 'Инструкторы',
    3 => 'Менеджеры',
];
?>

<section class="admin-form">
    <form action="" method="post" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?=$row['id']?>">
        <div class="row">
            <div class="col-lg-3">
                <label>Имя</label>
            </div>
            <div class="col-lg-9">
                <input class="form-control" type="text" name="name" value="<?=$row['name']?>">
            </div>
            <div class="col-lg-3">
                <label>Должность</label>
            </div>
            <div class="col-lg-9">
                <?php foreach ($job as $k => $n) {?>
                <label for="job-<?=$k?>"><input type="radio" id="job-<?=$k?>" name="job" value="<?=$k?>" <?= ($row['job'] == $k ? "checked" : "") ?>/> <?=$n?></label>

                <?php }?>
            </div>
            <div class="col-lg-3">
                <label>Фото</label>
            </div>
            <div class="col-lg-9">
                <input class="" type="file" name="img">
            </div>
            <div class="col-lg-3">
                <label>VK</label>
            </div>
            <div class="col-lg-9">
                <input class="form-control" type="text" name="vk" value="<?=$row['vk']?>">
            </div>
            <div class="col-lg-3">
                <label>Instagram</label>
            </div>
            <div class="col-lg-9">
                <input class="form-control" type="text" name="inst" value="<?=$row['inst']?>">
            </div>
            <div class="col-lg-3">

            </div>
            <div class="col-lg-9">
                <button type="submit" class="btn btn-primary">Сохранить</button>
            </div>
        </div>
    </form>
</section>
