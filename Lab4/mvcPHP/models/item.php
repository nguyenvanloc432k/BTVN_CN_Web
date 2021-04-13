<?php

include_once("entities/item.php");

class Model_Item {

    public function __construct()
    {}

    public function getAllItem() {

        return array(
            "1" => new Item(1, "Get Milk"),
            "2" => new Item(2, "Buy Application")
        );
    }

    public function getItemDetail($id) {

        $allItem = $this -> getAllItem();
        return $allItem[$id];
    }
}

?>