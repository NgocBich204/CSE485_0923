<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
</head>
<body style="background-color: #dbe3e0;">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <form action="<?php echo DOMAIN."/public/indexDoctor.php?action=Store_Add"?>" method="post" class="row g-3" style="margin-top: 70px;">
                    <h3 class="text-center text-uppercase text-success my-3">THEM BÁC SĨ</h3>
                    <br> <br>
                    <div class="input-group mb-3">
                        <span class="input-group-text">Tên bác sĩ</span>
                        <input type="text" name="nameDoctor" class="form-control" required>
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text">Chuyên Khoa</span>
                        <input type="text" name="specialist" class="form-control" required>
                    </div>
                    <br>
                    <div>
                        <button type="submit" name="sbm" class="btn btn-outline-success">Them</button>&emsp;
                        <a type="button" class="btn btn-outline-secondary" href="<?php echo DOMAIN."/public/indexDoctor.php"?>">Thoat</a>
                    </div>
                </form>
            </div>
            <div class="col-md-2"></div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>