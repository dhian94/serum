<?php

$host = "localhost"; //umumnya menggunakan localhost
$username = "root";
$pass = "KaMi_798194";
$db = "sirum";
$con = mysql_connect($host, $username, $pass) or die(mysql_error());
mysql_select_db($db, $con) or die(mysql_error());
?>

