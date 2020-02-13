<?php


class QueactionRepoImpl implements QueactionRepo
{


    private $connetion;

    /**
     * QueactionRepoImpl constructor.
     */
    public function __construct()
    {
        $this->connetion = (new DBConnection())->getConnection();
    }

    public function addQueacton(Queaction $queaction)
    {
        $response = $this->connetion->query("INSERT INTO queaction(pID,quactionD,QuMarksVal) VALUES('{$queaction->getPID()}','{$queaction->getQuactionD()}','{$queaction->getQuMarksVal()}')");
        if ($response > 0 && $this->connetion->affected_rows > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function updateQueacton(Queaction $queaction)
    {
        $response = $this->connetion->query("update queaction set pID='{$queaction->setPID()}',quactionD='{$queaction->setQuactionD()}',QuMarksVal='{$queaction->getQuMarksVal()}' WHERE qID='{$queaction->setQID()}'");

        if ($response > 0 && $this->connetion->affected_rows > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function deleteQueacton($queaction)
    {
        $response = $this->connetion->query("delete from queaction where id='{$queaction}'");
        if ($response > 0 && $this->connetion->affected_rows > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function getAllQueaction()
    {
        $resultSet =   $this->connetion->query("select * from queaction");
        return $resultSet->fetch_all();
    }

    public function setConnection(mysqli $conne)
    {
        $this->connetion = $conne;
    }
}