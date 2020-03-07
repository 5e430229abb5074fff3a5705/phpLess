<?php
/*
 * Включаем буферизацию (не обязательно, но рекомендуем!)
 */
ob_start();

/*
 * Запускаем сессию
 */
session_start();

/*
* 1. Определяем протокол
* 2. Получаем полный адрес сайта
*/
$protocol = !isset($_SERVER['HTTPS']) || $_SERVER['HTTPS'] != 'on' ? 'http' : 'https'; // 1
define('URL', ''. $protocol . '://'. $_SERVER['HTTP_HOST'] . ''); // 2

/*
 * Подключаем файл конфигураций базы данных MySQL
 */
require_once('MySQL.php');

/*
 * Подключаем файл функций
 */
require_once('functions.php');

/*
 * Проверка на авторизацию
 */
$user = isset($_SESSION['Login'], $_SESSION['Password']) ? authentication($_SESSION['Login'], $_SESSION['Password']) : 0;

/*
 * Отменяем авторизацию путём снятия сессии
 */
if ($user && isset($_GET['logout'])) {
    session_unset($_SESSION['Login'], $_SESSION['Password']);
    header('Location: ' . URL); exit;
}