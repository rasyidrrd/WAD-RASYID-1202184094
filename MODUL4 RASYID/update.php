<?php 

session_start();
require_once("config.php");
if(isset($_POST['update'])){

    $nama = filter_input(INPUT_POST, 'nama', FILTER_SANITIZE_STRING);
    $no_hp = filter_input(INPUT_POST, 'no_hp', FILTER_SANITIZE_STRING);
    // enkripsi password
    $password = password_hash($_POST["password"], PASSWORD_DEFAULT);
    $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);


$id = $_SESSION['id'];
$nama= $_POST['nama'];
$no_hp= $_POST['no_hp'];
$password = $_POST['password'];

$warna = $_POST['warna'];
setcookie('warna', $warna, time() + 3600, '/');
	// code...
  
$sql = "UPDATE user SET nama ='$nama', no_hp ='$no_hp' WHERE id = '$id'";
$stmt = $db->prepare($sql);
// bind parameter ke query
$params = array(
    ":nama" => $nama,
    
    ":email" => $email,
    ":no_hp" => $no_hp
);

// eksekusi query untuk menyimpan ke database
$saved = $stmt->execute($params);

// jika query simpan berhasil, maka user sudah terdaftar
// maka alihkan ke halaman login
if($saved) 

header("Location: index.php");

}
?>




