<?php


class Marks
{
    private $marksID;
    private $marksVal;

    /**
     * Marks constructor.
     * @param $marksID
     * @param $marksVal
     */
    public function __construct($marksID, $marksVal)
    {
        $this->marksID = $marksID;
        $this->marksVal = $marksVal;
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