<?php


class Queaction
{
    private $qID;
    private $pID;
    private $quactionD;
    private $QuMarksVal;

    /**
     * QueactionBo constructor.
     * @param $pID
     * @param $quactionD
     * @param $QuMarksVal
     */
    public function __construct($pID, $quactionD, $QuMarksVal)
    {
        $this->pID = $pID;
        $this->quactionD = $quactionD;
        $this->QuMarksVal = $QuMarksVal;
    }

    /**
     * @return mixed
     */
    public function getQID()
    {
        return $this->qID;
    }

    /**
     * @param mixed $qID
     */
    public function setQID($qID)
    {
        $this->qID = $qID;
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
    public function getQuactionD()
    {
        return $this->quactionD;
    }

    /**
     * @param mixed $quactionD
     */
    public function setQuactionD($quactionD)
    {
        $this->quactionD = $quactionD;
    }

    /**
     * @return mixed
     */
    public function getQuMarksVal()
    {
        return $this->QuMarksVal;
    }

    /**
     * @param mixed $QuMarksVal
     */
    public function setQuMarksVal($QuMarksVal)
    {
        $this->QuMarksVal = $QuMarksVal;
    }

}