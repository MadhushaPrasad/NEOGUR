<?php


class Tute
{
    private $tuteID;
    private $tId;
    private $tuteTopic;
    private $description;
    private $img;
    private $video;

    /**
     * Tute constructor.
     * @param $tuteID
     * @param $tId
     * @param $tuteTopic
     * @param $description
     * @param $img
     * @param $video
     */
    public function __construct($tuteID, $tId, $tuteTopic, $description, $img, $video)
    {
        $this->tuteID = $tuteID;
        $this->tId = $tId;
        $this->tuteTopic = $tuteTopic;
        $this->description = $description;
        $this->img = $img;
        $this->video = $video;
    }

    /**
     * @return mixed
     */
    public function getTuteID()
    {
        return $this->tuteID;
    }

    /**
     * @param mixed $tuteID
     */
    public function setTuteID($tuteID)
    {
        $this->tuteID = $tuteID;
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
    public function getTuteTopic()
    {
        return $this->tuteTopic;
    }

    /**
     * @param mixed $tuteTopic
     */
    public function setTuteTopic($tuteTopic)
    {
        $this->tuteTopic = $tuteTopic;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param mixed $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * @return mixed
     */
    public function getImg()
    {
        return $this->img;
    }

    /**
     * @param mixed $img
     */
    public function setImg($img)
    {
        $this->img = $img;
    }

    /**
     * @return mixed
     */
    public function getVideo()
    {
        return $this->video;
    }

    /**
     * @param mixed $video
     */
    public function setVideo($video)
    {
        $this->video = $video;
    }
}