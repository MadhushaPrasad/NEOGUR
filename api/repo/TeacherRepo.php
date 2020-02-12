<?php
require_once $_SERVER['DOCUMENT_ROOT'] . "../NeoGuru/api/model/Teacher.php";

interface TeacherRepo
{
    public function setConnection(mysqli $conne);

    public function checkTeacher($email, $password);

    public function addTeacher(Teacher $teacher);
}