<?php
if(isset($_GET['page'])){
    $page = $_GET['page'];
}else{
    $page = 1;
}

try{
    //Buoc 1: Mo ket noi
    $conn = new PDO("mysql:host=localhost;dbname=crud_demo", "root","123");
    //Buoc 2: Thuc hien truy van
    $n = ($page -1) * 10;
    $sql = "SELECT * FROM users ORDER BY created_at DESC LIMIT 10 OFFSET $n";
    //    $conn->query($sql);
    $stmt = $conn->prepare($sql);
    $stmt->execute();

    //Buoc 3: Xu ly ket qua
    $users = $stmt->fetchAll();
}catch(PDOException $e){
    echo "Error: ".$e->getMessage();
}
?>

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
                <h3 class=" text-center text-uppercase">User Management</h3>
                <a href="user_add.php" class="btn btn-success"><i class="bi bi-person-add"></i> Add a New User</a>
                <?php
                if(isset($_GET['success'])){
                    $id = $_GET['success'];
                    echo "<h2 style='color:red'>The user have id: {$id} deleted</h2>";
                }
                ?>
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">First Name</th>
                        <th scope="col">Last Name</th>
                        <th scope="col">Username</th>
                        <th scope="col">Detail</th>
                        <th scope="col">Edit</th>
                        <th scope="col">Delete</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    foreach($users as $user){
                        ?>
                        <tr>
                            <th scope="row">
                                <?= $user[0]; ?>
                            </th>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>
                                <?= $user[1]; ?>
                            </td>
                            <td>
                                <a href="user_detail.php?id=1">
                                    <i class="bi bi-eye-fill"></i>
                                </a>
                            </td>
                            <td>
                                <a href="user_edit.php?id=1">
                                    <i class="bi bi-pencil"></i>
                                </a>
                            </td>
                            <td>
                                <a href="" data-bs-toggle="modal" data-bs-target="#<?= $user[0]; ?>">
                                    <i class="bi bi-trash3"></i>
                                </a>
                                <!-- Modal -->
                                <div class="modal fade" id="<?= $user[0]; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="exampleModalLabel">DELETE User</h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                Are you sure detele the user have id: <?= $user[0]; ?>?
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                                <a href="user_delete.php?id=<?= $user[0]; ?>" class="btn btn-success">OK</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <?php
                    }
                    ?>

                    </tbody>
                </table>
                <div class="d-flex justify-content-center">
                    <nav aria-label="Page navigation example">
                        <ul class="pagination">
                            <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                            <li class="page-item"><a class="page-link" href="user_management.php?page=1">1</a></li>
                            <li class="page-item"><a class="page-link" href="user_management.php?page=2">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">Next</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>