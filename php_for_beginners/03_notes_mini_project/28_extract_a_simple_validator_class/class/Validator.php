<?php

class Validator
{
    public static function required($value)
    {
        return empty(trim($value));
    }

    public static function moreThan($value, $min)
    {
        return strlen($value) > $min;
    }

    public static function lessThan($value, $max)
    {
        return strlen($value) < $max;
    }
}