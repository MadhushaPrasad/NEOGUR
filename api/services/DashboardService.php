<?php

$method = $_SERVER['REQUEST_METHOD'];
$paperBO = new PaperBOImpl();
$mcqBO = new McqBOImpl();
$tuteBO = new TuteBOImpl();