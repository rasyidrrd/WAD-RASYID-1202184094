<?php
session_start();
include 'config.php';


if (isset($_POST['tambah'])) {

	$id = $_SESSION['id'];
    $nama_barang = $_GET['nama'];
    $harga = $_GET['harga'];

    $berhasil = "INSERT INTO cart (id, user_id, nama_barang, harga) VALUES ('', '$id', '$nama_barang','$harga')";
    $query = mysqli_query($db, $berhasil);
    
    echo '<script language="javascript">
    alert("Berhasil");
    window.location="cart.php";
    </script>';
    exit();
} 