<?php


interface SubjectBO
{
    public function getAllSubjectName();

    public function adddSubject(Subject $subject);

    public function updateSubject(Subject $subject);

    public function deleteSubjectName($subjectId);
}