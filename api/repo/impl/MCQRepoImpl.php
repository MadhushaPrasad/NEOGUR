<?php


class MCQRepoImpl implements MCQRepo
{

    private $connection;


    public function getAllQuestion()
    {
        $resultSet = $this->connection->query("select * from mcq");
        return $resultSet->fetch_all();
    }

    public function setConnection(mysqli $conne)
    {
        $this->connection = $conne;
    }

    public function addQuestion(MQC $mcq)
    {
        $response = $this->connection->query("insert into mcq values()");
        if ($response > 0 && $this->connection->affected_rows > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function updateQuestion(MQC $mcq)
    {
        $response = $this->connection->query("");
        if ($response > 0 && $this->connection->affected_rows > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function deleteQuestion($question)
    {
        $response = $this->connection->query("delete from mcq where question='{$question}'");
        if ($response > 0 && $this->connection->affected_rows > 0) {
            return true;
        } else {
            return false;
        }
    }
}