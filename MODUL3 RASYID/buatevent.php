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
<title>Buat Event</title>
</head>

<body>

  <nav class="navbar navbar-expand-lg navbar-dark bg-primary justify-content-between">
    <a class="navbar-brand">EAD EVENTS</a>
    <ul class="navbar-nav">
      <li><a class="btn btn-primary" href="home.php">Home</a></li>
      <li class="ml-2"><a class="btn btn-outline-light " href="buatevent.php">Buat Event</a></li>
    </ul>
  </nav>

  <h4 style="margin-top: 20px; margin-left: 90px; color:steelblue;">Buat Event</h4>

  <div class="container">
    
    <form action="creates.php" method="POST" enctype="multipart/form-data">
      <div class="row">
        <div class="col col-6">
          <div class="card h-100">
            <div style="height: 24px; border-radius: 4px 4px 0 0" class="bg-danger"></div>

            <div class="card-body">
              <div class="form-group">
                <label for="name">Nama</label>
                <input type="text" class="form-control" name="name" id="name">
              </div>

              <div class="form-group">
                <label for="name">Deskripsi</label>
                <textarea class="form-control" name="deskripsi" id="deskripsi" rows="3"></textarea>
              </div>

              <label>Upload Gambar</label>

              <div class="custom-file mb-3">
                <input name="gambar" type="file" class="custom-file-input" id="gambar">
                <label class="custom-file-label" for="gambar">Upload</label>
              </div>

              <label for="kategori">Kategori: </label>

              <div>
                <div class="form-check-inline">
                  <input type="radio" name="kategori" id="Online" class="form-check-input" value="Online">
                  <label for="Online" class="form-check-label">Online</label>
                </div>
                <div class="form-check-inline">
                  <input type="radio" name="kategori" id="Offline" class="form-check-input" value="Offline">
                  <label for="Offline" class="form-check-label">Offline</label>
                </div>

              </div>
            </div>
          </div>
        </div>

        <div class="col col-6">
          <div class="card h-100">
            <div style="height: 24px; border-radius: 4px 4px 0 0" class="bg-primary"></div>
            <div class="card-body">
              <div class="form-group">
                <label for="name">Tanggal</label>
                <input type="date" class="form-control" name="tanggal" id="tanggal">
              </div>

              <div class="d-flex">

                <div class="w-100 pr-1">
                  <label for="mulai">Jam Mulai</label>
                  <select name="mulai" id="mulai" class="form-control">
                    <?php
                    $time = array("00:00", "01:00", "02:00", "03:00", "04:00", "05:00", "06:00", "07:00", "08:00", "09:00", "10:00", "11:00", "12:00", "13:00", "14:00", "15:00", "16:00", "17:00", "18:00", "19:00", "20:00", "21:00", "22:00", "23:00");
                    foreach ($time as $t) {
                      echo "<option value='$t'>$t</option>";
                    }
                    ?>
                  </select>
                </div>

                <div class="w-100 pl-1">
                  <label for="berakhir">Jam Berakhir</label>
                  <select name="berakhir" id="berakhir" class="form-control">
                    <?php
                    foreach ($time as $t) {
                      echo "<option value='$t'>$t</option>";
                    }
                    ?>
                  </select>
                </div>

              </div>
              <div class="form-group">
                <label for="name">Tempat</label>
                <input type="text" class="form-control" name="tempat" id="tempat">
              </div>

              <div class="form-group">
                <label for="name">Harga</label>
                <input type="text" class="form-control" name="harga" id="harga">
              </div>

              <label for="benefit">Benefit</label>
              <div class="control">

                <input type="checkbox" name="benefit[]" id="Snacks" value="snacks">
                <label for="snacks">Snacks</label>

                <input type="checkbox" name="benefit[]" id="Souvenir" value="souvenir">
                <label for="souvenir">Souvenir</label>

                <input type="checkbox" name="benefit[]" id="Sertifikat" value="sertifikat">
                <label for="sertifikat">Sertifikat</label>
              </div>

              <a href="./home.php" class="mr-1">
                <button class="btn btn-danger" style="float: right" name="cancel">Cancel</button>
              </a>
              <button type="submit" class="btn btn-primary ml-1" style="float: right" style="margin-right: 10px;" name="submit">Submit</button>
            </div>
          </div>

        </div>
      </div>
    </form>   
  </div>

</body>
</html>