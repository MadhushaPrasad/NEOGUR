<?php
require_once $_SERVER['DOCUMENT_ROOT'] . "../NeoGuru/api/bo/impl/SubjectBOImpl.php";

$method = $_SERVER["REQUEST_METHOD"];
$subjectBo = new SubjectBOImpl();