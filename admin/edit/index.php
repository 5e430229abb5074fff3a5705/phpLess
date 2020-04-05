<?php require_once '../../engine/config.php'; if($user['access'] != 1){header('Location: ' . URL . '/auth'); exit;} ?>
<!doctype html>
<html lang="ru">
<head>
    <?php require_once '../../engine/head.php'; ?>
    <title>Редактирование пользователя</title>
</head>
<body>
<?php
include_once '../../engine/navbar.php';
require_once 'content.php';
include_once '../../engine/footer.php'
?>
</body>
</html>