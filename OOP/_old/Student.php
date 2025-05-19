<?php 
class Student {
    private $course;
    private $name;

    public function __construct($name) {
        $this->name = $name;
        $this->course = 1;
    }

    public function transferToNextCourse (){
        if ($this->course < 5){
           $this->course++;
        }
    }

    public function getCourse(){
        return $this->course;
    }
}
