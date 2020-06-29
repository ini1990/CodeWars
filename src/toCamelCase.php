<?php

namespace CodeWars;

function toCamelCase($str)
{
    return $str[0] . substr(str_replace(['_', '-', ' '], '', ucwords(str_replace(['_' , '-'], ' ', $str))), 1);
}
