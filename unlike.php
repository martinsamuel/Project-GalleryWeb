<?php
include "koneksi.php";
session_start();

if (!isset($_SESSION['userid'])) {
    // User harus login terlebih dahulu
    header("location:index.php");
} else {
    $fotoid = $_GET['fotoid'];
    $userid = $_SESSION['userid'];

    // Cek apakah user sudah pernah like foto ini
    $sql = mysqli_query($conn, "SELECT * FROM likefoto WHERE fotoid='$fotoid' AND userid='$userid'");

    if (mysqli_num_rows($sql) == 1) {
        // User sudah like foto ini, lakukan proses unlike
        mysqli_query($conn, "DELETE FROM likefoto WHERE fotoid='$fotoid' AND userid='$userid'");
    }
    // Redirect kembali ke halaman sebelumnya (misalnya index.php)
    header("location:index.php");
}
?>
