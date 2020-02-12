<?php


class Teacher
{
    private $tId;
    private $Name;
    private $tTelephone;
    private $email;
    private $password;

    /**
     * Teacher constructor.
     * @param $tId
     * @param $Name
     * @param $tTelephone
     * @param $email
     * @param $password
     */
    public function __construct($Name, $tTelephone, $email, $password)
    {
        $this->Name = $Name;
        $this->tTelephone = $tTelephone;
        $this->email = $email;
        $this->password = $password;
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
    public function getName()
    {
        return $this->Name;
    }

    /**
     * @param mixed $Name
     */
    public function setName($Name)
    {
        $this->Name = $Name;
    }

    /**
     * @return mixed
     */
    public function getTTelephone()
    {
        return $this->tTelephone;
    }

    /**
     * @param mixed $tTelephone
     */
    public function setTTelephone($tTelephone)
    {
        $this->tTelephone = $tTelephone;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param mixed $password
     */
    public function setPassword($password)
    {
        $this->password = $password;
    }
}