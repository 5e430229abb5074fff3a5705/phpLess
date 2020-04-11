<?php require_once './engine/config.php'; ?>
<!doctype html>
<html lang="ru">
<head>
    <?php require_once 'engine/head.php'; ?>
    <title>Главная</title>
</head>
<body>
<div class="page-container">
    <?php
    include_once 'engine/navbar.php';
    require_once 'index/content.php';
    include_once 'engine/footer.php';
    include_once 'engine/scripts.php';
    ?>
</div>
</body>
</html>