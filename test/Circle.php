<?php

namespace test;

class Circle extends Point implements ICalculationParams
{
    use Collect;

    protected $radius;

    function __construct($x, $y, $r) {
        parent::__construct($x, $y);
        $this->radius = $r;
    }

    function render()
    {
        echo "Центр круга с координатами: X - {$this->x}; Y - {$this->y}</br>Радиус: {$this->radius}";
    }

    function calcPerimeter()
    {
        return 2 * ICalculationParams::PI * $this->radius;
    }

    function calcArea()
    {
        return ICalculationParams::PI * pow($this->radius, 2);
    }
}