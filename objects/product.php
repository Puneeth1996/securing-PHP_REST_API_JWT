<?php
class Product{
 
    // database connection and table name
    private $conn;
    private $table_name = "view_backend";
    // object properties
    public $id;
    public $Blog_unique_id;
    public $Publish_date;
    public $Main_title;
    public $Sub_title;
    public $Author;
    public $category;
    public $desp_small;
    public $desp_full;
    public $img;
    // constructor with $db as database connection
    public function __construct($db){
        $this->conn = $db;
    }
    // read products
function read(){
    
    $query = "SELECT 
                    id,Blog_unique_id,Publish_date,Main_title,Sub_title,Author,category,desp_small,desp_full,img
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