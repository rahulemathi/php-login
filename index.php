<?php
    session_start();
    
$url = "localhost";
$uname = "root";
$pwd = "";
$db = "login";
    $message="";
    if(count($_POST)>0) {
        $conn = mysqli_connect('127.0.0.1:3306','root','','login') or die('Unable To connect');
        $result = mysqli_query($conn,"SELECT * FROM login WHERE username='" . $_POST["username"] . "' and password = '". $_POST["password"]."'");
        $row  = mysqli_fetch_array($result);
        if(is_array($row)) {
        $_SESSION["id"] = $row['id'];
        $_SESSION["name"] = $row['name'];
        } else {
         $message = "Invalid Username or Password!";
        }
    }
    if(isset($_SESSION["id"])) {
    header("Location: https://www.google.com");
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Udhaivi login portal</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>

<body>
    <div class="container">
        <h1 class="text-center">Welcome Udhaivi to login portal</h1>
        <div class="row d-flex justify-content-center mt-5">
            <div class="card" style="width: 18rem;">
                <img src="https://www.udhaivi.com/img/logo-updated.png" class="card-img-top" alt="udhaivi">
                <div class="card-body">
                    <h5 class="card-title">Login</h5>
                    <form class="form-group" action="   " method="post">
                        <input class="form-group my-2" name="username" placeholder="Username">
                        <input class="form-group my-2" name="password" placeholder="Password">
                        <button type="submit" class="btn btn-primary">Sign in</button>
                        <a href="register.php" class="ms-5"> register </a>
                    </form>
                </div>
            </div>
        </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>
</body>

</html>