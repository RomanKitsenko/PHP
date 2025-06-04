<?php

require_once('../vendor/autoload.php');

$developer = new \App\Developer('Mike', 44, [12,43,2,4,5,6]);

$salary = \App\Salary::count($developer->getHours());
var_dump(\App\Salary::$totalHours);
var_dump($salary);