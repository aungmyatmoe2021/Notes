<?php

namespace Core;
class Validator{
    public static function checkValiation($value, $min = 1, $max = INF){
        $value = trim($value);

        return strlen($value) >= $min && strlen($value) <= $max;
    }

    public static function checkEmail($value){
        return filter_var($value,FILTER_VALIDATE_EMAIL);
    }
}