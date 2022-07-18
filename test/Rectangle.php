<?php

namespace test;

class Rectangle extends Quadrangle implements ICalculationParams
{
    use Collect;

    public $alpha;
    public $width;
    public $height;

    static function createInstanceFirst($w, $h): Rectangle
    {
        $instance = new self();
        $instance->width = $w;
        $instance->height = $h;
        return $instance;
    }

    static function createInstanceSecond($a, $b, $c, $d, $alpha): Rectangle
    {
        $instance = new self();
        if (self::isRectangle($a, $b, $c, $d, $alpha, $instance)) {
            return $instance;
        } else {
            throw new \Exception("Данная фигура не является 4-x угольником");
        }
    }

    function calcArea()
    {
        $this->area = $this->a * $this->b;
        return $this->area;
    }

    function calcPerimeter()
    {
        $this->perimeter = 2 * ($this->a + $this->b);
        return $this->perimeter;
    }

    static function isRectangle($a, $b, $c, $d, $alpha, $instance)
    {
        $sides = [$a, $b, $c, $d];
        sort($sides);
        if ($sides[0] == $sides[1] && $sides[2] == $sides[3] && $alpha == 90) {
            $instance->a = $sides[0];
            $instance->c = $sides[0];
            $instance->b = $sides[2];
            $instance->d = $sides[2];
            $instance->alpha = $alpha;
            return true;
        } else {
            return false;
        }
    }
}