
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <title>BenhNhan</title>
</head>
<body>
    <div class="container">
        <h3 class="m-3 text-center text-uppercase"> bệnh nhân</h3>
        <a href="<?= DOMAIN.'app/views/patient/add.php'?>" class="btn btn-success" > Thêm Mới</a>
        <table class="table">

            <thead>
            <tr>
                <th scope="col">ID </th>
                <th scope="col">Tên Bênh Nhân</th>
                <th scope="col">Ngày Khám</th>
                <th scope="col">Triệu chứng</th>
            </tr>
            </thead>
            <tbody>
            <?php

            foreach ($benhnhans as $benhnhan) {
                ?>
                        <tr>
                            <th scope = "row" > <?= $benhnhan ->getId();  ?></th >
                            <th > <?= $benhnhan ->gettenBenhNhan();  ?></th >
                            <th > <?= $benhnhan ->getngayKham();  ?></th >
                            <th > <?= $benhnhan ->trieuChung(); ?></th >
                        </tr >
            <?php
            }
            ?>
            </tbody>
        </table>
    </div>
</body>
</html>
