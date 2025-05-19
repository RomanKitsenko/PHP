<?php

namespace App;

class Worker
{
    public string $name;
    public int $age;
    public array $hours;

    private string $position;

    private int $experience;

    public function __construct($name, $age, $hours){
        $this->name = $name;
        $this->age = $age;
        $this->hours = $hours;
    }

    public function work()
    {
         echo 'I\'m Working ';
    }

    public function getPosition(): string {
        return $this->position;
    }
    public function setPosition($position){
        $this->position = $position;
    }
    public function getExperience(): int{
        return $this->experience;
    }
    public function setExperience($experience){
        $this->experience = $experience;
    }

}