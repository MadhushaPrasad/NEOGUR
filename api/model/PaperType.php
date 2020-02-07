<?php


class PaperType
{
    private $pTypeID;
    private $type;

    /**
     * PaperType constructor.
     * @param $pTypeID
     * @param $type
     */
    public function __construct($pTypeID, $type)
    {
        $this->pTypeID = $pTypeID;
        $this->type = $type;
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

    /**
     * @return mixed
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param mixed $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }

}