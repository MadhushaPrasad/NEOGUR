<?php


class Marks
{
    private $marksID;
    private $pID;
    private $id;
    private $marksVal;

    /**
     * Marks constructor.
     * @param $id
     * @param $marksVal
     */
    public function __construct($id, $marksVal, $pID)
    {
        $this->id = $id;
        $this->marksVal = $marksVal;
        $this->pID = $pID;
    }

    /**
     * @return mixed
     */
    public function getPID()
    {
        return $this->pID;
    }

    /**
     * @param mixed $pID
     */
    public function setPID($pID)
    {
        $this->pID = $pID;
    }

    /**
     * @return mixed
     */

    public function getMarksID()
    {
        return $this->marksID;
    }

    /**
     * @param mixed $marksID
     */
    public function setMarksID($marksID)
    {
        $this->marksID = $marksID;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getMarksVal()
    {
        return $this->marksVal;
    }

    /**
     * @param mixed $marksVal
     */
    public function setMarksVal($marksVal)
    {
        $this->marksVal = $marksVal;
    }
}