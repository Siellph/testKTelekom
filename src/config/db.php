<?php
$sqlserver = "localhost";
$sqluser = "root";
$sqlpass = "root";
$sqlbase = "ktelekom";

$connect = mysqli_connect($sqlserver, $sqluser, $sqlpass, $sqlbase);

if (!$connect) {
    echo "Ошибка: Невозможно установить соединение с MySQL<br>";
    echo "<br>Код ошибки: " . mysqli_connect_errno();
    echo "<br>Текст ошибки: " . mysqli_connect_error();
    exit;
}
?>