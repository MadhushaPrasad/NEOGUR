<?php
require_once $_SERVER['DOCUMENT_ROOT'] . "../NeoGuru/api/model/Student.php";
require_once $_SERVER['DOCUMENT_ROOT'] . "../NeoGuru/api/repo/StudentRepo.php";

class StudentRepoImpl implements StudentRepo
{
    private $connection;

    public function __construct()
    {
        $this->connection = (new DBConnection())->getConnection();
    }


    public function setConnection(mysqli $conne)
    {
        $this->connection = $conne;
    }

    public function checkStudent($email, $password)
    {
        $resultSet = $this->connection->query("SELECT email,password FROM student WHERE email='{$email}' and password='{$password}'");
        if (empty($resultSet)) {
            return false;
        } else {
            return true;
        }
    }

    public function addStudent(Student $student)
    {
        $response = $this->connection->query("insert into teacher(name,age,gender,telephone,email,password) values('{$student->getName()}','{$student->getAge()}','{$student->getGender()}','{$student->getTelephone()}','{$student->getEmail()}','{$student->getPassword()}')");
        if ($response > 0 && $this->connection->affected_rows > 0) {
            return true;
        } else {
            return false;
        }
    }
}