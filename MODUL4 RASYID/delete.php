<?php
session_start();
error_reporting(0);
include 'config.php';

if(isset($_POST['iddelete'])){
$id = $_GET["id"];
echo $id;

$delete = "DELETE FROM cart WHERE '$_POST[iddelete]'";
$db->exec($delete);
// echo "Deleted successfully";
header("Location: cart.php");
}
?>

