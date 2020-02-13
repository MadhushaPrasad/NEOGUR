<?php
require_once $_SERVER['DOCUMENT_ROOT'] . "../NeoGuru/api/model/Subject.php";

interface SubjectRepo
{
    public function getAllSubjectName();

    public function adddSubject(Subject $subject);

    public function updateSubject(Subject $subject);

    public function deleteSubjectName($subjectId);

    public function setConnection(mysqli $conne);
}