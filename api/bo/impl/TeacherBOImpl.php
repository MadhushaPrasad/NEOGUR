<?php
require_once $_SERVER['DOCUMENT_ROOT'] . "../NeoGuru/api/repo/TeacherRepo.php";
require_once $_SERVER['DOCUMENT_ROOT'] . "../NeoGuru/api/bo/TeacherBO.php";
require_once $_SERVER['DOCUMENT_ROOT'] . "../NeoGuru/api/db/DBConnection.php";
require_once $_SERVER['DOCUMENT_ROOT'] . "../NeoGuru/api/repo/impl/TeacherRepoImpl.php";

class TeacherBOImpl implements TeacherBO
{
    public function checkTeacher($email, $password)
    {
        $connection = (new DBConnection())->getConnection();
        $teacherRepo = new TeacherRepoImpl();
        $teacherRepo->setConnection($connection);
        $checkedTeacher = $teacherRepo->checkTeacher($email, $password);
        return $checkedTeacher;
    }

    public function addTeacher(Teacher $teacher)
    {
        $connection = (new DBConnection())->getConnection();
        $teacherRepo = new TeacherRepoImpl();
        $teacherRepo->setConnection($connection);
        $tea = new Teacher($teacher->getName(), $teacher->getTTelephone(), $teacher->getEmail(),
            $teacher->getPassword());
        $res = $teacherRepo->addTeacher($tea);
        if ($res) {
            return $res;
        } else {
            return $connection->error;
        }
    }
}