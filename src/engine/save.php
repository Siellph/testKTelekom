<?php
include "../config/db.php";

$upd_id = $_POST['upd_id'];
$city_org = $_POST['city_org'];
$contract = $_POST['contract'];
$name_org = $_POST['name_org'];
$phone_number = $_POST['phone_number'];
$last_name = $_POST['last_name'];
$first_name = $_POST['first_name'];
$middle_name = $_POST['middle_name'];
$date_of_birth = $_POST['date_of_birth'];
$postal_code = $_POST['postal_code'];
$country = $_POST['country'];
$region = $_POST['region'];
$district = $_POST['district'];
$city = $_POST['city'];
$street = $_POST['street'];
$dtc = date('Y-m-d H:i:s');
$dtu = date('Y-m-d H:i:s');

$sql = "SELECT * FROM `customers` WHERE `id` = '$upd_id'";
$res = mysqli_query($connect, $sql);

if (mysqli_num_rows($res) > 0) {
    $sql_upd = "UPDATE `customers` SET `city_org`='$city_org',`contract`='$contract',`name_org`='$name_org',`phone_number`='$phone_number',`last_name`='$last_name',`first_name`='$first_name',`middle_name`='$middle_name',`date_of_birth`='$date_of_birth',`postal_code`='$postal_code',`country`='$country',`region`='$region',`district`='$district',`city`='$city',`street`='$street',`dtu`='$dtu' WHERE `id` = '$upd_id'";
    $res_upd = mysqli_query($connect, $sql_upd);

    $log = date('Y-m-d H:i:s').' Внесены изменения: ' . $sql_upd . ' Пользователь: ' . $_COOKIE['login'];
    file_put_contents(__DIR__ . '/log.txt', $log . PHP_EOL, FILE_APPEND);
} else {
    $sql_add = "INSERT INTO `customers` (`city_org`, `contract`, `name_org`, `phone_number`, `last_name`, `first_name`, `middle_name`, `date_of_birth`, `postal_code`, `country`, `region`, `district`, `city`, `street`, `dtc`, `dtu`) VALUES ('$city_org', '$contract', '$name_org', '$phone_number', '$last_name', '$first_name', '$middle_name', '$date_of_birth', '$postal_code', '$country', '$region', '$district', '$city', '$street', '$dtc', '$dtu')";
    $res_add = mysqli_query($connect, $sql_add);

    $log = date('Y-m-d H:i:s') . ' Новая запись ' . $sql_add . ' Пользователь: ' . $_COOKIE['login'];
    file_put_contents(__DIR__ . '/log.txt', $log . PHP_EOL, FILE_APPEND);
}
mysqli_close($connect);
?>