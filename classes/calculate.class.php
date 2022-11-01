<?php

class calculate
{
    private $result;

    function  __construct($number)
    {
        $this->result = $number;
    }
    function sum($number)
    {
        $this->result += $number;
        return $this;
    }
    function sub($number)
    {
        $this->result -= $number;
        return $this;
    }
    function mul($number)
    {
        $this->result *= $number;
        return $this;
    }
    function div($number)
    {
        $this->result /= $number;
        return $this;
    }
    function print()
    {
        return "<h2>" . $this->result . "</h2>";
    }
}
