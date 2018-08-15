<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include_once './cKoneksi.php';
if (isset($_POST['save'])) {
    $tipe = $_POST['tipe'];
    $luas = $_POST['luas'];
    $harga = $_POST['harga'];
    $stok = $_POST['stok'];
    $namaGambar = $_POST['namaGambar'];
    $deskripsi = $_POST['deskripsi'];

    $filename = $_FILES['gambar']['name'];
    $mimeType = $_FILES['gambar']['type'];
    $move = move_uploaded_file($_FILES['gambar']['tmp_name'], '../image/' . $filename);

    $query = "insert into data_rumah set gambar='$filename',nama_gambar='$namaGambar',tipe_rumah='$tipe',luas_rumah='$luas',deskripsi='$deskripsi',harga='$harga',stok='$stok',mime_type='$mimeType'";
    mysql_query($query) or die(mysql_error());
    echo "<script>alert('Gambar telah disimpan!'); document.location = '../tableListHomeAdmin.php'</script>";
}
if (isset($_POST['update'])) {
    $tipe = $_GET['tipe'];
    $harga = $_POST['harga'];
    $stok = $_POST['stok'];
    $deskripsi = $_POST['deskripsi'];
    $quedit = "update data_rumah set harga='$harga',stok='$stok',deskripsi='$deskripsi' where tipe_rumah='$tipe'";
    $edit = mysql_query($quedit) or die(mysql_error());
    if ($edit) {
        echo "<script>alert('Data Berhasil Diedit!');</script>";
        echo "<script>document.location = '../tableListHomeAdmin.php'</script>";
    } else {
        echo 'Data Gagal Diedit!';
        echo '<script>window.history.back()</script>';
    }
}
