<!doctype html>
<html lang="en">

<?php
$random = (rand(100000,999999));
$nama = $_GET['nama'];
$durasi = $_GET['durasi'];

$kamar = $_GET['kamar'];
$noHP = $_GET['noHP'];
$in = date('d-m-yy', strtotime($_GET['tanggal']));


$out = date('d-m-yy', strtotime($in. ' + ' .$durasi. 'days'));

?>



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

    <title>Booking</title>
</head>

<body>



    <nav class="navbar navbar-expand-lg navbar-primary bg-primary">

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mx-auto ">
                <li class="nav-item ">
                    <a class="nav-link text-dark" href="Home.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link text-dark"
                        href="Booking.php?category=Standard&img=https://hotelcstockholm.com/wp-content/uploads/2018/03/Copy-of-DSC03257-1.jpg&isFromHome=True">Booking</a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="class container">
        <table class="table mt-5">
            <thead>
                <tr>
                    <th scope="col">Booking Number</th>
                    <th scope="col">Name</th>
                    <th scope="col">Check-In</th>
                    <th scope="col">Check-Out</th>
                    <th scope="col">Room Type</th>
                    <th scope="col">Phone Number</th>
                    <th scope="col">Service</th>
                    <th scope="col">Total Price</th>

                </tr>
            </thead>

            <tbody>
                <tr>
                    <th scope="col"><?= $random ?></th>
                    <td><?= $nama ?></td>
                    <td><?= $in ?></td>
                    <td><?= $out ?></td>
                    <td><?= $kamar ?></td>
                    <td><?= $noHP ?></td>
                    <td><?php
									if (!empty ($_GET['service'])) {
										foreach ($_GET['service'] as $value) {
											echo '<ul>';
												echo "<li>$value</li>";
											echo '</ul>';
										}
									}
									else {
										echo "no service";
									}
						?></td>
                    <td><?php
									if ($kamar=="Standard") {
										$total="90";
										$total= $total * $durasi;
									}
									else if ($kamar=="Superior") {
										$total="150";
										$total= $total * $durasi;
									}
									else {
										$total="200";
										$total= $total * $durasi;
									}
									if (!empty ($_GET['service'])) {
										foreach ($_GET['service'] as $value) {
											$total = $total+"20";								
										}
									}
									echo "$ ",$total;
						?></td>
                </tr>
                </tr>
            </tbody>

        </table>
    </div>






</html>