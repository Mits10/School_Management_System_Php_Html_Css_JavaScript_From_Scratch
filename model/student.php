<?php
include 'user.php';
class StudentDB extends UserDB {
  public $fName;
  public $lName;
  public $email;
  public $psw;
  private $table_name = "student";

  public function __construct($db){
      $this->conn = $db;
  }
  // create student
  function create()
  {

      //write query
      $query = "INSERT INTO
                  " . $this->table_name . "
              SET
                  fName=:fName, lName=:lName, email=:email, psw=:psw, created=:created";

      $stmt = $this->conn->prepare($query);

      // posted values
      $this->fName=htmlspecialchars(strip_tags($this->fName));
      $this->lName=htmlspecialchars(strip_tags($this->lName));
      $this->email=htmlspecialchars(strip_tags($this->email));
      $this->psw=htmlspecialchars(strip_tags($this->psw));
      // to get time-stamp for 'created' field
      $this->timestamp = date('Y-m-d H:i:s');


      // bind values
      $stmt->bindParam(":fName", $this->fName);
      $stmt->bindParam(":lName", $this->lName);
      $stmt->bindParam(":email", $this->email);
      $stmt->bindParam(":psw", $this->psw);
      $stmt->bindParam(":created", $this->timestamp);

      if($stmt->execute()){
          return true;
      }else{
          return false;
      }

  }
  function login()
  {

        //write query
      $query =  "SELECT
                    psw
                FROM
                    " . $this->table_name . "
                WHERE
                    fName = ?
                LIMIT
                    0,1";

        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(1, $this->fName);
        $stmt->execute();

        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        $psw=$row['psw'];
        if($this->psw == $psw){
        return true;
        }else {
        // code...
        return false;
      }

  }
}
 ?>
