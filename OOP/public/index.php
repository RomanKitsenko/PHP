<?php

require_once('../vendor/autoload.php');

$worker = new \App\Worker('Boris', 20, [12,22,1,4]);

$worker->work();

var_dump($worker);
