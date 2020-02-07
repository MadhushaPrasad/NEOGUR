<?php
//checking the method type
require_once __DIR__ . "../bo/impl/UserBoImpl.php";

$method = $_SERVER["REQUEST_METHOD"];
$userBO = new UserBOImpl();
switch ($method) {
    case "GET":
        $action = $_GET["action"];
        switch ($action) {
            case "getAll":
                $userArray = $userBO->getAllUser();
                echo json_encode($userArray);
                break;
            case "checkUser":
                $userEmail = $_GET["email"];
                $userPassword = $_GET["password"];
                $res = $userBO->checkUser($userEmail, $userPassword);
                echo $res;
                break;
        }
        break;
    case "POST":
        $action = $_GET["action"];
        switch ($action) {
            case "save":
//                $tId = $_POST["customerID"];
                $tName = $_POST["name"];
                $tTelephone = $_POST["tel"];
                $email = $_POST["email"];
                $password = $_POST["password"];
                $newUser = new Teacher(1, $tName, $tTelephone, $email, $password);
                $res = $userBO->addUser($newUser);
                echo $res;
                break;
        }
        break;
    default:
        echo "Sorry System Error..!";
}