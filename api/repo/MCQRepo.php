<?php


interface MCQRepo
{
    public function setConnection(mysqli $conne);

    public function addQuestion(MQC $mcq);

    public function updateQuestion(MQC $mcq);

    public function deleteQuestion($question);

    public function getAllQuestion();
}