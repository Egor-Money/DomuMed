<?php
$list = mysqli_query($link, "SELECT * FROM `product`");


if (mysqli_num_rows($list) > 0) {
    while ($row = mysqli_fetch_assoc($list)) {?>

        <div class="col-lg-4">
            <div class="single-price-plan">
                <h4><?=$row['product']?></h4>
                <div class="price-plan">
                    <h2><?=$row['summa']?> <span>₽</span></h2>
                    <p>Год</p>
                </div>
                <ul>
                    <li><?=$row['visit']?></li>
                    <li><?=$row['group']?> разовое групповое занятие на выбор в месяц</li>
                    <li>Персональных тренировок с тренером - <?=$row['personal']?></li>
                    <?php if (!empty($row['pitanie'])) {?>
                    <li><?=$row['pitanie']?></li>
                    <?php }?>
                </ul>
                <a href="vender/pokupka.php?id=<?=$row['id']?>" class="primary-btn price-btn">Приобрести</a>
            </div>
        </div>
    <?php }
}
