<?php

namespace Mor\Handynum\App;

trait Operator 
{
    public function sum(...$numbers)
    {

        if (count($numbers) == 1) {
            if (is_array($numbers[0])) {
                $nums = [];
                foreach($numbers[0] as $number) {
                    array_push($nums, $number);
                }
                $numbers = $nums;
            }
        }

        $sum = 0;

        foreach ($numbers as $number) {
            $sum += $number;
        }

        return $sum;
    }    
    
    public function multiple(...$numbers)
    {
        if (count($numbers) == 1) {
            if (is_array($numbers[0])) {
                $nums = [];
                foreach($numbers[0] as $number) {
                    array_push($nums, $number);
                }
                $numbers = $nums;
            }
        }

        $multiple = 1;

        foreach ($numbers as $number) {
            $multiple *= $number;
        }

        return $multiple;
    }    
    
    public function div($num1, $num2)
    {
        return $num1 / $num2;
    }

    public function percent($number, $percentage, $reverse = false)
    {
        $num = $number * $percentage;
        $num /= 100;

        if ($reverse) {
            return $number - $num;
        }

        return $num;
    } 

    public function getPercentage($num1, $num2) 
    {
        return 100 * $num2 / $num1;
    }
}