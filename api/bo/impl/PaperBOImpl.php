<?php


class PaperBOImpl implements PaperBO
{

    public function addPaper(Paper $paper)
    {
        $connection = (new DBConnection())->getConnection();
        $paperRepo = new PaperRepoImpl();
        $paperRepo->setConnection($connection);
        $paperNew = new Paper($paper->getSubID(), $paper->getPaperType(), $paper->getPaperMarked());
        return $paperNew;
    }

    public function updatePaper(Paper $paper)
    {
        // TODO: Implement updatePaper() method.
    }

    public function deletePaper(Paper $paper)
    {
        // TODO: Implement deletePaper() method.
    }

    public function searchPaper($paperID)
    {
        // TODO: Implement searchPaper() method.
    }

    public function getAllPapers()
    {
        // TODO: Implement getAllPapers() method.
    }
}