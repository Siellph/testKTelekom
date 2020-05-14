<?php
include "../config/db.php";

$login = (!empty($_POST['login']))?strip_tags($_POST['login']):"";
$pass = (!empty($_POST['pass']))?strip_tags($_POST['pass']):"";

$sql = "SELECT * FROM operators WHERE `login`='$login' and `pass`=md5('$pass')";
$res = mysqli_query($connect, $sql) or die ("Error".mysqli_error($connection));

if (mysqli_num_rows($res) > 0) {
    setcookie("login",$login,time()+32400,'/');
    setcookie("pass",md5($pass),time()+32400,'/');
    setcookie("id",$id,time(+32400),'/');
    header("Location: ../views/customers.php");
} else {
    header("Location: ../../index.php?success=false");
}

mysqli_close($connection);
?>