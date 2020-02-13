<?php


class SubQueactionRepoImpl implements SubQueactionRepo
{
    private $connection;

    /**
     * SubQueactionRepoImpl constructor.
     */
    public function __construct()
    {
        $this->connection = (new DBConnection())->getConnection();
    }


    public function addSubQueaction(SubQueaction $subQueaction)
    {
        $response = $this->connection->query("INSERT INTO subQueaction(qID,subQuactionD,subQuMarksVal) VALUES
            ('{$subQueaction->getQID()}','{$subQueaction->getSubQuactionD()}','{$subQueaction->getSubQuMarksVal()}')");
        if ($response > 0 && $this->connnection->affected_rows > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function updateSubQueaction(SubQueaction $subQueaction)
    {
        $response = $this->connection->query("UPDATE subQueaction SET qID='{$subQueaction->getQID()}'
                ,subQuactionD='{$subQueaction->getSubQuactionD()}',subQuMarksVal='{$subQueaction->getSubQuMarksVal()}' 
                                                                        WHERE sbQID='{$subQueaction->getSbQID()}'");
        if ($response > 0 && $this->connnection->affected_rows > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function deleteSubQueaction(SubQueaction $subQueaction)
    {
        $response = $this->connection->query("delete from subQueaction where id='{$subQueaction->getQID()}'");
        if ($response > 0 && $this->connection->affected_rows > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function getAllSubQueaction(SubQueaction $subQueaction)
    {
        $resultSet = $this->connection->query("select * from subQueaction");
        return $resultSet->fetch_all();
    }

    public function setConnection(mysqli $conne)
    {
        $this->connection = $conne;
    }
}