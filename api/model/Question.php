<?php


class Question
{
    private $qID;
    private $paperID;
    private $quactionD;

    /**
     * Question constructor.
     * @param $qID
     * @param $paperID
     * @param $quactionD
     */
    public function __construct($qID, $paperID, $quactionD)
    {
        $this->qID = $qID;
        $this->paperID = $paperID;
        $this->quactionD = $quactionD;
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
    public function getPaperID()
    {
        return $this->paperID;
    }

    /**
     * @param mixed $paperID
     */
    public function setPaperID($paperID)
    {
        $this->paperID = $paperID;
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

}