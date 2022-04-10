<?php
if (empty($_GET['mode'])) {
    $users = [
        0 => 'Пользователь',
        1 => 'Модератор',
        2 => 'Редактор',
        3 => 'Администратор',
        4 => 'Основатель',
    ];
    
        $query = mysqli_query($link, "SELECT * FROM `users`");
        echo "
        <table class='table table-bordered table-hover'>
            <tr>
                <th>ID</th>
                <th>Логин</th>
                <th>Пароль</th>
                <th>E-mail</th>
                <th>Привелигия</th>
                <th>ФИО</th>
                <th>Дата рождения</th>
                <th>Действия</th>
            </tr>";
        while ($row = mysqli_fetch_assoc($query)) {
            echo "
            <tr>
                <td>{$row['id']}</td>
                <td>{$row['login']}</td>
                <td>{$row['password']}</td>
                <td>{$row['email']}</td>
                <td>{$users[$row['flag']]}</td>
                <td>{$row['fio']}</td>
                <td>{$row['birthday']}</td>
                <td>
                    <a class='btn btn-danger' href='?section=users&mode=delete&id={$row['id']}'><i class='fa fa-trash'></i></a>
                </td>
            </tr>";
        }
        echo "
        </table>
    ";
    }

if ($_GET['mode'] === 'delete') {
    if (!empty($_GET['id'])) {

        $query = "DELETE FROM `users` WHERE `id` = " . $_GET['id'];
        $result = mysqli_query($link, $query);
        exit(1);
    }
}