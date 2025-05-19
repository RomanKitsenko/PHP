<?php

require_once 'User.php';
require_once 'Student.php';
require_once 'Arr.php';


$student = new Student('John');
echo $student->getCourse();
$student->transferToNextCourse();
echo $student->getCourse();

echo '--------------------------------';
echo '<br>';


$arr = new Arr([11, 16, 18]);
echo $arr->addOne(11)->addOne(212)->addToArray([888,78,78,56])->getSum();
echo '<br>';
$test_arr = [12, 23, 54];
$arr->addToArray($test_arr);
var_dump($arr);
echo '<br>';
echo '--------------------------------';
echo '<br>';

