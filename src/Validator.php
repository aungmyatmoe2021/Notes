<?php

class Validator{
    public function checkValiation($value, $min = 1, $max = INF){
        $value = trim($value);

        return strlen($value) >= $min && strlen($value) <= $max;
    }
}