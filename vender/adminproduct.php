<?php
if (empty($_GET['mode'])) {
    $query = mysqli_query($link, "SELECT * FROM `product`");
    echo "
    <table class='table table-bordered table-hover'>
        <tr>
            <th>ID</th>
            <th>Назавание</th>
            <th>Сумма</th>
            <th>Картинка</th>
        </tr>";
    while ($row = mysqli_fetch_assoc($query)) {
        echo "
        <tr>
            <td>{$row['id']}</td>
            <td>{$row['name']}</td>
            <td>{$row['summa']}</td>
            <td>{$row['img']}</td>
            <td>
                <a class='btn btn-success' href='forms/product.php'><i class='fa fa-plus'></i></a>
                <a class='btn btn-primary' href='forms/product-update.php?id={$row['id']}'><i class='fa fa-pencil'></i></a>
                <a class='btn btn-danger' href='?section=product&mode=delete&id={$row['id']}'><i class='fa fa-trash'></i></a>
            </td>
        </tr>";
    }
    echo "
    </table>
   
";
}
if ($_GET['mode'] === 'delete') {
    if (!empty($_GET['id'])) {

        $query = "DELETE FROM `product` WHERE `id` = " . $_GET['id'];
        $result = mysqli_query($link, $query);
        exit(1);
    }
}
