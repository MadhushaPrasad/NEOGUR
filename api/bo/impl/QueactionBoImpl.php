<?php


class QueactionBoImpl implements QueactionBo
{

    public function addQueacton(Queaction $queaction)
    {
        $connection = (new DBConnection())->getConnection();
        $qeactionRepo = new QueactionRepoImpl();
        $qeactionRepo->setConnection($connection);
        $newQ = $qeactionRepo->addQueacton($queaction);
        return $newQ;
    }

    public function updateQueacton(Queaction $queaction)
    {
        $connection = (new DBConnection())->getConnection();
        $qeactionRepo = new QueactionRepoImpl();
        $qeactionRepo->setConnection($connection);
        $newQ = $qeactionRepo->updateQueacton($queaction);
        return $newQ;
    }

    public function deleteQueacton($queaction)
    {
        // TODO: Implement deleteQueacton() method.
    }

    public function getAllQueaction()
    {
        // TODO: Implement getAllQueaction() method.
    }
}