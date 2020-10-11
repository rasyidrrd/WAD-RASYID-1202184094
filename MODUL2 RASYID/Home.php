<!doctype html>
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
    <nav class="navbar navbar-expand-lg navbar-primary bg-primary">


        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mx-auto ">
                <li class="nav-item active">
                    <a class="nav-link text-dark" href="Home.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark"
                        href="Booking.php?category=Standard&img=https://hotelcstockholm.com/wp-content/uploads/2018/03/Copy-of-DSC03257-1.jpg&local=True">Booking</a>
                </li>
            </ul>
        </div>
    </nav>


    <div class="container">
        <div class="class text-center mb-5 mt-1 text-info">
            <h4>EAD HOTEL</h4>
            <h5>Welcome to 5 Star Hotel</h5>
        </div>
    </div>

    <div class="container mb-5">
        <div class="card-deck col-11 mx-auto">
            <div class="card text-center mr-5" style="height:560px;">
                <img class="card-img-top mx-auto"
                    src="https://hotelcstockholm.com/wp-content/uploads/2018/03/Copy-of-DSC03257-1.jpg" 
                    height="200"
                    alt="Card image cap">
                <div class="card-body" style="height:200px;">
                    <h4 class="card-title text-center">Standard</h4>
                    <h5 class="card-text text-center text-info">$ 90/Day</h5>
                    <div class="card-header mt-5">
                        Facilities
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">1 Single Bed</li>
                        <li class="list-group-item">1 Bathroom</li>
                    </ul>

                </div>
                <div class="card-footer text-center">
                    <a class="btn btn-primary"
                        href="Booking.php?category=Standard&img=https://hotelcstockholm.com/wp-content/uploads/2018/03/Copy-of-DSC03257-1.jpg&local=False"
                        role="button">Book Now</a>
                </div>
            </div>

            <div class="card text-center mr-4 ml-4" style="height: 605px;">
                <img class="card-img-top"
                    src="https://www.sensesunsetseminyak.com/uploads/galeriahabitaciones/Superior-Room--Hotel-SenseSunsetSeminyak.jpg"
                    height="200" 
                    alt="Card image cap">
                <div class="card-body">
                    <h4 class="card-title text-center">Superior</h4>
                    <h5 class="card-text text-center text-info">$ 150/Day</h5>
                    <div class="card-header mt-5">
                        Facilities
                    </div>
                    <ul class="list-group list-group-flush ">
                        <li class="list-group-item">1 Double Bed</li>
                        <li class="list-group-item">1 Television and Wi-Fi</li>
                        <li class="list-group-item">1 Bathroom with hot water</li>
                    </ul>
                </div>
                <div class="card-footer text-center">
                    <a class="btn btn-primary"
                        href="Booking.php?category=Superior&img=https://www.sensesunsetseminyak.com/uploads/galeriahabitaciones/Superior-Room--Hotel-SenseSunsetSeminyak.jpg&local=False"
                        role="button">Book Now</a>
                </div>
            </div>
            <div class="card text-center ml-5">
                <img class="card-img-top" src="https://i.ytimg.com/vi/09pDca1mITM/maxresdefault.jpg" 
                height="200"
                alt="Card image cap">
                <div class="card-body">
                    <h4 class="card-title text-center">Luxury</h4>
                    <h5 class="card-text text-center text-info">$ 200/Day</h5>
                    <div class="card-header mt-5">
                        Facilities
                    </div>
                    <ul class="list-group list-group-flush ">
                        <li class="list-group-item">2 Double Bed</li>
                        <li class="list-group-item">2 Bathroom with hot water</li>
                        <li class="list-group-item">1 Kitchen</li>
                        <li class="list-group-item">1 Television and Wi-Fi</li>
                        <li class="list-group-item">1 Workroom</li>
                    </ul>
                </div>
                <div class="card-footer text-center">
                    <a class="btn btn-primary"
                        href="Booking.php?category=Luxury&img=https://i.ytimg.com/vi/09pDca1mITM/maxresdefault.jpg&isFromHome=False"
                        role="button">Book Now</a>
                </div>
            </div>
        </div>
    </div>


</body>

</html>