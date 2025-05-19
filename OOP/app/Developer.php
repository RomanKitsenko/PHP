<?php

namespace App;

class Developer extends Worker
{
    protected string $position = 'Junior';

    public function work(){
        echo 'I\'m developing ';
    }
}