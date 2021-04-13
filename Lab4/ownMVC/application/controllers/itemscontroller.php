<?php

class ItemsController extends Controller {

    function view($id = null, $name = null) {

        $this -> set('title', $name . ' - My OWN List App');
        $this -> set('own', $this -> Item -> select($id));
    }

    function viewall() {

        $this -> set('title', 'All items - My OWN List App');
        $this -> set('own', $this -> Item -> selectAll());
    }
    

    function add() {

        $own = $_POST['own'];
        $this -> set('title', 'Success - My OWN List App');
        $this -> set('own', $this -> Item -> query('insert into items (item_name) values (\'' . $own . '\')'));
    }

    function delete($id = null) {
        $this -> set('title', 'Success - My OWN List App');
        $this -> set('own', $this -> Item -> query('delete from items where id = \'' . $id . '\''));
    }

}