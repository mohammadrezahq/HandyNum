<?php

namespace Mor\Handynum\App;

trait Compare 
{
    public function compare($num1, $num2) 
    {

        if ($this->isBigger($num1, $num2)) {
            return 'bigger';
        }        
        
        if ($this->isSmaller($num1, $num2)) {
            return 'smaller';
        }        
        
        if ($this->areEqual($num1, $num2)) {
            return 'equal';
        }

    }

    public function isBigger($num1, $num2, $tie = false) 
    {

        if ($num1 == $num2) {
            if ($tie == false) {
                return $num1;
            }
            return $tie;
        }

        if ($num1 > $num2) {
            return true;
        } else {
            return false;
        }

    }    

    public function isSmaller($num1, $num2, $tie = false) 
    {
        
        if ($num1 == $num2) {
            if ($tie == false) {
                return $num1;
            }
            return $tie;
        }


        if ($num1 < $num2) {
            return true;
        } else {
            return false;
        }

    }      
    
    public function areEqual($num1, $num2) 
    {

        if ($num1 == $num2) {
            return true;
        }

        return false;

    }

    
    public function bigger($num1, $num2, $tie = false) 
    {

        if ($num1 == $num2) {
            if ($tie == false) {
                return $num1;
            }
            return $tie;
        }

        if ($num1 > $num2) {
            return $num1;
        } else {
            return $num2;
        }

    }    
    
    public function smaller($num1, $num2, $tie = false) 
    {
        
        if ($num1 == $num2) {
            if ($tie == false) {
                return $num1;
            }
            return $tie;
        }

        if ($num1 < $num2) {
            return $num1;
        } else {
            return $num2;
        }

    }

    public function inPercentage($num1, $percentage, $num2)
    {
        $percent = $this->percent($num1, $percentage);

        if ($num2 <= $percent) {
            return true;
        }

        return false;
    }
}