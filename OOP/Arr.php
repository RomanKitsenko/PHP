<?php

class Arr {
    private $numbers = [];

    public function __construct($array) {
        $this->numbers = array_merge($this->numbers, $array);
    }

    public function getNumbers() {
        return $this->numbers;
    }

    public function getAvg() {
        return array_sum($this->numbers) / count($this->numbers);
    }
    
    public function getSum() {
        return array_sum($this->numbers); 
    }

    public function addOne($number){
        $this->numbers[] = $number;
        return $this;
    }

    public function addToArray($array) {
        $this->numbers = array_merge($this->numbers, $array);
        return $this;
    }


}