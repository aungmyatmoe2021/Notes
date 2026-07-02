<?php

function dd($value){
    echo "<pre>";
    var_dump($value);
    echo "<pre>";
    die();
}

function isURL($url){
    return $_SERVER['REQUEST_URI'] === $url;
}

function isError($code){
    return (str_contains($code,"404") || str_contains($code,"403")) ? true : false;
}

function isCheckScript($data){
    return str_contains($data,"<script>");
}

function authorise($condition, $status = Response::FORBIDDEN){
    if(!$condition){
        absort($status);
    }
}