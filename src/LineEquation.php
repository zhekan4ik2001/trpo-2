<?php

namespace Plastinin;
class LineEquation
{
    protected $x;

    public function lineEquation($a, $b)
    {
        if ($a == 0) {
            throw new PlastininException("Определено, что такое уравнение не существует");
        }
        return $this->x = -$b / $a;
    }
}
