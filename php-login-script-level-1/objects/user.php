<?php
// 'user' object
class User{

    // database connection and table name
    private $conn;
    private $table_name = '"userComunidad"';

    // object properties
    public $id;
    public $name;
    public $email;
    public $pwd;
    public $type;

    // constructor
    public function __construct($db){
        $this->conn = $db;
    }
    // check if given email exist in the database
    function emailExists(){
    // query to check if email exists
        $query = "SELECT id,name,pwd,email,type FROM ".$this->table_name. " WHERE email='" .$this->email."'";

        $stmt = $this->conn->prepare($query);

        $stmt->execute();
        
    // get number of rows
        
        $num = $stmt->rowCount();
    // if email exists, assign values to object properties for easy access and use for php sessions
        if($num>0){

        // get record details / values
            $row = $stmt->fetch(PDO::FETCH_ASSOC);

        // assign values to object properties
            $this->id = $row['id'];
            $this->name = $row['name'];
            $this->pwd = $row['pwd'];
            $this->type = $row['type']; 

        // return true because email exists in the database
            return true;
        }
        
    // return false if email does not exist in the database
        return false;
    }


    // create new user record
    function create(){

        $password_hash = password_hash($this->pwd, PASSWORD_BCRYPT);

        $query = "INSERT INTO " . $this->table_name . "(name, pwd, email) VALUES ('$this->nombre', '$password_hash', '$this->email');";
        
        $stmt = $this->conn->prepare($query);

        if($stmt->execute()){
            return true;
        }else{
            $this->showError($stmt);
            return false;
        }

    }
    public function showError($stmt){
        echo "<pre>";
        print_r($stmt->errorInfo());
        echo "</pre>";
    }
    // read all user records
    function readAll($from_record_num, $records_per_page){

    // query to read all user records, with limit clause for pagination
        $query = "SELECT * FROM " . $this->table_name . "ORDER BY id DESC";

    // prepare query statement
        
        $stmt = $this->conn->prepare($query);


    // bind limit clause variables
        /*$stmt->bindParam(1, $from_record_num, PDO::PARAM_INT);
        $stmt->bindParam(2, $records_per_page, PDO::PARAM_INT);*/

    // execute query
        $stmt->execute();

    // return values
        return $stmt;
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