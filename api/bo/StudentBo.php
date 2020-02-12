<?php


interface StudentBo
{
    public function checkStudent($email, $password);

    public function addStudent(Student $student);

}