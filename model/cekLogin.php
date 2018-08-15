<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include_once './cKoneksi.php';
session_start();
if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = md5($_POST['password']);

    $sql = "select idUser, username, password from user where username='$username' and password=left('$password',15)";
    $select = mysql_query($sql) or die(mysql_error());
    if (mysql_num_rows($select) > 0) {
        $cekAdmin = mysql_fetch_array($select);
        if ($cekAdmin['idUser'] == '1') {
            echo"<script language = 'JavaScript'>alert('Selamat, Login Anda Sukses!!'); document.location = '../dashboardAdmin.php'</script>";
            $_SESSION['id'] = $cekAdmin['idUser'];
            $_SESSION['logedin'] = true;
            $_SESSION['admin'] = true;
        } else {
            echo"<script language = 'JavaScript'>alert('Selamat, Login Anda Sukses!!'); document.location = '../dashboardUser.php'</script>";
            $_SESSION['id'] = $cekAdmin['idUser'];
            $_SESSION['logedin'] = true;
            $_SESSION['admin'] = false;
        }
    } else {
        echo"<script language = 'JavaScript'>alert('Maaf, Login Anda Gagal!!'); document.location = '../login.php'</script>";
    }
}

