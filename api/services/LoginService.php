<?php
require_once $_SERVER['DOCUMENT_ROOT'] . "../NeoGuru/api/bo/impl/TeacherBOImpl.php";
require_once $_SERVER['DOCUMENT_ROOT'] . "../NeoGuru/api/bo/impl/StudentBOImpl.php";


$method = $_SERVER['REQUEST_METHOD'];
$teacherBO = new TeacherBOImpl();
$studentBO = new StudentBOImpl();

switch ($method) {
    case "POST":
        $action = $_GET['action'];
        switch ($action) {

            case "save":
                $teacherName = $_POST["CrName"];
                $teacherTelephone = $_POST["CrTel"];
                $teacherEmail = $_POST["CrEmail"];
                $teacherPassword = $_POST["CrPassword"];
                $teacherM = new Teacher($teacherName, $teacherTelephone, $teacherEmail, $teacherPassword);
                $teacher = $teacherBO->addTeacher($teacherM);
                echo $teacher;
                break;

            case "student-save":
                $studentName = $_POST["stName"];
                $studentAge = $_POST["stAge"];
                $studentGender = $_POST["stGender"];
                $studentTelephone = $_POST["stTel"];
                $studentEmail = $_POST["stEmail"];
                $studentPassword = $_POST["stPassword"];

                $studentM = new Student($studentName,$studentAge,$studentGender, $studentTelephone, $studentEmail, $studentPassword);
                $student = $studentBO->addStudent($studentM);
                echo $student;
                break;
        }
        break;
    case "GET":
        $action = $_GET['action'];
        switch ($action) {
            case "check":
                $teacherEmail = $_GET["email"];
                $teacherPassword = $_GET["password"];
                $teacher = $teacherBO->checkTeacher($teacherEmail, $teacherPassword);
                echo json_encode($teacher);
                break;

            case "check-student":
                $studentEmail = $_GET["email"];
                $studentPassword = $_GET["password"];
                $student = $studentBO->checkStudent($teacherEmail, $teacherPassword);
                echo json_encode($student);
                break;
        }
        break;
}