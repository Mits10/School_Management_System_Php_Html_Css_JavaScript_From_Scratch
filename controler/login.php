<?php
session_start();
include '../model/student.php';
include '../config/database.php';
$database = new Database();
$db = $database->getConnection();
$studentDB= new StudentDB($db);
$_SESSION['facultyName']=$_POST['fname'];
if($_POST){

    $studentDB->fName = $_POST['fName'];
    $studentDB->psw = $_POST['psw'];
    if($studentDB->login()){
    ?>
    <script>
    window.alert("Log In succesfull");
    window.location.href="../view/teacher/dashboard.php";
    </script>
    <?php

    }else{
    ?>
    <script>
      window.alert("Log In failed");
      window.location.href="../view/teacher/login.php";
    </script>
    <?php
    }
}


 ?>
