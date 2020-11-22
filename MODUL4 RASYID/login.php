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

<head>
    <title>Login</title>
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
                    <a class="nav-link" href="#">Login<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="register.php">Register</a>
                </li>
        </div>
    </nav>
   
    <?php 

require_once("config.php");

//cek cookie
if( isset($_COOKIE['id']) && isset($_COOKIE['cek'])){
    $id = $_COOKIE['id'];
    $cek = $_COOKIE['cek'];

    $result = mysqli_query($conn, "SELECT email FROM user WHERE id = $id");
    $row = mysqli_fetch_assoc($result);

    if( $cek === hash('sha256', $row['email'])){
        $_SESSION['login'] = true;
    }
}

if(isset($_POST['login'])){

    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);
    $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);

    $sql = "SELECT * FROM user WHERE email=:email";
    $stmt = $db->prepare($sql);
    
    // bind parameter ke query
    $params = array(
        
        ":email" => $email
    );

    $stmt->execute($params);

    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    // jika user terdaftar
    if($user){
        // verifikasi password
        if(password_verify($password, $user["password"])){
            // buat Session
            session_start();
            $_SESSION["user"] = $user;
            $_SESSION["id"] = $user["id"]; 
            $_SESSION["email"] = $user["email"];
            $_SESSION["no_hp"] = $user["no_hp"];
            // login sukses, alihkan ke halaman timeline

             //cek remember me
             if(!empty($_POST['remember'])){
                //buat cookie
                setcookie('email', $_POST['email'], time()+60);
                setcookie('password', $_POST['password'], time()+60);
            }else{
                if(isset($_COOKIE['email'])){
                    setcookie('email','');
                }
                if(isset($_COOKIE['password'])){
                    setcookie('password','');
                }
            }
            header("Location: index.php");
        } else {
            echo 
            '<div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong>Login Gagal!</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>';
        }
    }
}
?>

<?php 

?>

    <br>
    <br>
    <br>

    <div class="flex-container">

        <div class="card mx-auto" style="width: 24rem;">

            <div class="card-header bg-white mr-5 ml-5 align-center mx-center">
                <br>
                <h4 class="card-title text-center">Login</h4>

            </div>
            <div class="container">

                <div class="row">
                    <div class="card-body align-center mr-5 mx-5 mx-center">

                        <form action ="" method="POST">

                            <div class="form-group">
                                <label for="email">Email</label>
                                <input class="form-control" type="text" name="email" placeholder="" required
                                value="<?php if(isset($_COOKIE['email'])) { echo $_COOKIE['email'];}?>">
                            </div>

                            <div class="form-group">
                                <label for="password">Kata Sandi</label>
                                <input class="form-control" type="password" name="password" placeholder="" required
                                value="<?php if(isset($_COOKIE['password'])) { echo $_COOKIE['password'];}?>">
                                <div class="form-group">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="remember" name="remember"
                                <?php if(isset($_COOKIE['email'])) { ?> checked <?php } ?>>
                            <label class="form-check-label" for="remember">Remember Me</label>
                        </div>
                            </div>

                            <div class="text-center">
                                <input type="submit" class="btn btn-primary" name="login" value="Login"/>
                                <p class="text-center mt-2">Belum Punya Akun?
                    
                                <a class="text-muted" href="register.php">Registrasi</a>
                                
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