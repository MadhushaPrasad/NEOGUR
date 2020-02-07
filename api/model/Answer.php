<?php


class Answer
{
    private $asID;
    private $qID;
    private $anserD;
    private $cAnswer;

    /**
     * Answer constructor.
     * @param $asID
     * @param $qID
     * @param $anserD
     * @param $cAnswer
     */
    public function __construct($asID, $qID, $anserD, $cAnswer)
    {
        $this->asID = $asID;
        $this->qID = $qID;
        $this->anserD = $anserD;
        $this->cAnswer = $cAnswer;
    }

    /**
     * @return mixed
     */
    public function getAsID()
    {
        return $this->asID;
    }

    /**
     * @param mixed $asID
     */
    public function setAsID($asID)
    {
        $this->asID = $asID;
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
    public function getAnserD()
    {
        return $this->anserD;
    }

    /**
     * @param mixed $anserD
     */
    public function setAnserD($anserD)
    {
        $this->anserD = $anserD;
    }

    /**
     * @return mixed
     */
    public function getCAnswer()
    {
        return $this->cAnswer;
    }

    /**
     * @param mixed $cAnswer
     */
    public function setCAnswer($cAnswer)
    {
        $this->cAnswer = $cAnswer;
    }

}