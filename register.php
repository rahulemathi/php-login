<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Udhaivi Registration portal</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>

<body>
    <div class="container">
        <h1 class="text-center">Welcome Udhaivi to Registration portal</h1>
        <div class="row d-flex justify-content-center mt-5">
            <div class="card" style="width: 18rem;">
                <img src="https://www.udhaivi.com/img/logo-updated.png" class="card-img-top" alt="udhaivi">
                <div class="card-body">
                    <h5 class="card-title">Registration</h5>
                    <form class="form-group" action="register-login.php" method="post">
                        <input id="username" class="form-group my-2" name="username" placeholder="Username">
                        <input id="password" class="form-group my-2" name="password" placeholder="Password">
                        <input id="cpassword" class="form-group my-2" name="cpassword" placeholder="Confirm Password">
                        <span id="alert"></span>
                        <button type="submit" onclick="check()" class="btn btn-primary">Register</button>

                        <a href="index.php" class="ms-5"> Login </a>
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

    <script>
const pwd = document.getElementById("password");
const cpwd = document.getElementById("cpassword");
cpwd.onclick = function check(){
if(pwd.value != cpwd.value){
    document.getElementById("alert").innerHTML = "Entered password Doesnt Match";
}else{
    document.getElementById("alert").innerHTML = "";
}
}
    </script>

</body>

</html>