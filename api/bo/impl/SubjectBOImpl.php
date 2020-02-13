<?php
require_once $_SERVER['DOCUMENT_ROOT'] . "../NeoGuru/api/bo/SubjectBO.php";
require_once $_SERVER['DOCUMENT_ROOT'] . "../NeoGuru/api/model/Subject.php";
require_once $_SERVER['DOCUMENT_ROOT'] . "../NeoGuru/api/db/DBConnection.php";
require_once $_SERVER['DOCUMENT_ROOT'] . "../NeoGuru/api/repo/impl/SubjectRepoImpl.php";

class SubjectBOImpl implements SubjectBO
{


    public function getAllSubjectName()
    {
        $connection = (new DBConnection())->getConnection();
        $subjectRepo = new SubjectRepoImpl();
        $subjectRepo->setConnection($connection);
        $subjctArray = $subjectRepo->getAllSubjectName();
        return $subjctArray;
    }

    public function adddSubject(Subject $subject)
    {
        // TODO: Implement adddSubject() method.
    }

    public function updateSubject(Subject $subject)
    {
        // TODO: Implement updateSubject() method.
    }

    public function deleteSubjectName($subjectId)
    {
        // TODO: Implement deleteSubjectName() method.
    }
}