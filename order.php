<?php
    session_start();
    include_once 'arr.php';
?>
<!doctype html>
<html lang=en>
    <head>
        <link href="style.css" rel="stylesheet">
        <meta charset="utf-8">
        <title>order</title>
    </head>

    <body>

    <?php 

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        foreach ($meal as $m) {
            if (is_numeric($_POST[$m])) {
                $_SESSION[$m] = $_POST[$m];
            }
        }
    } ?>

        <table>
            <tr>
                <th>
                    Название
                </th>
                <th>
                    Количество
                </th>
            </tr>
            <?php foreach ($_SESSION as $k => $v) { ?>
            <tr>
                <td><?= $k ?></td><td><?= $v ?></td>
            </tr>
            <?php } ?>
        </table>

        <p><a href="/start.php">Вернуться обратно</a></p>

        <p><a href="/start.php?act=delete">Удалить заказ</a></p>

    </body>
</html>