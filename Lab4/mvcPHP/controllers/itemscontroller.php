<?php
include_once("../models/item.php");

class ItemsController {

    public function invoke() 
    {
        $id = $_POST['id'];
        if( $id ) {

            $modelItems = new Model_Item();
            $item = $modelItems -> getItemDetail($_POST['id']);

            include_once("../views/items/viewid.html");
        } else {

            $modelItems = new Model_Item();
            $itemList = $modelItems -> getAllItem();

            include_once("../views/items/viewall.html");
        }
    }
};

$itemscontroller = new ItemsController();
$itemscontroller->invoke();

?>