<?php require_once '../../engine/config.php'; if($user['access'] != 1) { header('Location: ' . URL . '/auth'); exit; } ?>
<!doctype html>
<html lang="ru">
<head>
    <?php require_once '../../engine/head.php'; ?>
    <title>Создание пользователя</title>
</head>
<body>
<div class="page-container">
    <?php
    //include_once '../../engine/navbar.php';
    include_once '../../engine/admin-navbar.php';
    require_once 'content.php';
    include_once '../../engine/footer.php';
    include_once '../../engine/scripts.php';
    ?>
</div>
</body>
</html>