<?php
require_once __DIR__ . "../model/Question.php";
require_once __DIR__ . "../model/Answer.php";

interface MCQBo
{
    public function addQuestion(Question $question);

    public function updateQuestion(Question $question);

    public function deleteQuestion($question);

    public function getAllQuestion();

//    answer

    public function addAnswer(Answer $answer);

    public function updateAnswer(Answer $answer);

    public function deleteAnswer($answer);

    public function getAllAnswer();

//    marks

    public function addMarks(Marks $marks);

    public function updateMarks(Marks $marks);

    public function deleteMarks($marks);

    public function getAllMarks();

}