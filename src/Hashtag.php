<?php

namespace CodeWars;

function generateHashtag($str)
{
    $result = implode(array_filter(explode(' ', ucwords($str))));
    return ($result && strlen($result) < 140) ? "#" . $result : false;
}
