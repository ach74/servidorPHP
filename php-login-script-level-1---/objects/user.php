<?php

//	"user" object

class User{
	
	//	database connection and table name
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

    //constructor
    public function __construct($db){
    	$this->conn = $db;
    }
}
?>