<?php


class Paper
{
    private $paperID;
    private $marksID;
    private $tId;
    private $paperTitle;
    private $pTypeID;

    /**
     * Paper constructor.
     * @param $paperID
     * @param $marksID
     * @param $tId
     * @param $paperTitle
     * @param $pTypeID
     */
    public function __construct($paperID, $marksID, $tId, $paperTitle, $pTypeID)
    {
        $this->paperID = $paperID;
        $this->marksID = $marksID;
        $this->tId = $tId;
        $this->paperTitle = $paperTitle;
        $this->pTypeID = $pTypeID;
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
    public function getTId()
    {
        return $this->tId;
    }

    /**
     * @param mixed $tId
     */
    public function setTId($tId)
    {
        $this->tId = $tId;
    }

    /**
     * @return mixed
     */
    public function getPaperTitle()
    {
        return $this->paperTitle;
    }

    /**
     * @param mixed $paperTitle
     */
    public function setPaperTitle($paperTitle)
    {
        $this->paperTitle = $paperTitle;
    }

    /**
     * @return mixed
     */
    public function getPTypeID()
    {
        return $this->pTypeID;
    }

    /**
     * @param mixed $pTypeID
     */
    public function setPTypeID($pTypeID)
    {
        $this->pTypeID = $pTypeID;
    }

}