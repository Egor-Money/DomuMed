<?php

$product = mysqli_query($link, "SELECT * FROM `product`");

if (mysqli_num_rows($product) > 0) {
    while ($row = mysqli_fetch_assoc($product)) { ?>
        <div class="col-sm-6 col-lg-4 text-center item mb-4">
            <img src="./vender/content/<?= $row['img']; ?>" style="width: 100%; height: 100%; object-fit: cover;" alt="image"></a>
            <h3 class="text-dark"><a href="shop-single.php"><?=$row['name']?></a></h3>
            <p class="price"><?=$row['summa']?>₽</p>
        </div>
<?php }
}
