<?php
// 'user' object
class User{
   
    // database connection and table name
    private $conn;
    private $table_name = "users";
    
    // object properties
    public $id;
    public $firstname;
    public $lastname;
    public $email;
    public $contact_number;
    public $address;
    public $password;
    public $access_level;
    public $access_code;
    public $status;
    public $created;
    public $modified;
    
    // constructor
    public function __construct($db){
        $this->conn = $db;
    }


    // used for paging users
    public function countAll(){
       
    // query to select all user records
        $query = "SELECT id FROM " . $this->table_name . "";
        
    // prepare query statement
        $stmt = $this->conn->prepare($query);
        
    // execute query
        $stmt->execute();
        
    // get number of rows
        $num = $stmt->rowCount();
        
    // return row count
        return $num;
    }
}