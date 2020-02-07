<?php
require_once __DIR__ . "../../db/DBConnection.php";
require_once __DIR__ . "../../model/Teacher.php";
require_once __DIR__ . "../UserBo.php";
require_once __DIR__ . "../../repo/impl/UserRepoImpl.php";

class UserBoImpl implements UserBo
{

    public function addUser(Teacher $teacher)
    {
        $userRepo = new UserRepoImpl();
        $connection = (new DBConnection())->getConnection();
        $userRepo->setConnection($connection);
        $newTeacher = new Teacher($teacher->getTId(), $teacher->getTName(), $teacher->getTTelephone(), $teacher->getEmail(), $teacher->getPassword());
        $response = $userRepo->addUser($newTeacher);
        if ($response) {
            return true;
        } else {
            return $connection->error;
        }
    }

    public function deleteUser($customerID)
    {
        // TODO: Implement deleteUser() method.
    }

    public function searchUser($customerID)
    {
        // TODO: Implement searchUser() method.
    }

    public function updateUser(Customer $c)
    {
        // TODO: Implement updateUser() method.
    }

    public function getAllUser()
    {
        $connection = (new DBConnection())->getConnection();
        $userRpo = new UserRepoImpl();
        $userRpo->setConnection($connection);
        $userArray = $userRpo->getAllUser();
        return $userArray;
    }

    public function checkUser($userEmail, $userPassword)
    {
        $userRepo = new UserRepoImpl();
        $connection = (new DBConnection())->getConnection();
        $userRepo->setConnection($connection);
        $res = $userRepo->checkUser($userEmail, $userPassword);
        if ($res) {
            return true;
        } else {
            return $connection->error;
        }
    }
}