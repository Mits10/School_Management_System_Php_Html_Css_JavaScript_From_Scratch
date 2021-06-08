<?php
include '../model/student.php';
include '../config/database.php';
$database = new Database();
$db = $database->getConnection();
$studentDB= new StudentDB($db);
if($_POST)
{
  // set product property values
      $studentDB->fName = $_POST['fName'];
      $studentDB->lName = $_POST['lName'];
      $studentDB->email = $_POST['email'];
      $studentDB->psw = $_POST['psw'];

  /*$student = new Student();
  $student->create($_POST["fname"],$_POST["lname"],$_POST["email"],$_POST["psw"]);
*/
//$studentDB= new StudentDB($db);
  //$studentDB->create($_POST["fname"],$_POST["lname"],$_POST["email"],$_POST["psw"]);
  if($studentDB->create()){
?>
  <script>
  window.alert("Succesfully registered");
  window.location.href="../view/teacher/login.php";
  </script>
  <?php
}else{
  ?>
  <script>
    window.alert("Registration failed");
    window.location.href="../view/teacher/register.php";
  </script>
  <?php
}
}
 ?>
