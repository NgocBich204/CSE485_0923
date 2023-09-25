<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <title>Login</title>
    <!--    Đăng nhập vào hệ thông-->
</head>
<body>
<?php
include "layout/header.php"
?>
<br>
<div class="container mt-3 bg-light ">
    <h2 class="text-center">Sign In</h2>
    <form action="" >
        <div class="mb-3 mt-3">
            <label for="text"> Username</label>
            <input type="text" class="form-control" placeholder="User name" >
        </div>
        <div class="mb-3">
            <label for="pwd">Password:</label>
            <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd">
        </div>
        <div class="form-check mb-3">
            <label class="form-check-label">
                <input class="form-check-input" type="checkbox" name="remember"> Remember me
            </label>
        </div>
        <button type="submit" class="btn btn-primary">Login</button>
        <br>
    </form>
    <p> Dont have an account? <a href="">Sign Up</a></p>
    <a  class="text-primary text-center" href="">Forgot your pasword?</a>
</div>
<br>
<br>
<br>




<?php
    include  "layout/footer.php"
?>

</body>
</html>

