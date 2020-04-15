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
 * Управление языковой локализацией
 */
$lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
$supportLanguage = ['ru', 'en'];
$lang = in_array($lang, $supportLanguage) ? $lang : 'en';
require_once(__DIR__.'/lang/' . $lang . '.php');

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
if (isset($_SESSION['Login'], $_SESSION['Password']))
{
    $user = authentication($_SESSION['Login'], $_SESSION['Password']);
}
else
{
    $user = 0;
}

/*
 * Отменяем авторизацию путём снятия сессии
 */
if ($user && isset($_GET['logout'])) {
    session_unset($_SESSION['Login'], $_SESSION['Password']);
    header('Location: ' . URL); exit;
}