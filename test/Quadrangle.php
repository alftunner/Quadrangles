<?php

namespace test;

class Quadrangle
{
    public $a, $b, $c, $d;
    public $perimeter;
    public $area;

    function __construct($a, $b, $c, $d)
    {
        $this->a = $a;
        $this->b = $b;
        $this->c = $c;
        $this->d = $d;
    }

    function render()
    {
        echo "side a: {$this->a}".'<br>'."side b: {$this->b}".'<br>'."side c: {$this->c}".'<br>'."side d: {$this->d}";
    }
}