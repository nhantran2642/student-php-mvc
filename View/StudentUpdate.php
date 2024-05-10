<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student List</title>
</head>

<body>
    <a href="../index.php">Trang chủ</a>
    <h1>Danh sách sinh viên cập nhật</h1>
    <?php
    include_once '../Controller/StudentController.php';
    $studentController = new StudentController();
    $students = $studentController->getAllStudents();
    foreach ($students as $student) {
        echo "<h3><a href='StudentUpdateForm.php?id={$student->id}'>{$student->name}</a></h3>";
    }
    ?>

</body>

</html>