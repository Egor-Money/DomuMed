<?php
if (empty($_GET['mode'])) {
    $job = [
        1 => 'Управляющие',
        2 => 'Инструкторы',
        3 => 'Менеджеры',
    ];


    $query = mysqli_query($link, "SELECT * FROM `komanda`");
    echo "
    <table class='table table-bordered table-hover'>
        <tr>
            <th>ID</th>
            <th>Имя</th>
            <th>Должность</th>
            <th>ВК</th>
            <th>Инста</th>
            <th>Действия</th>
        </tr>";
    while ($row = mysqli_fetch_assoc($query)) {
        echo "
        <tr>
            <td>{$row['id']}</td>
            <td>{$row['name']}</td>
            <td>{$job[$row['job']]}</td>
            <td>{$row['vk']}</td>
            <td>{$row['inst']}</td>
            <td>
                <a class='btn btn-primary' href='?section=komanda&mode=edit&id={$row['id']}'><i class='fa fa-pencil'></i></a>
                <a class='btn btn-danger' href='?section=komanda&mode=delete&id={$row['id']}'><i class='fa fa-trash'></i></a>
            </td>
        </tr>";
    }
    echo "
    </table>
    <a class='btn btn-primary' href='?section=komanda&mode=add'>Добавить</a>
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
            INSERT INTO `komanda` (`id`, `name`, `job`, " . ($file != null ? "`img`, " : "") . " `vk`, `inst`) VALUES (
                null,
                '{$_POST['name']}', 
                '{$_POST['job']}'," .
                ($file ? "'{$file}'" : "")
                . "'{$_POST['img']}',
                '{$_POST['vk']}',
                '{$_POST['inst']}'
            )";
        } else {
            $query = "
                UPDATE `komanda` 
                SET 
                    `name` = '{$_POST['name']}', 
                    `job` = '{$_POST['job']}'," .
                    ($file ? "`img` = '{$file}'," : "")
                    . "`vk` = '{$_POST['vk']}',
                    `inst` = '{$_POST['inst']}'
                WHERE `id` = " . $_POST['id'];
        }
        $result = mysqli_query($link, $query);
        exit(1);
    }
    if (!empty($_GET['id'])) {
        $query = mysqli_query($link, "SELECT * FROM `komanda` WHERE `id` = " . $_GET['id']);
        $row = mysqli_fetch_assoc($query);
    } else {
        $row = [
            'id' => 'new',
            'name' => '',
            'job' => 1,
            'img' => '',
            'vk' => '',
            'inst' => '',
        ];
    }
    require "forms/komanda.php";
}
if ($_GET['mode'] === 'delete') {
    if (!empty($_GET['id'])) {

        $query = "DELETE FROM `komanda` WHERE `id` = " . $_GET['id'];
        $result = mysqli_query($link, $query);
        exit(1);
    }
}
