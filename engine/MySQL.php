<?php
/*
 * Данные для подключения к БД MYSQL
 */
define('DB_Host', 'localhost');
define('DB_User', 'ПОЛЬЗОВАТЕЛЬ');
define('DB_Password', 'ПАРОЛЬ');
define('DB_Name', 'ИМЯ_БАЗЫ_ДАННЫХ');

/*
 * 1. Получаем данные авторизации
 * 2. Устанавливаем таблицу символов UTF-8
 */
$db = mysqli_connect(DB_Host, DB_User, DB_Password, DB_Name); // 1
mysqli_query($db, "SET NAMES utf8"); // 2