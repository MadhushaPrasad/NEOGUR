<?php

require_once __DIR__ . "../model/Teacher.php";

interface UserBo
{
    public function addUser(Teacher $teacher);

    public function deleteUser($customerID);

    public function searchUser($customerID);

    public function updateUser(Customer $c);

    public function getAllUser();

    public function checkUser($userEmail, $userPassword);
}