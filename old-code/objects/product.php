<?php
class Product{

    // database connection and table name
    private $conn;
    private $table_name = "actor";
    // object properties
    public $fullname;
    public $actor_id;
    public $last_update;
    // constructor with $db as database connection
    public function __construct($db){
        $this->conn = $db;
    }
    // read products
function read(){
    
    $query = "SELECT 
                    fullname,actor_id,last_update
                FROM 
                    ".$this->table_name."
            ";

    // prepare query statement
    $stmt = $this->conn->prepare($query);

    // execute query
    $stmt->execute();

    return $stmt;
}
}
?>