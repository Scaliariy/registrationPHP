<?php
$server = 'localhost'; // Имя или адрес сервера
$user = 'root'; // Имя пользователя БД
$password1 = 'root'; // Пароль пользователя
$db = 'test'; // Название БД
$db = mysqli_connect($server, $user, $password1, $db); // Подключение
// Check connection
// Проверка на подключение
if (!$db) {
    // Если проверку не прошло, то выводится надпись ошибки и заканчивается работа скрипта
    echo "Не удается подключиться к серверу базы данных!";
    exit;
}
?>