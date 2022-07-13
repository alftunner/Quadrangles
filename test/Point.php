<?php

namespace test;

class Point
{
    public $x;
    public $y;

    function __construct($x, $y)
    {
        $this->x = $x;
        $this->y = $y;
    }

    function render()
    {
        echo "Point: x - {$this->x}, y - {$this->y}";
    }

    static function test() {
        echo 'test';
    }
}