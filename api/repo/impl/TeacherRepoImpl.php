<?php
require_once $_SERVER['DOCUMENT_ROOT'] . "../NeoGuru/api/model/Teacher.php";
require_once $_SERVER['DOCUMENT_ROOT'] . "../NeoGuru/api/repo/TeacherRepo.php";

class TeacherRepoImpl implements TeacherRepo
{

//    private $condition = false;
    private $connection;


    public function checkTeacher($email, $password): bool
    {
        $resultSet = $this->connection->query("SELECT email,password FROM teacher WHERE email='{$email}' and password='{$password}'");
        if (empty($resultSet)) {
            return false;
        } else {
            return true;
        }
    }

    public function addTeacher(Teacher $teacher): bool
    {
        $response = $this->connection->query("insert into teacher(tName,tTelephone,email,password) values('{$teacher->getName()}','{$teacher->getTTelephone()}','{$teacher->getEmail()}','{$teacher->getPassword()}')");
        if ($response > 0 && $this->connection->affected_rows > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function setConnection(mysqli $conne)
    {
        $this->connection = $conne;
    }
}