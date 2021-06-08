<?php
include '../model/student.php';
include '../config/database.php';
include 'user.php';
class Student extends User {
  private $name;
  private $id;
  private $cgpa;
  private $email;
  private $fName;
  private $lName;
  private $psw;


/*function __construct()
{}
function __construct ($id,$email,$name)
{
  $this->id= $id;
  $this->email=$email;
  $this->name=$name;
}
function __construct ($id,$email,$name,$fName,$mName)
{
  $this->id= $id;
  $this->email=$email;
  $this->name=$name;
  $this->fName=$fName;
  $this->lName=$lName;

} */
public function getStudent()
{
  return $this->fName ;
}
public function updateStudentInfo($email,$name,$fName,$mName)
{
  $this->email=$email;
  $this->name=$name;
  $this->fName=$fName;
  $this->mName=$mName;
}
public function getStudentInfo()
{
  $info = array($this->name,$this->fName,$this->lName,$this->cgpa);
  return $info;
}
public function create($fname,$lname,$email,$psw)
{
  // posted values
  $this->fName=htmlspecialchars(strip_tags($fname));
  $this->lName=htmlspecialchars(strip_tags($lname));
  $this->email=htmlspecialchars(strip_tags($email));
  $this->psw=htmlspecialchars(strip_tags($psw));


  /*$database = new Database();
  $db = $database->getConnection();


  $studentDB= new StudentDB($db);
  $studentDB->create($this->fName,$this->lName,$this->email,$this->psw);*/
}
}
 ?>
