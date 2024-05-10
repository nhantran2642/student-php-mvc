<?php
require_once '../Controller/StudentController.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $age = $_POST['age'];
    $university = $_POST['uni'];

    $studentController = new StudentController();
    $result = $studentController->addStudent($name, $age, $university);

    if ($result) {
        echo "<script>alert('Thêm sinh viên mới thành công')</script>";
    } else {
        echo "<script>alert('Đã xảy ra lỗi khi thêm mới sinh viên')</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Thêm mới sinh viên</title>
</head>

<body>
    <div class="container">
        <a href="../index.php">Back</a>
        <form action="" method="post">
            <h1>Thêm mới một sinh viên</h1>
            <input type="text" id="sv-name" name="name" required placeholder="Name" /><br /><br>
            <input type="text" id="sv-age" name="age" required placeholder="Age" /><br /><br>
            <input type="text" id="sv-uni" name="uni" required placeholder="University" /><br /><br>
            <input type="submit" name="submit" value="Add" class="btn" />
            <input type="reset" name="reset" value="Reset" class="btn" onclick="clearInfo()" />
        </form>
    </div>
</body>
<script>
    function clearInfo() {
        document.getElementById('tb-name').value = '';
        document.getElementById('tb-age').value = '';
        document.getElementById('tb-uni').value = '';
    }
</script>

</html>