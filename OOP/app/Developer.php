<?php

namespace App;

class Developer extends Worker
{
    use HasRest;

    protected string $position = 'Junior';

    public function work(){
    }
}