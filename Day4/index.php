<?php

class Student {

    public $name;
    public $age;
    public $gender;

    public function introduction(){
        echo "My name is $this->name and my age is $this->age and my gender is $this->gender";
    }
}

$student = new Student();
$student->name = "Dumakude";
$student->age = "50";
$student->gender = "Male";

$student->introduction();

?>