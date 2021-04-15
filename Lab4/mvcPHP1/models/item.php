<?php

include_once("entities/item.php");
include_once("../dbconnect.php");

class Model_Item extends DB{

    public function __construct()
    {  
    }

    public function getAllItem() {
        // Check connection\
        echo 1;
        $sql="SELECT * FROM items";
        echo 2;
        $result = mysqli_query($this->conn, $sql);
        echo 3;
        return $result;
    }

    public function getItemDetail($id) {

        $allItem = $this -> getAllItem();
        return $allItem[$id];
    }
}

?>