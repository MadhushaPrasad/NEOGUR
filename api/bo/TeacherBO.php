<?php
require_once $_SERVER['DOCUMENT_ROOT'] . "../NeoGuru/api/model/Teacher.php";

interface TeacherBO
{
    public function checkTeacher($email, $password);

    public function addTeacher(Teacher $teacher);
}