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

<?php require_once("auth.php"); 
include("config.php");
?>



<head>
    <title>Profile</title>
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

    <br>
    <br>
    <br>

<h2 class="text-center">Profile</h2>

<br>

    <div class="container col-5">

    <form action ="update.php" method="POST">
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Email</label>
                <div class="col">
                    <input type="email" readonly class="form-control-plaintext" name="email" value="<?php echo  $_SESSION["user"]["email"] ?>"
                        readonly>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Nama</label>
                <div class="col">
                    <input type="text" class="form-control" name="nama" placeholder="Masukan Nama Anda"
                        value="<?php echo  $_SESSION["user"]["nama"] ?>"required>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Nomor Handphone</label>
                <div class="col">
                    <input type="text" class="form-control" name="no_hp" placeholder="Masukan Nomor Handphone"
                        value="<?php echo  $_SESSION["user"]["no_hp"] ?>"required>
                </div>
            </div>
            <hr>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Password</label>
                <div class="col">
                    <input type="password" class="form-control" name="password">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Konfirmasi Password</label>
                <div class="col">
                    <input type="password" class="form-control" name="password">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Warna Navbar</label>
                <div class="col">
                    <select class="select" id="warna">
                        <option value="bg-dark">Dark</option>
                        <option value="bg-light">Light</option>
                        <option value="bg-primary">Primary</option>
                        <option value="bg-warning">Warning</option>
                        <option value="bg-success">Success</option>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <div class="col text-center">
                <input type="submit" class="btn btn-block btn-primary" name="update"  value="Submit"/>
                <input type="reset" class="btn btn-block btn-light" href="index.php" value="Cancel"/>
                    
                </div>
            </div>
        </form>
        </div>
        <div class="p-4 text-center">
            <p>©2020 Copyright : <a href="">WAD Beauty</a></p>
        </div>

                </div>
            </div>
        </div>
    </div>

    </body>
    </html>