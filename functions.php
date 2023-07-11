<?php
function dd($val)
{
    echo "<pre>";
    var_dump($val);
    echo "</pre>";

    die();
}
function UrlIs($var)
{
    return $_SERVER["REQUEST_URI"] === $var;
}
