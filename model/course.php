<?php
include 'user.php';
class CourseDB extends UserDB{
  private $table_name = "course";

  public $coursID;
  public $courseName;
  public $facultyName;
    // create product
    function courseCreate(){

        //write query
        $query = "INSERT INTO
                    " . $this->table_name . "
                SET
                    id=:id, name=:name, faculty=:faculty, created=:created";

        $stmt = $this->conn->prepare($query);

        // posted values
        $this->id=htmlspecialchars(strip_tags($this->courseID));
        $this->name=htmlspecialchars(strip_tags($this->courseName));
        $this->description=htmlspecialchars(strip_tags($this->facultyName));


        // to get time-stamp for 'created' field
        $this->timestamp = date('Y-m-d H:i:s');

        // bind values
        $stmt->bindParam(":id", $this->courseID);
        $stmt->bindParam(":name", $this->courseName);
        $stmt->bindParam(":faculty", $this->facultyName);
        $stmt->bindParam(":created", $this->timestamp);

        if($stmt->execute()){
            return true;
        }else{
            return false;
        }
     }
    function readAll($from_record_num, $records_per_page){

        $query = "SELECT
                    id, name, description, price, category_id
                FROM
                    " . $this->table_name . "
                ORDER BY
                    name ASC
                LIMIT
                    {$from_record_num}, {$records_per_page}";

        $stmt = $this->conn->prepare( $query );
        $stmt->execute();
      $row = $stmt->fetch(PDO::FETCH_ASSOC);
        return $row;
    }

    function update(){

        $query = "UPDATE
                    " . $this->table_name . "
                SET
                    name = :name,
                    price = :price,
                    description = :description,
                    category_id  = :category_id
                WHERE
                    id = :id";

        $stmt = $this->conn->prepare($query);

        // posted values
        $this->name=htmlspecialchars(strip_tags($this->name));
        $this->price=htmlspecialchars(strip_tags($this->price));
        $this->description=htmlspecialchars(strip_tags($this->description));
        $this->category_id=htmlspecialchars(strip_tags($this->category_id));
        $this->id=htmlspecialchars(strip_tags($this->id));

        // bind parameters
        $stmt->bindParam(':name', $this->name);
        $stmt->bindParam(':price', $this->price);
        $stmt->bindParam(':description', $this->description);
        $stmt->bindParam(':category_id', $this->category_id);
        $stmt->bindParam(':id', $this->id);

        // execute the query
        if($stmt->execute()){
            return true;
        }else{
            return false;
        }
     }
    // delete the product
    function delete(){

        $query = "DELETE FROM " . $this->table_name . " WHERE id = ?";

        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(1, $this->id);

        if($result = $stmt->execute()){
            return true;
        }else{
            return false;
        }
    }

    // read products by search term
    function search($search_term, $from_record_num, $records_per_page){

        // select query
        $query = "SELECT
                    c.name as category_name, p.id, p.name, p.description, p.price, p.category_id, p.created
                FROM
                    " . $this->table_name . " p
                    LEFT JOIN
                        categories c
                            ON p.category_id = c.id
                WHERE
                    p.name LIKE ? OR p.description LIKE ?
                ORDER BY
                    p.name ASC
                LIMIT
                    ?, ?";

        // prepare query statement
        $stmt = $this->conn->prepare( $query );

        // bind variable values
        $search_term = "%{$search_term}%";
        $stmt->bindParam(1, $search_term);
        $stmt->bindParam(2, $search_term);
        $stmt->bindParam(3, $from_record_num, PDO::PARAM_INT);
        $stmt->bindParam(4, $records_per_page, PDO::PARAM_INT);

        // execute query
        $stmt->execute();

        // return values from database
        return $stmt;
    }
    function countAll_BySearch($search_term){

        // select query
        $query = "SELECT
                    COUNT(*) as total_rows
                FROM
                    " . $this->table_name . " p
                WHERE
                    p.name LIKE ? OR p.description LIKE ?";

        // prepare query statement
        $stmt = $this->conn->prepare( $query );

        // bind variable values
        $search_term = "%{$search_term}%";
        $stmt->bindParam(1, $search_term);
        $stmt->bindParam(2, $search_term);

        $stmt->execute();
        $row = $stmt->fetch(PDO::FETCH_ASSOC);

        return $row['total_rows'];
    }
}
 ?>
