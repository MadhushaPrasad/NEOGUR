<?php
require_once $_SERVER['DOCUMENT_ROOT'] . "../NeoGuru/api/model/Student.php";

interface StudentRepo
{
    public function setConnection(mysqli $conne);

    public function checkStudent($email, $password);

    public function addStudent(Student $teacher);
}