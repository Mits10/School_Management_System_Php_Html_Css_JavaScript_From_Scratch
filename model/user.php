<?php
class UserDB{

   // database connection and table name
   protected $conn;


   // object properties
   public $id;
   public $name;
   public $price;
   public $description;
   public $category_id;
   public $timestamp;

   public function __construct($db){
       $this->conn = $db;
   }
}
