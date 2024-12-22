<?php
function assets($url) 
{
    $real = "http://localhost/job/pro/admin/views/" .$url; 
    return $real;   
}

function uploads($url)
{
    $real = "http://localhost/job/pro/uploads/" .$url;
    return $real;
}

function controllers($url) 
{
    $real = "http://localhost/job/pro/admin/controllers/" .$url; 
    return $real;  
}
function home($url) 
{
    $real = "http://localhost/job/pro/admin/" .$url; 
    return $real;  
}
function beActive($current)
{
    $url = $_SERVER['REQUEST_URI'];
    $url = explode('/',$url);
    $folder = $url[count($url)-2];
    return $current==$folder?"active": "";    
}

function compactData($name,$value)  
{
    $_SESSION[$name]=$value;    
}

function get($name) 
{
    return $_SESSION[$name];
}


?>