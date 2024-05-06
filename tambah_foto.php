<?php
    include "koneksi.php";
    session_start();

    if(!isset($_SESSION['userid'])){
        header("location:login.php");
        exit; // Hentikan eksekusi jika tidak ada sesi pengguna
    }

    $judulfoto = $_POST['judulfoto'];
    $deskripsifoto = $_POST['deskripsifoto'];
    $albumid = $_POST['albumid'];
    $tanggalunggah = date("Y-m-d");
    $userid = $_SESSION['userid'];

    $rand = rand();
    $ekstensi = array('png','jpg','jpeg','gif');
    $filename = $_FILES['lokasifile']['name'];
    $ukuran = $_FILES['lokasifile']['size'];
    $ext = pathinfo($filename, PATHINFO_EXTENSION);
    
    if(!in_array($ext, $ekstensi)) {
        // Tambahkan pesan error jika ekstensi file tidak sesuai
        echo "Ekstensi file tidak sesuai";
        exit;
    }

    if($ukuran > 1044070) {
        // Tambahkan pesan error jika ukuran file terlalu besar
        echo "Ukuran file terlalu besar";
        exit;
    }

    $xx = $rand . '_' . $filename;
    move_uploaded_file($_FILES['lokasifile']['tmp_name'], 'gambar/' . $rand . '_' . $filename);
    mysqli_query($conn, "INSERT INTO foto VALUES (NULL,'$judulfoto','$deskripsifoto','$tanggalunggah','$xx','$albumid','$userid')");
    
    // Redirect kembali ke halaman foto setelah berhasil memasukkan data
    header("location:home.php");
?>
