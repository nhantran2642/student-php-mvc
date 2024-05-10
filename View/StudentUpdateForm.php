<?php

if (isset($_GET['id'])) {
    $studentId = $_GET['id'];

    include_once '../Controller/StudentController.php';
    $studentController = new StudentController();
    $student = $studentController->getStudentById($studentId);


    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST['name'];
        $age = $_POST['age'];
        $university = $_POST['uni'];

        $studentController = new StudentController();
        $result = $studentController->updateStudent($studentId, $name, $age, $university);


        if ($result) {
            header('Location: StudentUpdateForm.php?id=' . $studentId);
            exit();
        } else {
            echo "<script>alert('Đã xảy ra lỗi khi cập nhật sinh viên')</script>";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Student</title>
</head>

<body>
    <a href='StudentUpdate.php'>Back</a>
    <h1>Thông tin chi tiết sinh viên</h1>
    <form action="" method="post" onsubmit="return confirmUpdate()">
        <p><strong>Tên: </strong> <input type="text" name="name" id="name" value="<?php echo $student->name ?>"></p>
        <p><strong>Tuổi: </strong><input type="text" name="age" id="age" value="<?php echo $student->age ?>"></p>
        <p><strong>Trường: </strong><input type="text" name="uni" id="uni" value="<?php echo $student->university ?>"></p>
        <input type="submit" value="Update">
        <input type="reset" value="Reset" onclick="clearInfo()">
    </form>

    <script>
        function confirmUpdate() {
            return confirm("Bạn có chắc muốn cập nhật sinh viên này không?");
        }

        function clearInfo() {
            document.getElementById('name').value = '<?php echo $student->name ?>';
            document.getElementById('age').value = '<?php echo $student->age ?>';
            document.getElementById('uni').value = '<?php echo $student->university ?>';
        }
    </script>
</body>

</html>