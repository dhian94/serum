<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include_once './cKoneksi.php';
if (isset($_POST['simpan'])) {
    $id = $_GET['id'];
    $tipe = $_POST['tipe'];
    $tgl = $_POST['tgl'];
    $lama = $_POST['lama'];
    $qAddSewa = "insert into sewa (idTransaksi,idUser,tipe_rumah,mulaiSewa,akhirSewa,bayar,status) values ('null','$id','$tipe','$tgl',DATE_ADD('" . $tgl . "',INTERVAL '$lama' YEAR),'0','0')";
    $addSewa = mysql_query($qAddSewa) or die(mysql_error());
    if ($addSewa) {
        echo "<script>alert('Silakan Bayar dan Konfirmasi Admin di 085755172825!');</script>";
        $qselect = "select stok from data_rumah where tipe_rumah=$tipe";
        $run = mysql_query($qselect) or die(mysql_error());
        $get = mysql_fetch_array($run);
        $getStok = $get['stok'];
        $jumlah = $getStok - 1;

        $updateStok = "update data_rumah set stok = '$jumlah' where tipe_rumah='$tipe'";
        $updtStok = mysql_query($updateStok) or die(mysql_error());
        echo '<script>window.history.back()</script>';
    } else {
        echo 'Data Gagal Disimpan!';
        echo '<script>window.history.back()</script>';
    }
}
if (isset($_POST['konfirm'])) {
    $idTrans = $_GET['id'];
    $bayar = $_POST['nominal'];
    $status = $_POST['konfirmasi'];

    $select = "select bayar, harga from sewa s join data_rumah r on s.tipe_rumah=r.tipe_rumah where idTransaksi='$idTrans'";
    $mlayu = mysql_query($select) or die(mysql_error());
    $dapat = mysql_fetch_array($mlayu);
    $getBayar = $dapat['bayar'];
    $harga = $dapat['harga'];
    $jumlahTotal = $getBayar + $bayar;

    $qKonfirm = "UPDATE `sewa` SET `bayar`='$jumlahTotal',`status`='$status' WHERE idTransaksi='$idTrans'";
    $konfirm = mysql_query($qKonfirm) or die(mysql_error());

    $qs = "select bayar from sewa where idTransaksi='$idTrans'";
    $jln = mysql_query($qs) or die(mysql_error());
    $hsl = mysql_fetch_array($jln);
    $cekLunas = $hsl['bayar'];

    if ($cekLunas > $harga) {
        $sisa = $cekLunas - $harga;
        echo "<script>alert('Uang Kembali');</script>";
        echo "<script>alert('$sisa');</script>";
        $qUp = "UPDATE `sewa` SET `bayar`='$harga',`status`='$status' WHERE idTransaksi='$idTrans'";
        $kUP = mysql_query($qUp) or die(mysql_error());
        echo "<script>document.location = '../konfirmasiSewa.php'</script>";
    } else {
        if ($konfirm) {
            echo "<script>alert('Berhasil Dikonfirmasi');</script>";
            echo "<script>document.location = '../konfirmasiSewa.php'</script>";
        } else {
            echo "<script>alert('Gagal Dikonfirmasi!');</script>";
            echo '<script>window.history.back()</script>';
        }
    }
}