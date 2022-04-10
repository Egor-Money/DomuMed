<?php
if (empty($_GET['mode'])) {

    $query = mysqli_query($link, "SELECT * FROM `stock`");
    echo "
    <table class='table table-bordered table-hover'>
        <tr>
            <th>ID</th>
            <th>Название</th>
            <th>Детали</th>
            <th>Дата начала</th>
            <th>Дата оконачания</th>
            <th>Действия</th>
        </tr>";
    while ($row = mysqli_fetch_assoc($query)) {
        echo "
        <tr>
            <td>{$row['id']}</td>
            <td>{$row['name']}</td>
            <td>{$row['detalins']}</td>
            <td>{$row['data-n']}</td>
            <td>{$row['data-o']}</td>
            <td>
                <a class='btn btn-primary' href='?section=stock&mode=edit&id={$row['id']}'><i class='fa fa-pencil'></i></a>
                <a class='btn btn-danger' href='?section=stock&mode=delete&id={$row['id']}'><i class='fa fa-trash'></i></a>
            </td>
        </tr>";
    }
    echo "
    </table>
    <a class='btn btn-primary' href='?section=stock&mode=add'>Добавить</a>
";
}

if ($_GET['mode'] === 'edit' OR $_GET['mode'] === 'add') {
    if (!empty($_POST)) {

        $fileName = !empty($_FILES['img']['tmp_name']) ? $_FILES['img']['tmp_name'] : null;
        $fp = fopen($fileName, 'r');
        $file = fread($fp, filesize($fileName));
        $file = addslashes($file);
        fclose($fp);

        if ($_POST['id'] === 'new') {
            $query = "
            INSERT INTO `stock` (`id`, `name`, `detalins`, " . ($file != null ? "`img`, " : "") . " `data-n`, `data-o`) VALUES (
                null,
                '{$_POST['name']}', 
                '{$_POST['job']}'," .
                ($file ? "'{$file}'" : "")
                . "'{$_POST['img']}',
                '{$_POST['data-n']}',
                '{$_POST['data-o']}'
            )";
        } else {
            $query = "
                UPDATE `stock` 
                SET 
                    `name` = '{$_POST['name']}', 
                    `detalins` = '{$_POST['detalins']}'," .
                    ($file ? "`img` = '{$file}'," : "")
                    . "`data-n` = '{$_POST['data-n']}',
                    `data-o` = '{$_POST['data-o']}'
                WHERE `id` = " . $_POST['id'];
        }
        $result = mysqli_query($link, $query);
        exit(1);
    }
    if (!empty($_GET['id'])) {
        $query = mysqli_query($link, "SELECT * FROM `stock` WHERE `id` = " . $_GET['id']);
        $row = mysqli_fetch_assoc($query);
    } else {
        $row = [
            'id' => 'new',
            'name' => '',
            'detalins' => '',
            'img' => '',
            'data-n' => '',
            'data-o' => '',
        ];
    }
    require "forms/stock.php";
}
if ($_GET['mode'] === 'delete') {
    if (!empty($_GET['id'])) {

        $query = "DELETE FROM `stock` WHERE `id` = " . $_GET['id'];
        $result = mysqli_query($link, $query);
        exit(1);
    }
}
