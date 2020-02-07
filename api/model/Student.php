<?php


class Student
{
    private $id;
    private $paperID;
    private $name;
    private $age;
    private $gender;
    private $telephone;
    private $email;
    private $password;

    /**
     * Student constructor.
     * @param $id
     * @param $paperID
     * @param $name
     * @param $age
     * @param $gender
     * @param $telephone
     * @param $email
     * @param $password
     */
    public function __construct($id, $paperID, $name, $age, $gender, $telephone, $email, $password)
    {
        $this->id = $id;
        $this->paperID = $paperID;
        $this->name = $name;
        $this->age = $age;
        $this->gender = $gender;
        $this->telephone = $telephone;
        $this->email = $email;
        $this->password = $password;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
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
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * @param mixed $age
     */
    public function setAge($age)
    {
        $this->age = $age;
    }

    /**
     * @return mixed
     */
    public function getGender()
    {
        return $this->gender;
    }

    /**
     * @param mixed $gender
     */
    public function setGender($gender)
    {
        $this->gender = $gender;
    }

    /**
     * @return mixed
     */
    public function getTelephone()
    {
        return $this->telephone;
    }

    /**
     * @param mixed $telephone
     */
    public function setTelephone($telephone)
    {
        $this->telephone = $telephone;
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