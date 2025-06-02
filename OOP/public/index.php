<?php

require_once('../vendor/autoload.php');

$developer = new \App\Developer('Mike', 44, [12,43,2,4,5,6]);

$developer->work();

$developer->setPosition('Junior+');
$developer->rest();
echo $developer->getPosition();
