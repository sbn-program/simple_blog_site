<?php

define("BASE_URL", "http://localhost/simple_blog_site/");

function redirect($url){
    header("location: " . BASE_URL . $url);
    exit();
}

function asset($file){
    return trim(BASE_URL, "/ ") . "/" . trim($file , "/ ");
}

function url($url){
    return trim(BASE_URL, "/ ") . "/" . trim($url, "/ ");
}

function dd($obj){
    var_dump($obj);
}

?>