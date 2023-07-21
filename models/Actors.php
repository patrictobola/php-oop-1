<?php
class Actors
{

    public $name;
    public $last_name;
    public $age;
    public $sex;

    // Constructor 
    public function __construct($name, $last_name, $age, $sex)
    {
        $this->name = $name;
        $this->last_name = $last_name;
        $this->age = $age;
        $this->sex = $sex;
    }
}
