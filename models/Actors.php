<?php
class Actor
{

    public $name;
    public $last_name;

    // Constructor 
    public function __construct($name, $last_name)
    {
        $this->name = $name;
        $this->last_name = $last_name;
    }


    public function getFullActorName()
    {
        return "$this->name $this->last_name";
    }
}
