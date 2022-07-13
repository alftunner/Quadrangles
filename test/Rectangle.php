<?php

namespace test;

class Rectangle extends Quadrangle
{
    public $alpha;

    /**
     * @throws \Exception
     */
    function __construct($a, $b, $c, $d, $alpha)
    {
        if ($this->isRectangle($a, $b, $c, $d, $alpha)) {
            $this->alpha = $alpha;
        } else {
            throw new \Exception("Данная фигура не является 4-x угольником");
        }
    }

    function calcArea()
    {
        $this->area = $this->a * $this->b;
    }

    function calcPerimeter()
    {
        $this->perimeter = 2 * ($this->a + $this->b);
    }

    function isRectangle($a, $b, $c, $d, $alpha)
    {
        $sides = [$a, $b, $c, $d];
        sort($sides);
        if ($sides[0] == $sides[1] && $sides[2] == $sides[3] && $alpha == 90) {
            $this->a = $sides[0];
            $this->c = $sides[0];
            $this->b = $sides[2];
            $this->d = $sides[2];
            return true;
        } else {
            return false;
        }
    }
}