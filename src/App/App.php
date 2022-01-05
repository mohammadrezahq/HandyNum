<?php

namespace Mor\Handynum\App;

use Mor\Handynum\App\Compare;
use Mor\Handynum\App\Operator;
use Mor\Handynum\App\Transform;

class App 
{
    use Compare, Operator, Transform;

    public static function __callStatic($name, $arguments)
    {
        return (new self)->{$name}(...$arguments);
    }
}