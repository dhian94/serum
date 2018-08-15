<?php

include_once './cKoneksi.php';
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

if (isset($_POST['register']) || isset($_POST['add'])) {
    $userName = $_POST['username'];
    $password = md5($_POST['password']);
    $namaLengkap = $_POST['namaLengkap'];
    $noKTP = $_POST['noKTP'];
    $noHP = $_POST['noHP'];
    $kelamin = $_POST['kelamin'];
    $alamat = $_POST['alamat'];

    $query = "select username from user";
    $select = mysql_query($query) or die(mysql_error());
    $cekUser = mysql_fetch_array($select);
    if ($userName == $cekUser['username']) {
        echo "<script>alert('Username Telah Ada, Coba Yang Lain!');</script>";
        echo '<script>window.history.back();</script>';
    } else {
        $qAddUser = "insert into user(idUser, username, password, nama_lengkap, noKTP, noHP, jenis_kelamin, alamat) values ('null', '$userName', '$password', '$namaLengkap', '$noKTP', '$noHP', '$kelamin', '$alamat')";
        $addUser = mysql_query($qAddUser) or die(mysql_error());
        if ($addUser) {
            echo "<script>alert('Data Berhasil Disimpan!');</script>";
            echo '<script>window.history.back()</script>';
        } else {
            echo 'Data Gagal Disimpan!';
            echo '<script>window.history.back()</script>';
        }
    }
}
if (isset($_POST['edit'])) {
    $id = $_GET['id'];
    $userName = $_POST['username'];
    $password = md5($_POST['password']);
    $namaLengkap = $_POST['namaLengkap'];
    $noKTP = $_POST['noKTP'];
    $noHP = $_POST['noHP'];
    $kelamin = $_POST['kelamin'];
    $alamat = $_POST['alamat'];
    $quedit = "update user set username='$userName', password='$password',nama_lengkap='$namaLengkap',noKTP='$noKTP',noHP='$noHP',jenis_kelamin='$kelamin',alamat='$alamat' where idUser='$id'";
    $edit = mysql_query($quedit) or die(mysql_error());
    if ($edit) {
        echo "<script>alert('Data Berhasil Diedit!');</script>";
        echo "<script>document.location = '../tableUser.php'</script>";
    } else {
        echo 'Data Gagal Diedit!';
        echo '<script>window.history.back()</script>';
    }
}