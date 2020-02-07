<?php
//checking the method type
$method = $_SERVER["REQUEST_METHOD"];
$mcqBO = new MCQBoImpl();
switch ($method) {
    case "GET":
        $action = $_GET["action"];
        switch ($action) {
            case "getAll":
                $mcqArray = $mcqBO->getAllQuestion();
                echo json_encode($mcqArray);
                break;
        }
    case "POST":
        $action = $_GET["action"];
        switch ($action) {
            case "save":
                $paperTitle = $_POST['title'];
                $question = $_POST['textArea'];
                $marks = $_POST['marks'];
                $answer01 = $_POST['answer01'];
                $answer02 = $_POST['answer02'];
                $answer03 = $_POST['answer03'];
                $answer04 = $_POST['answer04'];
                $answer05 = $_POST['answer05'];

        }
}

