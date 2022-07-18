<?php

namespace test;

abstract class Quadrangle
{
    public $a, $b, $c, $d;
    public $perimeter;
    public $area;

    function render()
    {
        echo "side a: {$this->a}".'<br>'."side b: {$this->b}".'<br>'."side c: {$this->c}".'<br>'."side d: {$this->d}";
    }
}