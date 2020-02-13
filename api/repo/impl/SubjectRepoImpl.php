<?php
require_once $_SERVER['DOCUMENT_ROOT'] . "../NeoGuru/api/model/Subject.php";
require_once $_SERVER['DOCUMENT_ROOT'] . "../NeoGuru/api/repo/SubjectRepo.php";

class SubjectRepoImpl implements SubjectRepo
{
    private $connection;

    /**
     * SubjectRepoImpl constructor.
     */
    public function __construct()
    {
        $this->connection = (new DBConnection())->getConnection();
    }


    public function getAllSubjectName()
    {
        $resultSet = $this->connection->query("SELECT * FROM subject");
        return $resultSet->fetch_all();
    }

    public function setConnection(mysqli $conne)
    {
        $this->connection = $conne;
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