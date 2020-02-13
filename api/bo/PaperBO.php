<?php


interface PaperBO
{
    public function addPaper(Paper $paper);

    public function updatePaper(Paper $paper);

    public function deletePaper(Paper $paper);

    public function searchPaper($paperID);

    public function getAllPapers();
}