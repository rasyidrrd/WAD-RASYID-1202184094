<?php
include ('config.php');

$id = $_POST['id'];

$query= "DELETE FROM event_table where id='$id' ";
$delete= mysqli_query($conn, $query);
header("location:home.php");
?>