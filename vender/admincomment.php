<?php
if (empty($_GET['mode'])) {
    $query = mysqli_query($link, "SELECT * FROM `comment`");
    echo "
    <table class='table table-bordered table-hover'>
        <tr>
            <th>ID</th>
            <th>Пользователь</th>
            <th>Комментарий</th>
            <th>Дата</th>
            <th>Действия</th>
        </tr>";
    while ($row = mysqli_fetch_assoc($query)) {
        echo "
        <tr>
            <td>{$row['id']}</td>
            <td>{$row['users_id']}</td>
            <td>{$row['comment']}</td>
            <td>{$row['date']}</td>
            <td>
                <a class='btn btn-primary' href='?section=comment&mode=edit&id={$row['id']}'><i class='fa fa-pencil'></i></a>
                <a class='btn btn-danger' href='?section=comment&mode=delete&id={$row['id']}'><i class='fa fa-trash'></i></a>
            </td>
        </tr>";
    }
    echo "
    </table>
    <a class='btn btn-primary' href='?section=comment&mode=add'>Добавить</a>
";
}

if ($_GET['mode'] === 'edit' OR $_GET['mode'] === 'add') {
    if (!empty($_POST)) {

        if ($_POST['id'] === 'new') {
            $query = "
            INSERT INTO `comment` (`id`, `users_id`, `comment`, `date`) VALUES (
                null,
                '{$_POST['users_id']}', 
                '{$_POST['comment']}',
                '{$_POST['date']}',
            )";
        } else {
            $query = "
                UPDATE `comment` 
                SET 
                    `users_id` = '{$_POST['users_id']}', 
                    `comment` = '{$_POST['comment']}',
                    `date` = '{$_POST['date']}'
                WHERE `id` = " . $_POST['id'];
        }

        $result = mysqli_query($link, $query);
        exit(1);
    }
    if (!empty($_GET['id'])) {
        $query = mysqli_query($link, "SELECT * FROM `comment` WHERE `id` = " . $_GET['id']);
        $row = mysqli_fetch_assoc($query);
    } else {
        $row = [
            'id' => 'new',
            'users_id' => '',
            'comment' => '',
            'date' => '',
        ];
    }
    require "forms/comment.php";
}
if ($_GET['mode'] === 'delete') {
    if (!empty($_GET['id'])) {

        $query = "DELETE FROM `comment` WHERE `id` = " . $_GET['id'];
        $result = mysqli_query($link, $query);
        exit(1);
    }
}
