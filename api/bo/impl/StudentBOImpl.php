<?php
require_once $_SERVER['DOCUMENT_ROOT'] . "../NeoGuru/api/bo/StudentBo.php";
require_once $_SERVER['DOCUMENT_ROOT'] . "../NeoGuru/api/repo/impl/StudentRepoImpl.php";

class StudentBOImpl implements StudentBo
{

    public function checkStudent($email, $password)
    {
        $connection = (new DBConnection())->getConnection();
        $studentRepo = new StudentRepoImpl();
        $studentRepo->setConnection($connection);
        $studentRepo->checkStudent($email, $password);
        return $studentRepo;
    }

    public function addStudent(Student $student)
    {
        $connection = (new DBConnection())->getConnection();
        $studentRepo = new StudentRepoImpl();
        $studentRepo->setConnection($connection);
        $student = new Student($student->getName(), $student->getAge(), $student->getGender(), $student->getTelephone(), $student->getEmail(), $student->getPassword());
        $res = $studentRepo->addStudent($student);
        if ($res) {
            return $res;
        } else {
            return $connection->error;
        }
    }
}