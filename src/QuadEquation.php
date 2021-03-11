<?php
namespace Plastinin;
use core\EquationInterface;
class QuadEquation extends LineEquation implements EquationInterface{
    protected $x_;
    protected function discriminant($a,$b,$c){
        return $b*$b-4*$a*$c;
    }
    public function solve($a,$b,$c){
        if($a==0) {
            return $this->x_ = array($this::lineEquation($b, $c));
        }
        $d = $this->discriminant($a,$b,$c);
        if($d<0){
            throw new PlastininException("Ошибка: уравнение не имеет решений");
        }
        return $this->x_=array(((-$b+sqrt($d))/(2*$a)),((-$b-sqrt($d))/(2*$a)));
    }
}