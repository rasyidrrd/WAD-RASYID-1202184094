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



<head>
    <title>Index</title>
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


    <div class="flex-container">
        <br>
        <div class="card mx-auto" style="width:68rem;">

            <div class="card-header bg-white 
            align-center mx-center"
                style="background: rgb(120,216,255); background: linear-gradient(90deg, rgba(120,216,255,1) 23%, rgba(251,255,103,1) 100%); text-align: center;">

                <h4 class="card-title mt-3 text-center">WAD Beauty</h4>
                <p class="card-text mb-3 text-center">Tersedia Skin Care dengan harga murah tapi bukan murahan dan
                    berkualitas
                </p>

            </div>

            <div class="container">

                <div class="row">
                    <div class="card-body align-center  mx-auto">
                        <form action="createcart.php?nama=YUJA NIACIN&harga=169000" method="POST">
                            <div class="card-group">
                                <div class="card mx-auto">
                                    <img class="card-img-top"
                                        src="https://cf.shopee.co.id/file/131c509b9747743f8134d31b9371a3f4" height="400"
                                        alt="Card image cap">
                                    <div class="card-body">
                                        <h5 class="card-title" name="nama_barang">YUJA NIACIN 30 DAYS BLEMISH CARE SERUM
                                        </h5>
                                        <p class="card-text">Produk terbaru dari somebymi yang memiliki manfaat untuk
                                            Whitening + blenish care + Anti-wrinkle,
                                            sangat recommended untuk masalah kulit kusam, kulit kering dan bekas jerawat
                                            atau FLEK hitam.</p>

                                        <div class="card-footer bg-white text-left">
                                        </div>
                                        <p class="card-text" name="harga">Rp169.000</p>
                                    </div>
                                    <div class="card-footer">
                                        <button class="btn btn-primary btn-block" role="button" type="submit"
                                            name="tambah">Tambah Ke Keranjang
                                        </button>
                                        <!-- <input type="hidden" name="harga" value="169000">
                                        <input type="hidden" name="nama_barang" value="YUJA NIACIN"> -->
                        </form>

                    </div>
                </div>
                <div class="card mx-auto">
                    <form action="createcart.php?nama=SOMEBYMI&harga=180000" method="POST">
                        <img class="card-img-top" src="https://cf.shopee.co.id/file/ac9ea856b0485f8823f7797fc9a40de2"
                            height="400" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title" name="nama_barang">SOMEBYMI Snail Truecica Miracle Repair Cream</h5>
                            <p class="card-text">Sebagai pelembap, krim ini mampu memberikan kelembapan yang menyeluruh
                                dan
                                tahan lama bagi kulit, sehingga terasa halus, lembap dan kenyal. Mencerahkan,
                                menghambat penuaan seperti keriput dan garis halus, juga menenangkan kulit yang iritasi,
                                dengan kandungan 420,000ppm Snail Truecica.</p>

                            <div class="card-footer mt-4 bg-white text-left">
                            </div>
                            <p class="card-text" name="harga">Rp180.000 </p>
                        </div>
                        <div class="card-footer">
                            <button class="btn btn-primary btn-block" name="tambah" type="submit">Tambah Ke Keranjang
                            </button>
                    </form>
                </div>
            </div>
            <div class="card mx-auto">
                <form action="createcart.php?nama=MIRACLE TONER&harga=108000" method="POST">
                    <img class="card-img-top" src="https://d1d8o7q9jg8pjk.cloudfront.net/p/lg_5f845ba2c40a6.jpg"
                        height="400" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title" name="nama_barang">30 DAYS MIRACLE TOWER</h5>
                        <p class="card-text">Dengan kandungan AHA, BHA dan PHA bekerja secara efektif untuk membuat
                            kulit lebih bersih dan lebih bersinar,
                            mengandung 10.000 ppm ekstrak pohon teh alami yang secara efektif meningkatkan elastisitas
                            dan menutrisi kulit Anda tanpa efek iritasi karena tidak mengandung 20 bahan 500 dan pewarna
                            berbahaya.</p>

                        <div class="card-footer mt-5 bg-white text-left">
                        </div>
                        <p class="card-text" name="harga">Rp108.000 </p>
                    </div>

                    <div class="card-footer">
                        <button class="btn btn-primary btn-block" name="tambah" type="submit">Tambah Ke Keranjang
                        </button>
                </form>
            </div>
        </div>
    </div>

    </div>



    </div>
    </div>
    </div>
    </div>
    </div>

</body>

</html>