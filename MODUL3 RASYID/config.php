<?php
    $host = "localhost";
    $user = "root";
    $name = "wad_modul3_rasyid";
    $pass = "";

    $conn = mysqli_connect($host, $user, $pass, $name);
    if (!$conn){
        echo "<script>
                alert('Failed Connect into Database');
            </script>";
    }
?>