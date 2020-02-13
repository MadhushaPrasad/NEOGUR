<?php


class MarksRepoImpl implements MarksRepo
{

    private $connection;

    /**
     * MarksRepoImpl constructor.
     */
    public function __construct()
    {
        $this->connection = (new DBConnection())->getConnection();
    }


    public function setConnection(mysqli $conne)
    {
        $this->connection = $conne;
    }

    public function addMarks(Marks $marks)
    {
        $this->connection->query("INSERT INTO marks(pID,marksVal) VALUES('{$marks->setPID()}','{$marks->getMarksVal()}')");
    }

    public function update(Marks $marks)
    {
        // TODO: Implement update() method.
    }
}