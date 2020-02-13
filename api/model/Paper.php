<?php


class Paper
{
    private $pID;
    private $subID;
    private $paperType;
    private $paperMarked;

    /**
     * Paper constructor.
     * @param $subID
     * @param $paperType
     * @param $paperMarked
     */
    public function __construct($subID, $paperType, $paperMarked)
    {
        $this->subID = $subID;
        $this->paperType = $paperType;
        $this->paperMarked = $paperMarked;
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
    public function getSubID()
    {
        return $this->subID;
    }

    /**
     * @param mixed $subID
     */
    public function setSubID($subID)
    {
        $this->subID = $subID;
    }

    /**
     * @return mixed
     */
    public function getPaperType()
    {
        return $this->paperType;
    }

    /**
     * @param mixed $paperType
     */
    public function setPaperType($paperType)
    {
        $this->paperType = $paperType;
    }

    /**
     * @return mixed
     */
    public function getPaperMarked()
    {
        return $this->paperMarked;
    }

    /**
     * @param mixed $paperMarked
     */
    public function setPaperMarked($paperMarked)
    {
        $this->paperMarked = $paperMarked;
    }
}