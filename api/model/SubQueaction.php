<?php


class SubQueaction
{
    private $sbQID;
    private $qID;
    private $subQuactionD;

    /**
     * SubQueaction constructor.
     * @param $sbQID
     * @param $qID
     * @param $subQuactionD
     */
    public function __construct($sbQID, $qID, $subQuactionD)
    {
        $this->sbQID = $sbQID;
        $this->qID = $qID;
        $this->subQuactionD = $subQuactionD;
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

}