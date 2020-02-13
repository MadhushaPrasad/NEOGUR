<?php


interface QueactionRepo
{
    public function addQueacton(Queaction $queaction);

    public function updateQueacton(Queaction $queaction);

    public function deleteQueacton($queaction);

    public function getAllQueaction();

    public function setConnection(mysqli $conne);
}