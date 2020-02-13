<?php


class Subject
{
    private $subID;
    private $subjectName;

    /**
     * Subject constructor.
     * @param $subjectName
     */
    public function __construct($subjectName)
    {
        $this->subjectName = $subjectName;
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
    public function getSubjectName()
    {
        return $this->subjectName;
    }

    /**
     * @param mixed $subjectName
     */
    public function setSubjectName($subjectName)
    {
        $this->subjectName = $subjectName;
    }
}