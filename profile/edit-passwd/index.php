<?php require_once '../../engine/config.php'; if (!$user) { header('Location: ' . URL . '/auth'); exit; } ?>
<!doctype html>
<html lang="ru">
<head>
    <?php require_once '../../engine/head.php'; ?>
    <title>Изменение вашего пароля</title>
</head>
<body>
<div class="page-container">
    <?php
    include_once '../../engine/navbar.php';
    require_once 'content.php';
    include_once '../../engine/footer.php';
    include_once '../../engine/scripts.php';
    ?>
</div>
</body>
</html>