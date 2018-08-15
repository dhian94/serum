<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
session_start();
if (isset($_POST['hitung'])) {
    $hargaTanah = $_POST['hTanah'];
    $luasTanah = $_POST['lTanah'];
    $hargaBangunRumah = $_POST['hBangun'];
    $luasBangunRumah = $_POST['lBangun'];
    $hasil = ($hargaTanah * $luasTanah) + ($hargaBangunRumah * $luasBangunRumah);
    $_SESSION['hargaT'] = $hargaTanah;
    $_SESSION['luasT'] = $luasTanah;
    $_SESSION['hargaB'] = $hargaBangunRumah;
    $_SESSION['luasB'] = $luasBangunRumah;
    $_SESSION['hasil'] = $hasil;
    echo "<script>document.location = '../hasilRAB.php'</script>";
}
