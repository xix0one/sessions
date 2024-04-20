<?php

    session_start();
    include_once 'arr.php';

    if (isset($_GET['act'])) {
        $_SESSION = [];    
        header('Location: /start.php');
        exit();
    }

?>
<!doctype html>
<html lang=en>
    <head>
        <meta charset="utf-8">
        <title>start</title>
    </head>
    <body>
        <form action="order.php" method="POST">
            <table>
            <?php
                foreach ($meal as $m) { ?>
                    <tr><td> <?= $m; ?> </td><td> <input type="text" name="<?= $m ?>" value="<?= $_SESSION[$m] ?>"> </td></tr>
                <?php }
            ?>
            </table>
            <input type="submit" value="Заказать">
        </form>
        <p><a href="order.php">Посмотреть заказ</p>
    </body>
</html>