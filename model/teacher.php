<?php
class TeacherDB extends UserDB {
  private $table_name = "student";
  // create product
  function create(){

      //write query
      $query = "INSERT INTO
                  " . $this->table_name . "
              SET
                  name=:name, price=:price, description=:description, category_id=:category_id, created=:created";

      $stmt = $this->conn->prepare($query);

      // posted values
      $this->name=htmlspecialchars(strip_tags($this->name));
      $this->price=htmlspecialchars(strip_tags($this->price));
      $this->description=htmlspecialchars(strip_tags($this->description));
      $this->category_id=htmlspecialchars(strip_tags($this->category_id));

      // to get time-stamp for 'created' field
      $this->timestamp = date('Y-m-d H:i:s');

      // bind values
      $stmt->bindParam(":name", $this->name);
      $stmt->bindParam(":price", $this->price);
      $stmt->bindParam(":description", $this->description);
      $stmt->bindParam(":category_id", $this->category_id);
      $stmt->bindParam(":created", $this->timestamp);

      if($stmt->execute()){
          return true;
      }else{
          return false;
      }

  }
}
 ?>
