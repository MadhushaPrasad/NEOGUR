<?php
require_once __DIR__ . "../../model/Teacher.php";
require_once __DIR__ . "../../repo/UserRepo.php";

class UserRepoImpl implements UserRepo
{
    private $connection;

    public function addUser(Teacher $teacher)
    {
        $response = $this->connection->query("INSERT INTO teacher VALUES('{$teacher->getTId()}','{$teacher->getTName()}',
                        '{$teacher->getTTelephone()}','{$teacher->getEmail()}','{$teacher->getPassword()}')");
        if ($response) {
            return true;
        } else {
            return false;
        }
    }

    public function deleteUser($userID)
    {
        // TODO: Implement deleteUser() method.
    }

    public function searchUser($userID)
    {
        // TODO: Implement searchUser() method.
    }

    public function updateUser(User $user)
    {
        // TODO: Implement updateUser() method.
    }

    public function getAllUser()
    {
        $resultSet = $this->connection->query("select * from user");
        return $resultSet->fetch_all();
    }

    public function checkUser($userEmail, $userPassword)
    {
        $resultSet = $this->connection->query("select * from user where email = " + $userEmail + " and password = " + $userPassword);
        return $resultSet->fetch_all();
    }

    public function setConnection(mysqli $conne)
    {
        $this->connnection = $conne;
    }
}