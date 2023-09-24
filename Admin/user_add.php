<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard Homepage</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
</head>
<body>
<div class="container-fluid">
    <div class="row">
        <?php
        include "layout/sidebar.php";
        ?>
        <div class="col-md-9 main">
            <?php
            include "layout/header.php";
            ?>
            <div class="main-content vh-100 p-3">
                <?php
                if(isset($_GET['error'])){
                    echo "<p style='background-color:orange'>{$_GET['error']}</p>";
                }
                ?>
                <h3 class=" text-center text-uppercase">Add a new User</h3>
                <form action="process_user_add.php" method="post">
                    <div class="row input-group mb-3">
                        <div class="col-md-4 ">
                            Username
                        </div>
                        <div class="col-md-8">
                            <input type="text" name="user" id="" class="form-control">
                        </div>
                    </div>
                    <div class="row input-group mb-3">
                        <div class="col-md-4 ">
                            Email
                        </div>
                        <div class="col-md-8">
                            <input type="email" name="mail" id="" class="form-control">
                        </div>
                    </div>
                    <div class="row input-group mb-3">
                        <div class="col-md-4 ">
                            Password
                        </div>
                        <div class="col-md-8">
                            <input type="password" name="pass1" id="" class="form-control">
                        </div>
                    </div>
                    <div class="row input-group mb-3">
                        <div class="col-md-4 ">
                            Re-type Password
                        </div>
                        <div class="col-md-8">
                            <input type="password" name="pass2" id="" class="form-control">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4"></div>
                        <div class="col-md-8">
                            <button type="submit" class="btn btn-success" name="sbmSave">Save</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>