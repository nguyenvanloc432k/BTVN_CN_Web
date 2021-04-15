<?php

class DB {
    public $conn;

    // Create connection
    public function __construct()
    {
        $this->conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
        mysqli_query($this->conn, "SET NAMES 'utf8'");    
    }

}


?>