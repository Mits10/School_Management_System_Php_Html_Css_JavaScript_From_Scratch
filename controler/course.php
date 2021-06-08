<?php

session_start();
include '../model/course.php';
include '../config/database.php';
include 'login.php';
$database = new Database();
$db = $database->getConnection();
$courseDB= new CourseDB($db);

if($_POST){

    $courseDB->courseID = $_POST['courseID'];
    $courseDB->courseName = $_POST['courseName'];
    $courseDB->facultyName=$_SESSION['facultyName'];
    if($courseDB->courseCreate()){
    ?>
    <script>
    window.alert("Course created succesfully");
    window.location.href="../view/teacher/dashboard.php";
    </script>
    <?php
    }else{
    ?>
    <script>
      window.alert(" failed");
      //window.location.href="../view/teacher/course.php";
    </script>
    <?php
    }
}
?>
