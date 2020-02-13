<?php


interface MarksRepo
{
    public function setConnection(mysqli $conne);

    public function addMarks(Marks $marks);

    public function update(Marks $marks);
}