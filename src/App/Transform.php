<?php

namespace Mor\Handynum\App;

trait Transform
{
    public function square($num)
    {
        return $num * $num;
    }

    public function root($num, $root)
    {
        $return = $num / $root;

        $return = (Int) $return;
    
        while($return !== 1) {
            if ($this->exponent($return, $root) == $num) {
                return $return;
            }
            $return--;
        }

        return null;
    }

    public function exponent($num, $exponent = 2) 
    {
        if ($num == 0) {
            return 0;
        }

        if ($exponent < 0) {
            return "Exponent can't be lower than 0.";
        }

        if ($exponent == 0) {
            return 1;
        }

        if ($exponent == 1) {
            return $num;
        }

        $return = $num;

        while ($exponent !== 1) {

            $return *= $num;

            $exponent--;

        }

        return $return;
    }
}