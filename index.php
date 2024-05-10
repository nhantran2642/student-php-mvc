<?php

@include 'connect_db.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home page</title>
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
    <div class="container">
        <div class="content">
            <h1>Welcome</h1>
            <a href="./View/StudentList.php" class="btn">Xem danh sách sinh viên</a><br>

            <a href="./View/StudentAdd.php" class="btn">Thêm mới sinh viên</a><br>
            <a href="./View/StudentUpdate.php" class="btn">Sửa sinh viên</a><br>
            <a href="./View/StudentDelete.php" class="btn">Xóa sinh viên</a><br>
        </div>

    </div>

</body>

</html>