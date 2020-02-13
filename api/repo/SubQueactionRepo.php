<?php


interface SubQueactionRepo
{

    public function addSubQueaction(SubQueaction $subQueaction);

    public function updateSubQueaction(SubQueaction $subQueaction);

    public function deleteSubQueaction(SubQueaction $subQueaction);

    public function getAllSubQueaction(SubQueaction $subQueaction);

    public function setConnection(mysqli $conne);
}