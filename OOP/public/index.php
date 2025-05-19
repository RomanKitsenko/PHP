<?php

require_once('../vendor/autoload.php');

$worker = new \App\Worker('Boris', 20, [12,22,1,4]);
$developer = new \App\Developer('Mike', 44, [12,43,2,4,5,6]);


$worker->work();
$developer->work();

$developer->setPosition('Junior+');
echo $developer->getPosition();
