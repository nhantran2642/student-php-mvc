<?php

if (isset($_GET['id'])) {
	$studentId = $_GET['id'];

	include_once '../Controller/StudentController.php';
	$studentController = new StudentController();
	$student = $studentController->getStudentById($studentId);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Add Student</title>
</head>

<body>
	<h1>Thông tin chi tiết sinh viên</h1>
	<p><strong>Tên: </strong> <?php echo $student->name ?></p>
	<p><strong>Tuổi: </strong> <?php echo $student->age ?></p>
	<p><strong>Trường: </strong> <?php echo $student->university ?></p>
	<a href='javascript:history.back()'>Back</a>
</body>

</html>