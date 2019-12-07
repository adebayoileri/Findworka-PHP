<?php 
class Human{
    public $age;
    public $name;

    function set_name($name){
        $this->name = $name;
    }
    
    function get_name($name){
        return $this->name;
    }
}
