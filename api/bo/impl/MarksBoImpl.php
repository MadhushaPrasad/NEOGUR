<?php


class MarksBoImpl implements MarksBo
{

    public function addMarks(Marks $marks)
    {
        $connection = (new DBConnection())->getConnection();
        $marksRepo = new MarksRepoImpl();
        $marksRepo->setConnection($connection);
        $newMarks = new Marks($marks->getPID(), $marks->getId(), $marks->getMarksVal());
        $newMark = $marksRepo->addMarks($newMarks);
        if ($newMark) {
            return $newMark;
        } else {
            return $connection->error;
        }
    }

    public function updateMarks(Marks $marks)
    {
        $connection = (new DBConnection())->getConnection();
        $marksRepo = new MarksRepoImpl();
        $marksRepo->setConnection($connection);
        $newMarks = new Marks($marks->getPID(), $marks->getId(), $marks->getMarksVal());
        $updateMarks = $marksRepo->update($newMarks);
        if ($updateMarks) {
            return $updateMarks;
        } else {
            return $connection->error;
        }
    }
}