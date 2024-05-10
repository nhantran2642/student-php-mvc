<?php
include_once("../Model/StudentModel.php");
class StudentController
{

    private $model;

    public function __construct()
    {
        $this->model = new StudentModel();
    }

    public function getAllStudents()
    {
        return $this->model->getAllStudents();
    }

    public function getStudentById($id)
    {
        return $this->model->getStudentById($id);
    }

    public function addStudent($name, $age, $university)
    {
        return $this->model->addStudent($name, $age, $university);
    }

    public function updateStudent($id, $name, $age, $university)
    {
        return $this->model->updateStudent($id, $name, $age, $university);
    }

    public function deleteStudent($id)
    {
        return $this->model->deleteStudent($id);
    }
}
