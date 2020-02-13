<?php


interface PaperRepo
{
    public function addPaper(Paper $paper);

    public function updatePaper(Paper $paper);

    public function deletePaper(Paper $paper);

    public function searchPaper($paperID);

    public function getAllPapers();

    public function setConnection(mysqli $conne);
}