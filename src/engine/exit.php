<?php
$login = $_COOKIE['login'];
$pass = $_COOKIE['pass'];

setcookie("login",$login,time()-7200,'/');
setcookie("pass",$pass,time()-7200,'/');

header("Location: ../../index.php");
?>