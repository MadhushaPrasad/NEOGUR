<?php


class SubQueaction
{
    private $sbQID;
    private $qID;
    private $subQuactionD;
    private $subQuMarksVal;

    /**
     * SubQueactionRepo constructor.
     * @param $qID
     * @param $subQuactionD
     * @param $subQuMarksVal
     */
    public function __construct($qID, $subQuactionD, $subQuMarksVal)
    {
        $this->qID = $qID;
        $this->subQuactionD = $subQuactionD;
        $this->subQuMarksVal = $subQuMarksVal;
    }

    /**
     * @return mixed
     */
    public function getSbQID()
    {
        return $this->sbQID;
    }

    /**
     * @param mixed $sbQID
     */
    public function setSbQID($sbQID)
    {
        $this->sbQID = $sbQID;
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
    public function getSubQuactionD()
    {
        return $this->subQuactionD;
    }

    /**
     * @param mixed $subQuactionD
     */
    public function setSubQuactionD($subQuactionD)
    {
        $this->subQuactionD = $subQuactionD;
    }

    /**
     * @return mixed
     */
    public function getSubQuMarksVal()
    {
        return $this->subQuMarksVal;
    }

    /**
     * @param mixed $subQuMarksVal
     */
    public function setSubQuMarksVal($subQuMarksVal)
    {
        $this->subQuMarksVal = $subQuMarksVal;
    }
}