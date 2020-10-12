<!doctype html>
<html lang="en">

<?php

$category = $_GET['category'];
$image = $_GET['img'];
$local = $_GET['local'];
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
                        href="Booking.php?category=Standard&img=https://hotelcstockholm.com/wp-content/uploads/2018/03/Copy-of-DSC03257-1.jpg&local=True">Booking</a>
                </li>
            </ul>
        </div>
    </nav>


    <div class="class container mt-5 mb-5">
        <div class="row">
            <div class="col-5 mr-5 ml-5">
                <from action="my_booking.php" method="get">
                    <div class="form-group">
                        <label for="exampleInputName">Nama <?php echo $category?></label>
                        <input type="text" class="form-control" id="nama" aria-describedby="NameHelp" name="nama"
                            required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputDate">Check-In</label>
                        <input type="date" class="form-control" id="exampleInputDate" name="tanggal" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputDuration">Duration</label>
                        <input type="text" class="form-control" id="exampleInputDuration"
                            aria-describedby="DurationHelp" name="durasi" required>

                        <small>Day(s)</small>
                    </div>

                    <label>Room Type</label>
                    <?php if ($local === "True") : ?>

                    <select class="form-control" id="mySelect" name="kamar">

                        <option name="kamar" value="Standard">Standard</option>
                        <option name="kamar" value="Superior">Superior</option>
                        <option name="kamar" value="Luxury">Luxury</option>
                        <?php else : ?>
                        <input placeholder="<?php echo $category ?>" class="form-control" type="text"
                            name="kamar" value="<?= $category ?>" readonly>
                        <?php endif ; ?>



                    </select>

                    <p></p>
                    <label>Add Service(s)</label>
                    <p></p>
                    <small>$ 20/Service</small>
                    <div class="form-group form-check">
                        <input type="checkbox" class="form-check-input" value="service" name="RoomService"
                            id="exampleroomservice">
                        <label class="form-check-label" for="exampleroomservice">Room Service</label>
                        <p></p>

                        <input type="checkbox" class="form-check-input" value="service" name="Breakfast"
                            id="examplebreakfast">
                        <label class="form-check-label" for="examplebreakfast">Breakfast</label>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPhone">Phone Number</label>
                        <input type="name" class="form-control" id="exampleInputPhone" aria-describedby="PhoneHelp"
                            name="noHP">
                    </div>
                    <button type="" class="btn btn-primary" style="width: 100%;" name="submit">Book</button>

                </form>
            </div>
            <div class="mr-5 ml-5">
                <img src="<?= $image?>" width="400" height="350" alt="">
            </div>
        </div>


    </div>





</body>

</html>