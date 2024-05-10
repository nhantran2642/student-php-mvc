<?php

if (isset($_GET['id'])) {
    $studentId = $_GET['id'];

    include_once '../Controller/StudentController.php';
    $studentController = new StudentController();
    $result = $studentController->deleteStudent($studentId);
    if ($result) {
        header('Location: ../View/StudentDelete.php');
        exit();
    } else {
    }
}
