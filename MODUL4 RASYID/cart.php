<!DOCTYPE html>
<html lang="en">

<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
    integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
    integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
    integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous">
</script>

<?php require_once("auth.php"); ?>

<?php
include 'config.php';
$stmt = $db->query("SELECT cart.user_id, cart.nama_barang, cart.harga FROM cart INNER JOIN user ON cart.user_id = user.id");
$stmt->setFetchMode(PDO::FETCH_ASSOC);

if (!$stmt) {
    printf("Error: %s\n", mysqli_error($db));
    exit();
}
?>


<head>
    <title>Cart</title>
</head>

<body>

<nav class="navbar navbar-expand-lg navbar-light 
    <?php if (isset($_COOKIE['warna']) == 1) {
        echo $_COOKIE['warna'];
            } else {
                echo "bg-light";
                    } ?>">

<a class="navbar-brand" href="index.php">WAD Beauty</a>

<div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
        <a class="navbar-brand" href="cart.php">
            <img src="https://image.flaticon.com/icons/png/512/126/126083.png" width="25" height="25" alt="">
        </a>
        
        <li class="nav-item dropdown"> 
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Selamat Datang, 
                <span style="color: blue">
                <?php echo  $_SESSION["user"]["nama"] ?>
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="profile.php">Profile</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="logout.php">Logout</a>
            </div>
        </li>
</div>
</nav>

<body>
    <div class="container p-5">
        <div class="p-2">
<?php 
    $user_id = $_SESSION["id"];
    $tampil = mysqli_query($db, "SELECT * FROM cart WHERE user_id = '$user_id'");

    $harga = mysqli_query($db, "SELECT sum(harga) AS harga FROM cart where user_id = '$user_id' ");
echo "
        <table class='table table-hover table-striped'>
          <tr>
            <tr>
                <th>No</th>
                <th>Nama Barang</th>
                <th>Harga</th>
                <th>Aksi</th>
            </tr>";
        $no=1;
    while ($r=mysqli_fetch_array($tampil)){

       echo "<tr><td>$no</td>
            <td>$r[nama_barang]</td>
            <td>Rp ".number_format($r[harga])."</td>
            <td>
                <form name='frmdelete$r[id]' action='delete.php' method='post'>
                    <input type='hidden' value='$r[id]' name='iddelete'>
                    <input type='submit' name='cmdHapus' class='btn btn-danger' value='Hapus'></td>
                </form>
            </tr>";
      $no++;
    }
    while ($s=mysqli_fetch_array($harga)) {
    echo "<tr><th>Total : </th>
    <td></td>
    <td>Rp ".number_format($s[harga])."</td>
    <td></td>
    </tr>
    </table>";
    }
        
?>
   
        </div>
        <div class="p-5 text-center">
            <p>©2020 Copyright : <a href="">WAD Beauty</a></p>


        </div>
    </div>
</body>
</html>