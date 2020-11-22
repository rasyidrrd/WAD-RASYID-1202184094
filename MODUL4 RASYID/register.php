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


<?php

require_once("config.php");

?>

<head>
    <title>Register</title>
</head>

<style>
body {
    background-color: #d8f0f3
}
</style>

<body>

<nav class="navbar navbar-expand-lg navbar-light 
    <?php if (isset($_COOKIE['warna']) == 1) {
        echo $_COOKIE['warna'];
            } else {
                echo "bg-light";
                    } ?>">

        <a class="navbar-brand" href="#">WAD Beauty</a>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="login.php">Login</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="#">Register<span class="sr-only">(current)</span></a>
                </li>
        </div>
    </nav>
    <br>
    <br>
    <br>

    <div class="flex-container">

        <div class="card mx-auto" style="width: 24rem;">

            <div class="card-header bg-white mr-5 ml-5 align-center mx-center">
                <br>
                <h4 class="card-title text-center">Registrasi</h4>

            </div>
            <div class="container">

                <div class="row">
                    <div class="card-body align-center mr-5 mx-5 mx-center">

                        <form action="create.php" method="POST">

                            <div class="form-group">
                                <label for="name">Nama</label>
                                <input class="form-control" type="text" name="nama" placeholder="Masukkan Nama Lengkap" required/>
                            </div>
                            <div class="form-group">
                                <label for="email">E-mail</label>
                                <input class="form-control" type="text" name="email" placeholder="Masukkan Alamat E-mail" required/>
                            </div>
                            <div class="form-group">
                                <label for="no-hp">No. Handphone</label>
                                <input class="form-control" type="text" name="no_hp" placeholder="Masukkan Nomor Handphone" required/>
                            </div>

                            <div class="form-group">
                                <label for="password">Kata Sandi</label>
                                <input class="form-control" type="password" name="password" placeholder="Buat Kata Sandi" required/>
                            </div>
                            <div class="form-group">
                                <label for="password">Konfirmasi Kata Sandi</label>
                                <input class="form-control" type="password" name="password" placeholder="Konfirmasi Kata Sandi" required/>               
                            </div>

                            <div class="text-center">
                                <input type="submit" class="btn btn-primary" name="register"  value="Daftar"/>
                                <p class="text-center mt-2">Sudah Punya Akun?
                    
                                <a class="text-muted" href="login.php">Login</a>
                                
                                </p>
                            </div>
                        </form>

                    </div>



                </div>
            </div>
        </div>
    </div>
    </div>
</body>
</html>