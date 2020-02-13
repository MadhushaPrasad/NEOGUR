<?php


interface QueactionBo
{
    public function addQueacton(Queaction $queaction);

    public function updateQueacton(Queaction $queaction);

    public function deleteQueacton($queaction);

    public function getAllQueaction();
}