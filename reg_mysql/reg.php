<?php

$host = 'localhost';
$database = 'blogg';
$user = 'root';
$password = '';


if (isset($_POST['name']) && isset($_POST['pass']) && isset
    ($_POST['email'])
) {

    // подключаемся к серверу
    $link = mysqli_connect($host, $user, $password, $database)
    or die("Ошибка " . mysqli_error($link));

    // экранирования символов для mysql
    $name = htmlentities(mysqli_real_escape_string($link, $_POST['name']));
    $pass = htmlentities(mysqli_real_escape_string($link, $_POST['pass']));
    $email = htmlentities(mysqli_real_escape_string($link, $_POST['email']));

    // создание строки запроса
    $query = "INSERT INTO users VALUES(NULL, '$name','$pass','$email')";

    // выполняем запрос
    $result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));
    if ($result) {
        echo "<span style='color:blue;'>Данные добавлены</span><br>";

    }

    mysqli_close($link);
}
