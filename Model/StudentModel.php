<?php
require_once '../Database/Database.php';
require_once 'StudentEntity.php';

class StudentModel
{
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function getAllStudents()
    {
        $connection = $this->db->getConnection();
        $sql = "SELECT * FROM sinhvien";
        $result = $connection->query($sql);

        $students = [];
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $student = new StudentEntity($row["id"], $row["name"], $row["age"], $row["university"]);
                $students[] = $student;
            }
        }
        return $students;
    }

    public function getStudentById($id)
    {
        $connection = $this->db->getConnection();
        $sql = "SELECT * FROM sinhvien WHERE id = $id";
        $result = $connection->query($sql);

        if ($result->num_rows == 1) {
            $row = $result->fetch_assoc();
            $student = new StudentEntity($row["id"], $row["name"], $row["age"], $row["university"]);
            return $student;
        } else {
            return null;
        }
    }

    public function addStudent($name, $age, $university)
    {
        $connection = $this->db->getConnection();
        $name = $connection->real_escape_string($name);
        $university = $connection->real_escape_string($university);

        $sql = "INSERT INTO sinhvien (id, name, age, university) VALUES (0,'$name', $age, '$university')";
        $result = $connection->query($sql);
        return $result;
    }

    public function updateStudent($id, $name, $age, $university)
    {
        $connection = $this->db->getConnection();
        $name = mysqli_real_escape_string($connection, $name);
        $university = mysqli_real_escape_string($connection, $university);
        $age = mysqli_real_escape_string($connection, $age);

        $sql = "UPDATE sinhvien SET name = '$name', age = '$age', university = '$university' WHERE id = '$id'";
        $result = $connection->query($sql);
        return $result;
    }

    public function deleteStudent($id)
    {
        $connection = $this->db->getConnection();
        $sql = "DELETE FROM sinhvien WHERE id = $id";
        $result = $connection->query($sql);
        return $result;
    }
}
