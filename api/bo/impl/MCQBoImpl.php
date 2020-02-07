<?php
require_once __DIR__ . "../MCQBo.php";
require_once __DIR__ . "../../repo/impl/UserRepoImpl.php";
require_once __DIR__ . "../../db/DBConnection.php";
require_once __DIR__ . "../../model/Question.php";
require_once __DIR__ . "../../model/Answer.php";
require_once __DIR__ . "../../model/Marks.php";

class MCQBoImpl implements MCQBo
{

    public function addQuestion(Question $question)
    {
        $mcqRepo = new MCQRepoImpl();
        $connection = (new DBConnection())->getConnection();
        $mcqRepo->setConnection($connection);
        new Question($question->getQID(), $question->getPaperID(), $question->getQuactionD());
    }

    public function updateQuestion(Question $question)
    {
        // TODO: Implement updateQuestion() method.
    }

    public function deleteQuestion($question)
    {
        // TODO: Implement deleteQuestion() method.
    }

    public function getAllQuestion()
    {
        // TODO: Implement getAllQuestion() method.
    }

    public function addAnswer(Answer $answer)
    {
        // TODO: Implement addAnswer() method.
    }

    public function updateAnswer(Answer $answer)
    {
        // TODO: Implement updateAnswer() method.
    }

    public function deleteAnswer($answer)
    {
        // TODO: Implement deleteAnswer() method.
    }

    public function getAllAnswer()
    {
        // TODO: Implement getAllAnswer() method.
    }

    public function addMarks(Marks $marks)
    {
        // TODO: Implement addMarks() method.
    }

    public function updateMarks(Marks $marks)
    {
        // TODO: Implement updateMarks() method.
    }

    public function deleteMarks($marks)
    {
        // TODO: Implement deleteMarks() method.
    }

    public function getAllMarks()
    {
        // TODO: Implement getAllMarks() method.
    }
}