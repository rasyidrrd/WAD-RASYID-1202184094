<!doctype html>

<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
    integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
    crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
    integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
    crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
    integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV"
    crossorigin="anonymous"></script>

<head>
    <title>Home</title>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-primary justify-content-between">
        <a class="navbar-brand">EAD EVENTS</a>
        <ul class="navbar-nav">
            <li><a class="btn btn-primary" href="home.php">Home</a></li>
            <li class="ml-2"><a class="btn btn-outline-light " href="buatevent.php">Buat Event</a></li>
        </ul>
    </nav>

    <h4 class="p-5 text-center" style="color: steelblue">WELCOME TO EAD EVENTS!</h4>

    <div class="container">

        <div class="row">

            <?php
      include('config.php');
      $query = "SELECT id, name, kategori, gambar, tanggal, tempat FROM event_table";

      $selects = mysqli_query($conn, $query);
      $empty = true;
      while ($select = mysqli_fetch_assoc($selects)) {
        $empty = false;
      ?>

            <div class="col col-4">
                <div class="card">
                    <img src="gambar/<?= $select['gambar'] ?>" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-tittle"><?= $select['name'] ?></h5>
                        <p><?= $select['tanggal'] ?></p>
                        <p><?= $select['tempat'] ?></p>
                        <p>Kategori : <?= $select['kategori'] ?></p>
                    </div>
                    <div class="card-footer text-right">
                        <a href="./detailevent.php?id=<?= $select['id'] ?>">
                            <button class="btn btn-block btn-primary">Detail</button></a>
                    </div>
                </div>
            </div>

            <?php }
      if ($empty) {
        echo "No Event Found";
      }

      ?>
        </div>
    </div>
</body>
</html>