<?php
require_once $_SERVER['DOCUMENT_ROOT'] . "../NeoGuru/api/bo/impl/SubjectBOImpl.php";

$method = $_SERVER["REQUEST_METHOD"];
$subjectBo = new SubjectBOImpl();
switch ($method) {
    case "GET":
        $action = $_GET["action"];
        switch ($action) {
            case "getAllSubject":
                $subjectArray = $subjectBo->getAllSubjectName();
                echo json_encode($subjectArray);
                break;
        }
        break;
    case "POST":
        $action = $_GET["action"];
        switch ($action){
            case "save-question" :
//                $_POST[""]
               $json = file_get_contents("php://input");
               $object = json_decode($json);


        }
}