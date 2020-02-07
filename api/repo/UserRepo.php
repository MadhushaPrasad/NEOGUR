<?php

require_once __DIR__ . "../model/Teacher.php";

interface UserRepo
{
    public function setConnection(mysqli $conne);

    public function addUser(Teacher $teacher);

    public function deleteUser($userID);

    public function searchUser($userID);

    public function updateUser(User $user);

    public function getAllUser();

    public function checkUser($userEmail, $userPassword);
}