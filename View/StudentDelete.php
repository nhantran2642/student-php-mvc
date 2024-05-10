<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sách sinh viên</title>
</head>

<body>
    <a href="../index.php">Trang chủ</a>
    <h1>Danh sách sinh viên xóa</h1>
    <?php
    include_once '../Controller/StudentController.php';
    $studentController = new StudentController();
    $students = $studentController->getAllStudents();
    foreach ($students as $student) {
        echo "<h3>[<a href='javascript:void(0);' onclick=\"confirmDelete('{$student->id}', '{$student->name}')\">Xóa</a>]  {$student->name}</h3>";
    }
    ?>

</body>
<script>
    function confirmDelete(studentId, studentName) {
        var result = confirm("Bạn có chắc muốn xóa sinh viên '" + studentName + "' không?");
        if (result) {
            window.location.href = "../Controller/StudentDeleteProcess.php?id=" + studentId;
        }
    }
</script>

</html>